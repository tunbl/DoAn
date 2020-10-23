@extends('layouts.layout')
<style>

.center-box{
  margin: 50px 0;
  display: flex;
  justify-content: center;
}
.center-box>.align{
    display: flex;
    flex-direction: column;
}

</style>
@section('content')
    <div class="container">
        <div id="" class="row center-box ">
            <div class="align">
                <img src="./img/mascot@2x.png" alt="" srcset="">
                <p> Không có sản phẩm nào trong giỏ hàng của bạn.</p>
                <a class="primary-btn cta-btn" href="#">Tiếp tục mua sắm</a>
            </div>
        </div>
    </div>
@endsection
