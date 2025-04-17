const body = document.querySelector('body'),
sidebar = body.querySelector('.sidebar'),
toggle = body.querySelector(".toggle"),
searchBtn = body.querySelector(".search-box"),
modeSwitch = body.querySelector(".toggle-switch"),
modeText = body.querySelector(".mode-text");

// Toggle sidebar
toggle.addEventListener("click", () => {
sidebar.classList.toggle("close");
});

// Toggle dark mode
modeSwitch.addEventListener("click", () => {
body.classList.toggle("dark");

if(body.classList.contains("dark")) {
    modeText.innerText = "Light mode";
} else {
    modeText.innerText = "Dark mode";
}
});

// Filter buttons functionality
const filterBtns = document.querySelectorAll('.filter-btn');
filterBtns.forEach(btn => {
btn.addEventListener('click', () => {
    filterBtns.forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
    
    // Add filter functionality here
    // For demo, we'll just add a visual effect
    const cards = document.querySelectorAll('.feedback-card');
    cards.forEach(card => {
        card.style.opacity = '0.6';
        setTimeout(() => {
            card.style.opacity = '1';
        }, 300);
    });
});
});

// Delete popup
const deleteButtons = document.querySelectorAll('.delete-btn');
const deletePopup = document.getElementById('deletePopup');

deleteButtons.forEach(btn => {
btn.addEventListener('click', (e) => {
    e.stopPropagation();
    deletePopup.classList.add('active');
});
});

function hidePopup() {
deletePopup.classList.remove('active');
}

function confirmDelete() {
// Add delete functionality here
hidePopup();

// For demo, show deletion effect
const cards = document.querySelectorAll('.feedback-card');
cards[0].style.transform = 'translateX(-100%)';
cards[0].style.opacity = '0';
setTimeout(() => {
    cards[0].remove();
}, 300);
}

// Simple animation for the stats cards
const statCards = document.querySelectorAll('.stat-card');
statCards.forEach((card, index) => {
setTimeout(() => {
    card.style.animation = 'pulse 1s ease';
}, index * 100);
});