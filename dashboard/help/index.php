<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VidHub - Help</title>

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

        <!-- Help Section -->
        <div class="help-section">
            <div class="help-header">
                <h2 class="help-title">How Can We Help You?</h2>
                <p class="help-subtitle">Find answers to common questions or contact our support team.</p>
            </div>

            <!-- Help Search -->
            <div class="help-search">
                <div class="help-search-box">
                    <i class='bx bx-search'></i>
                    <input type="text" placeholder="Search for help topics..." id="help-search-input">
                </div>
            </div>

            <!-- FAQ Section -->
            <div class="faq-section">
                <h3 class="faq-title">Frequently Asked Questions</h3>
                <div class="faq-item">
                    <div class="faq-question">
                        <span class="faq-question-text">How do I upload a video?</span>
                        <i class='bx bx-chevron-down faq-icon'></i>
                    </div>
                    <div class="faq-answer">
                        <p>To upload a video, click on the "Upload" button in the top bar, select your video file, fill in the required details, and click "Publish." Ensure your video meets our community guidelines.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <span class="faq-question-text">How can I delete a video from my liked list?</span>
                        <i class='bx bx-chevron-down faq-icon'></i>
                    </div>
                    <div class="faq-answer">
                        <p>Go to the "Liked Videos" page from the sidebar, find the video you want to remove, click the three-dot menu, and select "Unlike." The video will be removed from your liked list.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <span class="faq-question-text">Why is my video not playing?</span>
                        <i class='bx bx-chevron-down faq-icon'></i>
                    </div>
                    <div class="faq-answer">
                        <p>Ensure you have a stable internet connection. If the issue persists, try clearing your browser cache or contact our support team for assistance.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <span class="faq-question-text">How do I contact support?</span>
                        <i class='bx bx-chevron-down faq-icon'></i>
                    </div>
                    <div class="faq-answer">
                        <p>You can contact support by filling out the form below or using the live chat option in the bottom-right corner of this page.</p>
                    </div>
                </div>
            </div>

            <!-- Contact Section -->
            <div class="contact-section">
                <h3 class="contact-title">Still Need Help? Contact Us</h3>
                <form class="contact-form" id="contact-form">
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" id="name" name="name" placeholder="Enter your name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Your Email</label>
                        <input type="email" id="email" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Your Message</label>
                        <textarea id="message" name="message" placeholder="Describe your issue..." required></textarea>
                    </div>
                    <button type="submit" class="submit-btn">Send Message</button>
                </form>
            </div>
        </div>

        <!-- Live Chat Button -->
        <div class="live-chat-btn">
            <i class='bx bx-chat'></i>
            <span>Live Chat</span>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="script.js">

    </script>
</body>

</html>