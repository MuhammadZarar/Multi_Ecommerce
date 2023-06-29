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
                            <h3>Sub Category List</h3>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                                <li class="breadcrumb-item">Sub Category </li>
                                <li class="breadcrumb-item active">Sub Category List</li>
                            </ol>
                        </div>
                        <div class="col-5 col-sm-6 text-end">
                            <ul>
                                <li>
                                    <a class="btn btn-secondary me-3" href="{{ route('add_sub_category') }}">Sub Category
                                        Add</a>
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
                            <div class="card-header">
                                <h5>Sub Category List</h5>
                            </div>
                            <div class="table-responsive mx-3">
                                <div class="sub_category_notify"></div>
                                <table class="table table-bordered text-center">
                                    <thead class="bg-primary">
                                        <tr>
                                            <th scope="col" class="text-uppercase" width="5%">#</th>
                                            <th scope="col" class="text-uppercase">Category</th>
                                            <th scope="col" class="text-uppercase">Sub Category</th>
                                            <th scope="col" class="text-uppercase">Slug</th>
                                            <th scope="col" class="text-uppercase">Created At</th>
                                            <th scope="col" class="text-uppercase" width="10%">Status</th>
                                            <th scope="col" class="text-uppercase" width="20%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer start-->
        @include('cms.layouts.footer')
        <script>
            getSubCategory();

            function getSubCategory() {
                $.ajax({
                    url: `{{ route('get_sub_category') }}`,
                    type: 'get',
                    success: function(response) {
                        $('tbody').html(response);
                    }
                })
            }

            $(document).on("click", ".delete-sub-category", function(e) {
                e.preventDefault();
                var code = $(this).attr('data-id');
                $.ajax({
                    url: '/sub-category-delete/' + code,
                    type: 'delete',
                    cache: false,
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.status == "true") {
                            $(".sub_category_notify").html(`
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong>Message!</strong> ` + response.msg + `.
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                `), setTimeout(function() {
                                $(".sub_category_notify").html(``);
                                getSubCategory();
                            }, 2000);
                        }
                        if (response.status == "false") {
                            $(".sub_category_notify").html(`
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong>Message!</strong> ` + response.msg + `.
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>                                
                                `), setTimeout(function() {
                                $(".sub_category_notify").html(``);
                                getSubCategory();
                            }, 2000);
                        }
                    }
                });
            });
        </script>