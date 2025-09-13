<x-layouts.auth :title="__('Login')">
    <div class="min-h-screen flex items-center justify-center bg-[#0B1739] px-4">
        <div class="w-full max-w-4xl bg-[#0E1630] rounded-2xl shadow-lg overflow-hidden flex flex-col md:flex-row">
            
            <!-- Left: Login Form -->
            <div class="w-full md:w-1/2 p-10 flex flex-col justify-center">
                <center>
                    <h1 class="text-2xl font-bold text-white mb-2">Login Page</h1>
                    <p class="text-gray-400 mb-6">
                        Log in to monitor, analyze, and manage network operations securely.
                    </p>

                </center>
                <form method="POST" action="{{ route('login') }}" class="space-y-4">
                    @csrf
                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-gray-300 mb-1">Email</label>
                        <input id="email" type="email" name="email" required autofocus
                            class="w-full px-4 py-3 rounded-lg bg-[#131c3a] text-gray-200 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-purple-500 border border-gray-600"
                            placeholder="johndoe@gmail.com" />
                    </div>

                    <!-- Password -->
                    <div>
                        <label for="password" class="block text-gray-300 mb-1">Password</label>
                        <input id="password" type="password" name="password" required
                            class="w-full px-4 py-3 rounded-lg bg-[#131c3a] text-gray-200 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-purple-500 border border-gray-600"
                            placeholder="••••••••" />
                    </div>

                    <!-- Button -->
                    <button type="submit"
                        class="w-full py-3 rounded-lg text-white font-semibold bg-gradient-to-r from-purple-600 to-pink-500 hover:opacity-90 transition">
                        Login
                    </button>
                </form>

                <!-- Register Link -->
                @if (Route::has('register'))
                    <p class="text-sm text-gray-400 mt-6 text-center">
                        Don’t have an account yet?
                        <a href="{{ route('register') }}" class="text-pink-400 hover:underline">Register Now.</a>
                    </p>
                @endif
            </div>

            <!-- Right: Image -->
            <div class="hidden md:block w-full md:w-1/2">
                <img src="{{ asset('assets/images/image_login.jpg') }}" alt="Login Illustration" class="w-full h-full object-cover" />
            </div>
        </div>
    </div>
</x-layouts.auth>
