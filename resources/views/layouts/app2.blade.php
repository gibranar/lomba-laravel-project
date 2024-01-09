<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}" />


    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{asset('lib/reasseticon/fonts/reasseticon.css')}}" /> 
    <link rel="stylesheet" href="{{asset('lib/jqvmap/jqvmap.min.css') }}" />

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.min.css') }}" />

    {{-- cdn --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />

    <title>@yield('title')</title>
</head>

<body>
    {{-- header start --}}
    <div>
        <div class="header-main px-3 px-lg-4">
            <a id="menuSidebar" href="#" class="menu-link me-3 me-lg-4"><i class="ri-menu-2-fill"></i></a>

            <div class="form-search me-auto">
                <input type="text" class="form-control" placeholder="Search" />
                <i class="ri-search-line"></i>
            </div>
            <!-- form-search -->

            <div class="dropdown dropdown-skin">
                <a href="" class="dropdown-link" data-bs-toggle="dropdown" data-bs-auto-close="outside"><i
                        class="ri-settings-3-line"></i></a>
                <div class="dropdown-menu dropdown-menu-end mt-10-f">
                    <label>Skin Mode</label>
                    <nav id="skinMode" class="nav nav-skin">
                        <a href="" class="nav-link active">Light</a>
                        <a href="" class="nav-link">Dark</a>
                    </nav>
                    <hr />
                    <label>Sidebar Skin</label>
                    <nav id="sidebarSkin" class="nav nav-skin">
                        <a href="" class="nav-link active">Default</a>
                        <a href="" class="nav-link">Prime</a>
                        <a href="" class="nav-link">Dark</a>
                    </nav>
                </div>
                <!-- dropdown-menu -->
            </div>
            <!-- dropdown -->

            <div class="dropdown dropdown-notification ms-3 ms-xl-4">
                <a href="" class="dropdown-link" data-bs-toggle="dropdown"
                    data-bs-auto-close="outside"><small>3</small><i class="ri-notification-3-line"></i></a>
                <div class="dropdown-menu dropdown-menu-end mt-10-f me--10-f">
                    <div class="dropdown-menu-header">
                        <h6 class="dropdown-menu-title">Notifications</h6>
                    </div>
                    <!-- dropdown-menu-header -->
                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="avatar online">
                                <img src="https://via.placeholder.com/300/4c5366/fff" alt="" />
                            </div>
                            <div class="list-group-body">
                                <p>
                                    <strong>Dominador Manuel</strong> and
                                    <strong>100 other people</strong> reacted to your comment
                                    "Tell your partner that...
                                </p>
                                <span>Aug 20 08:55am</span>
                            </div>
                            <!-- list-group-body -->
                        </li>
                        <li class="list-group-item">
                            <div class="avatar online">
                                <img src="https://via.placeholder.com/300/4c5366/fff" alt="" />
                            </div>
                            <div class="list-group-body">
                                <p>
                                    <strong>Angela Ighot</strong> tagged you and
                                    <strong>9 others</strong> in a post.
                                </p>
                                <span>Aug 18 10:30am</span>
                            </div>
                            <!-- list-group-body -->
                        </li>
                        <li class="list-group-item">
                            <div class="avatar">
                                <span class="avatar-initial bg-primary">a</span>
                            </div>
                            <div class="list-group-body">
                                <p>
                                    New listings were added that match your search alert
                                    <strong>house for rent</strong>
                                </p>
                                <span>Aug 15 08:10pm</span>
                            </div>
                            <!-- list-group-body -->
                        </li>
                        <li class="list-group-item">
                            <div class="avatar online">
                                <img src="https://via.placeholder.com/300/4c5366/fff" alt="" />
                            </div>
                            <div class="list-group-body">
                                <p>
                                    Reminder: <strong>Jerry Cuares</strong> invited you to like
                                    <strong>Cuares Surveying Services</strong>. <br /><a href="">Accept</a>
                                    or <a href="">Decline</a>
                                </p>
                                <span>Aug 14 11:50pm</span>
                            </div>
                            <!-- list-group-body -->
                        </li>
                        <li class="list-group-item">
                            <div class="avatar online">
                                <img src="https://via.placeholder.com/300/4c5366/fff" alt="" />
                            </div>
                            <div class="list-group-body">
                                <p>
                                    <strong>Dyanne Aceron</strong> reacted to your post
                                    <strong>King of the Bed</strong>.
                                </p>
                                <span>Aug 10 05:30am</span>
                            </div>
                            <!-- list-group-body -->
                        </li>
                    </ul>
                    <div class="dropdown-menu-footer">
                        <a href="">Show all Notifications</a>
                    </div>
                </div>
                <!-- dropdown-menu -->
            </div>
            <!-- dropdown -->
            <div class="dropdown dropdown-profile ms-3 ms-xl-4">
                <a href="" class="dropdown-link" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="avatar online">
                        <img src="https://via.placeholder.com/500/4c5366/fff" alt="" />
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end mt-10-f">
                    <div class="dropdown-menu-body">
                        <div class="avatar avatar-xl online mb-3">
                            <img src="https://via.placeholder.com/500/4c5366/fff" alt="" />
                        </div>
                        <h5 class="mb-1 text-dark fw-semibold">Shaira Diaz</h5>
                        <p class="fs-sm text-secondary">Premium Member</p>

                        <nav class="nav">
                            <a href=""><i class="ri-edit-2-line"></i> Edit Profile</a>
                            <a href=""><i class="ri-profile-line"></i> View Profile</a>
                        </nav>
                        <hr />
                        <nav class="nav">
                            <a href=""><i class="ri-question-line"></i> Help Center</a>
                            <a href=""><i class="ri-lock-line"></i> Privacy Settings</a>
                            <a href=""><i class="ri-user-settings-line"></i> Account Settings</a>
                            <a href=""><i class="ri-logout-box-r-line"></i> Log Out</a>
                        </nav>
                    </div>
                    <!-- dropdown-menu-body -->
                </div>
                <!-- dropdown-menu -->
            </div>
            <!-- dropdown -->
        </div>
        @include('layouts.sidebar2')
        <div class="main-content" style="">
            <div class="main main-app p-3 p-lg-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <div>
                        <ol class="breadcrumb fs-sm mb-1">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Dashboard
                            </li>
                        </ol>
                        @yield('content')
                    </div>
                </div>

            </div>
        </div>

        {{-- Js start --}}

   

        {{-- <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/perfect-scrollbar.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.flot.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.flot.stack.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.flot.resize.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.flot.threshold.js') }}"></script>
        <script src="{{ asset('assets/js/chart.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.vmap.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.vmap.usa.js') }}"></script>

        <script src="{{ asset('assets/js/script.js') }}"></script>
        <script src="{{ asset('assets/js/db.data.js') }}"></script>
        <script src="{{ asset('assets/js/db.sales.js') }}"></script> --}}

        {{-- Js End --}}
</body>

</html>
