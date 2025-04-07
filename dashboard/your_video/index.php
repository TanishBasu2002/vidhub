<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VidHub - Your Videos</title>

    <!-- Google Font Import -->
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
        <!-- Your Videos Section -->
        <div class="your-videos-section">
            <div class="your-videos-header">
                <h2 class="your-videos-title">Your Videos</h2>
            </div>
            <div class="your-videos-list" id="your-videos-list">
                <div class="video-item">
                    <img class="video-thumbnail" src="assets/images/v1.jpg" alt="Amazing Travel Vlog">
                    <div class="video-info">
                        <div class="video-title">Amazing Travel Vlog</div>
                        <div class="video-details">Channel: Travel Life | Views: 1.2M | Published: 2 days ago</div>
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
                <div class="video-item">
                    <img class="video-thumbnail" src="assets/images/v2.jpg" alt="Tech Review: Latest Gadgets">
                    <div class="video-info">
                        <div class="video-title">Tech Review: Latest Gadgets</div>
                        <div class="video-details">Channel: Tech Guru | Views: 800K | Published: 3 days ago</div>
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
                <div class="video-item">
                    <img class="video-thumbnail" src="assets/images/v3.jpg" alt="Cooking with Passion">
                    <div class="video-info">
                        <div class="video-title">Cooking with Passion</div>
                        <div class="video-details">Channel: Chef Delight | Views: 600K | Published: 5 days ago</div>
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
            </div>
            <!-- Empty State for Videos -->
            <div class="empty-state" id="videos-empty-state" style="display: none;">
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
                <div class="shorts-item">
                    <img class="shorts-thumbnail" src="assets/images/s1.jpg" alt="Funny Cat Short">
                    <div class="shorts-info">
                        <div class="shorts-title">Funny Cat Short</div>
                        <div class="shorts-details">Channel: Pet Clips | Views: 500K | Published: 1 day ago</div>
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
                <div class="shorts-item">
                    <img class="shorts-thumbnail" src="assets/images/s3.jpg" alt="Quick Dance Move">
                    <div class="shorts-info">
                        <div class="shorts-title">Quick Dance Move</div>
                        <div class="shorts-details">Channel: Dance Vibes | Views: 300K | Published: 2 days ago</div>
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
                <div class="shorts-item">
                    <img class="shorts-thumbnail" src="assets/images/s4.jpg" alt="DIY Craft Idea">
                    <div class="shorts-info">
                        <div class="shorts-title">DIY Craft Idea</div>
                        <div class="shorts-details">Channel: Crafty Hub | Views: 200K | Published: 3 days ago</div>
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
            </div>
            <!-- Empty State for Shorts -->
            <div class="empty-state" id="shorts-empty-state" style="display: none;">
                <i class='bx bxs-devices'></i>
                <p>You haven't uploaded any Shorts yet.</p>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="script.js">

    </script>
</body>

</html>