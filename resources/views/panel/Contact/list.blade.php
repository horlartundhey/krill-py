
@extends('panel.layouts.app')

@section('content')  
<!-- Page -->
<div class="page">

			

    <!-- main-content -->
    <div class="main-content app-content">

    <!-- main-header -->
    <div class="main-header sticky side-header nav nav-item">
        <div class="container-fluid">
            <div class="main-header-left ">
                <div class="responsive-logo">
                    <a href="index.html"><img src="{{url('public/panel/assets/img/krillpay-logo.png')}}" class="logo-1"
                            alt="logo"></a>
                    <a href="index.html"><img src="{{url('public/panel/assets/img/krillpay-logo.png')}}" class="dark-logo-1"
                            alt="logo"></a>
                    <a href="index.html"><img src="{{url('public/panel/assets/img/logon.png')}}" class="logo-2"
                            alt="logo"></a>
                    <a href="index.html"><img src="{{url('public/panel/assets/img/logon.png')}}" class="dark-logo-2"
                            alt="logo"></a>
                </div>
                <div class="app-sidebar__toggle" data-bs-toggle="sidebar">
                    <a class="open-toggle" href="#"><i class="header-icon fe fe-align-left"></i></a>
                    <a class="close-toggle" href="#"><i class="header-icons fe fe-x"></i></a>
                </div>
                <div class="main-header-center ms-3 d-sm-none d-md-none d-lg-block">
                    <input class="form-control" placeholder="Search for anything..." type="search"> <button
                        class="btn"><i class="fas fa-search d-none d-md-block"></i></button>
                </div>
            </div>
            <div class="main-header-right">
                <ul class="nav nav-item  navbar-nav-right ms-auto">
                    
                    <li class="dropdown nav-item main-header-notification">
                        <a class="new nav-link" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-bell">
                                <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                            </svg><span class=" pulse"></span></a>
                        <div class="dropdown-menu">
                            <div class="menu-header-content bg-primary text-start">
                                <div class="d-flex">
                                    <h6 class="dropdown-title mb-1 tx-15 text-white fw-semibold">Notifications
                                    </h6>
                                    <span class="badge rounded-pill bg-warning ms-auto my-auto float-end">Mark
                                        All Read</span>
                                </div>
                                <p class="dropdown-title-text subtext mb-0 text-white op-6 pb-0 tx-12 ">You have
                                    4 unread Notifications</p>
                            </div>
                            <div class="main-notification-list Notification-scroll">
                                <a class="d-flex p-3 border-bottom" href="#">
                                    <div class="notifyimg bg-pink">
                                        <i class="la la-file-alt text-white"></i>
                                    </div>
                                    <div class="ms-3">
                                        <h5 class="notification-label mb-1">New files available</h5>
                                        <div class="notification-subtext">10 hour ago</div>
                                    </div>
                                    <div class="ms-auto">
                                        <i class="las la-angle-right text-end text-muted"></i>
                                    </div>
                                </a>
                                <a class="d-flex p-3 border-bottom" href="#">
                                    <div class="notifyimg bg-purple">
                                        <i class="la la-gem text-white"></i>
                                    </div>
                                    <div class="ms-3">
                                        <h5 class="notification-label mb-1">Updates Available</h5>
                                        <div class="notification-subtext">2 days ago</div>
                                    </div>
                                    <div class="ms-auto">
                                        <i class="las la-angle-right text-end text-muted"></i>
                                    </div>
                                </a>
                                <a class="d-flex p-3 border-bottom" href="#">
                                    <div class="notifyimg bg-success">
                                        <i class="la la-shopping-basket text-white"></i>
                                    </div>
                                    <div class="ms-3">
                                        <h5 class="notification-label mb-1">New Order Received</h5>
                                        <div class="notification-subtext">1 hour ago</div>
                                    </div>
                                    <div class="ms-auto">
                                        <i class="las la-angle-right text-end text-muted"></i>
                                    </div>
                                </a>
                                <a class="d-flex p-3 border-bottom" href="#">
                                    <div class="notifyimg bg-warning">
                                        <i class="la la-envelope-open text-white"></i>
                                    </div>
                                    <div class="ms-3">
                                        <h5 class="notification-label mb-1">New review received</h5>
                                        <div class="notification-subtext">1 day ago</div>
                                    </div>
                                    <div class="ms-auto">
                                        <i class="las la-angle-right text-end text-muted"></i>
                                    </div>
                                </a>
                                <a class="d-flex p-3 border-bottom" href="#">
                                    <div class="notifyimg bg-danger">
                                        <i class="la la-user-check text-white"></i>
                                    </div>
                                    <div class="ms-3">
                                        <h5 class="notification-label mb-1">22 verified registrations</h5>
                                        <div class="notification-subtext">2 hour ago</div>
                                    </div>
                                    <div class="ms-auto">
                                        <i class="las la-angle-right text-end text-muted"></i>
                                    </div>
                                </a>
                                <a class="d-flex p-3 border-bottom" href="#">
                                    <div class="notifyimg bg-primary">
                                        <i class="la la-check-circle text-white"></i>
                                    </div>
                                    <div class="ms-3">
                                        <h5 class="notification-label mb-1">Project has been approved</h5>
                                        <div class="notification-subtext">4 hour ago</div>
                                    </div>
                                    <div class="ms-auto">
                                        <i class="las la-angle-right text-end text-muted"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="dropdown-footer">
                                <a href="">VIEW ALL</a>
                            </div>
                        </div>
                    </li>

                    

                    <li class="dropdown main-profile-menu nav nav-item nav-link">
                        <a class="profile-user d-flex" href=""><img alt=""
                                src="{{url('public/panel/assets/img/faces/6.jpg')}}"></a>
                        <div class="dropdown-menu">
                            <div class="main-header-profile bg-primary p-3">
                                <div class="d-flex wd-100p">
                                    <div class="main-img-user"><img alt="" src="{{url('public/panel/assets//img/faces/6.jpg')}}"
                                            class=""></div>
                                    <div class="ms-3 my-auto">
                                        <h6>Petey Cruiser</h6><span>Premium Member</span>
                                    </div>
                                </div>
                            </div>
                            <a class="dropdown-item" href=""><i class="bx bx-user-circle"></i>Profile</a>
                            <a class="dropdown-item" href=""><i class="bx bx-cog"></i> Edit Profile</a>
                            <a class="dropdown-item" href=""><i class="bx bxs-inbox"></i>Inbox</a>
                            <a class="dropdown-item" href=""><i class="bx bx-envelope"></i>Messages</a>
                            <a class="dropdown-item" href=""><i class="bx bx-slider-alt"></i> Account
                                Settings</a>
                            <a class="dropdown-item" href="signin.html"><i class="bx bx-log-out"></i> Sign
                                Out</a>
                        </div>
                    </li>
                    
                    <li class="dropdown main-header-message right-toggle">
                        <a class="nav-link pe-0" data-bs-toggle="sidebar-right" data-bs-target=".sidebar-right">
                            <svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-menu">
                                <line x1="3" y1="12" x2="21" y2="12"></line>
                                <line x1="3" y1="6" x2="21" y2="6"></line>
                                <line x1="3" y1="18" x2="21" y2="18"></line>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /main-header -->

        <!-- container -->
        <div class="container-fluid">

        <!-- breadcrumb -->
        <div class="breadcrumb-header justify-content-between">
            <div class="left-content">
                <div>
                  <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">Hi, Admin!</h2>
                  <p class="mg-b-0">Welcome to the Dashboard panel.</p>
                </div>
            </div>					
        </div>
        <!-- breadcrumb -->
            <div>
                <p>Hello this is the Contact content page</p>
            </div>
        </div>
        <!-- /Container -->
    </div>
    <!-- /main-content -->
@endsection