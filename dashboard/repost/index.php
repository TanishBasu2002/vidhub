<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reposted Videos</title>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/styles.css">
</head>
<body>
    <header>
        <div class="header-content">
            <img src="../assets/logo.svg" alt="Logo" class="logo">
            <h1>Reposted Videos</h1>
        </div>
        <h2 class="video-count">Total Reposted Videos: <span id="video-count">5</span></h2>
    </header>
    <main>
        <div class="video-list">
            <!-- edit by  shubhrajyoti -->
            <div class="video-item">
                <video src="video-url1.mp4" controls poster="thumbnail-url1.jpg"></video>
                <div class="video-info">
                    <h3>Funny Cat Compilation</h3>
                    <p>Creator: Jane Smith</p>
                    <p>Views: 5678</p>
                    <p>Published Date: 2025-03-28</p>
                    <p>Reported by: 3 users</p>
                </div>
                <button class="delete-btn" onclick="showPopup('Funny Cat Compilation')">
                    <i class='bx bx-trash'></i>
                </button>
            </div>
            <!-- edit by  shubhrajyoti -->
            <div class="video-item">
                <video src="video-url2.mp4" controls poster="thumbnail-url2.jpg"></video>
                <div class="video-info">
                    <h3>Gaming Highlights</h3>
                    <p>Creator: Alex Gamer</p>
                    <p>Views: 2345</p>
                    <p>Published Date: 2025-04-02</p>
                    <p>Reported by: 7 users</p>
                </div>
                <button class="delete-btn" onclick="showPopup('Gaming Highlights')">
                    <i class='bx bx-trash'></i>
                </button>
            </div>
            <!-- edit by  shubhrajyoti -->
            <div class="video-item">
                <video src="video-url3.mp4" controls poster="thumbnail-url3.jpg"></video>
                <div class="video-info">
                    <h3>Cooking Tutorial</h3>
                    <p>Creator: Chef Maria</p>
                    <p>Views: 890</p>
                    <p>Published Date: 2025-03-30</p>
                    <p>Reported by: 2 users</p>
                </div>
                <button class="delete-btn" onclick="showPopup('Cooking Tutorial')">
                    <i class='bx bx-trash'></i>
                </button>
            </div>
            <!-- edit by  shubhrajyoti -->
            <div class="video-item">
                <video src="video-url4.mp4" controls poster="thumbnail-url4.jpg"></video>
                <div class="video-info">
                    <h3>Travel Vlog: Paris</h3>
                    <p>Creator: TravelWithTom</p>
                    <p>Views: 4321</p>
                    <p>Published Date: 2025-04-03</p>
                    <p>Reported by: 4 users</p>
                </div>
                <button class="delete-btn" onclick="showPopup('Travel Vlog: Paris')">
                    <i class='bx bx-trash'></i>
                </button>
            </div>
            <!-- edit by  shubhrajyoti  -->
            <div class="video-item">
                <video src="video-url5.mp4" controls poster="thumbnail-url5.jpg"></video>
                <div class="video-info">
                    <h3>DIY Home Decor</h3>
                    <p>Creator: CraftyKate</p>
                    <p>Views: 1678</p>
                    <p>Published Date: 2025-04-01</p>
                    <p>Reported by: 6 users</p>
                </div>
                <button class="delete-btn" onclick="showPopup('DIY Home Decor')">
                    <i class='bx bx-trash'></i>
                </button>
            </div>
        </div>
    </main>

    <!-- edit by  shubhrajyoti -->
    <div class="popup" id="deletePopup">
        <div class="popup-content">
            <h3>Are you sure you want to delete "<span id="videoTitle"></span>"?</h3>
            <div class="popup-buttons">
                <button class="confirm-btn" onclick="confirmDelete()">Confirm</button>
                <button class="cancel-btn" onclick="hidePopup()">Cancel</button>
            </div>
        </div>
    </div>

    <script src="/script.js"></script>
</body>
</html>