<<<<<<< HEAD
@extends('web.layouts.front')
@section('title')
    {{ __('web.home') }}
@endsection
@section('content')
    <div class="home-page">
        <!-- start hero section -->
        <section
                class="hero-section position-relative p-t-120 p-b-200 border-bottom-right-rounded border-bottom-left-rounded bg-gray"
                id="div1">
            <div class="container">
                <div class="row align-items-center flex-column-reverse flex-lg-row">
                    <div class="col-lg-6 text-lg-start text-center">
                        <div class="hero-content mt-5 mt-lg-0">
                            <h6 class="text-primary mb-3">{{ $frontSetting['home_page_experience'] }} {{ __('messages.web_home.years_experience') }}</h6>
                            <h1 class="mb-3 pb-1">
                            Rumah Sakit Daha Husada
                            </h1>
                            <p class="mb-lg-4 pb-lg-3 mb-4">
                                {{ \Illuminate\Support\Str::limit($frontSetting['home_page_description'], 170) }}</p>
                            @if(!Auth::user())
                                <a href="{{ route('register') }}"
                                   class="btn btn-primary" data-turbo="false">{{ __('messages.web_home.sign_up') }}</a>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6 text-lg-end text-center">
                        <img src="{{ !empty($frontSetting['home_page_image']) ? $frontSetting['home_page_image'] : asset('web_front/images/main-banner/banner-one/Home.png') }}"
                             alt="Infy Care" class="img-fluid"/>
                    </div>
                </div>
=======
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <title>@yield('title') | Rumah Sakit Daha Husada</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Website RS Daha Husada" name="description" />
    <meta content="Daha Husada" name="author" />
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />

    <!-- JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <style>
        :root {
            --primary-color: #059669;
            --primary-light: #10b981;
            --primary-dark: #047857;
            --secondary-color: #34d399;
            --accent-color: #6ee7b7;
            --success-color: #22c55e;
            --white: #ffffff;
            --light-gray: #f8fafc;
            --medium-gray: #e2e8f0;
            --dark-gray: #64748b;
            --text-dark: #1e293b;
            
            /* Gradients */
            --primary-gradient: linear-gradient(135deg, #059669 0%, #10b981 50%, #34d399 100%);
            --hero-gradient: linear-gradient(135deg, rgba(5, 150, 105, 0.95) 0%, rgba(16, 185, 129, 0.9) 50%, rgba(52, 211, 153, 0.85) 100%);
            --card-gradient: linear-gradient(135deg, #ffffff 0%, #f0fdf4 100%);
            --accent-gradient: linear-gradient(45deg, #6ee7b7, #34d399);
            
            /* Shadows */
            --shadow-primary: 0 20px 60px rgba(5, 150, 105, 0.15);
            --shadow-hover: 0 30px 80px rgba(5, 150, 105, 0.25);
            --shadow-soft: 0 10px 40px rgba(0, 0, 0, 0.08);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.7;
            color: var(--text-dark);
            overflow-x: hidden;
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: var(--light-gray);
        }

        ::-webkit-scrollbar-thumb {
            background: var(--primary-gradient);
            border-radius: 10px;
        }

        /* NAVBAR STYLING - ENHANCED & PERFECTED */
        .hospital-navbar {
            backdrop-filter: blur(20px);
            background: var(--navbar-gradient) !important;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: var(--shadow-navbar);
            transition: all 0.4s ease;
            padding: 1rem 0;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }

        .hospital-navbar.scrolled {
            padding: 0.3rem 0;
            background: var(--primary-color) !important;
            box-shadow: 0 5px 20px rgba(5, 150, 105, 0.3);
        }

        .logo-hospital {
            width: 5rem !important;
            height: 5rem !important;
            border-radius: 12px;
            box-shadow: 0 8px 25px rgba(5, 150, 105, 0.3);
            transition: all 0.3s ease;
        }

        .logo-hospital:hover {
            transform: scale(1.05) rotate(2deg);
            box-shadow: 0 12px 35px rgba(5, 150, 105, 0.4);
        }

        .navbar-brand {
            color: var(--white) !important;
            font-weight: 700;
            font-size: 1.5rem;
            text-decoration: none;
        }

        .custom-navbar {
            background: linear-gradient(90deg, rgb(3, 114, 83) 0%, #10b981 100%) !important;
        }


        .nav-link {
            padding: 0.75rem 1.25rem !important;
            color: rgba(255, 255, 255, 0.95) !important;
            font-weight: 500;
            transition: all 0.3s ease;
            border-radius: 10px;
            position: relative;
            margin: 1. 0.25rem;
        }

        .nav-link:hover {
            color: var(--accent-color) !important;
            background: rgba(255, 255, 255, 0.1);
            transform: translateY(-2px);
        }

        .nav-link.active {
            color: var(--accent-color) !important;
            background: rgba(255, 255, 255, 0.15);
        }

        .nav-icon {
            margin-right: 0.5rem;
            font-size: 0.9rem;
        }

        .hospital-navbar {
            background-color: #059669 !important;
            color: white !important;
            background-image: none !important;
            opacity: 1 !important;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
        }

        .hospital-navbar .nav-link,
        .hospital-navbar .navbar-brand,
        .hospital-navbar .dropdown-item {
            color: white !important;
        }

        .hospital-navbar .nav-link:hover,
        .hospital-navbar .dropdown-item:hover {
            color: #d1fae5 !important;
            /* hijau muda saat hover */
        }

        /* Dropdown Improvements */
        .dropdown-menu {
            background: var(--white) !important;
            border: none;
            border-radius: 15px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
            padding: 1rem 0;
            margin-top: 0.5rem;
        }

        .dropdown-item {
            color: var(--text-dark) !important;
            padding: 0.75rem 1.5rem;
            transition: all 0.3s ease;
            border-radius: 0;
        }

        .dropdown-item:hover {
            background: var(--light-gray) !important;
            color: var(--primary-color) !important;
            transform: translateX(5px);
        }

        .dropdown-item i {
            width: 20px;
            color: var(--primary-color);
        }

        /* Action Buttons Enhanced */
        .btn-success-custom {
            background: var(--success-color) !important;
            border: 2px solid var(--success-color);
            border-radius: 20px;
            padding: 0.3rem 0.8rem;
            font-size: 0.85rem;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 10px rgba(34, 197, 94, 0.3);
        }

        .btn-success-custom:hover {
            background: transparent !important;
            color: var(--success-color) !important;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(34, 197, 94, 0.4);
        }

        .btn-primary-custom {
            background: var(--white) !important;
            color: var(--primary-color) !important;
            border: 2px solid var(--white);
            border-radius: 20px;
            padding: 0.3rem 0.8rem;
            font-weight: 600;
            font-size: 0.85rem;
            transition: all 0.3s ease;
            box-shadow: 0 4px 10px rgba(255, 255, 255, 0.3);
        }

        .btn-primary-custom:hover {
            background: transparent !important;
            color: var(--white) !important;
            border-color: var(--white);
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(255, 255, 255, 0.4);
        }

        .header-btn-grp a {
            white-space: nowrap;
            min-width: auto;
        }

        .navbar-toggler {
            border: none;
            padding: 0.5rem;
            color: var(--white);
            font-size: 1.5rem;
        }

        .navbar-toggler:focus {
            box-shadow: none;
        }

        /* HERO SECTION - ENHANCED */
        .hero-section {
            min-height: 100vh;
            background: var(--hero-gradient), url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="dots" width="20" height="20" patternUnits="userSpaceOnUse"><circle cx="10" cy="10" r="1.5" fill="rgba(255,255,255,0.1)"/></pattern></defs><rect width="100" height="100" fill="url(%23dots)"/></svg>');
            position: relative;
            display: flex;
            align-items: center;
            overflow: hidden;
            padding-top: 0px;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse"><path d="M 10 0 L 0 0 0 10" fill="none" stroke="rgba(255,255,255,0.05)" stroke-width="1"/></pattern></defs><rect width="100" height="100" fill="url(%23grid)"/></svg>');
            animation: gridMove 20s linear infinite;
        }

        @keyframes gridMove {
            0% {
                transform: translate(0, 0);
            }

            100% {
                transform: translate(10px, 10px);
            }
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(5, 150, 105, 0.1);
        }

        .hero-content {
            position: relative;
            z-index: 10;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 900;
            line-height: 1.2;
            color: var(--white);
            text-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
            animation: fadeInUp 1s ease-out;
        }

        #typing-effect {
            display: block;
            /* Ini penting untuk membuat teks pindah ke bawah */
            font-size: 3.5rem;
            font-weight: 900;
            font-family: inherit;
            color: rgb(239, 146, 60);
            /* Warna kuning-oranye yang hangat */
            text-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
        }


        .text-gradient {
            background: var(--accent-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.1));
        }


        .hero-description {
            font-size: 1.25rem;
            color: rgba(255, 255, 255, 0.95);
            margin-bottom: 2rem;
            animation: fadeInUp 1s ease-out 0.2s both;
        }

        .hero-badge .badge {
            position: relative;
            display: inline-block;
            background: linear-gradient(90deg, #facc15, #f59e0b);
            /* warna gradasi kuning-oranye */
            color: white;
            font-weight: bold;
            padding: 0.75rem 1.5rem;
            border-radius: 999px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
            border: 2px solid #a855f7;
            /* garis ungu */
            overflow: hidden;
            z-index: 1;
        }

        .hero-badge .badge i {
            margin-right: 0.5rem;
        }

        /* Efek kilau bergerak */
        .hero-badge .badge::before {
            content: '';
            position: absolute;
            top: 0;
            left: -50%;
            width: 50%;
            height: 100%;
            background: linear-gradient(120deg,
                    rgba(255, 255, 255, 0.1) 0%,
                    rgba(255, 255, 255, 0.7) 50%,
                    rgba(255, 255, 255, 0.1) 100%);
            transform: skewX(-20deg);
            animation: shine 2.5s infinite;
            z-index: 2;
        }

        @keyframes shine {
            0% {
                left: -50%;
            }

            100% {
                left: 125%;
            }
        }

        .badge {
            backdrop-filter: blur(15px);
            background: linear-gradient(to right, #FFD700, #DAA520);
            border: 1px solid rgba(158, 23, 255, 0.85);
            color: var(--white) !important;
            font-weight: 600;
            padding: 12px 24px;
            font-size: 0.95rem;
            border-radius: 25px;
        }

        .hero-actions {
            animation: fadeInUp 1s ease-out 0.3s both;
        }

        .btn {
            padding: 15px 35px;
            border-radius: 50px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            border: none;
            position: relative;
            overflow: hidden;
            transition: all 0.4s ease;
            font-size: 0.9rem;
        }

        .btn-primary {
            background: var(--white);
            color: var(--primary-color);
            box-shadow: var(--shadow-primary);
            border: 2px solid var(--white);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-hover);
            color: var(--primary-dark);
            background: var(--accent-color);
        }

        .btn-outline-primary {
            background: transparent;
            border: 2px solid var(--white);
            color: var(--white);
            backdrop-filter: blur(10px);
        }

        .btn-outline-primary:hover {
            background: var(--white);
            color: var(--primary-color);
            transform: translateY(-3px);
            box-shadow: 0 20px 40px rgba(255, 255, 255, 0.3);
        }

        .trust-indicators {
            animation: fadeInUp 1s ease-out 0.4s both;
        }

        .trust-item h4 {
            font-weight: 900;
            font-size: 2.5rem;
            margin-bottom: 0;
        }

        .trust-item small {
            color: rgba(255, 255, 255, 0.9);
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* Hero Image */
        .hero-image-wrapper {
            position: relative;
            animation: fadeInRight 1s ease-out 0.5s both;
        }

        .hero-main-image {
            border-radius: 25px;
            box-shadow: 0 30px 80px rgba(0, 0, 0, 0.2);
            transition: transform 0.6s ease;
            border: 3px solid var(--white);
        }

        .hero-main-image:hover {
            transform: scale(1.05) rotateY(5deg);
        }

        /* Floating Cards */
        .floating-card {
            position: absolute;
            animation: float 6s ease-in-out infinite;
        }

        .floating-card-1 {
            top: 20%;
            left: -10%;
            animation-delay: 0s;
        }

        .floating-card-2 {
            bottom: 20%;
            right: -10%;
            animation-delay: 3s;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        .floating-card .card {
            backdrop-filter: blur(20px);
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            padding: 15px;
            box-shadow: var(--shadow-soft);
            border: 1px solid rgba(255, 255, 255, 0.8);
        }

        .icon-circle {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Hero Shapes */
        .hero-shapes {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 1;
        }

        .shape-1,
        .shape-2,
        .shape-3 {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.08);
            animation: floatShape 20s linear infinite;
        }

        .shape-1 {
            width: 300px;
            height: 300px;
            top: 10%;
            right: 10%;
            animation-delay: 0s;
        }

        .shape-2 {
            width: 200px;
            height: 200px;
            bottom: 20%;
            left: 5%;
            animation-delay: 7s;
        }

        .shape-3 {
            width: 150px;
            height: 150px;
            top: 50%;
            right: 30%;
            animation-delay: 14s;
        }

        @keyframes floatShape {

            0%,
            100% {
                transform: translateY(0) rotate(0deg);
            }

            33% {
                transform: translateY(-30px) rotate(120deg);
            }

            66% {
                transform: translateY(30px) rotate(240deg);
            }
        }

        /* Section Styling */
        .section {
            padding: 120px 0;
            position: relative;
        }

        .section-title {
            font-size: 3rem;
            font-weight: 800;
            color: var(--text-dark);
            margin-bottom: 1rem;
            position: relative;
        }

        .section-subtitle {
            color: var(--primary-color);
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 0.9rem;
            margin-bottom: 1rem;
        }

        .section-description {
            font-size: 1.1rem;
            color: var(--dark-gray);
            max-width: 600px;
            margin: 0 auto 3rem;
        }

        /* Easy Solution Cards */
        .solution-card {
            transition: all 0.4s ease;
            margin-bottom: 2rem;
        }

        .solution-card:hover {
            transform: translateY(-10px);
        }

        .solution-card .card {
            border: none;
            border-radius: 25px;
            padding: 3rem 2rem;
            height: 100%;
            background: var(--card-gradient);
            box-shadow: var(--shadow-soft);
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(113, 242, 201, 0.69);
        }

        .solution-card .card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: var(--primary-gradient);
            transform: scaleX(0);
            transition: transform 0.4s ease;
        }

        .solution-card:hover .card::before {
            transform: scaleX(1);
        }

        .solution-card:hover .card {
            box-shadow: var(--shadow-hover);
            background: var(--white);
        }

        .solution-card .icon-box {
            width: 80px;
            height: 80px;
            background: var(--primary-gradient);
            color: var(--white);
            border-radius: 20px;
            font-size: 2rem;
            transition: all 0.4s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .solution-card:hover .icon-box {
            transform: rotateY(180deg) scale(1.1);
            background: var(--accent-gradient);
        }

        /* About Section */
        .about-section {
            background: linear-gradient(135deg, var(--light-gray) 0%, #f0fdf4 100%);
        }

        .about-count {
            background: var(--white);
            border-radius: 25px;
            box-shadow: var(--shadow-soft);
            transition: all 0.4s ease;
            padding: 3rem 2rem;
            margin-bottom: 1rem;
            border: 1px solid rgba(5, 150, 105, 0.1);
        }

        .about-count:hover {
            transform: translateY(-10px) scale(1.05);
            box-shadow: var(--shadow-hover);
            background: var(--card-gradient);
        }

        .about-count h3 {
            font-size: 3rem;
            font-weight: 900;
            margin-bottom: 0.5rem;
        }

        .text-green {
            color: var(--primary-color);
        }

        .text-green-light {
            color: var(--secondary-color);
        }

        .text-success {
            color: var(--success-color);
        }

        .text-accent {
            color: var(--accent-color);
        }

        .text-pink {
            color: #ec4899;
        }

        .text-blue {
            color: #3b82f6;
        }

        /* Services Section */
        .service-section {
            background: var(--primary-color);
            color: var(--white);
            position: relative;
        }

        .service-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="medical" width="30" height="30" patternUnits="userSpaceOnUse"><path d="M15 5 L15 25 M5 15 L25 15" stroke="rgba(255,255,255,0.03)" stroke-width="2"/></pattern></defs><rect width="100" height="100" fill="url(%23medical)"/></svg>');
        }

        .service-card {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 25px;
            padding: 2.5rem;
            text-align: center;
            transition: all 0.4s ease;
            backdrop-filter: blur(15px);
            position: relative;
            z-index: 2;
        }

        .service-card:hover {
            background: rgba(255, 255, 255, 0.15);
            transform: translateY(-15px);
            box-shadow: 0 30px 80px rgba(0, 0, 0, 0.2);
        }

        .service-icon {
            width: 80px;
            height: 80px;
            background: var(--white);
            color: var(--primary-color);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 2rem;
            font-size: 2rem;
            transition: all 0.4s ease;
        }

        .service-card:hover .service-icon {
            background: var(--accent-color);
            color: var(--white);
            transform: rotateY(180deg);
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInRight {
            from {
                opacity: 0;
                transform: translateX(50px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .fade-in-up {
            animation: fadeInUp 0.8s ease-out;
        }

        .fade-in-right {
            animation: fadeInRight 0.8s ease-out;
        }

        /* Scroll animations */
        .scroll-animate {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }

        .scroll-animate.active {
            opacity: 1;
            transform: translateY(0);
        }

        /* Footer */
        .footer {
            background: var(--text-dark);
            color: var(--white);
        }

        /* RESPONSIVE DESIGN */
        @media (max-width: 768px) {
            .hero-section {
                padding-top: 80px;
                min-height: 90vh;
            }

            .hero-title {
                font-size: 2.5rem;
            }

            .section {
                padding: 80px 0;
            }

            .section-title {
                font-size: 2rem;
            }

            .floating-card {
                display: none;
            }

            .logo-hospital {
                width: 3rem !important;
                height: 3rem !important;
            }

            .hospital-navbar {
                padding: 0.5rem 0;
            }

            .btn-success-custom,
            .btn-primary-custom {
                padding: 0.5rem 1rem;
                font-size: 0.9rem;
            }

            .header-btn-grp {
                margin-top: 1rem;
                justify-content: center;
            }
        }

        @media (max-width: 576px) {
            .hero-title {
                font-size: 2rem;
            }

            .hero-description {
                font-size: 1.1rem;
            }

            .trust-item h4 {
                font-size: 2rem;
            }

            .btn {
                padding: 12px 25px;
                font-size: 0.8rem;
            }
        }

        /* Additional modern effects */
        .glass-effect {
            backdrop-filter: blur(20px);
            background: rgba(5, 150, 105, 0.95);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .neon-glow {
            box-shadow: 0 0 20px var(--primary-color), 0 0 40px var(--primary-color), 0 0 80px var(--primary-color);
        }

        .pulse {
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.05);
            }

            100% {
                transform: scale(1);
            }
        }

        /* Trust indicators colors */
        .trust-indicators .text-warning {
            color: var(--accent-color) !important;
        }

        .trust-indicators .text-success {
            color: var(--white) !important;
        }

        .typing-container {
            width: fit-content;
            white-space: nowrap;
            overflow: hidden;
            border-right: 3px solid #059669;
            font-size: 24px;
            font-family: 'Courier New', Courier, monospace;
            animation: typing 4s steps(40, end), blink-caret 0.75s step-end infinite;
        }

        @keyframes typing {
            from {
                width: 0;
            }

            to {
                width: 100%;
            }
        }

        @keyframes blink-caret {

            from,
            to {
                border-color: transparent;
            }

            50% {
                border-color: #059669;
            }
        }

        /* Tambahkan padding pada navbar untuk tampilan mobile */
        @media (max-width: 768px) {
            .hospital-navbar {
                padding: 0.5rem 1rem;
            }

            .navbar-toggler {
                font-size: 1.25rem;
                padding: 0.4rem;
            }

            .hero-title {
                font-size: 2rem;
                line-height: 1.3;
            }

            .hero-description {
                font-size: 1rem;
            }

            .btn {
                padding: 10px 20px;
                font-size: 0.85rem;
            }

            .hero-image-wrapper {
                display: none;
                /* Sembunyikan gambar hero untuk layar kecil */
            }

            .header-btn-grp {
                flex-direction: column;
                gap: 0.5rem;
            }
        }

        @media (max-width: 576px) {
            .hero-title {
                font-size: 1.8rem;
            }

            .hero-description {
                font-size: 0.9rem;
            }

            .btn {
                padding: 8px 16px;
                font-size: 0.8rem;
            }

            .navbar-nav {
                text-align: center;
            }

            .navbar-nav .nav-item {
                margin-bottom: 0.5rem;
            }
        }

        #map iframe {
            animation: fadeInUp 1s ease-out;
        }

        .map-responsive {
            position: relative;
            width: 100%;
            padding-bottom: 45.25%;
            /* Rasio 16:9 */
            height: 0;
        }

        .map-responsive iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .accordion-button {
            font-weight: 600;
            background-color: #f8fafc;
            color: #1e293b;
            transition: background-color 0.3s ease;
        }

        .accordion-button:not(.collapsed) {
            background-color: #10b981;
            color: white;
        }

        .accordion-body {
            background-color: #ffffff;
            color: #334155;
            padding: 1rem 1.25rem;
            font-size: 0.95rem;
        }

        .zoom-in-animate {
            animation: zoomIn 4s ease-in-out forwards;
        }

        @keyframes zoomIn {
            0% {
                transform: scale(1);
            }

            100% {
                transform: scale(1.1);
            }
        }

        .zoom-in-out {
            animation: zoomInOut 4s ease-in-out infinite alternate;
        }

        @keyframes zoomInOut {
            0% {
                transform: scale(1);
            }

            100% {
                transform: scale(1.1);
            }
        }
    </style>
</head>

<!-- Modern RS Daha Husada Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark custom-navbar">
    <div class="container-fluid">
        <div class="col-2 col-sm-2 col-md-1 d-flex justify-content-center align-items-center mb- mb-sm-0">
            <img src="{{ asset('web/img/logo2.png') }}" alt="Logo Rumah Sakit" class="img-fluid logo-hospital shadow-lg"
                style="
            max-width: 80px;
            height: auto;
            background-color: #ffffff;
            border-radius: 50%;
            padding: 5px;
            box-shadow: 0 0 15px rgba(0, 255, 128, 0.6);
        " />
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar"
            aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item">
                    <a class="nav-link" href="#" style="font-size: 1.1rem; font-weight: 500;">
                        Beranda
                    </a>
                </li>

                <!-- Profil Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="profilDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 1.1rem; font-weight: 500;">
                        Profil
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="profilDropdown">
                        <li><a class="dropdown-item" href="{{ route('aboutUs') }}"
                                class="nav-link {{ Request::is('about-us') ? 'active' : '' }}"><i
                                    class="fas fa-info-circle me-2"></i>Tentang Kami</a>
                        </li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-eye me-2"></i>Visi & Misi</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-sitemap me-2"></i>Struktur Organisasi</a>
                        </li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-tasks me-2"></i>Tugas Pokok & Fungsi</a>
                        </li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-users me-2"></i>Direktur & Jajaran</a>
                        </li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-map-marker-alt me-2"></i>Alamat &
                                Lokasi</a></li>
                    </ul>
                </li>

                <!-- Pelayanan Medik Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="profilDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 1rem; font-weight: 500;">
                        pelayanan medik
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="medikDropdown">
                        <li><a class="dropdown-item" href="#"><i class="fas fa-ambulance me-2"></i>IGD</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-clinic-medical me-2"></i>Rawat Jalan</a>
                        </li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-bed me-2"></i>Rawat Inap Reguler</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-procedures me-2"></i>Rawat Inap MH</a>
                        </li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-heart me-2"></i>Rawat Inap Intensif</a>
                        </li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-user-md me-2"></i>Pelayanan Bedah</a>
                        </li>
                    </ul>
                </li>

                <!-- Penunjang Medik Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="profilDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 1rem; font-weight: 500;">
                        Penunjang mendik
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="penunjangDropdown">
                        <li><a class="dropdown-item" href="#"><i class="fas fa-vial me-2"></i>Lab Patologi Klinik</a>
                        </li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-x-ray me-2"></i>Radiologi</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-dumbbell me-2"></i>Rehabilitasi Medik</a>
                        </li>
                    </ul>
                </li>

                <!-- Informasi Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="profilDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 1rem; font-weight: 500;">
                        Informasi
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="informasiDropdown">
                        <li><a class="dropdown-item" href="#"><i class="fas fa-calendar-plus me-2"></i>Pendaftaran
                                Online</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-bed me-2"></i>Ketersediaan Bed</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-money-bill me-2"></i>Tarif Dasar</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-user-doctor me-2"></i>Dokter</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-newspaper me-2"></i>Artikel Kesehatan</a>
                        </li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-bullhorn me-2"></i>Berita</a></li>
                    </ul>
                </li>

                <!-- PPID -->
                <li class="nav-item">
                    <a class="nav-link" href="https://ppid.rsuddahahusada.jatimprov.go.id"
                        style="font-size: 1.1rem; font-weight: 500;">
                        PPID
                    </a>
                </li>

                <!-- Inovasi Daha -->
                <li class="nav-item">
                    <a class="nav-link" href="#" style="font-size: 1.1rem; font-weight: 500;">
                        Inovasi Daha
                    </a>
                </li>

                <!-- Pengaduan -->
                <li class="nav-item">
                    <a class="nav-link" href="#" style="font-size: 1.1rem; font-weight: 500;">
                        Pengaduan
                    </a>
                </li>
            </ul>

            <!-- Action Buttons -->
            <div class="header-btn-grp ms-lg-4 d-flex flex-row gap-2 flex-wrap">
                <a href="#" class="btn-success text-white btn-success-custom">
                    <i class="fas fa-calendar-check me-2"></i>Daftar Online
                </a>
                <a href="#" class="btn-primary text-white btn-primary-custom">
                    <i class="fas fa-phone me-2"></i>Hubungi Kami
                </a>
>>>>>>> 1ee0d94 (Pertama push project RS Daha Husada)
            </div>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section class="hero-section" id="home">
    <div class="hero-overlay"></div>
    <div class="container position-relative">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="hero-content">
                    <div class="hero-badge mb-4">
                        <span class="badge">
                            <i class="fas fa-award"></i>
                            69+ Tahun Pengalaman
                        </span>
                    </div>
                    <h1 class="hero-title mb-4 text-white">
                        <span class="text-white">Selamat datang</span> di website resmi
                        <span id="typing-effect" class="typing-effect text-warning">Rumah Sakit Daha Husada!</span>
                    </h1>
                    <p class="hero-description">
                        Memberikan pelayanan kesehatan terbaik dengan teknologi modern dan tenaga medis berpengalaman
                        untuk keluarga Indonesia.
                    </p>
                    <div class="hero-actions d-flex flex-wrap gap-3">
                        <a href="#register" class="btn btn-primary">
                            <i class="fas fa-user-plus me-2"></i>Daftar Sekarang
                        </a>
                        <a href="#appointment" class="btn btn-outline-primary">
                            <i class="fas fa-calendar-check me-2"></i>Book Appointment
                        </a>
                    </div>

                    <div class="trust-indicators mt-5">
                        <div class="row text-center">
                            <div class="col-4">
                                <div class="trust-item">
                                    <h4 class="text-warning mb-1">24/7</h4>
                                    <small>Emergency Care</small>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="trust-item">
                                    <h4 class="text-success mb-1">100+</h4>
                                    <small>Expert Doctors</small>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="trust-item">
                                    <h4 class="text-warning mb-1">50K+</h4>
                                    <small>Happy Patients</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="hero-image-wrapper position-relative">
                    <img src="https://images.unsplash.com/photo-1551190822-a9333d879b1f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                        alt="Daha Husada Hospital" class="img-fluid hero-main-image zoom-in-out">

                    <!-- Floating Cards -->
                    <div class="floating-card floating-card-1">
                        <div class="card border-0">
                            <div class="card-body p-3">
                                <div class="d-flex align-items-center">
                                    <div class="icon-circle bg-success me-3">
                                        <i class="fas fa-heartbeat text-white"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Heart Rate</h6>
                                        <small class="text-muted">98 BPM</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="floating-card floating-card-2">
                        <div class="card border-0">
                            <div class="card-body p-3">
                                <div class="d-flex align-items-center">
                                    <div class="icon-circle bg-primary me-3">
                                        <i class="fas fa-user-md text-white"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Available Now</h6>
                                        <small class="text-muted">15 Doctors Online</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Animated Background Elements -->
    <div class="hero-shapes">
        <div class="shape-1"></div>
        <div class="shape-2"></div>
        <div class="shape-3"></div>
    </div>
</section>

<!-- Easy Solution Section -->
<section class="section" id="solutions">
    <div class="container">
        <div class="text-center mb-5">
            <h6 class="section-subtitle">Solusi Mudah</h6>
            <h2 class="section-title scroll-animate">4 Langkah Mudah Mendapat Perawatan Terbaik</h2>
        </div>

        <div class="row">
            <div class="col-xl-3 col-md-6 mb-4 scroll-animate">
                <div class="solution-card">
                    <div class="card">
                        <div class="icon-box mx-auto mb-4">
                            <i class="fas fa-user"></i>
                        </div>
                        <h4>Registrasi Online</h4>
                        <p>Daftarkan diri Anda dengan mudah melalui sistem online kami yang aman dan terpercaya.</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4 scroll-animate">
                <div class="solution-card">
                    <div class="card">
                        <div class="icon-box mx-auto mb-4">
                            <i class="fas fa-headphones-simple"></i>
                        </div>
                        <h4>Konsultasi</h4>
                        <p>Dapatkan konsultasi awal dengan tim medis profesional kami kapan saja Anda butuhkan.</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4 scroll-animate">
                <div class="solution-card">
                    <div class="card">
                        <div class="icon-box mx-auto mb-4">
                            <i class="fas fa-calendar-check"></i>
                        </div>
                        <h4>Jadwal Appointment</h4>
                        <p>Atur jadwal kunjungan Anda dengan fleksibel sesuai ketersediaan dokter spesialis.</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4 scroll-animate">
                <div class="solution-card">
                    <div class="card">
                        <div class="icon-box mx-auto mb-4">
                            <i class="fas fa-check-double"></i>
                        </div>
                        <h4>Perawatan Terbaik</h4>
                        <p>Dapatkan perawatan medis terbaik dengan teknologi canggih dan pelayanan prima.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="section about-section" id="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-6 mb-4">
                        <div class="about-count scroll-animate">
                            <h3 class="text-green">250+</h3>
                            <h6>Tempat Tidur Pasien</h6>
                        </div>
                    </div>
                    <div class="col-6 mb-4">
                        <div class="about-count scroll-animate">
                            <h3 class="text-pink">150+</h3>
                            <h6>Dokter & Perawat</h6>
                        </div>
                    </div>
                    <div class="col-6 mb-4">
                        <div class="about-count scroll-animate">
                            <h3 class="text-primary">50K+</h3>
                            <h6>Pasien Bahagia</h6>
                        </div>
                    </div>
                    <div class="col-6 mb-4">
                        <div class="about-count scroll-animate">
                            <h3 class="text-blue">25+</h3>
                            <h6>Tahun Pengalaman</h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="scroll-animate">
                    <h6 class="section-subtitle">Tentang Kami</h6>
                    <h2 class="section-title">Rumah Sakit Terpercaya dengan Pelayanan Prima</h2>
                    <p class="section-description text-start">
                        Dengan pengalaman lebih dari 25 tahun, Rumah Sakit Daha Husada telah menjadi pilihan utama
                        masyarakat untuk mendapatkan pelayanan kesehatan terbaik. Kami dilengkapi dengan teknologi medis
                        terdepan dan tenaga medis yang berpengalaman.
                    </p>
                    <a href="#appointment" class="btn btn-primary">
                        <i class="fas fa-calendar-check me-2"></i>Book Appointment
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="section service-section" id="services">
    <div class="container">
        <div class="text-center mb-5">
            <h6 class="section-subtitle text-white">Layanan Kami</h6>
            <h2 class="section-title text-white scroll-animate">Kami Menawarkan Berbagai Layanan untuk Kesehatan Anda
            </h2>
        </div>

        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4 scroll-animate">
                <div class="service-card">
                    <div class="service-icon mx-auto">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h4>Kardiologi</h4>
                    <p>Pemeriksaan dan perawatan jantung oleh ahli kardiologi profesional dengan peralatan mutakhir.</p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4 scroll-animate">
                <div class="service-card">
                    <div class="service-icon mx-auto">
                        <i class="fas fa-brain"></i>
                    </div>
                    <h4>Neurologi</h4>
                    <p>Pelayanan untuk kelainan sistem saraf dengan teknologi dan tim medis yang berpengalaman.</p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4 scroll-animate">
                <div class="service-card">
                    <div class="service-icon mx-auto">
                        <i class="fas fa-stethoscope"></i>
                    </div>
                    <h4>Rawat Jalan</h4>
                    <p>Pelayanan rawat jalan yang cepat dan efisien untuk kebutuhan medis harian Anda.</p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4 scroll-animate">
                <div class="service-card">
                    <div class="service-icon mx-auto">
                        <i class="fas fa-ambulance"></i>
                    </div>
                    <h4>Gawat Darurat</h4>
                    <p>Layanan darurat 24/7 untuk menangani berbagai kasus medis mendesak dan kritis.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Interactive Map -->
<section id="map" class="section py-5 bg-light">
    <div class="container text-center">
        <h2 class="section-title mb-4 fw-bold">Lokasi Kami</h2>
        <p class="mb-4 text-muted">Kunjungi Rumah Sakit Daha Husada melalui peta interaktif di bawah ini.</p>
        <div class="map-responsive shadow rounded overflow-hidden" style="border: 2px solid #10b981;">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.132245550842!2d111.9970426!3d-7.8109804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7857159a94a805%3A0x7c99d01a424a2de3!2sRSUD%20DAHA%20HUSADA!5e0!3m2!1sen!2sid!4v1721800000000!5m2!1sen!2sid"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section id="faq" class="section py-5 bg-light">
    <div class="container">
        <h2 class="section-title text-center mb-4 fw-bold text-success">Pertanyaan yang Sering Diajukan</h2>
        <div class="accordion" id="faqAccordion">

            <!-- Pertanyaan 1 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faq1">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1"
                        aria-expanded="true" aria-controls="collapse1">
                        Jam berapa layanan kunjungan pasien dibuka?
                    </button>
                </h2>
                <div id="collapse1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Kunjungan pasien dibuka setiap hari dari pukul <strong>09.00 hingga 20.00 WIB</strong>, dengan
                        tetap memperhatikan protokol kesehatan.
                    </div>
                </div>
            </div>

            <!-- Pertanyaan 2 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faq2">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                        Apakah rumah sakit menerima BPJS dan asuransi lainnya?
                    </button>
                </h2>
                <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Ya, kami menerima <strong>BPJS Kesehatan</strong> dan berbagai jenis asuransi swasta yang telah
                        bekerja sama dengan rumah sakit kami.
                    </div>
                </div>
            </div>

            <!-- Pertanyaan 3 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faq3">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                        Bagaimana cara mendaftar layanan rawat jalan?
                    </button>
                </h2>
                <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Pendaftaran dapat dilakukan secara langsung di bagian pendaftaran atau melalui sistem
                        <strong>pendaftaran online</strong> di website resmi kami.
                    </div>
                </div>
            </div>

            <!-- Pertanyaan 4 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faq4">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                        Apakah tersedia layanan IGD 24 jam?
                    </button>
                </h2>
                <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Ya, Instalasi Gawat Darurat (IGD) Rumah Sakit Daha Husada buka <strong>24 jam setiap
                            hari</strong>, termasuk hari libur nasional.
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>



<!-- Footer -->
<footer class="text-center py-4 bg-dark text-white">
    <div class="container">
        <p class="mb-0">&copy; 2025 Rumah Sakit Daha Husada. Semua Hak Dilindungi.</p>
    </div>
</footer>

<script>
    // Navbar scroll effect
    window.addEventListener('scroll', function () {
        const navbar = document.querySelector('.hospital-navbar');
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Add active state to current page
    document.addEventListener('DOMContentLoaded', function () {
        const currentPath = window.location.pathname;
        const navLinks = document.querySelectorAll('.nav-link');

        navLinks.forEach(link => {
            if (link.getAttribute('href') === currentPath) {
                link.classList.add('active');
            }
        });
    });
</script>

<script>
    // Scroll Animation
    const scrollElements = document.querySelectorAll(".scroll-animate");

    const elementInView = (el, offset = 100) => {
        const elementTop = el.getBoundingClientRect().top;
        return (
            elementTop <= (window.innerHeight || document.documentElement.clientHeight) - offset
        );
    };

    const displayScrollElement = (element) => {
        element.classList.add("active");
    };

    const hideScrollElement = (element) => {
        element.classList.remove("active");
    };

    const handleScrollAnimation = () => {
        scrollElements.forEach((el) => {
            if (elementInView(el, 100)) {
                displayScrollElement(el);
            } else {
                hideScrollElement(el);
            }
        });
    };

    window.addEventListener("scroll", () => {
        handleScrollAnimation();
    });

    // Trigger once on load
    handleScrollAnimation();
</script>
</body>

</html>