<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('assets/images/logo/logo-sm.png') }}" type="image/gif" sizes="16x16">
    <title>Mail Details</title>
    <meta name="og:description" content="Build a user-friendly crypto dashboard with FundRows free crypto dashboard template. Enjoy full responsiveness, and customizable for your crypto projects. With FundRows, developers can create a unique crypto admin dashboard that is visually impressive.">
    <meta name="robots" content="index, follow">
    <meta name="og:title" property="og:title" content="FundRows - Free Bootstrap Crypto Dashboard Template">
    <meta property="og:image" content="https://www.designtocodes.com/wp-content/uploads/2023/10/FundRows-Free-Bootstrap-Crypto-Dashboard-Template-Thumbnail.jpg">
    <!-- bootstrap css link -->
    <link rel="stylesheet" href="{{ asset('lib/bootstrap_5/bootstrap.min.css') }}">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="{{ asset('lib/fontawesome/css/all.min.css') }}">
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('assets/css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
</head>

<body>
    <!-- Preloader Start -->
    <div class="preloader">
        <img src="../assets/images/logo/logo.png" alt="DesignToCodes">
    </div>
    <!-- Preloader End -->
    <div class="d2c_wrapper">

        <!-- Main sidebar -->
        <div class="d2c_sidebar offcanvas-lg offcanvas-start px-2 py-4" tabindex="-1" id="d2c_sidebar">
            <div class="d-flex flex-column">
                <!-- Logo -->
                <a href="{{ route('user') }}" class="brand-icon">
                    <img class="navbar-brand" src="{{ asset('assets/images/logo/logo.png') }}" alt="logo">
                </a>
                <!-- End:Logo -->

                <!-- Menu -->
                <ul class="navbar-nav flex-grow-1">
                    <!-- Menu Item -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user') }}">
                            <span class="d2c_icon">
                                <i class="fas fa-home"></i>
                            </span>
                            <span> Dashboard </span>
                        </a>
                    </li>
                    <!-- End:Menu Item -->

                    <!-- Menu Item -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.pages.exchange') }}">
                            <span class="d2c_icon">
                                <i class="fas fa-exchange-alt"></i>
                            </span>
                            <span> Exchange </span>
                        </a>
                    </li>
                    <!-- End:Menu Item -->

                    <!-- Menu Item -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.pages.investment') }}">
                            <span class="d2c_icon">
                                <i class="fas fa-coins"></i>
                            </span>
                            <span> Investment </span>
                        </a>
                    </li>
                    <!-- End:Menu Item -->

                    <!-- Menu Item -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.pages.market') }}">
                            <span class="d2c_icon">
                                <i class="fas fa-chart-line"></i>
                            </span>
                            <span> Market </span>
                        </a>
                    </li>
                    <!-- End:Menu Item -->

                    <!-- Menu Item -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.pages.wallet') }}">
                            <span class="d2c_icon">
                                <i class="fas fa-wallet"></i>
                            </span>
                            <span> Wallet </span>
                        </a>
                    </li>
                    <!-- End:Menu Item -->

                    <!-- Menu Item -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.pages.profile') }}">
                            <span class="d2c_icon">
                                <i class="far fa-user"></i>
                            </span>
                            <span> Profile </span>
                        </a>
                    </li>
                    <!-- End:Menu Item -->

                    <!-- Menu Item -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.pages.notification') }}">
                            <span class="d2c_icon">
                                <i class="fas fa-bell"></i>
                            </span>
                            <span> Notifications </span>
                        </a>
                    </li>
                    <!-- End:Menu Item -->

                    
                    <!-- Menu Item -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.pages.transactions') }}">
                            <span class="d2c_icon">
                                <i class="fas fa-hand-holding-usd"></i>
                            </span>
                            <span> Transaction </span>
                        </a>
                    </li>
                    <!-- End:Menu Item -->

                    <!-- Menu Item -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.pages.transfer') }}">
                            <span class="d2c_icon">
                                <i class="fas fa-random"></i>
                            </span>
                            <span> Transfer </span>
                        </a>
                    </li>
                    <!-- End:Menu Item -->

                    <!-- Menu Item -->
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('user.pages.email') }}">
                            <span class="d2c_icon">
                                <i class="fas fa-envelope-open-text"></i>
                            </span>
                            <span> Mail </span>
                        </a>
                    </li>
                    <!-- End:Menu Item -->

                    <!-- Menu Item -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.pages.activity') }}">
                            <span class="d2c_icon">
                                <i class="fas fa-recycle"></i>
                            </span>
                            <span> Activity </span>
                        </a>
                    </li>
                    <!-- End:Menu Item -->

                    <!-- Menu Item -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.pages.faq') }}">
                            <span class="d2c_icon">
                                <i class="fas fa-question-circle"></i>
                            </span>
                            <span> FAQ </span>
                        </a>
                    </li>
                    <!-- End:Menu Item -->

                    <!-- Menu Item -->
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" data-bs-target="#form_dropdown"
                            aria-expanded="false" href="#">
                            <span class="d2c_icon">
                                <i class="far fa-file-alt"></i>
                            </span>
                            <span> Form </span>
                            <span class="fas fa-chevron-right ms-auto text-end"></span>
                        </a>
                        <!-- Child Sub Menu -->
                        <ul class="sub-menu collapse" id="form_dropdown">
                            <!-- Child Menu Item -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.basicForm') }}">
                                    <span> Basic Form </span>
                                </a>
                            </li>
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.advancedFrom') }}">
                                    <span> Advanced Form </span>
                                </a>
                            </li>
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.editor') }}">
                                    <span> Editor </span>
                                </a>
                            </li>
                            <!-- End:Child Menu Item -->
                        </ul>
                        <!-- End:Child Sub Menu -->
                    </li>
                    <!-- End:Menu Item -->

                    <!-- Menu Item -->
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" data-bs-target="#table_dropdown"
                            aria-expanded="false" href="#">
                            <span class="d2c_icon">
                                <i class="fas fa-table"></i>
                            </span>
                            <span> table </span>
                            <span class="fas fa-chevron-right ms-auto text-end"></span>
                        </a>
                        <!-- Child Sub Menu -->
                        <ul class="sub-menu collapse" id="table_dropdown">
                            <!-- Child Menu Item -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.basicTable') }}">
                                    <span> Basic Table </span>
                                </a>
                            </li>
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.advancedTable') }}">
                                    <span> Advanced Table </span>
                                </a>
                            </li>
                            <!-- End:Child Menu Item -->
                        </ul>
                        <!-- End:Child Sub Menu -->
                    </li>
                    <!-- End:Menu Item -->

                    <!-- Menu Item -->
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" data-bs-target="#chart_dropdown"
                            aria-expanded="false" href="#">
                            <span class="d2c_icon">
                                <i class="fas fa-chart-pie"></i>
                            </span>
                            <span> Charts </span>
                            <span class="fas fa-chevron-right ms-auto text-end"></span>
                        </a>
                        <!-- Child Sub Menu -->
                        <ul class="sub-menu collapse" id="chart_dropdown">
                            <!-- Child Menu Item -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.chartjs') }}">
                                    <span> ChartJS</span>
                                </a>
                            </li>
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.apexCharts') }}">
                                    <span> ApexCharts </span>
                                </a>
                            </li>
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.eCharts') }}">
                                    <span> E-Charts </span>
                                </a>
                            </li>
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.ammCharts') }}">
                                    <span> Amm-Charts </span>
                                </a>
                            </li>
                            <!-- End:Child Menu Item -->
                        </ul>
                        <!-- End:Child Sub Menu -->
                    </li>
                    <!-- End:Menu Item -->

                    <!-- Menu Item -->
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" data-bs-target="#authentication"
                            aria-expanded="false" href="#">
                            <span class="d2c_icon">
                                <i class="fas fa-user-lock"></i>
                            </span>
                            <span> Authentication </span>
                            <span class="fas fa-chevron-right ms-auto text-end"></span>
                        </a>
                        <!-- Child Sub Menu -->
                        <ul class="sub-menu collapse" id="authentication">
                            <!-- Child Menu Item -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.authentication.signUp') }}">
                                    <span> Sing up </span>
                                </a>
                            </li>
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.authentication.signIn') }}">
                                    <span> Log In </span>
                                </a>
                            </li>
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.authentication.forgetPassword') }}">
                                    <span> Forget Password </span>
                                </a>
                            </li>
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.authentication.lockscreen') }}">
                                    <span> Lock Screen </span>
                                </a>
                            </li>
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.authentication.404') }}">
                                    <span> 404 </span>
                                </a>
                            </li>
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.authentication.505') }}">
                                    <span> 505 </span>
                                </a>
                            </li>
                            <!-- End:Child Menu Item -->
                        </ul>
                        <!-- End:Child Sub Menu -->
                    </li>
                    <!-- End:Menu Item -->

                    <!-- Menu Item -->
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" data-bs-target="#components" aria-expanded="false"
                            href="#">
                            <span class="d2c_icon">
                                <i class="fas fa-dice-d6"></i>
                            </span>
                            <span> Component </span>
                            <span class="fas fa-chevron-right ms-auto text-end"></span>
                        </a>
                        <!-- Child Sub Menu -->
                        <ul class="sub-menu collapse" id="components">
                            <!-- Child Menu Item -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.invoice') }}">
                                    <span> Invoice </span>
                                </a>
                            </li>
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.createInvoice') }}">
                                    <span> Create Invoice </span>
                                </a>
                            </li>
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.calender') }}">
                                    <span> Calendar </span>
                                </a>
                            </li>
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('user.pages.components.timeline') }}">
                                    <span> Timeline </span>
                                </a>
                            </li>
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.map') }}">
                                    <span> Map </span>
                                </a>
                            </li>
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.alerts') }}">
                                    <span> Alerts </span>
                                </a>
                            </li>
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.cards') }}">
                                    <span> Cards </span>
                                </a>
                            </li>
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.buttons') }}">
                                    <span> Buttons </span>
                                </a>
                            </li>
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.modals') }}">
                                    <span> Modals </span>
                                </a>
                            </li>
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.badges') }}">
                                    <span> Badges </span>
                                </a>
                            </li>
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.spinners') }}">
                                    <span> Spinners </span>
                                </a>
                            </li>
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.progress') }}">
                                    <span> Progress </span>
                                </a>
                            </li>
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.listGroup') }}">
                                    <span> List Group </span>
                                </a>
                            </li>
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.pagination') }}">
                                    <span> Pagination </span>
                                </a>
                            </li>
                            <!-- End:Child Menu Item -->
                        </ul>
                        <!-- End:Child Sub Menu -->
                    </li>
                    <!-- End:Menu Item -->

                    <!-- Menu Item -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.pages.support') }}">
                            <span class="d2c_icon">
                                <i class="fas fa-hands-helping"></i>
                            </span>
                            <span> Support </span>
                        </a>
                    </li>
                    <!-- End:Menu Item -->

                    <!-- Menu Item -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.pages.blank') }}">
                            <span class="d2c_icon">
                                <i class="far fa-file"></i>
                            </span>
                            <span> Blank </span>
                        </a>
                    </li>
                    <!-- End:Menu Item -->
                    <!-- Menu Item -->
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span class="d2c_icon">
                                <i class="fas fa-sign-out-alt"></i>
                            </span>
                            <span> Logout </span>
                        </a>
                    </li>
                    <!-- End:Menu Item -->
                </ul>
                <!-- End:Menu -->
            </div>
        </div>
        <!-- End:Sidebar -->

        <!-- Main Body-->
        <div class="d2c_main p-4">
            <div class="container-fluid">
                <!-- Title -->
            <div class="row align-items-center mb-4">
                <div class="col-2 d-block d-lg-none">
                    <!-- Offcanvas Toggler -->
                    <button class="btn btn-primary px-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#d2c_sidebar" aria-controls="d2c_sidebar">
                        <i class="fa fa-bars p-0"></i>
                    </button>
                    <!-- End:Offcanvas Toggler -->
                </div>
                <div class="col">
                    <p class="mb-0">Welcome Back</p>
                    <h4 class="text-capitalize">Mail Details</h4>
                </div>
            </div>
            <!-- End:Title -->

                <div class="row">
                    <div class="col-md-12">
                        <!-- Mail Box -->
                        <div class="card">
                            <div class="row d2c_mail_tab">
                                <!-- Tab Nav -->
                                <div class="col-xl-3 mb-4 mb-xl-0">
                                    <div class="bg-success bg-opacity-10 rounded-4 rounded-end p-4 h-100">
                                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                            <!-- Compose Btn -->
                                            <button class="btn btn-primary w-100 mb-4" id="v-pills-compose-tab" data-bs-toggle="pill" data-bs-target="#v-pills-compose" type="button" role="tab" aria-controls="v-pills-compose" aria-selected="true">Compose</button>
                                            <!-- Compose Btn -->

                                            <button class="nav-link active" id="v-pills-maildetails-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
                                                <span>
                                                    <i class="fas fa-envelope-open-text me-2"></i>
                                                    Inbox
                                                </span>
                                                <span>(20)</span>
                                            </button>
                                            <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                                                <span>
                                                    <i class="fas fa-file me-2"></i>
                                                    Draft
                                                </span>
                                            </button>
                                            <button class="nav-link" id="v-pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#v-pills-disabled" type="button" role="tab" aria-controls="v-pills-disabled" aria-selected="false">
                                                <span>
                                                    <i class="fas fa-paper-plane me-2"></i>
                                                    Sent Mail
                                                </span>
                                            </button>
                                            <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                                                <span>
                                                    <i class="fas fa-exclamation-circle me-2"></i>
                                                    Spam/Junk
                                                </span>
                                            </button>
                                            <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                                                <span>
                                                    <i class="fas fa-trash me-2"></i>
                                                    Trash
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Tab Nav -->

                                <!-- Tab Content -->
                                <div class="col-xl-9">
                                    <div class="tab-content p-4" id="v-pills-tabContent">
                                        <div class="tab-pane fade" id="v-pills-compose" role="tabpanel" aria-labelledby="v-pills-compose-tab" tabindex="0">
                                            <form class="d2c_compose_mail needs-validation" novalidate>
                                                <div>
                                                    <input type="email" class="form-control" placeholder="To:" required>
                                                </div>
                                                <div>
                                                    <input type="text" class="form-control" placeholder="Subject:" required>
                                                </div>
                                                <div>
                                                    <textarea class="form-control" placeholder="Enter your message:" rows="7" required></textarea>
                                                </div>

                                                <div class="file-uploader__message-area"></div>
                                                <div class="d-inline-flex align-items-center">
                                                    <button type="submit" class="btn btn-primary">Send Now</button>
                                                    <div class="file-chooser">
                                                        <label for="file-upload" title="file upload"><i class="fas fa-paperclip"></i></label>
                                                        <input id="file-upload" class="file-chooser__input" type="file" multiple hidden>
                                                    </div>
                                                    <div>
                                                        <i class="fas fa-link"></i>
                                                    </div>
                                                    <div>
                                                        <i title="emoji" class="fas fa-smile"></i>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-maildetails-tab" tabindex="0">
                                            <!-- Mail Content -->
                                            <div class="row">
                                                <div class="col-lg-6 order-2 order-lg-1">
                                                    <div class="clearfix mb-3">
                                                        <div class="float-start">
                                                            <img src="../assets/images/email/send_from.png" class="img-fluid rounded-full me-3" alt="Email Avatar">
                                                        </div>
                                                        <div class="float-start">
                                                            <h6 class="mb-0">Walter Reuter</h6>
                                                            <p class="text-muted">From: @selena.oi to me</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 order-1 order-lg-2 mb-4 mb-lg-0 text-end">
                                                    <button class="btn bg-success text-success bg-opacity-10 rounded-2 me-2 px-3">
                                                        <i class="fas fa-sync-alt"></i>
                                                    </button>
                                                    <button class="btn bg-warning text-warning bg-opacity-10 rounded-2 me-2 px-3">
                                                        <i class="fas fa-archive"></i>
                                                    </button>
                                                    <button class="btn bg-danger text-danger bg-opacity-10 rounded-2 me-2 px-3">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <h6>Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id orci in</h6>
                                            <p class="text-muted">4:42 PM </p>
                                            <hr>
                                            <div class="d2c_mail_body mt-4">
                                                <p><b>Hi Selena</b></p>
                                                <p>
                                                    Ingredia Nutrisha, A collection of textile samples lay spread out on the table - Samsa was a travelling salesman and above it there hung a picture
                                                </p>
                                                <p>
                                                    Even the all-powerful Pointing has no control about the blind texts it is almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.
                                                </p>
                                                <p>
                                                    Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum
                                                </p>

                                                <div class="mb-4">
                                                    <h6 class="mb-3 fw-semibold">3 Attachments</h6>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="position-relative rounded d2c_mail_attachment_image">
                                                                <img class="w-100 rounded img-fluid" src="../assets/images/email/attachment_img_1.jpg"  alt="mail Attachment Image">
                                                                <div class="d2c_mail_image_overlay rounded position-absolute top-0 start-0 bottom-0 end-0 opacity-0"><a href="#"><i class="fas fa-download position-absolute top-50 start-50 translate-middle text-white"></i></a></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="position-relative rounded d2c_mail_attachment_image">
                                                                <img class="w-100 rounded img-fluid" src="../assets/images/email/attachment_img_2.jpg" alt="mail Attachment Image">
                                                                <div class="d2c_mail_image_overlay rounded position-absolute top-0 start-0 bottom-0 end-0 opacity-0"><a href="#"><i class="fas fa-download position-absolute top-50 start-50 translate-middle text-white"></i></a></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="position-relative rounded d2c_mail_attachment_image">
                                                                <img class="w-100 rounded img-fluid" src="../assets/images/email/attachment_img_3.jpg" alt="mail Attachment Image">
                                                                <div class="d2c_mail_image_overlay rounded position-absolute top-0 start-0 bottom-0 end-0 opacity-0"><a href="#"><i class="fas fa-download position-absolute top-50 start-50 translate-middle text-white"></i></a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-outline-secondary mt-3 me-2 px-4 py-2">Reply</button>
                                                    <button class="btn btn-outline-secondary mt-3 px-4 py-2">Forward</button>
                                                </div>
                                                <div class="d2c_mail_footer">
                                                    <form action="#" class="border rounded pb-3">
                                                        <textarea cols="30" rows="4" placeholder="Write your message" class="form-control bg-transparent"></textarea>
                                                        <div class="ps-3">
                                                            <input type="file" id="file">
                                                            <label for="file" class="text-muted"><i class="fas fa-paperclip"></i></label>
                                                            <input type="file" id="file1">
                                                            <label for="file1" class="text-muted"><i class="fas fa-link"></i></label>
                                                            <input type="file" id="image">
                                                            <label for="image" class="text-muted"><i class="fas fa-photo-video"></i></label>
                                                        </div>
                                                    </form>
                                                    <div class="text-end mt-2">
                                                        <button class="btn btn-primary">Send now</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Mail Content -->
                                        </div>

                                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
                                            <!-- Draft Data Table -->
                                                    <div class="d2c_mail_nav row mb-4">
                                                        <div class="col-xl-9 col-sm-6 d-inline-flex align-items-center">
                                                            <!-- Select All -->
                                                            <div class="btn bg-success text-success bg-opacity-10 rounded-2 me-2">
                                                                <div class="control-group">
                                                                    <label class="control control-checkbox">
                                                                        <input type="checkbox">
                                                                        <span class="control_indicator"></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <!-- Select All -->

                                                            <!-- Refresh -->
                                                            <button class="btn bg-success text-success bg-opacity-10 rounded-2 me-2">
                                                                <i class="fas fa-sync-alt"></i>
                                                            </button>
                                                            <!-- Refresh -->

                                                            <!-- Archive -->
                                                            <button class="btn bg-warning text-warning bg-opacity-10 rounded-2 me-2">
                                                                <i class="fas fa-archive"></i>
                                                            </button>
                                                            <!-- Archive -->

                                                            <!-- Delete -->
                                                            <button class="btn bg-danger text-danger bg-opacity-10 rounded-2 me-2">
                                                                <i class="fas fa-trash"></i>
                                                            </button>
                                                            <!-- Delete -->

                                                            <!-- Search -->
                                                            <form class="d-none d-xxl-block">
                                                                <div class="input-group">
                                                                    <button class="btn btn-light input-group-text border-0" type="submit">
                                                                        <i class="fas fa-search"></i>
                                                                    </button>
                                                                    <input class="form-control border-0" type="search" placeholder="Search Email" aria-label="Search" required>
                                                                </div>
                                                            </form>
                                                            <!-- Search -->
                                                        </div>
                                                        <div class="col-xl-3 col-sm-6 d-inline-flex align-items-center justify-content-end">
                                                            <p class="mb-0">1-20 of 155</p>
                                                            <!-- Arrow -->
                                                            <div class="d2c_nav_arrow ms-2">
                                                                <button class="btn btn-light rounded-0 rounded-start p-2">
                                                                    <i class="fas fa-chevron-left"></i>
                                                                </button>
                                                                <button class="btn btn-light rounded-0 rounded-end p-2">
                                                                    <i class="fas fa-chevron-right"></i>
                                                                </button>
                                                            </div>
                                                            <!-- Arrow -->
                                                        </div>
                                                    </div>

                                                    <div class="table-responsive">
                                                        <table class="table table-hover mb-0">
                                                            <tbody>
                                                                <tr>
                                                                    <th>
                                                                        <div class="control-group">
                                                                            <label class="control control-checkbox">
                                                                                <input type="checkbox">
                                                                                <span class="control_indicator"></span>
                                                                            </label>
                                                                        </div>
                                                                    </th>
                                                                    <td>
                                                                        <button class="btn active">
                                                                            <i class="far fa-star"></i>
                                                                        </button>
                                                                    </td>
                                                                    <td>
                                                                        <a class="text-primary" href="mailDetails.html">Draft</a>
                                                                    </td>
                                                                    <td style="min-width: 350px">
                                                                        <a class="d2c_mail_subject" href="mailDetails.html">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id orci in...</a>
                                                                    </td>
                                                                    <td>
                                                                        <button class="btn d2c_archive">
                                                                            <i class="fas fa-archive"></i>
                                                                        </button>
                                                                        <button class="btn d2c_trash">
                                                                            <i class="fas fa-trash"></i>
                                                                        </button>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>
                                                                        <div class="control-group">
                                                                            <label class="control control-checkbox">
                                                                                <input type="checkbox">
                                                                                <span class="control_indicator"></span>
                                                                            </label>
                                                                        </div>
                                                                    </th>
                                                                    <td>
                                                                        <button class="btn">
                                                                            <i class="far fa-star"></i>
                                                                        </button>
                                                                    </td>
                                                                    <td>
                                                                        <a class="text-primary" href="mailDetails.html">Draft</a>
                                                                    </td>
                                                                    <td style="min-width: 350px">
                                                                        <a class="d2c_mail_subject" href="mailDetails.html">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id orci in...</a>
                                                                    </td>
                                                                    <td>
                                                                        <button class="btn d2c_archive">
                                                                            <i class="fas fa-archive"></i>
                                                                        </button>
                                                                        <button class="btn d2c_trash">
                                                                            <i class="fas fa-trash"></i>
                                                                        </button>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>
                                                                        <div class="control-group">
                                                                            <label class="control control-checkbox">
                                                                                <input type="checkbox">
                                                                                <span class="control_indicator"></span>
                                                                            </label>
                                                                        </div>
                                                                    </th>
                                                                    <td>
                                                                        <button class="btn">
                                                                            <i class="far fa-star"></i>
                                                                        </button>
                                                                    </td>
                                                                    <td>
                                                                        <a class="text-primary" href="mailDetails.html">Draft</a>
                                                                    </td>
                                                                    <td style="min-width: 350px">
                                                                        <a class="d2c_mail_subject" href="mailDetails.html">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id orci in...</a>
                                                                    </td>
                                                                    <td>
                                                                        <button class="btn d2c_archive">
                                                                            <i class="fas fa-archive"></i>
                                                                        </button>
                                                                        <button class="btn d2c_trash">
                                                                            <i class="fas fa-trash"></i>
                                                                        </button>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>
                                                                        <div class="control-group">
                                                                            <label class="control control-checkbox">
                                                                                <input type="checkbox">
                                                                                <span class="control_indicator"></span>
                                                                            </label>
                                                                        </div>
                                                                    </th>
                                                                    <td>
                                                                        <button class="btn">
                                                                            <i class="far fa-star"></i>
                                                                        </button>
                                                                    </td>
                                                                    <td>
                                                                        <a class="text-primary" href="mailDetails.html">Draft</a>
                                                                    </td>
                                                                    <td style="min-width: 350px">
                                                                        <a class="d2c_mail_subject" href="mailDetails.html">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id orci in...</a>
                                                                    </td>
                                                                    <td>
                                                                        <button class="btn d2c_archive">
                                                                            <i class="fas fa-archive"></i>
                                                                        </button>
                                                                        <button class="btn d2c_trash">
                                                                            <i class="fas fa-trash"></i>
                                                                        </button>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>
                                                                        <div class="control-group">
                                                                            <label class="control control-checkbox">
                                                                                <input type="checkbox">
                                                                                <span class="control_indicator"></span>
                                                                            </label>
                                                                        </div>
                                                                    </th>
                                                                    <td>
                                                                        <button class="btn">
                                                                            <i class="far fa-star"></i>
                                                                        </button>
                                                                    </td>
                                                                    <td>
                                                                        <a class="text-primary" href="mailDetails.html">Draft</a>
                                                                    </td>
                                                                    <td style="min-width: 350px">
                                                                        <a class="d2c_mail_subject" href="mailDetails.html">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id orci in...</a>
                                                                    </td>
                                                                    <td>
                                                                        <button class="btn d2c_archive">
                                                                            <i class="fas fa-archive"></i>
                                                                        </button>
                                                                        <button class="btn d2c_trash">
                                                                            <i class="fas fa-trash"></i>
                                                                        </button>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>
                                                                        <div class="control-group">
                                                                            <label class="control control-checkbox">
                                                                                <input type="checkbox">
                                                                                <span class="control_indicator"></span>
                                                                            </label>
                                                                        </div>
                                                                    </th>
                                                                    <td>
                                                                        <button class="btn">
                                                                            <i class="far fa-star"></i>
                                                                        </button>
                                                                    </td>
                                                                    <td>
                                                                        <a class="text-primary" href="mailDetails.html">Draft</a>
                                                                    </td>
                                                                    <td style="min-width: 350px">
                                                                        <a class="d2c_mail_subject" href="mailDetails.html">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id orci in...</a>
                                                                    </td>
                                                                    <td>
                                                                        <button class="btn d2c_archive">
                                                                            <i class="fas fa-archive"></i>
                                                                        </button>
                                                                        <button class="btn d2c_trash">
                                                                            <i class="fas fa-trash"></i>
                                                                        </button>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>
                                                                        <div class="control-group">
                                                                            <label class="control control-checkbox">
                                                                                <input type="checkbox">
                                                                                <span class="control_indicator"></span>
                                                                            </label>
                                                                        </div>
                                                                    </th>
                                                                    <td>
                                                                        <button class="btn">
                                                                            <i class="far fa-star"></i>
                                                                        </button>
                                                                    </td>
                                                                    <td>
                                                                        <a class="text-primary" href="mailDetails.html">Draft</a>
                                                                    </td>
                                                                    <td style="min-width: 350px">
                                                                        <a class="d2c_mail_subject" href="mailDetails.html">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id orci in...</a>
                                                                    </td>
                                                                    <td>
                                                                        <button class="btn d2c_archive">
                                                                            <i class="fas fa-archive"></i>
                                                                        </button>
                                                                        <button class="btn d2c_trash">
                                                                            <i class="fas fa-trash"></i>
                                                                        </button>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>
                                                                        <div class="control-group">
                                                                            <label class="control control-checkbox">
                                                                                <input type="checkbox">
                                                                                <span class="control_indicator"></span>
                                                                            </label>
                                                                        </div>
                                                                    </th>
                                                                    <td>
                                                                        <button class="btn active">
                                                                            <i class="far fa-star"></i>
                                                                        </button>
                                                                    </td>
                                                                    <td>
                                                                        <a class="text-primary" href="mailDetails.html">Draft</a>
                                                                    </td>
                                                                    <td style="min-width: 350px">
                                                                        <a class="d2c_mail_subject" href="mailDetails.html">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id orci in...</a>
                                                                    </td>
                                                                    <td>
                                                                        <button class="btn d2c_archive">
                                                                            <i class="fas fa-archive"></i>
                                                                        </button>
                                                                        <button class="btn d2c_trash">
                                                                            <i class="fas fa-trash"></i>
                                                                        </button>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                            <!-- Draft Data Table -->
                                        </div>

                                        <div class="tab-pane fade" id="v-pills-disabled" role="tabpanel" aria-labelledby="v-pills-disabled-tab" tabindex="0">
                                            <!-- Sent Mail Data Table -->
                                            <div class="d2c_mail_nav row mb-4">
                                                <div class="col-xl-9 col-sm-6 d-inline-flex align-items-center">
                                                    <!-- Select All -->
                                                    <div class="btn bg-success text-success bg-opacity-10 rounded-2 me-2">
                                                        <div class="control-group">
                                                            <label class="control control-checkbox">
                                                                <input type="checkbox">
                                                                <span class="control_indicator"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <!-- Select All -->

                                                    <!-- Refresh -->
                                                    <button class="btn bg-success text-success bg-opacity-10 rounded-2 me-2">
                                                        <i class="fas fa-sync-alt"></i>
                                                    </button>
                                                    <!-- Refresh -->

                                                    <!-- Archive -->
                                                    <button class="btn bg-warning text-warning bg-opacity-10 rounded-2 me-2">
                                                        <i class="fas fa-archive"></i>
                                                    </button>
                                                    <!-- Archive -->

                                                    <!-- Delete -->
                                                    <button class="btn bg-danger text-danger bg-opacity-10 rounded-2 me-2">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                    <!-- Delete -->

                                                    <!-- Search -->
                                                    <form class="d-none d-xxl-block">
                                                        <div class="input-group">
                                                            <button class="btn btn-light input-group-text border-0" type="submit">
                                                                <i class="fas fa-search"></i>
                                                            </button>
                                                            <input class="form-control border-0" type="search" placeholder="Search Email" aria-label="Search" required>
                                                        </div>
                                                    </form>
                                                    <!-- Search -->
                                                </div>
                                                <div class="col-xl-3 col-sm-6 d-inline-flex align-items-center justify-content-end">
                                                    <p class="mb-0">1-20 of 155</p>
                                                    <!-- Arrow -->
                                                    <div class="d2c_nav_arrow ms-2">
                                                        <button class="btn btn-light rounded-0 rounded-start p-2">
                                                            <i class="fas fa-chevron-left"></i>
                                                        </button>
                                                        <button class="btn btn-light rounded-0 rounded-end p-2">
                                                            <i class="fas fa-chevron-right"></i>
                                                        </button>
                                                    </div>
                                                    <!-- Arrow -->
                                                </div>
                                            </div>

                                            <div class="table-responsive">
                                                <table class="table table-hover mb-0">
                                                    <tbody>
                                                        <tr>
                                                            <th>
                                                                <div class="control-group">
                                                                    <label class="control control-checkbox">
                                                                        <input type="checkbox">
                                                                        <span class="control_indicator"></span>
                                                                    </label>
                                                                </div>
                                                            </th>
                                                            <td>
                                                                <button class="btn active">
                                                                    <i class="far fa-star"></i>
                                                                </button>
                                                            </td>
                                                            <td style="min-width: 210px">To: Esther Howard</td>
                                                            <td style="min-width: 350px">
                                                                <a class="d2c_mail_subject" href="mailDetails.html">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id orci in...</a>
                                                            </td>
                                                            <td>
                                                                <button class="btn d2c_archive">
                                                                    <i class="fas fa-archive"></i>
                                                                </button>
                                                                <button class="btn d2c_trash">
                                                                    <i class="fas fa-trash"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <div class="control-group">
                                                                    <label class="control control-checkbox">
                                                                        <input type="checkbox">
                                                                        <span class="control_indicator"></span>
                                                                    </label>
                                                                </div>
                                                            </th>
                                                            <td>
                                                                <button class="btn">
                                                                    <i class="far fa-star"></i>
                                                                </button>
                                                            </td>
                                                            <td style="min-width: 210px">To: Esther Howard</td>
                                                            <td style="min-width: 350px">
                                                                <a class="d2c_mail_subject" href="mailDetails.html">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id orci in...</a>
                                                            </td>
                                                            <td>
                                                                <button class="btn d2c_archive">
                                                                    <i class="fas fa-archive"></i>
                                                                </button>
                                                                <button class="btn d2c_trash">
                                                                    <i class="fas fa-trash"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <div class="control-group">
                                                                    <label class="control control-checkbox">
                                                                        <input type="checkbox">
                                                                        <span class="control_indicator"></span>
                                                                    </label>
                                                                </div>
                                                            </th>
                                                            <td>
                                                                <button class="btn active">
                                                                    <i class="far fa-star"></i>
                                                                </button>
                                                            </td>
                                                            <td style="min-width: 210px">To: Esther Howard</td>
                                                            <td style="min-width: 350px">
                                                                <a class="d2c_mail_subject" href="mailDetails.html">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id orci in...</a>
                                                            </td>
                                                            <td>
                                                                <button class="btn d2c_archive">
                                                                    <i class="fas fa-archive"></i>
                                                                </button>
                                                                <button class="btn d2c_trash">
                                                                    <i class="fas fa-trash"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <div class="control-group">
                                                                    <label class="control control-checkbox">
                                                                        <input type="checkbox">
                                                                        <span class="control_indicator"></span>
                                                                    </label>
                                                                </div>
                                                            </th>
                                                            <td>
                                                                <button class="btn active">
                                                                    <i class="far fa-star"></i>
                                                                </button>
                                                            </td>
                                                            <td style="min-width: 210px">To: Esther Howard</td>
                                                            <td style="min-width: 350px">
                                                                <a class="d2c_mail_subject" href="mailDetails.html">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id orci in...</a>
                                                            </td>
                                                            <td>
                                                                <button class="btn d2c_archive">
                                                                    <i class="fas fa-archive"></i>
                                                                </button>
                                                                <button class="btn d2c_trash">
                                                                    <i class="fas fa-trash"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <div class="control-group">
                                                                    <label class="control control-checkbox">
                                                                        <input type="checkbox">
                                                                        <span class="control_indicator"></span>
                                                                    </label>
                                                                </div>
                                                            </th>
                                                            <td>
                                                                <button class="btn">
                                                                    <i class="far fa-star"></i>
                                                                </button>
                                                            </td>
                                                            <td style="min-width: 210px">To: Esther Howard</td>
                                                            <td style="min-width: 350px">
                                                                <a class="d2c_mail_subject" href="mailDetails.html">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id orci in...</a>
                                                            </td>
                                                            <td>
                                                                <button class="btn d2c_archive">
                                                                    <i class="fas fa-archive"></i>
                                                                </button>
                                                                <button class="btn d2c_trash">
                                                                    <i class="fas fa-trash"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <div class="control-group">
                                                                    <label class="control control-checkbox">
                                                                        <input type="checkbox">
                                                                        <span class="control_indicator"></span>
                                                                    </label>
                                                                </div>
                                                            </th>
                                                            <td>
                                                                <button class="btn">
                                                                    <i class="far fa-star"></i>
                                                                </button>
                                                            </td>
                                                            <td style="min-width: 210px">To: Esther Howard</td>
                                                            <td style="min-width: 350px">
                                                                <a class="d2c_mail_subject" href="mailDetails.html">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id orci in...</a>
                                                            </td>
                                                            <td>
                                                                <button class="btn d2c_archive">
                                                                    <i class="fas fa-archive"></i>
                                                                </button>
                                                                <button class="btn d2c_trash">
                                                                    <i class="fas fa-trash"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <div class="control-group">
                                                                    <label class="control control-checkbox">
                                                                        <input type="checkbox">
                                                                        <span class="control_indicator"></span>
                                                                    </label>
                                                                </div>
                                                            </th>
                                                            <td>
                                                                <button class="btn">
                                                                    <i class="far fa-star"></i>
                                                                </button>
                                                            </td>
                                                            <td style="min-width: 210px">To: Esther Howard</td>
                                                            <td style="min-width: 350px">
                                                                <a class="d2c_mail_subject" href="mailDetails.html">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id orci in...</a>
                                                            </td>
                                                            <td>
                                                                <button class="btn d2c_archive">
                                                                    <i class="fas fa-archive"></i>
                                                                </button>
                                                                <button class="btn d2c_trash">
                                                                    <i class="fas fa-trash"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <div class="control-group">
                                                                    <label class="control control-checkbox">
                                                                        <input type="checkbox">
                                                                        <span class="control_indicator"></span>
                                                                    </label>
                                                                </div>
                                                            </th>
                                                            <td>
                                                                <button class="btn">
                                                                    <i class="far fa-star"></i>
                                                                </button>
                                                            </td>
                                                            <td style="min-width: 210px">To: Esther Howard</td>
                                                            <td style="min-width: 350px">
                                                                <a class="d2c_mail_subject" href="mailDetails.html">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id orci in...</a>
                                                            </td>
                                                            <td>
                                                                <button class="btn d2c_archive">
                                                                    <i class="fas fa-archive"></i>
                                                                </button>
                                                                <button class="btn d2c_trash">
                                                                    <i class="fas fa-trash"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <div class="control-group">
                                                                    <label class="control control-checkbox">
                                                                        <input type="checkbox">
                                                                        <span class="control_indicator"></span>
                                                                    </label>
                                                                </div>
                                                            </th>
                                                            <td>
                                                                <button class="btn active">
                                                                    <i class="far fa-star"></i>
                                                                </button>
                                                            </td>
                                                            <td style="min-width: 210px">To: Esther Howard</td>
                                                            <td style="min-width: 350px">
                                                                <a class="d2c_mail_subject" href="mailDetails.html">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id orci in...</a>
                                                            </td>
                                                            <td>
                                                                <button class="btn d2c_archive">
                                                                    <i class="fas fa-archive"></i>
                                                                </button>
                                                                <button class="btn d2c_trash">
                                                                    <i class="fas fa-trash"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- Sent Mail Data Table -->
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">
                                            <div class="d2c_mail_nav row mb-4">
                                                <div class="col-xl-9 col-sm-6 d-inline-flex align-items-center">
                                                    <!-- Select All -->
                                                    <div class="btn bg-success text-success bg-opacity-10 rounded-2 me-2">
                                                        <div class="control-group">
                                                            <label class="control control-checkbox">
                                                                <input type="checkbox">
                                                                <span class="control_indicator"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <!-- Select All -->

                                                    <!-- Refresh -->
                                                    <button class="btn bg-success text-success bg-opacity-10 rounded-2 me-2">
                                                        <i class="fas fa-sync-alt"></i>
                                                    </button>
                                                    <!-- Refresh -->

                                                    <!-- Archive -->
                                                    <button class="btn bg-warning text-warning bg-opacity-10 rounded-2 me-2">
                                                        <i class="fas fa-archive"></i>
                                                    </button>
                                                    <!-- Archive -->

                                                    <!-- Delete -->
                                                    <button class="btn bg-danger text-danger bg-opacity-10 rounded-2 me-2">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                    <!-- Delete -->

                                                    <!-- Search -->
                                                    <form class="d-none d-xxl-block">
                                                        <div class="input-group">
                                                            <button class="btn btn-light input-group-text border-0" type="submit">
                                                                <i class="fas fa-search"></i>
                                                            </button>
                                                            <input class="form-control border-0" type="search" placeholder="Search Email" aria-label="Search" required>
                                                        </div>
                                                    </form>
                                                    <!-- Search -->
                                                </div>
                                                <div class="col-xl-3 col-sm-6 d-inline-flex align-items-center justify-content-end">
                                                    <p class="mb-0">1-20 of 155</p>
                                                    <!-- Arrow -->
                                                    <div class="d2c_nav_arrow ms-2">
                                                        <button class="btn btn-light rounded-0 rounded-start p-2">
                                                            <i class="fas fa-chevron-left"></i>
                                                        </button>
                                                        <button class="btn btn-light rounded-0 rounded-end p-2">
                                                            <i class="fas fa-chevron-right"></i>
                                                        </button>
                                                    </div>
                                                    <!-- Arrow -->
                                                </div>
                                            </div>

                                            <div class="table-responsive">
                                                <table class="table table-hover mb-0">
                                                    <tbody>
                                                        <tr>
                                                            <th>
                                                                <div class="control-group">
                                                                    <label class="control control-checkbox">
                                                                        <input type="checkbox">
                                                                        <span class="control_indicator"></span>
                                                                    </label>
                                                                </div>
                                                            </th>
                                                            <td>
                                                                <button class="btn active">
                                                                    <i class="far fa-star"></i>
                                                                </button>
                                                            </td>
                                                            <td style="min-width: 210px">To: Esther Howard</td>
                                                            <td style="min-width: 350px">
                                                                <a class="d2c_mail_subject" href="mailDetails.html">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id orci in...</a>
                                                            </td>
                                                            <td>
                                                                <button class="btn d2c_archive">
                                                                    <i class="fas fa-archive"></i>
                                                                </button>
                                                                <button class="btn d2c_trash">
                                                                    <i class="fas fa-trash"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <div class="control-group">
                                                                    <label class="control control-checkbox">
                                                                        <input type="checkbox">
                                                                        <span class="control_indicator"></span>
                                                                    </label>
                                                                </div>
                                                            </th>
                                                            <td>
                                                                <button class="btn">
                                                                    <i class="far fa-star"></i>
                                                                </button>
                                                            </td>
                                                            <td style="min-width: 210px">To: Esther Howard</td>
                                                            <td style="min-width: 350px">
                                                                <a class="d2c_mail_subject" href="mailDetails.html">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id orci in...</a>
                                                            </td>
                                                            <td>
                                                                <button class="btn d2c_archive">
                                                                    <i class="fas fa-archive"></i>
                                                                </button>
                                                                <button class="btn d2c_trash">
                                                                    <i class="fas fa-trash"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <div class="control-group">
                                                                    <label class="control control-checkbox">
                                                                        <input type="checkbox">
                                                                        <span class="control_indicator"></span>
                                                                    </label>
                                                                </div>
                                                            </th>
                                                            <td>
                                                                <button class="btn active">
                                                                    <i class="far fa-star"></i>
                                                                </button>
                                                            </td>
                                                            <td style="min-width: 210px">To: Esther Howard</td>
                                                            <td style="min-width: 350px">
                                                                <a class="d2c_mail_subject" href="mailDetails.html">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id orci in...</a>
                                                            </td>
                                                            <td>
                                                                <button class="btn d2c_archive">
                                                                    <i class="fas fa-archive"></i>
                                                                </button>
                                                                <button class="btn d2c_trash">
                                                                    <i class="fas fa-trash"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <div class="control-group">
                                                                    <label class="control control-checkbox">
                                                                        <input type="checkbox">
                                                                        <span class="control_indicator"></span>
                                                                    </label>
                                                                </div>
                                                            </th>
                                                            <td>
                                                                <button class="btn active">
                                                                    <i class="far fa-star"></i>
                                                                </button>
                                                            </td>
                                                            <td style="min-width: 210px">To: Esther Howard</td>
                                                            <td style="min-width: 350px">
                                                                <a class="d2c_mail_subject" href="mailDetails.html">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id orci in...</a>
                                                            </td>
                                                            <td>
                                                                <button class="btn d2c_archive">
                                                                    <i class="fas fa-archive"></i>
                                                                </button>
                                                                <button class="btn d2c_trash">
                                                                    <i class="fas fa-trash"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <div class="control-group">
                                                                    <label class="control control-checkbox">
                                                                        <input type="checkbox">
                                                                        <span class="control_indicator"></span>
                                                                    </label>
                                                                </div>
                                                            </th>
                                                            <td>
                                                                <button class="btn">
                                                                    <i class="far fa-star"></i>
                                                                </button>
                                                            </td>
                                                            <td style="min-width: 210px">To: Esther Howard</td>
                                                            <td style="min-width: 350px">
                                                                <a class="d2c_mail_subject" href="mailDetails.html">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id orci in...</a>
                                                            </td>
                                                            <td>
                                                                <button class="btn d2c_archive">
                                                                    <i class="fas fa-archive"></i>
                                                                </button>
                                                                <button class="btn d2c_trash">
                                                                    <i class="fas fa-trash"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <div class="control-group">
                                                                    <label class="control control-checkbox">
                                                                        <input type="checkbox">
                                                                        <span class="control_indicator"></span>
                                                                    </label>
                                                                </div>
                                                            </th>
                                                            <td>
                                                                <button class="btn">
                                                                    <i class="far fa-star"></i>
                                                                </button>
                                                            </td>
                                                            <td style="min-width: 210px">To: Esther Howard</td>
                                                            <td style="min-width: 350px">
                                                                <a class="d2c_mail_subject" href="mailDetails.html">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id orci in...</a>
                                                            </td>
                                                            <td>
                                                                <button class="btn d2c_archive">
                                                                    <i class="fas fa-archive"></i>
                                                                </button>
                                                                <button class="btn d2c_trash">
                                                                    <i class="fas fa-trash"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <div class="control-group">
                                                                    <label class="control control-checkbox">
                                                                        <input type="checkbox">
                                                                        <span class="control_indicator"></span>
                                                                    </label>
                                                                </div>
                                                            </th>
                                                            <td>
                                                                <button class="btn">
                                                                    <i class="far fa-star"></i>
                                                                </button>
                                                            </td>
                                                            <td style="min-width: 210px">To: Esther Howard</td>
                                                            <td style="min-width: 350px">
                                                                <a class="d2c_mail_subject" href="mailDetails.html">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id orci in...</a>
                                                            </td>
                                                            <td>
                                                                <button class="btn d2c_archive">
                                                                    <i class="fas fa-archive"></i>
                                                                </button>
                                                                <button class="btn d2c_trash">
                                                                    <i class="fas fa-trash"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <div class="control-group">
                                                                    <label class="control control-checkbox">
                                                                        <input type="checkbox">
                                                                        <span class="control_indicator"></span>
                                                                    </label>
                                                                </div>
                                                            </th>
                                                            <td>
                                                                <button class="btn">
                                                                    <i class="far fa-star"></i>
                                                                </button>
                                                            </td>
                                                            <td style="min-width: 210px">To: Esther Howard</td>
                                                            <td style="min-width: 350px">
                                                                <a class="d2c_mail_subject" href="mailDetails.html">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id orci in...</a>
                                                            </td>
                                                            <td>
                                                                <button class="btn d2c_archive">
                                                                    <i class="fas fa-archive"></i>
                                                                </button>
                                                                <button class="btn d2c_trash">
                                                                    <i class="fas fa-trash"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <div class="control-group">
                                                                    <label class="control control-checkbox">
                                                                        <input type="checkbox">
                                                                        <span class="control_indicator"></span>
                                                                    </label>
                                                                </div>
                                                            </th>
                                                            <td>
                                                                <button class="btn active">
                                                                    <i class="far fa-star"></i>
                                                                </button>
                                                            </td>
                                                            <td style="min-width: 210px">To: Esther Howard</td>
                                                            <td style="min-width: 350px">
                                                                <a class="d2c_mail_subject" href="mailDetails.html">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id orci in...</a>
                                                            </td>
                                                            <td>
                                                                <button class="btn d2c_archive">
                                                                    <i class="fas fa-archive"></i>
                                                                </button>
                                                                <button class="btn d2c_trash">
                                                                    <i class="fas fa-trash"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab" tabindex="0">
                                            <div class="d2c_mail_nav row mb-4">
                                                <div class="col-xl-9 col-sm-6 d-inline-flex align-items-center">
                                                    <!-- Select All -->
                                                    <div class="btn bg-success text-success bg-opacity-10 rounded-2 me-2">
                                                        <div class="control-group">
                                                            <label class="control control-checkbox">
                                                                <input type="checkbox">
                                                                <span class="control_indicator"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <!-- Select All -->

                                                    <!-- Refresh -->
                                                    <button class="btn bg-success text-success bg-opacity-10 rounded-2 me-2">
                                                        <i class="fas fa-sync-alt"></i>
                                                    </button>
                                                    <!-- Refresh -->

                                                    <!-- Archive -->
                                                    <button class="btn bg-warning text-warning bg-opacity-10 rounded-2 me-2">
                                                        <i class="fas fa-archive"></i>
                                                    </button>
                                                    <!-- Archive -->

                                                    <!-- Delete -->
                                                    <button class="btn bg-danger text-danger bg-opacity-10 rounded-2 me-2">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                    <!-- Delete -->

                                                    <!-- Search -->
                                                    <form class="d-none d-xxl-block">
                                                        <div class="input-group">
                                                            <button class="btn btn-light input-group-text border-0" type="submit">
                                                                <i class="fas fa-search"></i>
                                                            </button>
                                                            <input class="form-control border-0" type="search" placeholder="Search Email" aria-label="Search" required>
                                                        </div>
                                                    </form>
                                                    <!-- Search -->
                                                </div>
                                                <div class="col-xl-3 col-sm-6 d-inline-flex align-items-center justify-content-end">
                                                    <p class="mb-0">1-20 of 155</p>
                                                    <!-- Arrow -->
                                                    <div class="d2c_nav_arrow ms-2">
                                                        <button class="btn btn-light rounded-0 rounded-start p-2">
                                                            <i class="fas fa-chevron-left"></i>
                                                        </button>
                                                        <button class="btn btn-light rounded-0 rounded-end p-2">
                                                            <i class="fas fa-chevron-right"></i>
                                                        </button>
                                                    </div>
                                                    <!-- Arrow -->
                                                </div>
                                            </div>

                                            <div class="table-responsive">
                                                <table class="table table-hover mb-0">
                                                    <tbody>
                                                        <tr>
                                                            <th>
                                                                <div class="control-group">
                                                                    <label class="control control-checkbox">
                                                                        <input type="checkbox">
                                                                        <span class="control_indicator"></span>
                                                                    </label>
                                                                </div>
                                                            </th>
                                                            <td>
                                                                <button class="btn active">
                                                                    <i class="far fa-star"></i>
                                                                </button>
                                                            </td>
                                                            <td style="min-width: 210px">To: Esther Howard</td>
                                                            <td style="min-width: 350px">
                                                                <a class="d2c_mail_subject" href="mailDetails.html">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id orci in...</a>
                                                            </td>
                                                            <td>
                                                                <button class="btn d2c_archive">
                                                                    <i class="fas fa-archive"></i>
                                                                </button>
                                                                <button class="btn d2c_trash">
                                                                    <i class="fas fa-trash"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <div class="control-group">
                                                                    <label class="control control-checkbox">
                                                                        <input type="checkbox">
                                                                        <span class="control_indicator"></span>
                                                                    </label>
                                                                </div>
                                                            </th>
                                                            <td>
                                                                <button class="btn">
                                                                    <i class="far fa-star"></i>
                                                                </button>
                                                            </td>
                                                            <td style="min-width: 210px">To: Esther Howard</td>
                                                            <td style="min-width: 350px">
                                                                <a class="d2c_mail_subject" href="mailDetails.html">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id orci in...</a>
                                                            </td>
                                                            <td>
                                                                <button class="btn d2c_archive">
                                                                    <i class="fas fa-archive"></i>
                                                                </button>
                                                                <button class="btn d2c_trash">
                                                                    <i class="fas fa-trash"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <div class="control-group">
                                                                    <label class="control control-checkbox">
                                                                        <input type="checkbox">
                                                                        <span class="control_indicator"></span>
                                                                    </label>
                                                                </div>
                                                            </th>
                                                            <td>
                                                                <button class="btn active">
                                                                    <i class="far fa-star"></i>
                                                                </button>
                                                            </td>
                                                            <td style="min-width: 210px">To: Esther Howard</td>
                                                            <td style="min-width: 350px">
                                                                <a class="d2c_mail_subject" href="mailDetails.html">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id orci in...</a>
                                                            </td>
                                                            <td>
                                                                <button class="btn d2c_archive">
                                                                    <i class="fas fa-archive"></i>
                                                                </button>
                                                                <button class="btn d2c_trash">
                                                                    <i class="fas fa-trash"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <div class="control-group">
                                                                    <label class="control control-checkbox">
                                                                        <input type="checkbox">
                                                                        <span class="control_indicator"></span>
                                                                    </label>
                                                                </div>
                                                            </th>
                                                            <td>
                                                                <button class="btn active">
                                                                    <i class="far fa-star"></i>
                                                                </button>
                                                            </td>
                                                            <td style="min-width: 210px">To: Esther Howard</td>
                                                            <td style="min-width: 350px">
                                                                <a class="d2c_mail_subject" href="mailDetails.html">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id orci in...</a>
                                                            </td>
                                                            <td>
                                                                <button class="btn d2c_archive">
                                                                    <i class="fas fa-archive"></i>
                                                                </button>
                                                                <button class="btn d2c_trash">
                                                                    <i class="fas fa-trash"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <div class="control-group">
                                                                    <label class="control control-checkbox">
                                                                        <input type="checkbox">
                                                                        <span class="control_indicator"></span>
                                                                    </label>
                                                                </div>
                                                            </th>
                                                            <td>
                                                                <button class="btn">
                                                                    <i class="far fa-star"></i>
                                                                </button>
                                                            </td>
                                                            <td style="min-width: 210px">To: Esther Howard</td>
                                                            <td style="min-width: 350px">
                                                                <a class="d2c_mail_subject" href="mailDetails.html">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id orci in...</a>
                                                            </td>
                                                            <td>
                                                                <button class="btn d2c_archive">
                                                                    <i class="fas fa-archive"></i>
                                                                </button>
                                                                <button class="btn d2c_trash">
                                                                    <i class="fas fa-trash"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <div class="control-group">
                                                                    <label class="control control-checkbox">
                                                                        <input type="checkbox">
                                                                        <span class="control_indicator"></span>
                                                                    </label>
                                                                </div>
                                                            </th>
                                                            <td>
                                                                <button class="btn">
                                                                    <i class="far fa-star"></i>
                                                                </button>
                                                            </td>
                                                            <td style="min-width: 210px">To: Esther Howard</td>
                                                            <td style="min-width: 350px">
                                                                <a class="d2c_mail_subject" href="mailDetails.html">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id orci in...</a>
                                                            </td>
                                                            <td>
                                                                <button class="btn d2c_archive">
                                                                    <i class="fas fa-archive"></i>
                                                                </button>
                                                                <button class="btn d2c_trash">
                                                                    <i class="fas fa-trash"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <div class="control-group">
                                                                    <label class="control control-checkbox">
                                                                        <input type="checkbox">
                                                                        <span class="control_indicator"></span>
                                                                    </label>
                                                                </div>
                                                            </th>
                                                            <td>
                                                                <button class="btn">
                                                                    <i class="far fa-star"></i>
                                                                </button>
                                                            </td>
                                                            <td style="min-width: 210px">To: Esther Howard</td>
                                                            <td style="min-width: 350px">
                                                                <a class="d2c_mail_subject" href="mailDetails.html">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id orci in...</a>
                                                            </td>
                                                            <td>
                                                                <button class="btn d2c_archive">
                                                                    <i class="fas fa-archive"></i>
                                                                </button>
                                                                <button class="btn d2c_trash">
                                                                    <i class="fas fa-trash"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <div class="control-group">
                                                                    <label class="control control-checkbox">
                                                                        <input type="checkbox">
                                                                        <span class="control_indicator"></span>
                                                                    </label>
                                                                </div>
                                                            </th>
                                                            <td>
                                                                <button class="btn">
                                                                    <i class="far fa-star"></i>
                                                                </button>
                                                            </td>
                                                            <td style="min-width: 210px">To: Esther Howard</td>
                                                            <td style="min-width: 350px">
                                                                <a class="d2c_mail_subject" href="mailDetails.html">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id orci in...</a>
                                                            </td>
                                                            <td>
                                                                <button class="btn d2c_archive">
                                                                    <i class="fas fa-archive"></i>
                                                                </button>
                                                                <button class="btn d2c_trash">
                                                                    <i class="fas fa-trash"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Tab Content -->
                            </div>
                        </div>
                        <!-- Mail Box -->
                    </div>
                    <!-- Main Content -->
                </div>
            </div>
            <!-- End:Main Body -->
        </div>
        <!-- End:Main Body-->

        <!-- Right Sidebar canvas -->
        <div class="d2c_sidebar d2c_sidebar_right offcanvas-xl offcanvas-end p-3" tabindex="-1" id="d2c_sidebar_right">
            <div class="d-flex flex-column py-4">
                <div class="row mb-3 border-bottom pb-2">
                    <div class="col-4 d-flex align-items-center">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <button class="btn p-1"><i class="fas fa-search"></i></button>
                            </li>
                            <!-- Notification -->
                            <li class="list-inline-item position-relative me-3">
                                <a class="nav-link p-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-bell fa-fw"></i>
                                    <span class="position-absolute top-0 start-100 translate-middle p-1 bg-warning border border-light rounded-circle"></span>
                                </a>
                                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow border-0 py-0 mt-3">
                                    <h6 class="dropdown-header text-white bg-primary rounded-top py-3">Notifications</h6>
                                    <a class="dropdown-item d-flex align-items-center" href="../pages/notification.html">
                                        <div>
                                            <p class="d2c_notification_first_letter bg-info text-info fw-bold bg-opacity-10 d-flex align-items-center justify-content-center fs-6 fs-md-5 me-2 me-md-3 text-uppercase">w</p>
                                        </div>
                                        <div class="text-truncate d-block">
                                            <h6 class="mb-0">Hi there! I am wondering if you can help me with a problem I've been having.</h6>
                                            <p class="mb-0"><small>With our newest listing, we're welcoming Wrapped Bitcoin (wBTC) to our DeFi Innovation Zone! You can now deposit…</small></p>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="../pages/notification.html">
                                        <div>
                                            <p class="d2c_notification_first_letter bg-danger text-danger fw-bold bg-opacity-10 d-flex align-items-center justify-content-center fs-6 fs-md-5 me-2 me-md-3 text-uppercase">A</p>
                                        </div>
                                        <div class="text-truncate d-block">
                                            <h6 class="mb-0">Airdrop BCHA - 0.25118470 Your airdrop for Nov 15, 2020.</h6>
                                            <p class="mb-0"><small>With our newest listing, we're welcoming Wrapped Bitcoin (wBTC) to our DeFi Innovation Zone! You can now deposit…</small></p>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="../pages/notification.html">
                                        <div>
                                            <p class="d2c_notification_first_letter bg-success text-success fw-bold bg-opacity-10 d-flex align-items-center justify-content-center fs-6 fs-md-5 me-2 me-md-3 text-uppercase">C</p>
                                        </div>
                                        <div class="text-truncate d-block">
                                            <h6 class="mb-0">CyberVeinToken is Now Available on Unity Exchange</h6>
                                            <p class="mb-0"><small>With our newest listing, we're welcoming Wrapped Bitcoin (wBTC) to our DeFi Innovation Zone! You can now deposit…</small></p>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="../pages/notification.html">
                                        <div>
                                            <p class="d2c_notification_first_letter bg-primary text-primary fw-bold bg-opacity-10 d-flex align-items-center justify-content-center fs-6 fs-md-5 me-2 me-md-3 text-uppercase">U</p>
                                        </div>
                                        <div class="text-truncate d-block">
                                            <h6 class="mb-0">Unification is Now Available on Unity Exchange</h6>
                                            <p class="mb-0"><small>With our newest listing, we're welcoming Wrapped Bitcoin (wBTC) to our DeFi Innovation Zone! You can now deposit…</small></p>
                                        </div>
                                    </a>
                                    <a class=" dropdown-item text-center small text-gray-500 d2c_all_notification_btn"
                                        href="../pages/notification.html">See All
                                        Notifications</a>

                                     
                                </div>
                            </li>
                            <!-- End:Notification -->
                        </ul>
                    </div>

                    <div class="col-8">
                        <div class="row">
                            <div class="col-8 d-flex align-items-center text-end pe-0">
                                <div class="w-100">
                                    <p class="mb-0 fw-semibold d2c_profile_name">Wade Warren</p>
                                    <small>Trader</small>
                                </div>
                            </div>
                            <div class="col-4">
                                <a href="{{ route('user.pages.profile') }}"><img class="rounded-circle" src="{{ asset('assets/images/profile/profile-2.jpg') }}" alt="Profile Image" style="height: 40px; width: 40px; object-fit: cover;"></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d2c_balance mb-2">
                    <p class="mb-1">My Balance</p>
                    <div class="row">
                        <div class="col">
                            <h5 class="fw-semibold">$10,208.73</h5>
                        </div>
                        <div class="col">
                            <div class="d-flex align-items-center d2c_percentage_rate ">
                                <span class="d-inline-flex px-2 py-1 fw-semibold text-success bg-success bg-opacity-25 rounded-2">+1.25%</span>
                                <i class="fas fa-arrow-right text-white bg-success rounded-circle"></i>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="card d2c_wallet_card mb-4" style="background: linear-gradient(180deg, #6271ebe0 0%, #fc76b7 373.31%), url('../assets/images/triangle_bg.png');">
                    <div class="card-body">
                        <div class="mb-4">
                            <p class="mb-1 text-white">Balance</p>
                            <h5 class="fw-semibold">$10,208.73</h5>
                        </div>
                        <div class="row">
                            <div class="col">
                                <small>Card Holder</small>
                                <h6>Esther Howard</h6>
                            </div>
                            <div class="col-5">
                                <small>Valid Thru</small>
                                <h6>08/2023</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d2c_convert mb-4">
                    <p class="fw-semibold">Quick Convert</p>

                    <form class="form-validation" novalidate>
                        <label for="conver_amount">Amount</label>
                        <div class="input-group border-0 mb-3">
                            <input type="number" class="form-control border-0" id="conver_amount" placeholder="0.00" required>
                            <select class="form-select form-control border-0 pe-0" id="inputGroupSelect01">
                                <option value="1" selected>ETH</option>
                                <option value="2">USD</option>
                            </select>
                        </div>
                        <label for="convert_coin">Convert Coin</label>
                        <div class="input-group border-0 mb-3">
                            <input type="number" class="form-control border-0" id="convert_coin" placeholder="0.00" required>
                            <select class="form-select form-control border-0 pe-0" id="inputGroupSelect02">
                                <option value="1">ETH</option>
                                <option value="2" selected>USD</option>
                            </select>
                        </div>
                        <button type="submit" class="btn w-100 text-success bg-success bg-opacity-25">Convert</button>
                    </form>
                </div>

                <div class="d2c_convert form-validation">
                    <p class="fw-semibold">Quick Transfer</p>

                    <form class="form-validation" novalidate>
                        <label for="send_email">To</label>
                        <div class="input-group border-0 mb-3">
                            <input type="email" class="form-control border-0" id="send_email" placeholder="Send Email" required>
                        </div>
                        <label for="send_amount">Amount</label>
                        <div class="input-group border-0 mb-3">
                            <input type="number" class="form-control border-0" id="send_amount" placeholder="0.00" required>
                            <select class="form-select form-control border-0 pe-0" id="inputGroupSelect03">
                                <option value="1" selected>ETH</option>
                                <option value="2">USD</option>
                            </select>
                        </div>
                        <button type="submit" class="btn w-100 text-success bg-success bg-opacity-25">Transfer</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- End:Right Sidebar -->

    </div>

    <!-- Initial  Javascript -->
    <script src="{{ asset('lib/jQuery/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('lib/bootstrap_5/bootstrap.bundle.min.js') }}"></script>
    <!-- custom js -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <!-- DataTable JS -->
    <script src="{{ asset('lib/DataTables/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/script.js') }}"></script>
    <script src="{{ asset('lib/DataTables/dataTables.select.min.js') }}"></script>
    <script src="{{ asset('lib/DataTables/dataTables.buttons.min.js') }}"></script>
</body>
</html>


<!-- 
    Template Name: FundRows - Free Bootstrap Crypto Dashboard Template
    Template URL: https://www.designtocodes.com/product/fundrows-free-crypto-dashboard-template/
    Description: Build a user-friendly crypto dashboard with FundRows free crypto dashboard template. Enjoy full responsiveness, and customizable for your crypto projects. With FundRows, developers can create a unique crypto admin dashboard that is visually impressive.
    Author: DesignToCodes
    Author URL: https://www.designtocodes.com
    Text Domain: FundRows
 -->

