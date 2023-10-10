<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Skins Store - User</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="navbar">
    <div class="left">
      <a href="index.php" class="logo">AKS</a>
      <a href="MobileSkin.php">Mobile Skins</a>
      <a href="#" id="laptop-skins-link">Laptop Skins</a>
      <a href="bestseller.php">Best Sellers</a>
      <a href="trending.php">Trending Skins</a>
    </div>
    <div class="right">
      <a href="about.php">About</a>
      <a href="contact.php">Contact Us</a>
      <a href="user.php">User</a>
    </div>
  </div>
  <main>
    <div class="login-container" style="max-width: 400px; margin: 0 auto; padding: 2rem; border: 1px solid #ccc; border-radius: 5px; margin-top: 100px;">
      <h2 style="font-size: 1.5rem; margin-bottom: 1rem;">User Options</h2>
      <div class="form-group" style="margin-bottom: 1rem;">
        <a href="login.php" class="user-option" style="background-color: #f63; color: #fff; padding: 0.5rem 1rem; font-size: 1rem; border: none; border-radius: 5px; cursor: pointer; text-decoration: none; display: inline-block; margin-right: 10px;">Login</a>
        <a href="register.php" class="user-option" style="background-color: #f63; color: #fff; padding: 0.5rem 1rem; font-size: 1rem; border: none; border-radius: 5px; cursor: pointer; text-decoration: none; display: inline-block;">Register</a>
      </div>
    </div>
  </main>
  <footer>
    <div class="footer-container">
      <div class="left">
        <h4>AKS</h4>
        <p>Mobile Skins | Laptop Skins | Best Sellers | Trending Skins</p>
      </div>
      <div class="center">
        <h4>Mission</h4>
        <p>Our mission is to provide our customers with high-quality, durable, and stylish skins for Your devices.</p>
      </div>
      <div class="right">
        <h4>Contact Us</h4>
        <ul>
          <li><a href="#">Phone: 123-456-7890</a></li>
          <li><a href="#">Email: contact@myskinsstore.com</a></li>
          <li><a href="#">Address: 123 Main Street, Anytown USA</a></li>
        </ul>
      </div>
    </div>
    <div class="copy">
      <p>&copy; <?php echo date('Y'); ?> My Skins Store. All rights reserved.</p>
    </div>
  </footer>

  <script src="script.js"></script>
</body>
</html>
