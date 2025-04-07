document.addEventListener('DOMContentLoaded', () => {
    const body = document.querySelector('body');
    const sidebar = document.querySelector('.sidebar');
    const toggle = document.querySelector('.toggle');
    const modeSwitch = document.querySelector('.toggle-switch');
    const modeText = document.querySelector('.mode-text');
    const watchLaterList = document.querySelector('#watch-later-list');
    const watchLaterEmptyState = document.querySelector('#watch-later-empty-state');

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

    // Video Options Popup Toggle
    const menuButtons = document.querySelectorAll('.menu-btn');
    menuButtons.forEach(button => {
        button.addEventListener('click', (e) => {
            e.stopPropagation();
            const popup = button.nextElementSibling;
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

    // Handle Remove for Watch Later
    watchLaterList.addEventListener('click', (e) => {
        if (e.target.closest('.video-option.remove')) {
            e.preventDefault();
            const item = e.target.closest('.watch-later-item');
            item.remove();
            checkWatchLater();
        }
    });

    // Check if watch later list is empty
    const checkWatchLater = () => {
        const items = watchLaterList.querySelectorAll('.watch-later-item');
        if (items.length === 0) {
            watchLaterEmptyState.style.display = 'block';
            watchLaterList.style.display = 'none';
        } else {
            watchLaterEmptyState.style.display = 'none';
            watchLaterList.style.display = 'grid';
        }
    };

    // Initial check
    checkWatchLater();
});