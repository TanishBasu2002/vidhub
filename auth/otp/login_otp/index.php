<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Verification</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../style.css">

</head>

<body>
    <div class="container">
        <div class="form-box">
            <form action="" id="otpForm">
                <h1>OTP Verification</h1>
                <div class="input-box">
                    <input type="text" name="otp" placeholder="Enter OTP" required maxlength="6">
                    <i class='bx bxs-key'></i>
                </div>
                <button type="submit" class="btn">Submit OTP</button>
                <button type="button" class="btn resend-btn" id="resendBtn" disabled>Resend OTP</button>
                <div class="timer" id="timer">Resend available in 60s</div>
            </form>
        </div>
        <div class="toggle-box">
            <div class="toggle-panel">
                <h1>To Login Your Account</h1>
                <p>Please enter the OTP sent to your email/phone</p>
            </div>
        </div>
    </div>

    <script src="../script.js"></script>
</body>

</html>