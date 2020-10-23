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
                    <h3 class="title">lịch sử mua hàng</h3>
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
                        <th scope="col">Mã đơn hàng</th>
                        <th scope="col">Ngày mua</th>
                        <th scope="col">Sản phẩm</th>
                        <th scope="col">Tổng tiền</th>
                        <th scope="col">Trạng thái đơn hàng</th>
                      </tr>
                      </thead>
                    <tbody>
                      @if(!empty($order))
                        @foreach($order as $order)
                        <tr>
                          <th><a href="{{route('history-detail',$order->id)}}">{{$order->id}}</a></th>
                          <td>{{$order->created_at->format('d/m/Y')}}</td>
                          <td>

                            @if(!empty($order->name_product))
                              @foreach($order->name_product as $item)
                                {{$item->name_product.','}}
                              @endforeach
                            @endif
                          </td>
                          <td>{{$order->total}}</td>
                          <td>{{$order->nameStatus}}</td>
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