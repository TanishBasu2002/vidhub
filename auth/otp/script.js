const otpForm = document.getElementById('otpForm');
        const resendBtn = document.getElementById('resendBtn');
        const timerDisplay = document.getElementById('timer');
        let timeLeft = 60;

        // OTP validation
        function validateOTP(otp) {
            const re = /^\d{6}$/;
            return re.test(otp);
        }

        // Remove error messages
        function removeErrorMessages() {
            const existingErrors = otpForm.querySelectorAll('.error-message');
            existingErrors.forEach(error => error.remove());
            const errorInputs = otpForm.querySelectorAll('.error');
            errorInputs.forEach(input => input.classList.remove('error'));
        }

        // Start countdown timer
        function startTimer() {
            resendBtn.disabled = true;
            timeLeft = 60;
            timerDisplay.textContent = `Resend available in ${timeLeft}s`;

            const countdown = setInterval(() => {
                timeLeft--;
                timerDisplay.textContent = `Resend available in ${timeLeft}s`;

                if (timeLeft <= 0) {
                    clearInterval(countdown);
                    resendBtn.disabled = false;
                    timerDisplay.textContent = 'You can resend OTP now';
                }
            }, 1000);
        }

        // Form submission
        otpForm.addEventListener('submit', (e) => {
            e.preventDefault();
            removeErrorMessages();

            const otp = otpForm.otp.value.trim();
            let isValid = true;

            if (!validateOTP(otp)) {
                const otpInput = otpForm.otp;
                otpInput.classList.add('error');
                const errorMsg = document.createElement('div');
                errorMsg.className = 'error-message';
                errorMsg.textContent = 'Please enter a valid 6-digit OTP';
                otpInput.parentElement.appendChild(errorMsg);
                isValid = false;
            }

            if (isValid) {
                console.log('OTP verified:', { otp });
                // Add your OTP verification logic here
                // For example: redirect to dashboard
                // window.location.href = '/dashboard';
            }
        });

        // Resend OTP
        resendBtn.addEventListener('click', () => {
            console.log('Resending OTP...');
            // Add your resend OTP logic here
            startTimer();
        });

        // Start timer on page load
        startTimer();
        // In your login form submission (where isValid is true):
if (isValid) {
    console.log('Login successful:', { email, password });
    window.location.href = 'otp.html'; // Redirect to OTP page
}

// In your register form submission (where isValid is true):
if (isValid) {
    console.log('Registration successful:', { name, email, date, phone, password });
    window.location.href = 'otp.html'; // Redirect to OTP page
}