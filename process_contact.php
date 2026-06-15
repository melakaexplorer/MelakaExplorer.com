<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = filter_var(trim($_POST['name'] ?? ''), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
    $phone = filter_var(trim($_POST['phone'] ?? ''), FILTER_SANITIZE_STRING);
    $subject = filter_var(trim($_POST['subject'] ?? ''), FILTER_SANITIZE_STRING);
    $message = filter_var(trim($_POST['message'] ?? ''), FILTER_SANITIZE_STRING);
    
    $errors = [];
    
    if (empty($name) || strlen($name) < 2) {
        $errors[] = "Please enter a valid name (at least 2 characters).";
    }
    
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Please enter a valid email address.";
    }
    
    if (empty($subject)) {
        $errors[] = "Please select an inquiry type.";
    }
    
    if (empty($message) || strlen($message) < 10) {
        $errors[] = "Please enter a message with at least 10 characters.";
    }
    
    if (empty($errors)) {
        $data = "========================================\n";
        $data .= "Date: " . date('Y-m-d H:i:s') . "\n";
        $data .= "Name: $name\n";
        $data .= "Email: $email\n";
        $data .= "Phone: $phone\n";
        $data .= "Subject: $subject\n";
        $data .= "Message: $message\n";
        $data .= "IP Address: " . $_SERVER['REMOTE_ADDR'] . "\n";
        $data .= "========================================\n\n";
        
        file_put_contents('inquiries.txt', $data, FILE_APPEND | LOCK_EX);
        
        $_SESSION['form_message'] = "✅ Thank you $name! Your inquiry has been received. Our Melaka tourism team will respond within 24 hours.";
        $_SESSION['form_type'] = "success";
        
    } else {
        $_SESSION['form_message'] = "❌ Please fix the following errors:<br>" . implode("<br>", $errors);
        $_SESSION['form_type'] = "error";
    }
    
    header("Location: contact.php");
    exit();
    
} else {
    header("Location: contact.php");
    exit();
}
?>