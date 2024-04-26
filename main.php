
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beauty Store</title>
  <link rel="stylesheet" href="style.css"> 
</head>
<body>
  <header>
    <h1>Makeup lounge</h1>
  </header>
  <nav>
    <a href="main.php">Home</a>
    <div class="dropdown">
      <span>About Us</span>
      <div class="dropdown-content">
        <a href="what.php">What is Makeup lounge</a>
        <a href="privacy_policy.php">Privacy & Policy</a>
        <a href="license.php">License</a>
        <a href="change_log.php">Change Log</a>
      </div>
    </div>
    <div class="dropdown2">
      <span>Improvement</span>
      <div class="dropdown-content2">
        <a href="Features.php">Features & Requirements</a>
        <a href="Code.php">Code of conduct</a>
        <a href="documentation.php">Developer documentation</a>
        <a href="guidlines.php">Developer guidelines</a>
        <a href="Feedback.php">Feedback</a>
        <a href="https://github.com/makeuplounge/Makeup-Lounge/issues">Issue reporting</a>
        <a href="https://github.com/makeuplounge/Makeup-Lounge">Github repository</a>
      </div>
    </div>
    <div class="dropdown3">
      <span>Discover</span>
      <div class="dropdown-content3">
        <a href="us.php">Why us ?</a>
        <a href="Announcment.php">Announcement</a>
        <a href="Feedback.php">Feedback</a>
        <a href="https://github.com/makeuplounge/Makeup-Lounge/issues">Issue reporting</a>
      </div>
    </div>
  </nav>
  <div class="container">
    <div id="home" class="main-content">
      <h2>Welcome to Makeup lounge</h2>
      <div class="about">
        <p>Makeup lounge is a recently launched online destination for indulging in luxurious beauty products, developed as Free and Open-Source Software. Our mission is to cater to individuals seeking the pinnacle of beauty and self-care experiences by providing a seamless and user-friendly shopping platform.</p>
        <p>We are committed to curating a selection of extraordinary beauty products that elevate the senses and enhance personal well-being. Beauty Luxe prides itself on offering an array of premium skincare, makeup, haircare, and fragrance items that exude sophistication and opulence.</p>
        <p>At Makeup lounge, we aspire to be the go-to choice for those who appreciate refinement and elegance in their beauty routines. We strive to offer our discerning clientele a convenient and sophisticated shopping experience, ensuring that every purchase reflects the luxury and prestige they deserve.</p>
      </div>
      <div class="announcement">
        <h3>Recent Announcements</h3>
        <?php
          
          function displayAnnouncements() {
            echo "<p>New Arrivals: Discover our latest products!</p>";
            echo "<p>Special Offer: Get 20% off on all skincare items!</p>";
          }

          
          displayAnnouncements();
        ?>
      </div>
      <div class="featured-products">
        <h2>Featured Products</h2>
        <div class="product">
          <h3>Face Cream</h3>
          <img src="https://i.pinimg.com/564x/b3/24/91/b32491fb388a8d1e8ecef6f6c3f4f70f.jpg" alt="Cream">
          <p>Description of the product.</p>
          <p>Price: $27.99</p>
        </div>
        <div class="product">
          <h3>Perfume</h3>
          <img src="https://i.pinimg.com/564x/db/04/0e/db040ec448713ee268730bbe5c004aff.jpg" alt="Perfume">
          <p>Description of the product.</p>
          <p>Price: $33.99</p>
        </div>
      </div>
    </div>
    <div id="about" class="main-content" style="display: none;">
      <h2>About us</h2>
      <div class="about-image">
        <img src="https://i.pinimg.com/564x/0d/f7/71/0df7711c08dd97e358dc8d65cf03f5fe.jpg" alt="About Us">
      </div>
      <p>Welcome to Makeup lounge! We offer a wide range of beauty products including skincare, makeup, haircare, and more. Our goal is to provide high-quality products to help you look and feel your best.</p>
    </div>
  </div>
</body>
</html>

