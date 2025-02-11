<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background: url('assets/background.jpg') no-repeat center center fixed;
            background-size: cover;
        }
        .custom-bg {
        background-color: #ffcc00; 
        }
    </style>
</head>
<body class="flex items-center justify-center h-screen bg-gray-100">
    <div class="w-full max-w-2xl p-6 bg-white rounded-lg shadow-md flex">
        <!-- Logo Brand -->
        <div class="flex items-center justify-center w-1/2 bg-white-200 p-6 rounded-l-lg">
            <img src="assets/AbidinAuctionHouse.png" alt="Brand Logo" class="w-37 h-37">
        </div>
        
        <!-- Login Form -->
        <div class="w-1/2 p-6">
            <h2 class="text-2xl font-semibold text-center text-gray-700 mb-4">Login</h2>
            
            <form action="/login" method="POST">
                <!-- CSRF Token -->
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                
                <div class="mb-4">
                    <label for="username" class="block text-gray-700">Username</label>
                    <input type="username" name="email" id="username" required
                           class="w-full px-4 py-2 mt-1 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>
                
                <div class="mb-4">
                    <label for="password" class="block text-gray-700">Password</label>
                    <input type="password" name="password" id="password" required
                           class="w-full px-4 py-2 mt-1 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>

                <div class="mb-4 text-center">
                    <a href="#register" class="text-blue-500 hover:underline">Belum punya akun? Daftar di sini</a>
                </div>
                
                <button type="submit" class="w-full bg-black text-white py-2 rounded-lg hover:bg-gray-800">
                   Login
                </button>

                
            </form>
        </div>
    </div>
</body>
</html>