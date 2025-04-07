document.addEventListener('DOMContentLoaded', () => {
    const body = document.querySelector('body');
    const sidebar = document.querySelector('.sidebar');
    const toggle = document.querySelector('.toggle');
    const modeSwitch = document.querySelector('.toggle-switch');
    const modeText = document.querySelector('.mode-text');
    const profileLink = document.querySelector('.profile-link');
    const profilePopup = document.querySelector('.profile-popup');
    const closePopup = document.querySelector('.close-popup');
    const passKeyForm = document.getElementById('passKeyForm');

    // Sidebar Toggle
    if (toggle) {
        toggle.addEventListener('click', () => {
            sidebar.classList.toggle('close');
        });
    }

    // Dark Mode Toggle
    if (modeSwitch) {
        modeSwitch.addEventListener('click', () => {
            body.classList.toggle('dark');
            modeText.innerText = body.classList.contains('dark') ? "Light mode" : "Dark mode";
        });
    }

    // Profile Popup Toggle
    if (profileLink && profilePopup && closePopup) {
        profileLink.addEventListener('click', (e) => {
            e.preventDefault();
            profilePopup.classList.toggle('active');
        });

        closePopup.addEventListener('click', () => {
            profilePopup.classList.remove('active');
        });

        document.addEventListener('click', (e) => {
            if (!profilePopup.contains(e.target) && !profileLink.contains(e.target)) {
                profilePopup.classList.remove('active');
            }
        });
    }

    // Pass Key Verification
    const correctPassKey = 'vidhub2025'; // Pass key
    if (passKeyForm) {
        passKeyForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const passKeyInput = document.getElementById('passKey').value;
            if (passKeyInput === correctPassKey) {
                window.location.href = 'admin.html'; // Redirect to admin.html
            } else {
                alert('Incorrect pass key. Please try again.');
            }
        });
    }
});