<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Profile - Your Company Name</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');

        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100">
<header class="bg-white shadow-md">
    <nav class="container mx-auto px-4 py-3 flex items-center justify-between">
        <div class="flex items-center">
            <a href="/" class="text-2xl font-bold text-blue-600">YourLogo</a>
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
                <a href="/signup" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Sign Up</a>
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
        <a href="#" class="block py-2 px-4 text-blue-600 hover:bg-gray-100">Profile</a>
        <a href="#" class="block py-2 px-4 text-blue-600 hover:bg-gray-100">Logout</a>
    </div>
</header>

<main class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-gray-800 mb-8">Your Profile</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="md:col-span-1">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="text-center mb-4">
                    <img src="https://via.placeholder.com/150" alt="Profile Picture"
                         class="w-32 h-32 rounded-full mx-auto mb-4">
                    <h2 class="text-xl font-semibold text-gray-800">{{$user->name}}</h2>
                    <p class="text-gray-600">{{$user->email}}</p>
                </div>
                <div class="border-t pt-4">
                    <p class="text-gray-600 mb-2"><strong>Member since:</strong> January 1, 2022</p>
                    <p class="text-gray-600"><strong>Last login:</strong> Today at 10:30 AM</p>
                </div>
            </div>
        </div>

        <div class="md:col-span-2">
            <div class="bg-white p-6 rounded-lg shadow-md mb-8">
                <h3 class="text-xl font-semibold text-gray-800 mb-4">Personal Information</h3>
                <form>
                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                        <div>
                            <label for="first_name" class="block text-sm font-medium text-gray-700 mb-1">First
                                Name</label>
                            <input type="text" id="first_name" name="first_name"
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                                   value="{{$user->name}}">
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                        <input type="email" id="email" name="email"
                               class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                               value="{{$user->email}}">
                    </div>
                    <button type="submit"
                            class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition duration-300">
                        Update Information
                    </button>
                </form>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-md mb-8">
                <h3 class="text-xl font-semibold text-gray-800 mb-4">Change Password</h3>
                <form method="POST" action="/profile">
                    @csrf
                    <div class="mb-4">
                        <label for="current_password" class="block text-sm font-medium text-gray-700 mb-1">Current
                            Password</label>
                        <input type="password" id="current_password" name="current_password"
                               class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">New
                            Password</label>
                        <input type="password" id="password" name="password"
                               class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="mb-4">
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">Confirm New
                            Password</label>
                        <input type="password" id="password_confirmation" name="password_confirmation"
                               class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <button type="submit"
                            class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition duration-300">
                        Change Password
                    </button>
                </form>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-md mb-8">
                <h3 class="text-xl font-semibold text-gray-800 mb-4">Notification Preferences</h3>
                <form>
                    <div class="space-y-2">
                        <label class="flex items-center">
                            <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" checked>
                            <span class="ml-2 text-gray-700">Email notifications</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" checked>
                            <span class="ml-2 text-gray-700">SMS notifications</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600">
                            <span class="ml-2 text-gray-700">Push notifications</span>
                        </label>
                    </div>
                    <button type="submit"
                            class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition duration-300 mt-4">
                        Save Preferences
                    </button>
                </form>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold text-red-600 mb-4">Delete Account</h3>
                <p class="text-gray-700 mb-4">Once you delete your account, there is no going back. Please be
                    certain.</p>
                <button class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-700 transition duration-300">
                    Delete Account
                </button>
            </div>
        </div>
    </div>
</main>

<footer class="bg-white shadow-md mt-16">
    <div class="container mx-auto px-4 py-6 flex justify-between items-center">
        <p class="text-gray-600">&copy; 2024 Your Company Name. All Rights Reserved.</p>
        <div class="flex space-x-4">
            <a href="#" class="text-gray-600 hover:text-blue-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor">
                    <path
                        d="M12 2.04c-5.52 0-10 4.48-10 10 0 4.42 2.87 8.17 6.84 9.5.5.09.68-.22.68-.48v-1.73c-2.78.6-3.38-1.35-3.38-1.35-.45-1.15-1.1-1.45-1.1-1.45-.9-.6.07-.59.07-.59 1 .07 1.53 1.02 1.53 1.02.9 1.53 2.36 1.09 2.94.83.09-.65.36-1.1.66-1.35-2.22-.26-4.56-1.11-4.56-4.94 0-1.09.39-1.98 1.03-2.67-.1-.26-.45-1.3.1-2.71 0 0 .84-.27 2.75 1.02.8-.22 1.65-.33 2.5-.33.85 0 1.7.11 2.5.33 1.9-1.29 2.75-1.02 2.75-1.02.55 1.42.2 2.45.1 2.71.64.7 1.03 1.58 1.03 2.67 0 3.84-2.34 4.68-4.57 4.94.36.31.69.93.69 1.88v2.79c0 .27.18.58.69.48C19.13 20.21 22 16.46 22 12.04c0-5.52-4.48-10-10-10z"/>
                </svg>
            </a>
            <a href="#" class="text-gray-600 hover:text-blue-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor">
                    <path
                        d="M22.46 6c-.77.35-1.6.59-2.46.69.88-.53 1.56-1.36 1.88-2.35-.83.5-1.75.87-2.72 1.07a4.15 4.15 0 0 0-7.06 3.77c-3.44-.17-6.5-1.82-8.54-4.3a4.15 4.15 0 0 0 1.28 5.54c-.7-.02-1.36-.22-1.94-.54v.06c0 2.01 1.43 3.68 3.33 4.07-.35.1-.73.15-1.11.15-.27 0-.54-.02-.8-.07.54 1.68 2.1 2.91 3.95 2.94A8.32 8.32 0 0 1 2 18.18a11.73 11.73 0 0 0 6.34 1.86c7.6 0 11.76-6.3 11.76-11.76 0-.18 0-.37-.01-.55.81-.58 1.52-1.3 2.08-2.13z"/>
                </svg>
            </a>
            <a href="#" class="text-gray-600 hover:text-blue-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor">
                    <path
                        d="M19.75 3H4.25C3.01 3 2 4.01 2 5.25v13.5C2 19.99 3.01 21 4.25 21h7.25v-7h-2.25V11h2.25v-1.5c0-2.07 1.43-3.5 3.36-3.5.94 0 1.85.07 2.11.1v2.45h-1.45c-1.13 0-1.35.54-1.35 1.31V11h2.75l-.5 2h-2.25v7h4.25C20.99 21 22 19.99 22 18.75V5.25C22 4.01 20.99 3 19.75 3z"/>
                </svg>
            </a>
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
