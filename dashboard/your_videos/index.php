<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VidHub - Your Videos</title>

    <!-- Google Font Import -->
     <link rel="stylesheet" href="style.css">
     <link rel="stylesheet" href="../../ui/styles/index.css">
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <!-- Sidebar -->
    <?php include '../../ui/sidebar.php'; ?>
    
    <?php 
    // Include and get data
    $data = include('../../lib/data.php');
    $yourVideos = $data['your_videos'];
    $yourShorts = $data['your_shorts'];
    ?>

    <!-- Main Content -->
    <div class="main-content" id="main-content">
        <!-- Top Bar -->
        <?php include '../../ui/topbar.php'; ?>
        <!-- Your Videos Section -->
        <div class="your-videos-section">
            <div class="your-videos-header">
                <h2 class="your-videos-title">Your Videos</h2>
            </div>
            <div class="your-videos-list" id="your-videos-list">
                <?php foreach ($yourVideos as $video): ?>
                <div class="video-item">
                    <img class="video-thumbnail" src="<?php echo $video['thumbnail']; ?>" alt="<?php echo $video['title']; ?>">
                    <div class="video-info">
                        <div class="video-title"><?php echo $video['title']; ?></div>
                        <div class="video-details">Channel: <?php echo $video['channel']; ?> | Views: <?php echo $video['views']; ?> | Published: <?php echo $video['published']; ?></div>
                    </div>
                    <button class="menu-btn">
                        <i class='bx bx-dots-vertical-rounded'></i>
                    </button>
                    <div class="video-options-popup">
                        <div class="video-options-list">
                            <a href="#" class="video-option">
                                <i class='bx bx-download'></i> Download
                            </a>
                            <a href="#" class="video-option">
                                <i class='bx bx-share'></i> Share
                            </a>
                            <a href="#" class="video-option">
                                <i class='bx bx-edit'></i> Edit
                            </a>
                            <a href="#" class="video-option delete">
                                <i class='bx bx-trash'></i> Delete
                            </a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <!-- Empty State for Videos -->
            <div class="empty-state" id="videos-empty-state" style="display: <?php echo empty($yourVideos) ? 'block' : 'none'; ?>;">
                <i class='bx bx-video'></i>
                <p>You haven't uploaded any videos yet.</p>
            </div>
        </div>

        <!-- Your Shorts Section -->
        <div class="your-shorts-section">
            <div class="your-videos-header">
                <h2 class="your-videos-title">Your Shorts</h2>
            </div>
            <div class="your-shorts-list" id="your-shorts-list">
                <?php foreach ($yourShorts as $short): ?>
                <div class="shorts-item">
                    <img class="shorts-thumbnail" src="<?php echo $short['thumbnail']; ?>" alt="<?php echo $short['title']; ?>">
                    <div class="shorts-info">
                        <div class="shorts-title"><?php echo $short['title']; ?></div>
                        <div class="shorts-details">Channel: <?php echo $short['channel']; ?> | Views: <?php echo $short['views']; ?> | Published: <?php echo $short['published']; ?></div>
                    </div>
                    <button class="menu-btn">
                        <i class='bx bx-dots-vertical-rounded'></i>
                    </button>
                    <div class="video-options-popup">
                        <div class="video-options-list">
                            <a href="#" class="video-option">
                                <i class='bx bx-download'></i> Download
                            </a>
                            <a href="#" class="video-option">
                                <i class='bx bx-share'></i> Share
                            </a>
                            <a href="#" class="video-option">
                                <i class='bx bx-edit'></i> Edit
                            </a>
                            <a href="#" class="video-option delete">
                                <i class='bx bx-trash'></i> Delete
                            </a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <!-- Empty State for Shorts -->
            <div class="empty-state" id="shorts-empty-state" style="display: <?php echo empty($yourShorts) ? 'block' : 'none'; ?>;">
                <i class='bx bxs-devices'></i>
                <p>You haven't uploaded any Shorts yet.</p>
            </div>
        </div>
        <?php include('../../ui/footer.php'); ?>
    </div>
    
    <!-- JavaScript -->
    <script src="script.js"></script>
</body>
</html>