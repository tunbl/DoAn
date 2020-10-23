@extends('layouts.layout')


@section('title', 'Thanh toán')
@section('content')




<!-- NAVIGATION -->
<nav id="navigation">
  
</nav>
<!-- /NAVIGATION -->

<!-- BREADCRUMB -->
<div id="breadcrumb" class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <h3 class="breadcrumb-header">Thanh toán</h3>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /BREADCRUMB -->

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">

            <div class="col-md-7">
                <!-- Billing Details -->
                <div class="billing-details">
                    <div class="section-title">
                        <h3 class="title">Thông tin khách hàng</h3>
                    </div>
                    <form action="{{route('sendmailler')}}" method="get" style="margin-top:20px;">

                        <div class="form-group">
                            <label>Họ và tên</label>
                            <input type="text" class="input" value="{{Auth::user()->name}}" name="fullname" id="username" placeholder="Enter full name" readonly />
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input class="input" id="email" value="{{Auth::user()->email}}" type="email" name="email" placeholder="Enter email" readonly>
                        </div>
                        <div class="form-group">
                            <label>Số điện thoại</label>
                            <input class="input" id="phone" value="{{Auth::user()->phone}}" type="text" name="phone" placeholder="phone" readonly>
                        </div>

                        <div class="form-group">
                            <label>Địa chỉ</label>
                            <textarea class="input" name="address" readonly>{{Auth::user()->address}}</textarea>
                        </div>
                </div>
            </div>

            <!-- Order Details -->
            <div class="col-md-5 order-details">
                <div class="section-title text-center">
                    <h3 class="title">Hóa đơn</h3>
                </div>
                <div class="order-summary">
                    <div class="order-col">
                        <div><strong>Sản phẩm</strong></div>
                        <div><strong>Giá</strong></div>
                    </div>
                    <div class="order-products">
                        <?php $total = 0 ?>
                        @foreach ($items as $item)
                        <?php $total += ($item->price*$item->qty) ?>
                        <div class="order-col">
                            <div>{{$item->qty.'x '.$item->name}}</div>
                            <div>{{$item->price}}</div>

                        </div>
                        @endforeach


                    </div>
                    
                    <div class="order-col">
                        <div><strong>TOTAL</strong></div>

                        <div><strong class="order-total">{{$total}}</strong></div>
                    </div>
                </div>
                <div class="payment-method">
                    <div class="input-radio">
                        <input type="radio" name="payment" value="Internet Banking" id="payment-1" >
                        <label for="payment-1">
                            <span></span>
                            Internet Banking
                        </label>
                        <div class="caption">
                            <p>Gửi Tiền qua Tài khoản Số tài khoản <br /> Họ và tên: Lê Sĩ <br /> số tài khoản: ACB
                                123456789 </p>
                        </div>
                    </div>
                    <div class="input-radio">
                        <input type="radio" name="payment" value="Thanh toán trực tiếp" id="payment-2">
                        <label name="" for="payment-2">
                            <span></span>
                            Gửi tiền trực tiếp
                        </label>
                        <div class="caption">
                            <p>Đặt hàng và đến nơi dịch vụ mua bán nhận sản phẩm và thanh toán</p>
                        </div>
                    </div>
                    <div class="input-radio">
                        <input type="radio" name="payment" value="Thanh toán khi nhận hàng" id="payment-3" checked="">
                        <label for="payment-3">
                            <span></span>
                            Thanh toán khi nhận hàng
                        </label>
                        <div class="caption">
                            <p>Khi nhận sản phẩm khách hàng kiểm tra kỹ trước khi nhận hàng </p>
                        </div>
                    </div>
                </div>
                <button class="delete-photo primary-btn order-submit" style="width: 100%">nhấn mua</button>
                </form>
                </a>

            </div>
            <!-- /Order Details -->

        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->

<!-- NEWSLETTER -->
<div id="newsletter" class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <div class="newsletter">
                    <p>Sign Up for the <strong>NEWSLETTER</strong></p>
                    <form>
                        <input class="input" type="email" placeholder="Enter Your Email">
                        <button class="newsletter-btn"><i class="fa fa-envelope"></i> Subscribe</button>
                    </form>
                    <ul class="newsletter-follow">
                        <li>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>

<!-- <script>
    $('.delete-photo').on('click', function () {
        // alert('hihi')
        username = $('#username').val();

        email = $('#email').val();
        number = $('#number').val();
        address = $('#address').val();
        note = $('#note').val();
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;


        if (username == "") {

            $('#username').css('border', '1px solid #D10024')
            setTimeout(function () {

                $('#username').css('border', '1px solid #E4E7ED')

            }, 1000);
        }

        if (filter.test(email.value)) {

            $('#email').css('border', '1px solid #D10024')
            setTimeout(function () {

                $('#email').css('border', '1px solid #E4E7ED')

            }, 1000);
        }
        if (number == "") {

            $('#number').css('border', '1px solid #D10024')
            setTimeout(function () {

                $('#number').css('border', '1px solid #E4E7ED')

            }, 1000);
        }
        if (address == "") {

            $('#address').css('border', '1px solid #D10024')
            setTimeout(function () {

                $('#address').css('border', '1px solid #E4E7ED')

            }, 1000);
        }
        if (note == "") {

            $('#note').css('border', '1px solid #D10024')
            setTimeout(function () {

                $('#note').css('border', '1px solid #E4E7ED')

            }, 1000);
        }

        if (username == "" && !filter.test(email.value) && number == "" && address == "" && note == "") {
            $('#username').css('border', '1px solid #D10024')
            $('#email').css('border', '1px solid #D10024')
            $('#number').css('border', '1px solid #D10024')
            $('#address').css('border', '1px solid #D10024')
            $('#note').css('border', '1px solid #D10024')

            setTimeout(function () {

                $('#username').css('border', '1px solid #E4E7ED')
                $('#email').css('border', '1px solid #E4E7ED')
                $('#number').css('border', '1px solid #E4E7ED')
                $('#address').css('border', '1px solid #E4E7ED')
                $('#note').css('border', '1px solid #E4E7ED')
               
                swal({
                title: 'Phát hiện lỗi yêu cầu kiểm tra lại!',
                text: 'You clicked the button!',
                icon: 'warning',
                button: 'fa',
                    
                    });
       

            }, 1000);

        } else {
            
            $('.order-2').css('display', 'none');
            $('.order-1').css('display', 'inline');
        }

    });
   
</script> -->
@endsection

<!-- /NEWSLETTER -->
