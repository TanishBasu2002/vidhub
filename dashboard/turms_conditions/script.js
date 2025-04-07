document.addEventListener('DOMContentLoaded', () => {
    const body = document.querySelector('body');
    const sidebar = document.querySelector('.sidebar');
    const toggle = document.querySelector('.toggle');
    const modeSwitch = document.querySelector('.toggle-switch');
    const modeText = document.querySelector('.mode-text');
    const tocLinks = document.querySelectorAll('.toc-link');
    const sections = document.querySelectorAll('.terms-section-content');
    const acceptBtn = document.querySelector('#accept-btn');
    const confirmationPopup = document.querySelector('#confirmation-popup');
    const overlay = document.querySelector('#overlay');
    const confirmBtn = document.querySelector('#confirm-btn');
    const cancelBtn = document.querySelector('#cancel-btn');

    // Sidebar toggle
    if (toggle) {
        toggle.addEventListener('click', () => {
            sidebar.classList.toggle('close');
        });
    }

    // Dark mode toggle
    if (modeSwitch) {
        modeSwitch.addEventListener('click', () => {
            body.classList.toggle('dark');
            modeText.innerText = body.classList.contains('dark') ? "Light mode" : "Dark mode";
        });
    }

    // Profile Popup Toggle
    const profileLink = document.querySelector('.profile-link');
    const profilePopup = document.querySelector('.profile-popup');
    const closePopup = document.querySelector('.close-popup');

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

    // Table of Contents Active Link on Scroll
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.5
    };

    const observerCallback = (entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const sectionId = entry.target.id;
                tocLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === `#${sectionId}`) {
                        link.classList.add('active');
                    }
                });
            }
        });
    };

    const observer = new IntersectionObserver(observerCallback, observerOptions);
    sections.forEach(section => observer.observe(section));

    // Smooth Scroll for TOC Links
    tocLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const targetId = link.getAttribute('href').substring(1);
            const targetSection = document.getElementById(targetId);
            targetSection.scrollIntoView({ behavior: 'smooth' });
        });
    });

    // Accept Terms Popup
    if (acceptBtn) {
        acceptBtn.addEventListener('click', () => {
            confirmationPopup.style.display = 'block';
            overlay.style.display = 'block';
        });
    }

    if (confirmBtn) {
        confirmBtn.addEventListener('click', () => {
            alert('You have successfully accepted the Terms & Conditions. Thank you!');
            confirmationPopup.style.display = 'none';
            overlay.style.display = 'none';
            acceptBtn.disabled = true;
            acceptBtn.style.opacity = '0.6';
            acceptBtn.style.cursor = 'not-allowed';
        });
    }

    if (cancelBtn) {
        cancelBtn.addEventListener('click', () => {
            confirmationPopup.style.display = 'none';
            overlay.style.display = 'none';
        });
    }

    // Close popup on overlay click
    if (overlay) {
        overlay.addEventListener('click', () => {
            confirmationPopup.style.display = 'none';
            overlay.style.display = 'none';
        });
    }
});