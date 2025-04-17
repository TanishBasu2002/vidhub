<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playlists - VIDHUB</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <?php include '../../ui/sidebar.php'; ?>
    <?php $data = include('../../lib/data.php'); $playlists = $data['playlists']; ?>

    <div class="main-content" id="main-content">
        <?php include '../../ui/topbar2.php'; ?>

        <div class="playlists-section">
            <div class="playlists-header">
                <h2 class="playlists-title"><?php echo $playlists['title']; ?></h2>
                <button class="create-playlist-btn">Create New Playlist</button>
            </div>
            <div class="playlists-filter">
                <input type="text" placeholder="Search playlists..." id="playlist-search">
            </div>
            <div class="playlists-list" id="playlists-list">
                <?php foreach ($playlists['playlists'] as $playlist): ?>
                <div class="playlist-card">
                    <div class="playlist-info">
                        <img src="<?php echo $playlist['thumbnail']; ?>" alt="Playlist Thumbnail" class="playlist-thumbnail">
                        <div class="playlist-details">
                            <div class="playlist-name"><?php echo $playlist['name']; ?></div>
                            <div class="playlist-meta">
                                <span class="playlist-privacy"><?php echo $playlist['privacy']; ?></span>
                                <span class="playlist-count"><?php echo $playlist['videos_count']; ?> videos</span>
                                <span class="playlist-updated">Updated <?php echo $playlist['last_updated']; ?></span>
                            </div>
                        </div>
                    </div>
                    <button class="view-playlist-btn">View Full Playlist</button>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php include('../../ui/footer.php'); ?>
    </div>

    <script src="script.js"></script>
</body>
</html>