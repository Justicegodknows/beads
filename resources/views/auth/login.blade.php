<x-site-layout>
    <div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
            <div>
                <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                    Sign in to your account
                </h2>
            </div>
            <form class="mt-8 space-y-6" action="{{ route('login') }}" method="POST">
                @csrf
                <div>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" required autofocus />
                </div>

                <div>
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required />
                </div>

                @error('email')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror

                <div>
                    <button type="submit">Log in</button>
                </div>
            </form>
        </div>
    </div>
</x-site-layout>