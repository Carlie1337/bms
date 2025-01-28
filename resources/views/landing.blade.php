<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barangay Management System</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <!-- Header -->
    <header class="bg-white shadow">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <!-- Logo -->
            <div class="text-2xl font-bold text-blue-600">
                BarangayMS
            </div>
            <!-- Navigation -->
            <nav class="space-x-4">
                <a href="#" class="text-gray-700 hover:text-blue-600">Home</a>
                <a href="#" class="text-gray-700 hover:text-blue-600">About</a>
                <a href="#" class="text-gray-700 hover:text-blue-600">Contact</a>
            </nav>
            <!-- Login/Register Buttons -->
            <div class="space-x-4">
                <a href="{{ route('login') }}" class="text-gray-700 hover:text-blue-600">Login</a>
                <a href="{{ route('register') }}" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Register</a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="bg-blue-600 text-white py-20">
        <div class="container mx-auto px-6 text-center">
            <h1 class="text-4xl font-bold mb-4">Welcome to Barangay Management System</h1>
            <p class="text-lg mb-8">Efficiently manage barangay operations and serve residents and tourists seamlessly.</p>
            <div class="space-x-4">
                <a href="{{ route('register') }}" class="bg-white text-blue-600 px-6 py-3 rounded-md font-semibold hover:bg-gray-100">Register as Resident</a>
                <a href="{{ route('register.tourist') }}" class="bg-white text-blue-600 px-6 py-3 rounded-md font-semibold hover:bg-gray-100">Register as Tourist</a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12">Key Features</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                    <h3 class="text-xl font-bold mb-4">Resident Management</h3>
                    <p class="text-gray-700">Efficiently manage resident information and services.</p>
                </div>
                <!-- Feature 2 -->
                <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                    <h3 class="text-xl font-bold mb-4">Tourist Registration</h3>
                    <p class="text-gray-700">Register and manage tourists visiting the barangay.</p>
                </div>
                <!-- Feature 3 -->
                <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                    <h3 class="text-xl font-bold mb-4">Document Issuance</h3>
                    <p class="text-gray-700">Request and issue barangay documents online.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Contact Information -->
                <div>
                    <h3 class="text-xl font-bold mb-4">Contact Us</h3>
                    <p class="text-gray-400">Email: info@barangayms.com</p>
                    <p class="text-gray-400">Phone: +63 123 456 7890</p>
                </div>
                <!-- Quick Links -->
                <div>
                    <h3 class="text-xl font-bold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Home</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">About</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Contact</a></li>
                    </ul>
                </div>
                <!-- Social Media -->
                <div>
                    <h3 class="text-xl font-bold mb-4">Follow Us</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white">Facebook</a>
                        <a href="#" class="text-gray-400 hover:text-white">Twitter</a>
                        <a href="#" class="text-gray-400 hover:text-white">Instagram</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>