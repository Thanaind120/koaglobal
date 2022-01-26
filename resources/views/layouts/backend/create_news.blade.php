<!doctype html>
<html class="fixed">

<head>
    @include('layouts.backend.inc_header');
    <link rel="stylesheet"
        href="{{ asset('backend/assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.css') }}" />
    <?php	$nav_active[0]='nav-expanded'; $active[2]='nav-active'; ?>
    <title>Create News</title>
</head>

<body>
    <section class="body">
        @include('layouts.backend.inc_navbar');
        <section role="main" class="content-body">
            <header class="page-header">
                <h2>Create News</h2>
                <div class="right-wrapper pull-right">
                    <ol class="breadcrumbs">
                        <li>
                            <a href="{{ url('backoffice/news') }}">
                                <i class="fa fa-home"></i>
                            </a>
                        </li>
                        <li><span>News</span></li>
                        <li><span>Create News</span></li>
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
                                    <i class="fa fa-star"></i>CREATE NEWS
                                </a>
                            </h4>
                        </div>
                        <div id="collapse1One" class="accordion-body collapse in">
                            <div class="panel-body">
                                <form class="form-horizontal form-bordered" method="POST" enctype="multipart/form-data"
                                    action="{{ route('news.insert') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">News Release :</label>
                                                <div class="col-md-6">
                                                    <select data-plugin-selectTwo class="form-control populate"
                                                        id="id_news_release" name="id_news_releases">
                                                        <optgroup label="Please select news release">
                                                            <option value=""> - </option>
                                                            <?php
                                                            foreach ($news_release as $key=>$val){
                                                          ?>
                                                            <option name="id_news_releases"
                                                                value="{{ $val->id_news_release }}">
                                                                {{ $val->news_release_topics_en }}</option>
                                                            <?php
                                                          }
                                                          ?>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p></p>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Archive :</label>
                                                <div class="col-md-6">
                                                    <select data-plugin-selectTwo class="form-control populate"
                                                        id="id_archive" name="id_archives">
                                                        <optgroup label="Please select archive">
                                                            <option value=""> - </option>
                                                            <?php
                                                            foreach ($archive as $key=>$val){
                                                          ?>
                                                            <option name="id_archives"
                                                                value="{{ $val->id_archive }}">
                                                                {{ $val->year }}</option>
                                                            <?php
                                                          }
                                                          ?>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="inputDefault">Date
                                                    :</label>
                                                <div class="col-md-3">
                                                    <input type="date" class="form-control" name="save_date"
                                                        value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="inputDefault">News (TH)
                                                    :</label>
                                                <div class="col-md-6">
                                                    <textarea type="text" class="form-control" name="news_name_th"
                                                        value=""></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p></p>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="inputDefault">News (EN)
                                                    :</label>
                                                <div class="col-md-6">
                                                    <textarea type="text" class="form-control" name="news_name_en"
                                                        value=""></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Upload File :</label>
                                                <div class="col-md-6">
                                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                                        <div class="input-append">
                                                            <div class="uneditable-input">
                                                                <i class="fa fa-file fileupload-exists"></i>
                                                                <span class="fileupload-preview"></span>
                                                            </div>
                                                            <span class="btn btn-default btn-file">
                                                                <span class="fileupload-exists">Change</span>
                                                                <span class="fileupload-new">Select file</span>
                                                                <input type="file" accept="image/*" id="img"
                                                                    name="image" required />
                                                            </span>
                                                            <br>
                                                            <br><img src="{{ asset('backend/assets/images/image_news/nopic.jpg') }}"
                                                                class="rounded" id="images" alt="Cinque Terre"
                                                                width="40%">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="panel-title-sign mt-xl text-center">
                                                <a href="{{ url('backoffice/news') }}" type="button"
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
    <script>
        var _URL = window.URL || window.webkitURL;

        $("#img").change(function () {

            var image, file;

            var value_input = this;

            if ((file = this.files[0])) {

                image = new Image();

                image.onload = function () {

                    signature(value_input);

                };

                image.src = _URL.createObjectURL(file);

            }

        });

        function signature(input) {

            if (input.files && input.files[0]) {

                var reader = new FileReader();

                reader.onload = function (e) {

                    $('#images').attr('src', e.target.result);

                }

                reader.readAsDataURL(input.files[0]);

            }

        }

    </script>
</body>

</html>
