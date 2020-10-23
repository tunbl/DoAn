@extends('layouts.layout')

@section('title', 'Đăng ký')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <form id="formRegister" >
                @csrf
                <div class="form-group">
                    <label>Họ tên</label>
                    <input type="text" id="nameUser" name="nameUser" class="form-control" placeholder="Nhập họ và tên">
                </div>
                <span class="errorNameUser"></span>
                <div class="form-group">
                    <label>Số điện thoại</label>
                    <input type="text" id="phoneUser" name="phoneUser" class="form-control" placeholder="Nhập số điện thoại">
                </div>
                <span class="errorPhoneUser"></span>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" id="emailUser" name="emailUser" class="form-control" placeholder="Nhập email">
                </div>
                <span class="errorEmailUser"></span>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" id="passwordUser" name="passwordUser" class="form-control" placeholder="Nhập mật khẩu">
                </div>
                <span class="errorPasswordUser"></span>
                <div class="form-group">
                    <label>Địa chỉ</label>
                    <textarea id="addressUser" name="addressUser" class="form-control" placeholder="Ex: 10 Hà Huy Giáp, phường Bình Thạnh, Hồ Chí Minh"></textarea>
                </div>
                <p class="errorAddressUser"></p>
                <button type="button" id="submitRegisterForm" class="btn btn-primary">Đăng ký</button>
            </form>
        </div>
    </div>
</div>
@endsection