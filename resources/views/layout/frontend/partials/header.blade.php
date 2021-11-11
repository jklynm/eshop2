<header class="site-header header-opt-1 cate-show">
    <!-- header-top -->
    <div class="header-top">
        <div class="container">
            <!-- nav-left -->
            <ul class="nav-left" >
                <li ><span><i class="fa fa-phone" aria-hidden="true"></i>{{$configration->phone}}</span></li>
                <li ><span><i class="fa fa-envelope" aria-hidden="true"></i> {{$configration->email}}</span></li>
            </ul><!-- nav-left -->
            <!-- nav-right -->
            <ul class=" nav-right">
                <li class="dropdown setting">
                    <a data-toggle="dropdown" role="button" href="#" class="dropdown-toggle "><span>My Account</span> <i aria-hidden="true" class="fa fa-angle-down"></i></a>
                    <div class="dropdown-menu  ">
                        <ul class="account">
                            <li><a href="">Wishlist</a></li>
                            <li><a href="">My Account</a></li>
                            <li><a href="">Checkout</a></li>
                            <li><a href="">Compare</a></li>
                            @if(!Auth::check())
                            <li><a href="{{route('loginCustomer')}}">Login/Register</a></li>
                            @else
                            <li><a href="{{route('customer.logout')}}">Logout</a></li>
                            @endif
                        </ul>
                    </div>
                </li>
                <li><a href="" >Services</a></li>
                <li><a href="{{route('contact.getform')}}">Contact </a></li>
            </ul><!-- nav-right -->
        </div>
    </div><!-- header-top -->
    <!-- header-content -->
    <div class="header-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3 nav-left">
                    <!-- logo -->
                    <strong class="logo">
                        <a href="{{route('frontend.index')}}"><img src="{{asset('frontend/images/logo.png')}}" alt=""></a>
                    </strong>
                </div>
                <div class="nav-right">
                    <!-- block mini cart -->
                    <div class="block-minicart dropdown">
                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                            <span class="cart-icon"></span>
                            <span class="counter qty">
                                        <span class="cart-text">Shopping Cart</span>
                                        <span class="counter-number">6</span>
                                        <span class="counter-label">6 <span>Items</span></span>
                                        <span class="counter-price">$75.00</span>
                                    </span>
                        </a>
                        <div class="dropdown-menu">
                            <form>
                                <div  class="minicart-content-wrapper" >
                                    <div class="subtitle">
                                        You have 6 item(s) in your cart
                                    </div>
                                    <div class="minicart-items-wrapper">
                                        <ol class="minicart-items">
                                            <li class="product-item">
                                                <a class="product-item-photo" href="#" title="The Name Product">
                                                    <img class="product-image-photo" src="{{asset('frontend/images/media/index1/minicart.jpg')}}" alt="The Name Product">
                                                </a>
                                                <div class="product-item-details">
                                                    <strong class="product-item-name">
                                                        <a href="#">Donec Ac Tempus</a>
                                                    </strong>
                                                    <div class="product-item-price">
                                                        <span class="price">61,19 €</span>
                                                    </div>
                                                    <div class="product-item-qty">
                                                        <span class="label">Qty: </span ><span class="number">1</span>
                                                    </div>
                                                    <div class="product-item-actions">
                                                        <a class="action delete" href="#" title="Remove item">
                                                            <span>Remove</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="product-item">
                                                <a class="product-item-photo" href="#" title="The Name Product">
                                                    <img class="product-image-photo" src="{{asset('frontend/images/media/index1/minicart2.jpg')}}" alt="The Name Product">
                                                </a>
                                                <div class="product-item-details">
                                                    <strong class="product-item-name">
                                                        <a href="#">Donec Ac Tempus</a>
                                                    </strong>
                                                    <div class="product-item-price">
                                                        <span class="price">61,19 €</span>
                                                    </div>
                                                    <div class="product-item-qty">
                                                        <span class="label">Qty: </span ><span class="number">1</span>
                                                    </div>
                                                    <div class="product-item-actions">
                                                        <a class="action delete" href="#" title="Remove item">
                                                            <span>Remove</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ol>
                                    </div>
                                    <div class="subtotal">
                                        <span class="label">Total</span>
                                        <span class="price">$630</span>
                                    </div>
                                    <div class="actions">
                                        <!-- <a class="btn btn-viewcart" href="">
                                                <span>Shopping bag</span>
                                            </a> -->
                                        <button class="btn btn-checkout" type="button" title="Check Out">
                                            <span>Checkout</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="nav-mind">
                    <!-- block search -->
                    <div class="block-search">
                        <div class="block-title">
                            <span>Search</span>
                        </div>
                        <div class="block-content">
                            <div class="categori-search  ">
                                <select data-placeholder="All Categories" class="categori-search-option">
                                    @foreach ($categories as $category)
                                    <option>{{$category->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-search">
                                <form>
                                    <div class="box-group">
                                        <input type="text" class="form-control" placeholder="i'm Searching for...">
                                        <button class="btn btn-search" type="button"><span>search</span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- header-content -->
    <!-- header-nav -->
    <div class="header-nav mid-header">
        <div class="container">
            <div class="box-header-nav">
                <!-- btn categori mobile -->
                <span data-action="toggle-nav-cat" class="nav-toggle-menu nav-toggle-cat"><span>Categories</span></span>
                <!-- btn menu mobile -->
                <span data-action="toggle-nav" class="nav-toggle-menu"><span>Menu</span></span>
                <!--categori  -->
                <div class="block-nav-categori">
                    <div class="block-title">
                        <span>Categories</span>
                    </div>
                    <div class="block-content">
                        <div class="clearfix"><span data-action="close-cat" class="close-cate"><span>Categories</span></span></div>
                        <ul class="ui-categori">
                            @foreach ($categories as $category)
                                <li class="parent">
                                    <a href="">
                                        <span class="icon"><img src="{{asset('frontend/images/icon/index1/nav-cat1.png')}}" alt="nav-cat"></span>
                                        {{$category->title}}
                                    </a>
                                </li>
                            @endforeach
                            <li class="parent">
                                <a href="">
                                    <span class="icon"><img src="{{asset('frontend/images/icon/index1/nav-cat2.png')}}" alt="nav-cat"></span>
                                    Sports & Outdoors
                                </a>
                                <span class="toggle-submenu"></span>
                                <div class="submenu">
                                    <ul class="categori-list">
                                        <li class="col-sm-3">
                                            <strong class="title"><a href="">Smartphone</a></strong>
                                            <ul>
                                                <li><a href="">Skirts    </a></li>
                                                <li><a href="">Jackets</a></li>
                                                <li><a href="">Jumpusuits</a></li>
                                                <li><a href="">Scarvest</a></li>
                                                <li><a href="">T-Shirts</a></li>
                                            </ul>
                                        </li>
                                        <li class="col-sm-3">
                                            <strong class="title"><a href="">TElevision</a></strong>
                                            <ul>
                                                <li><a href="">Skirts    </a></li>
                                                <li><a href="">Jackets</a></li>
                                                <li><a href="">Jumpusuits</a></li>
                                                <li><a href="">Scarvest</a></li>
                                                <li><a href="">T-Shirts</a></li>
                                            </ul>
                                        </li>
                                        <li class="col-sm-3">
                                            <strong class="title"><a href="">Camera</a></strong>
                                            <ul>
                                                <li><a href="">Skirts    </a></li>
                                                <li><a href="">Jackets</a></li>
                                                <li><a href="">Jumpusuits</a></li>
                                                <li><a href="">Scarvest</a></li>
                                                <li><a href="">T-Shirts</a></li>
                                            </ul>
                                        </li>
                                        <li class="col-sm-3">
                                            <strong class="title"><a href="">washing machine</a></strong>
                                            <ul>
                                                <li><a href="">Skirts    </a></li>
                                                <li><a href="">Jackets</a></li>
                                                <li><a href="">Jumpusuits</a></li>
                                                <li><a href="">Scarvest</a></li>
                                                <li><a href="">T-Shirts</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="">
                                <a href="">
                                    <span class="icon"><img src="{{asset('frontend/images/icon/index1/nav-cat3.png')}}" alt="nav-cat"></span>
                                    Smartphone & Tablets
                                </a>
                                <span class="toggle-submenu"></span>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon"><img src="{{asset('frontend/images/icon/index1/nav-cat4.png')}}" alt="nav-cat"></span>
                                    Health & Beauty
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon"><img src="{{asset('frontend/images/icon/index1/nav-cat5.png')}}" alt="nav-cat"></span>
                                    Bags, Shoes & Accessories
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon"><img src="{{asset('frontend/images/icon/index1/nav-cat6.png')}}" alt="nav-cat"></span>
                                    Toys & Hobbies
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon"><img src="{{asset('frontend/images/icon/index1/nav-cat7.png')}}" alt="nav-cat"></span>
                                    Computers & Networking
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon"><img src="{{asset('frontend/images/icon/index1/nav-cat8.png')}}" alt="nav-cat"></span>
                                    Laptops & Accessories
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon"><img src="{{asset('frontend/images/icon/index1/nav-cat9.png')}}" alt="nav-cat"></span>
                                    Jewelry & Watches
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon"><img src="{{asset('frontend/images/icon/index1/nav-cat10.png')}}" alt="nav-cat"></span>
                                    Flashlights & Lamps
                                </a>
                            </li>
                            <li class="cat-link-orther">
                                <a href="">
                                    <span class="icon"><img src="{{asset('frontend/images/icon/index1/nav-cat10.png')}}" alt="nav-cat"></span>
                                    Flashlights & Lamps
                                </a>
                            </li>
                            <li class="cat-link-orther">
                                <a href="">
                                    <span class="icon"><img src="{{asset('frontend/images/icon/index1/nav-cat9.png')}}" alt="nav-cat"></span>
                                    Cameras & Photo
                                </a>
                            </li>
                            <li class="cat-link-orther">
                                <a href="">
                                    <span class="icon"><img src="{{asset('frontend/images/icon/index1/nav-cat10.png')}}" alt="nav-cat"></span>
                                    Flashlights & Lamps
                                </a>
                            </li>
                            <li class="cat-link-orther">
                                <a href="">
                                    <span class="icon"><img src="{{asset('frontend/images/icon/index1/nav-cat9.png')}}" alt="nav-cat"></span>
                                    Cameras & Photo
                                </a>
                            </li>
                        </ul>
                        <div class="view-all-categori">
                            <a  class="open-cate btn-view-all">All Categories</a>
                        </div>
                    </div>
                </div><!--categori  -->
                <!-- menu -->
                <div class="block-nav-menu">
                    <div class="clearfix"><span data-action="close-nav" class="close-nav"><span>close</span></span></div>

                    <ul class="ui-menu">
                        <li class="active"><a >Home</a></li>
                        <li><a href="about.html">ABOUT</a></li>
                        <li class="parent parent-submenu">
                            <a > Fashion  </a>
                            <span class="toggle-submenu"></span>
                            <div class="submenu drop-menu">
                                <ul >
                                    <li><a href="">Shoes</a></li>
                                    <li><a href="">Clothing</a></li>
                                    <li><a href="">Accessories</a></li>
                                    <li><a href="">Sunglasses</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="parent parent-megamenu">
                            <a >products  <span class="label-menu">New</span></a>
                            <span class="toggle-submenu"></span>
                            <div class="megamenu drop-menu">
                                <ul>
                                    <li class="col-md-3">
                                        <strong class="title"><a href=""><span>Women's </span></a></strong>
                                        <ul class="list-submenu">
                                            <li><a href="">Shoes</a></li>
                                            <li><a href="">Clothing</a></li>
                                            <li><a href="">Accessories</a></li>
                                            <li><a href="">Sunglasses</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-md-3">
                                        <strong class="title"><a href=""><span>Women's </span></a></strong>
                                        <ul class="list-submenu">
                                            <li><a href="">Shoes</a></li>
                                            <li><a href="">Clothing</a></li>
                                            <li><a href="">Accessories</a></li>
                                            <li><a href="">Sunglasses</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-md-3">
                                        <strong class="title"><a href=""> <span>Kid's</span></a></strong>
                                        <ul class="list-submenu">
                                            <li><a href="">Shoes</a></li>
                                            <li><a href="">Clothing</a></li>
                                            <li><a href="">Accessories</a></li>
                                            <li><a href="">Sunglasses</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-md-3">
                                        <strong class="title"><a href=""><span>Trending</span> </a></strong>
                                        <ul class="list-submenu">
                                            <li><a href="">Shoes</a></li>
                                            <li><a href="">Clothing</a></li>
                                            <li><a href="">Accessories</a></li>
                                            <li><a href="">Sunglasses</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="shop.html">Category </a></li>
                        <li><a href="compare.html">compare</a></li>
                        <li><a href="single.html">single</a></li>
                        <li><a href="{{route('contact.getform')}}"> contact </a></li>
                    </ul>
                </div><!-- menu -->
                <!-- mini cart -->
                <div class="block-minicart dropdown ">
                    <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                        <span class="cart-icon"></span>
                    </a>
                    <div class="dropdown-menu">
                        <form>
                            <div  class="minicart-content-wrapper" >
                                <div class="subtitle">
                                    You have 6 item(s) in your cart
                                </div>
                                <div class="minicart-items-wrapper">
                                    <ol class="minicart-items">
                                        <li class="product-item">
                                            <a class="product-item-photo" href="#" title="The Name Product">
                                                <img class="product-image-photo" src="{{asset('frontend/images/media/index1/minicart.jpg')}}" alt="The Name Product">
                                            </a>
                                            <div class="product-item-details">
                                                <strong class="product-item-name">
                                                    <a href="#">Donec Ac Tempus</a>
                                                </strong>
                                                <div class="product-item-price">
                                                    <span class="price">61,19 €</span>
                                                </div>
                                                <div class="product-item-qty">
                                                    <span class="label">Qty: </span ><span class="number">1</span>
                                                </div>
                                                <div class="product-item-actions">
                                                    <a class="action delete" href="#" title="Remove item">
                                                        <span>Remove</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product-item">
                                            <a class="product-item-photo" href="#" title="The Name Product">
                                                <img class="product-image-photo" src="{{asset('frontend/images/media/index1/minicart2.jpg')}}" alt="The Name Product">
                                            </a>
                                            <div class="product-item-details">
                                                <strong class="product-item-name">
                                                    <a href="#">Donec Ac Tempus</a>
                                                </strong>
                                                <div class="product-item-price">
                                                    <span class="price">61,19 €</span>
                                                </div>
                                                <div class="product-item-qty">
                                                    <span class="label">Qty: </span ><span class="number">1</span>
                                                </div>
                                                <div class="product-item-actions">
                                                    <a class="action delete" href="#" title="Remove item">
                                                        <span>Remove</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    </ol>
                                </div>
                                <div class="subtotal">
                                    <span class="label">Total</span>
                                    <span class="price">$630</span>
                                </div>
                                <div class="actions">
                                    <!-- <a class="btn btn-viewcart" href="">
                                            <span>Shopping bag</span>
                                        </a> -->
                                    <button class="btn btn-checkout" type="button" title="Check Out">
                                        <span>Checkout</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- search -->
                <div class="block-search">
                    <div class="block-title">
                        <span>Search</span>
                    </div>
                    <div class="block-content">
                        <div class="form-search">
                            <form>
                                <div class="box-group">
                                    <input type="text" class="form-control" placeholder="i'm Searching for...">
                                    <button class="btn btn-search" type="button"><span>search</span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div><!-- search -->
                <!--setting  -->
                <div class="dropdown setting">
                    <a data-toggle="dropdown" role="button" href="#" class="dropdown-toggle "><span>Settings</span> <i aria-hidden="true" class="fa fa-user"></i></a>
                    <div class="dropdown-menu  ">
                        <div class="switcher  switcher-currency">
                            <strong class="title">SELECT CURRENCIES</strong>
                            <ul class="switcher-options ">
                                <li class="switcher-option">
                                    <a href="#">
                                        <i class="fa fa-usd" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li class="switcher-option switcher-active">
                                    <a href="#">
                                        Rs.
                                    </a>
                                </li>
                                <li class="switcher-option">
                                    <a href="#">
                                        <i class="fa fa-inr" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li class="switcher-option">
                                    <a href="#">
                                        <i class="fa fa-eur" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <ul class="account">
                            <li><a href="">Wishlist</a></li>
                            <li><a href="">My Account</a></li>
                            <li><a href="">Checkout</a></li>
                            <li><a href="">Compare</a></li>
                            <li><a href="{{route('loginCustomer')}}">Login/Register</a></li>
                            <li><a href="{{route('customer.logout')}}">Logout</a></li>
                        </ul>
                    </div>
                </div><!--setting  -->
            </div>
        </div>
    </div><!-- header-nav -->
</header><!-- end HEADER -->
<!-- MAIN -->
