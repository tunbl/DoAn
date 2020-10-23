<!-- /HEADER -->


    <header>
        <!-- TOP HEADER -->
        <div id="top-header">
            <div class="container">
                <ul class="header-links pull-left">
                    <li><a href="#"><i class="fa fa-phone   "></i> +084 398791931</a></li>
                    <li><a href="#"><i class="fa fa-envelope-o"></i> sitrandeptrai@gmail.com</a></li>
                    <li><a href="#"><i class="fa fa-map-marker"></i> 10 / 3 hàm nghi / phan rí cửa / tuy phong / bình thuận</a></li>
                </ul>
                <ul class="header-links pull-right">
                    @if(Auth::check())
                        <li><a href="{{route('cus-profile',[Auth::user()->id])}}"><i class="fa fa-user"></i>{{Auth::user()->name}}</a></li>
                        <li><a href="{{route('logoutCus')}}"><i class="fa fa-sign-out"></i> Đăng xuất</a></li>        
                    @else
                        <li><a class="" data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="fa fa-sign-in"></i> Đăng nhập</a></li>
                        <li><a href="{{route('register')}}"><i class="fa fa-registered"></i> Đăng ký</a></li>
                    @endif
                    
                </ul>
            </div>
        </div>
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="login-form">
                <form>
                    @csrf
                    <h2 class="text-center">Đăng nhập</h2>
                    <span class="text-center text-muted color-text errorlogin"></span> 
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username">             
                        </div>
                        <span class="text-center text-muted color-text small errorUsername"></span>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">             
                        </div>
                        <span class="text-center text-muted color-text small errorPassword"></span>
                    </div>        
                    <div class="form-group">
                        <button type="button" class="btn btn-primary login-btn btn-block" id="loginAjax">Đăng nhập</button>
                    </div>
                    <div class="clearfix">
                        <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
                        <a href="#" class="pull-right">Quên mật khẩu?</a>
                    </div>
                    <div class="or-seperator"><i>or</i></div>
                    <p class="text-center">Đăng nhập với tài khoản xã hội</p>
                    <div class="text-center social-btn">
                        <a href="{{route('loginSocial',['facebook'])}}" class="btn btn-primary"><i class="fa fa-facebook"></i>&nbsp; Facebook</a>
                        <a href="{{route('loginSocial',['twitter'])}}" class="btn btn-info"><i class="fa fa-twitter"></i>&nbsp; Twitter</a>
                        <a href="{{route('loginSocial',['google'])}}" class="btn btn-danger"><i class="fa fa-google"></i>&nbsp; Google</a>
                    </div>
                    <p class="text-center text-muted color-text small">Bạn chưa có tài khoản? <a href="{{route('register')}}">Đăng ký tại đây!</a></p>
                </form>
                    
</div>
          </div>
        </div>
        <!-- /TOP HEADER -->

        <!-- MAIN HEADER -->
        <div id="header">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- LOGO -->
                    <div class="col-md-3">
                        <div class="header-logo">
                            <a href="{{route('index'),}}" class="logo">
                                <img src="./img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- /LOGO -->

                    <!-- SEARCH BAR -->
                    
                        <div class="col-md-6">
                            <div class="header-search">
                                <!-- <form action="" method="get">
                                    <input class="input" name="keyword" placeholder="Search here">
                                    <button class="search-btn">Search</button>
                                </form> -->
                                <form>
                                    <input class="input" type="search" name="searchname" id="searchname" placeholder="Search here">
                                    <button class="search-btn">Search</button>
                                </form>
                                
                            </div>
                        </div>
                  
                    <!-- /SEARCH BAR -->

                    <!-- ACCOUNT -->
                    <div class="col-md-3 clearfix">
                        <div class="header-ctn">
                            <!-- Wishlist -->
                            {{-- <div>
                                <a href="#">
                                    <i class="fa fa-heart-o"></i>
                                    <span>Your Wishlist</span>
                                    <div class="qty">2</div>
                                </a>
                            </div> --}}
                            <!-- /Wishlist -->

                            <!-- Cart -->
                            <div class="dropdown">
                                
                                <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>Your Cart</span>
                                    <div class="qty"><span id="itemCart2">{{Cart::count() ?? 0}}</span></div>
                                </a>
                                <div class="cart-dropdown">
                                    <div class="cart-list">
                                    @foreach(Cart::content() as $row)
                                        <div class="product-widget">
                                            <div class="product-img">
                                                <?php $img = explode(',', $row->options->image); ?>
                                                <img src="img/{{$img[0]}}" alt="">
                                            </div>
                                            <div class="product-body">
                                            <h3 class="product-name">{{$row->name}}<a href="#"></a></h3>
                                                <h4 class="product-price"><span class="qty">x{{$row->qty}}</span></h4>
                                                <h4 class="product-price"><span class="qty">${{$row->price}}.000 </span></h4>
                                            </div>
                                            <a href="{{route('deleteItem',$row->rowId)}}"><button class="delete"><i class="fa fa-close"></i></button></a>
                                        </div>  
                                    @endforeach
                                    </div>
                                    <div class="cart-summary">
                                        <small id="itemCartAll"><span id="itemCart">{{Cart::count() ?? 0}}</span> Item(s) selected</small>
                                        <h5>SUBTOTAL: {{Cart::total()}} $</h5>
                                    </div>
                                    <div class="cart-btns">
                                        <a href="{{route('viewcart')}}">View Cart</a>
                                    <a href="{{route('checkout')}}">Checkout <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- /Cart -->

                            <!-- Menu Toogle -->
                            <div class="menu-toggle">
                                <a href="#">
                                    <i class="fa fa-bars"></i>
                                    <span>Menu</span>
                                </a>
                            </div>
                            <!-- /Menu Toogle -->
                        </div>
                    </div>
                    <!-- /ACCOUNT -->
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!-- /MAIN HEADER -->
    </header>
