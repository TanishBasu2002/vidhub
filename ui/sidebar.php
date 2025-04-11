<?php
// sidebar.php
// Get the base URL dynamically
$base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
$dashboard_url = $base_url . '/vidhub/dashboard/';
$root_url = $base_url . '/vidhub/'
?>
<nav class="sidebar">
    <header>
        <div class="image-text">
            <span class="image">
                <a href="<?php echo $base_url; ?>">
                    <img src="<?php echo $root_url; ?>assets/images/logo.png" alt="VIDHUB Logo">
                </a>
            </span>
            <div class="text logo-text">
                <span class="name">VIDHUB</span>
                <span class="profession">Streaming Software</span>
            </div>
        </div>
        <i class='bx bx-chevron-right toggle' aria-hidden="true"></i>
    </header>
    
    <hr aria-hidden="true">
    
    <div class="menu-bar">
        <ul class="menu">
            <li class="nav-link">
                <a href="<?php echo $dashboard_url; ?>" aria-current="page">
                    <i class='bx bx-home-alt icon' aria-hidden="true"></i>
                    <span class="text nav-text">Home</span>
                </a>
            </li>
            
            <li class="nav-link">
                <a href="<?php echo $dashboard_url; ?>trending/">
                    <i class='bx bx-bar-chart-alt-2 icon' aria-hidden="true"></i>
                    <span class="text nav-text">Trending</span>
                </a>
            </li>
            
            <li class="nav-link">
                <a href="<?php echo $dashboard_url; ?>history/">
                    <i class='bx bx-history icon' aria-hidden="true"></i>
                    <span class="text nav-text">History</span>
                </a>
            </li>
            
            <li class="nav-link">
                <a href="<?php echo $dashboard_url; ?>account/">
                    <i class='bx bx-user-circle icon' aria-hidden="true"></i>
                    <span class="text nav-text">Account</span>
                </a>
            </li>

            <li class="nav-link">
                <a href="<?php echo $dashboard_url; ?>admin/">
                    <i class='bx bx-user-circle icon' aria-hidden="true"></i>
                    <span class="text nav-text">Admin</span>
                </a>
            </li>
            
            <li class="nav-link">
                <a href="<?php echo $dashboard_url; ?>your_videos/">
                    <i class='bx bx-video icon' aria-hidden="true"></i>
                    <span class="text nav-text">Your Videos</span>
                </a>
            </li>
            
            <li class="nav-link">
                <a href="<?php echo $dashboard_url; ?>followers/">
                    <i class='bx bx-group icon' aria-hidden="true"></i>
                    <span class="text nav-text">Followers</span>
                </a>
            </li>
            
            <li class="nav-link">
                <a href="<?php echo $dashboard_url; ?>playlist/">
                    <i class='bx bx-movie-play icon' aria-hidden="true"></i>
                    <span class="text nav-text">Playlist</span>
                </a>
            </li>
            
            <li class="nav-link">
                <a href="<?php echo $dashboard_url; ?>watch_later/">
                    <i class='bx bx-time-five icon' aria-hidden="true"></i>
                    <span class="text nav-text">Watch Later</span>
                </a>
            </li>
            
            <li class="nav-link">
                <a href="<?php echo $dashboard_url; ?>liked_videos/">
                    <i class='bx bx-heart icon' aria-hidden="true"></i>
                    <span class="text nav-text">Liked Videos</span>
                </a>
            </li>
            
            <li class="nav-link">
                <a href="<?php echo $dashboard_url; ?>help/">
                    <i class='bx bx-help-circle icon' aria-hidden="true"></i>
                    <span class="text nav-text">Help</span>
                </a>
            </li>
            
            <li class="nav-link">
                <a href="<?php echo $dashboard_url; ?>privacy_policy/">
                    <i class='bx bx-lock-alt icon' aria-hidden="true"></i>
                    <span class="text nav-text">Privacy Policy</span>
                </a>
            </li>
            
            <li class="nav-link">
                <a href="<?php echo $dashboard_url; ?>terms_conditions/">
                    <i class='bx bx-donate-heart icon' aria-hidden="true"></i>
                    <span class="text nav-text">Terms & Conditions</span>
                </a>
            </li>
            
            <li class="nav-link">
                <a href="<?php echo $dashboard_url; ?>about/">
                    <i class='bx bx-label icon' aria-hidden="true"></i>
                    <span class="text nav-text">About</span>
                </a>
            </li>
            
            <li class="nav-link">
                <a href="<?php echo $dashboard_url; ?>copyright/">
                    <i class='bx bx-copy-alt icon' aria-hidden="true"></i>
                    <span class="text nav-text">Copyright</span>
                </a>
            </li>
            
            <li class="nav-link">
                <a href="<?php echo $dashboard_url; ?>send_feedback/">
                    <i class='bx bx-edit-alt icon' aria-hidden="true"></i>
                    <span class="text nav-text">Send Feedback</span>
                </a>
            </li>
            
            <li class="nav-link">
                <a href="<?php echo $dashboard_url; ?>developers/">
                    <i class='bx bx-terminal icon' aria-hidden="true"></i>
                    <span class="text nav-text">Developers</span>
                </a>
            </li>
        </ul>
        
        <div class="bottom-content">
            <hr aria-hidden="true">
            
            <ul>
                <li class="nav-link">
                    <a href="<?php echo $base_url; ?>/vidhub/" id="logout-btn">
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

<script>
// Toggle sidebar functionality
document.querySelector('.toggle').addEventListener('click', function() {
    document.querySelector('.sidebar').classList.toggle('close');
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

// Logout functionality
document.getElementById('logout-btn').addEventListener('click', function(e) {
    e.preventDefault();
    // Add your logout logic here
    fetch('<?php echo $base_url; ?>/vidhub/', {
        method: 'POST'
    }).then(response => {
        if (response.ok) {
            window.location.href = '<?php echo $base_url; ?>/vidhub/';
        }
    });
});
</script>