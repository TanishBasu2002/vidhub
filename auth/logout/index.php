<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md p-8 bg-white rounded-xl shadow-2xl">
        <h1 class="text-3xl font-bold text-center mb-8 text-gray-800">Logout Form</h1>
        
        <form id="logoutForm" class="space-y-6">
            <div class="relative">
                <input 
                    type="text" 
                    id="name" 
                    placeholder=" "
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    required
                >
                <label for="name" class="floating-label">Your Name</label>
            </div>

            <div class="relative">
                <input 
                    type="email" 
                    id="email" 
                    placeholder=" "
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    required
                >
                <label for="email" class="floating-label">Email Address</label>
            </div>

            <div id="error-message" class="text-red-500 text-sm hidden"></div>

            <button 
                type="submit"
                class="w-full py-3 px-4 bg-gradient-to-r from-blue-500 to-purple-600 text-white font-semibold rounded-lg shadow-md hover:from-blue-600 hover:to-purple-700 transition duration-300"
            >
                <i class="fas fa-sign-out-alt mr-2"></i> Logout
            </button>
        </form>
    </div>

    <script src="script.js">
    </script>
</body>
</html>