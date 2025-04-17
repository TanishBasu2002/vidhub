<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VidHub - Watch Later</title>
    <link rel="stylesheet" href="style.css">
     <link rel="stylesheet" href="../../ui/styles/index.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <?php include '../../ui/sidebar.php'; ?>
    <?php $data = include('../../lib/data.php'); $watchLater = $data['watch_later']; ?>

    <div class="main-content" id="main-content">
        <?php include '../../ui/topbar.php'; ?>

        <div class="watch-later-section">
            <div class="watch-later-header">
                <h2 class="watch-later-title">Watch Later</h2>
            </div>
            <div class="watch-later-list" id="watch-later-list">
                <?php foreach ($watchLater as $item): ?>
                <div class="watch-later-item">
                    <img class="watch-later-thumbnail" src="<?php echo $item['thumbnail']; ?>" alt="<?php echo $item['title']; ?>">
                    <div class="watch-later-info">
                        <div class="watch-later-title-text"><?php echo $item['title']; ?></div>
                        <div class="watch-later-details">Channel: <?php echo $item['channel']; ?> | Duration: <?php echo $item['duration']; ?> | Added: <?php echo $item['added']; ?></div>
                    </div>
                    <button class="menu-btn">
                        <i class='bx bx-dots-vertical-rounded'></i>
                    </button>
                    <div class="video-options-popup">
                        <div class="video-options-list">
                            <a href="#" class="video-option">
                                <i class='bx bx-play'></i> Play Now
                            </a>
                            <a href="#" class="video-option">
                                <i class='bx bx-share'></i> Share
                            </a>
                            <a href="#" class="video-option remove">
                                <i class='bx bx-trash'></i> Remove
                            </a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="empty-state" id="watch-later-empty-state" style="display: <?php echo empty($watchLater) ? 'block' : 'none'; ?>;">
                <i class='bx bx-time'></i>
                <p>No videos added to Watch Later yet.</p>
            </div>
        </div>
        <?php include('../../ui/footer.php'); ?>
    </div>

    <script src="script.js"></script>
</body>
</html>