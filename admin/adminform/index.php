<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | Admin Form</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../../ui/styles/index.css">
</head>
<body>
    <?php include '../../ui/admin-sidebar.php'; ?>

    <section class="home">

        <div class="main-content">
            <div class="top-bar">
                <h2 class="text">Admin Management</h2>
                <div class="top_bar_option">
                    <li><a href="#"><i class='bx bx-home'></i> Home</a></li>
                    <li><a href="#"><i class='bx bx-user'></i> Admin</a></li>
                </div>
            </div>

            <div class="admin-form-wrapper">
                <div class="admin-card">
                    <div class="admin-card-header">
                        <h2><i class='bx bx-user-circle'></i> Admin Form</h2>
                        <p>Fill out the details to create or update an admin profile</p>
                    </div>
                    
                    <div class="admin-card-body">
                        <div class="admin-profile-section">
                            <div class="profile-image" id="profileImageContainer">
                                <img src="https://via.placeholder.com/120" alt="Profile Image" id="profilePreview">
                                <div class="profile-overlay">
                                    <i class='bx bx-camera'></i>
                                </div>
                                <div class="profile-options" id="profileOptions">
                                    <button class="profile-btn" onclick="changeProfile()"><i class='bx bx-upload'></i> Upload</button>
                                    <button class="profile-btn" onclick="removeProfile()"><i class='bx bx-trash'></i> Remove</button>
                                </div>
                                <input type="file" id="profileImage" accept="image/*" onchange="previewImage(event)" hidden>
                            </div>
                        </div>

                        <form class="admin-form">
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="name"><i class='bx bx-user'></i> Full Name</label>
                                    <input type="text" id="name" name="name" placeholder="Enter full name" required>
                                </div>
                                <div class="form-group">
                                    <label for="username"><i class='bx bx-id-card'></i> Username</label>
                                    <input type="text" id="username" name="username" placeholder="Enter username" required>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group">
                                    <label for="email"><i class='bx bx-envelope'></i> Email</label>
                                    <input type="email" id="email" name="email" placeholder="Enter email address" required>
                                </div>
                                <div class="form-group">
                                    <label for="phone"><i class='bx bx-phone'></i> Phone Number</label>
                                    <input type="tel" id="phone" name="phone" placeholder="Enter phone number" required>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group">
                                    <label for="dob"><i class='bx bx-calendar'></i> Date of Birth</label>
                                    <input type="date" id="dob" name="dob" required>
                                </div>
                                <div class="form-group">
                                    <label for="role"><i class='bx bx-shield-quarter'></i> Role</label>
                                    <select id="role" name="role" required>
                                        <option value="">Select Role</option>
                                        <option value="super_admin">Super Admin</option>
                                        <option value="admin">Admin</option>
                                        <option value="moderator">Moderator</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group">
                                    <label for="password"><i class='bx bx-lock-alt'></i> Password</label>
                                    <div class="password-input">
                                        <input type="password" id="password" name="password" placeholder="Enter password" required>
                                        <i class='bx bx-hide password-toggle' onclick="togglePassword('password')"></i>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="confirm_password"><i class='bx bx-lock-alt'></i> Confirm Password</label>
                                    <div class="password-input">
                                        <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm password" required>
                                        <i class='bx bx-hide password-toggle' onclick="togglePassword('confirm_password')"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group full-width">
                                <label for="address"><i class='bx bx-map'></i> Address</label>
                                <textarea id="address" name="address" placeholder="Enter address" rows="3"></textarea>
                            </div>

                            <div class="form-row checkbox-row">
                                <div class="form-group checkbox-group">
                                    <input type="checkbox" id="active" name="active" checked>
                                    <label for="active">Active Account</label>
                                </div>
                                <div class="form-group checkbox-group">
                                    <input type="checkbox" id="email_notifications" name="email_notifications" checked>
                                    <label for="email_notifications">Email Notifications</label>
                                </div>
                            </div>

                            <div class="form-actions">
                                <button type="button" class="cancel-btn"><i class='bx bx-x'></i> Cancel</button>
                                <button type="submit" class="submit-btn"><i class='bx bx-check'></i> Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="script.js">

    </script>
</body>
</html>