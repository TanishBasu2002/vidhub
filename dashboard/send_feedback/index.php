<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Feedback</title>
    <link rel="stylesheet" href="style.css">
    <!-- Include sidebar and topbar styles if needed -->
</head>
<body>
    <?php include '../../ui/sidebar.php'; ?>
    <?php $data = include('../../lib/data.php'); $feedback = $data['feedback']; ?>

    <div class="main-content" id="main-content">
        <?php include '../../ui/topbar.php'; ?>

        <div class="feedback-form-container">
            <h1><?php echo $feedback['title']; ?></h1>
            <p><?php echo $feedback['description']; ?></p>
            
            <form id="feedbackForm">
                <?php foreach ($feedback['form_fields'] as $field): ?>
                <label><?php echo $field['label']; ?></label>
                <?php if ($field['type'] === 'textarea'): ?>
                    <textarea name="<?php echo $field['name']; ?>" 
                              placeholder="<?php echo $field['placeholder']; ?>" 
                              <?php echo $field['required'] ? 'required' : ''; ?>></textarea>
                <?php else: ?>
                    <input type="<?php echo $field['type']; ?>" 
                           name="<?php echo $field['name']; ?>" 
                           placeholder="<?php echo $field['placeholder']; ?>" 
                           <?php echo $field['required'] ? 'required' : ''; ?>>
                <?php endif; ?>
                <?php endforeach; ?>
                <button type="submit" class="submit-btn">Submit Feedback</button>
            </form>
        </div>
        
        <?php include('../../ui/footer.php'); ?>
    </div>

    <!-- Modal -->
    <div class="modal-overlay" id="modalOverlay"></div>
    <div class="modal" id="thankYouModal">
        <h2><?php echo $feedback['modal']['title']; ?></h2>
        <p><?php echo $feedback['modal']['message']; ?></p>
        <button class="close-btn" onclick="closeThankYouModal()">
            <?php echo $feedback['modal']['button_text']; ?>
        </button>
    </div>

    <script src="script.js"></script>
</body>
</html>