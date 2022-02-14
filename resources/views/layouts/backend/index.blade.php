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
                <h1 class="h1 mb-0 text-gray-800">Overview</h1>
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
                                                <h4 class="title">All Registered Visitors</h4>
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
                                                <a class="text-muted text-uppercase">(All Reports)</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-md-12 col-lg-6 col-xl-6">
                            <section class="panel panel-featured-left panel-featured-secondary">
                                <div class="panel-body">
                                    <div class="widget-summary">
                                        <div class="widget-summary-col widget-summary-col-icon">
                                            <div class="summary-icon bg-secondary">
                                                <i class="fa fa-user"></i>
                                            </div>
                                        </div>
                                        <div class="widget-summary-col">
                                            <div class="summary">
                                                <h4 class="title">Visitors Registered This Year</h4>
                                                <div class="info">
                                                    <strong class="amount">
                                                        <?php foreach($year_register as $key=>$val){ ?>
                                                        <?php if($val->year_register != ''){ ?>
                                                        {{ $val->year_register }}
                                                        <?php }else{ ?>
                                                        0
                                                        <?php } ?>
                                                        <?php } ?>
                                                    </strong>
                                                </div>
                                            </div>
                                            <div class="summary-footer">
                                                <a class="text-muted text-uppercase">(Annual Report)</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-md-12 col-lg-6 col-xl-6">
                            <section class="panel panel-featured-left panel-featured-quartenary">
                                <div class="panel-body">
                                    <div class="widget-summary">
                                        <div class="widget-summary-col widget-summary-col-icon">
                                            <div class="summary-icon bg-quartenary">
                                                <i>
                                                    <image src="{{ asset('backend/assets/images/month.png') }}"
                                                        width="60px">
                                                </i>
                                            </div>
                                        </div>
                                        <div class="widget-summary-col">
                                            <div class="summary">
                                                <h4 class="title">Visitors Registered This Month</h4>
                                                <div class="info">
                                                    <strong class="amount">
                                                        <?php foreach($month_register as $key=>$val){ ?>
                                                        <?php if($val->month_register != ''){ ?>
                                                        {{ $val->month_register }}
                                                        <?php }else{ ?>
                                                        0
                                                        <?php } ?>
                                                        <?php } ?>
                                                    </strong>
                                                </div>
                                            </div>
                                            <div class="summary-footer">
                                                <a class="text-muted text-uppercase">(Monthly Report)</a>
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
                                                <i>
                                                    <image src="{{ asset('backend/assets/images/day.png') }}"
                                                        width="60px">
                                                </i>
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
                                                <a class="text-muted text-uppercase">(Report Today)</a>
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
            {{-- <br> --}}
            <h3 class="h3 mb-0 text-gray-800">Product Category Report</h3>
            {{-- <?php //foreach($register_one as $key=>$val){ ?>
            <font color="black">1.Resistors(SMD) Number of Visitors <font color="red">{{ ($val->register_one != '')? $val->register_one : 0 }}
            </font>
            Times</font><br>
            <?php //} ?>
            <?php //foreach($register_two as $key=>$val){ ?>
            <font color="black">2.Low Resistance/Current Sense Shunt Resistors Number of Visitors
                <font color="red">{{ ($val->register_two != '')? $val->register_two : 0 }}</font> Times</font><br>
            <?php //} ?>
            <?php //foreach($register_three as $key=>$val){ ?>
            <font color="black">3.Resistors(Leaded) Number of Visitors
                <font color="red">{{ ($val->register_three != '')? $val->register_three : 0 }}</font> Times</font><br>
            <?php //} ?>
            <?php //foreach($register_four as $key=>$val){ ?>
            <font color="black">4.Thermistors Thermal Sensors Number of Visitors
                <font color="red">{{ ($val->register_four != '')? $val->register_four : 0 }}</font> Times</font><br>
            <?php //} ?>
            <?php //foreach($register_five as $key=>$val){ ?>
            <font color="black">5.Inductors Number of Visitors <font color="red">
                    {{ ($val->register_five != '')? $val->register_five : 0 }}</font>
                Times</font><br>
            <?php //} ?>
            <?php //foreach($register_six as $key=>$val){ ?>
            <font color="black">6.Fuses Number of Visitors <font color="red">
                    {{ ($val->register_six != '')? $val->register_six : 0 }}</font> Times
            </font><br>
            <?php //} ?>
            <?php //foreach($register_seven as $key=>$val){ ?>
            <font color="black">7.Varistors Number of Visitors <font color="red">
                    {{ ($val->register_seven != '')? $val->register_seven : 0 }}</font>
                Times</font><br>
            <?php //} ?>
            <?php //foreach($register_eight as $key=>$val){ ?>
            <font color="black">8.LTCC Substrates Number of Visitors
                <font color="red">{{ ($val->register_eight != '')? $val->register_eight : 0 }}</font> Times</font><br>
            <?php //} ?>
            <?php //foreach($register_nine as $key=>$val){ ?>
            <font color="black">9.Others Number of Visitors <font color="red">
                    {{ ($val->register_nine != '')? $val->register_nine : 0 }}</font> Times
            </font>
            <?php //} ?> --}}
            <form action="{{ route('search.report') }}" method="get">

                <div class="form-inline">

                    <div class="block">

                        <label>Date From :</label>

                        <div class="form-group">

                            <?php if(isset($d_from)) {?>
                            <input type="date" class="form-control filter" id="date_from" name="date_from" autocomplete="off"
                                value="{{ $d_from }}">
                            <?php }else{ ?>
                            <input type="date" class="form-control filter" id="date_from" name="date_from" autocomplete="off"
                                value="">
                            <?php } ?>

                        </div>

                        &nbsp;&nbsp;<label>Date To :</label>

                        <div class="form-group">
                            <?php if(isset($d_to)) {?>
                            <input type="date" class="form-control filter" id="date_to" name="date_to" autocomplete="off"
                                value="{{ $d_to }}">
                            <?php }else{ ?>
                            <input type="date" class="form-control filter" id="date_to" name="date_to" autocomplete="off"
                                value="">
                            <?php } ?>
                        </div>

                        &nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-info">Search</button>

                        <button type="button" id="btn_clear" class="btn btn-danger"
                            onclick="clear_filter()">Clear</button>

                    </div>

                </div>

            </form>
            <br>
            <div class="col-md-12 ">

                <div class="panel-group" id="accordionSuccess">

                    <div class="panel panel-accordion panel-accordion-default">

                        <div id="collapse1One" class="accordion-body collapse in">

                            <div class="panel-body">

                                <div class="row">

                                    <div class="col-sm-6">

                                        <div class="mb-md">
                                            <?php if(isset($d_from) && isset($d_to)) {?>
                                            <a href="{{ url('/backoffice/dashboard/file-export?date_from='.$d_from.'&date_to='.$d_to) }}"
                                                class="btn btn-success"><img
                                                    src="{{ asset('backend/assets/images/xls.png') }}"
                                                    width="24" />&nbsp;&nbsp;Excel</a>
                                            <?php }else{ ?>
                                            <a href="{{ route('dashboard.file-export2') }}" class="btn btn-success"><img
                                                    src="{{ asset('backend/assets/images/xls.png') }}"
                                                    width="24" />&nbsp;&nbsp;Excel</a>
                                            <?php } ?>
                                        </div>

                                    </div>

                                </div>

                                <table class="table table-bordered table-striped mb-none" id="datatable-default">

                                    <thead>

                                        <tr>

                                            <th class="center">No</th>

                                            <th class="center">Save Date</th>

                                            <th class="center">Product Category</th>

                                            <th class="center"></th>

                                            <th class="center"></th>

                                        </tr>

                                    </thead>

                                    <tbody>

                                        <?php
                                            $i = 0;
                                            foreach ($result as $key=>$val){
                                                $i++
                                        ?>

                                        <tr class="gradeX">

                                            <td class="center" width="10%">{{ $i }}</td>

                                            <td class="center" width="10%">{{ $val->save_date }}</td>

                                            <td class="center" width="20%">{{ $val->product_category }}</td>

                                            <td class="center" width="10%"></td>

                                            <td class="center" width="10%"></td>

                                        </tr>

                                        <?php
                                        }
                                        ?>

                                    </tbody>

                                    <?php foreach($register_one as $key=>$val){ ?>

                                    <tr class="gradeX">

                                        <td class="center"></td>

                                        <td class="center"></td>

                                        <td class="left">
                                            <font color="black">1.Resistors(SMD)</font>
                                        </td>

                                        <td class="center">
                                            <font color="red">{{ ($val->register_one != '')? $val->register_one : 0 }}
                                            </font>
                                        </td>

                                        <td class="center">
                                            <font color="black"> Times </font>
                                        </td>

                                    </tr>

                                    <?php
                                }
                                ?>

                                    <?php foreach($register_two as $key=>$val){ ?>

                                    <tr class="gradeX">

                                        <td class="center"></td>

                                        <td class="center"></td>

                                        <td class="left">
                                            <font color="black">2.Low Resistance/Current Sense Shunt Resistors</font>
                                        </td>

                                        <td class="center">
                                            <font color="red">{{ ($val->register_two != '')? $val->register_two : 0 }}
                                            </font>
                                        </td>

                                        <td class="center">
                                            <font color="black"> Times </font>
                                        </td>

                                    </tr>

                                    <?php
                                }
                                ?>

                                    <?php foreach($register_three as $key=>$val){ ?>

                                    <tr class="gradeX">

                                        <td class="center"></td>

                                        <td class="center"></td>

                                        <td class="left">
                                            <font color="black">3.Resistors(Leaded)</font>
                                        </td>

                                        <td class="center">
                                            <font color="red">
                                                {{ ($val->register_three != '')? $val->register_three : 0 }}</font>
                                        </td>

                                        <td class="center">
                                            <font color="black"> Times </font>
                                        </td>

                                    </tr>

                                    <?php
                                }
                                ?>

                                    <?php foreach($register_four as $key=>$val){ ?>

                                    <tr class="gradeX">

                                        <td class="center"></td>

                                        <td class="center"></td>

                                        <td class="left">
                                            <font color="black">4.Thermistors Thermal Sensors</font>
                                        </td>

                                        <td class="center">
                                            <font color="red">{{ ($val->register_four != '')? $val->register_four : 0 }}
                                            </font>
                                        </td>

                                        <td class="center">
                                            <font color="black"> Times </font>
                                        </td>

                                    </tr>

                                    <?php
                                }
                                ?>

                                    <?php foreach($register_five as $key=>$val){ ?>

                                    <tr class="gradeX">

                                        <td class="center"></td>

                                        <td class="center"></td>

                                        <td class="left">
                                            <font color="black">5.Inductors</font>
                                        </td>

                                        <td class="center">
                                            <font color="red">{{ ($val->register_five != '')? $val->register_five : 0 }}
                                            </font>
                                        </td>

                                        <td class="center">
                                            <font color="black"> Times </font>
                                        </td>

                                    </tr>

                                    <?php
                                }
                                ?>

                                    <?php foreach($register_six as $key=>$val){ ?>

                                    <tr class="gradeX">

                                        <td class="center"></td>

                                        <td class="center"></td>

                                        <td class="left">
                                            <font color="black">6.Fuses</font>
                                        </td>

                                        <td class="center">
                                            <font color="red">{{ ($val->register_six != '')? $val->register_six : 0 }}
                                            </font>
                                        </td>

                                        <td class="center">
                                            <font color="black"> Times </font>
                                        </td>

                                    </tr>

                                    <?php
                                }
                                ?>

                                    <?php foreach($register_seven as $key=>$val){ ?>

                                    <tr class="gradeX">

                                        <td class="center"></td>

                                        <td class="center"></td>

                                        <td class="left">
                                            <font color="black">7.Varistors</font>
                                        </td>

                                        <td class="center">
                                            <font color="red">
                                                {{ ($val->register_seven != '')? $val->register_seven : 0 }}</font>
                                        </td>

                                        <td class="center">
                                            <font color="black"> Times </font>
                                        </td>

                                    </tr>

                                    <?php
                                }
                                ?>

                                    <?php foreach($register_eight as $key=>$val){ ?>

                                    <tr class="gradeX">

                                        <td class="center"></td>

                                        <td class="center"></td>

                                        <td class="left">
                                            <font color="black">8.LTCC Substrates</font>
                                        </td>

                                        <td class="center">
                                            <font color="red">
                                                {{ ($val->register_eight != '')? $val->register_eight : 0 }}</font>
                                        </td>

                                        <td class="center">
                                            <font color="black"> Times </font>
                                        </td>

                                    </tr>

                                    <?php
                                }
                                ?>

                                    <?php foreach($register_nine as $key=>$val){ ?>

                                    <tr class="gradeX">

                                        <td class="center"></td>

                                        <td class="center"></td>

                                        <td class="left">
                                            <font color="black">9.Others</font>
                                        </td>

                                        <td class="center">
                                            <font color="red">{{ ($val->register_nine != '')? $val->register_nine : 0 }}
                                            </font>
                                        </td>

                                        <td class="center">
                                            <font color="black"> Times </font>
                                        </td>

                                    </tr>

                                    <?php
                                }
                                ?>

                                </table>

                            </div>

                        </div>

                    </div>

                </div>

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
    <script type="text/javascript">
        
        const clear_filter = () => {
            $('.filter').val('');
        }

    </script>

</body>

</html>
