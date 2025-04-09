// Initialize empty creators array (will be populated from HTML in init)
let creators = [];

// DOM Elements
const creatorsList = document.getElementById('creators-list');
const totalCreators = document.getElementById('total-creators');
const currentTime = document.getElementById('current-time');
const deleteModal = document.getElementById('delete-modal');
const confirmDeleteBtn = document.getElementById('confirm-delete');
const cancelDeleteBtn = document.getElementById('cancel-delete');

// State
let selectedCreatorId = null;

// Initialize the page
function init() {
  // Set current time once on page load
  currentTime.textContent = new Date().toLocaleTimeString();
  
  // Setup existing creator cards from HTML
  setupExistingCreators();
  setupEventListeners();
}

function setupExistingCreators() {
  // Get all existing creator cards from HTML
  const cards = document.querySelectorAll('.creator-card');
  cards.forEach(card => {
    // Add click handler for hidden fields
    const fields = card.querySelector('.creator-fields');
    fields.addEventListener('click', () => {
      const hiddenFields = card.querySelector('.hidden-fields');
      hiddenFields.style.display = hiddenFields.style.display === 'none' ? 'block' : 'none';
    });

    // Add delete handler
    card.querySelector('.delete-btn').addEventListener('click', (e) => {
      e.stopPropagation();
      showDeleteModal(card.dataset.id);
    });
  });

  // Update creator count
  totalCreators.textContent = cards.length;
}

// Delete functionality
function showDeleteModal(id) {
  selectedCreatorId = id;
  deleteModal.classList.remove('hidden');
  deleteModal.classList.add('show');
}

function hideDeleteModal() {
  deleteModal.classList.add('hidden');
  deleteModal.classList.remove('show');
  selectedCreatorId = null;
}

function deleteCreator() {
  const card = document.querySelector(`.creator-card[data-id="${selectedCreatorId}"]`);
  if (card) {
    card.remove();
    totalCreators.textContent = document.querySelectorAll('.creator-card').length;
  }
  hideDeleteModal();
}

// Event listeners
function setupEventListeners() {
  confirmDeleteBtn.addEventListener('click', deleteCreator);
  cancelDeleteBtn.addEventListener('click', hideDeleteModal);
  
  deleteModal.addEventListener('click', (e) => {
    if (e.target === deleteModal) {
      hideDeleteModal();
    }
  });
}

// Initialize the app when DOM is loaded
document.addEventListener('DOMContentLoaded', init);

let videoToDelete = null;
function showPopup(videoTitle) {
    videoToDelete = event.target.closest('.delete-btn').closest('.video-item');
    document.getElementById('videoTitle').textContent = videoTitle;
    document.getElementById('deletePopup').style.display = 'flex';
}

function hidePopup() {
    document.getElementById('deletePopup').style.display = 'none';
    videoToDelete = null;
}

function confirmDelete() {
    if (videoToDelete) {
        videoToDelete.remove();
        updateVideoCount();
        hidePopup();
    }
}

function updateVideoCount() {
    const videoCountElement = document.getElementById('video-count');
    const videoItems = document.querySelectorAll('.video-item');
    videoCountElement.textContent = videoItems.length;
}

document.addEventListener('DOMContentLoaded', updateVideoCount);