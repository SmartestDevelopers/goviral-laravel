<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Go-Viral | @yield('title', 'Page')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <header>
        <h1>Go-Viral Agency</h1>
        <nav>
            <a href="{{ url('/') }}">Home</a> |
            <a href="{{ url('/about') }}">About</a> |
            <a href="{{ url('/contact-us') }}">Contact</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2025 Go-Viral. All rights reserved.</p>
    </footer>

</body>
</html>
