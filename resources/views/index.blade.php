@extends('layouts.layout')

@section('title', 'Miker')


	
@section('content')

 		<nav id="navigation">

		</nav>
		<!-- /NAVIGATION -->
	
		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container-fluid">
				<!-- row -->
				<div class="row">
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel" data-slide-to="1"></li>
							<li data-target="#myCarousel" data-slide-to="2"></li>
							<li data-target="#myCarousel" data-slide-to="3"></li>
							<li data-target="#myCarousel" data-slide-to="4"></li>
						</ol>

						<!-- Wrapper for slides -->
						<div class="carousel-inner">

							<div class="item active" style="background: rgb(201, 0, 34) none repeat scroll 0% 0%;">
								<img class="img-menu center-block" src="img/abc.jpg" alt="Los Angeles" >
							</div>

							<div class="item" style="background: rgb(201, 0, 34) none repeat scroll 0% 0%;">
								<img class="img-menu center-block" src="img/slider-2.jpg" alt="Chicago">
							</div>

							<div class="item" style="background: rgb(201, 0, 34) none repeat scroll 0% 0%;">
								<img class="img-menu center-block" src="img/slider-3.jpg" alt="New York">
							</div>
							<div class="item" style="background: rgb(201, 0, 34) none repeat scroll 0% 0%;">
								<img class="img-menu center-block" src="img/slider-4.jpg" alt="New York">
							</div>
							<div class="item" style="background: rgb(201, 0, 34) none repeat scroll 0% 0%;">
								<img class="img-menu center-block" src="img/slider-5.jpg" alt="New York">
							</div>
							
						</div>
					</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Sản phẩm nổi bật</h3>
							<a href="#">Xem thêm</a>
						</div>
					</div>
						<div class="col-sm-2">
							<div class="product">
								<div class="product-img">
									<img src="./img/product01.png" alt="">
									<div class="product-label">
										<span class="sale">-30%</span>
										<span class="new">NEW</span>
									</div>
								</div>
								<div class="product-body">
									<h3 class="product-name"><a href="#">product name goes hereasda sdasdasdas das dasdasdasd</a></h3>
									<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									<!-- <div class="product-rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div> -->
								</div>
								<!-- <div class="add-to-cart">
									<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
								</div> -->
							</div>
						</div>
						<div class="col-sm-2">
							<div class="product">
								<div class="product-img">
									<img src="./img/product01.png" alt="">
									<div class="product-label">
										<span class="sale">-30%</span>
										<span class="new">NEW</span>
									</div>
								</div>
								<div class="product-body">
									<h3 class="product-name"><a href="#">product name goes hereasda sdasdasdas das dasdasdasd</a></h3>
									<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									<!-- <div class="product-rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div> -->
								</div>
								<!-- <div class="add-to-cart">
									<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
								</div> -->
							</div>
						</div>
						<div class="col-sm-2">
							<div class="product">
								<div class="product-img">
									<img src="./img/product01.png" alt="">
									<div class="product-label">
										<span class="sale">-30%</span>
										<span class="new">NEW</span>
									</div>
								</div>
								<div class="product-body">
									<h3 class="product-name"><a href="#">product name goes hereasda sdasdasdas das dasdasdasd</a></h3>
									<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									<!-- <div class="product-rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div> -->
								</div>
								<!-- <div class="add-to-cart">
									<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
								</div> -->
							</div>
						</div>
						<div class="col-sm-2">
							<div class="product">
								<div class="product-img">
									<img src="./img/product01.png" alt="">
									<div class="product-label">
										<span class="sale">-30%</span>
										<span class="new">NEW</span>
									</div>
								</div>
								<div class="product-body">
									<h3 class="product-name"><a href="#">product name goes hereasda sdasdasdas das dasdasdasd</a></h3>
									<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									<!-- <div class="product-rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div> -->
								</div>
								<!-- <div class="add-to-cart">
									<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
								</div> -->
							</div>
						</div>
						<div class="col-sm-2">
							<div class="product">
								<div class="product-img">
									<img src="./img/product01.png" alt="">
									<div class="product-label">
										<span class="sale">-30%</span>
										<span class="new">NEW</span>
									</div>
								</div>
								<div class="product-body">
									<h3 class="product-name"><a href="#">product name goes hereasda sdasdasdas das dasdasdasd</a></h3>
									<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									<!-- <div class="product-rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div> -->
								</div>
								<!-- <div class="add-to-cart">
									<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
								</div> -->
							</div>
						</div>
						<div class="col-sm-2">
							<div class="product">
								<div class="product-img">
									<img src="./img/product01.png" alt="">
									<div class="product-label">
										<span class="sale">-30%</span>
										<span class="new">NEW</span>
									</div>
								</div>
								<div class="product-body">
									<h3 class="product-name"><a href="#">product name goes hereasda sdasdasdas das dasdasdasd</a></h3>
									<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									<!-- <div class="product-rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div> -->
								</div>
								<!-- <div class="add-to-cart">
									<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
								</div> -->
							</div>
						</div>
							
							
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<div class="section">
			<div class="container">
				<div class="col-md-12">
					<div class="section-title">
						<h3 class="title">Top thương hiệu</h3>
					</div>
				</div>
				<div class="col-sm-12">
					@foreach($brand as $br)
					<div class="top-brand">
						<img src="img/{{$br->avatar}}">
						<p href="#" class="center-block">{{$br->name}}</p>
						<p href="#" class="center-block">300 sản phẩm</p>
					</div>
					@endforeach
				</div>
			</div>
		</div>

		<!-- HOT DEAL SECTION -->
		<div id="hot-deal" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="hot-deal">
							<ul class="hot-deal-countdown">
								<li>
								<div>
									<h3 id ="days"></h3>
									<span>Days</span>
								</div>
								</li>
								<li>
									<div>
										<h3 id ="hours"></h3>
										<span>Hours</span>
									</div>
								</li>
								<li>
									<div>
										<h3 id="minutes">34</h3>
										<span>Mins</span>
									</div>
								</li>
								<li>
									<div>
										<h3 id="seconds"></h3>
										<span>Secs</span>
									</div>
								</li>
							</ul>
							<h2 class="text-uppercase">Sale </h2>
							<p>Giảm Giá sản Phẩm hơn 50%</p>
							<a class="primary-btn cta-btn" href="#">Shop now</a>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /HOT DEAL SECTION -->

		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Hot deal</h3>
						</div>
					</div>
					@foreach($products as $product)
						<div class="col-sm-2">
							<div class="product">
								<div class="product-img">
									<img src="./img/{{$product->image[0]}}" alt="">
									<div class="product-label">
										<span class="sale">-{{ROUND(($product->price_unit - $product->price_promotion)*100/$product->price_unit)}}%</span>
										@if($product->new == 1)
											<span class="new">NEW</span>
										@endif
									</div>
								</div>
								<div class="product-body">
									<h3 class="product-name"><a href="{{route('product',[$product->slug,$product->id])}}">{{$product->name}}</a></h3>
									<h4 class="product-price">{{$product->price_unit}} <u>đ</u> <del class="product-old-price">{{$product->price_promotion}} <u>đ</u> </del></h4>
									<!-- <div class="product-rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div> -->
								</div>
								<!-- <div class="add-to-cart">
									<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
								</div> -->
							</div>
					</div>
					@endforeach
					
					
					
					<div class="col-sm-12">
							<a href="#" class="showMore">Xem thêm</a>
						</div>	
				</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		

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
<script>

	var countDownDate = new Date("june 8, 2020 20:12:00").getTime();

	// Update the count down every 1 second
	var x = setInterval(function() {

	// Get today's date and time
	var now = new Date().getTime();

	// Find the distance between now and the count down date
	var distance = countDownDate - now;

	// Time calculations for days, hours, minutes and seconds
	var days = Math.floor(distance / (1000 * 60 * 60 * 24));
	var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
	var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
	var seconds = Math.floor((distance % (1000 * 60)) / 1000);

	// Display the result in the element with id="demo"
	document.getElementById("days").innerHTML =  days ;
	document.getElementById("hours").innerHTML =  hours ;
	document.getElementById("minutes").innerHTML =  minutes ;
	document.getElementById("seconds").innerHTML =  seconds ;
	// If the count down is finished, write some text
	if (distance < 0) {
		clearInterval(x);
		document.getElementById("days").innerHTML="EXPIRED";
		document.getElementById("hours").innerHTML="EXPIRED"; 
		document.getElementById("minutes").innerHTML="EXPIRED"; 
		document.getElementById("seconds").innerHTML="EXPIRED"; 

	}
	}, 1000)
</script>

@endsection
