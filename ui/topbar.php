<?php
// topbar.php
$base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
$auth_url = $base_url . '/vidhub/auth/';
?>
<!-- Top Bar -->
<div class="top-bar">
            <div style="display: flex; align-items: center;">
                <div class="search-box">
                    <i class="fas fa-search"></i>
                    <input type="text" placeholder="Search...">
                </div>
                <div class="search-button">
                    <a href="#">
                        <span class="text nav-text">Search</span>
                    </a>
                </div>
            </div>
            <ul class="top_bar_option">
                <li class="nav-link">
                    <a href="#">
                        <i class='bx bx-duplicate icon'></i>
                        <span class="text nav-text">Upload</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="#">
                        <i class='bx bx-bell icon'></i>
                        <span class="text nav-text">Notifications</span>
                    </a>
                </li>
                <li class="nav-link profile-container">
                    <a href="#" class="profile-link">
                        <i class='bx bx-user icon'></i>
                        <span class="text nav-text">Profile</span>
                    </a>
                    <div class="profile-popup">
                        <div class="popup-content">
                            <div class="popup-header">
                                <h3>Access Your Profile</h3>
                                <button class="close-popup">
                                    <i class='bx bx-x'></i>
                                </button>
                            </div>
                            <div class="popup-body">
                                <p>Looks like you’re not signed in yet. Join our community to unlock personalized features!</p>
                                <div class="popup-buttons">
                                    <a href="<?php echo $auth_url; ?>login_signup/" class="btn register-btn">
                                        <i class='bx bx-user-plus'></i> Register Now
                                    </a>
                                    <a href="<?php echo $auth_url; ?>login_signup/" class="btn login-btn">
                                        <i class='bx bx-log-in'></i> Log In
                                    </a>
                                </div>
                            </div>
                            <div class="popup-footer">
                                <p>Already a member? <a href="#" class="footer-link">Manage your account</a></p>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>