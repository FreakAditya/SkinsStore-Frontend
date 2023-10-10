<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Skins Store</title>
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
      <a href="login.php">User</a>
    </div>
  </div>
  <section class="brand-icons">
    <h2>Choose Your Brand</h2>
    <div class="brand-icons-container">
      <div class="brand-icons-wrapper">
        <a href="https://www.samsung.com">
          <img src="https://www.samsung.com/etc.clientlibs/samsung/clientlibs/consumer/global/clientlib-common/resources/images/gnb-desktop-120x32.png" alt="Samsung">
        </a>
        <a href="https://www.apple.com">
          <img src="https://www.layers.shop/cdn/shop/files/Untitled-1_0002_Symbol-of-the-iPhone-logo.jpg?v=1673873290&width=1080" alt="Apple">
        </a>
        <a href="https://www.mi.com">
          <img src="https://www.layers.shop/cdn/shop/files/Untitled-1_0000_Xiaomi-logo.jpg?v=1673873289&width=1080g" alt="Xiaomi">
        </a>
        <a href="https://www.oneplus.com">
          <img src="https://www.layers.shop/cdn/shop/files/Untitled-1_0007_OnePlus-Logo.jpg?v=1673873290&width=1080" alt="OnePlus">
        </a>
        <a href="https://www.google.com">
          <img src="https://www.layers.shop/cdn/shop/files/Untitled-1_0013_google-logo-9824.jpg?v=1673873483&width=1080" alt="Google">
        </a>
      </div>
    </div>
  </section>
  <hr style="border: 1px solid black;">
  <h2>Collections...</h2>

  <div class="phone-container">
    <div class="phone-box">
      <img src="https://www.layers.shop/cdn/shop/files/wolf.png?v=1680610680&width=1280" alt="Phone 1">
      <h3>Phone 1</h3>
      <p>$500</p>
    </div>
    <div class="phone-box">
      <img src="https://www.layers.shop/cdn/shop/files/Chaos_Skin.png?v=1682508094&width=840" alt="Phone 2">
      <h3>Phone 2</h3>
      <p>$600</p>
    </div>
    <div class="phone-box">
      <img src="https://www.layers.shop/cdn/shop/files/iphone-14-pro-astro-rainbow_-_back_cb5382b1-7bfa-4052-bb7d-808e9c5c22ee.png?v=1680605465&width=1280" alt="Phone 3">
      <h3>Phone 3</h3>
      <p>$700</p>
    </div>
    <div class="phone-box">
      <img src="https://www.layers.shop/cdn/shop/files/iphone-14-pro-charcoal-black_-_back_1.jpg?v=1680612073&width=840" alt="Phone 4">
      <h3>Phone 4</h3>
      <p>$800</p>
    </div>
    <div class="phone-box">
      <img src="https://www.layers.shop/cdn/shop/files/astro_rainbow.png?v=1680610644&width=1280" alt="Phone 5">
      <h3>Phone 5</h3>
      <p>$900</p>
    </div>
    <div class="phone-box">
      <img src="https://www.layers.shop/cdn/shop/files/space_boy.png?v=1680610864&width=1280" alt="Phone 6">
      <h3>Phone 6</h3>

        <p>$1000</p>
      </div>
    </div>
    <footer>
    <div class="footer-container">
      <div class="left">
        <h4><a href="index.php">AKS</a></h4>
        <p><a href="MobileSkin.php">Mobile Skins</a> | <a href="#" id="laptop-skins-link">Laptop Skins</a>| <a href="bestseller.php">Best Sellers</a> | <a href="trending.php">Trending Skins</a></p>
      </div>
      <div class="center">
        <h4>About Us</h4>
        <p>Our mission is to provide our customers with high-quality, durable, and stylish skins for their devices.</p>
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
