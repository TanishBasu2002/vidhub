<?php
// Redirect to login page
$loginUrl = 'http://' . $_SERVER['HTTP_HOST'] . '/vidhub/auth/login_signup/';
header('Location: ' . $loginUrl);
exit;
?>