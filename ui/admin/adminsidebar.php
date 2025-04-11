<?php
// admin-sidebar.php
// Get the base URL dynamically
$base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
$dashboard_url = $base_url . '/vidhub/dashboard/';
$admin_url = $dashboard_url . 'admin/';
$root_url = $base_url . '/vidhub/';
?>
<!-- Link to external CSS file -->
<link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
<nav class="sidebar">
    <header>
        <div class="image-text">
            <span class="image">
                <a href="<?php echo $base_url; ?>">
                    <img src="<?php echo $root_url; ?>assets/images/logo.png" alt="VIDHUB Logo">
                </a>
            </span>
            <div class="text logo-text">
                <span class="name">VIDHUB ADMIN</span>
                <span class="profession">Admin Panel</span>
            </div>
        </div>
        <i class='bx bx-chevron-right toggle' aria-hidden="true"></i>
    </header>
    
    <hr aria-hidden="true">
    
    <div class="menu-bar">
        <div class="admin-section">
            <h3 class="section-title">Admin Panel</h3>
        </div>

        <div class="menu">
            <ul>
                <li class="nav-link">
                    <a href="<?php echo $admin_url; ?>" aria-current="page">
                        <i class='bx bx-home icon' aria-hidden="true"></i>
                        <span class="text nav-text">Home</span>
                    </a>
                </li>
                
                <li class="nav-link">
                    <a href="<?php echo $admin_url; ?>admin-account/">
                        <i class='bx bx-user-pin icon' aria-hidden="true"></i>
                        <span class="text nav-text">Admin Account</span>
                    </a>
                </li>
                
                <li class="nav-link">
                    <a href="<?php echo $admin_url; ?>registered-users/">
                        <i class='bx bx-user icon' aria-hidden="true"></i>
                        <span class="text nav-text">Registered Users</span>
                    </a>
                </li>
                
                <li class="nav-link">
                    <a href="<?php echo $admin_url; ?>registered-channels/">
                        <i class='bx bx-broadcast icon' aria-hidden="true"></i>
                        <span class="text nav-text">Registered Channels</span>
                    </a>
                </li>
                
                <li class="nav-link">
                    <a href="<?php echo $admin_url; ?>registered-admins/">
                        <i class='bx bx-crown icon' aria-hidden="true"></i>
                        <span class="text nav-text">Registered Admins</span>
                    </a>
                </li>
                
                <li class="nav-link">
                    <a href="<?php echo $admin_url; ?>reported-videos/">
                        <i class='bx bx-flag icon' aria-hidden="true"></i>
                        <span class="text nav-text">Reported Videos</span>
                    </a>
                </li>
                
                <li class="nav-link">
                    <a href="<?php echo $admin_url; ?>user-feedback/">
                        <i class='bx bx-message-square-detail icon' aria-hidden="true"></i>
                        <span class="text nav-text">User Feedback</span>
                    </a>
                </li>
                
                <li class="nav-link">
                    <a href="<?php echo $admin_url; ?>developers/">
                        <i class='bx bx-code-alt icon' aria-hidden="true"></i>
                        <span class="text nav-text">Developers</span>
                    </a>
                </li>
            </ul>
        </div>
        
        <div class="bottom-content">
            <hr aria-hidden="true">
            
            <ul>
                <li class="nav-link">
                    <a href="#" id="logout-btn">
                        <i class='bx bx-log-out icon' aria-hidden="true"></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>
                
                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon' aria-hidden="true"></i>
                        <i class='bx bx-sun icon sun' aria-hidden="true"></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>
                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Logout form (hidden) -->
<form id="logout-form" action="<?php echo $root_url; ?>logout.php" method="POST" style="display: none;">
    <input type="hidden" name="logout" value="1">
</form>

<script>
// Toggle sidebar functionality
document.querySelector('.toggle').addEventListener('click', function() {
    const sidebar = document.querySelector('.sidebar');
    sidebar.classList.toggle('close');
    
    // Adjust main content margin
    const mainContent = document.querySelector('.main-content');
    if (mainContent) {
        if (sidebar.classList.contains('close')) {
            mainContent.style.marginLeft = '88px';
            mainContent.style.width = 'calc(100% - 88px)';
        } else {
            mainContent.style.marginLeft = '250px';
            mainContent.style.width = 'calc(100% - 250px)';
        }
    }
});

// Dark mode toggle functionality
const modeToggle = document.querySelector('.mode');
const body = document.body;

// Check for saved user preference
if (localStorage.getItem('darkMode') === 'enabled') {
    body.classList.add('dark');
    document.querySelector('.mode-text').textContent = 'Light mode';
}

modeToggle.addEventListener('click', () => {
    body.classList.toggle('dark');
    
    if (body.classList.contains('dark')) {
        localStorage.setItem('darkMode', 'enabled');
        document.querySelector('.mode-text').textContent = 'Light mode';
    } else {
        localStorage.setItem('darkMode', 'disabled');
        document.querySelector('.mode-text').textContent = 'Dark mode';
    }
});

// Improved Logout functionality
document.getElementById('logout-btn').addEventListener('click', function(e) {
    e.preventDefault();
    
    // Show confirmation dialog
    if (confirm("Are you sure you want to logout?")) {
        // Submit the logout form
        document.getElementById('logout-form').submit();
    }
});

// Active link highlighting
document.addEventListener('DOMContentLoaded', function() {
    const currentLocation = window.location.href;
    const menuItems = document.querySelectorAll('.nav-link a');
    
    menuItems.forEach(item => {
        if (currentLocation.includes(item.getAttribute('href'))) {
            item.parentElement.classList.add('active');
            item.setAttribute('aria-current', 'page');
        }
    });

    // Add active class styling if not already in CSS
    document.head.insertAdjacentHTML('beforeend', `
        <style>
            .nav-link.active a {
                background-color: var(--primary-color);
            }
            .nav-link.active a .icon,
            .nav-link.active a .text {
                color: var(--sidebar-color);
            }
            body.dark .nav-link.active a .icon,
            body.dark .nav-link.active a .text {
                color: var(--sidebar-color);
            }
        </style>
    `);
});
</script>

