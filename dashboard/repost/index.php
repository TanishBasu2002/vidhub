<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($data['reposted_videos']['page_title']); ?></title>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    // Include the data file
    include '../../lib/data.php';
    ?>
    
    <header>
        <div class="header-content">
            <img src="../assets/logo.svg" alt="Logo" class="logo">
            <h1><?php echo htmlspecialchars($data['reposted_videos']['header_title']); ?></h1>
        </div>
        <h2 class="video-count"><?php echo htmlspecialchars($data['reposted_videos']['video_count_label']); ?> <span id="video-count"><?php echo count($data['reposted_videos']['videos']); ?></span></h2>
    </header>
    <main>
        <div class="video-list">
            <?php foreach ($data['reposted_videos']['videos'] as $video): ?>
                <div class="video-item">
                    <video src="<?php echo htmlspecialchars($video['video_url']); ?>" controls poster="<?php echo htmlspecialchars($video['thumbnail_url']); ?>"></video>
                    <div class="video-info">
                        <h3><?php echo htmlspecialchars($video['title']); ?></h3>
                        <p><?php echo htmlspecialchars($data['reposted_videos']['creator_label']); ?> <?php echo htmlspecialchars($video['creator']); ?></p>
                        <p><?php echo htmlspecialchars($data['reposted_videos']['views_label']); ?> <?php echo htmlspecialchars($video['views']); ?></p>
                        <p><?php echo htmlspecialchars($data['reposted_videos']['date_label']); ?> <?php echo htmlspecialchars($video['published_date']); ?></p>
                        <p><?php echo htmlspecialchars($data['reposted_videos']['reported_label']); ?> <?php echo htmlspecialchars($video['reported_by']); ?></p>
                    </div>
                    <button class="delete-btn" onclick="showPopup('<?php echo htmlspecialchars($video['title']); ?>')">
                        <i class='bx bx-trash'></i>
                    </button>
                </div>
            <?php endforeach; ?>
        </div>
    </main>

    <div class="popup" id="deletePopup">
        <div class="popup-content">
            <h3><?php echo htmlspecialchars($data['reposted_videos']['delete_confirmation']); ?> "<span id="videoTitle"></span>"?</h3>
            <div class="popup-buttons">
                <button class="confirm-btn" onclick="confirmDelete()"><?php echo htmlspecialchars($data['reposted_videos']['confirm_button']); ?></button>
                <button class="cancel-btn" onclick="hidePopup()"><?php echo htmlspecialchars($data['reposted_videos']['cancel_button']); ?></button>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>