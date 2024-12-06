<?php
require_once('dbconfig.php');

$status="error";
$statusMessage = "Oops! Something went wrong, Please try again.";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Validate input
    if (empty($name) || empty($email) || empty($phone) || empty($subject) || empty($message)) {
        echo json_encode(["status"=>"error","message"=>"All fields are required."]);exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(["status"=>"error","message"=>"Invalid email address."]);exit;
    }
    
    $secret_key = '6Le_UCgqAAAAABMOWT5yGejLcsepMJQSuKioBLyb';
    $recaptcha = $_POST['g-recaptcha-response'];

    $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . $secret_key . '&response=' . $recaptcha;
    
    $response = file_get_contents($url);

    $response = json_decode($response);
    
    if ($response->success != true) {
        echo json_encode(["status"=>"error","message"=>"reCAPTCHA verification failed. Please try again."]);exit;
    }

    // Prepare email
    $to = "contact@pemaxx.com"; // Replace with your email address
    $subject = $subject;
    $body = "Name: $name\n\n";
    $body .= "Email: $email\n\n";
    $body .= "Phone: $phone\n\n";
    $body .= "Message:\n$message\n";
    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        // Prepare and bind
        $stmt = $conn->prepare("INSERT INTO enquiries (name, email, phone, subject, message) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $name, $email, $phone, $subject, $message);

        // Execute and check if insertion was successful
        if ($stmt->execute()) {
            $status = 'success';
            $statusMessage = "Thank you for contacting us. We will get back to you soon.";
        } else {
            $status = 'error';
            $statusMessage = "Error: " . $stmt->error;
        }

        $stmt->close();
        $conn->close();
    } else {
        $status = 'error';
        $statusMessage = "Sorry, there was an error sending your message. Please try again later.";
    }

    echo json_encode(["status"=>$status,"message"=>$statusMessage]);exit;
    
}

echo json_encode(["status"=>$status,"message"=>$statusMessage]);exit;
?>
