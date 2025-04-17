<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VidHub - Privacy Policy</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <?php include '../../ui/sidebar.php'; ?>
    <?php $data = include('../../lib/data.php'); $policy = $data['privacy_policy']; ?>

    <div class="main-content" id="main-content">
        <?php include '../../ui/topbar.php'; ?>

        <div class="privacy-policy-section">
            <div class="toc">
                <h3 class="toc-title">Table of Contents</h3>
                <ul class="toc-list">
                    <?php foreach ($policy['sections'] as $section): ?>
                    <li class="toc-item"><a href="#<?php echo $section['id']; ?>" class="toc-link"><?php echo $section['title']; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <div class="privacy-content">
                <div class="privacy-header">
                    <h2 class="privacy-title">Privacy Policy</h2>
                    <p class="last-updated">Last Updated: <?php echo $policy['last_updated']; ?></p>
                </div>

                <?php foreach ($policy['sections'] as $section): ?>
                <div class="privacy-section" id="<?php echo $section['id']; ?>">
                    <h3 class="section-title"><?php echo $section['title']; ?></h3>
                    <div class="section-content">
                        <?php if (is_array($section['content'])): ?>
                            <?php foreach ($section['content'] as $paragraph): ?>
                                <p><?php echo $paragraph; ?></p>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <p><?php echo $section['content']; ?></p>
                        <?php endif; ?>

                        <?php if (isset($section['items'])): ?>
                            <ul>
                                <?php foreach ($section['items'] as $item): ?>
                                    <?php if (is_array($item)): ?>
                                        <li><strong><?php echo $item['title']; ?></strong> <?php echo $item['text']; ?></li>
                                    <?php else: ?>
                                        <li><?php echo $item; ?></li>
                                    <?php endif; ?>
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

                <button class="print-btn" onclick="window.print()">
                    <i class='bx bx-printer'></i> Print Policy
                </button>
            </div>
        </div>
        <?php include('../../ui/footer.php'); ?>
    </div>

    <script src="script.js"></script>
</body>
</html>