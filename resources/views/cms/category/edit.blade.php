@include('cms.layouts.header')
<!-- Loader starts-->
<div class="loader-wrapper">
    <div class="theme-loader">
        <div class="loader-p"></div>
    </div>
</div>
<!-- Loader ends-->
<!-- page-wrapper Start       -->
<div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
    @include('cms.layouts.head')
    <!-- Page Header Ends                              -->
    <!-- Page Body Start-->
    <div class="page-body-wrapper sidebar-icon">
        <!-- Page Sidebar Start-->
        @include('cms.layouts.sidebar')
        <!-- Page Sidebar Ends-->
        <div class="page-body">
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-7 col-sm-6">
                            <h3>Category Edit</h3>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                                <li class="breadcrumb-item">Category </li>
                                <li class="breadcrumb-item active">Category Edit</li>
                            </ol>
                        </div>
                        <div class="col-5 col-sm-6 text-end">
                            <ul>
                                <li>
                                    <a class="btn btn-secondary me-3" href="{{ route('list_category') }}">Category
                                        List</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <form id="form_edit_category">
                                @csrf
                                <div class="card-header pb-0">
                                    <h5>Category Edit</h5>
                                    <hr>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="category_notify mb-2"></div>
                                    <div class="form theme-form">
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label>Name</label>
                                                    <input type="hidden" name="code" value="{{ $category->code }}">
                                                    <input name="category" id="category" class="form-control"
                                                        type="text" placeholder="Enter Category *"
                                                        value="{{ $category->category }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label>Slug</label>
                                                    <input name="slug" id="slug" class="form-control"
                                                        type="text" placeholder="Enter Slug"
                                                        value="{{ $category->slug }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="text-end">
                                                    <input class="btn btn-primary me-3" id="edit_category_btn"
                                                        type="submit" value="Submit">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer start-->
        @include('cms.layouts.footer')
        <script>
            $(document).ready(function() {
                $(document).on("submit", "#form_edit_category", function(e) {
                    e.preventDefault();
                    $("#edit_category_btn").prop('disabled', true);
                    var formData = new FormData(this);
                    var category = $("#category").val();
                    var slug = $("#slug").val();
                    if (category == '' || slug == '') {
                        $(".category_notify").html(`
                    <div class="alert alert-danger dark alert-dismissible fade show" role="alert"><strong>Message ! </strong> Required Fill all Field.
                        <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                `), setTimeout(function() {
                            $(".category_notify").html(``);
                            $("#edit_category_btn").prop('disabled', false);
                        }, 2000);
                    } else {
                        $.ajax({
                            url: `{{ route('update_category') }}`,
                            type: 'POST',
                            data: formData,
                            processData: false,
                            contentType: false,
                            success: function(response) {
                                if (response.status == "true") {
                                    $(".category_notify").html(
                                        `
                                <div class="alert alert-success dark alert-dismissible fade show" role="alert"><strong>Message ! </strong> ` +
                                        response.msg + `
                                    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div> 
                            `), setTimeout(function() {
                                        $("#edit_category_btn").prop('disabled', false);
                                        $(".category_notify").html(``);
                                        $("#form_add_category")[0].reset();
                                    }, 2000);
                                }
                                if (response.status == "false") {
                                    $(".category_notify").html(
                                        `
                                <div class="alert alert-danger dark alert-dismissible fade show" role="alert"><strong>Message ! </strong> ` +
                                        response.msg + `
                                    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>   
                            `);
                                    $("#edit_category_btn").prop('disabled', false);
                                }
                            }
                        });
                    }
                });
            });
        </script>
