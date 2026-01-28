<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Vlora Nusantara') }}</title>

    {{-- Bootstrap 5 CSS (CDN) --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    {{-- Google Fonts - SF Pro Display inspired --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    {{-- Premium Apple/Xiaomi-inspired styling --}}
    <style>
        :root {
            --primary: #800000;
            --primary-dark: #5c0000;
            --text-primary: #1d1d1f;
            --text-secondary: #86868b;
            --bg-primary: #ffffff;
            --bg-secondary: #f5f5f7;
            --spacing-xl: 120px;
            --spacing-lg: 80px;
            --spacing-md: 60px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            color: var(--text-primary);
            line-height: 1.6;
            background-color: var(--bg-primary);
            overflow-x: hidden;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        /* Ultra-minimalist Navbar (Apple-style) */
        .navbar {
            background-color: rgba(255, 255, 255, 0.8) !important;
            backdrop-filter: saturate(180%) blur(20px);
            -webkit-backdrop-filter: saturate(180%) blur(20px);
            padding: 12px 0;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        }

        .navbar.scrolled {
            background-color: rgba(255, 255, 255, 0.95) !important;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
        }

        .navbar-brand {
            color: var(--text-primary) !important;
            font-weight: 600;
            font-size: 17px;
            letter-spacing: -0.3px;
            display: flex;
            align-items: center;
            transition: opacity 0.3s ease;
        }

        .navbar-brand:hover {
            opacity: 0.7;
        }

        .navbar-brand img {
            height: 40px;
            margin-right: 0;
            opacity: 1;
        }
        
        .navbar-brand span {
            display: none;
        }

        .navbar-nav {
            gap: 8px;
        }

        .navbar-nav .nav-link {
            color: var(--text-primary) !important;
            font-weight: 400;
            font-size: 14px;
            padding: 8px 16px !important;
            transition: all 0.2s ease;
            position: relative;
            letter-spacing: -0.1px;
        }

        .navbar-nav .nav-link:hover {
            color: var(--primary) !important;
            opacity: 0.8;
        }

        .navbar-nav .nav-link.active {
            color: var(--primary) !important;
            font-weight: 500;
        }

        /* Hero Sections */
        .hero-section {
            min-height: 90vh;
            display: flex;
            align-items: center;
            padding: var(--spacing-xl) 0;
            position: relative;
            overflow: hidden;
        }

        .hero-title {
            font-size: clamp(48px, 8vw, 112px);
            font-weight: 700;
            line-height: 1.05;
            letter-spacing: -0.04em;
            color: var(--text-primary);
            margin-bottom: 24px;
            animation: fadeInUp 0.8s ease-out;
        }

        .hero-subtitle {
            font-size: clamp(20px, 2.5vw, 28px);
            font-weight: 400;
            line-height: 1.4;
            color: var(--text-secondary);
            margin-bottom: 40px;
            max-width: 680px;
            animation: fadeInUp 0.8s ease-out 0.2s both;
        }

        .hero-description {
            font-size: 19px;
            line-height: 1.5;
            color: var(--text-secondary);
            margin-bottom: 48px;
            max-width: 600px;
            animation: fadeInUp 0.8s ease-out 0.4s both;
        }

        /* Buttons - Apple style */
        .btn-primary {
            background-color: var(--primary);
            border: none;
            border-radius: 980px;
            padding: 12px 28px;
            font-size: 17px;
            font-weight: 400;
            color: #fff;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            letter-spacing: -0.2px;
            animation: fadeInUp 0.8s ease-out 0.6s both;
        }

        .btn-primary:hover {
            background-color: var(--primary-dark);
            transform: scale(1.02);
            box-shadow: 0 4px 20px rgba(128, 0, 0, 0.25);
        }

        .btn-outline-primary {
            border: 1.5px solid var(--primary);
            border-radius: 980px;
            padding: 12px 28px;
            font-size: 17px;
            font-weight: 400;
            color: var(--primary);
            background: transparent;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            letter-spacing: -0.2px;
        }

        .btn-outline-primary:hover {
            background-color: var(--primary);
            color: #fff;
            transform: scale(1.02);
        }

        /* Section Titles */
        .section-title {
            font-size: clamp(40px, 5vw, 64px);
            font-weight: 700;
            line-height: 1.1;
            letter-spacing: -0.03em;
            color: var(--text-primary);
            margin-bottom: 16px;
            text-align: center;
        }

        .section-subtitle {
            font-size: 21px;
            font-weight: 400;
            line-height: 1.4;
            color: var(--text-secondary);
            text-align: center;
            max-width: 600px;
            margin: 0 auto 80px;
        }

        /* Product Showcase Cards */
        .showcase-card {
            background: var(--bg-primary);
            border-radius: 18px;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            border: 1px solid rgba(0, 0, 0, 0.05);
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 0.6s ease-out forwards;
        }

        .showcase-card:nth-child(1) { animation-delay: 0.1s; }
        .showcase-card:nth-child(2) { animation-delay: 0.2s; }
        .showcase-card:nth-child(3) { animation-delay: 0.3s; }
        .showcase-card:nth-child(4) { animation-delay: 0.4s; }

        .showcase-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.12);
        }

        .showcase-card-body {
            padding: 48px 40px;
        }

        .showcase-icon {
            font-size: 48px;
            color: var(--primary);
            margin-bottom: 24px;
            opacity: 0.9;
        }

        .showcase-title {
            font-size: 28px;
            font-weight: 600;
            line-height: 1.2;
            letter-spacing: -0.02em;
            color: var(--text-primary);
            margin-bottom: 16px;
        }

        .showcase-description {
            font-size: 17px;
            line-height: 1.5;
            color: var(--text-secondary);
            margin-bottom: 24px;
        }

        /* Feature Grid */
        .feature-item {
            text-align: center;
            padding: 40px 24px;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.6s ease-out forwards;
        }

        .feature-item:nth-child(1) { animation-delay: 0.1s; }
        .feature-item:nth-child(2) { animation-delay: 0.2s; }
        .feature-item:nth-child(3) { animation-delay: 0.3s; }

        .feature-icon {
            font-size: 40px;
            color: var(--primary);
            margin-bottom: 20px;
            opacity: 0.9;
        }

        .feature-title {
            font-size: 24px;
            font-weight: 600;
            letter-spacing: -0.02em;
            color: var(--text-primary);
            margin-bottom: 12px;
        }

        .feature-description {
            font-size: 17px;
            line-height: 1.5;
            color: var(--text-secondary);
        }

        /* Sections */
        .section {
            padding: var(--spacing-lg) 0;
        }

        .section-alt {
            background-color: var(--bg-secondary);
        }

        /* Footer */
        footer {
            background-color: var(--bg-secondary);
            padding: 80px 0 40px;
            margin-top: var(--spacing-xl);
        }

        footer h5 {
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 0.5px;
            color: var(--text-primary);
            margin-bottom: 20px;
            text-transform: uppercase;
        }

        footer ul {
            list-style: none;
            padding: 0;
        }

        footer ul li {
            margin-bottom: 12px;
        }

        footer ul li a {
            color: var(--text-secondary);
            text-decoration: none;
            font-size: 14px;
            transition: color 0.2s ease;
            letter-spacing: -0.1px;
        }

        footer ul li a:hover {
            color: var(--primary);
        }

        .footer-bottom {
            border-top: 1px solid rgba(0, 0, 0, 0.1);
            padding-top: 32px;
            margin-top: 48px;
            text-align: center;
            color: var(--text-secondary);
            font-size: 14px;
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        /* Smooth reveal on scroll */
        .reveal {
            opacity: 0;
            transform: translateY(40px);
            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        /* Responsive */
        @media (max-width: 768px) {
            :root {
                --spacing-xl: 80px;
                --spacing-lg: 60px;
                --spacing-md: 40px;
            }

            .hero-section {
                min-height: 70vh;
                padding: 60px 0;
            }

            .showcase-card-body {
                padding: 32px 24px;
            }

            .section {
                padding: var(--spacing-md) 0;
            }
        }

        /* Image styling */
        .hero-image {
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
            animation: fadeIn 1s ease-out 0.3s both;
        }

        .hero-image img {
            width: 100%;
            height: auto;
            display: block;
        }
    </style>

    {{-- Laravel assets --}}
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body>
    {{-- Minimalist Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNavbar">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                @if(file_exists(public_path('dokumentasi/photo_2026-01-28_10-23-22 - Edited.png')))
                    <img src="{{ asset('dokumentasi/photo_2026-01-28_10-23-22 - Edited.png') }}" 
                         alt="CV. Vlora Nusantara"
                         style="height: 50px; width: 55px;">
                @else
                    <span>Vlora Nusantara</span>
                @endif
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar"
                    aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('services') ? 'active' : '' }}" href="{{ route('services') }}">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('documentation') ? 'active' : '' }}" href="{{ route('documentation') }}">Documentation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- Main Content --}}
    <main style="margin-top: 60px;">
        @yield('content')
    </main>

    {{-- Premium Footer --}}
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5>Products</h5>
                    <ul>
                        <li><a href="{{ route('services') }}">White Tea</a></li>
                        <li><a href="{{ route('services') }}">Green Coffee Beans</a></li>
                        <li><a href="{{ route('documentation') }}">Certifications</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5>Support</h5>
                    <ul>
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="{{ route('documentation') }}">Documentation</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5>Services</h5>
                    <ul>
                        <li><a href="{{ route('services') }}">Export Services</a></li>
                        <li><a href="{{ route('services') }}">Logistics</a></li>
                        <li><a href="{{ route('services') }}">Quality Assurance</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5>Company</h5>
                    <ul>
                        <li><a href="{{ route('about') }}">Vision</a></li>
                        <li><a href="{{ route('documentation') }}">Compliance</a></li>
                        <li><a href="{{ route('contact') }}">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p class="mb-2">Copyright © {{ date('Y') }} CV. Vlora Nusantara. All rights reserved.</p>
                <p class="mb-0">
                    <a href="tel:+6288214259009" class="text-decoration-none" style="color: var(--text-secondary);">+62 882-1425-9009</a> · 
                    <a href="mailto:cv.vloranusantara@gmail.com" class="text-decoration-none" style="color: var(--text-secondary);">cv.vloranusantara@gmail.com</a>
                </p>
            </div>
        </div>
    </footer>

    {{-- Bootstrap 5 JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>

    {{-- Smooth scroll and animations --}}
    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('mainNavbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Reveal on scroll
        const reveals = document.querySelectorAll('.reveal');
        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                }
            });
        }, { threshold: 0.1 });

        reveals.forEach(reveal => {
            revealObserver.observe(reveal);
        });
    </script>
</body>
</html>
