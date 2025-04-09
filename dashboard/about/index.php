<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VidHub - About Us</title>

     <link rel="stylesheet" href="style.css">
   
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <!-- Font Awesome for additional icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <!-- Sidebar -->
    <?php include '../../ui/sidebar.php'; ?>

    <!-- Main Content -->
    <div class="main-content" id="main-content">
        <!-- Top Bar -->
        <?php include '../../ui/topbar.php'; ?>

        <!-- About Us Section -->
        <div class="about-section ">
            <div class="about-header">
                <h2 class="about-title">About Us</h2>
                <p class="about-subtitle">Learn more about VidHub and the team behind it.</p>
            </div>

            <!-- Mission Section -->
            <div class="mission-section">
                <h3 class="mission-title">Our Mission</h3>
                <div class="mission-content">
                    <p>At VidHub, we are passionate about connecting people through the power of video. Our mission is to create a seamless and enjoyable streaming platform where users can share, discover, and engage with content that matters to them. We strive to foster creativity, build communities, and provide a safe and inclusive environment for everyone.</p>
                </div>
            </div>

            <!-- Team Section -->
            <div class="team-section">
                <h3 class="team-title">Meet Our Team</h3>
                <div class="team-grid">
                    <div class="team-card">
                        <div class="team-image">S</div>
                        <h4 class="team-name">Shubhrajyoti</h4>
                        <p class="team-role">Founder & CEO</p>
                    </div>
                    <div class="team-card">
                        <div class="team-image">P</div>
                        <h4 class="team-name">Priyanka</h4>
                        <p class="team-role">Founder & CEO</p>
                    </div>
                    <div class="team-card">
                        <div class="team-image">L</div>
                        <h4 class="team-name">Lima</h4>
                        <p class="team-role">Founder & CEO</p>
                    </div>
                    <div class="team-card">
                        <div class="team-image">K</div>
                        <h4 class="team-name">Kingkor</h4>
                        <p class="team-role">Backend Developer</p>
                    </div>
                    <div class="team-card">
                        <div class="team-image">M</div>
                        <h4 class="team-name">Masudur</h4>
                        <p class="team-role">Founder & CEO</p>
                    </div>
                    <div class="team-card">
                        <div class="team-image">D</div>
                        <h4 class="team-name">Debarghya</h4>
                        <p class="team-role">0</p>
                    </div>
                </div>
            </div>

            <!-- Contact Section -->
            <div class="contact-section">
                <h3 class="contact-title">Get in Touch</h3>
                <div class="contact-content">
                    <p>We’d love to hear from you! Whether you have questions, feedback, or just want to say hello, feel free to reach out.</p>
                    <p>Email: <a href="mailto:support@vidhub.com" class="contact-link">support@vidhub.com</a></p>
                    <p>Phone: +1-800-555-1234</p>
                    <p>Address: 123 VidHub Street, Tech City, TC 12345</p>
                </div>
            </div>
        </div>
        <?php include('../../ui/footer.php'); ?>
    </div>

    <!-- JavaScript -->
    <script src="script.js">

    </script>
</body>

</html>