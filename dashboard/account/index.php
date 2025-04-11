# file: *dashboard/account/index.php
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIDHUB - Create Your Channel</title>
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <!-- Sidebar -->
    <?php include '../../ui/sidebar.php'; ?>

    <!-- Top Bar -->
    <?php include '../../ui/topbar.php'; ?>

    <!-- Main Content -->
    <div class="main-content">
        <div class="onboarding-container">
            <div class="onboarding-form" id="channel-form">
                <div class="onboarding-header">
                    <h1>Create Your Channel</h1>
                    <p>Set up your VIDHUB channel to start sharing your content with the world</p>
                </div>

                <div class="image-upload">
                    <div class="image-upload-preview" id="image-preview">
                        <i class='bx bx-camera'></i>
                    </div>
                    <input type="file" id="channel-image" accept="image/*">
                    <label for="channel-image">Select Image</label>
                </div>

                <form>
                    <div class="form-group">
                        <label for="channel-name">Channel Name</label>
                        <input type="text" id="channel-name" placeholder="Enter your channel name" required>
                        <div class="availability-status" id="availability-status"></div>
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" placeholder="Enter your Name" required>
                    </div>
                    <div class="form-group">
                        <label for="channel-email">Email</label>
                        <input type="email" id="channel-email" placeholder="Enter your email" required>
                    </div>
                    <div class="form-group">
                        <label for="channel-date">Date of Birth</label>
                        <input type="date" id="channel-date" placeholder="Enter your DOB" required>
                    </div>
                    <div class="form-group">
                        <label for="channel-phone">Phone</label>
                        <input type="number" id="channel-number" placeholder="Mobile Number" required>
                    </div>

                    <div class="form-actions">
                        <button type="button" class="btn btn-cancel">Cancel</button>
                        <button type="submit" class="btn btn-create" id="create-channel">Create</button>
                    </div>
                </form>
            </div>

            <div class="success-message" id="success-message">
                <i class='bx bx-check-circle'></i>
                <h2>Channel Created Successfully!</h2>
                <p>Your channel is now live. Start uploading content and connect with your audience.</p>
                <button class="btn btn-create" id="continue-btn">Continue to Dashboard</button>
            </div>
        </div>
    </div>
    <script src="script.js">
      
    </script>
</body>

</html>