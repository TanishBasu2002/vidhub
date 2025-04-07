<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
    <?php include '../ui/sidebar.php'; ?>
    <!-- Main Content -->
    <div class="main-content" id="main-content">
        <?php include '../ui/topbar.php'; ?>
        <div class="featured">
            <img src="../assets/images/tham2.avif" alt="Featured Image" class="featured-image">
            <div class="featured-info">
                <div class="featured-text">
                    <div class="featured-title">Atlas (2024)</div>
                    <div class="featured-details">2024 • 2h 30min • Science Fiction, Action</div>
                    <div class="featured-description">A story of artificial intelligence joins a woman as she unravels a
                        mysterious past.</div>
                </div>
                <button class="featured-button">
                    <i class='bx bx-play'></i>
                </button>
            </div>
        </div>
        <div class="category-tabs">
            <div class="tab">
                <a href="#">
                    <i class=""></i>
                    <span>Podcast</span>
                </a>
            </div>
            <div class="tab">
                <a href="#">
                    <i class=""></i>
                    <span>Sports</span>
                </a>
            </div>
            <div class="tab active">
                <a href="#">
                    <i class=""></i>
                    <span>Movies</span>
                </a>
            </div>
            <div class="tab">
                <a href="#">
                    <i class=""></i>
                    <span>Travel</span>
                </a>
            </div>
            <div class="tab">
                <a href="#">
                    <i class=""></i>
                    <span>Lifestyle</span>
                </a>
            </div>
        </div>


        <div class="video-grid">
            <div class="video-box">
                <img class="video-thumbnail" src="../assets/images/v1.jpg" alt="Amazing Travel Vlog">
                <div class="video-title">Amazing Travel Vlog</div>
                <div class="video-details">Channel: Travel Life | 1.2M views | 50K likes</div>
            </div>
            <div class="video-box">
                <img class="video-thumbnail" src="../assets/images/v2.jpg" alt="Tech Review: Latest Gadgets">
                <div class="video-title">Tech Review: Latest Gadgets</div>
                <div class="video-details">Channel: Tech Guru | 800K views | 30K likes</div>
            </div>
            <div class="video-box">
                <img class="video-thumbnail" src="../assets/images/v3.jpg" alt="Cooking with Passion">
                <div class="video-title">Cooking with Passion</div>
                <div class="video-details">Channel: Chef Delight | 600K views | 20K likes</div>
            </div>
            <div class="video-box">
                <img class="video-thumbnail" src="../assets/images/v4.webp" alt="Top 10 Movies of 2025">
                <div class="video-title">Top 10 Movies of 2025</div>
                <div class="video-details">Channel: Movie World | 1M views | 40K likes</div>
            </div>
            <div class="video-box">
                <img class="video-thumbnail" src="../assets/images/v5.webp" alt="Fitness Tips for Beginners">
                <div class="video-title">Fitness Tips for Beginners</div>
                <div class="video-details">Channel: Fit Hub | 500K views | 15K likes</div>
            </div>
            <div class="video-box">
                <img class="video-thumbnail"
                    src="../assets/images/v4.jpg"
                    alt="Gaming Highlights: Best Plays">
                <div class="video-title">Gaming Highlights: Best Plays</div>
                <div class="video-details">Channel: Game Arena | 900K views | 35K likes</div>
            </div>
        </div>
        <div class="shorts-section">
            <div class="shorts-title">Shorts</div>
            <div class="shorts-container">
                <div class="short-box">
                    <img src="../assets/images/s1.jpg" alt="Short 1">
                </div>
                <div class="short-box">
                    <img src="../assets/images/s2.avif" alt="Short 2">
                </div>
                <div class="short-box">
                    <img src="../assets/images/s3.jpg" alt="Short 3">
                </div>
                <div class="short-box">
                    <img src="../assets/images/s4.jpg" alt="Short 4">
                </div>
                <div class="short-box">
                    <img src="../assets/images/s5.jpg" alt="Short 5">
                </div>
            </div>
        </div>

    </div>
    <script src="script.js"></script>
</body>

</html>