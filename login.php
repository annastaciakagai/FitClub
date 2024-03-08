<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "meals";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $loginEmail = $_POST['loginEmail'];
    $loginPassword = $_POST['loginPassword'];

  // **Database Query (using prepared statement)**
  $sql = "SELECT id, email, password FROM user WHERE email = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("s", $loginEmail);
  $stmt->execute();
  $stmt->bind_result($user_id, $email, $hashed_password);
  $stmt->fetch();

    if ($user_id && password_verify($loginPassword, $hashed_password)) {
        // Set session variables upon successful login
        $_SESSION['user_id'] = $user_id;
        $_SESSION['email'] = $email;
      header("Location: dashboard.html"); // Replace with your welcome page
    } else {
      $error = "Invalid username or password.";
    }
  } else {
    $error = "Invalid username or password.";
  }

  $stmt->close();


$conn->close();

?>

<!DOCTYPE html>
<html>
<body>

<?php if(isset($error)) {  
    $error = "invalid login";
    }
?>