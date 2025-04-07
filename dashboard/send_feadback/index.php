<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIDHUB - Send Feedback</title>
     <link rel="stylesheet" href="styles.css">
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <?php include 'sidebar.php'; ?>

    <!-- Main Content -->
    <div class="main-content" id="main-content">
        <!-- Top Bar -->
        <?php include 'topbar.php'; ?>

        <!-- Feedback Form -->
        <div class="feedback-container">
            <div class="feedback-header">
                <h1>Send Feedback</h1>
                <p>We value your feedback! Let us know how we can improve VIDHUB.</p>
            </div>
            <form class="feedback-form" id="feedbackForm">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>
                </div>
                <div class="form-group">
                    <label for="purpose">Purpose of Feedback</label>
                    <select id="purpose" name="purpose" required>
                        <option value="" disabled selected>Select a purpose</option>
                        <option value="suggestion">Suggestion</option>
                        <option value="bug-report">Bug Report</option>
                        <option value="feature-request">Feature Request</option>
                        <option value="general">General Feedback</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="likes">What You Liked</label>
                    <textarea id="likes" name="likes" placeholder="Tell us what you liked about VIDHUB" required></textarea>
                </div>
                <div class="form-group">
                    <label for="views">Your Views/Suggestions</label>
                    <textarea id="views" name="views" placeholder="Share your suggestions or feedback" required></textarea>
                </div>
                <button type="submit" class="submit-btn">Submit Feedback</button>
            </form>
        </div>

        <!-- Success Popup -->
        <div class="success-popup" id="successPopup">
            <i class='bx bx-check-circle'></i>
            <p>Thank you for your feedback! We’ll review it soon.</p>
            <button onclick="closeSuccessPopup()">Close</button>
        </div>
        <div class="overlay" id="overlay"></div>

        <!-- Footer -->
        <div class="footer">
            <p>© 2025 VIDHUB. All rights reserved.</p>
        </div>
    </div>

    <script src="script.js">

    </script>
</body>

</html>