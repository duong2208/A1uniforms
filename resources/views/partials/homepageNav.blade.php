<div class="agile-main-top">
    <div class="container">
        <div class="row main-top-w3l py-2">
            <div class="col-lg-3 col-sm-4 header-most-top">
                <p class="text-lg-left text-center">Welcome to our shop!</p>
            </div>
            <div class="col-lg-9 col-sm-8 header-right ml-auto text-sm-right text-center">
{{--                header list--}}
                <ul class="top-header-lists">
                    <li>
                        <a href="{{route('A1uniform.registerCustomer')}}" ><i class="fas fa-sign-out-alt mr-1"></i>
                        Register
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- header-bottom-->
<div class="header-bot my-md-4 my-3" id="site-header">
    <div class="container">
        <div class="row header-bot_inner_wthreeinfo_header_mid align-items-center">
            <!-- logo -->
            <div class="col-lg-3 col-md-4 logo_agile">
                <h1>
                    <a href="{{route('A1uniform.homepage')}}"><img src="{{asset('storage/images/logoprojectweb.png')}}" style="width: 55px; height: 55px" alt="">A1 Uniform</a>
                </h1>
            </div>
            <!-- //logo -->
            <!-- header-bot -->
            <div class="col-lg-9 col-md-8 header">
                <div class="row">
                    <!-- search -->
                    <div class="col-lg-9 col-sm-8 agileits_search">
                        <form class="form-inline" action="{{route('A1uniform.search')}}" method="post" style="max-width:600px;">
                            @csrf
                            <input class="form-control" type="text" name="search"
                                   placeholder="Search for products, brands and more" aria-label="Search">
                            <button class="btn" type="submit"><i class="fa fa-search"
                                                                 aria-hidden="true"></i></button>
                        </form>
                    </div>
                    <!-- //search -->
                    <!-- cart details -->
                    <div
                        class="col-lg-3 col-sm-4 top_nav_right text-center mt-sm-0 mt-2 d-flex align-items-center justify-content-between">
                        <div class="wthreecartaits wthreecartaits2 cart cart box_1">
                            <form action="#" method="post" class="last text-right">
                                @csrf
                                <input type="hidden" name="cmd" value="_cart">
                                <input type="hidden" name="display" value="1">
                                <button class="btn w3view-cart p-0" type="submit" name="submit" value="">
                                    <i class="fa-solid fa-cart-shopping"></i> Cart
                                </button>
                            </form>
                        </div>
                    </div>
                    <!-- //cart details -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- navigation -->
<div class="navbar-inner">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav text-center ml-auto">
                    <li class="nav-item active mr-lg-2 mb-lg-0 mb-2">
                        <a class="nav-link" href="{{route('A1uniform.homepage')}}">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            Categories
                        </a>
                        <div class="dropdown-menu">
                            <div class="agile_inner_drop_nav_info p-4">
                                <div class="row">
                                    <div class="col-sm-6 multi-gd-img">
                                        <ul class="multi-column-dropdown">
{{--                                            @foreach($categories as $cat)--}}
{{--                                            <li>--}}
{{--                                                <a class="dropdown-item" href="">{{$cat->cat_name}}</a>--}}
{{--                                                <div class="dropdown-divider"></div>--}}
{{--                                            </li>--}}
{{--                                            @endforeach--}}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item mr-lg-2 mb-lg-0 mb-2">
                        <a class="nav-link" href="">About Us</a>
                    </li>
                    <li class="nav-item mr-lg-2 mb-lg-0 mb-2">
                        <a class="nav-link" href="">All Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Contact Us</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<!-- //navigation -->






{{--<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary-custom" style="background-color: white">--}}
{{--    <div class="container">--}}
{{--        <a class="navbar-brand" href="{{route('A1uniform.homepage')}}">A-1 Uniform</a>--}}
{{--        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"--}}
{{--                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--            <span class="navbar-toggler-icon"></span>--}}
{{--        </button>--}}
{{--        <div class="collapse navbar-collapse" id="navbarCollapse">--}}
{{--            <ul class="navbar-nav mr-auto">--}}

{{--                Subnav Admin--}}
{{--                <li class="nav-item dropdown">--}}
{{--                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"--}}
{{--                       aria-haspopup="true" aria-expanded="false" >--}}
{{--                        Category--}}
{{--                    </a>--}}

{{--                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
{{--                        @foreach($categories as $cat)--}}
{{--                            <a class="dropdown-item" href="{{route('A1uniform.admin_manager')}}">{{$cat->cat_name}}</a>--}}
{{--                            <div class="dropdown-divider"></div>--}}
{{--                        @endforeach--}}
{{--                    </div>--}}
{{--                </li>--}}

{{--                Subnav Customer--}}
{{--                <li class="nav-item dropdown">--}}
{{--                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"--}}
{{--                       aria-haspopup="true" aria-expanded="false">--}}
{{--                        About us--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
{{--                        <a class="dropdown-item" href="{{route('A1uniform.customer_manager')}}">Customer manager</a>--}}
{{--                    </div>--}}
{{--                </li>--}}

{{--                Subnav Category--}}
{{--                <li class="nav-item dropdown">--}}
{{--                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"--}}
{{--                       aria-haspopup="true" aria-expanded="false">--}}
{{--                        Contact us--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
{{--                        <a class="dropdown-item" href="">Category manager</a>--}}
{{--                        <div class="dropdown-divider"></div>--}}
{{--                        <a class="dropdown-item" href="">New Category</a>--}}
{{--                    </div>--}}
{{--                </li>--}}

{{--                Subnav Uniform--}}
{{--                <li class="nav-item dropdown">--}}
{{--                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"--}}
{{--                       aria-haspopup="true" aria-expanded="false">--}}
{{--                        Uniform--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
{{--                        <a class="dropdown-item" href="">Uniform manager</a>--}}
{{--                        <div class="dropdown-divider"></div>--}}
{{--                        <a class="dropdown-item" href="">New Uniform</a>--}}
{{--                    </div>--}}
{{--                </li>--}}

{{--            </ul>--}}

{{--            <form action="{{route('A1uniform.search')}}" method="post" class="form-inline my-2 my-lg-0">--}}
{{--                @csrf--}}
{{--                <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search">--}}
{{--                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</nav>--}}





{{-- code Nav cua Duc--}}

{{--<nav class="navbar navbar-light bg-secondary fixed-top" style="background-color: #104E8B">--}}
{{--    <div class="container-fluid ">--}}
{{--        <div>--}}
{{--            <a class="navbar-brand" href="#"--}}
{{--               href="{{route('A1uniform.homepage')}}">--}}
{{--                <br>--}}
{{--                <span><i class="fa fa-phone" ></i></span>--}}
{{--                <span>Hotline: 0987654321</span>--}}
{{--            </a>--}}

{{--            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--}}
{{--            <img src="{{asset('images/logo_A1.png')}}" alt="" style="width: 70px">--}}

{{--        </div>--}}
{{--        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--}}
{{--        <nav class="navbar navbar-dark default-color">--}}
{{--            <form class="form-inline my-2 my-lg-0 ml-auto">--}}
{{--                <input class="form-control" type="search" placeholder="Search for something ?" aria-label="Search">--}}
{{--                <button class="btn btn-outline-light btn-md my-2 my-sm-0 ml-3" type="submit">Search</button>--}}
{{--            </form>--}}
{{--        </nav>--}}
{{--        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"--}}
{{--                aria-controls="offcanvasNavbar">--}}
{{--            <span class="navbar-toggler-icon" ></span>--}}
{{--        </button>--}}
{{--        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">--}}
{{--            <div class="offcanvas-header">--}}
{{--                <h3 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h3>--}}
{{--                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>--}}
{{--            </div>--}}
{{--            <li class="dropdown-divider"></li>--}}


{{--            <div class="offcanvas-body">--}}
{{--                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">--}}
{{--                    <li class="nav-item">--}}
{{--                        <h5 class="nav-link active" aria-current="page" href="#">Home</h5>--}}
{{--                    </li>--}}

{{--                    <li class="nav-item dropdown">--}}
{{--                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"--}}
{{--                           aria-haspopup="true" aria-expanded="false" style="color: black"><h5>--}}
{{--                                Categories</h5>--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
{{--                            <a class="dropdown-item" href="{{route('A1uniform.homepage')}}">Shirts</a>--}}
{{--                            <a class="dropdown-item" href="{{route('A1uniform.homepage')}}">T-Shirts</a>--}}
{{--                            <a class="dropdown-item" href="{{route('A1uniform.homepage')}}">Hoodies</a>--}}
{{--                            <a class="dropdown-item" href="{{route('A1uniform.homepage')}}">Bombers</a>--}}
{{--                            <a class="dropdown-item" href="{{route('A1uniform.homepage')}}">Pants</a>--}}
{{--                            <a class="dropdown-item" href="{{route('A1uniform.homepage')}}">Shoes</a>--}}
{{--                            <div class="dropdown-divider"></div>--}}
{{--                            <a class="dropdown-item" href="{{route('A1uniform.homepage')}}">All uniform</a>--}}
{{--                        </div>--}}
{{--                    </li>--}}

{{--                    <h5  class="nav-link active" aria-current="page" href="#">About us</h5>--}}
{{--                    <h5  class="nav-link active" aria-current="page" href="#" style="color: blue">Register</h5>--}}

{{--                </ul>--}}

{{--                <br><br>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</nav>--}}
