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

    <div class="main-content" id="main-content">
        <?php include '../../ui/topbar2.php'; ?>

        <div class="playlists-section">
            <div class="playlists-header">
                <h2 class="playlists-title">Your Playlists</h2>
                <button class="create-playlist-btn">Create New Playlist</button>
            </div>
            <div class="playlists-filter">
                <input type="text" placeholder="Search playlists..." id="playlist-search">
            </div>
            <div class="playlists-list" id="playlists-list">
                <div class="playlist-card">
                    <div class="playlist-info">
                        <img src="../../assets/images/v1.jpg" alt="Playlist Thumbnail" class="playlist-thumbnail">
                        <div class="playlist-details">
                            <div class="playlist-name">Chill Vibes</div>
                            <div class="playlist-privacy">Public</div>
                        </div>
                    </div>
                    <button class="view-playlist-btn">View Full Playlist</button>
                </div>
                <div class="playlist-card">
                    <div class="playlist-info">
                        <img src="../../assets/images/v2.jpg" alt="Playlist Thumbnail" class="playlist-thumbnail">
                        <div class="playlist-details">
                            <div class="playlist-name">Workout Hits</div>
                            <div class="playlist-privacy">Private</div>
                        </div>
                    </div>
                    <button class="view-playlist-btn">View Full Playlist</button>
                </div>
                <div class="playlist-card">
                    <div class="playlist-info">
                        <img src="../../assets/images/v3.jpg" alt="Playlist Thumbnail" class="playlist-thumbnail">
                        <div class="playlist-details">
                            <div class="playlist-name">Movie Soundtracks</div>
                            <div class="playlist-privacy">Public</div>
                        </div>
                    </div>
                    <button class="view-playlist-btn">View Full Playlist</button>
                </div>
                <!-- Add more playlist cards as needed -->
            </div>
        </div>
        <?php include('../../ui/footer.php'); ?>
    </div>

    <script src="script.js">
       
    </script>
</body>

</html>