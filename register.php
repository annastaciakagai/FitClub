<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "meals";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // **Data Validation and Sanitization** (replace with your validation logic)
  $username = htmlspecialchars($_POST["username"]);
  $lastname = htmlspecialchars($_POST["lastname"]);
  $email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
  $password = $_POST["password"];

  if (empty($username) || empty($lastname) || empty($email) || empty($password)) {
    $error = "Please fill out all required fields.";
  } else {

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO user (username, lastname, email, password) VALUES ('$username', '$lastname', '$email', '$hashed_password')";

    if ($conn->query($sql) === TRUE) {
      $message = "Registration successful!";
      header("location: dashboard.html");
    } else {
      $error = "Error: " . $sql . "<br>" . $conn->error;
    }
  }
}

$conn->close();

?>

<!DOCTYPE html>
<html>
<body>

<?php if(isset($error)) {  // Display error message if it exists
  echo "<p style='color: red;'>$error</p>";
} ?>

<?php if(isset($message)) { // Display success message if it exists
  echo "<p style='color: green;'>$message</p>";
} ?>

</body>
</html>
