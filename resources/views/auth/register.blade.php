<x-site-layout>
	<div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
		<div class="max-w-md w-full space-y-8">
			<div>
				<h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
					Create your account
				</h2>
			</div>

			<form class="mt-8 space-y-6" action="{{ route('register') }}" method="POST">
				@csrf
				<div>
					<label for="name">Name</label>
					<input type="text" name="name" id="name" value="{{ old('name') }}" required autofocus />
					@error('name')
						<div class="text-red-500">{{ $message }}</div>
					@enderror
				</div>

				<div>
					<label for="email">Email</label>
					<input type="email" name="email" id="email" value="{{ old('email') }}" required />
					@error('email')
						<div class="text-red-500">{{ $message }}</div>
					@enderror
				</div>

				<div>
					<label for="password">Password</label>
					<input type="password" name="password" id="password" required autocomplete="new-password" />
					@error('password')
						<div class="text-red-500">{{ $message }}</div>
					@enderror
				</div>

				<div>
					<label for="password_confirmation">Confirm Password</label>
					<input type="password" name="password_confirmation" id="password_confirmation" required autocomplete="new-password" />
				</div>

				<div>
					<button type="submit">Create account</button>
				</div>
			</form>
		</div>
	</div>
</x-site-layout>

