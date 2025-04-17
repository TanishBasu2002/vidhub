<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Users - VIDHUB</title>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        :root {
            /* Colors */
            --body-color: #F5F6FA;
            --card-bg: #FFFFFF;
            --primary-color: #4F46E5;
            --primary-hover: #4338CA;
            --text-color: #1F2A44;
            --text-secondary: #6B7280;
            --danger-color: #EF4444;
            --danger-hover: #DC2626;
            --border-color: #E5E7EB;
            --shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            --gradient: linear-gradient(135deg, #4F46E5 0%, #7C3AED 100%);
            /* Transitions */
            --tran-03: all 0.3s ease;
            --tran-05: all 0.5s ease;
        }

        body {
            min-height: 100vh;
            background: var(--body-color);
            padding: 40px;
            display: flex;
            justify-content: center;
            align-items: flex-start;
        }

        body.dark {
            --body-color: #111827;
            --card-bg: #1F2A44;
            --primary-color: #6366F1;
            --primary-hover: #4F46E5;
            --text-color: #D1D5DB;
            --text-secondary: #9CA3AF;
            --border-color: #374151;
            --shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.3);
            --gradient: linear-gradient(135deg, #6366F1 0%, #9333EA 100%);
        }

        .main-container {
            background: var(--card-bg);
            border-radius: 20px;
            box-shadow: var(--shadow);
            width: 100%;
            max-width: 1150px;
            padding: 35px;
            position: relative;
            overflow: hidden;
            border: 1px solid var(--border-color);
        }

        .main-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: var(--gradient);
        }

        /* Header */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-bottom: 25px;
            border-bottom: 1px solid var(--border-color);
        }

        .header h1 {
            font-size: 30px;
            font-weight: 700;
            color: var(--text-color);
            background: var(--gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .header .total-users {
            font-size: 16px;
            font-weight: 600;
            color: #FFFFFF;
            background: var(--gradient);
            padding: 8px 16px;
            border-radius: 20px;
            box-shadow: 0 2px 4px rgba(79, 70, 229, 0.2);
        }

        /* Search Bar */
        .search-bar {
            padding: 20px 0;
            position: relative;
        }

        .search-bar input {
            width: 100%;
            padding: 14px 20px 14px 50px;
            border: 1px solid var(--border-color);
            border-radius: 10px;
            font-size: 16px;
            color: var(--text-color);
            background: var(--body-color);
            outline: none;
            transition: var(--tran-03);
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.05);
        }

        .search-bar input:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 10px rgba(79, 70, 229, 0.2);
        }

        .search-bar::before {
            content: '\e986';
            font-family: 'boxicons';
            position: absolute;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-secondary);
            font-size: 20px;
        }

        /* Selected User Details */
        .selected-user {
            padding: 25px;
            border-radius: 12px;
            background: rgba(79, 70, 229, 0.05);
            margin-bottom: 25px;
            display: flex;
            align-items: center;
            gap: 25px;
            opacity: 1;
            transform: translateY(0);
            transition: var(--tran-05);
            border: 1px dashed var(--primary-color);
        }

        .selected-user .user-avatar {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            background: var(--gradient);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
            color: #FFFFFF;
            flex-shrink: 0;
            box-shadow: 0 4px 12px rgba(79, 70, 229, 0.3);
        }

        .selected-user .user-details {
            flex: 1;
        }

        .selected-user .username {
            font-size: 24px;
            font-weight: 600;
            color: var(--text-color);
            margin-bottom: 10px;
        }

        .selected-user .detail {
            font-size: 14px;
            color: var(--text-secondary);
            margin-bottom: 6px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .selected-user .detail i {
            color: var(--primary-color);
            font-size: 16px;
        }

        /* Users List */
        .users-list {
            max-height: 450px;
            overflow-y: auto;
            overflow-x: hidden;
        }

        .user-item {
            display: flex;
            align-items: center;
            padding: 15px;
            border-bottom: 1px solid var(--border-color);
            transition: var(--tran-03);
            cursor: pointer;
            position: relative;
        }

        .user-item:last-child {
            border-bottom: none;
        }

        .user-item:hover {
            background: rgba(79, 70, 229, 0.08);
            transform: translateX(5px);
        }

        .user-item .user-avatar {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background: var(--gradient);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            color: #FFFFFF;
            margin-right: 15px;
            flex-shrink: 0;
        }

        .user-item .user-info {
            flex: 1;
        }

        .user-item .username {
            font-size: 16px;
            font-weight: 500;
            color: var(--text-color);
            margin-bottom: 3px;
        }

        .user-item .user-meta {
            font-size: 12px;
            color: var(--text-secondary);
        }

        .user-item .btn-delete {
            background: none;
            border: none;
            color: var(--danger-color);
            font-size: 20px;
            cursor: pointer;
            transition: var(--tran-03);
            padding: 8px;
        }

        .user-item .btn-delete:hover {
            color: var(--danger-hover);
            transform: scale(1.1);
        }

        /* Modal */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            z-index: 1000;
            align-items: center;
            justify-content: center;
        }

        .modal-content {
            background: var(--card-bg);
            border-radius: 14px;
            width: 90%;
            max-width: 480px;
            padding: 30px;
            box-shadow: var(--shadow);
            animation: slideIn 0.3s ease;
            border: 1px solid var(--border-color);
        }

        @keyframes slideIn {
            from { transform: translateY(-40px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .modal-header h2 {
            font-size: 22px;
            font-weight: 600;
            color: var(--text-color);
        }

        .close-modal {
            background: none;
            border: none;
            font-size: 26px;
            color: var(--text-secondary);
            cursor: pointer;
            transition: var(--tran-03);
        }

        .close-modal:hover {
            color: var(--text-color);
        }

        .modal-body p {
            font-size: 16px;
            color: var(--text-secondary);
            margin-bottom: 30px;
            text-align: center;
        }

        .modal-actions {
            display: flex;
            gap: 15px;
            justify-content: center;
        }

        .btn {
            padding: 12px 25px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            transition: var(--tran-03);
            border: none;
        }

        .btn-confirm {
            background: var(--danger-color);
            color: #FFFFFF;
        }

        .btn-confirm:hover {
            background: var(--danger-hover);
        }

        .btn-cancel {
            background: var(--border-color);
            color: var(--text-color);
        }

        .btn-cancel:hover {
            background: #D1D5DB;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            body { padding: 20px; }
            .main-container { padding: 25px; }
            .header { flex-direction: column; gap: 15px; text-align: center; }
            .selected-user { flex-direction: column; text-align: center; gap: 15px; }
            .user-item { flex-direction: column; align-items: flex-start; gap: 10px; }
            .user-item .btn-delete { align-self: flex-end; }
        }

        @media (max-width: 480px) {
            .header h1 { font-size: 24px; }
            .selected-user .username { font-size: 20px; }
            .selected-user .detail { font-size: 12px; }
            .user-item .username { font-size: 14px; }
            .user-item .user-meta { font-size: 11px; }
        }
    </style>
        <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../../ui/styles/index.css">

</head>
<body>
<?php include '../../ui/admin-sidebar.php'; ?>
    <div class="main-container">
        <!-- Header -->
        <div class="header">
            <h1>Registered Users</h1>
            <div class="total-users">Total: <span id="total-users">0</span></div>
        </div>

        <!-- Search Bar -->
        <div class="search-bar">
            <input type="text" id="search-input" placeholder="Search users by name, email, or channel...">
        </div>

        <!-- Selected User Details -->
        <div class="selected-user" id="selected-user">
            <div class="user-avatar"><i class='bx bx-user'></i></div>
            <div class="user-details">
                <div class="username" id="selected-username">Select a user</div>
                <div class="detail" id="selected-email"><i class='bx bx-envelope'></i>Email: N/A</div>
                <div class="detail" id="selected-joined"><i class='bx bx-calendar'></i>Joined: N/A</div>
                <div class="detail" id="selected-plan"><i class='bx bx-star'></i>Plan: N/A</div>
                <div class="detail" id="selected-videos"><i class='bx bx-video'></i>Total Videos: N/A</div>
                <div class="detail" id="selected-channel"><i class='bx bx-channel'></i>Channel: N/A</div>
            </div>
        </div>

        <!-- Users List -->
        <div class="users-list" id="users-list">
            <!-- User items will be dynamically added here -->
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div class="modal" id="delete-modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Confirm Deletion</h2>
                <button class="close-modal" id="close-modal"><i class='bx bx-x'></i></button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete <strong id="delete-username"></strong>?</p>
                <div class="modal-actions">
                    <button class="btn btn-confirm" id="confirm-delete">Yes, Delete</button>
                    <button class="btn btn-cancel" id="cancel-delete">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Sample user data
        let users = [
            { username: 'JohnDoe', email: 'johndoe@example.com', joined: '2023-01-15', plan: 'Premium', totalVideos: 25, channel: 'John\'s Tech Hub' },
            { username: 'JaneSmith', email: 'janesmith@example.com', joined: '2023-02-20', plan: 'Free', totalVideos: 10, channel: 'Jane\'s Vlogs' },
            { username: 'AliceBrown', email: 'alicebrown@example.com', joined: '2023-03-10', plan: 'Premium', totalVideos: 30, channel: 'Alice\'s Adventures' },
            { username: 'BobWhite', email: 'bobwhite@example.com', joined: '2023-04-05', plan: 'Free', totalVideos: 15, channel: 'Bob\'s Gaming' },
            { username: 'EmmaGreen', email: 'emmagreen@example.com', joined: '2023-05-12', plan: 'Premium', totalVideos: 20, channel: 'Emma\'s Lifestyle' },
        ];

        let filteredUsers = [...users];
        let selectedUser = null;

        // Function to render users
        function renderUsers() {
            const usersList = document.getElementById('users-list');
            usersList.innerHTML = '';
            filteredUsers.forEach(user => {
                const userItem = `
                    <div class="user-item" data-username="${user.username}">
                        <div class="user-avatar"><i class='bx bx-user'></i></div>
                        <div class="user-info" onclick="selectUser('${user.username}')">
                            <div class="username">${user.username}</div>
                            <div class="user-meta">Channel: ${user.channel} | Videos: ${user.totalVideos}</div>
                        </div>
                        <button class="btn-delete" onclick="openDeleteModal('${user.username}')"><i class='bx bx-trash'></i></button>
                    </div>
                `;
                usersList.innerHTML += userItem;
            });
            document.getElementById('total-users').textContent = filteredUsers.length;
        }

        // Search functionality
        document.getElementById('search-input').addEventListener('input', (e) => {
            const searchTerm = e.target.value.toLowerCase();
            filteredUsers = users.filter(user => 
                user.username.toLowerCase().includes(searchTerm) || 
                user.email.toLowerCase().includes(searchTerm) || 
                user.channel.toLowerCase().includes(searchTerm)
            );
            renderUsers();
            if (filteredUsers.length > 0) {
                selectUser(filteredUsers[0].username); // Show top filtered user
            }
        });

        // Select user and show details
        function selectUser(username) {
            selectedUser = users.find(user => user.username === username);
            const selectedUserDiv = document.getElementById('selected-user');
            document.getElementById('selected-username').textContent = selectedUser.username;
            document.getElementById('selected-email').innerHTML = `<i class='bx bx-envelope'></i>Email: ${selectedUser.email}`;
            document.getElementById('selected-joined').innerHTML = `<i class='bx bx-calendar'></i>Joined: ${selectedUser.joined}`;
            document.getElementById('selected-plan').innerHTML = `<i class='bx bx-star'></i>Plan: ${selectedUser.plan}`;
            document.getElementById('selected-videos').innerHTML = `<i class='bx bx-video'></i>Total Videos: ${selectedUser.totalVideos}`;
            document.getElementById('selected-channel').innerHTML = `<i class='bx bx-channel'></i>Channel: ${selectedUser.channel}`;
            selectedUserDiv.style.opacity = '1';
            selectedUserDiv.style.transform = 'translateY(0)';
        }

        // Open delete confirmation modal
        function openDeleteModal(username) {
            selectedUser = users.find(user => user.username === username);
            document.getElementById('delete-username').textContent = selectedUser.username;
            document.getElementById('delete-modal').style.display = 'flex';
        }

        // Close modal
        function closeModal() {
            document.getElementById('delete-modal').style.display = 'none';
        }

        document.getElementById('close-modal').addEventListener('click', closeModal);
        document.getElementById('cancel-delete').addEventListener('click', closeModal);

        // Confirm delete
        document.getElementById('confirm-delete').addEventListener('click', () => {
            const index = users.findIndex(user => user.username === selectedUser.username);
            if (index !== -1) {
                users.splice(index, 1);
                filteredUsers = [...users];
                renderUsers();
                if (filteredUsers.length > 0) {
                    selectUser(filteredUsers[0].username); // Show top user after deletion
                } else {
                    const selectedUserDiv = document.getElementById('selected-user');
                    selectedUserDiv.style.opacity = '0';
                    document.getElementById('selected-username').textContent = 'No users available';
                    document.getElementById('selected-email').innerHTML = `<i class='bx bx-envelope'></i>Email: N/A`;
                    document.getElementById('selected-joined').innerHTML = `<i class='bx bx-calendar'></i>Joined: N/A`;
                    document.getElementById('selected-plan').innerHTML = `<i class='bx bx-star'></i>Plan: N/A`;
                    document.getElementById('selected-videos').innerHTML = `<i class='bx bx-video'></i>Total Videos: N/A`;
                    document.getElementById('selected-channel').innerHTML = `<i class='bx bx-channel'></i>Channel: N/A`;
                }
            }
            closeModal();
        });

        // Close modal when clicking outside
        document.getElementById('delete-modal').addEventListener('click', (e) => {
            if (e.target === document.getElementById('delete-modal')) {
                closeModal();
            }
        });

        // Simulate adding a new user (for demo purposes)
        function addNewUser() {
            const newUser = {
                username: `User${users.length + 1}`,
                email: `user${users.length + 1}@example.com`,
                joined: new Date().toISOString().split('T')[0],
                plan: Math.random() > 0.5 ? 'Premium' : 'Free',
                totalVideos: Math.floor(Math.random() * 50),
                channel: `Channel ${users.length + 1}`
            };
            users.unshift(newUser); // Add to top
            filteredUsers = [...users];
            renderUsers();
            selectUser(newUser.username); // Show newly added user
        }

        // Add a new user every 10 seconds for demo (remove in production)
        setInterval(addNewUser, 10000);

        // Initial render and select top user
        renderUsers();
        if (users.length > 0) {
            selectUser(users[0].username);
        }
    </script>
</body>
</html>