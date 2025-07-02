@extends('user.main')
@section('content')
<!-- Main Body-->
<div class="d2c_main p-4">

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
        <h4 class="text-capitalize">Blank</h4>
    </div>
</div>
<!-- End:Title -->

<!-- copyright -->
<div class="d2c_copyright bg-success bg-opacity-10 p-3 text-center mt-4">
    <p class="mb-0 fw-semibold">© 2023 <a href="https://www.designtocodes.com/" target="_blank" class="fw-bold">DesignToCodes</a>, All rights Reserved</p>
</div>

</div>
<!-- End:Main Body -->
@endsection
