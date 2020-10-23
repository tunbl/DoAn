@extends('admin.layouts.master')
@section('admin.layouts.content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Quản lý đơn hàng</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dash-board.index')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Quản lý đơn hàng</li>
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
              <!-- /.card-header -->
              <div class="card-body">
                <table id="" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    
                    <th>Mã đơn hàng</th>
                    <th>Người đặt</th>
                    <th>Ngày đặt</th>
                    <th>Số tiền</th>
                    <th>Tình trạng</th>
                    <th>Thao tác</th>
                  </tr>
                  </thead>
                  <tbody>
                  @can('admin')
                    @foreach($order as $od)
                    <tr>
                      <td>{{$od->id}}</td>
                      <td>{{$od->name}}</td>
                      <td>{{$od->created_at->format('d/m/Y')}}</td>
                      <td>{{$od->total}}</td>
                      <td>
                      @foreach($status as $st)
                        @if($od->id_status == $st->id)
                        {{$st->name}}
                        @endif
                      @endforeach
                      </td>
                      <td><a href="{{route('quan-ly-don-hang.edit',$od->id)}}">Chi tiết</a></td>
                    </tr>
                    @endforeach
                  @elsecan('agency')
                    @foreach($order as $od)
                    <tr>
                      <td>{{$od->id}}</td>
                      <td>{{$od->name}}</td>
                      <td>{{$od->created_at->format('d/m/Y')}}</td>
                      <td>{{$od->total}}</td>
                      <td>
                      @foreach($status as $st)
                        @if($od->statusOd == $st->id)
                        {{$st->name}}
                        @endif
                      @endforeach
                      </td>
                      <td><a href="{{route('quan-ly-don-hang.edit',$od->idProduct)}}">Chi tiết</a></td>
                    </tr>
                    @endforeach
                  @endcan
                  {{$order->links()}}
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