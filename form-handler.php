<?php
/**
 * form-handler.php - Premier Author House
 * AJAX form handler with validation, spam protection, and email sending
 */

header('Content-Type: application/json');
header('X-Content-Type-Options: nosniff');

// Only accept POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Invalid request method.']);
    exit;
}

// ── Honeypot spam check ──────────────────────────────────────────────────────
if (!empty($_POST['honeypot'])) {
    // Silently succeed to fool bots
    echo json_encode(['success' => true, 'message' => 'Thank you! We will be in touch shortly.']);
    exit;
}

$to_email = 'info@premierauthorhouse.com';
$form_source = isset($_POST['form_source']) ? htmlspecialchars($_POST['form_source']) : 'website';
$errors = [];

// ── Sanitize helpers ─────────────────────────────────────────────────────────
function clean($val) {
    return htmlspecialchars(trim(strip_tags($val ?? '')));
}
function valid_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}
function valid_phone($phone) {
    return preg_match('/^[0-9\s\+\-\(\)]{7,20}$/', $phone);
}

// ── Field extraction (handles both form layouts) ──────────────────────────────
$name    = clean($_POST['name']   ?? $_POST['fname'] ?? '');
$email   = clean($_POST['email']  ?? '');
$phone   = clean($_POST['phone']  ?? $_POST['number'] ?? '');
$service = clean($_POST['services'] ?? '');
$budget  = clean($_POST['Budget'] ?? '');
$message = clean($_POST['msg']    ?? $_POST['message'] ?? '');

// ── Validation ───────────────────────────────────────────────────────────────
if (strlen($name) < 2)       $errors[] = 'Please enter your full name.';
if (!valid_email($email))    $errors[] = 'Please enter a valid email address.';
if (!valid_phone($phone))    $errors[] = 'Please enter a valid phone number.';
if (empty($service))         $errors[] = 'Please select a service.';

if (!empty($errors)) {
    echo json_encode(['success' => false, 'message' => implode(' ', $errors)]);
    exit;
}

// ── Rate limiting (simple session-based) ─────────────────────────────────────
session_start();
$now = time();
if (isset($_SESSION['last_submit']) && ($now - $_SESSION['last_submit']) < 60) {
    echo json_encode(['success' => false, 'message' => 'Please wait a moment before submitting again.']);
    exit;
}
$_SESSION['last_submit'] = $now;

// ── Build email ───────────────────────────────────────────────────────────────
$subject = "New Inquiry from Premier Author House Website - {$form_source}";

$body  = "New form submission received from premierauthorhouse.com\n";
$body .= str_repeat('-', 50) . "\n";
$body .= "Form Source : {$form_source}\n";
$body .= "Name        : {$name}\n";
$body .= "Email       : {$email}\n";
$body .= "Phone       : {$phone}\n";
$body .= "Service     : {$service}\n";
if ($budget) $body .= "Budget      : {$budget}\n";
if ($message) $body .= "Message     : {$message}\n";
$body .= str_repeat('-', 50) . "\n";
$body .= "Submitted   : " . date('Y-m-d H:i:s') . "\n";
$body .= "IP Address  : " . ($_SERVER['REMOTE_ADDR'] ?? 'unknown') . "\n";

$headers  = "From: info@premierauthorhouse.com\r\n";
$headers .= "Reply-To: {$email}\r\n";
$headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// ── Send email ────────────────────────────────────────────────────────────────
$sent = mail($to_email, $subject, $body, $headers);

if ($sent) {
    // Auto-reply to user
    $reply_subject = "Thank you for contacting Premier Author House";
    $reply_body  = "Dear {$name},\n\n";
    $reply_body .= "Thank you for reaching out to Premier Author House!\n\n";
    $reply_body .= "We have received your inquiry and one of our publishing experts will contact you within 24 hours.\n\n";
    $reply_body .= "Your submission details:\n";
    $reply_body .= "Service: {$service}\n";
    if ($budget) $reply_body .= "Budget: {$budget}\n";
    $reply_body .= "\nIf you need immediate assistance, please call us at (512) 842-9394 or email info@premierauthorhouse.com\n\n";
    $reply_body .= "Best regards,\nThe Premier Author House Team\nhttps://premierauthorhouse.com";
    $reply_headers  = "From: info@premierauthorhouse.com\r\n";
    $reply_headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
    mail($email, $reply_subject, $reply_body, $reply_headers);

    echo json_encode(['success' => true, 'message' => 'Thank you! Your message has been sent. We will contact you within 24 hours.']);
} else {
    error_log("Mail failed for form submission from: {$email}");
    echo json_encode(['success' => false, 'message' => 'Sorry, there was an issue sending your message. Please call us at (512) 842-9394.']);
}
?>
