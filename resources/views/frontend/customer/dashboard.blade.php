@extends('layout.frontend.master')
@section('dynamic_content')

    <main class="site-main">

        <div class="columns container">
            <!-- Block  Breadcrumb-->
            <img src="https://via.placeholder.com/100x100" style="height:100px;width:100px;border-radius: 100%;margin:25px">
            <ol class="breadcrumb no-hide" style="float:right">
                <li>Welcome <a href="#"><strong>{{\Illuminate\Support\Facades\Auth::user()->name}}!</strong></a></li>
                <li><a href="{{route('customer.logout')}}">LogOut</a></li>

            </ol><!-- Block  Breadcrumb-->


            <!-- USER DASHBOARD -->
            <div class="block-hot-deals-opt3">
                <div class="container">
                    <div class="box-content" style="padding-left:0">
                        <div class="block-title">

                            <div class="nav-links dropdown">
                                <button class="dropdown-toggle"  type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                </button>
                                <div class="dropdown-menu" >
                                    <ul  >
                                        <li><a href=""><strong>MY ACCOUNT</strong></a></li>
                                        <li role="presentation" class="active"><a href="#user-1"  role="tab" data-toggle="tab">Dashboard</a></li>
                                        <li role="presentation" class=""><a href="#user-2"  role="tab" data-toggle="tab">Account Details</a></li>
                                        <li role="presentation" class=""><a href="#user-3"  role="tab" data-toggle="tab">Order History</a></li>
                                        <li role="presentation" class=""><a href="#user-5"  role="tab" data-toggle="tab">Wishlists</a></li>
                                        <li role="presentation" class=""><a href="#user-4"  role="tab" data-toggle="tab">Change Password</a></li>
{{--                                        <li role="presentation" class=""><a href="#user-6"  role="tab" data-toggle="tab">My Returns</a></li>--}}
                                        <li role="presentation" class=""><a href="{{route('customer.logout')}}">Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="block-content" style="padding-top:0">
                            <div class="tab-content">
                                <!-- TAB 1 START -->
                                <div class="tab-pane active in  fade " id="user-1" role="tabpanel">
                                    <h3>My Dashboard</h3>
                                    <div class="row">
                                        <div class="col-md-4 col-lg-4">
                                            <div class="card">
                                                <img src="{{asset('frontend/assets/images/product.jpg')}}" alt="Avatar" style="width:50%;">
                                                <div class="container_card">
                                                    <h4 class="text-center"><b> {{count(\App\Models\Product::all())}}<sup> +</sup></b></h4>
                                                    <p class="text-center text-danger"><b> <span class="text-info"> Product</span></b></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-lg-4">
                                            <div class="card">
                                                <img src="{{asset('frontend/assets/images/delivery.jpg')}}" alt="Avatar" style="width:50%">
                                                <div class="container_card">
                                                    <h4 class="text-center"><b> 20<sup> +</sup></b></h4>
                                                    <p class="text-center text-danger"><b> <span class="text-info"> Order Delivered </span></b></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-lg-4">
                                            <div class="card">
                                                <img src="{{asset('frontend/assets/images/pending.jpg')}}" alt="Avatar" style="width:50%">
                                                <div class="container_card">
                                                    <h4 class="text-center"><b> 10<sup> +</sup></b></h4>
                                                    <p class="text-center text-danger"><b> <span class="text-info"> Pending Orders</span></b></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- TAB 1 ENDS -->
                                <!-- TAB 2 START -->
                                <div class="tab-pane  fade" id="user-2" role="tabpanel">
                                    <h3>CONTACT INFOMATIONS</h3>
                                    <div class="box-border">
                                        <form action="#" method="post">
                                            @csrf
                                        <ul>
                                            <li class="row">
                                                <div class="col-sm-12">
{{--                                                    @if(\Illuminate\Support\Facades\Auth::guard('customer')->user()->gender == 1)--}}
{{--                                                        <span class="custom-radio"><input type="radio" value="1" name="gender" checked> Mr.</span>--}}
{{--                                                        <span class="custom-radio"><input type="radio" value="0" name="gender"> Mrs.</span>--}}
{{--                                                    @else--}}
{{--                                                        <span class="custom-radio"><input type="radio" value="1" name="gender"> Mr.</span>--}}
{{--                                                        <span class="custom-radio"><input type="radio" value="0" name="gender" checked> Mrs.</span>--}}
{{--                                                    @endif--}}
                                                </div>
                                                <br/>
                                                <br/>
                                                <div class="col-sm-6">
                                                    <label for="first_name" class="required">Full Name</label>
                                                    <input class="input form-control" name="name" value="" id="first_name" type="text">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="last_name" class="required">Username</label>
                                                    <input name="username" class="input form-control" id="last_name" type="text" value="">
                                                </div>
                                            </li>
                                            <li class="row">
                                                <div class="col-sm-6">
                                                    <label for="company_name">Email Address</label>
                                                    <input name="email" class="input form-control" id="company" type="email" value="">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="phone" class="required">Phone Number</label>
                                                    <input class="input form-control" name="phone" id="phone" type="text" value="">
                                                </div>
                                            </li>
                                            <li class="row">
                                                <div class="col-xs-12">

                                                    <label for="country" class="required">Country</label>
                                                    <input class="input form-control" name="country" id="country" type="text" value="">

                                                </div>

                                            </li>

                                            <li class="row">

                                                <div class="col-sm-6">

                                                    <label for="city" class="required">City</label>
                                                    <input class="input form-control" name="city" id="city" type="text" value="">

                                                </div>

                                                <div class="col-sm-6">
                                                    <label class="required">State/Province</label>
                                                    <input class="input form-control" name="state" id="state" type="text" value="">
                                                </div>
                                            </li>
                                        </ul>
                                        <button style="margin-top:1em" class="button" type="submit">SAVE</button>
                                        </form>
                                    </div>
                                </div>
                                <!-- TAB 2 ENDS -->
                                <!-- TAB 3 START -->
                                <div class="tab-pane  fade " id="user-3" role="tabpanel">
                                    <h3>MY ORDERS</h3>
                                        <div class="heading-counter warning">Your shopping cart contains:
                                        <span> Products</span>
                                    </div>
                                    <div class="order-detail-content">
                                        <div class="table-responsive">
                                            <table class="table table-bordered  cart_summary">
                                                <thead>
                                                <tr>
                                                    <th>Order</th>
                                                    <td>Product</td>
                                                    <th>Date</th>
                                                    <th>Status</th>
                                                    <th>Total</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                        <tr>
                                                            <td>12</td>
                                                            <td>order description</td>
                                                            <td>
                                                               date
                                                            </td>
                                                            <td><span class="success">
                                                                    Order Placed
                                                                    <p> class="alert alert-info">confirm</p>
                                                                </span></td>
                                                            <td>300</td>
                                                        </tr>
                                                </tbody>
{{--                                                <tfoot>--}}
{{--                                                <tr>--}}
{{--                                                    <td rowspan="2" colspan="2"></td>--}}
{{--                                                    <td colspan="3">Total products (tax incl.)</td>--}}
{{--                                                    <td colspan="2">122.38 €</td>--}}
{{--                                                </tr>--}}
{{--                                                <tr>--}}
{{--                                                    <td colspan="3"><strong>Total</strong></td>--}}
{{--                                                    <td colspan="2"><strong>122.38 €</strong></td>--}}
{{--                                                </tr>--}}
{{--                                                </tfoot>--}}
                                            </table>
                                        </div>
{{--                                        <div class="cart_navigation">--}}
{{--                                            <a href="#" class="prev-btn">Continue shopping</a>--}}
{{--                                            <a href="#" class="next-btn">Proceed to checkout</a>--}}
{{--                                        </div>--}}
                                    </div>
                                </div>
                                <!-- TAB 3 ENDS -->
                                <!-- TAB 4 START -->
                                <div class="tab-pane  fade " id="user-4" role="tabpanel">
                                    <h3>Change Password</h3>
                                    <form   action="#" method="post">
                                        @csrf
                                        <ul>
                                            <li class="row">
                                                <div class="col-sm-6">
                                                    <label for="first_name" class="required">New Password</label>
                                                    <input class="input form-control" name="password" id="" type="password">
                                                </div>
                                            </li>
                                            <li class="row">
                                                <div class="col-sm-6">
                                                    <label for="password_confirmation">Confirm Password</label>
                                                    <input name="password_confirmation" class="input form-control" id="password_confirmation" type="password">
                                                </div>
                                            </li>
                                        </ul>
                                        <button style="margin-top:1em" class="button" type="submit">Change</button>
                                    </form>

                                </div>
                                <!-- TAB 4 ENDS -->
                                <!-- TAB 5 STARTS -->
                                <div class="tab-pane  fade " id="user-5" role="tabpanel">
                                    <h3>MY WISHLISTS</h3>
                                    <div class="order-detail-content">
                                        <div class="table-responsive">
                                            <table class="table table-bordered  cart_summary">
                                                <thead>
                                                <tr>
                                                    <th class="product_remove">Delete</th>
                                                    <th class="product_thumb">Image</th>
                                                    <th class="product_name">Product</th>
                                                    <th class="product-price">Price</th>
                                                    <th class="product_total">Add To Cart</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="product_remove"><a href="#" onclick="return confirm('Are You Sure Do You Want To Delete This Data ?')"><i class="fa fa-times"></i></a></td>
                                                        <td class="product_thumb"><a href="#">
                                                            <img src="#" alt="#" width="100" height="100"></a>

                                                            </a></td>
                                                        <td class="product_name"><a href="#">Product Name</a></td>
                                                        <td class="product-price">Rs Product Price</td>
                                                        <td class="product_total">

                                                            <form action="#" method="post" id="product_addtocart_forms">
                                                                @csrf
                                                                <input type="hidden"  name="product_id" value="#">
                                                                <input type="hidden"  name="name" value="#">
                                                                <input type="hidden"  name="slug" value="#">
                                                                <input type="hidden"  name="qty" value="1">
                                                                <input type="hidden"  name="price" value="#">
                                                                <input type="hidden" name="rowId" value="#">
                                                                <button type="submit">Add To Cart</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                                </div>
                                <!-- TAB 5 ENDS -->
                                <div class="tab-pane  fade " id="user-6" role="tabpanel">
                                    <h3>MY RETURN</h3>
                                </div>
                                <!-- TAB 5 ENDS -->
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- USER DASHBOARD -->
        </div>
    </main>
@endsection
