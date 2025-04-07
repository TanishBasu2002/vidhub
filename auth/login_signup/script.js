const container = document.querySelector('.container');
const registerBtn = document.querySelector('.register-btn');
const loginBtn = document.querySelector('.login-btn');
const loginForm = document.getElementById('loginForm');
const registerForm = document.getElementById('registerForm');

// Toggle between login and register forms
registerBtn.addEventListener('click', () => {
    container.classList.add('active');
});

loginBtn.addEventListener('click', () => {
    container.classList.remove('active');
});

// Input sanitization function
function sanitizeInput(input) {
    const div = document.createElement('div');
    div.textContent = input;
    return div.innerHTML;
}

// Validation functions
function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
}

function validatePhone(phone) {
    const re = /^\+?[\d\s-]{10,}$/;
    return re.test(phone);
}

function validateName(name) {
    const re = /^[a-zA-Z\s]{2,}$/;
    return re.test(name);
}

function validatePassword(password) {
    return password.length >= 8;
}

// Remove existing error messages
function removeErrorMessages(form) {
    const existingErrors = form.querySelectorAll('.error-message');
    existingErrors.forEach(error => error.remove());
    const errorInputs = form.querySelectorAll('.error');
    errorInputs.forEach(input => input.classList.remove('error'));
}

// Login form submission
loginForm.addEventListener('submit', (e) => {
    e.preventDefault();
    removeErrorMessages(loginForm);

    const email = sanitizeInput(loginForm.Email.value);
    const password = sanitizeInput(loginForm.password.value);
    let isValid = true;

    if (!validateEmail(email)) {
        const emailInput = loginForm.Email;
        emailInput.classList.add('error');
        const errorMsg = document.createElement('div');
        errorMsg.className = 'error-message';
        errorMsg.textContent = 'Please enter a valid email';
        emailInput.parentElement.appendChild(errorMsg);
        isValid = false;
    }

    if (!validatePassword(password)) {
        const passwordInput = loginForm.password;
        passwordInput.classList.add('error');
        const errorMsg = document.createElement('div');
        errorMsg.className = 'error-message';
        errorMsg.textContent = 'Password must be at least 8 characters';
        passwordInput.parentElement.appendChild(errorMsg);
        isValid = false;
    }

    if (isValid) {
        console.log('Login successful:', { email, password });
        // Add your login logic here
        window.location.href = "login_otp.html"; // Redirect to OTP page
    }
});

// Register form submission
registerForm.addEventListener('submit', (e) => {
    e.preventDefault();
    removeErrorMessages(registerForm);

    const name = sanitizeInput(registerForm.name.value);
    const email = sanitizeInput(registerForm.email.value);
    const date = registerForm.date.value;
    const phone = sanitizeInput(registerForm.phone.value);
    const password = sanitizeInput(registerForm.password.value);
    const confirmPassword = sanitizeInput(registerForm.confirmPassword.value);
    let isValid = true;

    if (!validateName(name)) {
        const nameInput = registerForm.name;
        nameInput.classList.add('error');
        const errorMsg = document.createElement('div');
        errorMsg.className = 'error-message';
        errorMsg.textContent = 'Name must be at least 2 characters (letters only)';
        nameInput.parentElement.appendChild(errorMsg);
        isValid = false;
    }

    if (!validateEmail(email)) {
        const emailInput = registerForm.email;
        emailInput.classList.add('error');
        const errorMsg = document.createElement('div');
        errorMsg.className = 'error-message';
        errorMsg.textContent = 'Please enter a valid email';
        emailInput.parentElement.appendChild(errorMsg);
        isValid = false;
    }

    if (!date) {
        const dateInput = registerForm.date;
        dateInput.classList.add('error');
        const errorMsg = document.createElement('div');
        errorMsg.className = 'error-message';
        errorMsg.textContent = 'Please select a date';
        dateInput.parentElement.appendChild(errorMsg);
        isValid = false;
    }

    if (!validatePhone(phone)) {
        const phoneInput = registerForm.phone;
        phoneInput.classList.add('error');
        const errorMsg = document.createElement('div');
        errorMsg.className = 'error-message';
        errorMsg.textContent = 'Please enter a valid phone number';
        phoneInput.parentElement.appendChild(errorMsg);
        isValid = false;
    }

    if (!validatePassword(password)) {
        const passwordInput = registerForm.password;
        passwordInput.classList.add('error');
        const errorMsg = document.createElement('div');
        errorMsg.className = 'error-message';
        errorMsg.textContent = 'Password must be at least 8 characters';
        passwordInput.parentElement.appendChild(errorMsg);
        isValid = false;
    }

    if (password !== confirmPassword) {
        const confirmInput = registerForm.confirmPassword;
        confirmInput.classList.add('error');
        const errorMsg = document.createElement('div');
        errorMsg.className = 'error-message';
        errorMsg.textContent = 'Passwords do not match';
        confirmInput.parentElement.appendChild(errorMsg);
        isValid = false;
    }

    if (isValid) {
        console.log('Registration successful:', { name, email, date, phone, password });
        // Add your registration logic here
        window.location.href = "rejister_otp.html"; // Redirect to OTP page
    }
});