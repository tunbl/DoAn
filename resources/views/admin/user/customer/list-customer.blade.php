@extends('admin.layouts.master')
@section('admin.layouts.content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Quản lý khách hàng</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dash-board.index')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Quản lý khách hàng</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <a href="">
                  <button class="card-title btn btn-primary">Thêm</button>
                </a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Họ & tên</th>
                    <th>Email</th>
                    <th>Điện thoại</th>
                    <th>Địa chỉ</th>
                    <th>Thao tác</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($cus as $cu)
                  <tr>
                    <td>{{$cu->id}}</td>
                    <td>{{$cu->name}}</td>
                    <td>{{$cu->email}}</td>
                    <td>{{$cu->phone}}</td>
                    <td>{{$cu->address}}</td>
                    <td><a href="{{route('khach-hang.edit',$cu->id)}}">Chi tiết</a></td>
                  </tr>
                  @endforeach
                  
                </tbody>
                </table>
                {{$cus->links()}}
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
        <!-- /.row -->
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection