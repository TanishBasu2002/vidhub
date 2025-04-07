document.addEventListener('DOMContentLoaded', () => {
    const body = document.querySelector('body');
    const sidebar = document.querySelector('.sidebar');
    const toggle = document.querySelector('.toggle');
    const modeSwitch = document.querySelector('.toggle-switch');
    const modeText = document.querySelector('.mode-text');
    const profileLink = document.querySelector('.profile-link');
    const profilePopup = document.querySelector('.profile-popup');
    const closePopup = document.querySelector('.close-popup');
    const tabs = document.querySelectorAll('.tab');
    const sections = document.querySelectorAll('.shorts-section, .videos-section');

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

    // Tab Functionality
    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            const targetId = tab.getAttribute('data-target');
            const targetSection = document.getElementById(targetId);

            tabs.forEach(t => t.classList.remove('active'));
            tab.classList.add('active');

            sections.forEach(section => {
                section.style.display = section.id === targetId ? 'block' : 'none';
            });

            targetSection.scrollIntoView({ behavior: 'smooth' });
        });
    });

    // Initial State
    sections.forEach(section => {
        section.style.display = section.id === 'videos-section' ? 'block' : 'none';
    });
});