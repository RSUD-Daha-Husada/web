 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern RS Daha Husada Navbar</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --hospital-primary: #0066cc;
            --hospital-secondary: #00b8d4;
            --hospital-success: #00c853;
            --hospital-white: #ffffff;
            --hospital-light: #f8f9fa;
            --hospital-dark: #2c3e50;
            --shadow-subtle: 0 2px 20px rgba(0, 0, 0, 0.08);
            --shadow-hover: 0 4px 25px rgba(0, 0, 0, 0.12);
        }

        .hospital-navbar {
            background: linear-gradient(135deg, var(--hospital-white) 0%, #f1f8ff 100%);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(0, 102, 204, 0.1);
            box-shadow: var(--shadow-subtle);
            transition: all 0.3s ease;
            position: sticky;
            top: 0;
            z-index: 1050;
        }

        .hospital-navbar.scrolled {
            box-shadow: var(--shadow-hover);
            background: rgba(255, 255, 255, 0.95);
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
            color: var(--hospital-primary);
            transition: transform 0.3s ease;
        }

        .navbar-brand:hover {
            transform: scale(1.05);
            color: var(--hospital-secondary);
        }

        .navbar-nav .nav-link {
            font-weight: 500;
            color: var(--hospital-dark);
            padding: 0.8rem 1rem;
            margin: 0 0.2rem;
            border-radius: 8px;
            transition: all 0.3s ease;
            position: relative;
            text-decoration: none;
        }

        .navbar-nav .nav-link::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 2px;
            background: var(--hospital-primary);
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }

        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link.active {
            color: var(--hospital-primary);
            background: rgba(0, 102, 204, 0.05);
            transform: translateY(-1px);
        }

        .navbar-nav .nav-link:hover::before,
        .navbar-nav .nav-link.active::before {
            width: 60%;
        }

        .dropdown-menu {
            border: none;
            box-shadow: var(--shadow-hover);
            border-radius: 12px;
            padding: 0.5rem 0;
            margin-top: 0.5rem;
            background: var(--hospital-white);
            animation: slideDown 0.3s ease;
            min-width: 220px;
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .dropdown-item {
            padding: 0.7rem 1.2rem;
            transition: all 0.2s ease;
            border-left: 3px solid transparent;
            font-weight: 400;
        }

        .dropdown-item:hover {
            background: rgba(0, 102, 204, 0.05);
            border-left: 3px solid var(--hospital-primary);
            color: var(--hospital-primary);
        }

        .btn-primary-custom {
            background: linear-gradient(135deg, var(--hospital-primary) 0%, var(--hospital-secondary) 100%);
            border: none;
            padding: 0.7rem 1.5rem;
            border-radius: 25px;
            font-weight: 600;
            color: white;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            box-shadow: 0 4px 15px rgba(0, 102, 204, 0.3);
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .btn-primary-custom:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 25px rgba(0, 102, 204, 0.4);
            background: linear-gradient(135deg, #0056b3 0%, #0097a7 100%);
            color: white;
        }

        .btn-success-custom {
            background: linear-gradient(135deg, var(--hospital-success) 0%, #4caf50 100%);
            border: none;
            padding: 0.7rem 1.5rem;
            border-radius: 25px;
            font-weight: 500;
            color: white;
            box-shadow: 0 4px 15px rgba(0, 200, 83, 0.3);
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .btn-success-custom:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 25px rgba(0, 200, 83, 0.4);
            background: linear-gradient(135deg, #00a84a 0%, #43a047 100%);
            color: white;
        }

        .navbar-toggler {
            border: none;
            padding: 4px 8px;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .navbar-toggler:focus {
            box-shadow: 0 0 0 0.2rem rgba(0, 102, 204, 0.25);
        }

        .nav-icon {
            margin-right: 0.5rem;
            font-size: 0.9rem;
        }

        .external-link::after {
            content: '\f35d';
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
            margin-left: 0.5rem;
            font-size: 0.8rem;
        }

        @media (max-width: 992px) {
            .navbar-nav {
                background: var(--hospital-white);
                border-radius: 12px;
                padding: 1rem;
                margin-top: 1rem;
                box-shadow: var(--shadow-subtle);
            }
            
            .navbar-nav .nav-link {
                margin: 0.2rem 0;
            }
            
            .header-btn-grp {
                margin-top: 1rem;
                text-align: center;
            }
        }

        /* Additional styling for better visual hierarchy */
        .dropdown-toggle::after {
            margin-left: 0.5rem;
        }

        .navbar-nav .nav-item:last-child .nav-link {
            margin-right: 0;
        }

        .container-fluid {
            padding-left: 1.5rem;
            padding-right: 1.5rem;
        }
    </style>
</head>
<body>
    <!-- Modern RS Daha Husada Navbar -->
    <nav class="hospital-navbar navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <div class="col-1">
                <a href="{{ url('/') }}" class="navbar-brand">
                    <img src="{{ asset('web/img/logo.png') }}" 
                         alt="Logo Rumah Sakit" 
                         class="img-fluid logo-hospital"
                         style="width: 5rem; height: 5rem;" />
                </a>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('front') }}">
                            <i class="fas fa-home nav-icon"></i>Beranda
                        </a>
                    </li>

                    <!-- Profil Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="profilDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-building nav-icon"></i>Profil
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="profilDropdown">
                            <li><a class="dropdown-item" href="{{ route('aboutUs') }}" class="nav-link {{ Request::is('about-us') ? 'active' : '' }}"><i class="fas fa-info-circle me-2"></i>Tentang Kami</a></li>
                            <li><a class="dropdown-item" href="{{ route('aboutUs') }}" class="nav-link {{ Request::is('about-us') ? 'active' : '' }}"><i class="fas fa-eye me-2"></i>Visi & Misi</a></li>
                            <li><a class="dropdown-item" href="{{ route('aboutUs') }}" class="nav-link {{ Request::is('about-us') ? 'active' : '' }}"><i class="fas fa-sitemap me-2"></i>Struktur Organisasi</a></li>
                            <li><a class="dropdown-item" href="{{ route('aboutUs') }}" class="nav-link {{ Request::is('about-us') ? 'active' : '' }}"><i class="fas fa-tasks me-2"></i>Tugas Pokok & Fungsi</a></li>
                            <li><a class="dropdown-item" href="{{ route('aboutUs') }}" class="nav-link {{ Request::is('about-us') ? 'active' : '' }}"><i class="fas fa-users me-2"></i>Direktur & Jajaran</a></li>
                            <li><a class="dropdown-item" href="{{ route('aboutUs') }}" class="nav-link {{ Request::is('about-us') ? 'active' : '' }}"><i class="fas fa-map-marker-alt me-2"></i>Alamat & Lokasi</a></li>
                        </ul>
                    </li>

                    <!-- Pelayanan Medik Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="medikDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-stethoscope nav-icon"></i>Pelayanan Medik
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="medikDropdown">
                            <li><a class="dropdown-item" href="#"><i class="fas fa-ambulance me-2"></i>IGD</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-clinic-medical me-2"></i>Rawat Jalan</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-bed me-2"></i>Rawat Inap Reguler</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-procedures me-2"></i>Rawat Inap MH</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-heart me-2"></i>Rawat Inap Intensif</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-user-md me-2"></i>Pelayanan Bedah</a></li>
                        </ul>
                    </li>

                    <!-- Penunjang Medik Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="penunjangDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-microscope nav-icon"></i>Penunjang Medik
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="penunjangDropdown">
                            <li><a class="dropdown-item" href="#"><i class="fas fa-vial me-2"></i>Lab Patologi Klinik</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-x-ray me-2"></i>Radiologi</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-dumbbell me-2"></i>Rehabilitasi Medik</a></li>
                        </ul>
                    </li>

                    <!-- Informasi Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="informasiDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-info-circle nav-icon"></i>Informasi
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="informasiDropdown">
                            <li><a class="dropdown-item" href="#"><i class="fas fa-calendar-plus me-2"></i>Pendaftaran Online</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-bed me-2"></i>Ketersediaan Bed</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-money-bill me-2"></i>Tarif Dasar</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-user-doctor me-2"></i>Dokter</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-newspaper me-2"></i>Artikel Kesehatan</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-bullhorn me-2"></i>Berita</a></li>
                        </ul>
                    </li>

                    <!-- PPID -->
                    <li class="nav-item">
                        <a class="nav-link external-link" href="https://ppid.rsuddahahusada.jatimprov.go.id/" target="_blank">
                            <i class="fas fa-file-alt nav-icon"></i>PPID
                        </a>
                    </li>

                    <!-- Inovasi Daha -->
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-lightbulb nav-icon"></i>Inovasi Daha
                        </a>
                    </li>

                    <!-- Pengaduan -->
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-comment-dots nav-icon"></i>Pengaduan
                        </a>
                    </li>
                </ul>
                
                <!-- Action Buttons -->
                <div class="header-btn-grp ms-lg-4 d-flex gap-2 flex-wrap">
                    <a href="#" class="btn btn-success-custom">
                        <i class="fas fa-calendar-check me-2"></i>Daftar Online
                    </a>
                    <a href="#" class="btn btn-primary-custom">
                        <i class="fas fa-phone me-2"></i>Hubungi Kami
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
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
        document.addEventListener('DOMContentLoaded', function() {
            const currentPath = window.location.pathname;
            const navLinks = document.querySelectorAll('.nav-link');
            
            navLinks.forEach(link => {
                if (link.getAttribute('href') === currentPath) {
                    link.classList.add('active');
                }
            });
        });
    </script>
</body>
</html>