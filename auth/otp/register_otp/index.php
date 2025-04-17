<?php
// otp.php - OTP verification page

session_start();

// Check if user attempted login or registration
if (!isset($_SESSION['temp_email'])) {
    header("Location: index.php");
    exit;
}

$type = isset($_SESSION['login_attempt']) ? 'login' : 'register';
$email = $_SESSION['temp_email'];
$maskedEmail = maskEmail($email);

// Function to mask email for display
function maskEmail($email) {
    $parts = explode('@', $email);
    $name = $parts[0];
    $domain = $parts[1];
    
    $nameLength = strlen($name);
    if ($nameLength <= 2) {
        $maskedName = $name[0] . str_repeat('*', $nameLength - 1);
    } else {
        $maskedName = $name[0] . str_repeat('*', $nameLength - 2) . $name[$nameLength - 1];
    }
    
    return $maskedName . '@' . $domain;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Verification</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="form-box">
            <form action="" id="otpForm">
                <h1>OTP Verification</h1>
                <p class="otp-message">We have sent a verification code to <strong><?php echo $maskedEmail; ?></strong></p>
                <div class="input-box">
                    <input type="text" name="otp" placeholder="Enter OTP" required maxlength="6">
                    <i class='bx bxs-key'></i>
                </div>
                <button type="submit" class="btn">Verify OTP</button>
                <button type="button" class="btn resend-btn" id="resendBtn" disabled>Resend OTP</button>
                <div class="timer" id="timer">Resend available in 60s</div>
            </form>
        </div>
        <div class="toggle-box">
            <div class="toggle-panel">
                <h1><?php echo ($type == 'login') ? 'Login Verification' : 'Account Verification'; ?></h1>
                <p>Please enter the OTP sent to your email</p>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>