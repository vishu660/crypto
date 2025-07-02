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
        <h4 class="text-capitalize fw-bold">Help and support</h4>
    </div>
</div>
<!-- End:Title -->

<div class="row">
    <div class="col-xxl-8 mb-4 mb-xxl-0 d2c_help_table">
        <div class="card d2c_help">
            <div class="card-body table-responsive">
                <h5 class="fw-semibold mb-4">Help</h5>
                <table class="table mb-0">
                    <thead>
                        <tr>
                            <th style="min-width: 100px;">User ID</th>
                            <th style="min-width: 150px;">Date</th>
                            <th style="min-width: 270px;">Problem</th>
                            <th style="min-width: 150px;">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1001</td>
                            <td>2022-01-01</td>
                            <td>Cannot access email</td>
                            <td class="text-success">Complete</td>
                        </tr>
                        <tr>
                            <td>1002</td>
                            <td>2022-01-02</td>
                            <td>Printer not working</td>
                            <td class="text-success">Complete</td>
                        </tr>
                        <tr>
                            <td>1003</td>
                            <td>2022-01-03</td>
                            <td>Software installation issue</td>
                            <td class="text-warning">In-Progress</td>
                        </tr>
                        <tr>
                            <td>1004</td>
                            <td>2022-01-04</td>
                            <td>Internet connection problem</td>
                            <td class="text-warning">In-Progress</td>
                        </tr>
                        <tr>
                            <td>1005</td>
                            <td>2022-01-05</td>
                            <td>Need access to shared folder</td>
                            <td class="text-success">Complete</td>
                        </tr>
                        <tr>
                            <td>1006</td>
                            <td>2022-01-06</td>
                            <td>Cannot open PDF files</td>
                            <td class="text-success">Complete</td>
                        </tr>
                        <tr>
                            <td>1007</td>
                            <td>2022-01-07</td>
                            <td>Need password reset</td>
                            <td class="text-success">Complete</td>
                        </tr>
                        <tr>
                            <td>1008</td>
                            <td>2022-01-08</td>
                            <td>System error message</td>
                            <td class="text-danger">Incomplete</td>
                        </tr>
                        <tr>
                            <td>1009</td>
                            <td>2022-01-09</td>
                            <td>Slow computer performance</td>
                            <td class="text-danger">Incomplete</td>
                        </tr>
                        <tr>
                            <td>1010</td>
                            <td>2022-01-10</td>
                            <td>Email spam issue</td>
                            <td class="text-success">Complete</td>
                        </tr>
                        <tr>
                            <td>1011</td>
                            <td>2022-01-08</td>
                            <td>System error message</td>
                            <td class="text-danger">Incomplete</td>
                        </tr>
                        <tr>
                            <td>1012</td>
                            <td>2022-01-09</td>
                            <td>Slow computer performance</td>
                            <td class="text-success">Complete</td>
                        </tr>
                    </tbody>
                </table>
            </div>
              
        </div>
    </div>
    <!-- support chat  -->
    <div class="col-xl">
        <div class="card">
            <div class="card-body">
                <h5 class="fw-semibold mb-4">Support</h5>
                <div class="d2c_chat_box">
                    <div class="d2c_chat_header rounded bg-primary">
                        <div class="d-flex align-items-center py-1">
                            <div class="position-relative">
                                <a href="{{ route('user.pages.profile') }}">
                                    <img src="{{ asset('assets/images/avatar/man-1.png') }}" class="rounded-circle mr-1" alt="Sharon Lessman" width="40" height="40">
                                </a>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <strong class="text-white">Selena Wagner</strong>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-primary pe-0" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v"></i>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">Profile</a></li>
                                    <li><a class="dropdown-item" href="#">Block</a></li>
                                    <li><a class="dropdown-item" href="#">Poke</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="position-relative">
                        <div class="chat-messages">
                            <div class="chat-message-wrapper text-end pb-4">
                                <p class="mb-2">10:20 am</p>
                                <div class="chat-message-right">
                                    <div>
                                        <img src="{{ asset('assets/images/avatar/man-2.png') }}" class="rounded-circle mr-1" alt="Chris Wood" width="40" height="40">
                                    </div>
                                    <div class="flex-shrink-1 p-2 me-2">It's Great opportunity to work.</div>
                                </div>
                            </div>

                            <div class="chat-message-wrapper me-auto pb-4">
                                <p class="mb-2">10:20 am</p>
                                <div class="chat-message-left">
                                    <div>
                                        <img src="{{ asset('assets/images/avatar/man-1.png') }}" class="rounded-circle mr-1" alt="Sharon Lessman" width="40" height="40">
                                    </div>
                                    <div class="flex-shrink-1 p-2 ms-2">Yeah,Of Course.</div>
                                </div>
                            </div>

                            <div class="chat-message-wrapper  text-end pb-4">
                                <p class="mb-2">10:30 am</p>
                                <div class="chat-message-right">
                                    <div>
                                        <img src="{{ asset('assets/images/avatar/man-2.png') }}" class="rounded-circle mr-1" alt="Chris Wood" width="40" height="40">
                                    </div>
                                    <div class="flex-shrink-1 p-2 me-2">Duis aute irure dolor in reprehenderit</div>
                                </div>
                            </div>

                            <div class="chat-message-wrapper me-auto pb-4">
                                <p class="mb-2">10:20 am</p>
                                <div class="chat-message-left">
                                    <div>
                                        <img src="{{ asset('assets/images/avatar/man-1.png') }}" class="rounded-circle mr-1" alt="Sharon Lessman" width="40" height="40">
                                    </div>
                                    <div class="flex-shrink-1 p-2 ms-2">Velit esse cillum dolore eu fugiat nulla pariatur</div>
                                </div>
                            </div>

                            <div class="chat-message-wrapper  text-end pb-4">
                                <p class="mb-2">10:49 am</p>
                                <div class="chat-message-right">
                                    <div>
                                        <img src="{{ asset('assets/images/avatar/man-2.png') }}" class="rounded-circle mr-1" alt="Chris Wood" width="40" height="40">
                                    </div>
                                    <div class="flex-shrink-1 p-2 me-2">Excepteur sint occaecat cupidatat non proident.</div>
                                </div>
                            </div>

                            <div class="chat-message-wrapper me-auto pb-4">
                                <p class="mb-2">10:20 am</p>
                                <div class="chat-message-left">
                                    <div>
                                        <img src="{{ asset('assets/images/avatar/man-1.png') }}" class="rounded-circle mr-1" alt="Sharon Lessman" width="40" height="40">
                                    </div>
                                    <div class="flex-shrink-1 p-2 ms-2">sunt in culpa qui officia deserunt.</div>
                                </div>
                            </div>

                            <div class="chat-message-wrapper  text-end pb-4">
                                <p class="mb-2">10:50 am</p>
                                <div class="chat-message-right">
                                    <div>
                                        <img src="{{ asset('assets/images/avatar/man-2.png') }}" class="rounded-circle mr-1" alt="Chris Wood" width="40" height="40">
                                    </div>
                                    <div class="flex-shrink-1 p-2 me-2">Quis nostrud exercitation ullamco laboris.</div>
                                </div>
                            </div>

                            <div class="chat-message-wrapper  text-end pb-4">
                                <p class="mb-2">10:55 am</p>
                                <div class="chat-message-right">
                                    <div>
                                        <img src="{{ asset('assets/images/avatar/man-2.png') }}" class="rounded-circle mr-1" alt="Chris Wood" width="40" height="40">
                                    </div>
                                    <div class="flex-shrink-1 p-2 me-2">sed do eiusmod tempor incididunt ut labore</div>
                                </div>
                            </div>

                            <div class="chat-message-wrapper me-auto pb-4">
                                <p class="mb-2">10:20 am</p>
                                <div class="chat-message-left">
                                    <div>
                                        <img src="{{ asset('assets/images/avatar/man-1.png') }}" class="rounded-circle mr-1" alt="Sharon Lessman" width="40" height="40">
                                    </div>
                                    <div class="flex-shrink-1 p-2 ms-2">Yeah,Of Course.</div>
                                </div>
                            </div>

                            <div class="chat-message-wrapper  text-end pb-4">
                                <p class="mb-2">10:56 am</p>
                                <div class="chat-message-right">
                                    <div>
                                        <img src="{{ asset('assets/images/avatar/man-2.png') }}" class="rounded-circle mr-1" alt="Chris Wood" width="40" height="40">
                                    </div>
                                    <div class="flex-shrink-1 p-2 me-2">Lorem ipsum dolor sit amet.</div>
                                </div>
                            </div>

                            <div class="chat-message-wrapper me-auto pb-4">
                                <p class="mb-2">10:20 am</p>
                                <div class="chat-message-left">
                                    <div>
                                        <img src="{{ asset('assets/images/avatar/man-1.png') }}" class="rounded-circle mr-1" alt="Sharon Lessman" width="40" height="40">
                                    </div>
                                    <div class="flex-shrink-1 p-2 ms-2">consectetur adipiscing elit</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pt-4 d2c_chat_footer">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="w-100 d-flex justify-content-start align-items-center d2c_input_wrapper px-2">
                                <a class="px-1 text-muted" href="#!"><i class="fas fa-paperclip"></i></a>
                                <a class="px-1 text-muted" href="#!"><i class="fas fa-smile"></i></a>
                                <input type="text" class="form-control bg-transparent py-2 px-1 border-0" id="chatBox" placeholder="Message...">
                            </div>
                            <button class="btn ms-2">
                                <i class="fas fa-paper-plane"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- copyright -->
<div class="d2c_copyright bg-success bg-opacity-10 p-3 text-center mt-4">
    <p class="mb-0 fw-semibold">© 2023 <a href="https://www.designtocodes.com/" target="_blank" class="fw-bold">DesignToCodes</a>, All rights Reserved</p>
</div>

</div>
<!-- End:Main Body -->
@endsection