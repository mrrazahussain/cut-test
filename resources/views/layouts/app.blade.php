<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    {{-- css file here --}}
    <link rel="apple-touch-icon" href="./app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="./app-assets/images/ico/dashboard.png">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">


    <!-- END: Custom CSS-->
    @yield('styles')
    <script>
        var baseUrl = '{{Url("/")}}';
    </script>
</head>
<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="">
    <!-- BEGIN: Header-->
    <nav
        class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
        <div class="navbar-container d-flex content">
            <div class="bookmark-wrapper d-flex align-items-center">
                <ul class="nav navbar-nav d-xl-none">
                    <li class="nav-item"><a class="nav-link menu-toggle" href="#"><i class="ficon"
                                data-feather="menu"></i></a></li>
                </ul>
                <ul class="nav navbar-nav bookmark-icons">
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-email.html"
                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Email"><i class="ficon"
                                data-feather="mail"></i></a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-chat.html"
                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Chat"><i class="ficon"
                                data-feather="message-square"></i></a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-calendar.html"
                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Calendar"><i class="ficon"
                                data-feather="calendar"></i></a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-todo.html"
                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Todo"><i class="ficon"
                                data-feather="check-square"></i></a></li>
                </ul>
                <ul class="nav navbar-nav">
                    <li class="nav-item d-none d-lg-block"><a class="nav-link bookmark-star"><i
                                class="ficon text-warning" data-feather="star"></i></a>
                        <div class="bookmark-input search-input">
                            <div class="bookmark-input-icon"><i data-feather="search"></i></div>
                            <input class="form-control input" type="text" placeholder="Bookmark" tabindex="0"
                                data-search="search">
                            <ul class="search-list search-list-bookmark"></ul>
                        </div>
                    </li>
                </ul>
            </div>
            <ul class="nav navbar-nav align-items-center ms-auto">
                {{-- <li class="nav-item dropdown dropdown-language"><a class="nav-link dropdown-toggle" id="dropdown-flag"
                        href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                            class="flag-icon flag-icon-us"></i><span class="selected-language">English</span></a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-flag"><a
                            class="dropdown-item" href="#" data-language="en"><i class="flag-icon flag-icon-us"></i>
                            English</a><a class="dropdown-item" href="#" data-language="fr"><i
                                class="flag-icon flag-icon-fr"></i> French</a><a class="dropdown-item" href="#"
                            data-language="de"><i class="flag-icon flag-icon-de"></i> German</a><a class="dropdown-item"
                            href="#" data-language="pt"><i class="flag-icon flag-icon-pt"></i> Portuguese</a></div>
                </li> --}}
                <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon"
                            data-feather="moon"></i></a></li>
                <li class="nav-item dropdown dropdown-notification me-25"><a class="nav-link" href="#"
                        data-bs-toggle="dropdown"><i class="ficon" data-feather="bell"></i><span
                            class="badge rounded-pill bg-danger badge-up">5</span></a>
                    <ul class="dropdown-menu dropdown-menu-media dropdown-menu-end">
                        <li class="dropdown-menu-header">
                            <div class="dropdown-header d-flex">
                                <h4 class="notification-title mb-0 me-auto">Notifications</h4>
                                <div class="badge rounded-pill badge-light-primary">6 New</div>
                            </div>
                        </li>
                        <li class="scrollable-container media-list">
                            <a class="d-flex" href="#">
                                <div class="list-item d-flex align-items-start">
                                    <div class="me-1">
                                        <div class="avatar"><img
                                                src="./app-assets/images/portrait/small/avatar-s-15.jpg" alt="avatar"
                                                width="32" height="32"></div>
                                    </div>
                                    <div class="list-item-body flex-grow-1">
                                        <p class="media-heading"><span class="fw-bolder">Congratulation Sam
                                                🎉</span>winner!</p><small class="notification-text"> Won the monthly
                                            best seller badge.</small>
                                    </div>
                                </div>
                            </a>
                            <a class="d-flex" href="#">
                                <div class="list-item d-flex align-items-start">
                                    <div class="me-1">
                                        <div class="avatar"><img src="./app-assets/images/portrait/small/avatar-s-3.jpg"
                                                alt="avatar" width="32" height="32"></div>
                                    </div>
                                    <div class="list-item-body flex-grow-1">
                                        <p class="media-heading"><span class="fw-bolder">New
                                                message</span>&nbsp;received</p><small class="notification-text"> You
                                            have 10 unread messages</small>
                                    </div>
                                </div>
                            </a>
                            <a class="d-flex" href="#">
                                <div class="list-item d-flex align-items-start">
                                    <div class="me-1">
                                        <div class="avatar bg-light-danger">
                                            <div class="avatar-content">MD</div>
                                        </div>
                                    </div>
                                    <div class="list-item-body flex-grow-1">
                                        <p class="media-heading"><span class="fw-bolder">Revised Order
                                                👋</span>&nbsp;checkout</p><small class="notification-text"> MD Inc.
                                            order updated</small>
                                    </div>
                                </div>
                            </a>
                            <div class="list-item d-flex align-items-center">
                                <h6 class="fw-bolder me-auto mb-0">System Notifications</h6>
                                <div class="form-check form-check-primary form-switch">
                                    <input class="form-check-input" id="systemNotification" type="checkbox" checked="">
                                    <label class="form-check-label" for="systemNotification"></label>
                                </div>
                            </div>
                            <a class="d-flex" href="#">
                                <div class="list-item d-flex align-items-start">
                                    <div class="me-1">
                                        <div class="avatar bg-light-danger">
                                            <div class="avatar-content"><i class="avatar-icon" data-feather="x"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-item-body flex-grow-1">
                                        <p class="media-heading"><span class="fw-bolder">Server
                                                down</span>&nbsp;registered</p><small class="notification-text"> USA
                                            Server is down due to high CPU usage</small>
                                    </div>
                                </div>
                            </a>
                            <a class="d-flex" href="#">
                                <div class="list-item d-flex align-items-start">
                                    <div class="me-1">
                                        <div class="avatar bg-light-success">
                                            <div class="avatar-content"><i class="avatar-icon" data-feather="check"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-item-body flex-grow-1">
                                        <p class="media-heading"><span class="fw-bolder">Sales
                                                report</span>&nbsp;generated</p><small class="notification-text"> Last
                                            month sales report generated</small>
                                    </div>
                                </div>
                            </a>
                            <a class="d-flex" href="#">
                                <div class="list-item d-flex align-items-start">
                                    <div class="me-1">
                                        <div class="avatar bg-light-warning">
                                            <div class="avatar-content"><i class="avatar-icon"
                                                    data-feather="alert-triangle"></i></div>
                                        </div>
                                    </div>
                                    <div class="list-item-body flex-grow-1">
                                        <p class="media-heading"><span class="fw-bolder">High memory</span>&nbsp;usage
                                        </p><small class="notification-text"> BLR Server using high memory</small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-menu-footer"><a class="btn btn-primary w-100" href="#">Read all
                                notifications</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown dropdown-user">
                    <a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="#"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="user-nav d-sm-flex d-none"><span class="user-name fw-bolder">{{ Auth::user()->lname }}</span><span
                                class="user-status">Admin</span></div><span class="avatar"><img class="round"
                                src="./app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="40"
                                width="40"><span class="avatar-status-online"></span></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user"><a
                            class="dropdown-item" href="page-profile.html"><i class="me-50" data-feather="user"></i>
                            Profile</a>
                        <!-- <a class="dropdown-item" href="app-email.html"><i class="me-50"
                                data-feather="mail"></i> Inbox</a>
                            <a class="dropdown-item" href="app-todo.html"><i
                                class="me-50" data-feather="check-square"></i> Task</a> -->
                        <a class="dropdown-item" href="app-chat.html"><i class="me-50"
                                data-feather="message-square"></i> Chats</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item"
                            href="page-account-settings-account.html"><i class="me-50" data-feather="settings"></i>
                            Settings</a><a class="dropdown-item" href="page-pricing.html"><i class="me-50"
                                data-feather="credit-card"></i> Pricing</a><a class="dropdown-item"
                            href="page-faq.html"><i class="me-50" data-feather="help-circle"></i> FAQ</a><a
                            class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <i class="me-50"
                                data-feather="power"></i> Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <ul class="main-search-list-defaultlist d-none">
        <li class="d-flex align-items-center">
            <a href="#">
                <h6 class="section-label mt-75 mb-0">Files</h6>
            </a>
        </li>
        <li class="auto-suggestion">
            <a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="me-75"><img src="./app-assets/images/icons/xls.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Two new item submitted</p><small class="text-muted">Marketing
                            Manager</small>
                    </div>
                </div><small class="search-data-size me-50 text-muted">&apos;17kb</small>
            </a>
        </li>
        <li class="auto-suggestion">
            <a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="me-75"><img src="./app-assets/images/icons/jpg.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">52 JPG file Generated</p><small class="text-muted">FontEnd
                            Developer</small>
                    </div>
                </div><small class="search-data-size me-50 text-muted">&apos;11kb</small>
            </a>
        </li>
        <li class="auto-suggestion">
            <a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="me-75"><img src="./app-assets/images/icons/pdf.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">25 PDF File Uploaded</p><small class="text-muted">Digital
                            Marketing Manager</small>
                    </div>
                </div><small class="search-data-size me-50 text-muted">&apos;150kb</small>
            </a>
        </li>
        <li class="auto-suggestion">
            <a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="me-75"><img src="./app-assets/images/icons/doc.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna_Strong.doc</p><small class="text-muted">Web
                            Designer</small>
                    </div>
                </div><small class="search-data-size me-50 text-muted">&apos;256kb</small>
            </a>
        </li>
        <li class="d-flex align-items-center">
            <a href="#">
                <h6 class="section-label mt-75 mb-0">Members</h6>
            </a>
        </li>
        <li class="auto-suggestion">
            <a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.html">
                <div class="d-flex align-items-center">
                    <div class="avatar me-75"><img src="./app-assets/images/portrait/small/avatar-s-8.jpg" alt="png"
                            height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">John Doe</p><small class="text-muted">UI designer</small>
                    </div>
                </div>
            </a>
        </li>
        <li class="auto-suggestion">
            <a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.html">
                <div class="d-flex align-items-center">
                    <div class="avatar me-75"><img src="./app-assets/images/portrait/small/avatar-s-1.jpg" alt="png"
                            height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Michal Clark</p><small class="text-muted">FontEnd
                            Developer</small>
                    </div>
                </div>
            </a>
        </li>
        <li class="auto-suggestion">
            <a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.html">
                <div class="d-flex align-items-center">
                    <div class="avatar me-75"><img src="./app-assets/images/portrait/small/avatar-s-14.jpg" alt="png"
                            height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Milena Gibson</p><small class="text-muted">Digital Marketing
                            Manager</small>
                    </div>
                </div>
            </a>
        </li>
        <li class="auto-suggestion">
            <a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.html">
                <div class="d-flex align-items-center">
                    <div class="avatar me-75"><img src="./app-assets/images/portrait/small/avatar-s-6.jpg" alt="png"
                            height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna Strong</p><small class="text-muted">Web Designer</small>
                    </div>
                </div>
            </a>
        </li>
    </ul>
    <ul class="main-search-list-defaultlist-other-list d-none">
        <li class="auto-suggestion justify-content-between">
            <a class="d-flex align-items-center justify-content-between w-100 py-50">
                <div class="d-flex justify-content-start"><span class="me-75"
                        data-feather="alert-circle"></span><span>No results found.</span></div>
            </a>
        </li>
    </ul>
    <!-- END: Header-->
 <!-- BEGIN: Main Menu-->
 <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item me-auto"><a class="navbar-brand"
                    href="index.html"><span class="brand-logo">
                        <img style="max-width: 75px;" src="./app-assets/images/portrait/small/logo.png" alt="">

                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i
                        class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i
                        class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary"
                        data-feather="disc" data-ticon="disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="active  nav-item"><a class="d-flex align-items-center" href="index.html"><i
                        data-feather="home"></i><span class="menu-title text-truncate"
                        data-i18n="Dashboards">Dashboards</span></a>
            </li>

            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="grid"></i><span
                        class="menu-title text-truncate" data-i18n="Datatable">Brand List</span></a>
                <ul class="menu-content">

                    <li><a class="d-flex align-items-center" href="/category"><i
                                data-feather="circle"></i><span class="menu-item text-truncate"
                                data-i18n="Advanced">Category</span></a>
                    </li>

                    <li><a class="d-flex align-items-center" href="/subcategory"><i
                                data-feather="circle"></i><span class="menu-item text-truncate"
                                data-i18n="Advanced">Sub Category</span></a>
                    </li>

                    <li><a class="d-flex align-items-center" href="/price-range"><i
                                data-feather="circle"></i><span class="menu-item text-truncate"
                                data-i18n="Basic">Price Range</span></a>
                    </li>

                    <li><a class="d-flex align-items-center" href="#"><i
                        data-feather="circle"></i><span class="menu-item text-truncate"
                        data-i18n="Basic">Product Group</span></a>
                    </li>

                    <li><a class="d-flex align-items-center" href="/brands"><i
                                data-feather="circle"></i><span class="menu-item text-truncate"
                                data-i18n="Basic">Brand</span></a>
                    </li>

                    <li><a class="d-flex align-items-center" href="#"><i
                                data-feather="circle"></i><span class="menu-item text-truncate"
                                data-i18n="Basic">Creating More Levels</span></a>
                    </li>
                </ul>
            </li>


            <li class=" nav-item"><a class="d-flex align-items-center" href="app-chat.html"><i
                        data-feather="message-square"></i><span class="menu-title text-truncate"
                        data-i18n="Chat">Chat</span></a>
            </li>


            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="user"></i><span
                        class="menu-title text-truncate" data-i18n="User">User</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="/users"><i
                                data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">All
                                User</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span
                                class="menu-item text-truncate" data-i18n="View">View</span></a>
                        <ul class="menu-content">
                            <li><a class="d-flex align-items-center" href="app-user-view-account.html"><span
                                        class="menu-item text-truncate" data-i18n="Account">Account</span></a>
                            </li>
                            <li><a class="d-flex align-items-center" href="app-user-view-security.html"><span
                                        class="menu-item text-truncate" data-i18n="Security">Security</span></a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>


            <li class=" nav-item"><a class="d-flex align-items-center" href="/employees"><i
                        data-feather="square"></i><span class="menu-title text-truncate"
                        data-i18n="Modal Examples">Employees</span></a>
            </li>

            <li class=" nav-item"><a class="d-flex align-items-center" href="category-tracking"><i
                data-feather="square"></i><span class="menu-title text-truncate"
                data-i18n="Modal Examples">Category Tracking</span></a>
            </li>

            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i
                        data-feather="file-text"></i><span class="menu-title text-truncate"
                        data-i18n="Pages">Setting</span></a>
                <ul class="menu-content">
                    <!-- <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span
                                    class="menu-item text-truncate" data-i18n="Account Settings">Account
                                    Settings</span></a>
                            <ul class="menu-content">
                                <li><a class="d-flex align-items-center" href="page-account-settings-account.html"><span
                                            class="menu-item text-truncate" data-i18n="Account">Account</span></a>
                                </li>
                                <li><a class="d-flex align-items-center"
                                        href="page-account-settings-security.html"><span class="menu-item text-truncate"
                                            data-i18n="Security">Security</span></a>
                                </li>
                            </ul>
                        </li> -->
                    <!-- <li><a class="d-flex align-items-center" href="page-profile.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Profile">Profile</span></a>
                        </li> -->

                    <!-- <li><a class="d-flex align-items-center" href="page-faq.html"><i data-feather="circle"></i><span
                                class="menu-item text-truncate" data-i18n="FAQ">FAQ</span></a>
                    </li> -->

                    <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span
                                class="menu-item text-truncate" data-i18n="Blog">Pages</span></a>
                        <ul class="menu-content">

                            <!-- <li><a class="d-flex align-items-center" href="page-blog-list.html"><span
                                        class="menu-item text-truncate" data-i18n="List">List</span></a>
                            </li> -->

                            <li><a class="d-flex align-items-center" href="how-cut-works.html"><span
                                        class="menu-item text-truncate" data-i18n="Detail">How Cut Works</span></a>
                            </li>
                            <li><a class="d-flex align-items-center" href="Terms-of-services.html"><span
                                        class="menu-item text-truncate" data-i18n="Edit">Terms of
                                        Services</span></a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span
                                class="menu-item text-truncate" data-i18n="Mail Template">Mail Template</span></a>
                        <ul class="menu-content">
                            <li><a class="d-flex align-items-center"
                                    href="https://pixinvent.com/demo/vuexy-mail-template/mail-welcome.html"
                                    target="_blank"><span class="menu-item text-truncate"
                                        data-i18n="Welcome">Welcome</span></a>
                            </li>
                            <li><a class="d-flex align-items-center"
                                    href="https://pixinvent.com/demo/vuexy-mail-template/mail-reset-password.html"
                                    target="_blank"><span class="menu-item text-truncate"
                                        data-i18n="Reset Password">Reset Password</span></a>
                            </li>
                            <li><a class="d-flex align-items-center"
                                    href="https://pixinvent.com/demo/vuexy-mail-template/mail-verify-email.html"
                                    target="_blank"><span class="menu-item text-truncate"
                                        data-i18n="Verify Email">Verify Email</span></a>
                            </li>
                            <li><a class="d-flex align-items-center"
                                    href="https://pixinvent.com/demo/vuexy-mail-template/mail-deactivate-account.html"
                                    target="_blank"><span class="menu-item text-truncate"
                                        data-i18n="Deactivate Account">Deactivate Account</span></a>
                            </li>
                            <li><a class="d-flex align-items-center"
                                    href="https://pixinvent.com/demo/vuexy-mail-template/mail-invoice.html"
                                    target="_blank"><span class="menu-item text-truncate"
                                        data-i18n="Invoice">Invoice</span></a>
                            </li>
                            <li><a class="d-flex align-items-center"
                                    href="https://pixinvent.com/demo/vuexy-mail-template/mail-promotional.html"
                                    target="_blank"><span class="menu-item text-truncate"
                                        data-i18n="Promotional">Promotional</span></a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </li>


            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="shield"></i><span
                        class="menu-title text-truncate" data-i18n="Roles &amp; Permission">Roles &amp;
                        Permission</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="app-access-roles.html"><i
                                data-feather="circle"></i><span class="menu-item text-truncate"
                                data-i18n="Roles">Roles</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="app-access-permission.html"><i
                                data-feather="circle"></i><span class="menu-item text-truncate"
                                data-i18n="Permission">Permission</span></a>
                    </li>
                </ul>
            </li>


            <!-- <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Apps &amp; Pages</span><i
                    data-feather="more-horizontal"></i>
            </li> -->


            <!-- <li class=" navigation-header"><span data-i18n="User Interface">User Interface</span><i
                    data-feather="more-horizontal"></i>
            </li> -->

            <li class=" nav-item"><a class="d-flex align-items-center padding-control-master" href="contact-us.html">

                <svg style="width: 26px;
                height: 26px; margin-right: 10px;" width="26px" height="26px" viewBox="0 0 21 21" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" transform="translate(3 3)"><circle cx="7.5" cy="5.5" r="2"/><path d="m.5 3.5h1v-1c0-1.1045695.8954305-2 2-2h8c1.1045695 0 2 .8954305 2 2v10c0 1.1045695-.8954305 2-2 2h-8c-1.1045695 0-2-.8954305-2-2v-1h-1"/><path d="m.5 7.5h1"/><path d="m.5 5.5h1"/><path d="m.5 9.5h1"/><path d="m10.5 10.5v-1c0-1.1045695-.8954305-2-2-2h-2c-1.1045695 0-2 .8954305-2 2v1c0 .5522847.44771525 1 1 1h4c.5522847 0 1-.4477153 1-1z"/></g></svg>


                    <span class="menu-title text-truncate" data-i18n="Contact Us">Contact Us</span>
                </a>


            </li>

        </ul>
    </div>
</div>
<!-- END: Main Menu-->
    {{-- nav bar --}}
    @yield('content')
    {{-- footer --}}
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0"><span class="float-md-start d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2021<a
                    class="ms-25" href="#" target="_blank">Lorem Ipsum</a><span class="d-none d-sm-inline-block">, All
                    rights Reserved</span></span><span class="float-md-end d-none d-md-block">Hand-crafted & Made with<i
                    data-feather="heart"></i></span></p>
    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->


     @yield('scripts')

</body>
</html>
