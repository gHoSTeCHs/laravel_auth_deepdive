<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Company Name - Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');

        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
    @vite(['resources/css/app.css'])
</head>
<body class="bg-gray-100">
<header class="bg-white shadow-md">
    <nav class="container mx-auto px-4 py-3 flex items-center justify-between">
        <div class="flex items-center">
            <a href="#" class="text-2xl font-bold text-blue-600">YourLogo</a>
        </div>
        <div class="hidden md:flex space-x-4">
            <a href="#" class="text-gray-700 hover:text-blue-600">Home</a>
            <a href="#" class="text-gray-700 hover:text-blue-600">About</a>
            <a href="#" class="text-gray-700 hover:text-blue-600">Services</a>
            <a href="#" class="text-gray-700 hover:text-blue-600">Contact</a>
        </div>
        <div class="hidden md:flex space-x-2">
            @auth()
                <a href="/profile" class="px-4 py-2 text-blue-600 hover:text-blue-700">Profile</a>
                <form method="POST" action="/logout">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-blue-700 px-4 py-2 text-white/80 hover:text-blue-700 rounded-sm">
                        Logout
                    </button>
                </form>
            @endauth
            @guest()
                <a href="/login" class="px-4 py-2 text-blue-600 hover:text-blue-700">Login</a>
                <a href="/register" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Register</a>
            @endguest

        </div>
        <div class="md:hidden">
            <button id="mobile-menu-button" class="text-gray-700 hover:text-blue-600">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                     xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>
    </nav>
    <div id="mobile-menu" class="hidden md:hidden">
        <a href="#" class="block py-2 px-4 text-gray-700 hover:bg-gray-100">Home</a>
        <a href="#" class="block py-2 px-4 text-gray-700 hover:bg-gray-100">About</a>
        <a href="#" class="block py-2 px-4 text-gray-700 hover:bg-gray-100">Services</a>
        <a href="#" class="block py-2 px-4 text-gray-700 hover:bg-gray-100">Contact</a>
        @auth()
            <a href="/profile" class="px-4 py-2 text-blue-600 hover:text-blue-700">Profile</a>
            <form method="POST" action="/logout">
                @csrf
                <button type="submit" class="bg-blue-700 px-4 py-2 text-white/80 hover:text-blue-700 rounded-sm">
                    Logout
                </button>
            </form>
        @endauth
        @guest()
            <a href="/login" class="px-4 py-2 text-blue-600 hover:text-blue-700">Login</a>
            <a href="/signup" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Sign Up</a>
        @endguest
    </div>
</header>

<main class="container mx-auto px-4 py-8">
    <section class="text-center mb-12">
        <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">Welcome to Your Company Name</h1>
        <p class="text-xl text-gray-600 mb-8">We provide innovative solutions for your business needs</p>
        <a href="#"
           class="bg-blue-600 text-white px-6 py-3 rounded-lg text-lg font-semibold hover:bg-blue-700 transition duration-300">Get
            Started</a>
    </section>

    <section class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Feature 1</h2>
            <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Feature 2</h2>
            <p class="text-gray-600">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Feature 3</h2>
            <p class="text-gray-600">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur.</p>
        </div>
    </section>

    <section class="bg-blue-600 text-white p-8 rounded-lg mb-12">
        <h2 class="text-3xl font-bold mb-4">Ready to get started?</h2>
        <p class="text-xl mb-6">Join thousands of satisfied customers today!</p>
        <a href="#"
           class="bg-white text-blue-600 px-6 py-3 rounded-lg text-lg font-semibold hover:bg-gray-100 transition duration-300">Sign
            Up Now</a>
    </section>
</main>

<footer class="bg-gray-800 text-white py-8">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div>
                <h3 class="text-lg font-semibold mb-4">About Us</h3>
                <p class="text-gray-400">Your Company Name is dedicated to providing the best solutions for our
                    customers.</p>
            </div>
            <div>
                <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-400 hover:text-white">Home</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white">About</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white">Services</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white">Contact</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-lg font-semibold mb-4">Contact Us</h3>
                <p class="text-gray-400">123 Main St, City, Country</p>
                <p class="text-gray-400">Phone: (123) 456-7890</p>
                <p class="text-gray-400">Email: info@yourcompany.com</p>
            </div>
            <div>
                <h3 class="text-lg font-semibold mb-4">Follow Us</h3>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-400 hover:text-white">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="mt-8 text-center">
            <p class="text-gray-400">&copy; 2024 Your Company Name. All rights reserved.</p>
        </div>
    </div>
</footer>

<script>
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    mobileMenuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>
</body>
</html>
