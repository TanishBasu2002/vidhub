<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trending Page - VIDHUB</title>
    <link rel="stylesheet" href="style.css">
     <link rel="stylesheet" href="../../ui/styles/index.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <?php include '../../ui/sidebar.php' ?>
    <?php $data = include('../../lib/data.php'); $trending = $data['trending']; ?>

    <div class="main-content">
        <?php include '../../ui/topbar.php'; ?>

        <div class="tabs">
            <div class="tab active" data-target="videos-section">Videos</div>
            <div class="tab" data-target="shorts-section">Shorts</div>
        </div>

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
                <?php foreach ($trending['shorts'] as $short): ?>
                <div class="shorts-card">
                    <div class="shorts-thumbnail">
                        <img src="<?php echo $short['thumbnail']; ?>" alt="Short thumbnail">
                        <div class="shorts-duration"><?php echo $short['duration']; ?></div>
                    </div>
                    <div class="shorts-info">
                        <h3 class="shorts-title"><?php echo $short['title']; ?></h3>
                        <p class="shorts-views"><?php echo $short['views']; ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div id="videos-section" class="videos-section">
            <h2 class="section-title">Trending Videos</h2>
            <div class="video-grid">
                <?php foreach ($trending['videos'] as $video): ?>
                <div class="video-card">
                    <div class="video-thumbnail">
                        <img src="<?php echo $video['thumbnail']; ?>" alt="Video thumbnail">
                        <div class="video-duration"><?php echo $video['duration']; ?></div>
                    </div>
                    <div class="video-info">
                        <div class="video-details">
                            <h3 class="video-title"><?php echo $video['title']; ?></h3>
                            <p class="channel-name"><?php echo $video['channel']; ?></p>
                            <p class="video-meta"><?php echo $video['views']; ?> • <?php echo $video['posted']; ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php include('../../ui/footer.php'); ?>
    </div>

    <script src="script.js"></script>
</body>
</html>