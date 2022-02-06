<!doctype html>
<html class="fixed">

<head>
    @include('layouts.backend.inc_header');
    <link rel="stylesheet"
        href="{{ asset('backend/assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.css') }}" />
    <?php	$nav_active[0]='nav-expanded'; $active[2]='nav-active'; ?>
    <title>Edit News</title>
</head>

<body>
    <section class="body">
        @include('layouts.backend.inc_navbar');
        <section role="main" class="content-body">
            <header class="page-header">
                <h2>Edit News</h2>
                <div class="right-wrapper pull-right">
                    <ol class="breadcrumbs">
                        <li>
                            <a href="{{ url('backoffice/news') }}">
                                <i class="fa fa-home"></i>
                            </a>
                        </li>
                        <li><span>News</span></li>
                        <li><span>Edit News</span></li>
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
                                    <i class="fa fa-star"></i>EDIT NEWS
                                </a>
                            </h4>
                        </div>
                        <div id="collapse1One" class="accordion-body collapse in">
                            <div class="panel-body">
                                <form class="form-horizontal form-bordered" method="POST" enctype="multipart/form-data"
                                    action="{{ url('backoffice/news/update/' . $news->id_news) }}">
                                    @csrf
                                    @method('PUT')
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
                                                                {{ ($news->id_news_releases == $val->id_news_release)?"selected":"" }}
                                                                value="{{ $val->id_news_release }}">
                                                                {{ $val->news_release_topics_en }}
                                                            </option>
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
                                                                {{ ($news->id_archives == $val->id_archive)?"selected":"" }}
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
                                                        value="{{ $news->save_date }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="inputDefault">Headliness (TH)
                                                    :</label>
                                                <div class="col-md-6">
                                                    <textarea type="text" class="form-control"
                                                        name="news_name_th">{{ $news->news_name_th }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p></p>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="inputDefault">Headliness (EN)
                                                    :</label>
                                                <div class="col-md-6">
                                                    <textarea type="text" class="form-control"
                                                        name="news_name_en">{{ $news->news_name_en }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if($news->id_news_releases == 3){ ?>
                                    <hr id="hide_one">
                                    <div class="row" id="hidden_one">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">News Content (TH) :</label>
                                                <div class="col-md-7">
                                                    <textarea type="text" id="editor1" rows="2" class="form-control"
                                                        name="detail_th" data-toggle="tooltip" data-trigger="hover"
                                                        data-placement="top" data-title="detail_th">{{ $news->detail_th }}
                                                    </textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p></p>
                                    <div class="row" id="hidden_two">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">News Content (EN) :</label>
                                                <div class="col-md-7">
                                                    <textarea type="text" id="editor2" rows="2" class="form-control"
                                                        name="detail_en" data-toggle="tooltip" data-trigger="hover"
                                                        data-placement="top" data-title="detail_en">{{ $news->detail_en }}
                                                    </textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php }else{ ?>
                                    <hr id="hide_one" style="display: none;">
                                    <div class="row" id="hidden_one" style="display: none;">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">News Content (TH) :</label>
                                                <div class="col-md-7">
                                                    <textarea type="text" id="editor1" rows="2" class="form-control"
                                                        name="detail_th" data-toggle="tooltip" data-trigger="hover"
                                                        data-placement="top" data-title="detail_th">{{ $news->detail_th }}
                                                    </textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p></p>
                                    <div class="row" id="hidden_two" style="display: none;">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">News Content (EN) :</label>
                                                <div class="col-md-7">
                                                    <textarea type="text" id="editor2" rows="2" class="form-control"
                                                        name="detail_en" data-toggle="tooltip" data-trigger="hover"
                                                        data-placement="top" data-title="detail_en">{{ $news->detail_en }}
                                                    </textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php }?>
                                    <?php if($news->id_news_releases == 2){ ?>
                                    <hr id="hide_two">
                                    <div class="row" id="hidden_three">
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
                                                                    name="image" />
                                                            </span>
                                                            <br>
                                                            <br><img
                                                                src="{{ asset('backend/assets/images/image_news/'.$news->image) }}"
                                                                class="rounded" id="images" alt="Cinque Terre"
                                                                width="40%">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php }else{ ?>
                                    <hr id="hide_two" style="display: none;">
                                    <div class="row" id="hidden_three" style="display: none;">
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
                                                                <input type="file" accept="image/*" id="img2"
                                                                    name="image" />
                                                            </span>
                                                            <br>
                                                            <br><img
                                                                src="{{ asset('backend/assets/images/image_news/nopic.jpg') }}"
                                                                class="rounded" id="images2" alt="Cinque Terre"
                                                                width="40%">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <?php if($news->id_news_releases == 1){ ?>
                                    <hr id="hide_three">
                                    <div class="row" id="hidden_four">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="inputDefault">Url
                                                    :</label>
                                                <div class="col-md-3">
                                                    <input type="text" class="form-control" id="url" name="url"
                                                        value="{{ $news->url }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php }else{ ?>
                                    <hr id="hide_three" style="display: none;">
                                    <div class="row" id="hidden_four" style="display: none;">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="inputDefault">Url
                                                    :</label>
                                                <div class="col-md-3">
                                                    <input type="text" class="form-control" id="url" name="url"
                                                        value="{{ $news->url }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
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

        CKEDITOR.replace('editor1', {
            toolbar: [{
                    name: 'document',
                    groups: ['mode', 'document', 'doctools'],
                    items: ['Source']
                },
                {
                    name: 'clipboard',
                    items: ['Undo', 'Redo', '-', 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord']
                },
                {
                    name: 'basicstyles',
                    groups: ['basicstyles', 'cleanup'],
                    items: ['Bold', 'Italic', 'Strike', '-', 'TextColor']
                },
                {
                    name: 'paragraph',
                    groups: ['list', 'indent', 'blocks', 'align'],
                    items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', 'Blocks']
                }
            ],
            height: 250,
            resize_enabled: true,
            wordcount: {
                showParagraphs: false,
                showWordCount: true,
                showCharCount: true,
                countSpacesAsChars: false,
                countHTML: false,
                maxWordCount: -1,
                maxCharCount: 20000
            }
        });

        function CKupdate() {
            for (instance in CKEDITOR.instances)
                CKEDITOR.instances[instance].updateElement();
        }

        CKEDITOR.replace('editor2', {
            toolbar: [{
                    name: 'document',
                    groups: ['mode', 'document', 'doctools'],
                    items: ['Source']
                },
                {
                    name: 'clipboard',
                    items: ['Undo', 'Redo', '-', 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord']
                },
                {
                    name: 'basicstyles',
                    groups: ['basicstyles', 'cleanup'],
                    items: ['Bold', 'Italic', 'Strike', '-', 'TextColor']
                },
                {
                    name: 'paragraph',
                    groups: ['list', 'indent', 'blocks', 'align'],
                    items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', 'Blocks']
                }
            ],
            height: 250,
            resize_enabled: true,
            wordcount: {
                showParagraphs: false,
                showWordCount: true,
                showCharCount: true,
                countSpacesAsChars: false,
                countHTML: false,
                maxWordCount: -1,
                maxCharCount: 20000
            }
        });

        function CKupdate() {
            for (instance in CKEDITOR.instances)
                CKEDITOR.instances[instance].updateElement();
        }

    </script>
    <script type="text/javascript">
        $("#id_news_release").change(function () {
            var x = document.getElementById("id_news_release").value;
            console.log(x);
            console.log(x);
            if (x == 3) {
                $('#hidden_one').show();
                $('#hidden_two').show();
                $('#hide_one').show();
            } else {
                $('#hidden_one').hide();
                $('#hidden_two').hide();
                $('#hide_one').hide();
            }
            if (x == 2) {
                $('#hidden_three').show();
                $('#hide_two').show();
            } else {
                $('#hidden_three').hide();
                $('#hide_two').hide();
            }
            if (x == 1) {
                $('#hidden_four').show();
                $('#hide_three').show();
            } else {
                $('#hidden_four').hide();
                $('#hide_three').hide();
            }
        });

    </script>
</body>

</html>
