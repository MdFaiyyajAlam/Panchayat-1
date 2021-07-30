@extends('layouts.admin.app')

@section('main')
<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <div class="row">
            <div class="col-12 col-xl-8">
                <x-bootstrap.card>
                    <x-slot name="title">
                        <div>Bulk Post Upload</div>
                    </x-slot>
                    <x-slot name="subTitle">
                        <small>You can add your posts with a CSV file from this section</small>
                    </x-slot>
                    <x-slot name="controls">
                        <a href="{{ route('admin.post.view') }}" role="button" class="btn btn-primary btn-sm d-flex align-items-center">
                            <i class='bx bx-menu me-1'></i>
                            Posts
                        </a>
                    </x-slot>
                    <x-slot name="content">
                        <div class="mt-3 mb-2 fw-bold">Upload CSV File</div>
                        {{-- post bulk --}}
                        <div class="dm-uploader-container">
                            <div id="drag-and-drop-zone" class="dm-uploader dm-uploader-csv text-center">
                                <p class="dm-upload-icon">
                                    <i class="bx bx-cloud-upload"></i>
                                </p>
                                <p class="dm-upload-text">Drag and drop files here or</p>
                                <p class="text-center">
                                    <button class="btn btn-outline-secondary btn-sm btn-browse-files">Browse Files</button>
                                </p>
    
                                <a class='btn btn-md dm-btn-select-files'>
                                    <input type="file" name="file" size="40" multiple="multiple">
                                </a>
                                <ul class="dm-uploaded-files" id="files-file"></ul>
                                <button type="button" id="btn_reset_upload" class="btn btn-reset-upload">Reset</button>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="row">
                                <div id="csv_upload_spinner" class="csv-upload-spinner">
                                    <strong class="text-csv-importing">Importing posts...</strong>
                                    <strong class="text-csv-import-completed">Completed!</strong>
                                    <div class="spinner">
                                        <div class="bounce1"></div>
                                        <div class="bounce2"></div>
                                        <div class="bounce3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="csv-uploaded-files-container">
                                    <ul id="csv_uploaded_files" class="list-group csv-uploaded-files"></ul>
                                </div>
                            </div>
                        </div>
                    </x-slot>
                </x-bootstrap.card>
            </div>
            {{-- Help Documents --}}
            <div class="col-12 col-xl-4">
                <x-bootstrap.card>
                    <x-slot name="title">
                        <div>Help Documents</div>
                    </x-slot>
                    <x-slot name="subTitle">
                        <small>You can use these documents to generate your CSV file</small>
                    </x-slot>
                    <x-slot name="content">
                        <div class="form-group mt-3">
                            <form action="" method="post" accept-charset="utf-8">
                                @csrf        
                                <button type="button" class="btn btn-primary btn-sm w-100 my-2" data-bs-toggle="modal" data-bs-target="#modalCategoryIds">
                                    Category Ids list
                                </button>
                                <button class="btn btn-success btn-sm w-100 my-2" name="submit" value="csv_template">
                                    Download CSV Template
                                </button>
                                <button class="btn btn-success btn-sm w-100 my-2" name="submit" value="csv_example">
                                    Download CSV Example
                                </button>
                                <button type="button" class="btn btn-info btn-sm w-100 my-2" data-bs-toggle="modal" data-bs-target="#modalDocumentation">
                                    Documentation
                                </button>
                            </form>
                        </div>
                    </x-slot>
                </x-bootstrap.card>
            </div>
        </div>
    </div>
</div>

{{-- modal --}}
<div id="modalCategoryIds" class="modal fade" role="dialog">
    <div class="modal-dialog modal-md">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Category Ids list</h5>
                <button type="button" class="btn-close col-2 col-sm-4 col-xl-5 order-sm-3" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <strong style="display: block;border-bottom: 1px solid #eee;padding-bottom: 5px; margin-bottom: 10px; ">
                    Language: English&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Id = 1
                </strong>
                <p>Bihar Government Scheme: Id = 2</p>
                <p style="padding-left: 30px;">Exams: Id = 7</p>
                <p>Central Government scheme: Id = 3</p>
                <p>CORONA UPDATE: Id = 4</p>
            </div>
        </div>
    </div>
</div>

<div id="modalDocumentation" class="modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header" style="border-bottom: 0;">
                <h5 class="modal-title">Bulk Post Upload</h5>
                <button type="button" class="btn-close col-2 col-sm-4 col-xl-5 order-sm-3" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table table-bordered w-100">
                    <tr>
                        <th>Field</th>
                        <th>Description</th>
                    </tr>
                    <tr>
                        <td style="width: 180px;">lang_id</td>
                        <td>Data Type: Integer <br><strong>Required</strong> <br><span style="color: #777;">Example: 1</span></td>
                    </tr>
                    <tr>
                        <td style="width: 180px;">title</td>
                        <td>Data Type: String <br><strong>Required</strong><br><span style="color: #777;">Example: Test title</span></td>
                    </tr>
                    <tr>
                        <td style="width: 180px;">title_slug</td>
                        <td>Data Type: String <br><strong>Optional</strong> <small>(If you leave it blank, it will be generated automatically.)</small> <br> <span style="color: #777;">Example: test-title</span></td>
                    </tr>
                    <tr>
                        <td style="width: 180px;">keywords</td>
                        <td>Data Type: String <br><strong>Optional</strong> <br> <span style="color: #777;">Example: test, post</span></td>
                    </tr>
                    <tr>
                        <td style="width: 180px;">summary</td>
                        <td>Data Type: String <br><strong>Optional</strong><br> <span style="color: #777;">Example: This is summary</span></td>
                    </tr>
                    <tr>
                        <td style="width: 180px;">content</td>
                        <td>Data Type: String <br><strong>Optional</strong><br> <span style="color: #777;">Example: This is content</span></td>
                    </tr>
                    <tr>
                        <td style="width: 180px;">category_id</td>
                        <td>Data Type: Integer <br><strong>Required</strong><br> <span style="color: #777;">Example: 2</span></td>
                    </tr>
                    <tr>
                        <td style="width: 180px;">post_type</td>
                        <td>Data Type: String <br><strong>Required</strong><br><span style="color: #333;"><b>article</b> or <b>video</b></span></td>
                    </tr>
                    <tr>
                        <td style="width: 180px;">video_embed_code</td>
                        <td>Data Type: String<br><strong>Optional</strong> <br> <span style="color: #777;">Example: https://www.youtube.com/embed/V9ypxcc0TpI</span></td>
                    </tr>
                    <tr>
                        <td style="width: 180px;">status</td>
                        <td>Data Type: Boolean <br><strong>Required</strong><br> <span style="color: #333;"><b>1</b> or <b>0</b></span></td>
                    </tr>
                    <tr>
                        <td style="width: 180px;">image_url</td>
                        <td>Data Type: String <br><strong>Optional</strong><br> <span style="color: #777;">Example: https://upload.wikimedia.org/wikipedia/commons/7/70/Labrador-sea-paamiut.jpg</span></td>
                    </tr>
                    <tr>
                        <td style="width: 180px;">image_description</td>
                        <td>Data Type: String <br><strong>Optional</strong><br> <span style="color: #777;">Example: Labrador sea</span></td>
                    </tr>
                    <tr>
                        <td style="width: 180px;">tags</td>
                        <td>Data Type: String <br><strong>Optional</strong><br> <span style="color: #777;">Example: test, post</span></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection

@push('js')
<script>
    $(function () {
        $('#drag-and-drop-zone').dmUploader({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "{{route('admin.post.bulkPostUpload')}}",
            multiple: false,
            extFilter: ["csv"],
            extraData: function (id) {},
            onDragEnter: function () {
                this.addClass('active');
            },
            onDragLeave: function () {
                this.removeClass('active');
            },
            onNewFile: function (id, file) {
                $("#csv_upload_spinner").show();
                $("#csv_upload_spinner .spinner").show();
                $("#csv_upload_spinner .text-csv-importing").show();
                $("#csv_upload_spinner .text-csv-import-completed").hide();
                $("#csv_uploaded_files").empty();
            },
            onUploadSuccess: function (id, response) {
                var number_of_items = 0;
                var txt_file_name = "";
                try {
                    var obj = JSON.parse(response);
                    if (obj.result == 1) {
                        number_of_items = obj.number_of_items;
                        txt_file_name = obj.txt_file_name;
                        if (number_of_items > 0) {
                            add_csv_item(number_of_items, txt_file_name, 1);
                        } else {
                            $("#csv_upload_spinner").hide();
                        }
                    } else {
                        $("#csv_upload_spinner").hide();
                    }

                } catch (e) {
                    alert("Invalid CSV file! Make sure there are no double quotes in your content. Double quotes can brake the CSV structure.");
                }
            }
        });
    });

    function add_csv_item(number_of_items, txt_file_name, index) {
        if (index <= number_of_items) {
            var data = {
                "txt_file_name": txt_file_name,
                "index": index
            };
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                url: base_url + "post_controller/import_csv_item_post",
                data: data,
                success: function (response) {
                    var obj_sub = JSON.parse(response);
                    if (obj_sub.result == 1) {
                        $("#csv_uploaded_files").prepend('<li class="list-group-item list-group-item-success"><i class="fa fa-check"></i>&nbsp;' + obj_sub.index + '.&nbsp;' + obj_sub.title + '</li>');
                    } else {
                        $("#csv_uploaded_files").prepend('<li class="list-group-item list-group-item-danger"><i class="fa fa-times"></i>&nbsp;' + obj_sub.index + '.</li>');
                    }
                    if (obj_sub.index == number_of_items) {
                        $("#csv_upload_spinner .text-csv-importing").hide();
                        $("#csv_upload_spinner .spinner").hide();
                        $("#csv_upload_spinner .text-csv-import-completed").css('display', 'block');
                    }
                    index = index + 1;
                    add_csv_item(number_of_items, txt_file_name, index);
                }
            });
        }
    }
</script>
@endpush