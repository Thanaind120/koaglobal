<!doctype html>

<html class="fixed">

<head>

    @include('layouts.backend.inc_header');

    <?php	$active[6]='nav-active'; ?>

    <title>Register</title>

</head>

<body>

    <section class="body">

        @include('layouts.backend.inc_navbar');

        <section role="main" class="content-body">

            <header class="page-header">

                <h2>Register</h2>

                <div class="right-wrapper pull-right">

                    <ol class="breadcrumbs">

                        <li>

                            <a href="{{ url('backoffice/register') }}">

                                <i class="fa fa-pencil"></i>

                            </a>

                        </li>

                        <li><span>Register</span></li>

                    </ol>

                    <a class="sidebar-right-toggle"></a>

                </div>

            </header>

            <!-- start: page -->

            <div class="col-md-12 ">

                <div class="panel-group" id="accordionSuccess">

                    <div class="panel panel-accordion panel-accordion-default">

                        <div class="panel-heading">

                            <h4 class="panel-title">

                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
                                    href="#collapseSuccessOne">

                                    <i class="fa fa-star"></i>REGISTER

                                </a>

                            </h4>

                        </div>

                        <div id="collapse1One" class="accordion-body collapse in">

                            <div class="panel-body">

                                <div class="row">

                                    <div class="col-sm-6">

                                        <div class="mb-md">

                                        <a href="{{ route('register.file-export') }}" class="btn btn-success"><img src="{{ asset('backend/assets/images/xls.png') }}" width="24" />&nbsp;&nbsp;Excel</a>

                                        </div>

                                    </div>

                                </div>

                                <table class="table table-bordered table-striped mb-none" id="datatable-default">

                                    <thead>

                                        <tr>

                                            <th class="center">First-Last Name</th>

                                            <th class="center">E-mail</th>

                                            <th class="center">Contact Number</th>

                                            <th class="center">Job Title</th>

                                            <th class="center">Department</th>

                                            <th class="center">Organization</th>

                                            <th class="center">Location</th>

                                            <th class="center">Product Category</th>

                                        </tr>

                                    </thead>

                                    <tbody>

                                        <?php
                                            foreach ($register as $key=>$val){
                                        ?>

                                        <tr class="gradeX">

                                            <td class="center">{{ $val->firstname }} {{ $val->lastname }}</td>

                                            <td class="center">{{ $val->email }}</td>

                                            <td class="center">{{ $val->tel }}</td>

                                            <td class="center">{{ $val->title_name }}</td>

                                            <td class="center">{{ $val->department_name }}</td>

                                            <td class="center">{{ $val->organization_name }}</td>

                                            <td class="center">{{ $val->location_name }}</td>

                                            <td class="center">{{ $val->product_message }}</td>

                                        </tr>

                                        <?php
                                        }
                                        ?>

                                    </tbody>

                                </table>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <!-- end: page -->

        </section>

    </section>

    @include('layouts.backend.inc_footer');

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>

</body>

</html>
