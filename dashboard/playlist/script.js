document.addEventListener('DOMContentLoaded', () => {
    const body = document.querySelector('body');
    const sidebar = document.querySelector('.sidebar');
    const toggle = document.querySelector('.toggle');
    const modeSwitch = document.querySelector('.toggle-switch');
    const modeText = document.querySelector('.mode-text');
    const profileLink = document.querySelector('.profile-link');
    const profilePopup = document.querySelector('.profile-popup');
    const closePopup = document.querySelector('.close-popup');
    const playlistSearch = document.getElementById('playlist-search');
    const playlistsList = document.getElementById('playlists-list');
    const playlistCards = playlistsList.getElementsByClassName('playlist-card');

    if (toggle) {
        toggle.addEventListener('click', () => {
            sidebar.classList.toggle('close');
        });
    }

    if (modeSwitch) {
        modeSwitch.addEventListener('click', () => {
            body.classList.toggle('dark');
            modeText.innerText = body.classList.contains('dark') ? "Light mode" : "Dark mode";
        });
    }

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

    // Playlist search filter
    if (playlistSearch) {
        playlistSearch.addEventListener('input', () => {
            const searchTerm = playlistSearch.value.toLowerCase();
            Array.from(playlistCards).forEach(card => {
                const name = card.querySelector('.playlist-name').textContent.toLowerCase();
                if (name.includes(searchTerm)) {
                    card.style.display = 'flex';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    }

    // Create new playlist button (placeholder functionality)
    const createPlaylistBtn = document.querySelector('.create-playlist-btn');
    if (createPlaylistBtn) {
        createPlaylistBtn.addEventListener('click', () => {
            alert('Create New Playlist functionality coming soon!');
            // Add logic to open a modal or form to create a new playlist
        });
    }
});