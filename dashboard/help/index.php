<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VidHub - Help</title>

    <link rel="stylesheet" href="style.css">

    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <!-- Font Awesome for additional icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <?php 
    // Include the data file
    include '../../lib/data.php';
    ?>
    
    <!-- Sidebar -->
    <?php include '../../ui/sidebar.php'; ?>

    <!-- Main Content -->
    <div class="main-content" id="main-content">
        <!-- Top Bar -->
        <?php include '../../ui/topbar.php'; ?>

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
                <?php if (isset($data['faqs']) && !empty($data['faqs'])): ?>
                    <?php foreach ($data['faqs'] as $faq): ?>
                        <div class="faq-item">
                            <div class="faq-question">
                                <span class="faq-question-text"><?php echo htmlspecialchars($faq['question']); ?></span>
                                <i class='bx bx-chevron-down faq-icon'></i>
                            </div>
                            <div class="faq-answer">
                                <p><?php echo htmlspecialchars($faq['answer']); ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="empty-state">
                        <i class='bx bx-help-circle'></i>
                        <p>No FAQs available at the moment.</p>
                    </div>
                <?php endif; ?>
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
        <?php include('../../ui/footer.php'); ?>
    </div>

    <!-- JavaScript -->
    <script src="script.js"></script>
</body>
</html>