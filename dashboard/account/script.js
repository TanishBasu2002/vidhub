document.addEventListener('DOMContentLoaded', () => {
    const body = document.querySelector('body');
    const sidebar = document.querySelector('.sidebar');
    const toggle = document.querySelector('.toggle');
    const modeSwitch = document.querySelector('.toggle-switch');
    const modeText = document.querySelector('.mode-text');
    const profileLink = document.querySelector('.profile-link');
    const profilePopup = document.querySelector('.profile-popup');
    const closePopup = document.querySelector('.close-popup');

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
            localStorage.setItem('darkMode', body.classList.contains('dark'));
        });
    }

    // Check for saved dark mode preference
    if (localStorage.getItem('darkMode') === 'true') {
        body.classList.add('dark');
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

    // Image Upload Preview
    const imageUpload = document.getElementById('channel-image');
    const imagePreview = document.getElementById('image-preview');

    imageUpload.addEventListener('change', function() {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                imagePreview.innerHTML = `<img src="${e.target.result}" alt="Channel Image">`;
            }
            reader.readAsDataURL(file);
        }
    });

    // Channel Name Availability Check (simulated)
    const channelNameInput = document.getElementById('channel-name');
    const availabilityStatus = document.getElementById('availability-status');
    const takenNames = ['agulo', 'lollo', 'kene'];

    channelNameInput.addEventListener('input', function() {
        const name = this.value.toLowerCase().trim();
        
        if (name.length === 0) {
            availabilityStatus.textContent = '';
            return;
        }

        setTimeout(() => {
            if (takenNames.includes(name)) {
                availabilityStatus.textContent = `"${name}" is taken. Try something else.`;
                availabilityStatus.className = 'availability-status taken';
            } else {
                availabilityStatus.textContent = `"${name}" is available!`;
                availabilityStatus.className = 'availability-status available';
            }
        }, 500);
    });

    // Form Submission
    const channelForm = document.querySelector('.onboarding-form form');
    const createChannelBtn = document.getElementById('create-channel');
    const successMessage = document.getElementById('success-message');

    channelForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        createChannelBtn.disabled = true;
        createChannelBtn.textContent = 'Creating...';
        
        setTimeout(() => {
            document.getElementById('channel-form').style.display = 'none';
            successMessage.style.display = 'block';
            
            createChannelBtn.disabled = false;
            createChannelBtn.textContent = 'Create';
        }, 1500);
    });

    // Continue button
    document.getElementById('continue-btn').addEventListener('click', function() {
        window.location.href = 'index.html';
    });

    // Cancel button
    document.querySelector('.btn-cancel').addEventListener('click', function() {
        window.location.href = 'index.html';
    });
});