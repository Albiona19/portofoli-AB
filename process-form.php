<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $project = $_POST['project'];
    
    // Këtu mund të përdorni të dhënat e marra për t'i dërguar ato përmes emailit, ruajtjes në bazë të të dhënave, ose përpunime të tjera
    // Për shembull, mund të dërgoni emailin:

    $to = "albiona.berisha66@outlook.com";
    $subject = "New Project Submission";
    $message = "Full Name: " . $fullname . "\nEmail: " . $email . "\nProject: " . $project;
    
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);
    
    echo "Emaili është dërguar me sukses!";
}
?>
