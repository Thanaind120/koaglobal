<!doctype html>

<html class="fixed">

<head>

    @include('layouts.backend.inc_header');

    <?php $active[0]='nav-active'; ?>

    <title>Dashboard</title>

</head>

<body>
    <section class="body">

        @include('layouts.backend.inc_navbar');

        <section role="main" class="content-body">

            <header class="page-header">

                <h2>Dashboard</h2>

                <div class="right-wrapper pull-right">

                    <ol class="breadcrumbs">

                        <li>

                            <a href="{{ url('backoffice/dashboard') }}">

                                <i class="fa fa-dashboard"></i>

                            </a>

                        </li>

                        <li><span>Dashboard</span></li>

                    </ol>

                    <a class="sidebar-right-toggle"></a>

                </div>

            </header>
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h1 mb-0 text-gray-800">Statistics</h1>
            </div>
            <!-- start: page -->
            <div class="row">
                <div class="col-md-6 col-lg-12 col-xl-6">
                    <div class="row">
                        <div class="col-md-12 col-lg-6 col-xl-6">
                            <section class="panel panel-featured-left panel-featured-primary">
                                <div class="panel-body">
                                    <div class="widget-summary">
                                        <div class="widget-summary-col widget-summary-col-icon">
                                            <div class="summary-icon bg-primary">
                                                <i class="fa fa-users"></i>
                                            </div>
                                        </div>
                                        <div class="widget-summary-col">
                                            <div class="summary">
                                                <h4 class="title">History Of All Registered Visitors</h4>
                                                <div class="info">
                                                    <strong class="amount">
                                                        <?php foreach($total_register as $key=>$val){ ?>
                                                        <?php if($val->total_register != ''){ ?>
                                                        {{ $val->total_register }}
                                                        <?php }else{ ?>
                                                        0
                                                        <?php } ?>
                                                        <?php } ?>
                                                    </strong>
                                                </div>
                                            </div>
                                            <div class="summary-footer">
                                                <a class="text-muted text-uppercase">(Report)</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-md-12 col-lg-6 col-xl-6">
                            <section class="panel panel-featured-left panel-featured-tertiary">
                                <div class="panel-body">
                                    <div class="widget-summary">
                                        <div class="widget-summary-col widget-summary-col-icon">
                                            <div class="summary-icon bg-tertiary">
                                                <i class="fa fa-user"></i>
                                            </div>
                                        </div>
                                        <div class="widget-summary-col">
                                            <div class="summary">
                                                <h4 class="title">Visitors Who Register Today</h4>
                                                <div class="info">
                                                    <strong class="amount">
                                                        <?php foreach($today_register as $key=>$val){ ?>
                                                        <?php if($val->today_register != ''){ ?>
                                                        {{ $val->today_register }}
                                                        <?php }else{ ?>
                                                        0
                                                        <?php } ?>
                                                        <?php } ?>
                                                    </strong>
                                                </div>
                                            </div>
                                            <div class="summary-footer">
                                                <a class="text-muted text-uppercase">(Report)</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-md-6 col-lg-12 col-xl-6">
                    <section class="panel">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="chart-data-selector" id="salesSelectorWrapper">
                                        <h2>
                                            Charts:
                                            <strong>
                                                <select class="form-control" id="salesSelector" disabled>
                                                    <option value="Register" selected>REGISTER</option>
                                                </select>
                                            </strong>
                                        </h2>

                                        <div id="salesSelectorItems" class="chart-data-selector-items mt-sm">
                                            <!-- Flot: Sales JSOFT Admin -->
                                            <div class="chart chart-sm" data-sales-rel="Register" id="flotDashSales1"
                                                class="chart-active"></div>
                                            <script>
                                                var flotDashSales1Data = [{
                                                    data: [
                                                        ["Jan", 5],
                                                        ["Feb", 1],
                                                        ["Mar", 190],
                                                        ["Apr", 140],
                                                        ["May", 180],
                                                        ["Jun", 320],
                                                        ["Jul", 270],
                                                        ["Aug", 180],
                                                        ["Sep", 180],
                                                        ["Oct", 180],
                                                        ["Nov", 180],
                                                        ["Dec", 180],
                                                    ],
                                                    color: "#0088cc"
                                                }];

                                                // See: assets/javascripts/dashboard/examples.dashboard.js for more settings.

                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div> --}}

            </div>
            <!-- end: page -->

        </section>

        </div>

        <aside id="sidebar-right" class="sidebar-right">
            <div class="nano">
                <div class="nano-content">
                    <a href="#" class="mobile-close visible-xs">
                        Collapse <i class="fa fa-chevron-right"></i>
                    </a>

                    <div class="sidebar-right-wrapper">

                        <div class="sidebar-widget widget-calendar">
                            <h6>Upcoming Tasks</h6>
                            <div data-plugin-datepicker data-plugin-skin="dark"></div>

                            <ul>
                                <li>
                                    <time datetime="2014-04-19T00:00+00:00">04/19/2014</time>
                                    <span>Company Meeting</span>
                                </li>
                            </ul>
                        </div>

                        <div class="sidebar-widget widget-friends">
                            <h6>Friends</h6>
                            <ul>
                                <li class="status-online">
                                    <figure class="profile-picture">
                                        <img src="{{ asset('backend/assets/images/!sample-user.jpg') }}"
                                            alt="Joseph Doe" class="img-circle">
                                    </figure>
                                    <div class="profile-info">
                                        <span class="name">Joseph Doe Junior</span>
                                        <span class="title">Hey, how are you?</span>
                                    </div>
                                </li>
                                <li class="status-online">
                                    <figure class="profile-picture">
                                        <img src="{{ asset('backend/assets/images/!sample-user.jpg') }}"
                                            alt="Joseph Doe" class="img-circle">
                                    </figure>
                                    <div class="profile-info">
                                        <span class="name">Joseph Doe Junior</span>
                                        <span class="title">Hey, how are you?</span>
                                    </div>
                                </li>
                                <li class="status-offline">
                                    <figure class="profile-picture">
                                        <img src="{{ asset('backend/assets/images/!sample-user.jpg') }}"
                                            alt="Joseph Doe" class="img-circle">
                                    </figure>
                                    <div class="profile-info">
                                        <span class="name">Joseph Doe Junior</span>
                                        <span class="title">Hey, how are you?</span>
                                    </div>
                                </li>
                                <li class="status-offline">
                                    <figure class="profile-picture">
                                        <img src="{{ asset('backend/assets/images/!sample-user.jpg') }}"
                                            alt="Joseph Doe" class="img-circle">
                                    </figure>
                                    <div class="profile-info">
                                        <span class="name">Joseph Doe Junior</span>
                                        <span class="title">Hey, how are you?</span>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </aside>

    </section>

    @include('layouts.backend.inc_footer');

</body>

</html>
