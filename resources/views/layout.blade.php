<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{ asset('styles1.css') }}">
    <link rel="stylesheet" href="{{ asset('footer.css') }}">
    <script src="{{ asset('app.js') }}" defer></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>

<body>
<header>
    <h1>VIRAT KHOLI</h1>
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

    <footer class="bg-black" style="color: white;">
    <div class="container mx-auto flex justify-between items-center">
    <p>Social Media Handles</p>
        <p>&copy; 2023 [Virat Kohli Fan page]. All rights reserved.</p>
    </div>
    </footer>
   
</body>

</html>
