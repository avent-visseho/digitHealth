@extends('layouts.dashboardLayout')

@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Discussions</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Apps</a></li>
                                    <li class="breadcrumb-item active">Chat</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="d-lg-flex">


                    <div class="w-100 user-chat mt-4 mt-sm-0 ms-lg-1">
                        <div class="card">
                            <div class="p-3 px-lg-4 border-bottom">
                                <div class="row">
                                    <div class="col-xl-4 col-7">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 avatar-sm me-3 d-sm-block d-none">
                                                <img src="assets/images/users/avatar-2.jpg" alt=""
                                                    class="img-fluid d-block rounded-circle">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h5 class="font-size-14 mb-1 text-truncate"><a href="#"
                                                        class="text-dark">Jennie Sherlock</a></h5>
                                                <p class="text-muted text-truncate mb-0">Online</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-5">
                                        <ul class="list-inline user-chat-nav text-end mb-0">
                                            <li class="list-inline-item">
                                                <div class="dropdown">
                                                    <button class="btn nav-btn dropdown-toggle" type="button"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="bx bx-search"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-md p-2">
                                                        <form class="px-2">
                                                            <div>
                                                                <input type="text"
                                                                    class="form-control border bg-soft-light"
                                                                    placeholder="Search...">
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="list-inline-item">
                                                <div class="dropdown">
                                                    <button class="btn nav-btn dropdown-toggle" type="button"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="bx bx-dots-horizontal-rounded"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Profile</a>
                                                        <a class="dropdown-item" href="#">Archive</a>
                                                        <a class="dropdown-item" href="#">Muted</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <livewire:chatbot />
                        </div>
                    </div>
                    <!-- end user chat -->
                </div>
                <!-- End d-lg-flex  -->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>
                            document.write(new Date().getFullYear())
                        </script> © Minia.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Design & Develop by <a href="#!" class="text-decoration-underline">Themesbrand</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
@endsection
