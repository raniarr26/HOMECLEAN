<!-- resources/views/auth/login.blade.php -->
<form method="POST" action="{{ route('login') }}">
    @csrf

    <!-- Email Address -->
    <div>
        <label for="email">Email</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus />
        @error('email')
            <span>{{ $message }}</span>
        @enderror
    </div>

    <!-- Password -->
    <div>
        <label for="password">Password</label>
        <input id="password" type="password" name="password" required autocomplete="current-password" />
        @error('password')
            <span>{{ $message }}</span>
        @enderror
    </div>

    <!-- Remember Me -->
    <div>
        <input type="checkbox" id="remember_me" name="remember">
        <label for="remember_me">Remember me</label>
    </div>

    <div>
        <button>Login</button>
    </div>
</form>
