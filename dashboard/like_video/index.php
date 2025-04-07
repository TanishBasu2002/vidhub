<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VidHub - Liked Videos</title>

    <link rel="stylesheet" href="styles.css">

    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <!-- Font Awesome for additional icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <!-- Sidebar -->
    <?php include 'sidebar.php'; ?>

    <!-- Main Content -->
    <div class="main-content" id="main-content">
        <!-- Top Bar -->
        <?php include 'topbar.php'; ?>

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
                <div class="liked-video-item">
                    <img class="liked-video-thumbnail" src="assets/images/v1.jpg" alt="Amazing Travel Vlog">
                    <div class="progress-bar" style="width: 60%;"></div>
                    <div class="liked-video-info">
                        <div class="liked-video-title">Amazing Travel Vlog</div>
                        <div class="liked-video-details">Channel: Travel Life | Views: 1.2M | Duration: 12:34 | Liked: 2 days ago</div>
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
                <div class="liked-video-item">
                    <img class="liked-video-thumbnail" src="assets/images/v2.jpg" alt="Tech Review: Latest Gadgets">
                    <div class="progress-bar" style="width: 30%;"></div>
                    <div class="liked-video-info">
                        <div class="liked-video-title">Tech Review: Latest Gadgets</div>
                        <div class="liked-video-details">Channel: Tech Guru | Views: 800K | Duration: 08:15 | Liked: 3 days ago</div>
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
                <div class="liked-video-item">
                    <img class="liked-video-thumbnail" src="assets/images/v3.jpg" alt="Cooking with Passion">
                    <div class="progress-bar" style="width: 75%;"></div>
                    <div class="liked-video-info">
                        <div class="liked-video-title">Cooking with Passion</div>
                        <div class="liked-video-details">Channel: Chef Delight | Views: 600K | Duration: 15:20 | Liked: 5 days ago</div>
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
            </div>
            <div class="loading-spinner"></div>
            <!-- Empty State for Liked Videos -->
            <div class="empty-state" id="liked-videos-empty-state" style="display: none;">
                <i class='bx bx-heart'></i>
                <p>No videos liked yet.</p>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="script.js">

    </script>
</body>

</html>