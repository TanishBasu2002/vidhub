<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <!-- Font Awesome for search icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <?php include '../../ui/sidebar.php'; ?>
    <!-- Main Content -->
    <div class="main-content" id="main-content">
        <!-- Top Bar -->
        <?php include '../../ui/topbar2.php'; ?>

        <div class="followers-header">
            <div class="followers-count">Your Followers: <span>1,245</span></div>
            <div class="followers-search">
                <i class='bx bx-search'></i>
                <input type="text" placeholder="Search followers..." id="searchInput">
            </div>
        </div>

        <div class="followers-controls">
            <button class="sort-button" onclick="sortFollowers('name')">Sort by Name</button>
            <button class="sort-button" onclick="sortFollowers('date')">Sort by Date</button>
        </div>

        <div class="followers-list" id="followersList">
            <div class="follower-card">
                <img src="#" alt="Follower" class="follower-avatar">
                <div class="follower-info">
                    <div class="follower-name">Shubhrajyoti</div>
                    <div class="follower-username">@Sj</div>
                    <div class="follower-stats">Following since: Mar 2025 | Videos: 45</div>
                </div>
                <button class="follow-button following" onclick="toggleFollow(this)">Following</button>
            </div>
            <div class="follower-card">
                <img src="#" alt="Follower" class="follower-avatar">
                <div class="follower-info">
                    <div class="follower-name">Lima</div>
                    <div class="follower-username">@LimaSakar</div>
                    <div class="follower-stats">Following since: Jan 2025 | Videos: 23</div>
                </div>
                <button class="follow-button" onclick="toggleFollow(this)">Follow Back</button>
            </div>
            <div class="follower-card">
                <img src="#" alt="Follower" class="follower-avatar">
                <div class="follower-info">
                    <div class="follower-name">Priyanka</div>
                    <div class="follower-username">@pM</div>
                    <div class="follower-stats">Following since: Feb 2025 | Videos: 67</div>
                </div>
                <button class="follow-button following" onclick="toggleFollow(this)">Following</button>
            </div>
        </div>
        <?php include('../../ui/footer.php'); ?>
    </div>

    <script src="script.js">
       
    </script>
</body>

</html>