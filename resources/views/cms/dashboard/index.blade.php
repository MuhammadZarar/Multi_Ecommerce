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
            <!-- Container-fluid starts-->
            <div class="container-fluid dashboard-default-sec">
                <div class="row">
                    <div class="col-xl-12 box-col-12 des-xl-100">
                        <div class="row">
                            <div class="col-xl-12 recent-order-sec">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <h5>Recent Orders</h5>
                                            <table class="table table-bordernone">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Date</th>
                                                        <th>Quantity</th>
                                                        <th>Value</th>
                                                        <th>Rate</th>
                                                        <th>
                                                            <div class="setting-list">
                                                                <ul class="list-unstyled setting-option">
                                                                    <li>
                                                                        <div class="setting-primary"><i
                                                                                class="icon-settings"> </i></div>
                                                                    </li>
                                                                    <li><i
                                                                            class="view-html fa fa-code font-primary"></i>
                                                                    </li>
                                                                    <li><i
                                                                            class="icofont icofont-maximize full-card font-primary"></i>
                                                                    </li>
                                                                    <li><i
                                                                            class="icofont icofont-minus minimize-card font-primary"></i>
                                                                    </li>
                                                                    <li><i
                                                                            class="icofont icofont-refresh reload-card font-primary"></i>
                                                                    </li>
                                                                    <li><i
                                                                            class="icofont icofont-error close-card font-primary"></i>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="media"><img class="img-fluid rounded-circle"
                                                                    src="../assets/images/dashboard/product-1.png"
                                                                    alt="" data-original-title=""
                                                                    title="">
                                                                <div class="media-body"><a
                                                                        href="product-page.html"><span>Yellow New
                                                                            Nike shoes</span></a></div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <p>16 August</p>
                                                        </td>
                                                        <td>
                                                            <p>54146</p>
                                                        </td>
                                                        <td><img class="img-fluid"
                                                                src="../assets/images/dashboard/graph-1.png"
                                                                alt="" data-original-title="" title="">
                                                        </td>
                                                        <td>
                                                            <p>$210326</p>
                                                        </td>
                                                        <td>
                                                            <p>Done</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="media"><img class="img-fluid rounded-circle"
                                                                    src="../assets/images/dashboard/product-2.png"
                                                                    alt="" data-original-title=""
                                                                    title="">
                                                                <div class="media-body"><a
                                                                        href="product-page.html"><span>Sony Brand
                                                                            New Headphone</span></a></div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <p>2 October</p>
                                                        </td>
                                                        <td>
                                                            <p>32015</p>
                                                        </td>
                                                        <td><img class="img-fluid"
                                                                src="../assets/images/dashboard/graph-2.png"
                                                                alt="" data-original-title="" title="">
                                                        </td>
                                                        <td>
                                                            <p>$548526</p>
                                                        </td>
                                                        <td>
                                                            <p>Done</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="media"><img class="img-fluid rounded-circle"
                                                                    src="../assets/images/dashboard/product-3.png"
                                                                    alt="" data-original-title=""
                                                                    title="">
                                                                <div class="media-body"><a
                                                                        href="product-page.html"><span>Beautiful
                                                                            Golden Tree plant</span></a></div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <p>21 March</p>
                                                        </td>
                                                        <td>
                                                            <p>12548</p>
                                                        </td>
                                                        <td><img class="img-fluid"
                                                                src="../assets/images/dashboard/graph-3.png"
                                                                alt="" data-original-title="" title="">
                                                        </td>
                                                        <td>
                                                            <p>$589565</p>
                                                        </td>
                                                        <td>
                                                            <p>Done</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="media"><img class="img-fluid rounded-circle"
                                                                    src="../assets/images/dashboard/product-4.png"
                                                                    alt="" data-original-title=""
                                                                    title="">
                                                                <div class="media-body"><a
                                                                        href="product-page.html"><span>Marco M
                                                                            Kely Handbeg</span></a></div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <p>31 December</p>
                                                        </td>
                                                        <td>
                                                            <p>15495</p>
                                                        </td>
                                                        <td><img class="img-fluid"
                                                                src="../assets/images/dashboard/graph-4.png"
                                                                alt="" data-original-title="" title="">
                                                        </td>
                                                        <td>
                                                            <p>$125424 </p>
                                                        </td>
                                                        <td>
                                                            <p>Done</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="media"><img class="img-fluid rounded-circle"
                                                                    src="../assets/images/dashboard/product-5.png"
                                                                    alt="" data-original-title=""
                                                                    title="">
                                                                <div class="media-body"><a
                                                                        href="product-page.html"><span>Being Human
                                                                            Branded T-Shirt </span></a></div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <p>26 January</p>
                                                        </td>
                                                        <td>
                                                            <p>56625</p>
                                                        </td>
                                                        <td><img class="img-fluid"
                                                                src="../assets/images/dashboard/graph-5.png"
                                                                alt="" data-original-title="" title="">
                                                        </td>
                                                        <td>
                                                            <p>$112103</p>
                                                        </td>
                                                        <td>
                                                            <p>Done</p>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        @include('cms.layouts.footer')
