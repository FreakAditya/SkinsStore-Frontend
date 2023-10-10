<?php
include "db_connect.php";

$username = "";
$password = "";
$confirm_password = "";
$error = "";
$success_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm-password"];

    if (empty($username) || empty($password) || empty($confirm_password)) {
        $error = "All fields are required.";
    } elseif ($password !== $confirm_password) {
        $error = "Passwords do not match.";
    } else {
        $sql = "SELECT * FROM customers WHERE username='$username'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $error = "Username already exists. Please choose a different username.";
        } else {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $insert_sql = "INSERT INTO customers (username, password) VALUES ('$username', '$hashed_password')";

            if ($conn->query($insert_sql) === TRUE) {
                $success_message = "You are successfully registered. Please login to continue.";
            } else {
                $error = "Error: " . $conn->error;
            }
        }
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Skins Store - Register</title>
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
        <h2>Register</h2>
        <?php if (!empty($error)): ?>
            <p style="color: red;"><?php echo $error; ?></p>
        <?php elseif (!empty($success_message)): ?>
            <p style="color: green;"><?php echo $success_message; ?></p>
        <?php endif; ?>
        <form id="register-form" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required value="<?php echo htmlspecialchars($username); ?>">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="confirm-password">Confirm Password:</label>
                <input type="password" id="confirm-password" name="confirm-password" required>
            </div>
            <button type="submit" style="margin-bottom: 10px;">Register</button>
        </form>
        <div style="display: flex; align-items: center;">
            <p style="margin-right: 10px;">Already have an account?</p>
            <a href="login.php" style="background-color: #f63; padding: 0.5rem 1rem; border-radius: 5px; color: #fff; text-decoration: none;">Login</a>
        </div>
    </div>
</main>
<footer>
    <!-- Your footer code here -->
</footer>
<script src="script.js"></script>
</body>
</html>
