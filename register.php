<?php
require_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    // Retrieve form data
    $username = $_POST['username'];
    $lastname = $_POST['lastname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password']; // Assuming you have a password field in your form

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Your SQL query to insert user data into the database
    $stmt = $conn->prepare("INSERT INTO users (username, lastname, phone, email, password) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $username, $lastname, $phone, $email, $hashed_password);

    if ($stmt->execute()) {
        echo "Registration successful!";
        // Redirect to login page or any other page after successful registration
    } else {
        echo "Error during registration: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
