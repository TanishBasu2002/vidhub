<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VidHub - Liked Videos</title>

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

        <!-- Liked Videos Section -->
        <div class="liked-videos-section">
            <div class="liked-videos-header">
                <h2 class="liked-videos-title">Liked Videos</h2>
                <div class="liked-videos-controls">
                    <select class="sort-dropdown">
                        <option value="date">Sort by Date</option>
                        <option value="views">Sort by Views</option>
                        <option value="duration">Sort by Duration</option>
                    </select>
                    <button class="clear-all-btn">Clear All</button>
                </div>
            </div>
            <div class="liked-videos-list" id="liked-videos-list">
                <?php if (isset($data['liked_videos']) && !empty($data['liked_videos'])): ?>
                    <?php foreach ($data['liked_videos'] as $video): ?>
                        <div class="liked-video-item">
                            <img class="liked-video-thumbnail" src="<?php echo $video['thumbnail']; ?>" alt="<?php echo htmlspecialchars($video['title']); ?>">
                            <div class="progress-bar" style="width: <?php echo $video['progress']; ?>%;"></div>
                            <div class="liked-video-info">
                                <div class="liked-video-title"><?php echo htmlspecialchars($video['title']); ?></div>
                                <div class="liked-video-details">
                                    Channel: <?php echo htmlspecialchars($video['channel']); ?> | 
                                    Views: <?php echo $video['views']; ?> | 
                                    Duration: <?php echo $video['duration']; ?> | 
                                    Liked: <?php echo $video['liked_date']; ?>
                                </div>
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
                                    <a href="#" class="video-option unlike">
                                        <i class='bx bx-heart'></i> Unlike
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="empty-state">
                        <i class='bx bx-heart'></i>
                        <p>No videos liked yet.</p>
                    </div>
                <?php endif; ?>
            </div>
            <div class="loading-spinner"></div>
        </div>
        <?php include('../../ui/footer.php'); ?>
    </div>

    <!-- JavaScript -->
    <script src="script.js"></script>
</body>
</html>