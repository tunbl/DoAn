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
              <li class="breadcrumb-item"><a href="{{route('dash-board.index')}}">Trang chủ</a></li>
              <li class="breadcrumb-item active">Quản lý danh mục cấp 1</li>
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
                <h3 class="card-title">Thêm danh mục cấp 1</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('danh-muc-cap-1.store')}}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="card-body">
                  <div class="form-group">
                    <label>Chọn thể loại</label>
                    <select class="form-control" name="id_parent">
                      <option value="0" selected="">Danh mục cha</option>
                      @foreach($list as $item)
                      <option value="{{$item['id']}}"><?php echo str_repeat('---', $item['level']).' '.$item['name'] ?></option>
                      @endforeach
                    </select>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label>Tên Danh Mục</label>
                    <input type="text" name="name" class="form-control @foreach($errors->get('name') as $err){{$err}} @endforeach" placeholder="Tên Danh Mục Cấp 1">
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
      <!-- /.container-fluid -->
    </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection