<!DOCTYPE html>
<html class="no-js" lang="en">

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- All CSS Files -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Nivo-slider css -->
    <link rel="stylesheet" href="lib/css/nivo-slider.css">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="css/core.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Template color css -->
    <link href="css/color/color-core.css" data-style="styles" rel="stylesheet">
    <!-- User style -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizr JS -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Body main wrapper start -->
    <div class="wrapper">

        <!-- START HEADER AREA -->
        <header class="header-area header-wrapper">
            <!-- header-top-bar -->
            <div class="header-top-bar plr-185">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-sm-6 col-xs-12">
                            <div class="top-link clearfix">
                                <ul class="link f-right">
                                    <li>
                                        <a href="my-account.html">
                                            <i class="zmdi zmdi-account"></i>
                                            My Account
                                        </a>
                                    </li>
                                    <li>
                                        <a href="wishlist.html">
                                            <i class="zmdi zmdi-favorite"></i>
                                            Wish List (0)
                                        </a>
                                    </li>
                                    @guest
                                    <li>
                                        <a href="{{route('login')}}">
                                            <i class="zmdi zmdi-lock"></i>
                                            Login
                                        </a>
                                    </li>
                                    @else
                                    <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                       {{ __('Logout') }}
                                        <i class="zmdi zmdi-lock"></i>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                       @csrf
                                   </form>
                                    </a>
                                  @endguest

                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-middle-area -->
            <div id="sticky-header" class="header-middle-area plr-185">
                <div class="container-fluid">
                    <div class="full-width-mega-dropdown">
                        <div class="row">
                            <!-- logo -->
                            <div class="col-md-2 col-sm-6 col-xs-12">
                                <div class="logo">
                                    <a href="/">
                                        <img src="img/logo/logo.jpg" alt="main logo">
                                    </a>
                                </div>
                            </div>
                            <!-- primary-menu -->
                            <div class="col-md-8 hidden-sm hidden-xs">
                                <nav id="primary-menu">
                                    <ul class="main-menu text-center">
                                        <li><a href="/">Home</a>

                                        </li>

                                        <li class="mega-parent"><a href="product">Products</a>
                                            <div class="mega-menu-area clearfix">
                                                <div class="mega-menu-link f-left">
                                                    <ul class="single-mega-item">
                                                        <li class="menu-title">Smart Phone</li>
                                                        <li>
                                                            <a href="#">All Mobile Phones</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Smart phones</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Android Mobiles</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Windows Mobiles</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Refurbished Mobiles</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">All Mobile Accessories</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Cases & Covers</a>
                                                        </li>
                                                    </ul>
                                                    <ul class="single-mega-item">
                                                        <li class="menu-title">Note Book</li>
                                                        <li>
                                                            <a href="">All Note Books</a>
                                                        </li>
                                                        <li>
                                                            <a href="">Smart notebooks</a>
                                                        </li>
                                                        <li>
                                                            <a href="">Android Note Book</a>
                                                        </li>
                                                        <li>
                                                            <a href="">Windows Note Books</a>
                                                        </li>
                                                        <li>
                                                            <a href="">Refurbished Note Books</a>
                                                        </li>
                                                        <li>
                                                            <a href="">Note Books Accessories</a>
                                                        </li>
                                                        <li>
                                                            <a href="">Cases & Covers</a>
                                                        </li>
                                                    </ul>
                                                    <ul class="single-mega-item">
                                                        <li class="menu-title">Tablets</li>
                                                        <li>
                                                            <a href="">All Tablets</a>
                                                        </li>
                                                        <li>
                                                            <a href="">Smart tablets</a>
                                                        </li>
                                                        <li>
                                                            <a href="">Android Tablets</a>
                                                        </li>
                                                        <li>
                                                            <a href="">Windows Tablets</a>
                                                        </li>
                                                        <li>
                                                            <a href="">Refurbished Tablets</a>
                                                        </li>
                                                        <li>
                                                            <a href="">Tablets Accessories</a>
                                                        </li>
                                                        <li>
                                                            <a href="">Cases & Covers</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="mega-menu-photo f-left">
                                                    <a href="#">
                                                        <img src="img/mega-menu/1.jpg" alt="mega menu image">
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mega-parent"><a href="#">deals</a>
                                          </li>



                                        <li>
                                            <a href="contact.html">Contact</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- header-search & total-cart -->
                            <div class="col-md-2 col-sm-6 col-xs-12">
                                <div class="search-top-cart  f-right">
                                    <!-- header-search -->
                                    <div class="header-search f-left">
                                        <div class="header-search-inner">
                                           <button class="search-toggle">
                                            <i class="zmdi zmdi-search"></i>
                                           </button>
                                            <form action="#">
                                                <div class="top-search-box">
                                                    <input type="text" placeholder="Search here your product...">
                                                    <button type="submit">
                                                        <i class="zmdi zmdi-search"></i>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- total-cart -->
                                    <div class="total-cart f-left">
                                        <div class="total-cart-in">
                                            <div class="cart-toggler">
                                                <a href="#">
                                                    <span class="cart-quantity">02</span><br>
                                                    <span class="cart-icon">
                                                        <i class="zmdi zmdi-shopping-cart-plus"></i>
                                                    </span>
                                                </a>
                                            </div>
                                            <ul>
                                                <li>
                                                    <div class="top-cart-inner your-cart">
                                                        <h5 class="text-capitalize">Your Cart</h5>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="total-cart-pro">
                                                        <!-- single-cart -->
                                                        <div class="single-cart clearfix">
                                                            <div class="cart-img f-left">
                                                                <a href="#">
                                                                    <img src="img/cart/1.jpg" alt="Cart Product" />
                                                                </a>
                                                                <div class="del-icon">
                                                                    <a href="#">
                                                                        <i class="zmdi zmdi-close"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="cart-info f-left">
                                                                <h6 class="text-capitalize">
                                                                    <a href="#">Dummy Product Name</a>
                                                                </h6>
                                                                <p>
                                                                    <span>Brand <strong>:</strong></span>Brand Name
                                                                </p>
                                                                <p>
                                                                    <span>Model <strong>:</strong></span>Grand s2
                                                                </p>
                                                                <p>
                                                                    <span>Color <strong>:</strong></span>Black, White
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!-- single-cart -->
                                                        <div class="single-cart clearfix">
                                                            <div class="cart-img f-left">
                                                                <a href="#">
                                                                    <img src="img/cart/1.jpg" alt="Cart Product" />
                                                                </a>
                                                                <div class="del-icon">
                                                                    <a href="#">
                                                                        <i class="zmdi zmdi-close"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="cart-info f-left">
                                                                <h6 class="text-capitalize">
                                                                    <a href="#">Dummy Product Name</a>
                                                                </h6>
                                                                <p>
                                                                    <span>Brand <strong>:</strong></span>Brand Name
                                                                </p>
                                                                <p>
                                                                    <span>Model <strong>:</strong></span>Grand s2
                                                                </p>
                                                                <p>
                                                                    <span>Color <strong>:</strong></span>Black, White
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="top-cart-inner subtotal">
                                                        <h4 class="text-uppercase g-font-2">
                                                            Total  =
                                                            <span>$ 500.00</span>
                                                        </h4>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="top-cart-inner view-cart">
                                                        <h4 class="text-uppercase">
                                                            <a href="cart.html">View cart</a>
                                                        </h4>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="top-cart-inner check-out">
                                                        <h4 class="text-uppercase">
                                                            <a href="checkout.html">Check out</a>
                                                        </h4>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- END HEADER AREA -->



        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
