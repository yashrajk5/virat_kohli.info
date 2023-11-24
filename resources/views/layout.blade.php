<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{ asset('styles1.css') }}">
    <script src="{{ asset('app.js') }}" defer></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>

<body>
<header>
    <h1>MY IDEAL VIRAT KHOLI</h1>
    <nav class="horizontal-nav">
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/history">History</a></li>
            <li><a href="/details">Details</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </nav>
</header>



    <section>
        @yield('content')
    </section>

    <footer>
        <p>Social Media Handles: [Add handles here]</p>
        <p>&copy; 2023 [Personality Name]. All rights reserved.</p>
    </footer>
   
</body>

</html>
