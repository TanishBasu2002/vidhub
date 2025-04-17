<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registered Creators</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="../../ui/styles/index.css">
  <style>
    /* New styles for creators section */
    .main-content {
      padding: 20px;
    }
    
    .header-container {
      display: flex;
      align-items: center;
      padding: 15px 0;
      border-bottom: 1px solid var(--toggle-color);
      margin-bottom: 20px;
    }
    
    .header-logo {
      width: 40px;
      height: 40px;
      margin-right: 15px;
    }
    
    .header-container h1 {
      font-size: 24px;
      font-weight: 600;
      color: var(--text-color);
      margin-right: auto;
    }
    
    .header-info {
      display: flex;
      align-items: center;
      gap: 10px;
      color: var(--text-color);
      font-size: 14px;
    }
    
    .header-info i {
      font-size: 16px;
    }
    
    .creator-container {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
      gap: 20px;
      margin-top: 20px;
    }
    
    .creator-card {
      background: var(--sidebar-color);
      border-radius: 12px;
      padding: 15px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
      transition: var(--tran-03);
      display: flex;
      position: relative;
    }
    
    .creator-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
    }
    
    .profile-pic-container {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      overflow: hidden;
      margin-right: 15px;
      flex-shrink: 0;
    }
    
    .creator-image {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    
    .creator-fields {
      flex-grow: 1;
    }
    
    .field-container {
      margin-bottom: 10px;
    }
    
    .field-container label {
      display: block;
      font-size: 12px;
      color: var(--text-color);
      opacity: 0.8;
      margin-bottom: 3px;
    }
    
    .field-container input {
      width: 100%;
      padding: 6px 10px;
      border: 1px solid var(--toggle-color);
      border-radius: 6px;
      background: var(--primary-color-light);
      color: var(--text-color);
      font-size: 14px;
    }
    
    .hidden-fields {
      margin-top: 10px;
      padding-top: 10px;
      border-top: 1px dashed var(--toggle-color);
    }
    
    .delete-btn {
      position: absolute;
      bottom: 15px;
      right: 15px;
      background: #ff4444;
      color: white;
      border: none;
      border-radius: 6px;
      padding: 5px 10px;
      font-size: 12px;
      cursor: pointer;
      transition: var(--tran-03);
    }
    
    .delete-btn:hover {
      background: #cc0000;
    }
    
    .delete-btn i {
      margin-right: 5px;
    }
    
    /* Delete Confirmation Modal */
    #delete-modal {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5);
      z-index: 1000;
      align-items: center;
      justify-content: center;
    }
    
    .modal-content {
      background: var(--sidebar-color);
      border-radius: 12px;
      padding: 20px;
      width: 400px;
      max-width: 90%;
      box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
    }
    
    .modal-header {
      text-align: center;
      margin-bottom: 20px;
    }
    
    .modal-header i {
      font-size: 40px;
      color: #ff9800;
      margin-bottom: 10px;
    }
    
    .modal-header h3 {
      color: var(--text-color);
      margin-bottom: 10px;
    }
    
    .modal-header p {
      color: var(--text-color);
      opacity: 0.8;
      font-size: 14px;
    }
    
    .modal-buttons {
      display: flex;
      justify-content: center;
      gap: 15px;
    }
    
    .modal-buttons button {
      padding: 8px 20px;
      border-radius: 6px;
      border: none;
      cursor: pointer;
      font-weight: 500;
      transition: var(--tran-03);
    }
    
    #cancel-delete {
      background: var(--primary-color-light);
      color: var(--text-color);
    }
    
    #cancel-delete:hover {
      background: var(--toggle-color);
    }
    
    #confirm-delete {
      background: #ff4444;
      color: white;
    }
    
    #confirm-delete:hover {
      background: #cc0000;
    }
    
    /* Dark mode adjustments */
    body.dark .creator-card {
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
    
    body.dark .creator-card:hover {
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
    }
    
    body.dark .field-container input {
      border-color: var(--primary-color);
    }
    
    body.dark .hidden-fields {
      border-top-color: var(--primary-color);
    }
  </style>
</head>
<body>
  <?php include '../../ui/admin-sidebar.php'; ?>
  
  <div class="main-content">
    <header>
      <div class="header-container">
        <h1>Registered Creators</h1>
        <div class="header-info">
          <span id="total-creators">0</span> 
          <span>Creators Online</span>
          <span>•</span>
          <i class="far fa-clock"></i>
          <span id="current-time">00:00:00</span>
        </div>
      </div>
    </header>

    <main>
      <form id="creators-form">
        <div id="creators-list" class="creator-container">
          <!-- Demo Data (would come from database in production) -->
          <div class="creator-card" data-id="1">
            <div class="profile-pic-container">
              <img class="creator-image" src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Profile Picture">
            </div>
            <div class="creator-fields">
              <div class="field-container">
                <label>Channel Name:</label>
                <input type="text" class="channel-input" name="channel[]" value="Alex Creates" readonly>
              </div>
              <div class="field-container">
                <label>Creation Date:</label>
                <input type="text" class="date-input" name="creation_date[]" value="5/15/2023, 10:30:00 AM" readonly>
              </div>
              <div class="hidden-fields" style="display:none">
                <div class="field-container">
                  <label>Name:</label>
                  <input type="text" class="name-input" name="name[]" value="Alex Johnson" readonly>
                </div>
                <div class="field-container">
                  <label>Email:</label>
                  <input type="email" class="email-input" name="email[]" value="alex@example.com" readonly>
                </div>
                <div class="field-container">
                  <label>Phone:</label>
                  <input type="tel" class="phone-input" name="phone[]" value="+1 (555) 123-4567" readonly>
                </div>
              </div>
            </div>
            <button type="button" class="delete-btn">
              <i class="fas fa-trash"></i> Delete
            </button>
          </div>
          <div class="creator-card" data-id="1">
            <div class="profile-pic-container">
              <img class="creator-image" src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Profile Picture">
            </div>
            <div class="creator-fields">
              <div class="field-container">
                <label>Channel Name:</label>
                <input type="text" class="channel-input" name="channel[]" value="Alex Creates" readonly>
              </div>
              <div class="field-container">
                <label>Creation Date:</label>
                <input type="text" class="date-input" name="creation_date[]" value="5/15/2023, 10:30:00 AM" readonly>
              </div>
              <div class="hidden-fields" style="display:none">
                <div class="field-container">
                  <label>Name:</label>
                  <input type="text" class="name-input" name="name[]" value="Alex Johnson" readonly>
                </div>
                <div class="field-container">
                  <label>Email:</label>
                  <input type="email" class="email-input" name="email[]" value="alex@example.com" readonly>
                </div>
                <div class="field-container">
                  <label>Phone:</label>
                  <input type="tel" class="phone-input" name="phone[]" value="+1 (555) 123-4567" readonly>
                </div>
              </div>
            </div>
            <button type="button" class="delete-btn">
              <i class="fas fa-trash"></i> Delete
            </button>
          </div>
          <div class="creator-card" data-id="1">
            <div class="profile-pic-container">
              <img class="creator-image" src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Profile Picture">
            </div>
            <div class="creator-fields">
              <div class="field-container">
                <label>Channel Name:</label>
                <input type="text" class="channel-input" name="channel[]" value="Alex Creates" readonly>
              </div>
              <div class="field-container">
                <label>Creation Date:</label>
                <input type="text" class="date-input" name="creation_date[]" value="5/15/2023, 10:30:00 AM" readonly>
              </div>
              <div class="hidden-fields" style="display:none">
                <div class="field-container">
                  <label>Name:</label>
                  <input type="text" class="name-input" name="name[]" value="Alex Johnson" readonly>
                </div>
                <div class="field-container">
                  <label>Email:</label>
                  <input type="email" class="email-input" name="email[]" value="alex@example.com" readonly>
                </div>
                <div class="field-container">
                  <label>Phone:</label>
                  <input type="tel" class="phone-input" name="phone[]" value="+1 (555) 123-4567" readonly>
                </div>
              </div>
            </div>
            <button type="button" class="delete-btn">
              <i class="fas fa-trash"></i> Delete
            </button>
          </div>
          <div class="creator-card" data-id="1">
            <div class="profile-pic-container">
              <img class="creator-image" src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Profile Picture">
            </div>
            <div class="creator-fields">
              <div class="field-container">
                <label>Channel Name:</label>
                <input type="text" class="channel-input" name="channel[]" value="Alex Creates" readonly>
              </div>
              <div class="field-container">
                <label>Creation Date:</label>
                <input type="text" class="date-input" name="creation_date[]" value="5/15/2023, 10:30:00 AM" readonly>
              </div>
              <div class="hidden-fields" style="display:none">
                <div class="field-container">
                  <label>Name:</label>
                  <input type="text" class="name-input" name="name[]" value="Alex Johnson" readonly>
                </div>
                <div class="field-container">
                  <label>Email:</label>
                  <input type="email" class="email-input" name="email[]" value="alex@example.com" readonly>
                </div>
                <div class="field-container">
                  <label>Phone:</label>
                  <input type="tel" class="phone-input" name="phone[]" value="+1 (555) 123-4567" readonly>
                </div>
              </div>
            </div>
            <button type="button" class="delete-btn">
              <i class="fas fa-trash"></i> Delete
            </button>
          </div>
          <div class="creator-card" data-id="1">
            <div class="profile-pic-container">
              <img class="creator-image" src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Profile Picture">
            </div>
            <div class="creator-fields">
              <div class="field-container">
                <label>Channel Name:</label>
                <input type="text" class="channel-input" name="channel[]" value="Alex Creates" readonly>
              </div>
              <div class="field-container">
                <label>Creation Date:</label>
                <input type="text" class="date-input" name="creation_date[]" value="5/15/2023, 10:30:00 AM" readonly>
              </div>
              <div class="hidden-fields" style="display:none">
                <div class="field-container">
                  <label>Name:</label>
                  <input type="text" class="name-input" name="name[]" value="Alex Johnson" readonly>
                </div>
                <div class="field-container">
                  <label>Email:</label>
                  <input type="email" class="email-input" name="email[]" value="alex@example.com" readonly>
                </div>
                <div class="field-container">
                  <label>Phone:</label>
                  <input type="tel" class="phone-input" name="phone[]" value="+1 (555) 123-4567" readonly>
                </div>
              </div>
            </div>
            <button type="button" class="delete-btn">
              <i class="fas fa-trash"></i> Delete
            </button>
          </div>

          <div class="creator-card" data-id="1">
            <div class="profile-pic-container">
              <img class="creator-image" src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Profile Picture">
            </div>
            <div class="creator-fields">
              <div class="field-container">
                <label>Channel Name:</label>
                <input type="text" class="channel-input" name="channel[]" value="Alex Creates" readonly>
              </div>
              <div class="field-container">
                <label>Creation Date:</label>
                <input type="text" class="date-input" name="creation_date[]" value="5/15/2023, 10:30:00 AM" readonly>
              </div>
              <div class="hidden-fields" style="display:none">
                <div class="field-container">
                  <label>Name:</label>
                  <input type="text" class="name-input" name="name[]" value="Alex Johnson" readonly>
                </div>
                <div class="field-container">
                  <label>Email:</label>
                  <input type="email" class="email-input" name="email[]" value="alex@example.com" readonly>
                </div>
                <div class="field-container">
                  <label>Phone:</label>
                  <input type="tel" class="phone-input" name="phone[]" value="+1 (555) 123-4567" readonly>
                </div>
              </div>
            </div>
            <button type="button" class="delete-btn">
              <i class="fas fa-trash"></i> Delete
            </button>
          </div>
          <template id="creator-template">
            <div class="creator-card" data-id="2">
              <div class="profile-pic-container">
                <img class="creator-image" src="" alt="Profile Picture">
              </div>
              <div class="creator-fields">
                <div class="field-container">
                  <label>Channel Name:</label>
                  <input type="text" class="channel-input" name="channel[]" readonly>
                </div>
                <div class="field-container">
                  <label>Creation Date:</label>
                  <input type="text" class="date-input" name="creation_date[]" readonly>
                </div>
                <div class="hidden-fields">
                  <div class="field-container">
                    <label>Name:</label>
                    <input type="text" class="name-input" name="name[]" readonly>
                  </div>
                  <div class="field-container">
                    <label>Email:</label>
                    <input type="email" class="email-input" name="email[]" readonly>
                  </div>
                  <div class="field-container">
                    <label>Phone:</label>
                    <input type="tel" class="phone-input" name="phone[]" readonly>
                  </div>
                </div>
              </div>
              <button type="button" class="delete-btn">
                <i class="fas fa-trash"></i> Delete
              </button>
            </div>
          </template>
        </div>
      </form>
    </main>

    <!-- Delete Confirmation Modal -->
    <div id="delete-modal">
      <div class="modal-content">
        <div class="modal-header">
          <i class="fas fa-exclamation-circle"></i>
          <h3>Confirm Deletion</h3>
          <p>Are you sure you want to delete this creator? This action cannot be undone.</p>
        </div>
        <div class="modal-buttons">
          <button id="cancel-delete">Cancel</button>
          <button id="confirm-delete">Delete</button>
        </div>
      </div>
    </div>
  </div>

  <script>
    // Update time and creator count
    function updateTime() {
      const now = new Date();
      const timeString = now.toLocaleTimeString();
      document.getElementById('current-time').textContent = timeString;
    }
    
    function updateCreatorCount() {
      const count = document.querySelectorAll('.creator-card:not(template)').length;
      document.getElementById('total-creators').textContent = count;
    }
    
    // Initialize
    document.addEventListener('DOMContentLoaded', () => {
      updateTime();
      updateCreatorCount();
      setInterval(updateTime, 1000);
      
      // Delete button functionality
      document.querySelectorAll('.delete-btn').forEach(btn => {
        btn.addEventListener('click', function() {
          const modal = document.getElementById('delete-modal');
          modal.style.display = 'flex';
          
          document.getElementById('cancel-delete').addEventListener('click', () => {
            modal.style.display = 'none';
          });
          
          document.getElementById('confirm-delete').addEventListener('click', () => {
            this.closest('.creator-card').remove();
            modal.style.display = 'none';
            updateCreatorCount();
          });
        });
      });
    });
  </script>
</body>
</html>