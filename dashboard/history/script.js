document.addEventListener('DOMContentLoaded', () => {
    const body = document.querySelector('body');
    const sidebar = document.querySelector('.sidebar');
    const toggle = document.querySelector('.toggle');
    const modeSwitch = document.querySelector('.toggle-switch');
    const modeText = document.querySelector('.mode-text');
    const historyList = document.querySelector('#history-list');
    const emptyState = document.querySelector('#empty-state');
    const clearAllBtn = document.querySelector('#clear-all-btn');
    const shortsHistoryList = document.querySelector('#shorts-history-list');
    const shortsEmptyState = document.querySelector('#shorts-empty-state');
    const clearShortsBtn = document.querySelector('#clear-shorts-btn');

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

    // Watch History functionality
    const checkHistory = () => {
        const items = historyList.querySelectorAll('.history-item');
        if (items.length === 0) {
            emptyState.style.display = 'block';
            historyList.style.display = 'none';
        } else {
            emptyState.style.display = 'none';
            historyList.style.display = 'flex';
        }
    };

    // Delete individual watch history item
    historyList.addEventListener('click', (e) => {
        if (e.target.closest('.delete-btn')) {
            const item = e.target.closest('.history-item');
            item.remove();
            checkHistory();
        }
    });

    // Clear all watch history
    if (clearAllBtn) {
        clearAllBtn.addEventListener('click', () => {
            historyList.innerHTML = '';
            checkHistory();
        });
    }

    // Shorts History functionality
    const checkShortsHistory = () => {
        const shortsItems = shortsHistoryList.querySelectorAll('.shorts-history-item');
        if (shortsItems.length === 0) {
            shortsEmptyState.style.display = 'block';
            shortsHistoryList.style.display = 'none';
        } else {
            shortsEmptyState.style.display = 'none';
            shortsHistoryList.style.display = 'flex';
        }
    };

    // Delete individual Shorts history item
    shortsHistoryList.addEventListener('click', (e) => {
        if (e.target.closest('.delete-btn')) {
            const item = e.target.closest('.shorts-history-item');
            item.remove();
            checkShortsHistory();
        }
    });

    // Clear all Shorts history
    if (clearShortsBtn) {
        clearShortsBtn.addEventListener('click', () => {
            shortsHistoryList.innerHTML = '';
            checkShortsHistory();
        });
    }

    // Initial checks
    checkHistory();
    checkShortsHistory();
});