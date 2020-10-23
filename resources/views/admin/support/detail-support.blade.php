@extends('admin.layouts.master')
@section('admin.layouts.content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Support</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dash-board.index')}}">Trang chủ</a></li>
              <li class="breadcrumb-item active">Support</li>
				 <li class="breadcrumb-item active">Hỗ trợ</li>
              <li class="breadcrumb-item active">Chi tiết</li>
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
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tên</label>
                    <input name="name" class="form-control" id="exampleInputEmail1" value="{{$edit->name}}" disabled>
                  </div>
					<div class="form-group">
                    <label for="exampleInputEmail1">Địa chỉ</label>
                    <input name="name" class="form-control" id="exampleInputEmail1" value="{{$edit->location}}" disabled>
                  </div>
					<div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input name="name" class="form-control" id="exampleInputEmail1" value="{{$edit->email}}" disabled>
                  </div>
					<div class="form-group">
                    <label for="exampleInputEmail1">Số điện thoại</label>
                    <input name="name" class="form-control" id="exampleInputEmail1" value="{{$edit->phone_number}}" disabled>
                  </div>
					<div class="form-group">
                    <label for="exampleInputEmail1">Nội dung</label>
                    <textarea class="form-control" rows="3"  disabled="">{{$edit->message}}</textarea>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
					<a href="https://mail.google.com/mail/u/0/?view=cm&fs=1&to={{$edit->email}}.com&tf=1"><button type="submit" class="btn btn-primary">Gửi Email</button></a>
					<a href="{{route('sup')}}"><button type="submit" class="btn btn-primary">Đóng</button></a>
                </div>
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