document.addEventListener('DOMContentLoaded', () => {
    const body = document.querySelector('body');
    const sidebar = document.querySelector('.sidebar');
    const toggle = document.querySelector('.toggle');
    const modeSwitch23 = document.querySelector('.toggle-switch');
    const modeText = document.querySelector('.mode-text');
    const profileLink = document.querySelector('.profile-link');
    const profilePopup = document.querySelector('.profile-popup');
    const closePopup = document.querySelector('.close-popup');
    const feedbackForm = document.getElementById('feedbackForm');
    const successPopup = document.getElementById('successPopup');
    const overlay = document.getElementById('overlay');

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

    // Form Submission
    if (feedbackForm) {
        feedbackForm.addEventListener('submit', (e) => {
            e.preventDefault();

            // Basic form validation
            const email = document.getElementById('email').value;
            const phone = document.getElementById('phone').value;
            const purpose = document.getElementById('purpose').value;
            const likes = document.getElementById('likes').value;
            const views = document.getElementById('views').value;

            if (!email || !phone || !purpose || !likes || !views) {
                alert('Please fill in all required fields.');
                return;
            }

            // Simulate form submission (you can replace this with actual backend logic)
            console.log({
                feedback_id: `FB${Date.now()}`, // Unique ID
                email,
                phone,
                purpose,
                likes,
                views,
                submitted_at: new Date().toISOString()
            });

            // Show success popup
            successPopup.classList.add('active');
            overlay.classList.add('active');

            // Reset form
            feedbackForm.reset();
        });
    }
});

// Close Success Popup
function closeSuccessPopup() {
    const successPopup = document.getElementById('successPopup');
    const overlay = document.getElementById('overlay');
    successPopup.classList.remove('active');
    overlay.classList.remove('active');
}