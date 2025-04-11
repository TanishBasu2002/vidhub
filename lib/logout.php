<?php
// logout.php - Place this file in your root vidhub directory

// Start the session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Check if the logout request is valid
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['logout'])) {
    // Clear all session variables
    $_SESSION = array();
    
    // If using session cookies, delete the session cookie
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }
    
    // Destroy the session
    session_destroy();
    
    // Optional: Log the logout action
    $logFile = __DIR__ . '/logs/user_activity.log';
    if (file_exists(dirname($logFile)) && is_writable(dirname($logFile))) {
        $user = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : 'Unknown';
        $ip = $_SERVER['REMOTE_ADDR'];
        $timestamp = date('Y-m-d H:i:s');
        $logMessage = "[$timestamp] User: $user, IP: $ip - Logged out\n";
        
        // Append to log file
        file_put_contents($logFile, $logMessage, FILE_APPEND);
    }
    
    // Redirect to login page
    header('Location: /vidhub/');
    exit();
} else {
    // If accessed directly without proper POST request
    header('Location: /vidhub/');
    exit();
}
?>