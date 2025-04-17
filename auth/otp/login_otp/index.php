<?php
// functions.php - Helper functions

// Generate random OTP
function generateOTP() {
    return str_pad(rand(0, 999999), 6, '0', STR_PAD_LEFT);
}

// Send email with OTP
function sendOTPEmail($email, $otp, $type, $name = '') {
    $subject = ($type == 'login') ? "Login OTP Verification" : "Account Registration OTP";
    
    if ($type == 'login') {
        $message = "
        <html>
        <head>
            <title>Login OTP Verification</title>
        </head>
        <body>
            <h2>Login Verification</h2>
            <p>Hello,</p>
            <p>Your OTP for logging in to your account is: <strong>$otp</strong></p>
            <p>This code will expire in 10 minutes.</p>
            <p>If you did not request this login, please ignore this email or contact support.</p>
            <p>Thank you!</p>
        </body>
        </html>
        ";
    } else {
        $message = "
        <html>
        <head>
            <title>Registration OTP Verification</title>
        </head>
        <body>
            <h2>Account Registration</h2>
            <p>Hello $name,</p>
            <p>Thank you for registering. Your OTP for verifying your account is: <strong>$otp</strong></p>
            <p>This code will expire in 10 minutes.</p>
            <p>Thank you for joining us!</p>
        </body>
        </html>
        ";
    }
    
    // Set email headers
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: Your Company <noreply@yourcompany.com>" . "\r\n";
    
    // Send email
    return mail($email, $subject, $message, $headers);
}

// Store OTP in database
function storeOTP($conn, $email, $otp, $type) {
    // Delete any existing OTPs for this email and type
    $stmt = $conn->prepare("DELETE FROM otp_codes WHERE email = ? AND type = ?");
    $stmt->bind_param("ss", $email, $type);
    $stmt->execute();
    $stmt->close();
    
    // Set expiry time (10 minutes from now)
    $expiryTime = date('Y-m-d H:i:s', strtotime('+10 minutes'));
    
    // Insert new OTP
    $stmt = $conn->prepare("INSERT INTO otp_codes (email, otp, expires_at, type) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $email, $otp, $expiryTime, $type);
    $result = $stmt->execute();
    $stmt->close();
    
    return $result;
}

// Verify OTP
function verifyOTP($conn, $email, $otp, $type) {
    $stmt = $conn->prepare("SELECT * FROM otp_codes WHERE email = ? AND otp = ? AND type = ? AND expires_at > NOW()");
    $stmt->bind_param("sss", $email, $otp, $type);
    $stmt->execute();
    $result = $stmt->get_result();
    $valid = $result->num_rows > 0;
    $stmt->close();
    
    if ($valid) {
        // Delete the used OTP
        $stmt = $conn->prepare("DELETE FROM otp_codes WHERE email = ? AND otp = ? AND type = ?");
        $stmt->bind_param("sss", $email, $otp, $type);
        $stmt->execute();
        $stmt->close();
    }
    
    return $valid;
}
?>