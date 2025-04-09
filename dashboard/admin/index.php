<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registered Admin</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <div class="header-container">
      <img src="logo.svg" alt="logo" class="header-logo">
      <h1>Registered Admin</h1>
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
              <label>Name:</label>
              <input type="text" class="name-input" name="name[]" value="Alex Jhonson" readonly>
            </div>
            <!-- <div class="field-container">
              <label>Creation Date:</label>
              <input type="text" class="date-input" name="creation_date[]" value="5/15/2023, 10:30:00 AM" readonly>
            </div> -->
            <div class="hidden-fields" style="display:none">
              <!-- <div class="field-container">
                <label>Name:</label>
                <input type="text" class="name-input" name="name[]" value="Alex Johnson" readonly>
              </div> -->
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
          <div class="creator-card" data-id="">
            <div class="profile-pic-container">
              <img class="creator-image" src="" alt="Profile Picture">
            </div>
            <div class="creator-fields">
              <div class="field-container">
                <label>Name:</label>
                <input type="text" class="name-input" name="name[]" readonly>
              </div>
              <div class="hidden-fields">
                <!-- <div class="field-container">
                  <label>Name:</label>
                  <input type="text" class="name-input" name="name[]" readonly>
                </div> -->
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
    <?php include('../../ui/footer.php'); ?>
  </div>

  <script src="script.js"></script>
</body>
</html>
