<?php
// Include the data file
$data = include '../../lib/data.php';

// Sample data for feedback
$feedbacks = [
    [
        'id' => 1,
        'user_name' => 'John Doe',
        'user_avatar' => '../assets/avatars/user1.jpg',
        'rating' => 5,
        'date' => '2025-04-12',
        'title' => 'Great User Experience',
        'text' => 'The platform is very intuitive and easy to navigate. I love how quickly I can find and watch videos.',
        'category' => ['UI/UX', 'Performance']
    ],
    [
        'id' => 2,
        'user_name' => 'Sarah Johnson',
        'user_avatar' => '../assets/avatars/user2.jpg',
        'rating' => 4,
        'date' => '2025-04-10',
        'title' => 'Video Quality Issues',
        'text' => 'Most videos are great but sometimes I experience buffering issues when watching longer content.',
        'category' => ['Performance', 'Video Quality']
    ],
    [
        'id' => 3,
        'user_name' => 'Michael Brown',
        'user_avatar' => '../assets/avatars/user3.jpg',
        'rating' => 3,
        'date' => '2025-04-09',
        'title' => 'Search Functionality',
        'text' => 'The search could be improved. Sometimes I have trouble finding specific videos even when I know the exact title.',
        'category' => ['Search', 'UI/UX']
    ],
    [
        'id' => 4,
        'user_name' => 'Emily Wilson',
        'user_avatar' => '../assets/avatars/user4.jpg',
        'rating' => 5,
        'date' => '2025-04-08',
        'title' => 'Amazing Content',
        'text' => 'I love the variety of content available. There\'s always something new and interesting to watch!',
        'category' => ['Content']
    ],
    [
        'id' => 5,
        'user_name' => 'David Garcia',
        'user_avatar' => '../assets/avatars/user5.jpg',
        'rating' => 2,
        'date' => '2025-04-07',
        'title' => 'App Crashes Frequently',
        'text' => 'The mobile app keeps crashing when I try to watch videos for more than 30 minutes. This is frustrating.',
        'category' => ['Performance', 'Bug']
    ],
    [
        'id' => 6,
        'user_name' => 'Lisa Martinez',
        'user_avatar' => '../assets/avatars/user6.jpg',
        'rating' => 4,
        'date' => '2025-04-06',
        'title' => 'Great Recommendations',
        'text' => 'The recommendation system is spot on! It always suggests videos that match my interests.',
        'category' => ['AI/Recommendations']
    ]
];

// Stats data
$stats = [
    'positive' => 42,
    'neutral' => 15,
    'negative' => 8,
    'total' => 65
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | User Feedback</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../../ui/styles/index.css">
</head>
<body>
    <?php include '../../ui/admin-sidebar.php'; ?>

    <section class="home">

        <div class="main-content">
            <div class="top-bar">
                <h2 class="text">User Feedback</h2>
                <div class="top_bar_option">
                    <li><a href="#"><i class='bx bx-home'></i> Home</a></li>
                    <li><a href="#"><i class='bx bx-message-square-detail'></i> Feedback</a></li>
                </div>
            </div>

            <!-- Stats Cards -->
            <div class="stats-container">
                <div class="stat-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="stat-icon positive">
                        <i class='bx bx-smile'></i>
                    </div>
                    <div class="stat-info">
                        <div class="stat-value"><?php echo $stats['positive']; ?></div>
                        <div class="stat-label">Positive Feedback</div>
                    </div>
                </div>

                <div class="stat-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="stat-icon neutral">
                        <i class='bx bx-meh'></i>
                    </div>
                    <div class="stat-info">
                        <div class="stat-value"><?php echo $stats['neutral']; ?></div>
                        <div class="stat-label">Neutral Feedback</div>
                    </div>
                </div>

                <div class="stat-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="stat-icon negative">
                        <i class='bx bx-sad'></i>
                    </div>
                    <div class="stat-info">
                        <div class="stat-value"><?php echo $stats['negative']; ?></div>
                        <div class="stat-label">Negative Feedback</div>
                    </div>
                </div>

                <div class="stat-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="stat-icon total">
                        <i class='bx bx-message-square-detail'></i>
                    </div>
                    <div class="stat-info">
                        <div class="stat-value"><?php echo $stats['total']; ?></div>
                        <div class="stat-label">Total Feedback</div>
                    </div>
                </div>
            </div>

            <!-- Filter Options -->
            <div class="filter-options">
                <button class="filter-btn active">All</button>
                <button class="filter-btn">Positive (4-5 ★)</button>
                <button class="filter-btn">Neutral (3 ★)</button>
                <button class="filter-btn">Negative (1-2 ★)</button>
                <button class="filter-btn">UI/UX</button>
                <button class="filter-btn">Performance</button>
                <button class="filter-btn">Bug Reports</button>
                <button class="filter-btn">Content</button>
            </div>

            <!-- Feedback Cards -->
            <div class="feedback-cards">
                <?php foreach ($feedbacks as $feedback): ?>
                <div class="feedback-card" data-aos="fade-up">
                    <div class="feedback-header">
                        <div class="user-info">
                            <img src="<?php echo htmlspecialchars($feedback['user_avatar']); ?>" alt="User Avatar" class="user-avatar">
                            <div>
                                <div class="user-name"><?php echo htmlspecialchars($feedback['user_name']); ?></div>
                                <div class="feedback-date"><?php echo htmlspecialchars($feedback['date']); ?></div>
                            </div>
                        </div>
                        <div class="feedback-rating">
                            <?php for ($i = 1; $i <= 5; $i++): ?>
                                <i class="bx <?php echo $i <= $feedback['rating'] ? 'bxs-star' : 'bx-star'; ?> rating-star"></i>
                            <?php endfor; ?>
                        </div>
                    </div>
                    <div class="feedback-body">
                        <h3 class="feedback-title"><?php echo htmlspecialchars($feedback['title']); ?></h3>
                        <p class="feedback-text"><?php echo htmlspecialchars($feedback['text']); ?></p>
                        <div>
                            <?php foreach ($feedback['category'] as $category): ?>
                                <span class="feedback-category"><?php echo htmlspecialchars($category); ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="feedback-actions">
                        <button class="action-btn respond-btn">
                            <i class='bx bx-reply'></i> Respond
                        </button>
                        <div>
                            <button class="action-btn">
                                <i class='bx bx-flag'></i> Mark As Resolved
                            </button>
                            <button class="action-btn delete-btn">
                                <i class='bx bx-trash'></i> Delete
                            </button>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Delete Confirmation Popup -->
    <div class="popup" id="deletePopup">
        <div class="popup-content">
            <h3>Are you sure you want to delete this feedback?</h3>
            <p>This action cannot be undone.</p>
            <div class="popup-buttons">
                <button class="confirm-btn" onclick="confirmDelete()">Delete</button>
                <button class="cancel-btn" onclick="hidePopup()">Cancel</button>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="script.js">
    </script>
</body>
</html>