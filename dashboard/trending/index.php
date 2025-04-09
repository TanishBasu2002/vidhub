<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trending Page - VIDHUB</title>
    <!-- Favicon -->
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
    <!-- Sidebar -->
    <?php include '../../ui/sidebar.php' ?>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Top Bar -->
        <?php include '../../ui/topbar.php'; ?>

        <!-- Tabs -->
        <div class="tabs">
            <div class="tab active" data-target="videos-section">Videos</div>
            <div class="tab" data-target="shorts-section">Shorts</div>
        </div>

        <!-- Shorts Section -->
        <div id="shorts-section" class="shorts-section">
            <div class="section-header">
                <h2 class="section-title">Trending Shorts</h2>
                <div class="filter-select">
                    <select>
                        <option>This Week</option>
                        <option>Previous Week</option>
                        <option>Last Month</option>
                    </select>
                </div>
            </div>
            <div class="shorts-container">
                <div class="shorts-card">
                    <div class="shorts-thumbnail">
                        <img src="../../assets/images/s1.jpg" alt="Short thumbnail">
                        <div class="shorts-duration">0:45</div>
                    </div>
                    <div class="shorts-info">
                        <h3 class="shorts-title">Quick Tailwind CSS Tips</h3>
                        <p class="shorts-views">500K views</p>
                    </div>
                </div>
                <div class="shorts-card">
                    <div class="shorts-thumbnail">
                        <img src="../../assets/images/s2.avif" alt="Short thumbnail">
                        <div class="shorts-duration">0:58</div>
                    </div>
                    <div class="shorts-info">
                        <h3 class="shorts-title">CSS Grid in 60 Seconds</h3>
                        <p class="shorts-views">750K views</p>
                    </div>
                </div>
                <div class="shorts-card">
                    <div class="shorts-thumbnail">
                        <img src="../../assets/images/s1.jpg" alt="Short thumbnail">
                        <div class="shorts-duration">0:32</div>
                    </div>
                    <div class="shorts-info">
                        <h3 class="shorts-title">JavaScript Array Tricks</h3>
                        <p class="shorts-views">1.2M views</p>
                    </div>
                </div>
                <div class="shorts-card">
                    <div class="shorts-thumbnail">
                        <img src="../../assets/images/s3.jpg" alt="Short thumbnail">
                        <div class="shorts-duration">0:41</div>
                    </div>
                    <div class="shorts-info">
                        <h3 class="shorts-title">Flexbox vs Grid</h3>
                        <p class="shorts-views">900K views</p>
                    </div>
                </div>
                <div class="shorts-card">
                    <div class="shorts-thumbnail">
                        <img src="../../assets/images/s4.jpg" alt="Short thumbnail">
                        <div class="shorts-duration">0:37</div>
                    </div>
                    <div class="shorts-info">
                        <h3 class="shorts-title">React Hooks Explained</h3>
                        <p class="shorts-views">1.5M views</p>
                    </div>
                </div>
                <div class="shorts-card">
                    <div class="shorts-thumbnail">
                        <img src="../../assets/images/s5.jpg" alt="Short thumbnail">
                        <div class="shorts-duration">0:29</div>
                    </div>
                    <div class="shorts-info">
                        <h3 class="shorts-title">VS Code Shortcuts</h3>
                        <p class="shorts-views">600K views</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Videos Section -->
        <div id="videos-section" class="videos-section">
            
            <h2 class="section-title">Trending Videos</h2>
            <div class="video-grid">
                <div class="video-card">
                    <div class="video-thumbnail">
                        <img src="../../assets/images/v1.jpg" alt="Video thumbnail">
                        <div class="video-duration">10:30</div>
                    </div>
                    <div class="video-info">
                        <div class="video-details">
                            <h3 class="video-title">How to build a YouTube clone with Tailwind CSS</h3>
                            <p class="channel-name">Tech Tutorials</p>
                            <p class="video-meta">1.2M views • 3 days ago</p>
                        </div>
                    </div>
                </div>
                <div class="video-card">
                    <div class="video-thumbnail">
                        <img src="../../assets/images/v2.jpg" alt="Video thumbnail">
                        <div class="video-duration">15:45</div>
                    </div>
                    <div class="video-info">

                        <div class="video-details">
                            <h3 class="video-title">Learn Tailwind CSS in 1 Hour - Complete Tutorial</h3>
                            <p class="channel-name">Web Dev Simplified</p>
                            <p class="video-meta">850K views • 1 week ago</p>
                        </div>
                    </div>
                </div>
                <div class="video-card">
                    <div class="video-thumbnail">
                        <img src="../../assets/images/v3.jpg" alt="Video thumbnail">
                        <div class="video-duration">8:22</div>
                    </div>
                    <div class="video-info">

                        <div class="video-details">
                            <h3 class="video-title">Modern Web Design Trends 2023</h3>
                            <p class="channel-name">Design Mastery</p>
                            <p class="video-meta">500K views • 2 days ago</p>
                        </div>
                    </div>
                </div>
                <div class="video-card">
                    <div class="video-thumbnail">
                        <img src="../../assets/images/v5.webp" alt="Video thumbnail">
                        <div class="video-duration">12:15</div>
                    </div>
                    <div class="video-info">

                        <div class="video-details">
                            <h3 class="video-title">JavaScript Tips and Tricks You Should Know</h3>
                            <p class="channel-name">JS Wizard</p>
                            <p class="video-meta">1.5M views • 5 days ago</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include('../../ui/footer.php'); ?>
    </div>

    <script src="script.js">

    </script>
</body>

</html>