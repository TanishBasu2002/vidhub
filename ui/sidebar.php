<?php
// sidebar.php
?>
<nav class="sidebar">
    <header>
        <div class="image-text">
            <span class="image">
                <img src="assets/images/logo.png" alt="VIDHUB Logo">
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
        <ul class="menu"> <!-- Changed to proper ul element -->
            <li class="nav-link">
                <a href="index.php" aria-current="page">
                    <i class='bx bx-home-alt icon' aria-hidden="true"></i>
                    <span class="text nav-text">Home</span>
                </a>
            </li>
            
            <li class="nav-link">
                <a href="trending/index.php"> <!-- Fixed typo in href -->
                    <i class='bx bx-bar-chart-alt-2 icon' aria-hidden="true"></i>
                    <span class="text nav-text">Trending</span>
                </a>
            </li>
            
            <li class="nav-link">
                <a href="history.php">
                    <i class='bx bx-history icon' aria-hidden="true"></i>
                    <span class="text nav-text">History</span>
                </a>
            </li>
            
            <li class="nav-link">
                <a href="account.php">
                    <i class='bx bx-user-circle icon' aria-hidden="true"></i>
                    <span class="text nav-text">Account</span>
                </a>
            </li>
            
            <li class="nav-link">
                <a href="your_videos.php"> <!-- Fixed pluralization -->
                    <i class='bx bx-video icon' aria-hidden="true"></i>
                    <span class="text nav-text">Your Videos</span>
                </a>
            </li>
            
            <li class="nav-link">
                <a href="followers.php"> <!-- Fixed typo in href -->
                    <i class='bx bx-group icon' aria-hidden="true"></i>
                    <span class="text nav-text">Followers</span>
                </a>
            </li>
            
            <li class="nav-link">
                <a href="playlist.php">
                    <i class='bx bx-movie-play icon' aria-hidden="true"></i>
                    <span class="text nav-text">Playlist</span>
                </a>
            </li>
            
            <li class="nav-link">
                <a href="watch_later.php">
                    <i class='bx bx-time-five icon' aria-hidden="true"></i>
                    <span class="text nav-text">Watch Later</span>
                </a>
            </li>
            
            <li class="nav-link">
                <a href="liked_videos.php"> <!-- Fixed href -->
                    <i class='bx bx-heart icon' aria-hidden="true"></i>
                    <span class="text nav-text">Liked Videos</span>
                </a>
            </li>
            
            <li class="nav-link">
                <a href="help.php">
                    <i class='bx bx-help-circle icon' aria-hidden="true"></i>
                    <span class="text nav-text">Help</span>
                </a>
            </li>
            
            <li class="nav-link">
                <a href="privacy_policy.php">
                    <i class='bx bx-lock-alt icon' aria-hidden="true"></i>
                    <span class="text nav-text">Privacy Policy</span>
                </a>
            </li>
            
            <li class="nav-link">
                <a href="terms_conditions.php"> <!-- Fixed href -->
                    <i class='bx bx-donate-heart icon' aria-hidden="true"></i>
                    <span class="text nav-text">Terms & Conditions</span>
                </a>
            </li>
            
            <li class="nav-link">
                <a href="about.php">
                    <i class='bx bx-label icon' aria-hidden="true"></i>
                    <span class="text nav-text">About</span>
                </a>
            </li>
            
            <li class="nav-link">
                <a href="copyright/index.php"> <!-- Fixed href -->
                    <i class='bx bx-copy-alt icon' aria-hidden="true"></i>
                    <span class="text nav-text">Copyright</span>
                </a>
            </li>
            
            <li class="nav-link">
                <a href="send_feedback.php"> <!-- Fixed href -->
                    <i class='bx bx-edit-alt icon' aria-hidden="true"></i>
                    <span class="text nav-text">Send Feedback</span>
                </a>
            </li>
            
            <li class="nav-link">
                <a href="developers.php"> <!-- Fixed href -->
                    <i class='bx bx-terminal icon' aria-hidden="true"></i>
                    <span class="text nav-text">Developers</span>
                </a>
            </li>
        </ul>
        
        <div class="bottom-content">
            <hr aria-hidden="true">
            
            <ul> <!-- Added ul for bottom content -->
                <li class="nav-link">
                    <a href="logout.php" id="logout-btn"> <!-- Changed to proper link -->
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
    fetch('logout.php', {
        method: 'POST'
    }).then(response => {
        if (response.ok) {
            window.location.href = 'index.php';
        }
    });
});
</script>