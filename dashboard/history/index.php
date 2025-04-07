<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VidHub - Watch History</title>
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

        <!-- Watch History Section -->
        <div class="history-section">
            <div class="history-header">
                <h2 class="history-title">Watch History</h2>
                <button class="clear-all-btn" id="clear-all-btn">Clear All History</button>
            </div>
            <div class="history-list" id="history-list">
                <div class="history-item">
                    <img class="history-thumbnail" src="assets/images/v1.jpg" alt="Amazing Travel Vlog">
                    <div class="history-info">
                        <div class="history-video-title">Amazing Travel Vlog</div>
                        <div class="history-details">Channel: Travel Life | Watched: 2 days ago</div>
                    </div>
                    <button class="delete-btn">
                        <i class='bx bx-trash'></i>
                    </button>
                </div>
                <div class="history-item">
                    <img class="history-thumbnail" src="assets/images/v2.jpg" alt="Tech Review: Latest Gadgets">
                    <div class="history-info">
                        <div class="history-video-title">Tech Review: Latest Gadgets</div>
                        <div class="history-details">Channel: Tech Guru | Watched: 3 days ago</div>
                    </div>
                    <button class="delete-btn">
                        <i class='bx bx-trash'></i>
                    </button>
                </div>
                <div class="history-item">
                    <img class="history-thumbnail" src="assets/images/v3.jpg" alt="Cooking with Passion">
                    <div class="history-info">
                        <div class="history-video-title">Cooking with Passion</div>
                        <div class="history-details">Channel: Chef Delight | Watched: 5 days ago</div>
                    </div>
                    <button class="delete-btn">
                        <i class='bx bx-trash'></i>
                    </button>
                </div>
            </div>
            <!-- Empty State for Watch History -->
            <div class="empty-state" id="empty-state" style="display: none;">
                <i class='bx bx-history'></i>
                <p>Your watch history is empty.</p>
            </div>
        </div>

        <!-- Shorts History Section -->
        <div class="shorts-history-section">
            <div class="history-header">
                <h2 class="history-title">Shorts History</h2>
                <button class="clear-all-btn" id="clear-shorts-btn">Clear Shorts History</button>
            </div>
            <div class="shorts-history-list" id="shorts-history-list">
                <div class="shorts-history-item">
                    <img class="shorts-history-thumbnail" src="assets/images/s1.jpg" alt="Short 1">
                    <div class="shorts-history-info">
                        <div class="shorts-history-video-title">Funny Cat Short</div>
                        <div class="shorts-history-details">Channel: Pet Clips | Watched: 1 day ago</div>
                    </div>
                    <button class="delete-btn">
                        <i class='bx bx-trash'></i>
                    </button>
                </div>
                <div class="shorts-history-item">
                    <img class="shorts-history-thumbnail" src="assets/images/s3.jpg" alt="Short 2">
                    <div class="shorts-history-info">
                        <div class="shorts-history-video-title">Quick Dance Move</div>
                        <div class="shorts-history-details">Channel: Dance Vibes | Watched: 2 days ago</div>
                    </div>
                    <button class="delete-btn">
                        <i class='bx bx-trash'></i>
                    </button>
                </div>
                <div class="shorts-history-item">
                    <img class="shorts-history-thumbnail" src="assets/images/s4.jpg" alt="Short 3">
                    <div class="shorts-history-info">
                        <div class="shorts-history-video-title">DIY Craft Idea</div>
                        <div class="shorts-history-details">Channel: Crafty Hub | Watched: 3 days ago</div>
                    </div>
                    <button class="delete-btn">
                        <i class='bx bx-trash'></i>
                    </button>
                </div>
            </div>
            <!-- Empty State for Shorts History -->
            <div class="empty-state" id="shorts-empty-state" style="display: none;">
                <i class='bx bxs-devices'></i>
                <p>Your Shorts history is empty.</p>
            </div>
        </div>
    </div>
<script src="script.js"></script>
</body>

</html>