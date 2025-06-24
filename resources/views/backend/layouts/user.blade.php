<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'User Dashboard')</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background: #101820;
            color: #fff;
            margin: 0;
            padding: 0;
        }
        .header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1030;
            background: #181f2a;
            padding: 10px 20px;
            height: 64px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #00fff7;
        }
        .header h4 {
            margin: 0;
            color: #00fff7;
            letter-spacing: 1px;
        }
        .header .badge.bg-info {
            background: #00fff7 !important;
            color: #181f2a;
        }
        .sidebar {
            position: fixed;
            top: 64px;
            left: 0;
            width: 220px;
            height: calc(100vh - 64px);
            background: #181f2a;
            overflow-y: auto;
            overflow-x: hidden;
            scrollbar-width: none;
            -ms-overflow-style: none;
            border-right: 1px solid #00fff7;
        }
        .sidebar::-webkit-scrollbar {
            display: none;
        }
        .sidebar .nav-link {
            color: #00fff7;
            cursor: pointer;
            font-weight: 500;
            letter-spacing: 0.5px;
            padding: 12px 20px;
            transition: color 0.2s, background 0.2s;
            border-left: 4px solid transparent;
        }
        .sidebar .nav-link .bi {
             color: #00fff7;
             transition: color 0.2s;
        }
        .sidebar .nav-link.active, .sidebar .nav-link:hover {
            background: #101820;
            color: #fff;
            border-left: 4px solid #00fff7;
        }
        .sidebar .nav-link.active .bi, .sidebar .nav-link:hover .bi {
            color: #fff;
        }
        .sidebar .submenu {
            background: #1a232e;
            padding-left: 1.5rem;
        }
        .sidebar .submenu .nav-link {
            color: #b2f7ef;
            font-size: 0.95em;
            border-left: none;
            padding: 8px 20px;
        }
        .sidebar .submenu .nav-link:hover {
            color: #fff;
            background: #101820;
        }
        .sidebar .submenu .nav-link.active {
            color: #fff;
            background: #101820;
        }
        .sidebar .fw-bold.text-success {
            color: #00fff7 !important;
            letter-spacing: 1px;
            padding: 10px 20px;
        }
        .main-content {
            margin-left: 220px;
            padding: 74px 24px 24px 24px;
            min-height: 100vh;
            background-color: #101820;
            background-image:
                linear-gradient(rgba(0, 255, 247, 0.05) 1px, transparent 1px),
                linear-gradient(90deg, rgba(0, 255, 247, 0.05) 1px, transparent 1px);
            background-size: 40px 40px;
            z-index: 1;
        }
        .main-content.full-width {
            margin-left: 0;
        }
        .bi {
            font-size: 1.2em;
            vertical-align: -0.125em;
        }
        .btn-outline-info {
            border-color: #00fff7;
            color: #00fff7;
        }
        .btn-outline-info:hover, .btn-outline-info:focus {
            background: #00fff7;
            color: #181f2a;
        }
        @media (max-width: 991.98px) {
            .sidebar {
                width: 100%;
                position: static;
                height: auto;
            }
            .main-content {
                margin-left: 0;
                padding-top: 74px;
            }
        }
    </style>
    @stack('styles')
</head>
<body>
    <!-- Header -->
    <div class="header d-flex align-items-center justify-content-between">
        <!-- Left: Hamburger + Logo -->
        <div class="d-flex align-items-center">
            <button class="btn p-0 me-3 d-md-none" id="sidebarToggle" style="background:transparent;border:none;outline:none;">
                <i class="bi bi-list" style="font-size:2rem;"></i>
            </button>
            <img src="https://i.ibb.co/6bQ6Q0P/location-logo.png" alt="Logo" style="height:32px; margin-right:8px;">
            <span style="font-weight:700; letter-spacing:1px; color:#fff; font-size:1.2rem;">COMPANY</span>
            <span style="font-size:0.8rem; color:#b2f7ef; margin-left:6px;">Your Logo Here</span>
        </div>
        <!-- Center: Social Icons (as in screenshot) -->
        <div class="d-flex align-items-center gap-2">
            <a href="#" class="btn btn-sm" style="background:#4267B2;"><i class="bi bi-facebook" style="color:#fff;"></i></a>
            <a href="#" class="btn btn-sm" style="background:#8a3ab9;"><i class="bi bi-instagram" style="color:#fff;"></i></a>
            <a href="#" class="btn btn-sm" style="background:#1da1f2;"><i class="bi bi-twitter" style="color:#fff;"></i></a>
            <a href="#" class="btn btn-sm" style="background:#ff0000;"><i class="bi bi-youtube" style="color:#fff;"></i></a>
        </div>
        <!-- Right: User -->
        <div class="d-flex align-items-center">
            <span style="font-size:1.1rem; color:#fff; margin-right:8px;">VISHAL SAIN</span>
            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="User" style="height:32px; width:32px; border-radius:50%; object-fit:cover; margin-right:8px;">
        </div>
    </div>
    <!-- Sidebar -->
    <nav class="sidebar py-4">
        <div class="position-sticky">
            <ul class="nav flex-column">
                <li class="nav-item mb-2">
                    <a class="nav-link d-flex align-items-center" href="#">
                        <i class="bi bi-speedometer2 me-2"></i>DASHBOARD
                    </a>
                </li>
                <li class="nav-item mb-2">
                    <a class="nav-link d-flex align-items-center" href="#">
                        <i class="bi bi-person-plus me-2"></i>ADD NEW USER
                    </a>
                </li>
                <li class="nav-item mb-2">
                    <a class="nav-link d-flex align-items-center" href="#">
                        <i class="bi bi-question-circle me-2"></i>HELP
                    </a>
                </li>
                <li class="nav-item mb-2">
                    <a class="nav-link d-flex align-items-center" href="#">
                        <i class="bi bi-cash-stack me-2"></i>REQUEST FUND
                    </a>
                </li>
                <li class="nav-item mb-2">
                    <a class="nav-link d-flex align-items-center" href="#">
                        <i class="bi bi-lightning me-2"></i>ACTIVATION
                    </a>
                </li>
                <li class="nav-item mb-2">
                    <a class="nav-link d-flex align-items-center" href="#">
                        <i class="bi bi-diagram-3 me-2"></i>NETWORK
                    </a>
                </li>
                <li class="nav-item mb-2">
                    <a class="nav-link d-flex align-items-center" href="#">
                        <i class="bi bi-currency-dollar me-2"></i>EARNINGS
                    </a>
                </li>
                <li class="nav-item mb-2">
                    <a class="nav-link d-flex align-items-center" href="#">
                        <i class="bi bi-wallet2 me-2"></i>WALLET DETAILS
                    </a>
                </li>
                <li class="nav-item mb-2">
                    <a class="nav-link d-flex align-items-center" href="#">
                        <i class="bi bi-credit-card me-2"></i>PAYOUT DETAILS
                    </a>
                </li>
                <li class="nav-item mb-2">
                    <a class="nav-link d-flex align-items-center" href="#">
                        <i class="bi bi-gear me-2"></i>MY SETTINGS
                    </a>
                </li>
                <li class="nav-item mt-4">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                    <button class="btn btn-outline-info w-100"><i class="bi bi-box-arrow-right me-2"></i>Sign Out</button>
                </form>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Main Content -->
    <main class="main-content">
        @yield('content')
    </main>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>
