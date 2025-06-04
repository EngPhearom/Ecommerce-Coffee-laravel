<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link rel="shortcut icon" href="{{ asset('./assets/images/logos/cofebean.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('./assets/css/styles.min.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css') }}">
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">

        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div>
                <div class="brand-logo d-flex align-items-center justify-content-between">
                    <a href="{{ route('dashboad') }}" class="text-nowrap logo-img">
                        <img src="{{ asset('./assets/images/logos/logo.png') }}" style="width: 120px; margin-left: 40px; margin-top: 10px"/>
                    </a>
                    <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                        <i class="ti ti-x fs-6"></i>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">
                            <iconify-icon icon="solar:menu-dots-linear" class="nav-small-cap-icon fs-4"></iconify-icon>
                            <span class="hide-menu">Home</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('dashboad') }}" aria-expanded="false">
                                <i class="ti ti-atom"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>

                        {{-- User --}}
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('user') }}" aria-expanded="false">
                                <i class="fa-solid fa-user"></i>
                                <span class="hide-menu">User</span>
                            </a>
                        </li>

                        {{-- Customer --}}
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('customer') }}" aria-expanded="false">
                                <i class="fa-solid fa-users"></i>
                                <span class="hide-menu">Customer</span>
                            </a>
                        </li>

                        {{-- Employees --}}
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('employee') }}" aria-expanded="false">
                                <i class="fa-solid fa-user-tie"></i>
                                <span class="hide-menu">Employees</span>
                            </a>
                        </li>

                        {{-- Product --}}
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('product') }}" aria-expanded="false">
                                <i class="fa-brands fa-product-hunt"></i>
                                <span class="hide-menu">Product</span>
                            </a>
                        </li>

                        {{-- Order --}}
                        {{-- <li class="sidebar-item">
              <a class="sidebar-link justify-content-between has-arrow" href="javascript:void(0)" aria-expanded="false">
                <div class="d-flex align-items-center gap-3">
                  <span class="d-flex">
                    <i class="fa-solid fa-cart-shopping"></i>
                  </span>
                  <span class="hide-menu">Orders</span>
                </div>

              </a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                  <a class="sidebar-link justify-content-between"
                    href="#">
                    <div class="d-flex align-items-center gap-3">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Order</span>
                    </div>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a class="sidebar-link justify-content-between"
                    href="#">
                    <div class="d-flex align-items-center gap-3">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Order Detail</span>
                    </div>
                  </a>
                </li>
              </ul>
            </li> --}}

                        {{-- Payment --}}
                        {{-- <li class="sidebar-item">
              <a class="sidebar-link" href="./index.html" aria-expanded="false">
                <i class="fa-solid fa-money-check-dollar"></i>
                <span class="hide-menu">Payment</span>
              </a>
            </li> --}}

                        {{-- Deliveries --}}
                        {{-- <li class="sidebar-item">
              <a class="sidebar-link justify-content-between has-arrow" href="javascript:void(0)" aria-expanded="false">
                <div class="d-flex align-items-center gap-3">
                  <span class="d-flex">
                    <i class="fa-solid fa-truck"></i>
                  </span>
                  <span class="hide-menu">Deliveries</span>
                </div>

              </a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                  <a class="sidebar-link justify-content-between"
                    href="{{ route('delivery') }}">
                    <div class="d-flex align-items-center gap-3">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Delivery</span>
                    </div>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a class="sidebar-link justify-content-between"
                    href="#">
                    <div class="d-flex align-items-center gap-3">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Delivery Detail</span>
                    </div>
                  </a>
                </li>
              </ul>
            </li> --}}

                        {{-- Inventory --}}
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('inventory') }}" aria-expanded="false">
                                <i class="fa-solid fa-shop"></i>
                                <span class="hide-menu">Inventory</span>
                            </a>
                        </li>

                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            <header class="app-header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <ul class="navbar-nav">
                        <li class="nav-item d-block d-xl-none">
                            <a class="nav-link sidebartoggler " id="headerCollapse" href="javascript:void(0)">
                                <i class="ti ti-menu-2"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="javascript:void(0)" id="drop1" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="ti ti-bell"></i>
                                <div class="notification bg-primary rounded-circle"></div>
                            </a>
                            {{-- <div class="dropdown-menu dropdown-menu-animate-up" aria-labelledby="drop1">
                <div class="message-body">
                </div>
              </div> --}}
                        </li>
                    </ul>
                    <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">

                            <li class="nav-item dropdown">
                                <a class="nav-link " href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <img src="{{ asset('./assets/images/profile/user-1.jpg') }}" alt=""
                                        width="35" height="35" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up"
                                    aria-labelledby="drop2">
                                    <div class="message-body">
                                        <a href="{{ route('login') }}"
                                            class="btn btn-outline-danger mx-3 mt-2 d-block">Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!--  Header End -->
            <div class="body-wrapper-inner">
                @yield('contant')
            </div>
        </div>
    </div>
    <script src="{{ asset('./assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('./assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('./assets/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('./assets/js/app.min.js') }}"></script>
    <script src="{{ asset('./assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('./assets/libs/simplebar/dist/simplebar.js') }}"></script>
    <script src="{{ asset('./assets/js/dashboard.js') }}"></script>
    <!-- solar icons -->
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js') }}"></script>
    <script src="{{ asset('https://unpkg.com/vue@3/dist/vue.global.js') }}"></script>
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/sweetalert2@11') }}"></script>
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js') }}"></script>
    <script
        src="{{ asset('https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js') }}">
    </script>


</body>
@yield('script')

</html>
