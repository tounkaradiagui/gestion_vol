    <!-- Header Area Start -->
    <header class="peulis-header-area">
        <!-- Header Top Area Start -->
        <div class="header-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <div class="header-top-left">
                            <p>
                                <i class="fa fa-envelope"></i>
                                kingui.voyage@gmail.com
                            </p>
                            <p>
                                <i class="fa fa-phone"></i>
                                +223 76 29 22 70
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="header-top-right">
                            <div class="header-top-social">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            <div class="header-top-auth">
                                <ul>
                                    <li><i class="fa fa-user"></i></li>
                                    @guest
                                        @if (Route::has('login'))
                                            <li class="separator"><a href="{{ route('login') }}">Connexion</a></li>
                                        @endif

                                        @if (Route::has('register'))
                                            <li><a href="{{ route('register') }}">Inscription</a></li>
                                        @endif
                                    @else
                                        <li><a href="{{ route('home')}}">{{ Auth::user()->name }}</a></li>
                                        <li><a href="{{ route('home')}}" >Dashboard</a> </li>
                                    @endguest
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Top Area End -->

        <!-- Main Header Area Start -->
        <div class="main-header-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header_inn">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="site-logo">
                                        <a href="">
                                            <img src="{{asset('assets/images/logo.png')}}" alt="Peulis" />
                                        </a>
                                    </div>
                                    <!-- Responsive Menu Start -->
                                    <div class="peulis-responsive-menu"></div>
                                    <!-- Responsive Menu End -->
                                </div>
                                <div class="col-lg-7">
                                    <div class="mainmenu">
                                        <nav>
                                            <ul id="navigation_menu">
                                                <li class="active"><a href="">Accueil</a></li>
                                                <li ><a href="">Réservation</a></li>
                                                <li><a href="">Contact</a></li>
                                                <li ><a href="">A Propos</a></li>
                                                <!-- <li>
                                                    <a href="#">Pages</a>
                                                    <ul>
                                                        <li><a href="about.html">About Us</a></li>
                                                        <li><a href="guides.html">Meet our Guides</a></li>
                                                        <li><a href="gallery.html">Gallery</a></li>
                                                        <li><a href="faq.html">FAQ Page</a></li>
                                                        <li><a href="register.html">Register</a></li>
                                                        <li><a href="login.html">Login</a></li>
                                                        <li><a href="404.html">404 Notfound</a></li>
                                                    </ul>
                                                </li> -->
                                                <li>
                                                    <a href="#">Destinations</a>
                                                    <ul>
                                                        <li><a href="">New York</a></li>
                                                        <li><a href="">Toulouse</a></li>
                                                        <li><a href="">Kuwait</a></li>
                                                    </ul>
                                                </li>
                                                <!-- <li>
                                                    <a href="#">tours</a>
                                                    <ul>
                                                        <li><a href="tour-sidebar.html">Tour Sidebar</a></li>
                                                        <li><a href="tour-details.html">Tour Details</a></li>
                                                    </ul>
                                                </li> -->
                                                <!-- <li>
                                                    <a href="#">Blog</a>
                                                    <ul>
                                                        <li><a href="blog.html">Blog With Sidebar</a></li>
                                                        <li><a href="single-blog.html">Blog Details</a></li>
                                                    </ul>
                                                </li> -->
                                                <!-- <li>
                                                    <a href="#">Shop</a>
                                                    <ul>
                                                        <li><a href="product.html">Product</a></li>
                                                        <li><a href="single-product.html">Product Details</a></li>
                                                        <li><a href="cart.html">Shoping Cart</a></li>
                                                        <li><a href="checkout.html">Checkout</a></li>
                                                    </ul>
                                                </li> -->
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="header_action">
                                        <ul>
                                            <li class="header-search">
                                                <a href="#" class="search-btn">
                                                    <i class="fa fa-search"></i>
                                                </a>
                                                <div class="search-box search-elem">
                                                    <span class="search-close"></span>
                                                    <div class="inner row">
                                                        <form>
                                                            <input type="search" placeholder="Rechercher ici !...">
                                                            <button type="submit"><i class="fa fa-search"></i></button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="header_cart">
                                                <a href="#">
                                                    <span>0</span>
                                                    <i class="fa fa-shopping-bag"></i>
                                                </a>
                                                <div class="cart_box_hover">
                                                    <div class="single-cart">
                                                        <a class="product-remove" href="#">
                                                            <i class="fa fa-times"></i>
                                                        </a>
                                                        <div class="cart-pro-image">
                                                            <img src="{{asset('assets/images/C.jpg')}}" alt="cart" />
                                                        </div>
                                                        <div class="cart-pro-info">
                                                            <a href="#">
                                                                <h4>Tour package 1</h4>
                                                            </a>
                                                            <p>Tickets 2</p>
                                                            <h5>$1650.00</h5>
                                                        </div>
                                                    </div>
                                                    <div class="single-cart">
                                                        <a class="product-remove" href="#">
                                                            <i class="fa fa-times"></i>
                                                        </a>
                                                        <div class="cart-pro-image">
                                                            <img src="{{asset('assets/images/D.jpg')}}" alt="cart" />
                                                        </div>
                                                        <div class="cart-pro-info">
                                                            <a href="#">
                                                                <h4>Tour package 1</h4>
                                                            </a>
                                                            <p>Tickets 2</p>
                                                            <h5>$1650.00</h5>
                                                        </div>
                                                    </div>
                                                    <div class="single-cart subtotal">
                                                        <p>Subtotal :<span>$3300</span></p>
                                                    </div>
                                                    <div class="cart-action">
                                                        <a href="" class="viewcart">view cart</a>
                                                        <a href="" class="checkout-btn">Checkout</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li><a href="#" id="sidenav-toggle"><i class="fa fa-bars"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Header Area End -->
    </header>
    <!-- Header Area End -->