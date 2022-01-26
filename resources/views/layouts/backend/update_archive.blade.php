<!doctype html>
<html class="fixed">

<head>
    @include('layouts.backend.inc_header');
    <link rel="stylesheet"
        href="{{ asset('backend/assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.css') }}" />
    <?php	$nav_active[1]='nav-expanded'; $active[5]='nav-active'; ?>
    <title>Edit Archive</title>
</head>

<body>
    <section class="body">
        @include('layouts.backend.inc_navbar');
        <section role="main" class="content-body">
            <header class="page-header">
                <h2>Edit Archive</h2>
                <div class="right-wrapper pull-right">
                    <ol class="breadcrumbs">
                        <li>
                            <a href="{{ url('backoffice/archive') }}">
                                <i class="fa fa-users"></i>
                            </a>
                        </li>
                        <li><span>Archive</span></li>
                        <li><span>Edit Archive</span></li>
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
                                    <i class="fa fa-star"></i>EDIT ARCHIVE
                                </a>
                            </h4>
                        </div>
                        <div id="collapse1One" class="accordion-body collapse in">
                            <div class="panel-body">
                                <form class="form-horizontal form-bordered" method="POST" enctype="multipart/form-data"
                                    action="{{ url('backoffice/archive/update/' . $archive->id_archive) }}">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="inputDefault">Year
                                                    :</label>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" name="year"
                                                        value="{{ $archive->year }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="panel-title-sign mt-xl text-center">
                                                <a href="{{ url('backoffice/archive') }}" type="button"
                                                    class="btn btn-into m-r-5"><i class="fa fa-chevron-left"></i>
                                                    Back</a>
                                                <input type="submit" value="Submit" class="btn btn-primary">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end: page -->

        </section>
    </section>
    @include('layouts.backend.inc_footer');

</body>

</html>
