<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Go‑Viral | @yield('title','Welcome')</title>
  <!-- Link your CSS -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body style="margin:0; font-family:'Segoe UI', sans-serif; background:#F7F9FB; color:#1C1E21;">

  <!-- Header with Nav -->
  <header style="background:#3E8BFF; padding:20px; text-align:center; color:#fff;">
    <h1>Go‑Viral Agency</h1>
    <nav style="margin-top:10px;">
      <a href="{{ url('/') }}" style="color:#fff; margin:0 10px;">Home</a> |
      <a href="{{ url('/about') }}" style="color:#fff; margin:0 10px;">About</a> |
      <a href="{{ url('/contact-us') }}" style="color:#fff; margin:0 10px;">Contact</a>
    </nav>
  </header>

  <!-- Main Content -->
  <main style="padding:40px;">
    @yield('content')
  </main>

  <!-- Footer -->
  <footer style="background:#E1E8F9; padding:20px; text-align:center; font-size:14px;">
    <p>© 2025 Go‑Viral. All rights reserved.</p>
    <p>Email: info@goviralagency.com | Phone: +92 XXX‑XXXXXXX</p>
  </footer>

</body>
</html>
