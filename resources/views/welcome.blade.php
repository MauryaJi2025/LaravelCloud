<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cloud Services Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="min-h-screen">
        <!-- Header -->
        <header class="bg-blue-600 text-white shadow-lg">
            <div class="container mx-auto px-6 py-4">
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-4">
                        <i class="fas fa-cloud text-3xl"></i>
                        <h1 class="text-2xl font-bold">Cloud Services</h1>
                    </div>
                    <nav>
                        <ul class="flex space-x-6">
                            <li><a href="#" class="hover:text-blue-200">Overview</a></li>
                            <li><a href="#" class="hover:text-blue-200">Services</a></li>
                            <li><a href="#" class="hover:text-blue-200">Analytics</a></li>
                            <li><a href="#" class="hover:text-blue-200">Settings</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <main class="container mx-auto px-6 py-8">
            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500">Storage Used</p>
                            <h3 class="text-2xl font-bold">1.2 TB</h3>
                        </div>
                        <i class="fas fa-database text-blue-500 text-3xl"></i>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500">Active Services</p>
                            <h3 class="text-2xl font-bold">8</h3>
                        </div>
                        <i class="fas fa-server text-green-500 text-3xl"></i>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500">Monthly Cost</p>
                            <h3 class="text-2xl font-bold">$245.50</h3>
                        </div>
                        <i class="fas fa-dollar-sign text-yellow-500 text-3xl"></i>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500">Uptime</p>
                            <h3 class="text-2xl font-bold">99.98%</h3>
                        </div>
                        <i class="fas fa-chart-line text-purple-500 text-3xl"></i>
                    </div>
                </div>
            </div>

            <!-- Services Section -->
            <section class="mb-12">
                <h2 class="text-2xl font-bold mb-6 text-gray-800">Your Cloud Services</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Service Card 1 -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <div class="bg-blue-500 p-4 text-white">
                            <div class="flex justify-between items-center">
                                <h3 class="font-bold text-xl">Compute Engine</h3>
                                <i class="fas fa-microchip text-2xl"></i>
                            </div>
                        </div>
                        <div class="p-6">
                            <p class="text-gray-600 mb-4">Virtual machines for your most demanding workloads</p>
                            <div class="flex justify-between text-sm text-gray-500 mb-4">
                                <span>5 instances</span>
                                <span>Running</span>
                            </div>
                            <button class="w-full bg-blue-500 hover:bg-blue-600 text-white py-2 rounded transition-colors duration-300">
                                Manage
                            </button>
                        </div>
                    </div>

                    <!-- Service Card 2 -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <div class="bg-green-500 p-4 text-white">
                            <div class="flex justify-between items-center">
                                <h3 class="font-bold text-xl">Cloud Storage</h3>
                                <i class="fas fa-hdd text-2xl"></i>
                            </div>
                        </div>
                        <div class="p-6">
                            <p class="text-gray-600 mb-4">Object storage with global edge-caching</p>
                            <div class="flex justify-between text-sm text-gray-500 mb-4">
                                <span>1.2 TB used</span>
                                <span>Active</span>
                            </div>
                            <button class="w-full bg-green-500 hover:bg-green-600 text-white py-2 rounded transition-colors duration-300">
                                Manage
                            </button>
                        </div>
                    </div>

                    <!-- Service Card 3 -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <div class="bg-purple-500 p-4 text-white">
                            <div class="flex justify-between items-center">
                                <h3 class="font-bold text-xl">Database</h3>
                                <i class="fas fa-database text-2xl"></i>
                            </div>
                        </div>
                        <div class="p-6">
                            <p class="text-gray-600 mb-4">Fully managed relational database service</p>
                            <div class="flex justify-between text-sm text-gray-500 mb-4">
                                <span>3 databases</span>
                                <span>Running</span>
                            </div>
                            <button class="w-full bg-purple-500 hover:bg-purple-600 text-white py-2 rounded transition-colors duration-300">
                                Manage
                            </button>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Recent Activity -->
            <section>
                <h2 class="text-2xl font-bold mb-6 text-gray-800">Recent Activity</h2>
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Event</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Service</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Time</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">Instance created</td>
                                <td class="px-6 py-4 whitespace-nowrap">Compute Engine</td>
                                <td class="px-6 py-4 whitespace-nowrap"><span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Success</span></td>
                                <td class="px-6 py-4 whitespace-nowrap">2 minutes ago</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">Backup completed</td>
                                <td class="px-6 py-4 whitespace-nowrap">Cloud Storage</td>
                                <td class="px-6 py-4 whitespace-nowrap"><span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Success</span></td>
                                <td class="px-6 py-4 whitespace-nowrap">15 minutes ago</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">Database update</td>
                                <td class="px-6 py-4 whitespace-nowrap">Cloud SQL</td>
                                <td class="px-6 py-4 whitespace-nowrap"><span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Pending</span></td>
                                <td class="px-6 py-4 whitespace-nowrap">1 hour ago</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </main>

        <!-- Footer -->
        <footer class="bg-gray-800 text-white py-8">
            <div class="container mx-auto px-6">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <div class="mb-4 md:mb-0">
                        <h2 class="text-xl font-bold flex items-center">
                            <i class="fas fa-cloud mr-2"></i> Cloud Services
                        </h2>
                        <p class="text-gray-400 mt-2">Your trusted cloud solution provider</p>
                    </div>
                    <div class="flex space-x-6">
                        <a href="#" class="hover:text-blue-300">Terms</a>
                        <a href="#" class="hover:text-blue-300">Privacy</a>
                        <a href="#" class="hover:text-blue-300">Support</a>
                        <a href="#" class="hover:text-blue-300">Contact</a>
                    </div>
                </div>
                <div class="border-t border-gray-700 mt-6 pt-6 text-center text-gray-400">
                    <p>&copy; 2023 Cloud Services Dashboard. All rights reserved.</p>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>