<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary-custom" style="background-color: #104E8B">
    <div class="container">
        <a class="navbar-brand" href="{{route('A1uniform.index')}}">A-1 Uniform</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">

                {{--Subnav Admin--}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false" >
                        Admin
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route('A1uniform.admin_manager')}}">Admin manager</a>
                    </div>
                </li>

                {{--Subnav Customer--}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Customer
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route('A1uniform.customer_manager')}}">Customer manager</a>
                    </div>
                </li>

                {{--Subnav Category--}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Category
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route('A1uniform.category_manager')}}">Category manager</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{route('A1uniform.createCategory')}}">New Category</a>
                    </div>
                </li>

                {{--Subnav Uniform--}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Uniform
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route('A1uniform.uniform_manager')}}">Uniform manager</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{route('A1uniform.createUniform')}}">New Uniform</a>
                    </div>
                </li>

            </ul>

            <ul class="navbar-nav">
                <li class="nav-item mr-3">
                    <a class="nav-link" href="#">
                        <i class="fa-solid fa-user"></i>
                        {{\Illuminate\Support\Facades\Session::has('ad_user')?
                          \Illuminate\Support\Facades\Session::get('ad_user') : ''}}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('auth.signout')}}">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        Log Out
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
