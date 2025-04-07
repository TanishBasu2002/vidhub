document.addEventListener('DOMContentLoaded', () => {
    const body = document.querySelector('body');
    const sidebar = document.querySelector('.sidebar');
    const toggle = document.querySelector('.toggle');
    const modeSwitch = document.querySelector('.toggle-switch');
    const modeText = document.querySelector('.mode-text');
    const yourVideosList = document.querySelector('#your-videos-list');
    const videosEmptyState = document.querySelector('#videos-empty-state');
    const yourShortsList = document.querySelector('#your-shorts-list');
    const shortsEmptyState = document.querySelector('#shorts-empty-state');

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

    // Video Options Popup Toggle for Videos and Shorts
    const menuButtons = document.querySelectorAll('.menu-btn');
    menuButtons.forEach(button => {
        button.addEventListener('click', (e) => {
            e.stopPropagation();
            const popup = button.nextElementSibling;
            // Close all other popups
            document.querySelectorAll('.video-options-popup').forEach(p => {
                if (p !== popup) p.classList.remove('active');
            });
            popup.classList.toggle('active');
        });
    });

    // Close video options popup when clicking outside
    document.addEventListener('click', (e) => {
        const isMenuButton = e.target.closest('.menu-btn');
        const isPopup = e.target.closest('.video-options-popup');
        if (!isMenuButton && !isPopup) {
            document.querySelectorAll('.video-options-popup').forEach(popup => {
                popup.classList.remove('active');
            });
        }
    });

    // Handle Delete for Videos
    yourVideosList.addEventListener('click', (e) => {
        if (e.target.closest('.video-option.delete')) {
            e.preventDefault();
            const item = e.target.closest('.video-item');
            item.remove();
            checkVideos();
        }
    });

    // Handle Delete for Shorts
    yourShortsList.addEventListener('click', (e) => {
        if (e.target.closest('.video-option.delete')) {
            e.preventDefault();
            const item = e.target.closest('.shorts-item');
            item.remove();
            checkShorts();
        }
    });

    // Check if videos list is empty
    const checkVideos = () => {
        const items = yourVideosList.querySelectorAll('.video-item');
        if (items.length === 0) {
            videosEmptyState.style.display = 'block';
            yourVideosList.style.display = 'none';
        } else {
            videosEmptyState.style.display = 'none';
            yourVideosList.style.display = 'flex';
        }
    };

    // Check if shorts list is empty
    const checkShorts = () => {
        const items = yourShortsList.querySelectorAll('.shorts-item');
        if (items.length === 0) {
            shortsEmptyState.style.display = 'block';
            yourShortsList.style.display = 'none';
        } else {
            shortsEmptyState.style.display = 'none';
            yourShortsList.style.display = 'flex';
        }
    };

    // Initial checks
    checkVideos();
    checkShorts();
});