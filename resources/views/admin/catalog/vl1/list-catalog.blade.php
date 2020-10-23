@extends('admin.layouts.master')
@section('admin.layouts.content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Quản lý danh mục cấp 1</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dash-board.index')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Quản lý danh mục cấp 1</li>
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
                <a href="{{route('danh-muc-cap-1.create')}}">
                  <button class="card-title btn btn-primary">Thêm</button>
                </a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id loại</th>
                    <th>Tên</th>
                    <th>Danh mục cha</th>
                    <th>Thao tác</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($list as $dm)
                  <tr>
                    <td>{{$dm->id}}</td>
                    <td>{{$dm->name}}</td>
                    <td>{{$dm->nameParent}}</td>
                    <td><a href="{{route('danh-muc-cap-1.edit',$dm->id)}}">Chi tiết</a> || <a href="{{route('danh-muc-cap-1.show',$dm->id)}}" onclick="return confirm('Bạn chắc chắn muốn xóa?')" class="deleteCatalog">Xóa</a></td>
                  </tr>
                  @endforeach
                  </tfoot>
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