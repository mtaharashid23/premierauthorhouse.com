<?php
session_start();

// Check required field
if (empty($_GET['email']) || !filter_var($_GET['email'], FILTER_VALIDATE_EMAIL)) {
    header('Location: index.php');
    exit;
}

// Sanitize inputs
$sender_name  = isset($_GET['name'])    ? htmlspecialchars(strip_tags($_GET['name']))    : 'N/A';
$sender_email = filter_var($_GET['email'], FILTER_SANITIZE_EMAIL);
$phone        = isset($_GET['phone'])   ? htmlspecialchars(strip_tags($_GET['phone']))   : 'N/A';
$message      = isset($_GET['message']) ? htmlspecialchars(strip_tags($_GET['message'])) : 'N/A';
$service      = isset($_GET['service']) ? htmlspecialchars(strip_tags($_GET['service'])) : '';
$number       = isset($_GET['number'])  ? htmlspecialchars(strip_tags($_GET['number']))  : $phone;

$recipient_email = 'info@premierauthorhouse.com';
$subject         = 'New Query - Premier Author House';

// Build email body (HTML)
$html_body = '
<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"></head>
<body style="font-family:Arial,sans-serif;background:#f4f4f4;padding:20px;">
  <div style="max-width:600px;margin:auto;background:#fff;border-radius:8px;overflow:hidden;box-shadow:0 2px 8px rgba(0,0,0,0.1);">
    <div style="background:#590016;padding:20px 30px;">
      <h2 style="color:#FFCE1A;margin:0;">New Query Received</h2>
      <p style="color:#fff;margin:4px 0 0;">' . $subject . '</p>
    </div>
    <div style="padding:30px;">
      <table style="width:100%;border-collapse:collapse;">
        <tr><td style="padding:10px;font-weight:bold;width:140px;color:#590016;">Name:</td><td style="padding:10px;border-bottom:1px solid #eee;">' . $sender_name . '</td></tr>
        <tr><td style="padding:10px;font-weight:bold;color:#590016;">Email:</td><td style="padding:10px;border-bottom:1px solid #eee;"><a href="mailto:' . $sender_email . '">' . $sender_email . '</a></td></tr>
        <tr><td style="padding:10px;font-weight:bold;color:#590016;">Phone:</td><td style="padding:10px;border-bottom:1px solid #eee;">' . $number . '</td></tr>';

if (!empty($service)) {
    $html_body .= '<tr><td style="padding:10px;font-weight:bold;color:#590016;">Service:</td><td style="padding:10px;border-bottom:1px solid #eee;">' . $service . '</td></tr>';
}

$html_body .= '
        <tr><td style="padding:10px;font-weight:bold;color:#590016;vertical-align:top;">Message:</td><td style="padding:10px;">' . nl2br($message) . '</td></tr>
      </table>
    </div>
    <div style="background:#f9f9f9;padding:15px 30px;text-align:center;font-size:12px;color:#999;">
      This email was sent from your website contact form.
    </div>
  </div>
</body>
</html>';

// Plain text fallback
$plain_body  = "New Query Received\n";
$plain_body .= "==================\n";
$plain_body .= "Name:    $sender_name\n";
$plain_body .= "Email:   $sender_email\n";
$plain_body .= "Phone:   $number\n";
if (!empty($service)) $plain_body .= "Service: $service\n";
$plain_body .= "Message: $message\n";

// Build headers
$boundary = md5(time());
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: multipart/alternative; boundary=\"$boundary\"\r\n";
$headers .= "From: Premier Author House <info@premierauthorhouse.com>\r\n";
$headers .= "Reply-To: $sender_email\r\n";
$headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";

$body  = "--$boundary\r\n";
$body .= "Content-Type: text/plain; charset=UTF-8\r\n";
$body .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
$body .= $plain_body . "\r\n";
$body .= "--$boundary\r\n";
$body .= "Content-Type: text/html; charset=UTF-8\r\n";
$body .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
$body .= $html_body . "\r\n";
$body .= "--$boundary--\r\n";

// Send via normal PHP mail()
$success = @mail($recipient_email, $subject, $body, $headers);

// Handle AJAX / fetch() request
$is_ajax  = !empty($_SERVER['HTTP_X_REQUESTED_WITH']) &&
            strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest';
$is_fetch = isset($_SERVER['HTTP_SEC_FETCH_MODE']);

if ($is_ajax || $is_fetch) {
    header('Content-Type: application/json');
    if ($success) {
        echo json_encode(['status' => 'success', 'message' => 'Email sent successfully']);
    } else {
        http_response_code(500);
        echo json_encode(['status' => 'error', 'message' => 'Failed to send email']);
    }
    exit;
}

// Normal redirect
if ($success) {
    $_SESSION['email_sent'] = true;
    header('Location: thankyou');
} else {
    $_SESSION['email_sent'] = false;
    header('Location: index.php');
}
exit;
?>