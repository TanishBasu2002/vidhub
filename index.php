<?php
$darkMode = isset($_GET['dark']) && $_GET['dark'] == '1';
?>
<!DOCTYPE html>
<html lang="en" <?php echo $darkMode ? 'class="dark"' : ''; ?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vidhub - Video SaaS Platform</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
  <header>
    <div class="logo">Vidhub</div>
    <nav class="nav-buttons">
      <a href="#features">Features</a>
      <a href="#pricing">Pricing</a>
      <a href="#testimonials">Testimonials</a>
      <a href="auth/login_signup">Login</a>
    </nav>
  </header>

  <section class="hero">
    <h1>Stream Smarter with Vidhub</h1>
    <p>Your all-in-one video SaaS platform inspired by the power of YouTube.</p>
    <a href="#pricing" class="cta-button">Get Started</a>
  </section>

  <section class="features" id="features">
    <div class="feature">
      <h2>High Performance Streaming</h2>
      <p>Reliable and scalable video delivery optimized for all devices.</p>
    </div>
    <div class="feature">
      <h2>Monetization Tools</h2>
      <p>Built-in tools to monetize your videos, grow your audience, and earn more.</p>
    </div>
    <div class="feature">
      <h2>Analytics Dashboard</h2>
      <p>Gain insights with detailed viewer analytics and engagement reports.</p>
    </div>
  </section>

  <section class="pricing" id="pricing">
    <h2>Simple, Transparent Pricing</h2>
    <div class="pricing-cards">
      <div class="card">
        <h3>Starter</h3>
        <p>For hobbyists and personal projects</p>
        <div class="price">$9/mo</div>
        <p>5 GB Storage</p>
        <p>Up to 100 Videos</p>
      </div>
      <div class="card">
        <h3>Pro</h3>
        <p>For creators growing their audience</p>
        <div class="price">$29/mo</div>
        <p>50 GB Storage</p>
        <p>Up to 1,000 Videos</p>
      </div>
      <div class="card">
        <h3>Enterprise</h3>
        <p>Unlimited potential for businesses</p>
        <div class="price">Custom</div>
        <p>Unlimited Storage</p>
        <p>Priority Support</p>
      </div>
    </div>
  </section>

  <section class="testimonials" id="testimonials">
    <h2>What Our Users Say</h2>
    <div class="testimonial">
      <p>"Vidhub transformed how I deliver content to my audience. It's powerful and simple to use."</p>
      <strong>- Alex R.</strong>
    </div>
    <div class="testimonial">
      <p>"Finally, a video platform that supports my business model and lets me grow on my terms."</p>
      <strong>- Priya D.</strong>
    </div>
  </section>

  <?php include('./ui/footer.php'); ?>
  <a href="?dark=<?php echo $darkMode ? '0' : '1'; ?>" class="toggle-mode" title="Toggle Dark Mode">
    <?php echo $darkMode ? '☀️' : '🌙'; ?>
  </a>
</body>
</html>
