<?php 
// sidebar.php
$base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
$current_url = $base_url . $_SERVER['REQUEST_URI'];

// Check if current page is admin dashboard
$is_admin = strpos($current_url, '/admin/') !== false;

// URLs
$dashboard_url = $base_url . '/vidhub/dashboard/';
$admin_url = $base_url . '/vidhub/admin/';
$root_url = $base_url . '/vidhub/';
header(`Location: $root_url/auth/login/`);
 
exit;
?>