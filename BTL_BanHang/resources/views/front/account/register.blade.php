@extends('front.layout.master')

@section('title', 'Register')

@section('body')
<div id="content-register">
    <div id="breadcrumb">
        <ul>
            <li class="vitri"><a href="../../../../../../../year-2-university/Thiet_ke_web_co_ban/BTL/html/home.html">Trang chủ</a></li>
            <li class="vitrihientai"><p>Đăng ký tài khoản</p></li>
        </ul>
    </div>
    <div class="line"></div>
    <h3 id="hd-dangky">THÔNG TIN CÁ NHÂN</h3>

    @if(session('notification'))
        <div class="alert alert-warning" role="alert">
            {{session('notification')}}
        </div>
    @endif

    <form action="" method="post" id="form-dangky">
        @csrf
        <div class="row-regester">
            <div class="thongtincanhan">
                <label for="name">Name<span class="star">*</span></label><br>
                <input type="text" id="name" name="name">
            </div>
            <div class="thongtincanhan">
                <label for="email">Email address<span class="star">*</span></label><br>
                <input type="email" id="email" name="email">
                <span id="errorEmail" style="display:none; color:red; font-size: 12px; margin-top: 5px;">Vui lòng nhập username</span>
            </div>
            <div class="thongtincanhan">
                <label for="pass">Password<span class="star">*</span></label><br>
                <input type="password" id="pass" name="password">
                <span id="errorSdt" style="display:none; color:red; font-size: 12px; margin-top: 5px;">Vui lòng nhập mat khau</span>
            </div>
            <div class="thongtincanhan">
                <label for="con-pass">Confirm Password<span class="star">*</span></label><br>
                <input type="text" id="con-pass" name="password_confirmation">
                <span id="errorPw" style="display:none; color:red; font-size: 12px; margin-top: 5px;">Vui lòng nhập lai mật khẩu</span>
            </div>
        </div>
        <button type="submit" class="btn-dangky" id="click-dangky">Đăng ký</button>
    </form>
    <div class="btn-dangky-dangnhap">
        <a href="./account/login">Đăng nhập</a>
    </div>
    <div id="login-google-facebook">
        <p>Hoặc đăng nhập bằng</p>
        <div>
            <a href="facebook.com"><img src="https://bizweb.dktcdn.net/assets/admin/images/login/fb-btn.svg" alt="" style="width: 129px; height: 37px;"></a>
            <a href="google.com"><img src="https://bizweb.dktcdn.net/assets/admin/images/login/gp-btn.svg" alt="" style="width: 129px; height: 37px;"></a>
        </div>
    </div>
</div>
@endsection
