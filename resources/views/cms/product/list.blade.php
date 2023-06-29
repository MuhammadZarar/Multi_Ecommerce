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
                            <h3>Product List</h3>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                                <li class="breadcrumb-item">Product </li>
                                <li class="breadcrumb-item active">Product List</li>
                            </ol>
                        </div>
                        <div class="col-5 col-sm-6 text-end">
                            <ul>
                                <li>
                                    <a class="btn btn-secondary me-3" href="{{ route('add_product') }}">Product
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
                                <h5>Product List</h5>
                            </div>
                            <div class="table-responsive mx-3">
                                <table class="table table-bordered text-center">
                                    <thead class="bg-primary">
                                        <tr>
                                            <th scope="col" class="text-uppercase" width="5%">#</th>
                                            <th scope="col" class="text-uppercase">Product</th>
                                            <th scope="col" class="text-uppercase">Price</th>
                                            <th scope="col" class="text-uppercase">Qty</th>
                                            <th scope="col" class="text-uppercase" width="10%">Status</th>
                                            <th scope="col" class="text-uppercase" width="20%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row" width="5%">1</th>
                                            <td>Samsung</td>
                                            <td>Slug</td>
                                            <td>5</td>
                                            <td width="20%">
                                                <span class="text-success p-1 fw-bolder"
                                                    style="font-size: 15px;">Active</span>
                                                <span class="text-danger p-1 fw-bolder"
                                                    style="font-size: 15px;">De-Active</span>
                                            </td>
                                            <td width="20%">
                                                <button class="btn btn-outline-primary-2x" type="button">Edit</button>
                                                <button class="btn btn-outline-danger-2x" type="button">Delete</button>
                                            </td>
                                        </tr>
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
