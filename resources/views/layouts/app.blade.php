<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} | Simple POS</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <div class="container nav-container">
            <a class="brand" href="{{ route('home') }}">Simple POS</a>
            <nav aria-label="Main navigation">
                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('about') }}">About</a>
                <a href="{{ route('customers.index') }}">Customers</a>
                <a href="{{ route('users.index') }}">Users</a>
            </nav>
        </div>
    </header>
    <main class="container">
        @yield('content')
    </main>
    <footer>
        <div class="container">
            <p>&copy; {{ date('Y') }} Simple POS. Web Systems and Technologies.</p>
        </div>
    </footer>
</body>
</html>
