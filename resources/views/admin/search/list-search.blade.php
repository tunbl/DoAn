@extends('admin.layouts.master')
@section('admin.layouts.content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tìm kiếm sản phẩm</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dash-board.index')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Tìm kiếm sản phẩm</li>
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
                <form method="get" action="{{route('search-find-product')}}">
                  @csrf
                    <label>Tìm kiếm</label>
                    <input type="search" class="form-control" name="searchProduct" placeholder="Nhập mã ID hoặc tên sản phẩm">
                </form>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    @if(Auth::user()->role==2)
                    <th>Đại lí</th>
                    @endif
                    <th>Tên sản phẩm</th>
                    <th>Hình ảnh</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Thao tác</th>
                  </tr>
                  </thead>
                  <tbody>
                    @if(!empty($product))
                      @if(Auth::user()->role!=1)
                        @foreach($product as $pro)
                        <tr>
                          <td>{{$pro->id}}</td>
                          <td>{{$pro->nameAgency}}</td>
                          <td>{{$pro->name}}
                          </td>
                          <td>
                            <?php
                              $img = explode(',',$pro->image);
                            ?>
                            
                                  <img class="img-product" src="./img/{{$img[0]}}"/>

                          
                          </td>
                          <td>{{$pro->price_unit}}</td>
                          <td>{{$pro->qty}}</td>
                          <td><a href="{{route('san-pham.edit',$pro->id)}}">Chi tiết</a> | <a href="{{route('san-pham.show',$pro->id)}}" onclick="return confirm('Bạn có chắc muốn xóa?')">Xóa</a></td>
                        </tr>
                          @endforeach
                        @else
                          @foreach($product as $pro)
                          <tr>
                            <td>{{$pro->id}}</td>
                            <td>{{$pro->name}}
                            </td>
                            <td>
                              <?php
                                $img = explode(',',$pro->image);
                              ?>
                              
                                    <img class="img-product" src="./img/{{$img[0]}}"/>

                            
                            </td>
                            <td>{{$pro->price_unit}}</td>
                            <td>{{$pro->qty}}</td>
                            <td><a href="{{route('san-pham.edit',$pro->id)}}">Chi tiết</a> | <a href="{{route('san-pham.show',$pro->id)}}" onclick="return confirm('Bạn có chắc muốn xóa?')">Xóa</a></td>
                          </tr>
                            @endforeach
                          @endif
                  @endif
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