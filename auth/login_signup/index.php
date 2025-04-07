<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="form-box login">
            <form action="" id="loginForm">
                <h1>login</h1>
                <div class="input-box">
                    <input type="text" name="Email" placeholder="Email" required>
                    <i class='bx bx-user'></i>
                </div>
                <div class="input-box">
                    <input type="password" name="password" placeholder="Password" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <div class="forgot-link">
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit" class="btn">Login</button>
            </form>
        </div>
        <div class="form-box register">
            <form action="" id="registerForm">
                <h1>Registration</h1>
                <div class="register-form-wrapper">
                    <div class="input-box">
                        <input type="text" name="name" placeholder="Name" required>
                        <i class='bx bx-user'></i>
                    </div>
                    <div class="input-box">
                        <input type="email" name="email" placeholder="Email" required>
                        <i class='bx bxs-envelope'></i>
                    </div>
                    <div class="input-box">
                        <input type="date" name="date" placeholder="Date of Birth" required>
                        <i class='bx bx-calendar'></i>
                    </div>
                    <div class="input-box">
                        <input type="tel" name="phone" placeholder="Phone Number" required>
                        <i class='bx bx-phone'></i>
                    </div>
                    <div class="input-box">
                        <input type="password" name="password" placeholder="Password" required>
                        <i class='bx bxs-lock-alt'></i>
                    </div>
                    <div class="input-box">
                        <input type="password" name="confirmPassword" placeholder="Confirm Password" required>
                        <i class='bx bxs-lock-alt'></i>
                    </div>
                </div>
                <button type="submit" class="btn">Register</button>
            </form>
        </div>
        <div class="toggle-box">
            <div class="toggle-panel toggle-left">
                <h1>Hello, Welcome!</h1>
                <p>Don't have an account?</p>
                <button class="btn register-btn">register</button>
            </div>
            <div class="toggle-panel toggle-right">
                <h1>Welcome Back!</h1>
                <p>Already have an account?</p>
                <button class="btn login-btn">Login</button>
            </div>
        </div>
    </div>
    <script src="script.js"></script>

</body>

</html>