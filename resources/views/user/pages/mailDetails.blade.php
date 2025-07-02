@extends('user.main')
@section('content')
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
@endsection