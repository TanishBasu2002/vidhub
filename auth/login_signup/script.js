// Main script.js for form handling

// Toggle between login and registration forms
const container = document.querySelector('.container');
const registerBtn = document.querySelector('.register-btn');
const loginBtn = document.querySelector('.login-btn');

if (registerBtn) {
    registerBtn.addEventListener('click', () => {
        container.classList.add('active');
    });
}

if (loginBtn) {
    loginBtn.addEventListener('click', () => {
        container.classList.remove('active');
    });
}

// Login form handling
const loginForm = document.getElementById('loginForm');
if (loginForm) {
    loginForm.addEventListener('submit', (e) => {
        e.preventDefault();
        removeErrorMessages();

        const email = loginForm.Email.value.trim();
        const password = loginForm.password.value.trim();
        let isValid = true;

        if (!validateEmail(email)) {
            addErrorMessage(loginForm.Email, 'Please enter a valid email address');
            isValid = false;
        }

        if (password.length < 6) {
            addErrorMessage(loginForm.password, 'Password must be at least 6 characters');
            isValid = false;
        }

        if (isValid) {
            // Send AJAX request to login-process.php
            const formData = new FormData(loginForm);
            
            fetch('login-process.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    window.location.href = 'otp.php'; // Redirect to OTP page
                } else {
                    // Show error message at the top of the form
                    const formError = document.createElement('div');
                    formError.className = 'form-error';
                    formError.textContent = data.message;
                    loginForm.insertBefore(formError, loginForm.firstChild);
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        }
    });
}

// Registration form handling
const registerForm = document.getElementById('registerForm');
if (registerForm) {
    registerForm.addEventListener('submit', (e) => {
        e.preventDefault();
        removeErrorMessages();

        const name = registerForm.name.value.trim();
        const email = registerForm.email.value.trim();
        const date = registerForm.date.value.trim();
        const phone = registerForm.phone.value.trim();
        const password = registerForm.password.value.trim();
        const confirmPassword = registerForm.confirmPassword.value.trim();
        let isValid = true;

        if (name.length < 2) {
            addErrorMessage(registerForm.name, 'Name must be at least 2 characters');
            isValid = false;
        }

        if (!validateEmail(email)) {
            addErrorMessage(registerForm.email, 'Please enter a valid email address');
            isValid = false;
        }

        if (!date) {
            addErrorMessage(registerForm.date, 'Please select your date of birth');
            isValid = false;
        }

        if (!validatePhone(phone)) {
            addErrorMessage(registerForm.phone, 'Please enter a valid phone number');
            isValid = false;
        }

        if (password.length < 6) {
            addErrorMessage(registerForm.password, 'Password must be at least 6 characters');
            isValid = false;
        }

        if (password !== confirmPassword) {
            addErrorMessage(registerForm.confirmPassword, 'Passwords do not match');
            isValid = false;
        }

        if (isValid) {
            // Send AJAX request to register-process.php
            const formData = new FormData(registerForm);
            
            fetch('register-process.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    window.location.href = 'otp.php'; // Redirect to OTP page
                } else {
                    // Show error message at the top of the form
                    const formError = document.createElement('div');
                    formError.className = 'form-error';
                    formError.textContent = data.message;
                    registerForm.insertBefore(formError, registerForm.firstChild);
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        }
    });
}

// OTP form handling
const otpForm = document.getElementById('otpForm');
const resendBtn = document.getElementById('resendBtn');
const timerDisplay = document.getElementById('timer');
let timeLeft = 60;

if (otpForm) {
    // OTP form submission
    otpForm.addEventListener('submit', (e) => {
        e.preventDefault();
        removeErrorMessages();

        const otp = otpForm.otp.value.trim();
        let isValid = true;

        if (!validateOTP(otp)) {
            addErrorMessage(otpForm.otp, 'Please enter a valid 6-digit OTP');
            isValid = false;
        }

        if (isValid) {
            // Send AJAX request to verify-otp.php
            const formData = new FormData(otpForm);
            
            fetch('verify-otp.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    window.location.href = data.redirect;
                } else {
                    // Show error message at the top of the form
                    const formError = document.createElement('div');
                    formError.className = 'form-error';
                    formError.textContent = data.message;
                    otpForm.insertBefore(formError, otpForm.firstChild);
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        }
    });

    // Resend OTP
    if (resendBtn) {
        resendBtn.addEventListener('click', () => {
            // Send AJAX request to resend-otp.php
            fetch('resend-otp.php', {
                method: 'POST'
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    startTimer();
                    alert('OTP resent successfully');
                } else {
                    alert(data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });

        // Start timer on page load
        startTimer();
    }
}

// Helper functions
function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
}

function validatePhone(phone) {
    const re = /^\d{10,15}$/;
    return re.test(phone);
}

function validateOTP(otp) {
    const re = /^\d{6}$/;
    return re.test(otp);
}

function removeErrorMessages() {
    const existingErrors = document.querySelectorAll('.error-message');
    existingErrors.forEach(error => error.remove());
    
    const formErrors = document.querySelectorAll('.form-error');
    formErrors.forEach(error => error.remove());
    
    const errorInputs = document.querySelectorAll('.error');
    errorInputs.forEach(input => input.classList.remove('error'));
}

function addErrorMessage(inputElement, message) {
    inputElement.classList.add('error');
    const errorMsg = document.createElement('div');
    errorMsg.className = 'error-message';
    errorMsg.textContent = message;
    inputElement.parentElement.appendChild(errorMsg);
}

function startTimer() {
    if (resendBtn) {
        resendBtn.disabled = true;
    }
    timeLeft = 60;
    
    if (timerDisplay) {
        timerDisplay.textContent = `Resend available in ${timeLeft}s`;
    }

    const countdown = setInterval(() => {
        timeLeft--;
        
        if (timerDisplay) {
            timerDisplay.textContent = `Resend available in ${timeLeft}s`;
        }

        if (timeLeft <= 0) {
            clearInterval(countdown);
            if (resendBtn) {
                resendBtn.disabled = false;
            }
            if (timerDisplay) {
                timerDisplay.textContent = 'You can resend OTP now';
            }
        }
    }, 1000);
}