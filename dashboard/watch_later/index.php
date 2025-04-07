<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VidHub - Watch Later</title>

    <link rel="stylesheet" href="styles.css">

    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <!-- Sidebar -->
    <?php include 'sidebar.php'; ?>

    <!-- Main Content -->
    <div class="main-content" id="main-content">
        <!-- Top Bar -->
        <?php include 'topbar.php'; ?>

        <!-- Watch Later Section -->
        <div class="watch-later-section">
            <div class="watch-later-header">
                <h2 class="watch-later-title">Watch Later</h2>
            </div>
            <div class="watch-later-list" id="watch-later-list">
                <div class="watch-later-item">
                    <img class="watch-later-thumbnail" src="assets/images/v1.jpg" alt="Amazing Travel Vlog">
                    <div class="watch-later-info">
                        <div class="watch-later-title-text">Amazing Travel Vlog</div>
                        <div class="watch-later-details">Channel: Travel Life | Duration: 12:34 | Added: 2 days ago</div>
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
                <div class="watch-later-item">
                    <img class="watch-later-thumbnail" src="assets/images/v2.jpg" alt="Tech Review: Latest Gadgets">
                    <div class="watch-later-info">
                        <div class="watch-later-title-text">Tech Review: Latest Gadgets</div>
                        <div class="watch-later-details">Channel: Tech Guru | Duration: 08:15 | Added: 3 days ago</div>
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
                <div class="watch-later-item">
                    <img class="watch-later-thumbnail" src="assets/images/v3.jpg" alt="Cooking with Passion">
                    <div class="watch-later-info">
                        <div class="watch-later-title-text">Cooking with Passion</div>
                        <div class="watch-later-details">Channel: Chef Delight | Duration: 15:20 | Added: 5 days ago</div>
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
            </div>
            <!-- Empty State for Watch Later -->
            <div class="empty-state" id="watch-later-empty-state" style="display: none;">
                <i class='bx bx-time'></i>
                <p>No videos added to Watch Later yet.</p>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="script.js">

    </script>
</body>

</html>