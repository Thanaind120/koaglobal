<!doctype html>
<html class="fixed">

<head>
    @include('layouts.backend.inc_header');
    <link rel="stylesheet"
        href="{{ asset('backend/assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.css') }}" />
    <?php	$nav_active[1]='nav-expanded'; $active[4]='nav-active'; ?>
    <title>Create News Release</title>
</head>

<body>
    <section class="body">
        @include('layouts.backend.inc_navbar');
        <section role="main" class="content-body">
            <header class="page-header">
                <h2>Create News Release</h2>
                <div class="right-wrapper pull-right">
                    <ol class="breadcrumbs">
                        <li>
                            <a href="{{ url('backoffice/news_release') }}">
                                <i class="fa fa-users"></i>
                            </a>
                        </li>
                        <li><span>News Release</span></li>
                        <li><span>Create News Release</span></li>
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
                                    <i class="fa fa-star"></i>CREATE NEWS RELEASE
                                </a>
                            </h4>
                        </div>
                        <div id="collapse1One" class="accordion-body collapse in">
                            <div class="panel-body">
                                <form class="form-horizontal form-bordered" method="POST" enctype="multipart/form-data"
                                    action="{{ route('news_release.insert') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="inputDefault">Press Release Title (TH)
                                                    :</label>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" name="news_release_topics_th"
                                                        value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p></p>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="inputDefault">Press Release Title (EN)
                                                    :</label>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" name="news_release_topics_en"
                                                        value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="inputDefault">News Release (TH)
                                                    :</label>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" name="news_release_name_th"
                                                        value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p></p>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="inputDefault">News Release (EN)
                                                    :</label>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" name="news_release_name_en"
                                                        value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="panel-title-sign mt-xl text-center">
                                                <a href="{{ url('backoffice/news_release') }}" type="button"
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
