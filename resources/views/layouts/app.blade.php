<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Landing Page')</title>
    @vite(['resources/css/nav.css', 'resources/js/app.js'])
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar" id="navbar">
        <div class="nav-container">
            <!-- Logo -->
            <div class="logo">
                <span class="gradient-text">FIX YOU</span>
            </div>

            <!-- Desktop Menu -->
            <div class="menu-container">
                <div class="desktop-menu">
                    <a href="#" class="nav-link">Man</a>
                    <a href="#" class="nav-link">Woman</a>
                    <a href="#" class="nav-link">Unisex</a>
                </div>
            </div>

            <!-- Mobile Menu Button -->
            <button class="mobile-menu-btn" id="mobile-menu-btn">
                <div class="hamburger"></div>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div class="mobile-menu" id="mobile-menu">
            <a href="#" class="mobile-link">Man</a>
            <a href="#" class="mobile-link">Woman</a>
            <a href="#" class="mobile-link">Unisex</a>
        </div>
    </nav>
    <script>
        // Scroll Effect
        window.addEventListener('scroll', () => {
            const nav = document.getElementById('navbar');
            nav.classList.toggle('scrolled', window.scrollY > 20);
        });

        // Mobile Menu Toggle
        document.getElementById('mobile-menu-btn').addEventListener('click', () => {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('active');
            document.body.classList.toggle('menu-open');
        });
    </script>
</body>
</html>
@yield('content')