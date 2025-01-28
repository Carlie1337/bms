<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
            <h2 class="text-2xl font-bold mb-6 text-center">Register as Tourist</h2>
            <p class="text-gray-600 mb-6 text-center">Create a new account to access Barangay services.</p>

            <!-- Register Form -->
            <form method="POST" action="{{ route('register.tourist') }}">
                @csrf

                <!-- First Name -->
                <div class="mb-4">
                    <label for="first_name" class="block text-gray-700 mb-2">First Name</label>
                    <input type="text" id="first_name" name="first_name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your first name" required>
                </div>

                <!-- Middle Name -->
                <div class="mb-4">
                    <label for="middle_name" class="block text-gray-700 mb-2">Middle Name</label>
                    <input type="text" id="middle_name" name="middle_name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your middle name">
                </div>

                <!-- Last Name -->
                <div class="mb-4">
                    <label for="last_name" class="block text-gray-700 mb-2">Last Name</label>
                    <input type="text" id="last_name" name="last_name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your last name" required>
                </div>

                <!-- Email -->
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 mb-2">Email</label>
                    <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your email" required>
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 mb-2">Password</label>
                    <input type="password" id="password" name="password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your password" required>
                </div>

                <!-- Confirm Password -->
                <div class="mb-4">
                    <label for="password_confirmation" class="block text-gray-700 mb-2">Confirm Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Confirm your password" required>
                </div>

                <!-- Register Button -->
                <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Register
                </button>
            </form>

            <!-- Login Link -->
            <div class="mt-6 text-center">
                <p class="text-gray-600">Already have an account? <a href="{{ route('login') }}" class="text-blue-600 hover:underline">Login</a></p>
            </div>
        </div>
    </div>
</x-guest-layout>