<?php
// Include the data file
$data = include('../lib/data.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../ui/styles/index.css">
</head>

<body>
    <?php include '../ui/admin-sidebar.php'; ?>
    <!-- Main Content -->
    <div class="main-content" id="main-content">
        <?php include '../ui/topbar.php'; ?>
        <div class="featured">
            <img src="<?php echo $data['featured']['image']; ?>" alt="Featured Image" class="featured-image">
            <div class="featured-info">
                <div class="featured-text">
                    <div class="featured-title"><?php echo $data['featured']['title']; ?></div>
                    <div class="featured-details"><?php echo $data['featured']['details']; ?></div>
                    <div class="featured-description"><?php echo $data['featured']['description']; ?></div>
                </div>
                <button class="featured-button">
                    <i class='bx bx-play'></i>
                </button>
            </div>
        </div>
        <div class="category-tabs">
            <?php foreach ($data['categories'] as $category): ?>
                <div class="tab <?php echo $category['active'] ? 'active' : ''; ?>">
                    <a href="#">
                        <i class=""></i>
                        <span><?php echo $category['name']; ?></span>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="video-grid">
            <?php foreach ($data['videos'] as $video): ?>
                <div class="video-box">
                    <img class="video-thumbnail" src="<?php echo $video['thumbnail']; ?>" alt="<?php echo $video['title']; ?>">
                    <div class="video-title"><?php echo $video['title']; ?></div>
                    <div class="video-details"><?php echo $video['details']; ?></div>
                </div>
            <?php endforeach; ?>
        </div>
        
        <div class="shorts-section">
            <div class="shorts-title">Shorts</div>
            <div class="shorts-container">
                <?php foreach ($data['shorts'] as $short): ?>
                    <div class="short-box">
                        <img src="<?php echo $short; ?>" alt="Short">
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        
        <?php include('../ui/footer.php'); ?>
    </div>
    <script src="script.js"></script>
</body>
</html>