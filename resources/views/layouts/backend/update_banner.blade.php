<!doctype html>
<html class="fixed">
<head>
    @include('layouts.backend.inc_header');
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.css') }}" />
    <?php	$nav_active[0]='nav-expanded'; $active[1]='nav-active'; ?>
    <title>Edit Banner</title>
</head>
<body>
    <section class="body">
        @include('layouts.backend.inc_navbar');
        <section role="main" class="content-body">
            <header class="page-header">
                <h2>Edit Banner</h2>
                <div class="right-wrapper pull-right">
                    <ol class="breadcrumbs">
                        <li>
                            <a href="{{ url('backoffice/banner') }}">
                                <i class="fa fa-home"></i>
                            </a>
                        </li>
                        <li><span>Banner</span></li>
                        <li><span>Edit Banner</span></li>
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
                                    <i class="fa fa-star"></i>EDIT BANNER
                                </a>
                            </h4>
                        </div>
                        <div id="collapse1One" class="accordion-body collapse in">
                            <div class="panel-body">
                                <form class="form-horizontal form-bordered" method="POST" enctype="multipart/form-data"
                                    action="{{ url('backoffice/banner/update/' . $ban->id_banner) }}">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Web Upload File :</label>
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
                                                                    name="image_banner" required/>
                                                            </span>
                                                            <br>
                                                            <br><img src="{{ asset('backend/assets/images/banner/'.$ban->image_banner) }}"
                                                                class="rounded" id="images" alt="Cinque Terre"
                                                                width="40%">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p></p>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Mobile Upload File :</label>
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
                                                                <input type="file" accept="image/*" id="img2"
                                                                    name="image_banner2" required/>
                                                            </span>
                                                            <br>
                                                            <br><img src="{{ asset('backend/assets/images/banner/'.$ban->image_banner2) }}"
                                                                class="rounded" id="images2" alt="Cinque Terre"
                                                                width="40%">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p></p>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="panel-title-sign mt-xl text-center">
                                                <a href="{{ url('backoffice/banner') }}" type="button"
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

        $("#img2").change(function () {

            var image, file;

            var value_input = this;

            if ((file = this.files[0])) {

                image = new Image();

                image.onload = function () {

                    signature2(value_input);

                };

                image.src = _URL.createObjectURL(file);

            }

        });

        function signature2(input) {

            if (input.files && input.files[0]) {

                var reader = new FileReader();

                reader.onload = function (e) {

                    $('#images2').attr('src', e.target.result);

                }

                reader.readAsDataURL(input.files[0]);

            }

        }

    </script>
</body>
</html>
