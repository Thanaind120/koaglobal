<!-- start: header -->
<header class="header">
    <div class="logo-container">
        <a href="../" class="logo">
            <img src="{{ asset('backend/assets/images/header_logo.png') }}" height="35" alt="JSOFT Admin" />
        </a>
        <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html"
            data-fire-event="sidebar-left-opened">
            <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
        </div>
    </div>

    <!-- start: search & user box -->
    <div class="header-right">

        <span class="separator"></span>

        <div id="userbox" class="userbox">
            <a href="#" data-toggle="dropdown">
                <figure class="profile-picture">
                    <img src="{{ asset('backend/assets/images/image_user/'.Auth::user()->image) }}" alt="{{ Auth::user()->name }}" class="img-circle"
                        data-lock-picture="{{ asset('backend/assets/images/!logged-user.jpg') }}" />
                </figure>
                <div class="profile-info" data-lock-name="{{ Auth::user()->name }}" data-lock-email="{{ Auth::user()->email }}">
                    <span class="name">{{ Auth::user()->name }}</span>
                    <span class="role">Administrator</span>
                </div>

                <i class="fa custom-caret"></i>
            </a>

            <div class="dropdown-menu">
                <ul class="list-unstyled">
                    <li class="divider"></li>
                    <li>
                        <a role="menuitem" tabindex="-1" href="{{ route('backoffice.logout') }}"><i class="fa fa-power-off"></i>
                            Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- end: search & user box -->
</header>
<!-- end: header -->

<div class="inner-wrapper">
    <!-- start: sidebar -->
    <aside id="sidebar-left" class="sidebar-left">

        <div class="sidebar-header">
            <div class="sidebar-title">
                <font color="white">MENU</font>
            </div>
            <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html"
                data-fire-event="sidebar-left-toggle">
                <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
            </div>
        </div>

        <div class="nano">
            <div class="nano-content">
                <nav id="menu" class="nav-main" role="navigation">
                    <ul class="nav nav-main">
                        <li class="<?php echo (isset($active[0]))?$active[0]:'';?>">
                            <a href="{{ url('backoffice/dashboard') }}">
                                <i class="fa  fa-dashboard" aria-hidden="true"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-parent <?php echo (isset($nav_active[0]))?$nav_active[0]:'';?>">
                            <a>
                                <i class="fa fa-home" aria-hidden="true"></i>
                                <span>Home</span>
                            </a>
                            <ul class="nav nav-children">
                                <li class="<?php echo (isset($active[1]))?$active[1]:'';?>">
                                    <a href="{{ url('backoffice/banner') }}">
                                        Banner
                                    </a>
                                </li>
                                <li class="<?php echo (isset($active[2]))?$active[2]:'';?>">
                                    <a href="{{ url('backoffice/news') }}">
                                        News
                                    </a>
                                </li>                    
                            </ul>
                        </li>

                        {{-- <hr class="separator" /> --}}
                        <br>
                        <div class="sidebar-widget widget-stats">
                            <div class="widget-header">
                                <h6><font color="white">MANAGEMENT</font></h6>
                                {{-- <div class="widget-toggle">+</div> --}}
                            </div>
                        </div>
                        <br>
                        <li class="nav-parent <?php echo (isset($nav_active[1]))?$nav_active[1]:'';?>">
                            <a>
                                <i class="fa fa-users" aria-hidden="true"></i>
                                <span>User Management</span>
                            </a>
                            <ul class="nav nav-children">
                                <li class="<?php echo (isset($active[3]))?$active[3]:'';?>">
                                    <a href="#">
                                        User
                                    </a>
                                </li>
                                <li class="<?php echo (isset($active[4]))?$active[4]:'';?>">
                                    <a href="{{ url('backoffice/news_release') }}">
                                        News Release
                                    </a>
                                </li>
                                <li class="<?php echo (isset($active[5]))?$active[5]:'';?>">
                                    <a href="{{ url('backoffice/archive') }}">
                                        Archive
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>

        </div>

    </aside>
    <!-- end: sidebar -->
