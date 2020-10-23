@extends('admin.layouts.master')
@section('admin.layouts.content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Quản lý tài khoản</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
              <li class="breadcrumb-item active">Quản lý tài khoản</li>
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
                <h3 class="card-title">Thông tin tài khoản</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="text-center" style="color: red;font-weight: bold;">
                    @if(count($errors) > 0)@foreach($errors->all() as $err){{$err}}@endforeach @endif
                    </div>
              <form role="form"  action="{{route('update-profile')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email*</label>
                    <input class="form-control" type="text" id="" name="email" value="{{$edit->email}}" placeholder="Tài khoản">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Họ và tên*</label>
                    <input class="form-control" type="text" id="" name="name" value="{{$edit->name}}" placeholder="Họ và tên">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Mật khẩu cũ*</label>
                    <input class="form-control" type="password" id="oldpassword" name="oldpassword" value="" placeholder="Mật khẩu cũ">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Mật khẩu mới*</label>
                    <input class="form-control" type="password" id="password" name="password" value="" placeholder="Mật khẩu mới">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nhập lại mật khẩu mới*</label>
                    <input class="form-control" type="password" id="password-confirmation" name="password_confirmation" value="" placeholder="Nhập lại mật khẩu mới">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Lưu</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    </div>
<!-- /.content-wrapper -->
@endsection
