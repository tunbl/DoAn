@extends('layouts.layout')
@section('title', 'Lịch sử mua hàng')
@section('content')
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">

            <!-- section title -->
            <div class="col-md-12">
                <div class="section-title">
                    <h3 class="title">lịch sử mua hàng > Chi tiết</h3>
                </div>
            </div>
            
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="panel panel-danger">
              <div class="panel-body box-profile">
                <div class="text-center">
                  <img class=" img-fluid img-circle"
                        style="    border: 3px solid #adb5bd;margin: 0 auto;padding: 3px;width: 100px;"
                       src="dist/img/user4-128x128.jpg"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{Auth::user()->name ?? ''}}</h3>

              </div>
              <!-- /.card-body -->
            </div>
            <div class="panel panel-danger">
              <div class="panel-body box-profile">
                <div class="text-center">
                  <p><a href="{{route('cus-profile',Auth::user()->id)}}">Thông tin của tôi</a></p>
                  <p><a href="{{route('password-index')}}">Đổi mật khẩu</a></p>
                  <p><a href="#">Lịch sử mua hàng</a></p>
                </div>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="panel panel-danger">
              <div class="panel-body">
                <div class="tab-content">
                  <div class="tab-pane active" id="settings">
                    <table class="table">
                      <thead class="thead-light">
                      <tr>
                        <th scope="col">Mã sản phẩm</th>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Đơn giá</th>
                        <th scope="col">Số lượng</th>
                      </tr>
                      </thead>
                    <tbody>
                      @if(!empty($order))
                        @foreach($order as $order)
                        <tr>
                          <td>{{$order->id}}</td>
                          <td>{{$order->name_product}}</td>
                          <td>{{$order->price_product}}</td>
                          <td>{{$order->qty_product}}</td>
                        </tr>
                        @endforeach
                      @endif
                    </tbody>
                    </table>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <!-- Products tab & slick -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div> 
@endsection