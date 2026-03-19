<?php
session_start();

// If the session variable isn't set, redirect to login
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
 <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Import a sci-fi font for the main title */
        @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap');

        /* Custom styles to apply the sci-fi font and a neon glow effect to the title */
        .sci-fi-title {
            font-family: 'Orbitron', sans-serif;
            /* Green neon shadow */
            text-shadow: 0 0 10px rgba(74, 222, 128, 0.8), 0 0 20px rgba(74, 222, 128, 0.5);
        }

        /* Base styles for the futuristic buttons */
        .neon-button {
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.3), 0 2px 4px -2px rgba(0, 0, 0, 0.2);
            text-decoration: none; /* Ensure links look like buttons */
        }
        
        /* Neon hover effect: lift slightly and add an indigo glow */
        .neon-button:hover {
            transform: translateY(-3px) scale(1.02);
            /* Indigo neon shadow */
            box-shadow: 0 0 15px rgba(129, 140, 248, 0.9), 0 0 30px rgba(129, 140, 248, 0.6);
            border-color: #818cf8; /* Indigo-400 */
        }
    </style>    
<body class="bg-gray-950 text-gray-100 min-h-screen p-4 sm:p-8 flex flex-col items-center font-sans">
<div class="max-w-5xl w-full mx-auto">
<!-- Header -->
        <header class="text-center mb-12 mt-8">
            <h1 class="sci-fi-title text-5xl sm:text-7xl font-bold mb-4 text-green-400">
                Wild Alien Exploits!
            </h1>
        </header>

        <div class="bg-gray-800 p-4 sm:p-6 rounded-xl border-l-4 border-yellow-500 mb-12 shadow-2xl">
 <p class="text-green-300 text-center font-medium text-lg">
        <span class="sci-fi-title">Welcome back, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1> <span class="text-white font-bold"></span>
    
    <a href="logout.php" class="neon-button bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">Log Out</a>

<!-- Links Grid: Responsive 1, 2, or 3 columns based on screen size -->
        <main class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

            <!-- Link Buttons -->
            <a href="https://wildalien1947.github.io/mx/" class="neon-button block text-center p-8 bg-gray-800 hover:bg-indigo-700 rounded-2xl border border-indigo-600 font-semibold text-2xl text-white">
                <span class="text-4xl mb-2 block">⛏️</span>
                Minecraft X
            </a>

            <a href="https://sites.google.com/philasd.org/huihub" class="neon-button block text-center p-8 bg-gray-800 hover:bg-indigo-700 rounded-2xl border border-indigo-600 font-semibold text-2xl text-white">
                <span class="text-4xl mb-2 block">🔗</span>
                My Other Website
            </a>

            <a href="https://github.com/WildAlien1947/wildalien1947.github.io/" class="neon-button block text-center p-8 bg-gray-800 hover:bg-green-700 rounded-2xl border border-green-600 font-semibold text-2xl text-white">
                <span class="text-4xl mb-2 block">💾</span>
                Source Code
            </a>

            <a href="https://wildalien1947.github.io/block-blast" class="neon-button block text-center p-8 bg-gray-800 hover:bg-indigo-700 rounded-2xl border border-indigo-600 font-semibold text-2xl text-white">
                <span class="text-4xl mb-2 block">🧱</span>
                Block Blast!
            </a>

            <a href="https://wildalien1947.github.io/gtag" class="neon-button block text-center p-8 bg-gray-800 hover:bg-indigo-700 rounded-2xl border border-indigo-600 font-semibold text-2xl text-white">
                <span class="text-4xl mb-2 block">🦍</span>
                Gorilla Tag
            </a>

            <a href="https://wildalien1947.github.io/chrome-dino-game" class="neon-button block text-center p-8 bg-gray-800 hover:bg-indigo-700 rounded-2xl border border-indigo-600 font-semibold text-2xl text-white">
                <span class="text-4xl mb-2 block">🦖</span>
                Chrome Dino Game
            </a>

            <a href="https://wildalien1947.github.io/run3/tn6pS9dCf37xAhkJv" class="neon-button block text-center p-8 bg-gray-800 hover:bg-indigo-700 rounded-2xl border border-indigo-600 font-semibold text-2xl text-white">
                <span class="text-4xl mb-2 block">🏃</span>
                Run 3
            </a>

            <a href="https://wildalien1947.github.io/weather" class="neon-button block text-center p-8 bg-gray-800 hover:bg-indigo-700 rounded-2xl border border-indigo-600 font-semibold text-2xl text-white">
                <span class="text-4xl mb-2 block">☁️</span>
                Weather
            </a>
            
        </main>
    </div>

</body>
</html>