<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
            <h2 class="text-2xl font-bold mb-6 text-center">Login</h2>
            <p class="text-gray-600 mb-6 text-center">Enter your credentials to access your account.</p>

            <!-- Login Form -->
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Username, Email, or Phone Number -->
                <div class="mb-4">
                    <label for="login" class="block text-gray-700 mb-2">Username, Email, or Phone Number</label>
                    <input type="text" id="login" name="login" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your username, email, or phone number" required autofocus>
                </div>

                <!-- Password -->
                <div class="mb-6">
                    <label for="password" class="block text-gray-700 mb-2">Password</label>
                    <input type="password" id="password" name="password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your password" required>
                </div>

                <!-- Login Button -->
                <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Login
                </button>
            </form>

            <!-- Register Link -->
            <div class="mt-6 text-center">
                <p class="text-gray-600">Don't have an account? <a href="{{ route('register') }}" class="text-blue-600 hover:underline">Register</a></p>
            </div>
        </div>
    </div>
</x-guest-layout>