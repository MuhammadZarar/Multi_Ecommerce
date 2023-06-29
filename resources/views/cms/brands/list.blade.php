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
                            <h3>Brand List</h3>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                                <li class="breadcrumb-item">Brand </li>
                                <li class="breadcrumb-item active">Brand List</li>
                            </ol>
                        </div>
                        <div class="col-5 col-sm-6 text-end">
                            <ul>
                                <li>
                                    <a class="btn btn-secondary me-3" href="{{ route('add_brand') }}">Brand
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
                                <h5>Brand List</h5>
                            </div>
                            <div class="table-responsive mx-3">
                                <table class="table table-bordered text-center">
                                    <thead class="bg-primary">
                                        <tr>
                                            <th scope="col" class="text-uppercase" width="5%">#</th>
                                            <th scope="col" class="text-uppercase">Brand</th>
                                            <th scope="col" class="text-uppercase">Slug</th>
                                            <th scope="col" class="text-uppercase">Status</th>
                                            <th scope="col" class="text-uppercase">Action</th>
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
            getBrand();

            function getBrand() {
                $.ajax({
                    url: `{{ route('get_brand') }}`,
                    type: 'get',
                    success: function(response) {
                        $('tbody').html(response);
                    }
                })
            }

            // $(document).on("click", ".delete-category", function(e) {
            //     e.preventDefault();
            //     var code = $(this).attr('data-id');
            //     $.ajax({
            //         url: '/category-delete/' + code,
            //         type: 'delete',
            //         cache: false,
            //         data: {
            //             _token: '{{ csrf_token() }}'
            //         },
            //         success: function(response) {
            //             if (response.status == "true") {
            //                 $(".category_notify").html(`
            //                         <div class="alert alert-primary alert-dismissible fade show" role="alert">
            //                             <strong>Message!</strong> ` + response.msg + `.
            //                             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            //                         </div>
            //                     `), setTimeout(function() {
            //                     $(".category_notify").html(``);
            //                     getCategory();
            //                 }, 2000);
            //             }
            //             if (response.status == "false") {
            //                 $(".category_notify").html(`
            //                         <div class="alert alert-danger alert-dismissible fade show" role="alert">
            //                             <strong>Message!</strong> ` + response.msg + `.
            //                             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            //                         </div>                                
            //                     `), setTimeout(function() {
            //                     $(".category_notify").html(``);
            //                     getCategory();
            //                 }, 2000);
            //             }
            //         }
            //     });
            // });
        </script>