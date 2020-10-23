@extends('admin.layouts.master')
@section('admin.layouts.content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Quản lý hóa đơn</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dash-board.index')}}">Trang chủ</a></li>
              <li class="breadcrumb-item active">Quản lý sản phẩm</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                    <div class="card-header">
                
                        <h3 class="card-title">Xem đơn hàng</h3>
                        
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="{{route('quan-ly-don-hang.update',$edit->idOd ?? $edit->id)}}" method="post" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                        <div class="card-body">
                        <div class="form-group">
                            <label>Họ & Tên</label>
                            <input type="text" name="name" class="form-control" placeholder="" value="{{$edit->name}}" disabled>
                        </div>
                        <div class="form-group">
                            <label>Số Điện Thoại</label>
                            <input type="text" name="name" class="form-control" placeholder="" value="{{$edit->phone}}" disabled>
                        </div>
                        <div class="form-group">
                            <label>Địa Chỉ</label>
                            <input type="text" name="name" class="form-control" placeholder="" value="{{$edit->address}}" disabled>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="name" class="form-control" placeholder="" value="{{$edit->email}}" disabled>
                        </div>
                        <div class="form-group">
                            <label>Ngày Đặt</label>
                            <input type="email" name="name" class="form-control" placeholder="" value="{{$edit->created_at}}" disabled>
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleInputPassword1">Ghi Chú</label>
                            <textarea class="form-control" name="note" placeholder="Mô Tả" disabled>{{$edit->note}}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Tình Trạng</label>
                            <select name="id_status" class="form-control">
                            @can('agency')
                                @foreach($status as $st)
                                    @if($st->id == $edit->orderOd)
                                    <option value="{{$st->id}}" selected>{{$st->name}}</option>
                                    @else
                                    <option value="{{$st->id}}">{{$st->name}}</option>
                                    @endif
                                @endforeach
                                </select>
                            @elsecan('admin')
                                @foreach($status as $st)
                                    @if($st->id == $edit->id_status)
                                    <option value="{{$st->id}}" selected>{{$st->name}}</option>
                                    @else
                                    <option value="{{$st->id}}">{{$st->name}}</option>
                                    @endif
                                @endforeach
                            </select>
                            @endcan
                        </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                        <button type="submit" name="update" class="btn btn-primary">Lưu</button>
                        </div>
                    </form>
                    </div>
                    <!-- /.card -->

                </div>
            </div>
        <!-- /.row -->
        @can('admin')
        <h1>Chi tiết đơn hàng</h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                    <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Mã sản phẩm</th>
                                <th>Tên Sản Phẩm</th>
                                <th>Số Lượng</th>
                                <th>Giá</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orderDetail as $c)
                            <tr>
                                <td>{{$c->id}}</td>
                                <td>{{$c->name_product}}</td>
                                <td>{{$c->qty_product}}</td>
                                <td>{{number_format($c->price_product)}}đ</td>
                            </tr>
                            @endforeach
                            </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        @endcan
      <!-- /.container-fluid -->
    </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection