<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DemoToken - Futuristic Demo</title>
  <!-- Bootstrap 5 CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
  <style>
  :root {
    --primary-color: #00eaff;
    --secondary-color: #0a1833;
    --accent-color: #12244a;
    --text-color: #fff;
    --dark-bg: #0a1833;
    --card-bg: #12244acc;
  }
  
  body {
    font-family: 'Orbitron', Arial, sans-serif;
    color: var(--text-color);
    background: #101820;
    overflow-x: hidden;
    scroll-behavior: smooth;
  }

  .navbar {
    background: rgba(10,24,51,0.95) !important;
    backdrop-filter: blur(8px);
    transition: all 0.3s ease;
  }

  .navbar.scrolled {
    padding-top: 10px;
    padding-bottom: 10px;
    box-shadow: 0 4px 12px #00eaff22;
  }

  .navbar-brand {
    font-size: 2rem;
    letter-spacing: 2px;
    background: linear-gradient(90deg, var(--primary-color), #00c2d9);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    transition: all 0.3s ease;
  }

  .navbar-brand:hover {
    text-shadow: 0 0 8px #00eaff88;
  }

  .nav-link {
    color: var(--text-color) !important;
    font-weight: 500;
    margin: 0 0.5rem;
    transition: all 0.3s ease;
    position: relative;
  }

  .nav-link::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 0;
    height: 2px;
    background: var(--primary-color);
    transition: width 0.3s ease;
  }

  .nav-link:hover::after, .nav-link.active::after {
    width: 100%;
  }

  .nav-link:hover, .nav-link.active {
    color: var(--primary-color) !important;
    text-shadow: 0 0 8px #00eaff55;
  }

  .section-title {
    font-size: 2.5rem;
    color: #ffe9a7;
    margin-bottom: 40px;
    letter-spacing: 3px;
    text-align: center;
    text-shadow: 0 0 10px #ffe9a788;
    font-weight: bold;
    position: relative;
    display: inline-block;
    padding-bottom: 10px;
  }

  .section-title::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 80px;
    height: 3px;
    background: #ffe9a7;
    box-shadow: 0 0 8px #ffe9a7;
  }

  .card-modern {
    background: var(--card-bg);
    border-radius: 16px;
    box-shadow: 0 0 12px #00eaff22;
    padding: 2rem 1.5rem;
    color: var(--text-color);
    margin-bottom: 32px;
    border: none;
    transition: all 0.4s ease;
    backdrop-filter: blur(8px);
    border: 1px solid #00eaff22;
    height: 100%;
  }

  .card-modern:hover {
    box-shadow: 0 0 24px #00eaff55;
    transform: translateY(-8px) scale(1.02);
    border: 1px solid #00eaff44;
  }

  .icon-circle {
    background: #00eaff11;
    color: var(--primary-color);
    border-radius: 50%;
    width: 80px;
    height: 80px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2.2rem;
    margin: 0 auto 20px auto;
    box-shadow: 0 0 12px #00eaff33;
    transition: all 0.3s ease;
  }

  .card-modern:hover .icon-circle {
    transform: rotate(15deg) scale(1.1);
    box-shadow: 0 0 20px #00eaff66;
  }

  .about-img-modern, .feature-img, .app-img, .vision-img, .roadmap-img, .partner-img {
    box-shadow: 0 0 24px #00eaff66;
    max-width: 380px;
    border: 4px solid var(--accent-color);
    background: var(--secondary-color);
    border-radius: 24px;
    margin-bottom: 1.5rem;
    transition: all 0.4s ease;
    position: relative;
    overflow: hidden;
  }

  .about-img-modern::before, .feature-img::before, .app-img::before, 
  .vision-img::before, .roadmap-img::before, .partner-img::before {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: linear-gradient(
      to bottom right,
      rgba(0, 234, 255, 0) 0%,
      rgba(0, 234, 255, 0) 45%,
      rgba(0, 234, 255, 0.3) 50%,
      rgba(0, 234, 255, 0) 55%,
      rgba(0, 234, 255, 0) 100%
    );
    transform: rotate(30deg);
    animation: shine 4s infinite;
  }

  @keyframes shine {
    0% { transform: translateX(-100%) rotate(30deg); }
    20% { transform: translateX(100%) rotate(30deg); }
    100% { transform: translateX(100%) rotate(30deg); }
  }

  .py-6 {
    padding-top: 6rem !important;
    padding-bottom: 6rem !important;
  }

  footer {
    text-align: center;
    padding: 40px 0 30px 0;
    background: var(--secondary-color);
    color: #b0c4d8;
    font-size: 0.95rem;
    letter-spacing: 1px;
    margin-top: 40px;
    position: relative;
    overflow: hidden;
  }

  footer::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 3px;
    background: linear-gradient(90deg, transparent, var(--primary-color), transparent);
  }

  @media (max-width: 991px) {
    .about-img-modern, .feature-img, .app-img, .vision-img, .roadmap-img, .partner-img {
      max-width: 90vw;
    }
    
    .section-title {
      font-size: 2rem;
    }
  }

  /* Improved Neon Button */
  .neon-btn {
    background: transparent;
    color: var(--primary-color);
    font-weight: bold;
    padding: 0.85rem 2rem;
    border: 2px solid var(--primary-color);
    border-radius: 30px;
    box-shadow: 0 0 12px #00eaff66, inset 0 0 8px #00eaff33;
    transition: all 0.3s ease;
    text-decoration: none;
    position: relative;
    overflow: hidden;
    letter-spacing: 1px;
  }

  .neon-btn::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(0, 234, 255, 0.2), transparent);
    transition: all 0.6s ease;
  }

  .neon-btn:hover {
    background: #00eaff11;
    box-shadow: 0 0 20px #00eaff99, inset 0 0 12px #00eaff55;
    text-shadow: 0 0 8px #00eaff;
  }

  .neon-btn:hover::before {
    left: 100%;
  }

  /* Floating Animation */
  .floating {
    animation: floatingAnim 4s ease-in-out infinite;
  }

  @keyframes floatingAnim {
    0%, 100% { transform: translateY(0) rotate(0deg); }
    50% { transform: translateY(-15px) rotate(2deg); }
  }

  /* Pulse Animation */
  .pulse {
    animation: pulseAnim 3s ease infinite;
  }

  @keyframes pulseAnim {
    0%, 100% { box-shadow: 0 0 12px #00eaff44; }
    50% { box-shadow: 0 0 24px #00eaff88; }
  }

  /* Section Entry Animation */
  .section-entry {
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.6s ease;
  }

  .section-entry.visible {
    opacity: 1;
    transform: translateY(0);
  }

  /* Glowing Text */
  .glow-text {
    text-shadow: 0 0 8px var(--primary-color);
  }

  /* Custom Scrollbar */
  ::-webkit-scrollbar {
    width: 10px;
  }

  ::-webkit-scrollbar-track {
    background: var(--secondary-color);
  }

  ::-webkit-scrollbar-thumb {
    background: var(--primary-color);
    border-radius: 5px;
  }

  /* Particle Background Effect */
  .particles {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
    z-index: -1;
  }

  .particle {
    position: absolute;
    background: var(--primary-color);
    border-radius: 50%;
    opacity: 0.5;
    animation: float linear infinite;
  }

  @keyframes float {
    0% { transform: translateY(0) translateX(0); }
    100% { transform: translateY(-100vh) translateX(20px); }
  }

  /* Gradient Border */
  .gradient-border {
    position: relative;
    border-radius: 16px;
  }

  .gradient-border::after {
    content: '';
    position: absolute;
    top: -2px;
    left: -2px;
    right: -2px;
    bottom: -2px;
    background: linear-gradient(45deg, var(--primary-color), #0066ff, var(--primary-color));
    border-radius: 18px;
    z-index: -1;
    opacity: 0.7;
    background-size: 200% 200%;
    animation: gradientMove 4s ease infinite;
  }

  @keyframes gradientMove {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
  }

  /* CORE FEATURES Section */
  .core-feature-card {
    position: relative;
    background: rgba(18,36,74,0.85);
    border-radius: 18px;
    border: 2px solid #fff2;
    box-shadow: 0 4px 18px 0 #00eaff18, 0 1.5px 6px 0 #0003;
    padding: 3.5rem 2.2rem 2.5rem 2.2rem;
    min-height: 480px;
    text-align: center;
    color: #fff;
    margin-bottom: 24px;
    overflow: hidden;
    transition: box-shadow 0.3s, transform 0.3s;
    backdrop-filter: blur(2px);
  }
  .core-feature-card:hover {
    box-shadow: 0 8px 32px 0 #00eaff33, 0 2px 8px 0 #0004;
    transform: translateY(-8px) scale(1.03);
  }
  .core-feature-card .icon-circle {
    background: transparent;
    border: 2px solid #fff3;
    color: #fff;
    width: 70px;
    height: 70px;
    font-size: 2.2rem;
    margin-bottom: 18px;
    margin-top: 10px;
    box-shadow: none;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .glow-tab {
    position: absolute;
    top: -12px;
    left: 50%;
    transform: translateX(-50%);
    width: 80px;
    height: 12px;
    border-radius: 0 0 16px 16px;
    box-shadow: 0 0 24px 8px;
    z-index: 2;
  }
  .tab-blue {
    background: #00eaff;
    box-shadow: 0 0 24px 8px #00eaff99;
  }
  .tab-purple {
    background: #7c3aed;
    box-shadow: 0 0 24px 8px #7c3aed99;
  }
  .tab-yellow {
    background: #ffc107;
    box-shadow: 0 0 24px 8px #ffc10799;
  }
  @media (max-width: 991px) {
    .core-feature-card {
      min-height: 0;
      padding: 2.2rem 1.2rem 1.5rem 1.2rem;
    }
  }
  .about-img-modern {
    background: transparent !important;
    box-shadow: 0 0 24px #00eaff66;
    border: 4px solid var(--accent-color);
    border-radius: 24px;
  }
  .about-img-animate {
    animation: leftRightFloat 5s ease-in-out infinite;
    will-change: transform;
  }
  @keyframes leftRightFloat {
    0%   { transform: translateX(80px); }
    20%  { transform: translateX(-50px); }
    50%  { transform: translateX(80px); }
    80%  { transform: translateX(-40px); }
    100% { transform: translateX(80px); }
  }
  .user-dropdown .dropdown-menu {
    display: none;
    position: absolute;
    right: 0;
    top: 120%;
    background: #181f2a;
    border: 1px solid #00eaff44;
    border-radius: 12px;
    box-shadow: 0 8px 32px #00eaff22;
    min-width: 180px;
    z-index: 1000;
  }
  .user-dropdown.show .dropdown-menu {
    display: block;
  }
  </style>
</head>
<body>
  <!-- Particle Background -->
  <div class="particles" id="particles"></div>

  <!-- Header -->
  <nav class="navbar navbar-expand-lg navbar-dark py-3 fixed-top" id="navbar">
    <div class="container-fluid">
      <a class="navbar-brand d-flex align-items-center" href="#">
        <img src="images/ball2.png" alt="Logo" class="me-2 floating pulse" style="border-radius:12px; width:48px; height:48px;" />
        DEMO TOKEN
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link active" href="#about">About</a></li>
          <li class="nav-item"><a class="nav-link" href="#features">Features</a></li>
          <li class="nav-item"><a class="nav-link" href="#application">Application</a></li>
          <li class="nav-item"><a class="nav-link" href="#vision">Vision</a></li>
          <li class="nav-item"><a class="nav-link" href="#roadmap">Roadmap</a></li>
          <li class="nav-item"><a class="nav-link" href="#partners">Partners</a></li>
        </ul>
        <!-- User Icon with Dropdown for Login/Register -->
        <div class="nav-item dropdown user-dropdown ms-3">
          <a href="#" class="nav-link p-0" id="userDropdown" role="button">
            <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="User" style="width:36px; height:36px; border-radius:50%; box-shadow:0 0 8px #00eaff88;">
          </a>
          <div class="dropdown-menu dropdown-menu-end user-dropdown-menu p-3 mt-2" aria-labelledby="userDropdown">
            <a href="#" class="btn btn-outline-info w-100 mb-2">Login</a>
            <a href="#" class="btn btn-outline-info w-100">Register</a>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <!-- Banner/Hero Section -->
  <section id="banner" class="py-6" style="background: linear-gradient(120deg, var(--secondary-color) 60%, var(--accent-color) 100%); min-height: 100vh; display: flex; align-items: center; position: relative; overflow: hidden;">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-6 text-center text-lg-start mb-4 mb-lg-0">
          <h1 class="display-3 fw-bold mb-4 animate__animated animate__fadeInDown" style="line-height:1.2;">Welcome to <span class="glow-text" style="color: var(--primary-color);">DemoToken</span></h1>
          <p class="lead mb-4 animate__animated animate__fadeInLeft animate__delay-1s" style="font-size:1.4rem; color: #b0c4d8;">The future of AI-powered cognitive platforms. Experience next-level intelligence, automation, and security.</p>
          <div class="d-flex gap-3 animate__animated animate__fadeInUp animate__delay-2s">
            <a href="#about" class="btn neon-btn">Get Started</a>
            <a href="#features" class="btn neon-btn" style="color: #fff; border-color: #fff; box-shadow: 0 0 12px #ffffff66, inset 0 0 8px #ffffff33;">Learn More</a>
          </div>
        </div>
        <div class="col-lg-6 text-center">
          <div class="position-relative">
            <img src="images/ball2.png" alt="Banner" class="img-fluid floating animate__animated animate__zoomIn" style="max-width:400px; filter: drop-shadow(0 0 20px #00eaff88);" />
            <div class="position-absolute top-0 start-0 w-100 h-100" style="border-radius: 50%; background: radial-gradient(circle, var(--primary-color) 0%, transparent 70%); opacity: 0.3; animation: pulseAnim 4s ease infinite;"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section id="about" class="py-6" style="margin-top:80px;">
    <div class="container">
      <h2 class="section-title animate__animated animate__fadeInDown">ABOUT DEMOTOKEN</h2>
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-6 mb-4 mb-lg-0">
          <div class="card-modern gradient-border animate__animated animate__fadeInLeft">
            <h2 class="fw-bold mb-4" style="color: var(--primary-color);">What is DemoToken?</h2>
            <p class="mb-4" style="color: #b0c4d8; font-size:1.1rem;">DemoToken is a cutting-edge AI platform driven by <span class="fw-bold glow-text" style="color: var(--primary-color);">cognitive science</span>. It simulates human cognition to optimize human-computer interaction through intelligent decision-making and autonomous learning.</p>
            <ul class="list-unstyled" style="color: #b0c4d8;">
              <li class="mb-2"><i class="bi bi-check-circle-fill me-2" style="color: var(--primary-color);"></i> Advanced neural network architecture</li>
              <li class="mb-2"><i class="bi bi-check-circle-fill me-2" style="color: var(--primary-color);"></i> Real-time adaptive learning</li>
              <li class="mb-2"><i class="bi bi-check-circle-fill me-2" style="color: var(--primary-color);"></i> Secure blockchain integration</li>
              <li><i class="bi bi-check-circle-fill me-2" style="color: var(--primary-color);"></i> Cross-platform compatibility</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6 text-center">
          <img src="./images/robothand.png" alt="About" class="img-fluid about-img-animate" style="width: 70%;" />
        </div>
      </div>
    </div>  
  </section>

  <!-- CORE FEATURES Section -->
  <section id="features" class="py-6 bg-dark">
    <div class="container">
      <div class="section-title animate__animated animate__fadeInDown">CORE FEATURES</div>
      <div class="row g-4 justify-content-center">
        <div class="col-md-4">
          <div class="core-feature-card animate__animated animate__fadeInUp">
            <div class="glow-tab tab-blue"></div>
            <div class="icon-circle mb-3"><i class="bi bi-shield-check"></i></div>
            <h4 class="fw-bold text-white mb-3">Distinguishing feature</h4>
            <p class="text-white-50 mb-0" style="font-size:1.08rem;">Based on the theory of cognitive science, CogniToken Ai integrates deep learning and multimodal data processing technology to give systems humanistic logical reasoning and dynamic decision-making capabilities.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="core-feature-card animate__animated animate__fadeInUp animate__delay-1s">
            <div class="glow-tab tab-purple"></div>
            <div class="icon-circle mb-3"><i class="bi bi-currency-dollar"></i></div>
            <h4 class="fw-bold text-white mb-3">Scenario application</h4>
            <p class="text-white-50 mb-0" style="font-size:1.08rem;">Focusing on high-frequency rigid scenarios, CogniToken Ai transforms complex AI capabilities into ready-to-use tools. In the field of AI dialogue, support enterprises to quickly deploy intelligent customer service and virtual assistants, and the response speed is improved by more than 80%.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="core-feature-card animate__animated animate__fadeInUp animate__delay-2s">
            <div class="glow-tab tab-yellow"></div>
            <div class="icon-circle mb-3"><i class="bi bi-speedometer2"></i></div>
            <h4 class="fw-bold text-white mb-3">System description</h4>
            <p class="text-white-50 mb-0" style="font-size:1.08rem;">The system has a built-in closed-loop learning mechanism to dynamically optimize model performance by collecting user behavior data and feedback in real time. For example, the PPT generation module will adjust the recommended strategy according to the user's preferences.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- APPLICATIONS Section with Slider (Original Design, Responsive) -->
  <section id="applications" class="py-6">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <div id="app-slider-texts">
            <div class="app-slide-text" data-index="0">
              <div class="mb-2" style="color:#b0c4d8; font-size:1.1rem;">— CogniToken</div>
              <h2 class="fw-bold mb-3" style="color:#ffe9a7; font-family: 'Orbitron', Arial, sans-serif; letter-spacing:2px; font-size:2rem;">BUILD A MULTI-SCENE<br>TECHNOLOGY ALLIANCE</h2>
              <p class="text-info mb-4" style="font-size:1.15rem;">Open API interface and developer toolkit (SDK) to attract third-party developers' cognitive intelligence engine based on CogniToken</p>
            </div>
            <div class="app-slide-text d-none" data-index="1">
              <div class="mb-2" style="color:#b0c4d8; font-size:1.1rem;">— CogniToken</div>
              <h2 class="fw-bold mb-3" style="color:#ffe9a7; font-family: 'Orbitron', Arial, sans-serif; letter-spacing:2px; font-size:2rem;">SMART CONTRACT<br>INTEGRATION</h2>
              <p class="text-info mb-4" style="font-size:1.15rem;">Seamlessly integrate smart contracts for secure, automated transactions and decentralized applications.</p>
            </div>
            <div class="app-slide-text d-none" data-index="2">
              <div class="mb-2" style="color:#b0c4d8; font-size:1.1rem;">— CogniToken</div>
              <h2 class="fw-bold mb-3" style="color:#ffe9a7; font-family: 'Orbitron', Arial, sans-serif; letter-spacing:2px; font-size:2rem;">AI-POWERED ANALYTICS</h2>
              <p class="text-info mb-4" style="font-size:1.15rem;">Leverage AI analytics to gain actionable insights and optimize your business processes in real time.</p>
            </div>
            <div class="d-flex gap-3 mt-3">
              <span class="app-dot" data-index="0"></span>
              <span class="app-dot" data-index="1"></span>
              <span class="app-dot" data-index="2"></span>
            </div>
          </div>
        </div>
        <div class="col-lg-6 text-center">
          <div class="app-slider-imgs position-relative d-flex justify-content-center align-items-center" style="min-height:400px;">
            <div class="app-slide-img glassy-card animate__animated animate__fadeIn" data-index="0">
              <div class="glow-tab tab-purple"></div>
              <img src="images/slide1.png" alt="App 1" style="max-width:400px; margin:40px auto 0 -36px; display:block;" />
            </div>
            <div class="app-slide-img glassy-card d-none animate__animated animate__fadeIn" data-index="1">
              <div class="glow-tab tab-blue"></div>
              <img src="images/slide2.png" alt="App 2" style="max-width:400px; margin:40px auto 0 -36px; display:block;" />
            </div>
            <div class="app-slide-img glassy-card d-none animate__animated animate__fadeIn" data-index="2">
              <div class="glow-tab tab-yellow"></div>
              <img src="images/slide3.png" alt="App 3" style="max-width:400px; margin:40px auto 0 -36px; display:block;" />
            </div>
          </div>
        </div>
      </div>
      <style>
        .glassy-card {
          background: rgba(18,36,74,0.85);
          border-radius: 18px;
          border: 2px solid #fff2;
          box-shadow: 0 4px 18px 0 #00eaff18, 0 1.5px 6px 0 #0003;
          min-width: 320px;
          min-height: 400px;
          max-width: 340px;
          margin: 0 12px;
          position: absolute;
          left: 50%;
          top: 0;
          transform: translateX(-50%);
          transition: box-shadow 0.3s, transform 0.3s, opacity 0.3s;
          z-index: 2;
          display: flex;
          flex-direction: column;
          align-items: center;
          justify-content: flex-start;
        }
        .app-slide-img.d-none { opacity: 0; pointer-events: none; z-index: 1; }
        .app-slide-img:not(.d-none) { opacity: 1; pointer-events: auto; z-index: 2; }
        .glow-tab {
          position: absolute;
          top: -12px;
          left: 50%;
          transform: translateX(-50%);
          width: 80px;
          height: 12px;
          border-radius: 0 0 16px 16px;
          box-shadow: 0 0 24px 8px;
          z-index: 2;
        }
        .tab-blue {
          background: #00eaff;
          box-shadow: 0 0 24px 8px #00eaff99;
        }
        .tab-purple {
          background: #7c3aed;
          box-shadow: 0 0 24px 8px #7c3aed99;
        }
        .tab-yellow {
          background: #ffc107;
          box-shadow: 0 0 24px 8px #ffc10799;
        }
        .app-dot {
          width: 22px;
          height: 22px;
          border-radius: 50%;
          background: #aaa;
          display: inline-block;
          cursor: pointer;
          box-shadow: 0 0 0 0 #ffc107;
          transition: background 0.2s, box-shadow 0.2s;
        }
        .app-dot.active {
          background: #ffe066;
          box-shadow: 0 0 12px 2px #ffe066;
        }
        @media (max-width: 991px) {
          .glassy-card {
            min-width: 220px;
            min-height: 220px;
            max-width: 90vw;
          }
          .app-slider-imgs { min-height: 220px; }
        }
      </style>
      <script>
        // Simple slider logic for text and image sync
        const appDots = document.querySelectorAll('.app-dot');
        const appTexts = document.querySelectorAll('.app-slide-text');
        const appImgs = document.querySelectorAll('.app-slide-img');
        let appCurrent = 0;
        function showAppSlide(idx) {
          appTexts.forEach((el, i) => {
            el.classList.toggle('d-none', i !== idx);
          });
          appImgs.forEach((el, i) => {
            el.classList.toggle('d-none', i !== idx);
          });
          appDots.forEach((el, i) => {
            el.classList.toggle('active', i === idx);
          });
          appCurrent = idx;
        }
        appDots.forEach((dot, idx) => {
          dot.addEventListener('click', () => showAppSlide(idx));
        });
        // Set initial active dot
        showAppSlide(0);
        // Auto-move slider every 3 seconds
        setInterval(function() {
          let next = (appCurrent + 1) % appTexts.length;
          showAppSlide(next);
        }, 3000);
      </script>
    </div>
  </section>

  <!-- OUR VISION SECTION (Animated) -->
  <section id="vision" class="vision-section py-6" style="background: linear-gradient(to right, var(--secondary-color), var(--dark-bg));">
    <div class="container d-flex flex-column flex-lg-row align-items-center justify-content-center gap-5">
      <div class="vision-banner">
        <div class="vision-circles">
          <span class="circle circle1"></span>
          <span class="circle circle2"></span>
          <span class="circle circle3"></span>
        </div>
        <img src="images/ball2.png" alt="Vision Banner" class="vision-img">
      </div>
      <div class="vision-content">
        <h5 class="vision-aspiration">Aspiration</h5>
        <h2 class="vision-title">OUR VISION</h2>
        <p class="vision-text">
          Become the most functional and diversified DEFI aggregation Ai ecology in the encryption world
        </p>
      </div>
    </div>
    <style>
    .vision-section {
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 80vh;
      background: #07162b;
      padding: 60px 0;
      gap: 60px;
    }
    .vision-banner {
      position: relative;
      width: 400px;
      height: 400px;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .vision-img {
      width: 260px;
      height: 260px;
      border-radius: 50%;
      box-shadow: 0 0 60px 10px #00fff7aa;
      z-index: 2;
      position: relative;
    }
    .vision-circles {
      position: absolute;
      top: 50%; left: 50%;
      transform: translate(-50%, -50%);
      width: 400px; height: 400px;
      z-index: 1;
    }
    .circle {
      position: absolute;
      border: 2px solid #ffe06655;
      border-radius: 50%;
      animation: rotate 8s linear infinite;
      pointer-events: none;
    }
    .circle1 {
      width: 400px; height: 400px;
      left: 0; top: 0;
      animation-duration: 12s;
      animation-name: rotateZoom;
    }
    .circle2 {
      width: 320px; height: 320px;
      left: 40px; top: 40px;
      animation-direction: reverse;
      animation-duration: 9s;
      animation-name: rotateZoom;
    }
    .circle3 {
      width: 240px; height: 240px;
      left: 80px; top: 80px;
      border-color: #00fff7aa;
      animation-duration: 10s;
    }
    @keyframes rotate {
      0% { transform: rotate(7deg) scale(1);}
      100% { transform: rotate(360deg) scale(1);}
    }
    @keyframes rotateZoom {
      0%   { transform: rotate(7deg) scale(1); }
      25%  { transform: rotate(97deg) scale(1.12); }
      50%  { transform: rotate(187deg) scale(1); }
      75%  { transform: rotate(277deg) scale(0.88); }
      100% { transform: rotate(367deg) scale(1); }
    }
    .vision-content {
      max-width: 500px;
      color: #b2f7ef;
    }
    .vision-aspiration {
      color: #b2f7ef;
      font-size: 1.2rem;
      margin-bottom: 0.5rem;
      letter-spacing: 1px;
    }
    .vision-title {
      color: #ffe9a7;
      font-size: 2.5rem;
      font-family: 'Orbitron', 'Montserrat', Arial, sans-serif;
      font-weight: 700;
      margin-bottom: 1rem;
      letter-spacing: 2px;
    }
    .vision-text {
      color: #b2f7ef;
      font-size: 1.1rem;
      line-height: 1.7;
    }
    @media (max-width: 900px) {
      .vision-section { flex-direction: column; gap: 30px; }
      .vision-banner { width: 300px; height: 300px; }
      .vision-circles { width: 300px; height: 300px; }
      .circle1 { width: 300px; height: 300px; }
      .circle2 { width: 220px; height: 220px; left: 40px; top: 40px; }
      .circle3 { width: 140px; height: 140px; left: 80px; top: 80px; }
    }
    </style>
  </section>

  <!-- DEVELOPMENT ROADMAP Section (Styled as Image) -->
  <section id="roadmap" class="py-6" style="background: linear-gradient(to bottom, var(--dark-bg), var(--secondary-color));">
    <div class="container">
      <h2 class="section-title animate__animated animate__fadeInDown">DEVELOPMENT ROADMAP</h2>
      <div class="row g-4 justify-content-center roadmap-cards-row">
        <!-- Card 1 -->
        <div class="col-lg-6 col-md-6 mb-4">
          <div class="roadmap-card">
            <div class="roadmap-badge">01</div>
            <div class="roadmap-phase-num">01 <span>PHASE</span></div>
            <ul class="roadmap-list">
              <li>Community building</li>
              <li>Official website release</li>
              <li>White Paper Release</li>
              <li>Social media construction</li>
            </ul>
          </div>
        </div>
        <!-- Card 2 -->
        <div class="col-lg-6 col-md-6 mb-4">
          <div class="roadmap-card">
            <div class="roadmap-badge">02</div>
            <div class="roadmap-phase-num">02 <span>PHASE</span></div>
            <ul class="roadmap-list">
              <li>Ecological Mechanism Explanation</li>
              <li>Marketing Launch</li>
              <li>Collaboration with investment institutions</li>
              <li>Entity company activation</li>
            </ul>
          </div>
        </div>
        <!-- Card 3 -->
        <div class="col-lg-6 col-md-6 mb-4">
          <div class="roadmap-card">
            <div class="roadmap-badge">03</div>
            <div class="roadmap-phase-num">03 <span>PHASE</span></div>
            <ul class="roadmap-list">
              <li>Ecological Application</li>
              <li>Login to CMC & CG</li>
              <li>Large Scale Promotion</li>
              <li>Star Collaboration</li>
            </ul>
          </div>
        </div>
        <!-- Card 4 -->
        <div class="col-lg-6 col-md-6 mb-4">
          <div class="roadmap-card">
            <div class="roadmap-badge">04</div>
            <div class="roadmap-phase-num">04 <span>PHASE</span></div>
            <ul class="roadmap-list">
              <li>Log in to MEXC & GATE</li>
              <li>Binance News releases</li>
              <li>Binance Live Streaming</li>
              <li>Trading pairs for listing</li>
            </ul>
          </div>
        </div>
      </div>
      <style>
        .roadmap-cards-row {
          margin-top: 40px;
        }
        .roadmap-card {
          background: radial-gradient(circle at 60% 40%, #0a1833 60%, #0e2a4d 100%);
          border: 2px solid #ffe066;
          border-radius: 28px;
          padding: 40px 36px 36px 36px;
          min-height: 370px;
          position: relative;
          box-shadow: 0 0 32px #00eaff22;
          overflow: hidden;
          display: flex;
          flex-direction: column;
          justify-content: flex-start;
        }
        .roadmap-badge {
          position: absolute;
          top: 32px;
          left: 32px;
          background: #ffe066;
          color: #222;
          font-weight: bold;
          font-size: 1.5rem;
          border-radius: 6px;
          padding: 4px 18px;
          box-shadow: 0 2px 8px #ffe06655;
          z-index: 2;
          letter-spacing: 1px;
        }
        .roadmap-phase-num {
          position: absolute;
          top: 32px;
          right: 32px;
          color: #fff;
          font-size: 2.7rem;
          font-weight: 700;
          text-align: right;
          letter-spacing: 2px;
          line-height: 1;
        }
        .roadmap-phase-num span {
          display: block;
          font-size: 1.3rem;
          font-weight: 700;
          letter-spacing: 1px;
        }
        .roadmap-list {
          list-style: none;
          margin: 0;
          margin-top: 90px;
          padding: 0;
        }
        .roadmap-list li {
          color: #b0c4d8;
          font-size: 1.15rem;
          font-family: 'Orbitron', Arial, sans-serif;
          margin-bottom: 22px;
          position: relative;
          padding-left: 32px;
          font-weight: 500;
        }
        .roadmap-list li:last-child {
          margin-bottom: 0;
        }
        .roadmap-list li::before {
          content: '';
          position: absolute;
          left: 0;
          top: 7px;
          width: 16px;
          height: 16px;
          border-radius: 50%;
          background: radial-gradient(circle, #ffe066 40%, #ff9900 80%, #ff6600 100%);
          box-shadow: 0 0 8px 2px #ffe06699, 0 0 16px 4px #ff990055;
          animation: glow-bullet 1.5s infinite alternate;
        }
        @keyframes glow-bullet {
          0% { box-shadow: 0 0 8px 2px #ffe06699, 0 0 16px 4px #ff990055; }
          100% { box-shadow: 0 0 16px 4px #ffe066cc, 0 0 32px 8px #ff990099; }
        }
        @media (max-width: 991px) {
          .roadmap-card {
            padding: 32px 18px 28px 18px;
            min-height: 320px;
          }
          .roadmap-phase-num {
            font-size: 2rem;
            top: 24px;
            right: 24px;
          }
          .roadmap-badge {
            font-size: 1.1rem;
            top: 24px;
            left: 24px;
            padding: 2px 12px;
          }
          .roadmap-list {
            margin-top: 70px;
          }
        }
      </style>
    </div>
  </section>

  <!-- TRUSTED PARTNERS / JOIN US Section (Styled as Image) -->
  <section id="partners" class="py-6" style="background: #07162b;">
    <div class="container text-center">
      <div class="joinus-logo-wrap">
        <img src="images/ball2.png" alt="COG Logo" class="joinus-logo-img">
      </div>
      <h2 class="joinus-title">JOIN US</h2>
      <p class="joinus-subtitle">Becoming the most comprehensive and diverse aggregated financial ecosystem in the encrypted world</p>
      <div class="joinus-x-wrap">
        <span class="joinus-x-icon">&#120143;</span>
      </div>
      <div class="row justify-content-center joinus-cards-row mt-5">
        <div class="col-12 col-md-6 col-lg-3 mb-4">
          <div class="joinus-card">
            <img src="images/binance.png" alt="Binance Smart Chain" class="joinus-card-img mb-2">
            <div class="joinus-card-label">BINANCE SMART CHAIN</div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 mb-4">
          <div class="joinus-card">
            <img src="images/bscscan.png" alt="Bscscan" class="joinus-card-img mb-2">
            <div class="joinus-card-label">Bscscan</div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 mb-4">
          <div class="joinus-card">
            <img src="images/coingecko.png" alt="CoinGecko" class="joinus-card-img mb-2">
            <div class="joinus-card-label">CoinGecko</div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 mb-4">
          <div class="joinus-card">
            <img src="images/gateio.png" alt="Gate.io" class="joinus-card-img mb-2">
            <div class="joinus-card-label">Gate.io</div>
          </div>
        </div>
      </div>
      <style>
        .joinus-logo-wrap {
          display: flex;
          justify-content: center;
          align-items: center;
          margin-bottom: 0.5rem;
        }
        .joinus-logo-img {
          max-width: 320px;
          filter: drop-shadow(0 0 60px #00fff7cc) drop-shadow(0 0 40px #00fff7aa);
          margin-bottom: -30px;
        }
        .joinus-title {
          font-family: 'Orbitron', 'Montserrat', Arial, sans-serif;
          font-size: 2.8rem;
          color: #fff;
          font-weight: 700;
          letter-spacing: 4px;
          margin-bottom: 1.2rem;
          text-shadow: 0 0 16px #00fff7cc;
        }
        .joinus-subtitle {
          color: #6c7a8a;
          font-size: 1.25rem;
          margin-bottom: 2.2rem;
        }
        .joinus-x-wrap {
          display: flex;
          justify-content: center;
          align-items: center;
          margin-bottom: 2.5rem;
        }
        .joinus-x-icon {
          display: inline-flex;
          align-items: center;
          justify-content: center;
          width: 48px;
          height: 48px;
          border: 2px solid #ffe066;
          border-radius: 50%;
          font-size: 2.2rem;
          color: #ffe066;
          background: #07162b;
          box-shadow: 0 0 16px #ffe06655;
          transition: background 0.2s;
        }
        .joinus-cards-row {
          margin-top: 2.5rem;
        }
        .joinus-card {
          background: radial-gradient(circle at 60% 40%, #0a1833 60%, #0e2a4d 100%);
          border: 2px solid #ffe066;
          border-radius: 18px;
          padding: 32px 18px 24px 18px;
          min-height: 220px;
          display: flex;
          flex-direction: column;
          align-items: center;
          box-shadow: 0 0 24px #00eaff22;
          transition: box-shadow 0.3s, transform 0.3s;
        }
        .joinus-card:hover {
          box-shadow: 0 0 32px #ffe06699, 0 0 16px #00fff7aa;
          transform: translateY(-6px) scale(1.03);
        }
        .joinus-card-img {
          max-width: 80px;
          max-height: 60px;
          margin-bottom: 10px;
          filter: drop-shadow(0 0 12px #ffe06688);
        }
        .joinus-card-label {
          color: #fff;
          font-family: 'Orbitron', Arial, sans-serif;
          font-size: 1.1rem;
          font-weight: 600;
          letter-spacing: 1px;
          margin-top: 8px;
        }
        @media (max-width: 991px) {
          .joinus-logo-img { max-width: 220px; }
          .joinus-title { font-size: 2rem; }
          .joinus-card { min-height: 160px; padding: 18px 8px 14px 8px; }
          .joinus-card-img { max-width: 60px; max-height: 40px; }
        }
      </style>
    </div>
  </section>

  <!-- Footer (as per provided image) -->
  <footer class="footer-cogni">
    <div class="container py-5">
      <div class="row align-items-start justify-content-between gy-4">
        <div class="col-12 col-md-5 d-flex flex-column align-items-center align-items-md-start">
          <img src="images/ball2.png" alt="COGNITOKEN" class="footer-logo mb-3">
          <div class="footer-brand">COGNITOKEN</div>
          <div class="footer-desc">It comes from "Cognition" representing the intelligence and decision-making ability of AI.</div>
        </div>
        <div class="col-12 col-md-6 d-flex flex-column flex-md-row justify-content-md-end align-items-center align-items-md-start gap-5">
          <div>
            <div class="footer-menu-title">Menu</div>
            <ul class="footer-menu list-unstyled mb-0">
              <li><a href="#" class="footer-link">Home</a></li>
              <li><a href="#about" class="footer-link">About</a></li>
              <li><a href="#features" class="footer-link">Advantages</a></li>
            </ul>
          </div>
          <div>
            <div style="height: 32px;"></div>
            <ul class="footer-menu list-unstyled mb-0">
              <li><a href="#" class="footer-link">Aescribe</a></li>
              <li><a href="#vision" class="footer-link">Vision</a></li>
              <li><a href="#roadmap" class="footer-link">Roadmap</a></li>
            </ul>
          </div>
        </div>
      </div>
      <hr class="footer-hr">
      <div class="text-center footer-copyright">&copy; 2024 COGNITOKEN. All rights reserved.</div>
    </div>
    <style>
      .footer-cogni {
        background: #181818;
        color: #ffe9a7;
        font-family: 'Orbitron', Arial, sans-serif;
        margin-top: 0;
      }
      .footer-logo {
        width: 110px;
        border-radius: 50%;
        box-shadow: 0 0 32px #00eaff99;
        display: block;
      }
      .footer-brand {
        font-size: 2.2rem;
        font-weight: 700;
        letter-spacing: 2px;
        margin-bottom: 10px;
        color: #ffe9a7;
      }
      .footer-desc {
        color: #ffe9a7;
        font-size: 1.08rem;
        max-width: 320px;
        text-align: left;
      }
      .footer-menu-title {
        color: #ffe9a7;
        font-weight: bold;
        font-size: 1.2rem;
        margin-bottom: 12px;
      }
      .footer-menu {
        font-size: 1.08rem;
      }
      .footer-link {
        color: #ffe9a7;
        text-decoration: none;
        display: inline-block;
        margin-bottom: 6px;
        transition: color 0.2s;
      }
      .footer-link:hover {
        color: #fff;
        text-shadow: 0 0 8px #ffe9a7;
      }
      .footer-hr {
        border-top: 1px solid #ffe9a7;
        opacity: 0.2;
        margin: 40px 0 0 0;
      }
      .footer-copyright {
        color: #ffe9a7;
        font-size: 1rem;
        letter-spacing: 1px;
        margin-top: 24px;
      }
      @media (max-width: 767px) {
        .footer-brand { font-size: 1.4rem; }
        .footer-logo { width: 70px; }
        .footer-desc { font-size: 0.95rem; }
        .footer-menu-title { font-size: 1rem; }
        .footer-copyright { font-size: 0.95rem; }
        .footer-cogni .row { flex-direction: column !important; }
        .footer-cogni .col-md-6 { gap: 2rem !important; }
        .footer-cogni .col-md-5 { align-items: center !important; }
      }
    </style>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // For mobile: toggle dropdown on click
    document.addEventListener('DOMContentLoaded', function() {
      var userDropdown = document.querySelector('.user-dropdown');
      var userIcon = userDropdown.querySelector('a');
      userIcon.addEventListener('click', function(e) {
        e.preventDefault();
        userDropdown.classList.toggle('show');
      });
      // Close dropdown if click outside
      document.addEventListener('click', function(e) {
        if (!userDropdown.contains(e.target)) {
          userDropdown.classList.remove('show');
        }
      });
    });
  </script>
</body>
</html>