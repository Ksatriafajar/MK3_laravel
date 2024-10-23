<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite('resources/css/app.css')
</head>
<body class="h-screen flex items-center justify-center bg-gradient-to-br from-cyan-100 via-blue-100 to-pink-100 animate-fadeIn">
    <form id="loginForm" class="relative z-20 bg-white p-10 rounded-2xl shadow-lg w-80 text-center hover:transform hover:scale-105 transition-transform duration-300">
        <div class="mb-6">
            <label for="username" class="block text-gray-600 text-sm font-medium mb-2">Username</label>
            <input type="text" name="username" id="username" class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-inner bg-blue-50 focus:border-blue-400 focus:ring-2 focus:ring-blue-200 focus:bg-white transition duration-400">
        </div>
        <div class="mb-6">
            <label for="password" class="block text-gray-600 text-sm font-medium mb-2">Password</label>
            <input type="password" name="password" id="password" class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-inner bg-blue-50 focus:border-blue-400 focus:ring-2 focus:ring-blue-200 focus:bg-white transition duration-400">
        </div>
        <button type="submit" class="w-full py-3 bg-gradient-to-br from-cyan-300 to-blue-300 text-white font-semibold rounded-lg hover:from-cyan-400 hover:to-blue-400 hover:shadow-lg hover:-translate-y-1 transition-all duration-400">
            LOGIN
        </button>
    </form>

    <script src="script.js"></script>
</body>
</html>
