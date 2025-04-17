<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VidHub - Watch History</title>
    <link rel="stylesheet" href="style.css">

    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
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

        <!-- Watch History Section -->
        <div class="history-section">
            <div class="history-header">
                <h2 class="history-title">Watch History</h2>
                <button class="clear-all-btn" id="clear-all-btn">Clear All History</button>
            </div>
            <div class="history-list" id="history-list">
                <?php if (isset($data['watch_history']) && !empty($data['watch_history'])): ?>
                    <?php foreach ($data['watch_history'] as $video): ?>
                        <div class="history-item">
                            <img class="history-thumbnail" src="<?php echo $video['thumbnail']; ?>" alt="<?php echo htmlspecialchars($video['title']); ?>">
                            <div class="history-info">
                                <div class="history-video-title"><?php echo htmlspecialchars($video['title']); ?></div>
                                <div class="history-details">
                                    Channel: <?php echo htmlspecialchars($video['channel']); ?> | 
                                    Watched: <?php echo $video['watched_date']; ?>
                                </div>
                            </div>
                            <button class="delete-btn">
                                <i class='bx bx-trash'></i>
                            </button>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="empty-state">
                        <i class='bx bx-history'></i>
                        <p>Your watch history is empty.</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <!-- Shorts History Section -->
        <div class="shorts-history-section">
            <div class="history-header">
                <h2 class="history-title">Shorts History</h2>
                <button class="clear-all-btn" id="clear-shorts-btn">Clear Shorts History</button>
            </div>
            <div class="shorts-history-list" id="shorts-history-list">
                <?php if (isset($data['shorts_history']) && !empty($data['shorts_history'])): ?>
                    <?php foreach ($data['shorts_history'] as $short): ?>
                        <div class="shorts-history-item">
                            <img class="shorts-history-thumbnail" src="<?php echo $short['thumbnail']; ?>" alt="<?php echo htmlspecialchars($short['title']); ?>">
                            <div class="shorts-history-info">
                                <div class="shorts-history-video-title"><?php echo htmlspecialchars($short['title']); ?></div>
                                <div class="shorts-history-details">
                                    Channel: <?php echo htmlspecialchars($short['channel']); ?> | 
                                    Watched: <?php echo $short['watched_date']; ?>
                                </div>
                            </div>
                            <button class="delete-btn">
                                <i class='bx bx-trash'></i>
                            </button>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="empty-state">
                        <i class='bx bxs-devices'></i>
                        <p>Your Shorts history is empty.</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <?php include('../../ui/footer.php'); ?>
    </div>
    <script src="script.js"></script>
</body>
</html>