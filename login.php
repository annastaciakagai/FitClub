<?php
session_start();
require_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['loginSubmit'])) {
    // Retrieve form data
    $loginEmail = $_POST['loginEmail'];
    $loginPassword = $_POST['loginPassword'];

    // Your SQL query to check if the user exists
    $stmt = $conn->prepare("SELECT id, email, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $loginEmail);
    $stmt->execute();
    $stmt->bind_result($user_id, $email, $hashed_password);
    $stmt->fetch();

    if ($user_id && password_verify($loginPassword, $hashed_password)) {
        // Set session variables upon successful login
        $_SESSION['user_id'] = $user_id;
        $_SESSION['email'] = $email;
        
        echo "Login successful!";
        // Redirect to the user's dashboard or another page
    } else {
        echo "Invalid email or password";
    }

    $stmt->close();
}

$conn->close();
?>
