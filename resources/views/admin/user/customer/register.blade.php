@extends('admin.layouts.master')
@section('admin.layouts.content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Quản lý sản phẩm</h1>
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
                <h3 class="card-title">Đăng ký tài khoản</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('khach-hang.store')}}" method="post" enctype="multipart/form-data">
              @method('post')
              @csrf
                <div class="card-body"> 
                  <div class="form-group">
                    <label>Tên đại lý</label>
                    <input type="text" name="name" class="form-control" placeholder="Tên đại lý">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Hình Ảnh</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Email" >
                  </div>
                  <div class="form-group">
                    <label>Mật khẩu</label>
                    <input type="password" name="password" class="form-control" placeholder="Mật khẩu">
                  </div>
                  <div class="form-group">
                    <label for="">Điện thoại</label>
                    <input type="text" name="phone" class="form-control" placeholder="Điện thoại">
                  </div>
                  <div class="form-group">
                    <label for="">Địa chỉ</label>
                    <input type="text" name="address" class="form-control" placeholder="Địa chỉ">
                  </div>
                  <div class="form-group">
                    <label for="">Phân quyền</label>
                    <select name="role" class="form-control">
                      <option value="0">Customer</option>
                      <option value="1">Agency</option>
                      <option value="2">Admin</option>
                    </select>
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
      <!-- /.container-fluid -->
    </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
@section('script')
    <!-- <script>
        $(document).ready(function(){
            $("#id_parent").change(function(){
                var id_parent = $(this).val();
                $.get("quan-tri/catalog/"+id_parent,function(data){
                    $("#id_chill").html(data);
                });
            });
        });
    </script> -->
@endsection