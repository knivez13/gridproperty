<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Bonjour De Guzman" name="author" />
    <meta content="Realstate management system" name="description" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />
</head>

<body class="loading" data-layout-color="light" data-leftbar-theme="dark" data-layout-mode="fluid" data-rightbar-onstart="true">
    <div class="wrapper">
        <div class="leftside-menu">
            <a href="/dashboard" class="logo text-center logo-light">
                <span class="logo-lg">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="" height="16">
                </span>
                <span class="logo-sm">
                    <img src="{{ asset('assets/images/logo_sm.png') }}" alt="" height="16">
                </span>
            </a>
            <div class="h-100" id="leftside-menu-container" data-simplebar>
                <ul class="side-nav">
                    <li class="side-nav-title side-nav-item">Navigation</li>
                    <li class="side-nav-item">
                        <a href="/dashboard" class="side-nav-link">
                            <i class="uil-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="side-nav-item">
                        <a href="{{ route('property.index') }}" class="side-nav-link">
                            <i class="uil-building"></i>
                            <span>Property</span>
                        </a>
                    </li>
                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarDashboards" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                            <i class="uil-home-alt"></i>
                            <span> Real State </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarDashboards">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="{{ route('aminity.index') }}">Aminity</a>
                                </li>
                                <li>
                                    <a href="{{ route('nearlocation.index') }}">Near Location</a>
                                </li>
                                <li>
                                    <a href="{{ route('propertytype.index') }}">Property Type</a>
                                </li>
                                <li>
                                    <a href="{{ route('deliveryunits.index') }}">Delivery Units</a>
                                </li>
                                <li>
                                    <a href="{{ route('priority.index') }}">Priority</a>
                                </li>
                                <li>
                                    <a href="{{ route('priorityunder.index') }}">Priority Under</a>
                                </li>
                                <li>
                                    <a href="{{ route('status.index') }}">Status</a>
                                </li>
                                <li>
                                    <a href="{{ route('listing.index') }}">Listing Category</a>
                                </li>
                                <li>
                                    <a href="{{ route('listingtype.index') }}">Listing Type</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarUserManagement" aria-expanded="false" aria-controls="sidebarUserManagement" class="side-nav-link">
                            <i class="uil-users-alt"></i>
                            <span> User Management</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarUserManagement">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="{{ route('user.index') }}">User</a>
                                </li>
                                <li>
                                    <a href="{{ route('role.index') }}">Roles</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="content-page">
            <div class="content">
                <div class="navbar-custom">
                    <ul class="list-unstyled topbar-menu float-end mb-0">
                        <li class="dropdown notification-list d-lg-none">
                            <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="dripicons-search noti-icon"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                                <form class="p-3">
                                    <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                </form>
                            </div>
                        </li>
                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <span class="account-user-avatar">
                                    <img src="{{ asset('assets/images/users/avatar-1.jpg') }}" alt="user-image" class="rounded-circle">
                                </span>
                                <span>
                                    <span class="account-user-name">{{ Auth::user()->name }}</span>
                                    <span class="account-position">Founder</span>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                                <div class=" dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome !</h6>
                                </div>
                                <a href="#" class="dropdown-item notify-item">
                                    <i class="mdi mdi-account-circle me-1"></i>
                                    <span>My Account</span>
                                </a>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item notify-item">
                                    <i class="mdi mdi-logout me-1"></i>
                                    <span>Logout</span>
                                </a>
                                <form method="POST" id="logout-form" action="{{ route('logout') }}">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                    <button class="button-menu-mobile open-left">
                        <i class="mdi mdi-menu"></i>
                    </button>
                </div>
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © Grid Real State
                        </div>
                        <div class="col-md-6">
                            <div class="text-md-end footer-links d-none d-md-block">
                                <a href="javascript: void(0);">About</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="{{ asset('assets/js/vendor.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
</body>

</html>