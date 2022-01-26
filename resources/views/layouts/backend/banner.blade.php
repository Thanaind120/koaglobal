<!doctype html>

<html class="fixed">

<head>

    @include('layouts.backend.inc_header');

    <?php	$nav_active[0]='nav-expanded'; $active[1]='nav-active'; ?>

    <title>Banner</title>

</head>

<body>

    <section class="body">

        @include('layouts.backend.inc_navbar');

        <section role="main" class="content-body">

            <header class="page-header">

                <h2>Banner</h2>

                <div class="right-wrapper pull-right">

                    <ol class="breadcrumbs">

                        <li>

                            <a href="{{ url('backoffice/banner') }}">

                                <i class="fa fa-home"></i>

                            </a>

                        </li>

                        <li><span>Banner</span></li>

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

                                    <i class="fa fa-star"></i>BANNER

                                </a>

                            </h4>

                        </div>

                        <div id="collapse1One" class="accordion-body collapse in">

                            <div class="panel-body">

                                <div class="row">

                                    <div class="col-sm-6">

                                        <div class="mb-md">

                                            <a href="{{ url('backoffice/banner/create') }}" class="btn btn-primary"><i
                                                    class="fa fa-plus"></i></a>

                                        </div>

                                    </div>

                                </div>

                                <p></p>

                                <table class="table table-bordered table-striped mb-none" id="datatable-default">

                                    <thead>

                                        <tr>

                                            <th class="center">No.</th>

                                            <th class="center">Web Banner</th>

                                            <th class="center">Mobile Banner</th>

                                            <th class="center">Tools </th>

                                        </tr>

                                    </thead>

                                    <tbody>

                                        <?php
                                            $i = 0;
                                            foreach ($ban as $key=>$val){
                                                $i++
                                        ?>

                                        <tr class="gradeX">

                                            <td class="center" width="10%">{{ $i }}</td>

                                            <td class="center"><img
                                                    src="{{ asset('backend/assets/images/banner/'.$val->image_banner) }}"
                                                    class="img-slide" width="200"></td>

                                            <td class="center"><img
                                                    src="{{ asset('backend/assets/images/banner/'.$val->image_banner2) }}"
                                                    class="img-slide" width="200"></td>

                                            <td class="center" width="25%">
                                                <button class="btn btn-primary"
                                                    onclick="update_banner({{ $val->id_banner }})">
                                                    <i class="fa fa-cog" title="edit"></i>
                                                </button>
                                                <button class="btn btn-danger"
                                                    onclick="delete_banner({{ $val->id_banner }})">
                                                    <i class="fa fa-trash-o" title="delete"></i></a>
                                                </button>
                                            </td>

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

    <script type="text/javascript">

        function update_banner(id) {
            var _url = "{{ url('backoffice/banner/edit') }}" + '/' + id;
            window.location.href = _url;
        };

        function delete_banner(id) {

            swal({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#DD6B55',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                },
                function (isConfirm) {
                    if (isConfirm) {
                        $.ajax({
                            type: "DELETE",
                            url: "{!! url('/backoffice/banner/delete/" + id + "') !!}",
                            data: {
                                '_token': "{{ csrf_token() }}"
                            },
                            success: function (data) {
                                console.log(data);
                                location.reload();
                            }
                        });
                    }
                });
        }

    </script>

</body>

</html>
