<?php

if(isset($_POST['submit'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Connect to the MySQL database
  $conn = mysqli_connect('localhost', 'root', '', 'fpsnew');
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  // Prepare the SELECT statement to check if the user exists
  $query = "SELECT user_id FROM users WHERE email = '$email' AND password = '$password'";
  $result = mysqli_query($conn, $query);

  // If the user exists, start a new session and redirect to the dashboard
  if (mysqli_num_rows($result) > 0) {
    session_start();
    $_SESSION['email'] = $email;
    header("Location: dashboard.php");
  } else {
    // If the user does not exist, show an error message
    echo '<script>alert("Incorrect email or password. Please try again.");</script>';
  }

  // Close the database connection
  mysqli_close($conn);
}

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css">
  <title>Login Form</title>
</head>
<body>
  <form action="" method="post">
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" name="submit" value="Login">
  </form>
</body>
</html>
