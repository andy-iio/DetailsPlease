<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $description = $_POST["description"];

    // Validate input and send email
    if (!empty($name) && !empty($email) && !empty($description)) {
        // Set your email address here
        $to = "andyguest122@gmail.com";

        $subject = "New Request from $name";
        $message = "Name: $name\nEmail: $email\nDescription:\n$description";

        if (mail($to, $subject, $message)) {
            echo "Request sent successfully!";
        } else {
            echo "Failed to send request. Please try again later.";
        }
    } else {
        echo "Please fill in all the fields.";
    }
}
?>
