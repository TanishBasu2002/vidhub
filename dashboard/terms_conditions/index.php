<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VidHub - Terms & Conditions</title>
    <link rel="stylesheet" href="style.css">
     <link rel="stylesheet" href="../../ui/styles/index.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <?php include '../../ui/sidebar.php'; ?>
    <?php $data = include('../../lib/data.php'); $terms = $data['terms']; ?>

    <div class="main-content" id="main-content">
        <?php include '../../ui/topbar.php'; ?>

        <div class="terms-section">
            <div class="toc">
                <h3 class="toc-title">Table of Contents</h3>
                <ul class="toc-list">
                    <?php foreach ($terms['sections'] as $section): ?>
                    <li class="toc-item"><a href="#<?php echo $section['id']; ?>" class="toc-link"><?php echo $section['title']; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <div class="terms-content">
                <div class="terms-header">
                    <h2 class="terms-title">Terms & Conditions</h2>
                    <p class="last-updated">Last Updated: <?php echo $terms['last_updated']; ?></p>
                </div>

                <?php foreach ($terms['sections'] as $section): ?>
                <div class="terms-section-content" id="<?php echo $section['id']; ?>">
                    <h3 class="section-title"><?php echo $section['title']; ?></h3>
                    <div class="section-content">
                        <p><?php echo $section['content']; ?></p>
                        
                        <?php if (isset($section['list_items'])): ?>
                        <ul>
                            <?php foreach ($section['list_items'] as $item): ?>
                            <li><?php echo $item; ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <?php endif; ?>
                        
                        <?php if (isset($section['additional_content'])): ?>
                        <p><?php echo $section['additional_content']; ?></p>
                        <?php endif; ?>
                        
                        <?php if (isset($section['contact_info'])): ?>
                        <?php foreach ($section['contact_info'] as $info): ?>
                        <p><?php echo $info; ?></p>
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endforeach; ?>

                <button class="accept-btn" id="accept-btn">
                    <i class='bx bx-check'></i> Accept Terms
                </button>

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
        <?php include('../../ui/footer.php'); ?>
    </div>

    <script src="script.js"></script>
</body>
</html>