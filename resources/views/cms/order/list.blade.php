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
                            <h3>Order List</h3>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                                <li class="breadcrumb-item">Order </li>
                                <li class="breadcrumb-item active">Order List</li>
                            </ol>
                        </div>
                        {{-- <div class="col-5 col-sm-6 text-end">
                            <ul>
                                <li>
                                    <a class="btn btn-secondary me-3" href="{{ route('add_category') }}">Order
                                        Add</a>
                                </li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Order List</h5>
                            </div>
                            <div class="table-responsive mx-3">
                                <table class="table table-bordered text-center">
                                    <thead class="bg-primary">
                                        <tr>
                                            <th scope="col" class="text-uppercase">Orders</th>
                                            <th scope="col" class="text-uppercase">Customer</th>
                                            <th scope="col" class="text-uppercase">Email</th>
                                            <th scope="col" class="text-uppercase">Phone</th>
                                            <th scope="col" class="text-uppercase">Status</th>
                                            <th scope="col" class="text-uppercase">Total</th>
                                            <th scope="col" class="text-uppercase">Date Purchased</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row" width="5%">OR76532</th>
                                            <td>Muhammad Zarar</td>
                                            <td>muhammadzarar2k17@gmail.com</td>
                                            <td>03142839674</td>
                                            <td width="20%">
                                                <span class="text-success p-1 fw-bolder"
                                                    style="font-size: 15px;">Active</span>
                                                <span class="text-danger p-1 fw-bolder"
                                                    style="font-size: 15px;">De-Active</span>
                                            </td>
                                            <td>$400</td>
                                            <td>10-06-2024</td>
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
