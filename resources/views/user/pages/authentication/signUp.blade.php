<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('assets/images/logo/logo-sm.png') }}" type="image/gif" sizes="16x16">
    <title>Sign Up</title>
    <meta name="og:description" content="Build a user-friendly crypto dashboard with FundRows free crypto dashboard template. Enjoy full responsiveness, and customizable for your crypto projects. With FundRows, developers can create a unique crypto admin dashboard that is visually impressive.">
    <meta name="robots" content="index, follow">
    <meta name="og:title" property="og:title" content="FundRows – Free Bootstrap Crypto Dashboard Template">
    <meta property="og:image" content="https://www.designtocodes.com/wp-content/uploads/2023/10/FundRows-%E2%80%93-Free-Bootstrap-Crypto-Dashboard-Template-Thumbnail.jpg">
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
        <img src="{{ asset('assets/images/logo/logo.png') }}" alt="DesignToCodes">
    </div>
    <!-- Preloader End -->
    <section class="d2c_login_system d2c_sign_up d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3 col-xl-5 mx-xl-auto">
                    <div class="d2c_login_wrapper">
                        <div class="text-center mb-4">
                            <h4 class="text-capitalize">Create your account</h4>
                            <p class="text-muted">Already have an account? <a href="{{ route('user.pages.authentication.signIn') }}" class="text-capitalize text-success text-decoration-none d2c_link">Sign in here</a>
                            </p>
                        </div>
                        <form action="#">
                            <div class="mb-3">
                                <label class="form-label">Full Name:</label>
                                <input type="text" class="form-control" placeholder="First Name" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Your Email</label>
                                <input type="email" class="form-control" placeholder="Enter your mail" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <div class="input-group">
                                    <input type="text" class="form-control border-end-0"
                                        placeholder="8+ character required" aria-describedby="button-addon2">
                                    <button class="btn ps-0 border-start-0" type="button" id="button-addon2"><i
                                            class="far fa-eye-slash"></i></button>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Confirm Password</label>
                                <div class="input-group">
                                    <input type="text" class="form-control border-end-0" placeholder="Re-enter Password"
                                        aria-describedby="button-addon3">
                                    <button class="btn ps-0 border-start-0" type="button" id="button-addon3"><i
                                            class="far fa-eye-slash"></i></button>
                                </div>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label text-muted" for="exampleCheck1">I accept the <a href="#" class="d2c_link text-success text-decoration-none text-capitalize">Terms and Conditions</a></label>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary w-100 text-capitalize">Create
                                    an account</button>
                            </div>
                        </form>
                        <button
                            class="d2c_link_btn btn w-100 d-flex align-items-center justify-content-center text-capitalize">
                            <img src="{{ asset('assets/images/google.png') }}" class="me-2" alt="google image">
                            Sing up With Google
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Initial  Javascript -->
    <script src="{{ asset('lib/jQuery/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('lib/bootstrap_5/bootstrap.bundle.min.js') }}"></script>

    <!-- custom js -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>


<!-- 
    Template Name: FundRows – Free Bootstrap Crypto Dashboard Template
    Template URL: https://www.designtocodes.com/product/fundrows-free-crypto-dashboard-template/
    Description: Build a user-friendly crypto dashboard with FundRows free crypto dashboard template. Enjoy full responsiveness, and customizable for your crypto projects. With FundRows, developers can create a unique crypto admin dashboard that is visually impressive.
    Author: DesignToCodes
    Author URL: https://www.designtocodes.com
    Text Domain: FundRows
 -->