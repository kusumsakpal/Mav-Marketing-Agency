<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $fname = isset($_POST['fname']) ? htmlspecialchars($_POST['fname']) : '';
    $lname = isset($_POST['lname']) ? htmlspecialchars($_POST['lname']) : '';
    $company = isset($_POST['company']) ? htmlspecialchars($_POST['company']) : '';
    $email = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) : '';
    $tel = isset($_POST['tel']) ? htmlspecialchars($_POST['tel']) : '';
    $message = isset($_POST['msg']) ? htmlspecialchars($_POST['msg']) : '';

    // Validate required fields
    if ($fname && $email && $message) {
        // Recipient's email address
        $to = "Ruaa@mavmedia.agency";

        // Email subject
        $subject = "Mail From Website";

        // Email body
        $body = "Client's Name: $fname\n" .
                "Client's Last Name: $lname\n" .
                "Company Name: $company\n" .
                "Email Address: $email\n" .
                "Phone Number: $tel\n" .
                "Message: $message";

        // Set additional headers
        $headers = "From: Ruaa@mavmedia.agency\r\n" .
                   "Reply-To: $email\r\n" .
                   "X-Mailer: PHP/" . phpversion();

        // Send the email
        if (mail($to, $subject, $body, $headers)) {
            // Email sent successfully
            header("Location: thankyou.html");
            exit;
        } else {
            // Failed to send the email
            echo "Failed to send the email. Please try again later.";
        }
    } else {
        // Required fields not filled
        echo "Please fill all the required fields.";
    }
}
?>
