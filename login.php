<?php
include "db_connect.php";

$username = "";
$password = "";
$error = "";
$success_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (empty($username) || empty($password)) {
        $error = "Username and password are required.";
    } else {
        $sql = "SELECT * FROM customers WHERE username='$username'";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            if (password_verify($password, $row['password'])) {
                $success_message = "Login successful. Welcome, $username!";
            } else {
                $error = "Invalid password. Please try again.";
            }
        } else {
            $error = "Username not found. Please register first.";
        }
    }
    if (!empty($success_message)) {
      header("Location: index.php");
      exit();
  }
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Skins Store - Login</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="navbar">
    <div class="left">
      <a href="index.php" class="logo">AKS</a>
    </div>
    <div class="right">
    </div>
  </div>
<main>
    <div class="login-container" style="margin-top: 30px;">
        <h2>Login</h2>
        <?php if (!empty($error)): ?>
            <p style="color: red;"><?php echo $error; ?></p>
        <?php elseif (!empty($success_message)): ?>
            <p style="color: green;"><?php echo $success_message; ?></p>
        <?php endif; ?>
        <form id="login-form" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required value="<?php echo htmlspecialchars($username); ?>">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" style="margin-bottom: 10px;">Login</button>
        </form>
        <div style="display: flex; align-items: center;">
            <p style="margin-right: 10px;">Don't have an account?</p>
            <a href="register.php" style="background-color: #f63; padding: 0.5rem 1rem; border-radius: 5px; color: #fff; text-decoration: none;">Register</a>
        </div>
    </div>
</main>
<footer>
    <!-- Your footer code here -->
</footer>
<script src="script.js"></script>
</body>
</html>
