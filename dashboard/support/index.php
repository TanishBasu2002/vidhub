<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Feedback </title>
    <link rel="stylesheet" href="style.css">
     <link rel="stylesheet" href="../../ui/styles/index.css">
</head>
<body>
    <div class="feedback-form-container">
        <h1>User Feedback </h1>
        <p>Provided feedback by the users below.</p>
        <form id="feedbackForm">
            <label>First Name</label>
            <input type="text" name="first_name" placeholder="Enter your first name" required>

            <label>Last Name</label>
            <input type="text" name="last_name" placeholder="Enter your last name" required>

            <label>Email</label>
            <input type="email" name="email" placeholder="Enter your email address" required>

            <label>Phone Number</label>
            <input type="tel" name="phone" placeholder="Enter your phone number" required>

            <label>Message</label>
            <textarea name="message" placeholder="Write your feedback here..." required></textarea>
        </form>
        <?php include('../../ui/footer.php'); ?>
    </div>

    <!-- Modal -->
    <div class="modal-overlay" id="modalOverlay"></div>
    <div class="modal" id="thankYouModal">
        <h2>Thank You!</h2>
        <p>Your message has been submitted successfully.</p>
        <button class="close-btn" onclick="closeThankYouModal()">Close</button>
    </div>

    <script src="/script.js"></script>
</body>
</html>