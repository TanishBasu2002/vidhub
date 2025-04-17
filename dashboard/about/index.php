<?php
// Start PHP session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Define the path to data.php relative to this file
$dataFile = __DIR__ . '/../../lib/data.php';

// Check if data file exists and is readable
if (!file_exists($dataFile) || !is_readable($dataFile)) {
    die("Error: Could not load required data file");
}

// Include the data file
require_once $dataFile;

// Verify the data structure exists
if (!isset($data) || !is_array($data)) {
    die("Error: Invalid data structure");
}

// Set default values for about_us section
$aboutData = $data['about_us'] ?? [
    'page_title' => 'About Us',
    'title' => 'About Us',
    'subtitle' => 'Learn more about VidHub and the team behind it.',
    'mission_title' => 'Our Mission',
    'mission_content' => 'Default mission content',
    'team_title' => 'Meet Our Team',
    'team_members' => [],
    'contact_title' => 'Get in Touch',
    'contact_content' => 'Default contact content',
    'email_label' => 'Email:',
    'email' => 'support@example.com',
    'phone_label' => 'Phone:',
    'phone' => '+1-000-000-0000',
    'address_label' => 'Address:',
    'address' => '123 Default Street'
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VidHub - <?php echo htmlspecialchars($aboutData['page_title']); ?></title>
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <!-- Font Awesome for additional icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <!-- Sidebar -->
    <?php include '../../ui/sidebar.php'; ?>

    <!-- Main Content -->
    <div class="main-content" id="main-content">
        <!-- Top Bar -->
        <?php include '../../ui/topbar.php'; ?>

        <!-- About Us Section -->
        <div class="about-section">
            <div class="about-header">
                <h2 class="about-title"><?php echo htmlspecialchars($aboutData['title']); ?></h2>
                <p class="about-subtitle"><?php echo htmlspecialchars($aboutData['subtitle']); ?></p>
            </div>

            <!-- Mission Section -->
            <div class="mission-section">
                <h3 class="mission-title"><?php echo htmlspecialchars($aboutData['mission_title']); ?></h3>
                <div class="mission-content">
                    <p><?php echo htmlspecialchars($aboutData['mission_content']); ?></p>
                </div>
            </div>

            <!-- Team Section -->
            <div class="team-section">
                <h3 class="team-title"><?php echo htmlspecialchars($aboutData['team_title']); ?></h3>
                <div class="team-grid">
                    <?php if (!empty($aboutData['team_members'])): ?>
                        <?php foreach ($aboutData['team_members'] as $member): ?>
                            <div class="team-card">
                                <div class="team-image"><?php echo !empty($member['name']) ? substr(htmlspecialchars($member['name']), 0, 1) : '?'; ?></div>
                                <h4 class="team-name"><?php echo htmlspecialchars($member['name'] ?? 'Unknown'); ?></h4>
                                <p class="team-role"><?php echo htmlspecialchars($member['role'] ?? 'Team Member'); ?></p>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <div class="empty-state">
                            <i class='bx bx-user'></i>
                            <p>No team members available</p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Contact Section -->
            <div class="contact-section">
                <h3 class="contact-title"><?php echo htmlspecialchars($aboutData['contact_title']); ?></h3>
                <div class="contact-content">
                    <p><?php echo htmlspecialchars($aboutData['contact_content']); ?></p>
                    <p><?php echo htmlspecialchars($aboutData['email_label']); ?> <a href="mailto:<?php echo htmlspecialchars($aboutData['email']); ?>" class="contact-link"><?php echo htmlspecialchars($aboutData['email']); ?></a></p>
                    <p><?php echo htmlspecialchars($aboutData['phone_label']); ?> <?php echo htmlspecialchars($aboutData['phone']); ?></p>
                    <p><?php echo htmlspecialchars($aboutData['address_label']); ?> <?php echo htmlspecialchars($aboutData['address']); ?></p>
                </div>
            </div>
        </div>
        <?php include('../../ui/footer.php'); ?>
    </div>

    <!-- JavaScript -->
    <script src="script.js"></script>
</body>
</html>