<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registered Creators</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="style.css">
  <!-- Boxicons CSS -->
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
  <?php 
  // Include the data file
  include '../../lib/data.php';
  ?>
  
  <!-- Sidebar -->
  <?php include '../../ui/sidebar.php'; ?>
  
  <!-- Main Content -->
  <div class="main-content" id="main-content">
    <!-- Top Bar -->
    <?php include '../../ui/topbar.php'; ?>

    <div class="creators-header">
      <h1>Registered Creators</h1>
      <div class="header-info">
        <span id="total-creators"><?php echo count($data['creators']); ?></span> 
        <span>Creators Online</span>
        <span>•</span>
        <i class="far fa-clock"></i>
        <span id="current-time"><?php echo date('H:i:s'); ?></span>
      </div>
    </div>

    <main>
      <form id="creators-form">
        <div id="creators-list" class="creator-container">
          <?php if (isset($data['creators']) && !empty($data['creators'])): ?>
            <?php foreach ($data['creators'] as $creator): ?>
              <div class="creator-card" data-id="<?php echo $creator['id']; ?>">
                <div class="profile-pic-container">
                  <img class="creator-image" src="<?php echo $creator['image']; ?>" alt="Profile Picture">
                </div>
                <div class="creator-fields">
                  <div class="field-container">
                    <label>Channel Name:</label>
                    <input type="text" class="channel-input" name="channel[]" value="<?php echo htmlspecialchars($creator['channel']); ?>" readonly>
                  </div>
                  <div class="field-container">
                    <label>Creation Date:</label>
                    <input type="text" class="date-input" name="creation_date[]" value="<?php echo htmlspecialchars($creator['creation_date']); ?>" readonly>
                  </div>
                  <div class="hidden-fields" style="display:none">
                    <div class="field-container">
                      <label>Name:</label>
                      <input type="text" class="name-input" name="name[]" value="<?php echo htmlspecialchars($creator['name']); ?>" readonly>
                    </div>
                    <div class="field-container">
                      <label>Email:</label>
                      <input type="email" class="email-input" name="email[]" value="<?php echo htmlspecialchars($creator['email']); ?>" readonly>
                    </div>
                    <div class="field-container">
                      <label>Phone:</label>
                      <input type="tel" class="phone-input" name="phone[]" value="<?php echo htmlspecialchars($creator['phone']); ?>" readonly>
                    </div>
                  </div>
                </div>
                <button type="button" class="delete-btn">
                  <i class="fas fa-trash"></i> Delete
                </button>
              </div>
            <?php endforeach; ?>
          <?php else: ?>
            <div class="empty-state">
              <i class='bx bx-user'></i>
              <p>No registered creators found.</p>
            </div>
          <?php endif; ?>
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
    <?php include('../../ui/footer.php'); ?>
  </div>

  <script src="script.js"></script>
</body>
</html>