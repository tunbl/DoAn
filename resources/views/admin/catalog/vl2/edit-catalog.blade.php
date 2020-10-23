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
              <li class="breadcrumb-item"><a href="{{route('dash-board.index')}}">Trang chủ</a></li>
              <li class="breadcrumb-item active">Quản lý danh mục cấp 2</li>
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
                <h3 class="card-title">Cập nhật danh mục cấp 2</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('danh-muc-cap-2.update',$edit->id)}}" method="post" enctype="multipart/form-data">
              @method('PATCH')
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label>Danh Mục Cấp 1</label>
                    <select name="id_chill" class="form-control @foreach($errors->get('id_chill') as $err){{$err}} @endforeach">
                      <option value="">Chọn Danh Mục Cấp 1</option>
                      @foreach($catalog_1 as $cata_1)
                        @if($cata_1->id == $edit->id_chill)
                          <option value="{{$cata_1->id}}" selected>{{$cata_1->name}}</option>
                          @else
                          <option value="{{$cata_1->id}}">{{$cata_1->name}}</option>
                        @endif
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Tên Danh Mục Cấp 2</label>
                    <input type="text" name="name" class="form-control @foreach($errors->get('name') as $err){{$err}} @endforeach" placeholder="Tên Danh Mục Cấp 2" value="{{$edit->name}}">
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