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
                            <h3>Sub Category Create</h3>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                                <li class="breadcrumb-item">Sub Category </li>
                                <li class="breadcrumb-item active">Sub Category Create</li>
                            </ol>
                        </div>
                        <div class="col-5 col-sm-6 text-end">
                            <ul>
                                <li>
                                    <a class="btn btn-secondary me-3" href="{{ route('list_sub_category') }}">Sub
                                        Category
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
                            <form id="form_add_sub_category">
                                @csrf
                                <div class="card-header pb-0">
                                    <h5>Sub Category Add</h5>
                                    <hr>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="sub_category_notify mb-2"></div>
                                    <div class="form theme-form">
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label>Category</label>
                                                    <select class="form-select" name="category_id" id="category_id">
                                                        <option>Select Category</option>
                                                        @foreach ($categories as $category)
                                                            <option value="{{ $category->category_id }}">
                                                                {{ $category->category }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label>Name</label>
                                                    <input class="form-control" type="text" name="sub_category"
                                                        id="sub_category" placeholder="Enter Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label>Slug</label>
                                                    <input class="form-control" type="text" name="sub_slug"
                                                        id="sub_slug" placeholder="Enter Slug">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="text-end">
                                                    <input class="btn btn-primary me-3" type="submit"
                                                        id="add_sub_category_btn" value="Submit">
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
                $(document).on("submit", "#form_add_sub_category", function(e) {
                    e.preventDefault();
                    $("#add_sub_category_btn").prop('disabled', true);
                    var formData = new FormData(this);
                    var category_id = $("#category_id").val();
                    var sub_category = $("#sub_category").val();
                    var sub_slug = $("#sub_slug").val();
                    if (category_id == '' || sub_category == '' || sub_slug == "") {
                        $(".sub_category_notify").html(`
                            <div class="alert alert-danger dark alert-dismissible fade show" role="alert"><strong>Message ! </strong> Required Fill all Field.
                                <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        `), setTimeout(function() {
                            $(".sub_category_notify").html(``);
                            $("#add_sub_category_btn").prop('disabled', false);
                        }, 2000);
                    } else {
                        $.ajax({
                            url: `{{ route('store_sub_category') }}`,
                            type: 'POST',
                            data: formData,
                            processData: false,
                            contentType: false,
                            success: function(response) {
                                if (response.status == "true") {
                                    $(".sub_category_notify").html(
                                        `
                                        <div class="alert alert-success dark alert-dismissible fade show" role="alert"><strong>Message ! </strong> ` +
                                        response.msg + `
                                            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div> 
                                    `), setTimeout(function() {
                                        $("#add_sub_category_btn").prop('disabled', false);
                                        $(".sub_category_notify").html(``);
                                        $("#form_add_sub_category")[0].reset();
                                    }, 2000);
                                }
                                if (response.status == "false") {
                                    $(".sub_category_notify").html(
                                        `
                                        <div class="alert alert-danger dark alert-dismissible fade show" role="alert"><strong>Message ! </strong> ` +
                                        response.msg + `
                                            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>   
                                    `);
                                    $("#add_sub_category_btn").prop('disabled', false);
                                }
                            }
                        });
                    }
                });
            });
        </script>
