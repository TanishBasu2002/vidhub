<?php
// sidebar.php
$base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
$current_url = $base_url . $_SERVER['REQUEST_URI'];

// Check if current page is admin dashboard
$is_admin = strpos($current_url, '/admin/') !== false;

// URLs

$admin_url = $base_url . '/vidhub/admin/';
$root_url = $base_url . '/vidhub/';

// Sample user data (would normally come from session)
$user_data = [
    'username' => 'Vidhub',
    'avatar' => $root_url . 'assets/images/default-avatar.jpg',
    'is_admin' => $is_admin // For demo, set admin status based on URL
];
?>

<nav class="sidebar">
    <header>
        <div class="image-text">
            <span class="image">
                <a href="<?= $base_url ?>">
                    <img src="<?php echo $root_url; ?>assets/images/logo.png" alt="User Avatar">
                </a>
            </span>
            <div class="text logo-text">
                <span class="name"><?= $user_data['username'] ?></span>
                <span class="profession"><?= $is_admin ? 'Admin' : 'User' ?> Dashboard</span>
            </div>
        </div>
        <i class='bx bx-chevron-right toggle'></i>
    </header>
    
    <hr>
    
    <div class="menu-bar">
    <ul class="menu">
    <?php
    // Define menu items with their icons and paths
    $menuItems = [
        'Home' => [
            'icon' => 'bx-home-alt',
            'path' => ''
        ],
        'Form' => [
            'icon' => 'bx-bar-chart-alt-2',
            'path' => 'adminform/'
        ],
        'Creator' => [
            'icon' => 'bx-history',
            'path' => 'creator/'
        ],
        'Repost' => [
            'icon' => 'bx-video',
            'path' => 'repost/'
        ],
        'User' => [
            'icon' => 'bx-user-circle',
            'path' => 'user/'
        ],
        'Feedback' => [
            'icon' => 'bx-lock-alt',
            'path' => 'user-feedback/'
        ],
    ];

    // Support links (separated for better organization)
    $supportItems = [
       
    ];

    // Get current path
    $current_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $dashboard_path = parse_url($admin_url, PHP_URL_PATH);
    $is_dashboard = strpos($current_path, $dashboard_path) === 0;

    // Function to check if menu item is active
    function isActive($path, $itemPath, $dashboardPath, $currentPath) {
        $fullPath = $dashboardPath . $itemPath;
        return $currentPath === $fullPath || 
               ($itemPath === '' && $currentPath === $dashboardPath);
    }

    // Main menu items
    foreach ($menuItems as $text => $item) {
        $active = $is_dashboard && isActive($dashboard_path, $item['path'], $dashboard_path, $current_path);
        ?>
        <li class="nav-link <?= $active ? 'active' : '' ?>">
            <a href="<?= $admin_url . $item['path'] ?>" <?= $active ? 'aria-current="page"' : '' ?>>
                <i class='bx <?= $item['icon'] ?> icon' aria-hidden="true"></i>
                <span class="text nav-text"><?= $text ?></span>
            </a>
        </li>
        <?php
    }
    ?>

    <li class="menu-divider" aria-hidden="true"></li>

    <?php
    // Support menu items
    foreach ($supportItems as $text => $item) {
        $active = $is_dashboard && isActive($dashboard_path, $item['path'], $dashboard_path, $current_path);
        ?>
        <li class="nav-link <?= $active ? 'active' : '' ?>">
            <a href="<?= $admin_url . $item['path'] ?>" <?= $active ? 'aria-current="page"' : '' ?>>
                <i class='bx <?= $item['icon'] ?> icon' aria-hidden="true"></i>
                <span class="text nav-text"><?= $text ?></span>
            </a>
        </li>
        <?php
    }
    ?>
</ul>
        
        <div class="bottom-content">
            <hr>
            
            <ul>
            <li class="nav-link">
                    <a href="<?= $root_url ?>/auth/login_signup">
                        <i class='bx bx-log-out icon'></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>
                
                <?php if ($user_data['is_admin']): ?>
                    <li class="nav-link">
                        <a href="<?= $is_admin ? $admin_url : $admin_url ?>">
                            <i class='bx bx-<?= $is_admin ? 'user' : 'shield-alt' ?> icon'></i>
                            <span class="text nav-text"><?= $is_admin ? 'User View' : 'Admin Panel' ?></span>
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>

<script>
// Toggle sidebar
document.querySelector('.toggle').addEventListener('click', function() {
    document.querySelector('.sidebar').classList.toggle('close');
});

// Dark mode toggle
const modeToggle = document.querySelector('.mode');
if (modeToggle) {
    modeToggle.addEventListener('click', () => {
        document.body.classList.toggle('dark');
        localStorage.setItem('darkMode', document.body.classList.contains('dark') ? 'enabled' : 'disabled');
    });
    
    // Check for saved preference
    if (localStorage.getItem('darkMode') === 'enabled') {
        document.body.classList.add('dark');
    }
}
</script>