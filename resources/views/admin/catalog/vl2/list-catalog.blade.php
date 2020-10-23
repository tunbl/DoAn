@extends('admin.layouts.master')
@section('admin.layouts.content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Quản lý danh mục cấp 2</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dash-board.index')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Quản lý danh mục cấp 2</li>
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
                <a href="{{route('danh-muc-cap-2.create')}}">
                  <button class="card-title btn btn-primary">Thêm</button>
                </a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>STT</th>
                    <th>Danh mục cấp 1</th>
                    <th>Tên</th>
                    <th>Thao tác</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($catalog_2 as $cata_2)
                  <tr>
                    <td>{{$cata_2->id}}</td>
                    <td>
                    @foreach($catalog_1 as $cata_1)
                      @if($cata_1->id == $cata_2->id_chill)
                      {{$cata_1->name}}
                      @endif
                    @endforeach
                    </td>
                    <td>{{$cata_2->name}}</td>
                    <td><a href="{{route('danh-muc-cap-2.edit',$cata_2->id)}}">Chi tiết</a></td>
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