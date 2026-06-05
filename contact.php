<?php
// Simple contact form handler
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = htmlspecialchars($_POST['firstname'] ?? '');
    $lastname = htmlspecialchars($_POST['lastname'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $project_type = htmlspecialchars($_POST['project_type'] ?? '');
    $message = htmlspecialchars($_POST['message'] ?? '');
    
    $to = "sabbuildwell@gmail.com";
    $subject = "New Contact Form Submission - SAB Buildwell";
    
    $body = "Name: $firstname $lastname\n";
    $body .= "Email: $email\n";
    $body .= "Project Type: $project_type\n";
    $body .= "Message:\n$message\n";
    
    $headers = "From: $email";
    
    // Note: In production, configure mail server properly
    // For now, we'll just redirect back with success
    header("Location: index.php?contact=success#contact");
    exit();
} else {
    header("Location: index.php");
    exit();
}
?>
