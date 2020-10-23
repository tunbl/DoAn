@extends('admin.layouts.master')
@section('admin.layouts.content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Quản lý Slide</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dash-board.index')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Quản lý Slide</li>
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
                <a href="{{route('slide.create')}}">
                  <button class="card-title btn btn-primary">Thêm</button>
                </a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>STT</th>
                    <th>Hình ảnh</th>
                    <th>Link</th>
                    <th>Thao tác</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($slide as $sl)
                  <tr>
                    <td>{{$sl->id}}</td>
                    <td>{{$sl->image}}</td>
                    <td>{{$sl->link}}</td>
                    <td><a href="{{route('slide.edit',$sl->id)}}">Chi tiết</a></td>
                  </tr>
                  @endforeach
                  </tbody>
                </table>
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