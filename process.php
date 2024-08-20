<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize user input to prevent XSS
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = htmlspecialchars(trim($_POST["email"]));

    // Display a personalized greeting message
    echo "<h2>Hello, " . $name . "!</h2>";
    echo "<p>Your email address is: " . $email . "</p>";
} else {
    // Handle incorrect form access
    echo "<h2>Error</h2>";
    echo "<p>This page was accessed incorrectly. Please submit the form first.</p>";
}
?>
