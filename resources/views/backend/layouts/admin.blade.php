<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard')</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    @stack('styles')
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
            top: 64px; /* header ki height */
            left: 0;
            width: 220px;
            height: calc(100vh - 64px);
            background: #181f2a;
            overflow-y: auto;
            overflow-x: hidden;
            /* Hide scrollbar for Chrome, Safari and Opera */
            scrollbar-width: none; /* Firefox */
            -ms-overflow-style: none;  /* IE and Edge */
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
        .sidebar .fw-bold.text-success {
            color: #00fff7 !important;
            letter-spacing: 1px;
            padding: 10px 20px;
        }
        .dashboard-card {
            background: #181f2a;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            color: #fff;
            border: 1px solid #00fff7;
            box-shadow: 0 4px 12px #00000033;
        }
        .main-content {
            margin-left: 220px;
            padding: 84px 24px 24px 24px; /* header + spacing */
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
                padding-top: 84px;
            }
        }
        /* Google Translate dropdown custom style */
        #google_translate_element {
            position: relative;
            z-index: 1100;
        }
        .goog-te-menu-frame.skiptranslate {
            max-width: 320px !important;
            width: 100% !important;
            left: 50% !important;
            transform: translateX(-50%) !important;
            top: 50px !important;
            border-radius: 8px !important;
            box-shadow: 0 4px 24px #0008 !important;
            border: none !important;
            background: #181f2a !important;
        }
        .goog-te-menu2 {
            max-height: 300px !important;
            overflow-y: auto !important;
            border-radius: 8px !importan;
            background: #181f2a !important;
        }
        .goog-te-menu2-item div, .goog-te-menu2-item:link, .goog-te-menu2-item:visited, .goog-te-menu2-item:active {
            color: #fff !important;
        }
        .goog-te-menu2-item-selected div, .goog-te-menu2-item-selected:link, .goog-te-menu2-item-selected:visited, .goog-te-menu2-item-selected:active {
            color: #00fff7 !important;
        }
        .goog-te-menu2-item:hover {
            background: #101820 !important;
        }
        .goog-te-menu2 table {
            width: 100% !important;
        }
        .goog-te-gadget-simple {
            background: #101820 !important;
            color: #00fff7 !important;
            border-radius: 6px !important;
            padding: 4px 12px !important;
            border: 1px solid #00fff7 !important;
            cursor: pointer !important;
            font-weight: 500;
        }
        .goog-te-gadget-simple .goog-te-menu-value {
            color: #00fff7 !important;
        }
        .goog-te-gadget-icon {
            display: none !important;
        }
        .goog-te-gadget span, .goog-te-gadget-simple span:not(.goog-te-menu-value span) {
            display: none !important;
        }
        .goog-te-gadget-simple .goog-te-menu-value span {
            display: inline !important;
        }
        .dropdown-toggle::after {
            display: none !important;
        }
    </style>
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
        <!-- Center: Google Translate -->
        <div class="d-flex flex-column align-items-center" style="min-width:220px;">
            <div id="google_translate_element"></div>
            <div style="font-size:13px; color:#888; margin-top:2px; letter-spacing:0.5px; font-weight:400; display:flex; align-items:center; justify-content:center;">
                <span style="color:#888; font-weight:400;">Powered by</span>
                <img src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_42x16dp.png" alt="Google" style="height:15px; vertical-align:middle; margin:0 4px 1px 6px;">
                <span style="font-weight:600; color:#888;">Translate</span>
            </div>
        </div>
        <!-- Right: Settings + User -->
        <div class="d-flex align-items-center">
            <i class="bi bi-gear" style="font-size:1.5rem; color:#fff; margin-right:12px;"></i>
            <span style="font-size:1.1rem; color:#fff; margin-right:8px;">SETTINGS</span>
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="User" style="height:32px; width:32px; border-radius:50%; object-fit:cover; margin-right:8px;">
                    <span style="font-size:1.1rem; color:#fff;">DEMO</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown" style="min-width: 180px;">
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <i class="bi bi-person-circle me-2" style="color:#00fff7; font-size:1.2rem;"></i> <span>PROFILE</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <i class="bi bi-gear me-2" style="color:#00fff7; font-size:1.2rem;"></i> <span>SECURITY</span>
                        </a>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <i class="bi bi-power me-2" style="color:#00fff7; font-size:1.2rem;"></i> <span>LOGOUT</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Google Translate Widget Script -->
    <script type="text/javascript">
      function googleTranslateElementInit() {
        new google.translate.TranslateElement({
          pageLanguage: 'en',
          layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL
        }, 'google_translate_element');
      }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script>
      // Close Google Translate dropdown when clicking outside
      document.addEventListener('click', function(e) {
        var frame = document.querySelector('.goog-te-menu-frame.skiptranslate');
        if (frame) {
          var box = frame;
          if (!box.contains(e.target) && !document.getElementById('google_translate_element').contains(e.target)) {
            frame.style.display = 'none';
          }
        }
      });
      // Optional: Reopen on click
      document.getElementById('google_translate_element').addEventListener('click', function() {
        var frame = document.querySelector('.goog-te-menu-frame.skiptranslate');
        if (frame) {
          frame.style.display = 'block';
        }
      });
    </script>
    <!-- Sidebar -->
    <nav class="sidebar py-4">
        <div class="position-sticky">
            <ul class="nav flex-column">
                <!-- Dashboard with icon -->
                <li class="nav-item mb-2">
                    <a class="nav-link d-flex align-items-center" href="{{ route('admin-dashboard') }}">
                        <i class="bi bi-cpu me-2"></i>Dashboard
                    </a>
                </li>
                <!-- Add New User with icon -->
                <li class="nav-item mb-2">
                    <a class="nav-link d-flex align-items-center" href="{{ route('admin-register') }}">
                        <i class="bi bi-person-plus me-2"></i>Add New User
                    </a>
                </li>
                <!-- Support with icon -->
                <li class="nav-item mb-2">
                    <a class="nav-link d-flex align-items-center" href="#">
                        <i class="bi bi-envelope me-2"></i>Support
                    </a>
                </li>
                <!-- Package Details with icon -->
                <li class="nav-item mb-2">
                    <a class="nav-link d-flex align-items-center {{ request()->routeIs('admin-package-details') ? 'active' : '' }}" href="{{ route('admin-package-details') }}">
                        <i class="bi bi-code-slash me-2"></i>Package Details
                    </a>
                </li>
                <!-- Level Settings with icon -->
                <li class="nav-item mb-2">
                    <a class="nav-link d-flex align-items-center" href="#">
                        <i class="bi bi-bar-chart-steps me-2"></i>Level Settings
                    </a>
                </li>
                <li class="nav-item mt-4 mb-2">
                    <span class="fw-bold text-success">FUNDS | ACTIVATIONS</span>
                </li>
                <!-- Fund Requests Dropdown -->
                <li class="nav-item mb-2">
                    <a class="nav-link d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#fundRequestsMenu" role="button" aria-expanded="false" aria-controls="fundRequestsMenu">
                        <span><i class="bi bi-graph-up-arrow me-2"></i>Fund Requests</span>
                        <i class="bi bi-chevron-down"></i>
                    </a>
                    <div class="collapse submenu" id="fundRequestsMenu">
                        <a class="nav-link" href="#">All Requests</a>
                        <a class="nav-link" href="#">Pending</a>
                        <a class="nav-link" href="#">Approved</a>
                    </div>
                </li>
                <!-- Fund Deduction Dropdown -->
                <li class="nav-item mb-2">
                    <a class="nav-link d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#fundDeductionMenu" role="button" aria-expanded="false" aria-controls="fundDeductionMenu">
                        <span><i class="bi bi-slash-circle me-2"></i>Fund Deduction</span>
                        <i class="bi bi-chevron-down"></i>
                    </a>
                    <div class="collapse submenu" id="fundDeductionMenu">
                        <a class="nav-link" href="#">All Deductions</a>
                        <a class="nav-link" href="#">Manual Deduction</a>
                    </div>
                </li>
                <!-- Fund Transfer Dropdown -->
                <li class="nav-item mb-2">
                    <a class="nav-link d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#fundTransferMenu" role="button" aria-expanded="false" aria-controls="fundTransferMenu">
                        <span><i class="bi bi-cash-coin me-2"></i>Fund Transfer</span>
                        <i class="bi bi-chevron-down"></i>
                    </a>
                    <div class="collapse submenu" id="fundTransferMenu">
                        <a class="nav-link" href="#">Transfer History</a>
                        <a class="nav-link" href="#">New Transfer</a>
                    </div>
                </li>
                <!-- Activation Dropdown -->
                <li class="nav-item mb-2">
                    <a class="nav-link d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#activationMenu" role="button" aria-expanded="false" aria-controls="activationMenu">
                        <span><i class="bi bi-box-arrow-in-right me-2"></i>Activation</span>
                        <i class="bi bi-chevron-down"></i>
                    </a>
                    <div class="collapse submenu" id="activationMenu">
                        <a class="nav-link" href="#">All Activations</a>
                        <a class="nav-link" href="#">New Activation</a>
                    </div>
                </li>
                <li class="nav-item mt-4 mb-2">
                    <span class="fw-bold text-success">TEAM | NETWORK</span>
                </li>
                <!-- Team Dropdown -->
                <li class="nav-item mb-2">
                    <a class="nav-link d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#teamMenu" role="button" aria-expanded="false" aria-controls="teamMenu">
                        <span><i class="bi bi-people-fill me-2"></i>Team</span>
                        <i class="bi bi-chevron-down"></i>
                    </a>
                    <div class="collapse submenu" id="teamMenu">
                        <a class="nav-link" href="#">All Members</a>
                        <a class="nav-link" href="#">Add Member</a>
                    </div>
                </li>
                <!-- Network Dropdown -->
                <li class="nav-item mb-2">
                    <a class="nav-link d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#networkMenu" role="button" aria-expanded="false" aria-controls="networkMenu">
                        <span><i class="bi bi-rss me-2"></i>Network</span>
                        <i class="bi bi-chevron-down"></i>
                    </a>
                    <div class="collapse submenu" id="networkMenu">
                        <a class="nav-link" href="#">Network Tree</a>
                        <a class="nav-link" href="#">Directs</a>
                    </div>
                </li>
                <li class="nav-item mt-4 mb-2">
                    <span class="fw-bold text-success">WALLETS | EARNINGS | PAYOUTS</span>
                </li>
                <!-- Earnings Dropdown -->
                <li class="nav-item mb-2">
                    <a class="nav-link d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#earningsMenu" role="button" aria-expanded="false" aria-controls="earningsMenu">
                        <span><i class="bi bi-trophy me-2"></i>Earnings</span>
                        <i class="bi bi-chevron-down"></i>
                    </a>
                    <div class="collapse submenu" id="earningsMenu">
                        <a class="nav-link" href="#">All Earnings</a>
                        <a class="nav-link" href="#">Bonuses</a>
                    </div>
                </li>
                <!-- Wallets Details Dropdown -->
                <li class="nav-item mb-2">
                    <a class="nav-link d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#walletsMenu" role="button" aria-expanded="false" aria-controls="walletsMenu">
                        <span><i class="bi bi-lock me-2"></i>Wallets Details</span>
                        <i class="bi bi-chevron-down"></i>
                    </a>
                    <div class="collapse submenu" id="walletsMenu">
                        <a class="nav-link" href="#">Wallet Summary</a>
                        <a class="nav-link" href="#">Add Wallet</a>
                    </div>
                </li>
                <!-- Payout Details Dropdown -->
                <li class="nav-item mb-2">
                    <a class="nav-link d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#payoutMenu" role="button" aria-expanded="false" aria-controls="payoutMenu">
                        <span><i class="bi bi-cash-stack me-2"></i>Payout Details</span>
                        <i class="bi bi-chevron-down"></i>
                    </a>
                    <div class="collapse submenu" id="payoutMenu">
                        <a class="nav-link" href="#">All Payouts</a>
                        <a class="nav-link" href="#">Request Payout</a>
                    </div>
                </li>
                <li class="nav-item mt-4 mb-2">
                    <span class="fw-bold text-success">SETTINGS</span>
                </li>
                <!-- System Controls Dropdown -->
                <li class="nav-item mb-2">
                    <a class="nav-link d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#systemMenu" role="button" aria-expanded="false" aria-controls="systemMenu">
                        <span><i class="bi bi-gear me-2"></i>System Controls</span>
                        <i class="bi bi-chevron-down"></i>
                    </a>
                    <div class="collapse submenu" id="systemMenu">
                        <a class="nav-link" href="#">Settings</a>
                        <a class="nav-link" href="#">Logs</a>
                    </div>
                </li>
                <li class="nav-item mt-4">
                    <a class="btn btn-outline-info w-100" href="#"><i class="bi bi-box-arrow-right me-2"></i>Sign Out</a>
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
