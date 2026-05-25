<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "info@premierauthorhouse.com"; // Aapka email
    $brand_name = "Premier Author House";

    // Data collect karna
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $phone = strip_tags(trim($_POST["phone"]));
    
    // Customers Meta handling (Subject aur Message)
    $subject_input = isset($_POST['customers_meta']['subject']) ? $_POST['customers_meta']['subject'] : "New Lead from Website";
    $message_input = isset($_POST['customers_meta']['message']) ? $_POST['customers_meta']['message'] : "No message provided";

    // Validation
    if (empty($name) || empty($email) || empty($phone)) {
        echo json_encode(['status' => 'error', 'message' => 'Please fill all required fields.']);
        exit;
    }

    // Email Body
    $email_content = "<h2>New Inquiry from $brand_name</h2>";
    $email_content .= "<p><strong>Name:</strong> $name</p>";
    $email_content .= "<p><strong>Email:</strong> $email</p>";
    $email_content .= "<p><strong>Phone:</strong> $phone</p>";
    $email_content .= "<p><strong>Subject:</strong> $subject_input</p>";
    $email_content .= "<p><strong>Message:</strong><br>$message_input</p>";

    // Headers
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: $brand_name <no-reply@premierauthorhouse.com>" . "\r\n";
    $headers .= "Reply-To: $email" . "\r\n";

    // Mail bhejna
    if (mail($to, "Lead: $subject_input", $email_content, $headers)) {
        echo json_encode(['status' => 'success', 'message' => 'Thank you! Your message has been sent.']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Oops! Something went wrong, we couldn\'t send your message.']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Direct access not allowed.']);
}
?>