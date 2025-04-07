<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIDHUB - Developers</title>
<link rel="stylesheet" href="style.css">
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <?php include 'sidebar.php'; ?>

    <!-- Main Content -->
    <div class="main-content" id="main-content">
        <!-- Top Bar -->
        <?php include 'topbar.php'; ?>

        <!-- Pass Key Form -->
        <div class="pass-key-container">
            <div class="pass-key-header">
                <h1>Developer Access</h1>
                <p>Please enter the pass key to access the admin dashboard.</p>
            </div>
            <form class="pass-key-form" id="passKeyForm">
                <div class="form-group">
                    <label for="passKey">Pass Key</label>
                    <input type="password" id="passKey" name="passKey" placeholder="Enter pass key" required>
                </div>
                <button type="submit" class="submit-btn">Verify Pass Key</button>
            </form>
        </div>

        
    </div>

    <script src="script.js">

    </script>
</body>

</html>