document.addEventListener('DOMContentLoaded', () => {
    const body = document.querySelector('body');
    const sidebar = document.querySelector('.sidebar');
    const toggle = document.querySelector('.toggle');
    const modeSwitch = document.querySelector('.toggle-switch');
    const modeText = document.querySelector('.mode-text');
    const likedVideosList = document.querySelector('#liked-videos-list');
    const likedVideosEmptyState = document.querySelector('#liked-videos-empty-state');
    const clearAllBtn = document.querySelector('.clear-all-btn');
    const sortDropdown = document.querySelector('.sort-dropdown');

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

    // Handle Unlike for Liked Videos
    likedVideosList.addEventListener('click', (e) => {
        if (e.target.closest('.video-option.unlike')) {
            e.preventDefault();
            const item = e.target.closest('.liked-video-item');
            item.remove();
            checkLikedVideos();
        }
    });

    // Clear All Button
    if (clearAllBtn) {
        clearAllBtn.addEventListener('click', () => {
            likedVideosList.classList.add('loading');
            setTimeout(() => {
                likedVideosList.innerHTML = '';
                likedVideosList.classList.remove('loading');
                checkLikedVideos();
            }, 1000); // Simulate loading delay
        });
    }

    // Sort Dropdown (Simulated sorting)
    if (sortDropdown) {
        sortDropdown.addEventListener('change', (e) => {
            const sortBy = e.target.value;
            console.log(`Sorting by: ${sortBy}`); // Replace with actual sorting logic
        });
    }

    // Check if liked videos list is empty
    const checkLikedVideos = () => {
        const items = likedVideosList.querySelectorAll('.liked-video-item');
        if (items.length === 0) {
            likedVideosEmptyState.style.display = 'block';
            likedVideosList.style.display = 'none';
        } else {
            likedVideosEmptyState.style.display = 'none';
            likedVideosList.style.display = 'grid';
        }
    };

    // Initial check and simulate loading
    likedVideosList.classList.add('loading');
    setTimeout(() => {
        likedVideosList.classList.remove('loading');
        checkLikedVideos();
    }, 1000); // Simulate initial loading

    // Add Font Awesome dynamically (for fa-sort if needed)
    const link = document.createElement('link');
    link.rel = 'stylesheet';
    link.href = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css';
    document.head.appendChild(link);
});