<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VidHub - Followers</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <?php 
    // Include the data file with proper path
    require_once __DIR__ . '/../../lib/data.php';
    
    // Check if data exists and has followers
    $followers = $data['followers'] ?? [];
    $followersCount = count($followers);
    ?>
    
    <?php include '../../ui/sidebar.php'; ?>
    
    <div class="main-content" id="main-content">
        <?php include '../../ui/topbar2.php'; ?>

        <div class="followers-header">
            <div class="followers-count">Your Followers: <span><?php echo number_format($followersCount); ?></span></div>
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
            <?php if (!empty($followers)): ?>
                <?php foreach ($followers as $follower): ?>
                    <div class="follower-card">
                        <img src="<?php echo htmlspecialchars($follower['avatar']); ?>" alt="Follower" class="follower-avatar">
                        <div class="follower-info">
                            <div class="follower-name"><?php echo htmlspecialchars($follower['name']); ?></div>
                            <div class="follower-username"><?php echo htmlspecialchars($follower['username']); ?></div>
                            <div class="follower-stats">
                                Following since: <?php echo htmlspecialchars($follower['following_since']); ?> | 
                                Videos: <?php echo htmlspecialchars($follower['video_count']); ?>
                            </div>
                        </div>
                        <button class="follow-button <?php echo $follower['is_following'] ? 'following' : ''; ?>" 
                                onclick="toggleFollow(this)">
                            <?php echo $follower['is_following'] ? 'Following' : 'Follow Back'; ?>
                        </button>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="empty-state">
                    <i class='bx bx-user'></i>
                    <p>You don't have any followers yet.</p>
                </div>
            <?php endif; ?>
        </div>
        <?php include('../../ui/footer.php'); ?>
    </div>

    <script src="script.js"></script>
</body>
</html>