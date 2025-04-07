<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VidHub - Terms & Conditions</title>

      <link rel="stylesheet" href="styles.css">

    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <!-- Font Awesome for additional icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <!-- Sidebar -->
    <?php include 'sidebar.php'; ?>

    <!-- Main Content -->
    <div class="main-content" id="main-content">
        <!-- Top Bar -->
        <?php include 'topbar.php'; ?>

        <!-- Terms & Conditions Section -->
        <div class="terms-section">
            <!-- Table of Contents -->
            <div class="toc">
                <h3 class="toc-title">Table of Contents</h3>
                <ul class="toc-list">
                    <li class="toc-item"><a href="#introduction" class="toc-link">Introduction</a></li>
                    <li class="toc-item"><a href="#services" class="toc-link">Services</a></li>
                    <li class="toc-item"><a href="#user-conduct" class="toc-link">User Conduct</a></li>
                    <li class="toc-item"><a href="#content-ownership" class="toc-link">Content Ownership</a></li>
                    <li class="toc-item"><a href="#termination" class="toc-link">Termination</a></li>
                    <li class="toc-item"><a href="#liability" class="toc-link">Liability</a></li>
                    <li class="toc-item"><a href="#changes" class="toc-link">Changes to Terms</a></li>
                    <li class="toc-item"><a href="#contact-us" class="toc-link">Contact Us</a></li>
                </ul>
            </div>

            <!-- Terms Content -->
            <div class="terms-content">
                <div class="terms-header">
                    <h2 class="terms-title">Terms & Conditions</h2>
                    <p class="last-updated">Last Updated: April 3, 2025</p>
                </div>

                <div class="terms-section-content" id="introduction">
                    <h3 class="section-title">Introduction</h3>
                    <div class="section-content">
                        <p>Welcome to VidHub! These Terms & Conditions govern your use of our streaming platform and services. By accessing or using VidHub, you agree to be bound by these terms. If you do not agree, please refrain from using our services.</p>
                    </div>
                </div>

                <div class="terms-section-content" id="services">
                    <h3 class="section-title">Services</h3>
                    <div class="section-content">
                        <p>VidHub provides a platform for users to upload, watch, and share videos. We reserve the right to modify or discontinue any part of our services at our discretion without prior notice.</p>
                    </div>
                </div>

                <div class="terms-section-content" id="user-conduct">
                    <h3 class="section-title">User Conduct</h3>
                    <div class="section-content">
                        <p>You agree to use VidHub in a lawful and respectful manner. Prohibited activities include:</p>
                        <ul>
                            <li>Uploading illegal or harmful content.</li>
                            <li>Harassing or defaming other users.</li>
                            <li>Attempting to breach our security measures.</li>
                        </ul>
                        <p>Violations may result in account suspension or termination.</p>
                    </div>
                </div>

                <div class="terms-section-content" id="content-ownership">
                    <h3 class="section-title">Content Ownership</h3>
                    <div class="section-content">
                        <p>You retain ownership of the content you upload, but by uploading, you grant VidHub a worldwide, non-exclusive license to display and distribute it. Ensure you have the rights to upload all content.</p>
                    </div>
                </div>

                <div class="terms-section-content" id="termination">
                    <h3 class="section-title">Termination</h3>
                    <div class="section-content">
                        <p>We may terminate your account at any time for violating these terms or for inactivity. Upon termination, your access to VidHub will be revoked, and your content may be removed.</p>
                    </div>
                </div>

                <div class="terms-section-content" id="liability">
                    <h3 class="section-title">Liability</h3>
                    <div class="section-content">
                        <p>VidHub is not liable for any indirect damages arising from the use of our services. Our liability is limited to the extent permitted by law.</p>
                    </div>
                </div>

                <div class="terms-section-content" id="changes">
                    <h3 class="section-title">Changes to Terms</h3>
                    <div class="section-content">
                        <p>We may update these terms periodically. Changes will be effective upon posting. Continued use of VidHub after updates constitutes acceptance of the new terms.</p>
                    </div>
                </div>

                <div class="terms-section-content" id="contact-us">
                    <h3 class="section-title">Contact Us</h3>
                    <div class="section-content">
                        <p>For questions or concerns, contact us at:</p>
                        <p>Email: support@vidhub.com</p>
                        <p>Phone: +1-800-555-1234</p>
                        <p>Address: 123 VidHub Street, Tech City, TC 12345</p>
                    </div>
                </div>

                <button class="accept-btn" id="accept-btn">
                    <i class='bx bx-check'></i> Accept Terms
                </button>

                <!-- Confirmation Popup -->
                <div class="overlay" id="overlay"></div>
                <div class="confirmation-popup" id="confirmation-popup">
                    <div class="popup-content">
                        <h3>Confirm Acceptance</h3>
                        <p>By clicking "Confirm," you agree to abide by the Terms & Conditions of VidHub. This action is binding and cannot be undone.</p>
                        <div class="popup-buttons">
                            <button class="popup-btn confirm-btn" id="confirm-btn">Confirm</button>
                            <button class="popup-btn cancel-btn" id="cancel-btn">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="script.js">

    </script>
</body>

</html>