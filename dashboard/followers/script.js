document.addEventListener('DOMContentLoaded', () => {
    const body = document.querySelector('body');
    const sidebar = document.querySelector('.sidebar');
    const toggle = document.querySelector('.toggle');
    const modeSwitch = document.querySelector('.toggle-switch');
    const modeText = document.querySelector('.mode-text');
    const searchInput = document.getElementById('searchInput');
    const followersList = document.getElementById('followersList');

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

    // Search Followers
    if (searchInput && followersList) {
        const followerCards = followersList.getElementsByClassName('follower-card');

        searchInput.addEventListener('input', () => {
            const searchTerm = searchInput.value.toLowerCase();
            Array.from(followerCards).forEach(card => {
                const name = card.querySelector('.follower-name').textContent.toLowerCase();
                const username = card.querySelector('.follower-username').textContent.toLowerCase();
                card.style.display = (name.includes(searchTerm) || username.includes(searchTerm)) ? '' : 'none';
            });
        });
    }
});

// Toggle Follow Button
function toggleFollow(button) {
    if (button.classList.contains('following')) {
        button.classList.remove('following');
        button.textContent = 'Follow Back';
    } else {
        button.classList.add('following');
        button.textContent = 'Following';
    }
}

// Sort Followers
function sortFollowers(criteria) {
    const followersList = document.getElementById('followersList');
    const followerCards = Array.from(followersList.getElementsByClassName('follower-card'));

    followerCards.sort((a, b) => {
        if (criteria === 'name') {
            const nameA = a.querySelector('.follower-name').textContent.toLowerCase();
            const nameB = b.querySelector('.follower-name').textContent.toLowerCase();
            return nameA.localeCompare(nameB);
        } else if (criteria === 'date') {
            const dateA = a.querySelector('.follower-stats').textContent.match(/since: (.*?) \|/)[1];
            const dateB = b.querySelector('.follower-stats').textContent.match(/since: (.*?) \|/)[1];
            return new Date(dateA) - new Date(dateB);
        }
    });

    // Clear and re-append sorted cards
    while (followersList.firstChild) {
        followersList.removeChild(followersList.firstChild);
    }
    followerCards.forEach(card => followersList.appendChild(card));
}