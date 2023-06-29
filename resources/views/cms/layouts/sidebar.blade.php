<header class="main-nav">
    <div class="sidebar-user text-center"><a class="setting-primary" href="javascript:void(0)"><i
                data-feather="settings"></i></a><img class="img-90 rounded-circle" src="../assets/images/dashboard/1.png"
            alt="">
        <div class="badge-bottom"><span class="badge badge-primary">New</span></div><a href="user-profile.html">
            <h6 class="mt-3 f-14 f-w-600">{{ session()->get('name') }}</h6>
        </a>
        <p class="mb-0 font-roboto">Admin</p>
        <ul>
            <li><span><span class="counter">19.8</span>k</span>
                <p>Follow</p>
            </li>
            <li><span>2 year</span>
                <p>Experince</p>
            </li>
            <li><span><span class="counter">95.2</span>k</span>
                <p>Follower </p>
            </li>
        </ul>
    </div>
    <nav>
        <div class="main-navbar">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="mainnav">
                <ul class="nav-menu custom-scrollbar">
                    <li class="back-btn">
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                aria-hidden="true"></i></div>
                    </li>
                    <li><a class="nav-link menu-title link-nav" href="javascript:void(0)"><i
                                data-feather="home"></i><span>Dashboard</span></a></li>
                    <li><a class="nav-link menu-title link-nav" href="{{ route('list_category') }}"><i
                                data-feather="home"></i><span>Category</span></a></li>
                    <li><a class="nav-link menu-title link-nav" href="{{ route('list_sub_category') }}"><i
                                data-feather="home"></i><span>Sub Category</span></a></li>
                    <li><a class="nav-link menu-title link-nav" href="{{ route('list_brand') }}"><i
                                data-feather="home"></i><span>Brands</span></a></li>
                    <li><a class="nav-link menu-title link-nav" href="{{ route('list_product') }}"><i
                                data-feather="home"></i><span>Products</span></a></li>
                    {{-- <li><a class="nav-link menu-title link-nav" href="javascript:void(0)"><i
                                data-feather="home"></i><span>Shipping</span></a></li> --}}
                    <li><a class="nav-link menu-title link-nav" href="{{ route('list_order') }}"><i
                                data-feather="home"></i><span>Orders</span></a></li>
                    {{-- <li><a class="nav-link menu-title link-nav" href="javascript:void(0)"><i
                                data-feather="home"></i><span>Discount</span></a></li> --}}
                    <li><a class="nav-link menu-title link-nav" href="javascript:void(0)"><i
                                data-feather="home"></i><span>Customers</span></a></li>

                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</header>
