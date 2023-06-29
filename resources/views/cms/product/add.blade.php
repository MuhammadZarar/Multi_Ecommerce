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
                            <h3>Product Create</h3>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                                <li class="breadcrumb-item">Product </li>
                                <li class="breadcrumb-item active">Product Create</li>
                            </ol>
                        </div>
                        <div class="col-5 col-sm-6 text-end">
                            <ul>
                                <li>
                                    <a class="btn btn-secondary me-3" href="{{ route('list_product') }}">Product
                                        List</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="form theme-form">
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label>Title</label>
                                                <input class="form-control" type="text"
                                                    placeholder="Enter Product *">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label>Description</label>
                                                <textarea name="" class="form-control" id="" cols="30" rows="12"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label>Image</label>
                                                <input class="form-control" type="file">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="form theme-form">
                                    <h4 class="pb-2">Pricing</h4>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label>Qty</label>
                                                <input class="form-control" type="text"
                                                    placeholder="Enter Quantity *">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label>Price</label>
                                                <input class="form-control" type="text" placeholder="Enter Price *">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label>Compare at Price</label>
                                                <input class="form-control" type="text"
                                                    placeholder="Enter Compare Price *">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="text-end">
                                                <a class="btn btn-primary me-3" href="#">Submit</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="pb-2">Product Status</h5>
                                <div class="form theme-form">
                                    <select class="form-select">
                                        <option>Small</option>
                                        <option>Medium</option>
                                        <option>Big</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="pb-2">Product Category</h5>
                                <div class="form theme-form mb-2">
                                    <label>Category</label>
                                    <select class="form-select">
                                        <option>Small</option>
                                        <option>Medium</option>
                                        <option>Big</option>
                                    </select>
                                </div>
                                <div class="form theme-form">
                                    <label>Sub Category</label>
                                    <select class="form-select">
                                        <option>Small</option>
                                        <option>Medium</option>
                                        <option>Big</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="pb-2">Product Brand</h5>
                                <div class="form theme-form">
                                    <select class="form-select">
                                        <option>Small</option>
                                        <option>Medium</option>
                                        <option>Big</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="pb-2">Featured Product</h5>
                                <div class="form theme-form">
                                    <select class="form-select">
                                        <option>Small</option>
                                        <option>Medium</option>
                                        <option>Big</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer start-->
        @include('cms.layouts.footer')
