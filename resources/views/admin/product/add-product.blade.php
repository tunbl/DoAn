@extends('admin.layouts.master')
@section('admin.layouts.content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Quản lý danh sản phẩm</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dash-board.index')}}">Trang chủ</a></li>
              <li class="breadcrumb-item active">Quản lý danh sản phẩm</li>
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
                <h3 class="card-title">Thêm sản phẩm</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('san-pham.store')}}" method="post" enctype="multipart/form-data">
              @csrf
              
                <div class="card-body">
                  <input type="hidden" name="id_user" value="{{Auth::user()->id}}">
                  <div class="form-group">
                    <label>Danh Mục</label>
                    <select name="id_parent" id="id_parent" class="form-control @foreach($errors->get('id_parent') as $err){{$err}} @endforeach">
                      <option value="">Chọn Danh Mục</option>
                      @foreach($catalog_1 as $item)
                      <option value="{{$item->id}}"><?php echo str_repeat('---', $item['level']).' '.$item['name'] ?></option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Tên Sản Phẩm</label>
                    <input type="text" name="name" class="form-control  @foreach($errors->get('name') as $err){{$err}} @endforeach" placeholder="Tên Sản Phẩm">
                  </div>
                  <div class="form-group">
                    <label for="">Hình Ảnh</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image[]" class="form-control" multiple id="">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Giá Thành</label>
                    <input type="text" name="price_unit" class="form-control  @foreach($errors->get('price_unit') as $err){{$err}} @endforeach" placeholder="Giá Thành">
                  </div>
                  <div class="form-group">
                    <label>Giá Khuyến Mãi</label>
                    <input type="text" value="0" name="price_promotion" class="form-control" placeholder="Giá Khuyến Mãi">
                  </div>
                  <div class="form-group">
                    <label>Số lượng </label>
                    <input type="text" value="" name="qty" class="form-control" placeholder="Số lượng sản phẩm">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Mô Tả</label>
                    <textarea class="form-control @foreach($errors->get('detail') as $err){{$err}} @endforeach" name="detail" placeholder="Mô Tả"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nội Dung</label>
                    <textarea class="form-control ckeditor" id="content" name="content" placeholder="Nội dung"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nổi bật</label>
                    <div class="custom-control custom-radio">
                      <input class="custom-control-input" type="radio" id="customRadio1" name="new" value="1">
                      <label for="customRadio1" class="custom-control-label">Không</label>
                    </div>
                    <div class="custom-control custom-radio">
                      <input class="custom-control-input" type="radio" id="customRadio2" name="new" checked value="0">
                      <label for="customRadio2" class="custom-control-label">Có</label>
                    </div>
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
@section('script')
    <script>
        $(document).ready(function(){
            $("#id_parent").change(function(){
                var id_parent = $(this).val();
                $.get("quan-tri/catalog/"+id_parent,function(data){
                    $("#id_chill").html(data);
                });
            });
        });
    </script>
@endsection