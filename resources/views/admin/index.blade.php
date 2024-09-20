<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<!-- Sidebar -->
<div class="flex flex-col h-screen lg:flex-row">
    <div class="bg-gray-800 text-white w-full lg:w-64 p-6 lg:h-screen">
        <div class="text-2xl font-bold mb-6">Admin Dashboard</div>
        <ul class="space-y-4">
            <li>
                <a href="#" class="block py-2 px-4 hover:bg-gray-700 rounded-md">Dashboard</a>
            </li>
            <li>
                <a href="#" class="block py-2 px-4 hover:bg-gray-700 rounded-md">Users</a>
            </li>
            <li>
                <a href="#" class="block py-2 px-4 hover:bg-gray-700 rounded-md">Settings</a>
            </li>
            <li>
                <a href="#" class="block py-2 px-4 hover:bg-gray-700 rounded-md">Reports</a>
            </li>
            <li>
                <a href="#" class="block py-2 px-4 hover:bg-gray-700 rounded-md">Logout</a>
            </li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="flex-1 p-6 lg:p-8">
        <!-- Top Bar -->
        <div class="flex justify-between items-center">
            <div class="text-2xl font-semibold">Dashboard</div>
            <div class="relative">
                <input type="text" placeholder="Search" class="pl-10 pr-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute left-3 top-2.5 h-5 w-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M12.9 14.32a7.5 7.5 0 111.414-1.414l5.157 5.158-1.414 1.414-5.157-5.158zM9.5 15a5.5 5.5 0 100-11 5.5 5.5 0 000 11z" clip-rule="evenodd" />
                </svg>
            </div>
        </div>

        <!-- Dashboard Cards -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mt-6">
            <div class="bg-white p-6 rounded-md shadow-md">
                <div class="font-bold text-xl">Total Users</div>
                <div class="text-4xl font-semibold mt-2">2,459</div>
            </div>

            <div class="bg-white p-6 rounded-md shadow-md">
                <div class="font-bold text-xl">Revenue</div>
                <div class="text-4xl font-semibold mt-2">$76,432</div>
            </div>

            <div class="bg-white p-6 rounded-md shadow-md">
                <div class="font-bold text-xl">New Orders</div>
                <div class="text-4xl font-semibold mt-2">134</div>
            </div>
        </div>

        <!-- Table Section -->
        <div class="mt-8">
            <div class="bg-white p-6 rounded-md shadow-md">
                <div class="font-bold text-xl mb-4">Recent Transactions</div>
                <table class="min-w-full table-auto">
                    <thead class="bg-gray-200">
                    <tr>
                        <th class="px-4 py-2">#</th>
                        <th class="px-4 py-2">User</th>
                        <th class="px-4 py-2">Amount</th>
                        <th class="px-4 py-2">Date</th>
                        <th class="px-4 py-2">Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="bg-white border-b">
                        <td class="px-4 py-2">1</td>
                        <td class="px-4 py-2">John Doe</td>
                        <td class="px-4 py-2">$234</td>
                        <td class="px-4 py-2">2024-09-20</td>
                        <td class="px-4 py-2 text-green-500">Completed</td>
                    </tr>
                    <tr class="bg-white border-b">
                        <td class="px-4 py-2">2</td>
                        <td class="px-4 py-2">Jane Smith</td>
                        <td class="px-4 py-2">$564</td>
                        <td class="px-4 py-2">2024-09-18</td>
                        <td class="px-4 py-2 text-yellow-500">Pending</td>
                    </tr>
                    <!-- More rows... -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</body>
</html>
