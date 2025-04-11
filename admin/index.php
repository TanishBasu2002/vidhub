<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    /* Admin Dashboard Styles */
    :root {
      --primary-color: #4361ee;
      --panel-color: #FFF;
      --text-color: #000;
      --black-light-color: #707070;
      --border-color: #e6e5e5;
      --toggle-color: #DDD;
      --box1-color: #4DA3FF;
      --box2-color: #FFE6AC;
      --box3-color: #E7D1FC;
      --title-icon-color: #fff;
      --bg-color: #f5f5f5;
    }

    .dark {
      --primary-color: #3a6cf4;
      --panel-color: #242526;
      --text-color: #CCC;
      --black-light-color: #CCC;
      --border-color: #4D4C4C;
      --toggle-color: #FFF;
      --box1-color: #3A3B3C;
      --box2-color: #3A3B3C;
      --box3-color: #3A3B3C;
      --title-icon-color: #CCC;
      --bg-color: #18191a;
    }

    /* Base Styles */
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
      background-color: var(--bg-color);
      color: var(--text-color);
      transition: all 0.3s ease;
    }

    .dashboard-container {
      margin-left: 250px;
      transition: margin-left 0.3s ease;
      padding: 20px;
    }

    .sidebar.close ~ .dashboard-container {
      margin-left: 88px;
    }

    .dashboard-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 30px;
      padding-bottom: 10px;
      border-bottom: 1px solid var(--border-color);
    }

    .dashboard-title {
      font-size: 24px;
      font-weight: 600;
    }

    .dashboard-actions {
      display: flex;
      gap: 15px;
    }

    .action-btn {
      background-color: var(--primary-color);
      color: white;
      border: none;
      padding: 10px 15px;
      border-radius: 5px;
      cursor: pointer;
      display: flex;
      align-items: center;
      gap: 5px;
      transition: background-color 0.3s;
    }

    .action-btn:hover {
      background-color: #2d4ceb;
    }

    .dashboard-cards {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
      gap: 20px;
      margin-bottom: 30px;
    }

    .dashboard-card {
      background-color: var(--panel-color);
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      display: flex;
      flex-direction: column;
      gap: 10px;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .dashboard-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }

    .card-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .card-icon {
      width: 50px;
      height: 50px;
      border-radius: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 24px;
      color: white;
    }

    .card-1 .card-icon {
      background-color: var(--box1-color);
    }

    .card-2 .card-icon {
      background-color: var(--box2-color);
      color: #000;
    }

    .card-3 .card-icon {
      background-color: var(--box3-color);
    }

    .card-4 .card-icon {
      background-color: #FF6B6B;
    }

    .card-title {
      font-size: 14px;
      color: var(--black-light-color);
    }

    .card-value {
      font-size: 24px;
      font-weight: 600;
    }

    .card-trend {
      display: flex;
      align-items: center;
      gap: 5px;
      font-size: 14px;
    }

    .trend-up {
      color: #4CAF50;
    }

    .trend-down {
      color: #F44336;
    }

    .dashboard-main {
      display: grid;
      grid-template-columns: 2fr 1fr;
      gap: 20px;
    }

    .activity-panel, .creator-panel {
      background-color: var(--panel-color);
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .panel-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 20px;
    }

    .panel-title {
      font-size: 18px;
      font-weight: 600;
    }

    .view-all {
      color: var(--primary-color);
      text-decoration: none;
      font-size: 14px;
    }

    .activity-list {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    .activity-item {
      display: flex;
      align-items: center;
      gap: 15px;
      padding: 10px 0;
      border-bottom: 1px solid var(--border-color);
    }

    .activity-icon {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 20px;
      color: white;
      background-color: var(--primary-color);
    }

    .activity-details {
      flex-grow: 1;
    }

    .activity-title {
      font-weight: 500;
      margin-bottom: 5px;
    }

    .activity-time {
      font-size: 12px;
      color: var(--black-light-color);
    }

    .creator-list {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    .creator-item {
      display: flex;
      align-items: center;
      gap: 10px;
      padding: 10px 0;
      border-bottom: 1px solid var(--border-color);
    }

    .creator-avatar {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      object-fit: cover;
    }

    .creator-info {
      flex-grow: 1;
    }

    .creator-name {
      font-weight: 500;
      margin-bottom: 3px;
    }

    .creator-status {
      font-size: 12px;
      color: var(--black-light-color);
    }

    .admin-form-btn {
      background-color: var(--primary-color);
      color: white;
      border: none;
      padding: 10px 15px;
      border-radius: 5px;
      cursor: pointer;
      font-weight: 500;
      transition: background-color 0.3s;
      text-decoration: none;
      display: inline-block;
      margin-top: 15px;
    }

    .admin-form-btn:hover {
      background-color: #2d4ceb;
    }

    @media screen and (max-width: 768px) {
      .dashboard-container {
        margin-left: 0;
        padding: 10px;
      }
      
      .sidebar.close ~ .dashboard-container {
        margin-left: 0;
      }
      
      .dashboard-main {
        grid-template-columns: 1fr;
      }
      
      .dashboard-cards {
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
      }
    }
     /* Google Font Import */
 @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

:root {
    /* ===== Colors ===== */
    --body-color: #E4E9F7;
    --sidebar-color: #FFF;
    --primary-color: #695CFE;
    --primary-color-light: #F6F5FF;
    --toggle-color: #DDD;
    --text-color: #707070;
    /* ====== Transition ====== */
    --tran-03: all 0.2s ease;
    --tran-04: all 0.3s ease;
    --tran-05: all 0.3s ease;
}

body {
    min-height: 100vh;
    background-color: var(--body-color);
    transition: var(--tran-05);
}

::selection {
    background-color: var(--primary-color);
    color: #fff;
}

body.dark {
    --body-color: #18191a;
    --sidebar-color: #242526;
    --primary-color: #3a3b3c;
    --primary-color-light: #3a3b3c;
    --toggle-color: #fff;
    --text-color: #ccc;
}

/* ===== Sidebar ===== */
.sidebar {
position: fixed;
top: 0;
left: 0;
height: 100%;
width: 250px;
padding: 10px 14px;
background: var(--sidebar-color);
transition: var(--tran-05);
z-index: 100;
}

.sidebar.close {
width: 88px;
}

/* ===== Reusable code ===== */
.sidebar li {
height: 50px;
list-style: none;
display: flex;
align-items: center;
margin-top: 10px;
}

.sidebar header .image,
.sidebar .icon {
min-width: 60px;
border-radius: 6px;
}

.sidebar .icon {
min-width: 60px;
border-radius: 6px;
height: 100%;
display: flex;
align-items: center;
justify-content: center;
font-size: 20px;
}

.sidebar .text,
.sidebar .icon {
color: var(--text-color);
transition: var(--tran-03);
}

.sidebar .text {
font-size: 17px;
font-weight: 500;
white-space: nowrap;
opacity: 1;
}

.sidebar.close .text {
opacity: 0;
}

/* =========================== */
.sidebar header {
position: relative;
}

.sidebar header .image-text {
display: flex;
align-items: center;
}

.sidebar header .logo-text {
display: flex;
flex-direction: column;
}

header .image-text .name {
margin-top: 2px;
font-size: 18px;
font-weight: 600;
}

header .image-text .profession {
font-size: 16px;
margin-top: -2px;
display: block;
}

.sidebar header .image {
display: flex;
align-items: center;
justify-content: center;
}

.sidebar header .image img {
width: 40px;
border-radius: 6px;
}

.sidebar header .toggle {
position: absolute;
top: 50%;
right: -25px;
transform: translateY(-50%) rotate(180deg);
height: 25px;
width: 25px;
background-color: var(--primary-color);
color: var(--sidebar-color);
border-radius: 50%;
display: flex;
align-items: center;
justify-content: center;
font-size: 22px;
cursor: pointer;
transition: var(--tran-05);
}

body.dark .sidebar header .toggle {
color: var(--text-color);
}

.sidebar.close .toggle {
transform: translateY(-50%) rotate(0deg);
}

.sidebar .menu {
/* margin-top: 40px;*/
overflow-y: auto;
max-height: calc(100vh - 250px);
/* Adjust this value based on your needs */
/* Hide scrollbar for Chrome, Safari, and Edge */
scrollbar-width: none;
/* Firefox */
-ms-overflow-style: none;
/* IE and Edge */
}

.sidebar li.search-box {
border-radius: 6px;
background-color: var(--primary-color-light);
cursor: pointer;
transition: var(--tran-05);
}

.sidebar li.search-box input {
height: 100%;
width: 100%;
outline: none;
border: none;
background-color: var(--primary-color-light);
color: var(--text-color);
border-radius: 6px;
font-size: 17px;
font-weight: 500;
transition: var(--tran-05);
}

.sidebar li a {
list-style: none;
height: 100%;
background-color: transparent;
display: flex;
align-items: center;
width: 100%;
border-radius: 6px;
text-decoration: none;
transition: var(--tran-03);
}

.sidebar li a:hover {
background-color: var(--primary-color);
}

.sidebar li a:hover .icon,
.sidebar li a:hover .text {
color: var(--sidebar-color);
}

body.dark .sidebar li a:hover .icon,
body.dark .sidebar li a:hover .text {
color: var(--text-color);
}

.sidebar .menu-bar {
height: calc(100% - 55px);
display: flex;
flex-direction: column;
justify-content: space-between;
}

.sidebar .bottom-content {
position: absolute;
bottom: 0;
left: 0;
width: 100%;
padding: 10px 14px;
background: var(--sidebar-color);
transition: var(--tran-05);
}

.sidebar.close .bottom-content {
width: 88px;
}

.menu-bar .mode {
border-radius: 6px;
background-color: var(--primary-color-light);
position: relative;
transition: var(--tran-05);
}

.menu-bar .mode .sun-moon {
height: 50px;
width: 60px;
}

.mode .sun-moon i {
position: absolute;
}

.mode .sun-moon i.sun {
opacity: 0;
}

body.dark .mode .sun-moon i.sun {
opacity: 1;
}

body.dark .mode .sun-moon i.moon {
opacity: 0;
}

.menu-bar .bottom-content .toggle-switch {
position: absolute;
right: 0;
height: 100%;
min-width: 60px;
display: flex;
align-items: center;
justify-content: center;
border-radius: 6px;
cursor: pointer;
}

.toggle-switch .switch {
position: relative;
height: 22px;
width: 40px;
border-radius: 25px;
background-color: var(--toggle-color);
transition: var(--tran-05);
}

.switch::before {
content: '';
position: absolute;
height: 15px;
width: 15px;
border-radius: 50%;
top: 50%;
left: 5px;
transform: translateY(-50%);
background-color: var(--sidebar-color);
transition: var(--tran-04);
}

body.dark .switch::before {
left: 20px;
}

.home {
position: absolute;
top: 0;
left: 250px;
height: 100vh;
width: calc(100% - 250px);
background-color: var(--body-color);
transition: var(--tran-05);
}

.home .text {
font-size: 30px;
font-weight: 500;
color: var(--text-color);
padding: 12px 60px;
}

.sidebar.close~.home {
left: 78px;
height: 100vh;
width: calc(100% - 78px);
}

body.dark .home .text {
color: var(--text-color);
}

/* Custom horizontal line  */
hr {
border: none;
height: 1px;
background-color: var(--toggle-color);
margin: 10px 0;
transition: var(--tran-05);
}

body.dark hr {
background-color: var(--text-color);
}
/* Main Content */
.main-content {
    flex-grow: 1;
    padding: 20px;
    margin-left: 250px;
    transition: margin-left 0.3s ease;
    width: calc(100% - 250px);
    overflow-y: auto;
    background-color: var(--body-color);
}

.sidebar.close~.main-content {
    margin-left: 88px;
    width: calc(100% - 88px);
}

/* Top Bar */
.top-bar {
display: flex;
justify-content: space-between;
align-items: center;
padding: 20px 0;
}

.search-box {
display: flex;
align-items: center;
background: var(--primary-color-light);
/* Changed to use variable */
padding: 8px 15px;
border-radius: 25px;
width: 300px;
}

.search-box input {
border: none;
background: transparent;
color: var(--text-color);
/* Changed to use variable */
outline: none;
width: 100%;
}

.search-box i {
color: var(--text-color);
/* Changed to use variable */
margin-right: 10px;
}

.search-button {
margin-left: 10px;
}

.search-button a {
display: flex;
align-items: center;
text-decoration: none;
color: var(--sidebar-color);
/* Changed to use variable */
background: #ff0000;
padding: 8px 15px;
border-radius: 25px;
}

.search-button a:hover {
background: #cc0000;
}

.top_bar_option {
display: flex;
gap: 20px;
align-items: center;
}

.top_bar_option li {
list-style: none;
}

.top_bar_option a {
display: flex;
align-items: center;
text-decoration: none;
color: var(--text-color);
/* Changed to use variable */
}

.top_bar_option i {
margin-right: 5px;
}

/* Icons */
.icons {
display: flex;
gap: 20px;
}

.icon {
font-size: 24px;
cursor: pointer;
transition: 0.3s;
}

.icon:hover {
color: red;
}

/* Feedback Page Specific Styles */
.feedback-container {
    max-width: 600px;
    margin: 40px auto;
    padding: 30px;
    background: var(--sidebar-color);
    border-radius: 15px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    animation: fadeIn 0.5s ease-in-out;
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.feedback-header {
    text-align: center;
    margin-bottom: 30px;
}

.feedback-header h1 {
    font-size: 32px;
    font-weight: 600;
    color: var(--text-color);
}

.feedback-header p {
    font-size: 16px;
    color: #888;
    margin-top: 10px;
}

.feedback-form {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.form-group {
    display: flex;
    flex-direction: column;
    gap: 8px;
}

.form-group label {
    font-size: 15px;
    font-weight: 500;
    color: var(--text-color);
}

.form-group input,
.form-group textarea,
.form-group select {
    padding: 12px;
    border: 1px solid var(--toggle-color);
    border-radius: 8px;
    background: var(--primary-color-light);
    color: var(--text-color);
    font-size: 14px;
    outline: none;
    transition: border-color 0.3s ease;
}

.form-group input:focus,
.form-group textarea:focus,
.form-group select:focus {
    border-color: var(--primary-color);
}

.form-group textarea {
    resize: vertical;
    min-height: 120px;
}

.submit-btn {
    padding: 12px;
    background-color: #ff6200;
    color: white;
    border: none;
    border-radius: 8px;
    font-size: 16px;
    font-weight: 500;
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.3s ease;
}

.submit-btn:hover {
    background-color: #e55a00;
    transform: translateY(-2px);
}

/* Success Popup */
.success-popup {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%) scale(0.9);
    background: var(--sidebar-color);
    padding: 20px;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    text-align: center;
    opacity: 0;
    visibility: hidden;
    transition: opacity 0.3s ease, transform 0.3s ease;
    z-index: 1000;
}

.success-popup.active {
    opacity: 1;
    visibility: visible;
    transform: translate(-50%, -50%) scale(1);
}

.success-popup i {
    font-size: 40px;
    color: #28a745;
    margin-bottom: 15px;
}

.success-popup p {
    font-size: 16px;
    color: var(--text-color);
    margin-bottom: 20px;
}

.success-popup button {
    padding: 10px 20px;
    background-color: #ff6200;
    color: white;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.success-popup button:hover {
    background-color: #e55a00;
}

/* Overlay for Popup */
.overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    opacity: 0;
    visibility: hidden;
    transition: opacity 0.3s ease;
    z-index: 999;
}

.overlay.active {
    opacity: 1;
    visibility: visible;
}

/* Footer */
.footer {
    text-align: center;
    padding: 20px;
    font-size: 14px;
    color: #888;
    background: var(--sidebar-color);
    margin-top: 40px;
    border-top: 1px solid var(--toggle-color);
}

body.dark .footer {
    border-top: 1px solid var(--text-color);
}

body.dark .feedback-container {
    box-shadow: 0 4px 15px rgba(255, 255, 255, 0.1);
}

body.dark .form-group input,
body.dark .form-group textarea,
body.dark .form-group select {
    border-color: var(--text-color);
}

/* Responsive Styles */
@media (max-width: 768px) {
    .sidebar {
        width: 200px;
    }

    .main-content {
        margin-left: 200px;
        width: calc(100% - 200px);
    }

    .sidebar.close~.main-content {
        margin-left: 88px;
        width: calc(100% - 88px);
    }

    .search-box {
        width: 200px;
    }

    .feedback-container {
        padding: 20px;
    }

    .feedback-header h1 {
        font-size: 28px;
    }
}

/* Profile Popup (Copied from Index) */
.profile-container {
    position: relative;
}

.profile-popup {
    position: absolute;
    top: 60px;
    right: 0;
    background-color: var(--sidebar-color);
    border-radius: 12px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    width: 320px;
    z-index: 1000;
    opacity: 0;
    visibility: hidden;
    transform: translateY(-15px) scale(0.95);
    transition: opacity 0.3s ease, transform 0.3s ease, visibility 0s linear 0.3s;
    border: 1px solid rgba(0, 0, 0, 0.05);
}

.profile-popup.active {
    opacity: 1;
    visibility: visible;
    transform: translateY(0) scale(1);
    transition: opacity 0.3s ease, transform 0.3s ease;
}

.popup-content {
    padding: 0;
    border-radius: 12px;
    overflow: hidden;
}

.popup-header {
    background: linear-gradient(135deg, #919191, #e55a00);
    padding: 15px 20px;
    position: relative;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.popup-header h3 {
    font-size: 18px;
    font-weight: 600;
    color: white;
    margin: 0;
}

.close-popup {
    background: none;
    border: none;
    color: white;
    font-size: 24px;
    cursor: pointer;
    transition: color 0.3s ease, transform 0.3s ease;
}

.close-popup:hover {
    color: #ffd700;
    transform: rotate(90deg);
}

.popup-body {
    padding: 20px;
    text-align: center;
    background-color: var(--sidebar-color);
}

.popup-body p {
    font-size: 14px;
    color: #666;
    margin-bottom: 20px;
    line-height: 1.5;
}

.popup-buttons {
    display: flex;
    flex-direction: column;
    gap: 12px;
}

.btn {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    padding: 12px;
    border-radius: 8px;
    text-decoration: none;
    font-size: 14px;
    font-weight: 500;
    transition: background-color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
}

.register-btn {
    background-color: #ff6200;
    color: white;
    box-shadow: 0 2px 8px rgba(255, 98, 0, 0.3);
}

.register-btn:hover {
    background-color: #e55a00;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(255, 98, 0, 0.4);
}

.login-btn {
    background-color: #1a73e8;
    color: white;
    box-shadow: 0 2px 8px rgba(26, 115, 232, 0.3);
}

.login-btn:hover {
    background-color: #1557b0;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(26, 115, 232, 0.4);
}

.popup-footer {
    padding: 10px 20px;
    background-color: var(--primary-color-light);
    text-align: center;
    border-top: 1px solid rgba(0, 0, 0, 0.05);
}

.popup-footer p {
    font-size: 12px;
    color: #888;
    margin: 0;
}

.popup-footer .footer-link {
    color: #ff6200;
    text-decoration: none;
    font-weight: 500;
    transition: color 0.3s ease;
}

.popup-footer .footer-link:hover {
    color: #e55a00;
    text-decoration: underline;
}

body.dark .profile-popup {
    background-color: var(--sidebar-color);
    border-color: rgba(255, 255, 255, 0.1);
}

body.dark .popup-body {
    background-color: var(--sidebar-color);
}

body.dark .popup-body p {
    color: #bbb;
}

body.dark .popup-footer {
    background-color: var(--primary-color-light);
    border-top-color: rgba(255, 255, 255, 0.1);
}

body.dark .popup-footer p {
    color: #ccc;
}
  </style>
</head>
<body>
  <!-- Sidebar -->
  <?php include '../ui/admin/adminsidebar.php'; ?>

  <!-- Top Bar -->
  <?php include '../ui/topbar.php'; ?>

  <div class="dashboard-container">
    <div class="dashboard-header">
      <h1 class="dashboard-title">Admin Dashboard</h1>
      <div class="dashboard-actions">
        <button class="action-btn">
          <i class='bx bx-refresh'></i> Refresh
        </button>
        <a href="./form/" class="action-btn admin-form-btn">
          <i class='bx bx-user-plus'></i> Manage Creators
        </a>
      </div>
    </div>

    <div class="dashboard-cards">
      <div class="dashboard-card card-1">
        <div class="card-header">
          <div class="card-icon">
            <i class='bx bx-user'></i>
          </div>
        </div>
        <div class="card-title">Total Users</div>
        <div class="card-value">12,574</div>
        <div class="card-trend trend-up">
          <i class='bx bx-up-arrow-alt'></i> 12% from last month
        </div>
      </div>

      <div class="dashboard-card card-2">
        <div class="card-header">
          <div class="card-icon">
            <i class='bx bx-video'></i>
          </div>
        </div>
        <div class="card-title">Total Videos</div>
        <div class="card-value">8,942</div>
        <div class="card-trend trend-up">
          <i class='bx bx-up-arrow-alt'></i> 8% from last month
        </div>
      </div>

      <div class="dashboard-card card-3">
        <div class="card-header">
          <div class="card-icon">
            <i class='bx bx-group'></i>
          </div>
        </div>
        <div class="card-title">Active Creators</div>
        <div class="card-value">1,247</div>
        <div class="card-trend trend-up">
          <i class='bx bx-up-arrow-alt'></i> 5% from last month
        </div>
      </div>

      <div class="dashboard-card card-4">
        <div class="card-header">
          <div class="card-icon">
            <i class='bx bx-flag'></i>
          </div>
        </div>
        <div class="card-title">Content Flags</div>
        <div class="card-value">87</div>
        <div class="card-trend trend-down">
          <i class='bx bx-down-arrow-alt'></i> 3% from last month
        </div>
      </div>
    </div>

    <div class="dashboard-main">
      <div class="activity-panel">
        <div class="panel-header">
          <h2 class="panel-title">Recent Activities</h2>
          <a href="#" class="view-all">View All</a>
        </div>
        <div class="activity-list">
          <div class="activity-item">
            <div class="activity-icon">
              <i class='bx bx-user-plus'></i>
            </div>
            <div class="activity-details">
              <div class="activity-title">New Creator Account Created</div>
              <div class="activity-time">2 hours ago</div>
            </div>
          </div>
          <div class="activity-item">
            <div class="activity-icon">
              <i class='bx bx-video-plus'></i>
            </div>
            <div class="activity-details">
              <div class="activity-title">New Video Uploaded</div>
              <div class="activity-time">4 hours ago</div>
            </div>
          </div>
          <div class="activity-item">
            <div class="activity-icon">
              <i class='bx bx-flag'></i>
            </div>
            <div class="activity-details">
              <div class="activity-title">Content Flagged For Review</div>
              <div class="activity-time">1 day ago</div>
            </div>
          </div>
          <div class="activity-item">
            <div class="activity-icon">
              <i class='bx bx-message-alt-detail'></i>
            </div>
            <div class="activity-details">
              <div class="activity-title">New Support Request</div>
              <div class="activity-time">1 day ago</div>
            </div>
          </div>
          <div class="activity-item">
            <div class="activity-icon">
              <i class='bx bx-shield-quarter'></i>
            </div>
            <div class="activity-details">
              <div class="activity-title">Security Alert</div>
              <div class="activity-time">2 days ago</div>
            </div>
          </div>
        </div>
      </div>

      <div class="creator-panel">
        <div class="panel-header">
          <h2 class="panel-title">Top Creators</h2>
          <a href="#" class="view-all">View All</a>
        </div>
        <div class="creator-list">
          <div class="creator-item">
            <img src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Creator" class="creator-avatar">
            <div class="creator-info">
              <div class="creator-name">Alex Johnson</div>
              <div class="creator-status">Active • 28 videos</div>
            </div>
          </div>
          <div class="creator-item">
            <img src="https://images.pexels.com/photos/1239291/pexels-photo-1239291.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Creator" class="creator-avatar">
            <div class="creator-info">
              <div class="creator-name">Sarah Williams</div>
              <div class="creator-status">Active • 24 videos</div>
            </div>
          </div>
          <div class="creator-item">
            <img src="https://images.pexels.com/photos/2379005/pexels-photo-2379005.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Creator" class="creator-avatar">
            <div class="creator-info">
              <div class="creator-name">Michael Chen</div>
              <div class="creator-status">Active • 21 videos</div>
            </div>
          </div>
          <div class="creator-item">
            <img src="https://images.pexels.com/photos/415829/pexels-photo-415829.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Creator" class="creator-avatar">
            <div class="creator-info">
              <div class="creator-name">Jessica Rodriguez</div>
              <div class="creator-status">Active • 17 videos</div>
            </div>
          </div>
          <div class="creator-item">
            <img src="https://images.pexels.com/photos/614810/pexels-photo-614810.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Creator" class="creator-avatar">
            <div class="creator-info">
              <div class="creator-name">David Smith</div>
              <div class="creator-status">Active • 15 videos</div>
            </div>
          </div>
        </div>
        <a href="./form/" class="admin-form-btn">
          <i class='bx bx-user-plus'></i> Manage Creators
        </a>
      </div>
    </div>
  </div>

  <script>
    // Script for Admin Form navigation
    document.addEventListener('DOMContentLoaded', function() {
      // Add click event to all admin form buttons
      const adminFormBtns = document.querySelectorAll('.admin-form-btn');
      adminFormBtns.forEach(btn => {
        btn.addEventListener('click', function(e) {
          e.preventDefault();
          window.location.href = '<?php echo $dashboard_url; ?>admin/form/';
        });
      });
      
      // Add active class to current page link in sidebar
      const currentPath = window.location.pathname;
      const navLinks = document.querySelectorAll('.nav-link a');
      
      navLinks.forEach(link => {
        if (currentPath.includes(link.getAttribute('href'))) {
          link.parentElement.classList.add('active');
        }
      });
    });
  </script>
</body>
</html>