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
                    <h4 class="text-capitalize">Email</h4>
                </div>
            </div>
            <!-- End:Title -->

                <div class="row">
                    <div class="col-md-12">
                        <!-- Mail Box -->
                        <div class="card">
                            <div class="row d2c_mail_tab">
                                <!-- Tab Nav -->
                                <div class="col-xxl-3 mb-4 mb-xl-0">
                                    <div class="bg-success bg-opacity-10 rounded-4 rounded-end p-4 h-100">
                                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                            <!-- Compose Btn -->
                                            <button class="btn btn-primary w-100 mb-4 d2c_compose_btn" id="v-pills-compose-tab" data-bs-toggle="pill" data-bs-target="#v-pills-compose" type="button" role="tab" aria-controls="v-pills-compose" aria-selected="true">Compose</button>
                                            <!-- Compose Btn -->

                                            <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
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
                                <div class="col-xxl-9">
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
                                                    <div class="file-chooser p-1 ps-2">
                                                        <label for="file-upload" title="file upload"><i class="fas fa-paperclip"></i></label>
                                                        <input id="file-upload" class="file-chooser__input" type="file" multiple hidden>
                                                    </div>
                                                    <div class="p-1">
                                                        <i class="fas fa-link"></i>
                                                    </div>
                                                    <div class="p-1">
                                                        <i title="emoji" class="fas fa-smile"></i>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
                                            <!-- Data Table -->
                                            <div class="d2c_mail_nav row mb-4">
                                                <div class="col-xl-8 col-sm-6 d-inline-flex align-items-center">
                                                    <!-- Select All -->
                                                    <div class="btn bg-success text-success bg-opacity-10 rounded-2 me-2 px-2 py-1 py-md-2 px-md-4">
                                                        <div class="control-group">
                                                            <label class="control control-checkbox">
                                                                <input type="checkbox">
                                                                <span class="control_indicator"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <!-- Select All -->

                                                    <!-- Refresh -->
                                                    <button class="btn bg-success text-success bg-opacity-10 rounded-2 me-2 px-2 py-1 py-md-2 px-md-4">
                                                        <i class="fas fa-sync-alt"></i>
                                                    </button>
                                                    <!-- Refresh -->

                                                    <!-- Archive -->
                                                    <button class="btn bg-warning text-warning bg-opacity-10 rounded-2 me-2 px-2 py-1 py-md-2 px-md-4">
                                                        <i class="fas fa-archive"></i>
                                                    </button>
                                                    <!-- Archive -->

                                                    <!-- Delete -->
                                                    <button class="btn bg-danger text-danger bg-opacity-10 rounded-2 me-2 px-2 py-1 py-md-2 px-md-4">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                    <!-- Delete -->

                                                    <!-- Search -->
                                                    <form class="d-none d-xxl-block">
                                                        <div class="input-group">
                                                            <button class="btn input-group-text border-0 rounded-start" type="submit">
                                                                <i class="fas fa-search"></i>
                                                            </button>
                                                            <input class="form-control border-0" type="search" placeholder="Search Email" aria-label="Search" required>
                                                        </div>
                                                    </form>
                                                    <!-- Search -->
                                                </div>
                                                <div class="col-xl-4 col-sm-6 d-inline-flex align-items-center justify-content-md-end mt-3 mt-md-0">
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
                                                            <td style="min-width: 150px"><a href="{{ route('user.pages.mailDetails') }}">Walter Reuter</a></td>
                                                            <td class="active" style="min-width: 350px">
                                                                <a class="d2c_mail_subject" href="{{ route('user.pages.mailDetails') }}">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id in...</a>
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
                                                            <td style="min-width: 150px"><a href="{{ route('user.pages.mailDetails') }}">Walter Reuter</a></td>
                                                            <td style="min-width: 350px">
                                                                <a class="d2c_mail_subject" href="{{ route('user.pages.mailDetails') }}">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id in...</a>
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
                                                            <td style="min-width: 150px"><a href="{{ route('user.pages.mailDetails') }}">Walter Reuter</a></td>
                                                            <td style="min-width: 350px">
                                                                <a class="d2c_mail_subject" href="{{ route('user.pages.mailDetails') }}">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id in...</a>
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
                                                            <td style="min-width: 150px"><a href="{{ route('user.pages.mailDetails') }}">Walter Reuter</a></td>
                                                            <td style="min-width: 350px">
                                                                <a class="d2c_mail_subject" href="{{ route('user.pages.mailDetails') }}">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id in...</a>
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
                                                            <td style="min-width: 150px"><a href="{{ route('user.pages.mailDetails') }}">Walter Reuter</a></td>
                                                            <td style="min-width: 350px">
                                                                <a class="d2c_mail_subject" href="{{ route('user.pages.mailDetails') }}">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id in...</a>
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
                                                            <td style="min-width: 150px"><a href="{{ route('user.pages.mailDetails') }}">Walter Reuter</a></td>
                                                            <td style="min-width: 350px">
                                                                <a class="d2c_mail_subject" href="{{ route('user.pages.mailDetails') }}">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id in...</a>
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
                                                            <td style="min-width: 150px"><a href="{{ route('user.pages.mailDetails') }}">Walter Reuter</a></td>
                                                            <td style="min-width: 350px">
                                                                <a class="d2c_mail_subject" href="{{ route('user.pages.mailDetails') }}">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id in...</a>
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
                                                            <td style="min-width: 150px"><a href="{{ route('user.pages.mailDetails') }}">Walter Reuter</a></td>
                                                            <td style="min-width: 350px">
                                                                <a class="d2c_mail_subject" href="{{ route('user.pages.mailDetails') }}">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id in...</a>
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
                                                            <td style="min-width: 150px"><a href="{{ route('user.pages.mailDetails') }}">Walter Reuter</a></td>
                                                            <td style="min-width: 350px">
                                                                <a class="d2c_mail_subject" href="{{ route('user.pages.mailDetails') }}">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id in...</a>
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
                                                            <td style="min-width: 150px"><a href="{{ route('user.pages.mailDetails') }}">Walter Reuter</a></td>
                                                            <td style="min-width: 350px">
                                                                <a class="d2c_mail_subject" href="{{ route('user.pages.mailDetails') }}">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id in...</a>
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
                                                            <td style="min-width: 150px"><a href="{{ route('user.pages.mailDetails') }}">Walter Reuter</a></td>
                                                            <td style="min-width: 350px">
                                                                <a class="d2c_mail_subject" href="{{ route('user.pages.mailDetails') }}">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id in...</a>
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
                                                            <td style="min-width: 150px"><a href="{{ route('user.pages.mailDetails') }}">Walter Reuter</a></td>
                                                            <td style="min-width: 350px">
                                                                <a class="d2c_mail_subject" href="{{ route('user.pages.mailDetails') }}">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id in...</a>
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
                                                            <td style="min-width: 150px"><a href="{{ route('user.pages.mailDetails') }}">Walter Reuter</a></td>
                                                            <td style="min-width: 350px">
                                                                <a class="d2c_mail_subject" href="{{ route('user.pages.mailDetails') }}">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id in...</a>
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
                                                            <td style="min-width: 150px"><a href="{{ route('user.pages.mailDetails') }}">Walter Reuter</a></td>
                                                            <td style="min-width: 350px">
                                                                <a class="d2c_mail_subject" href="{{ route('user.pages.mailDetails') }}">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id in...</a>
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
                                                            <td style="min-width: 150px"><a href="{{ route('user.pages.mailDetails') }}">Walter Reuter</a></td>
                                                            <td style="min-width: 350px">
                                                                <a class="d2c_mail_subject" href="{{ route('user.pages.mailDetails') }}">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id in...</a>
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
                                                            <td style="min-width: 150px"><a href="{{ route('user.pages.mailDetails') }}">Walter Reuter</a></td>
                                                            <td style="min-width: 350px">
                                                                <a class="d2c_mail_subject" href="{{ route('user.pages.mailDetails') }}">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id in...</a>
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
                                                            <td style="min-width: 150px"><a href="{{ route('user.pages.mailDetails') }}">Walter Reuter</a></td>
                                                            <td style="min-width: 350px">
                                                                <a class="d2c_mail_subject" href="{{ route('user.pages.mailDetails') }}">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id in...</a>
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
                                                            <td style="min-width: 150px"><a href="{{ route('user.pages.mailDetails') }}">Walter Reuter</a></td>
                                                            <td style="min-width: 350px">
                                                                <a class="d2c_mail_subject" href="{{ route('user.pages.mailDetails') }}">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id in...</a>
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
                                                            <td style="min-width: 150px"><a href="{{ route('user.pages.mailDetails') }}">Walter Reuter</a></td>
                                                            <td style="min-width: 350px">
                                                                <a class="d2c_mail_subject" href="{{ route('user.pages.mailDetails') }}">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id in...</a>
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
                                                            <td style="min-width: 150px"><a href="{{ route('user.pages.mailDetails') }}">Walter Reuter</a></td>
                                                            <td style="min-width: 350px">
                                                                <a class="d2c_mail_subject" href="{{ route('user.pages.mailDetails') }}">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id in...</a>
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
                                                            <td style="min-width: 150px"><a href="{{ route('user.pages.mailDetails') }}">Walter Reuter</a></td>
                                                            <td style="min-width: 350px">
                                                                <a class="d2c_mail_subject" href="{{ route('user.pages.mailDetails') }}">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id in...</a>
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
                                                            <td style="min-width: 150px"><a href="{{ route('user.pages.mailDetails') }}">Walter Reuter</a></td>
                                                            <td style="min-width: 350px">
                                                                <a class="d2c_mail_subject" href="{{ route('user.pages.mailDetails') }}">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id in...</a>
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
                                                            <td style="min-width: 150px"><a href="{{ route('user.pages.mailDetails') }}">Walter Reuter</a></td>
                                                            <td style="min-width: 350px">
                                                                <a class="d2c_mail_subject" href="{{ route('user.pages.mailDetails') }}">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id in...</a>
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
                                                            <td style="min-width: 150px"><a href="{{ route('user.pages.mailDetails') }}">Walter Reuter</a></td>
                                                            <td style="min-width: 350px">
                                                                <a class="d2c_mail_subject" href="{{ route('user.pages.mailDetails') }}">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id in...</a>
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
                                                            <td style="min-width: 150px"><a href="{{ route('user.pages.mailDetails') }}">Walter Reuter</a></td>
                                                            <td style="min-width: 350px">
                                                                <a class="d2c_mail_subject" href="{{ route('user.pages.mailDetails') }}">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id in...</a>
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
                                                            <td style="min-width: 150px"><a href="{{ route('user.pages.mailDetails') }}">Walter Reuter</a></td>
                                                            <td style="min-width: 350px">
                                                                <a class="d2c_mail_subject" href="{{ route('user.pages.mailDetails') }}">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id in...</a>
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
                                                            <td style="min-width: 150px"><a href="{{ route('user.pages.mailDetails') }}">Walter Reuter</a></td>
                                                            <td style="min-width: 350px">
                                                                <a class="d2c_mail_subject" href="{{ route('user.pages.mailDetails') }}">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id in...</a>
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
                                                            <td style="min-width: 150px"><a href="{{ route('user.pages.mailDetails') }}">Walter Reuter</a></td>
                                                            <td style="min-width: 350px">
                                                                <a class="d2c_mail_subject" href="{{ route('user.pages.mailDetails') }}">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id in...</a>
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
                                                            <td style="min-width: 150px"><a href="{{ route('user.pages.mailDetails') }}">Walter Reuter</a></td>
                                                            <td style="min-width: 350px">
                                                                <a class="d2c_mail_subject" href="{{ route('user.pages.mailDetails') }}">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id in...</a>
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
                                                            <td style="min-width: 150px"><a href="{{ route('user.pages.mailDetails') }}">Walter Reuter</a></td>
                                                            <td style="min-width: 350px">
                                                                <a class="d2c_mail_subject" href="{{ route('user.pages.mailDetails') }}">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id in...</a>
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
                                                            <td style="min-width: 150px"><a href="{{ route('user.pages.mailDetails') }}">Walter Reuter</a></td>
                                                            <td style="min-width: 350px">
                                                                <a class="d2c_mail_subject" href="{{ route('user.pages.mailDetails') }}">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id in...</a>
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
                                                            <td style="min-width: 150px"><a href="{{ route('user.pages.mailDetails') }}">Walter Reuter</a></td>
                                                            <td style="min-width: 350px">
                                                                <a class="d2c_mail_subject" href="{{ route('user.pages.mailDetails') }}">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id in...</a>
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
                                                            <td style="min-width: 150px"><a href="{{ route('user.pages.mailDetails') }}">Walter Reuter</a></td>
                                                            <td style="min-width: 350px">
                                                                <a class="d2c_mail_subject" href="{{ route('user.pages.mailDetails') }}">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id in...</a>
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
                                                            <td style="min-width: 150px"><a href="{{ route('user.pages.mailDetails') }}">Walter Reuter</a></td>
                                                            <td style="min-width: 350px">
                                                                <a class="d2c_mail_subject" href="{{ route('user.pages.mailDetails') }}">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id in...</a>
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
                                                            <td style="min-width: 150px"><a href="{{ route('user.pages.mailDetails') }}">Walter Reuter</a></td>
                                                            <td style="min-width: 350px">
                                                                <a class="d2c_mail_subject" href="{{ route('user.pages.mailDetails') }}">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id in...</a>
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
                                                            <td style="min-width: 150px"><a href="{{ route('user.pages.mailDetails') }}">Walter Reuter</a></td>
                                                            <td style="min-width: 350px">
                                                                <a class="d2c_mail_subject" href="{{ route('user.pages.mailDetails') }}">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id in...</a>
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
                                                            <td style="min-width: 150px"><a href="{{ route('user.pages.mailDetails') }}">Walter Reuter</a></td>
                                                            <td style="min-width: 350px">
                                                                <a class="d2c_mail_subject" href="{{ route('user.pages.mailDetails') }}">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id in...</a>
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
                                                            <td style="min-width: 150px"><a href="{{ route('user.pages.mailDetails') }}">Walter Reuter</a></td>
                                                            <td style="min-width: 350px">
                                                                <a class="d2c_mail_subject" href="{{ route('user.pages.mailDetails') }}">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id in...</a>
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
                                                            <td style="min-width: 150px"><a href="{{ route('user.pages.mailDetails') }}">Walter Reuter</a></td>
                                                            <td style="min-width: 350px">
                                                                <a class="d2c_mail_subject" href="{{ route('user.pages.mailDetails') }}">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id in...</a>
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
                                                            <td style="min-width: 150px"><a href="{{ route('user.pages.mailDetails') }}">Walter Reuter</a></td>
                                                            <td style="min-width: 350px">
                                                                <a class="d2c_mail_subject" href="{{ route('user.pages.mailDetails') }}">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id in...</a>
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
                                                            <td style="min-width: 150px"><a href="{{ route('user.pages.mailDetails') }}">Walter Reuter</a></td>
                                                            <td style="min-width: 350px">
                                                                <a class="d2c_mail_subject" href="{{ route('user.pages.mailDetails') }}">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id in...</a>
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
                                                            <td style="min-width: 150px"><a href="{{ route('user.pages.mailDetails') }}">Walter Reuter</a></td>
                                                            <td style="min-width: 350px">
                                                                <a class="d2c_mail_subject" href="{{ route('user.pages.mailDetails') }}">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id in...</a>
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
                                                            <td style="min-width: 150px"><a href="{{ route('user.pages.mailDetails') }}">Walter Reuter</a></td>
                                                            <td style="min-width: 350px">
                                                                <a class="d2c_mail_subject" href="{{ route('user.pages.mailDetails') }}">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id in...</a>
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
                                                                <a class="d2c_mail_subject" href="{{ route('user.pages.mailDetails') }}">Statement belting with double - Duis nec ligula sed augue consequat mattis sed egat urna, gravida id orci in...</a>
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

            <!-- copyright -->
            <div class="d2c_copyright bg-success bg-opacity-10 p-3 text-center mt-4">
                <p class="mb-0 fw-semibold">© 2023 <a href="https://www.designtocodes.com/" target="_blank" class="fw-bold">DesignToCodes</a>, All rights Reserved</p>
            </div>
        </div>
        <!-- End:Main Body-->


@endsection