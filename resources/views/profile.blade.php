@extends('layouts.layout')
@section('title', 'Profile')
@section('content')
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">

            <!-- section title -->
            <div class="col-md-12">
                <div class="section-title">
                    <h3 class="title">profile</h3>
                </div>
            </div>
            
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="panel panel-danger">
              <div class="panel-body box-profile">
                <div class="text-center">
                  <img class=" img-fluid img-circle"
                        style="    border: 3px solid #adb5bd;margin: 0 auto;padding: 3px;width: 100px;"
                       src="dist/img/user4-128x128.jpg"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{Auth::user()->name ?? ''}}</h3>

              </div>
              <!-- /.card-body -->
            </div>
            <div class="panel panel-danger">
              <div class="panel-body box-profile">
                <div class="text-center">
                  <p><a href="{{route('cus-profile',Auth::user()->id)}}">Thông tin của tôi</a></p>
                  <p><a href="{{route('password-index')}}">Đổi mật khẩu</a></p>
                  <p><a href="{{route('history-index',Auth::user()->id)}}">Lịch sử mua hàng</a></p>
                </div>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="panel panel-danger">
              <div class="panel-body">
                <div class="tab-content">
                  <div class="tab-pane active" id="settings">
                    <form class="form-horizontal" id="FormChangeInformation">
                      @csrf
                      <input type="hidden" id="idUser" value="{{Auth::user()->id}}">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-4 col-form-label">Họ tên</label>
                        <div class="col-sm-8">
                          <input type="email" class="form-control" id="nameUserChange" value="{{Auth::user()->name ?? ''}}" name="nameUser" placeholder="Nhập họ và tên">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-4 col-form-label">Email</label>
                        <div class="col-sm-8">
                          <input type="email" class="form-control" value="{{Auth::user()->email ?? ''}}" name="emailUser" readonly>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-4 col-form-label">Điện thoại</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="phoneUserChange" value="{{Auth::user()->phone ?? ''}}" name="phoneUser" placeholder="Nhập số điện thoại mới">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-4 col-form-label">Địa chỉ</label>
                        <div class="col-sm-8">
                          <textarea class="form-control" id="addressUserChange" name="addressUser"  placeholder="Nhập địa chỉ mới">{{Auth::user()->address ?? ''}}</textarea>
                        </div>
                      </div>
                      <!-- <div class="form-group row">
                        <label for="inputSkills" class="col-sm-4 col-form-label">Mật khẩu cũ</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" name="OldPassword" placeholder="Nhập mật khẩu cũ">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-4 col-form-label">Mật khẩu mới</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" name="NewPassWord" placeholder="Nhập mật khẩu mới">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-4 col-form-label">Xác nhận mật khẩu mới</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" name="ConfirmNewPassword" placeholder="Nhập lại mật khẩu mới">
                        </div>
                      </div> -->
                      <div class="form-group row">
                        <div class="col-sm-4">
                        </div>
                        <div class="col-sm-8">
                          <button type="button" id="buttonChangeInfo" class="btn btn-danger">Lưu thay đổi</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <!-- Products tab & slick -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div> 
@endsection