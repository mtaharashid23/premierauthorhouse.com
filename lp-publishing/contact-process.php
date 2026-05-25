<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "info@premierauthorhouse.com"; 
    $brand_name = "Premier Author House";

    // 1. Source Track Karna
    // Agar formType empty hai toh iska matlab main brand se entry hai
    $form_source = isset($_POST['formType']) ? strip_tags(trim($_POST['formType'])) : "";

    // 2. Data collect karna
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $phone = strip_tags(trim($_POST["phone"]));
    
    $subject_input = isset($_POST['customers_meta']['subject']) ? $_POST['customers_meta']['subject'] : "New Inquiry";
    $message_input = isset($_POST['customers_meta']['message']) ? $_POST['customers_meta']['message'] : "No message provided";

    // Validation
    if (empty($name) || empty($email) || empty($phone)) {
        echo json_encode(['status' => 'error', 'message' => 'Please fill all required fields.']);
        exit;
    }

    // 3. Condition: Agar LP se entry hai toh subject aur body mein source dikhao
    if (!empty($form_source)) {
        $email_subject = "New Lead: [$form_source] - $name";
        $source_line = "<p><span style='font-weight:bold; color:#f49834;'>Source LP:</span> $form_source</p>";
    } else {
        // Agar Main Brand hai toh normal subject aur koi source line nahi
        $email_subject = "New Website Lead: $name - $brand_name";
        $source_line = ""; 
    }

    // 4. Email Body
    $email_content = "
    <html>
    <head>
        <style>
            .container { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
            .header { background: #f49834; color: white; padding: 15px; text-align: center; }
            .content { padding: 20px; border: 1px solid #eee; }
            .label { font-weight: bold; color: #1a1a1a; }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'><h2>New Inquiry Received</h2></div>
            <div class='content'>
                $source_line
                <p><span class='label'>Name:</span> $name</p>
                <p><span class='label'>Email:</span> $email</p>
                <p><span class='label'>Phone:</span> $phone</p>
                <p><span class='label'>Subject:</span> $subject_input</p>
                <p><span class='label'>Message:</span><br>$message_input</p>
            </div>
        </div>
    </body>
    </html>";

    // Headers
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: $brand_name Leads <no-reply@premierauthorhouse.com>" . "\r\n";
    $headers .= "Reply-To: $email" . "\r\n";

    // Mail bhejna
    if (mail($to, $email_subject, $email_content, $headers)) {
        echo json_encode(['status' => 'success', 'message' => 'Thank you! Your message has been sent.']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Oops! Mail server error.']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Direct access not allowed.']);
}
?>