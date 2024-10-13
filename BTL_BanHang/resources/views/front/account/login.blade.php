@extends('front.layout.master')

@section('title', 'Login')

@section('body')
<div id="content-login">
    <div id="breadcrumb">
        <ul>
            <li class="vitri"><a href="../../../../../../../year-2-university/Thiet_ke_web_co_ban/BTL/html/home.html">Trang chủ</a></li>
            <li class="vitrihientai"><p>Đăng nhập tài khoản</p></li>
        </ul>
    </div>
    <div class="line"></div>
    <div class="content-login">
        <div class="login-left">
            <h3 id="hd-dangky">THÔNG TIN CÁ NHÂN</h3>

            @if(session('notification'))
                <div class="alert alert-warning" role="alert">
                    {{session('notification')}}
                </div>
            @endif

            <form action="" method="post" id="form-dangky">
                @csrf
                <div class="row">
                    <div class="thongtincanhan">
                        <label for="email">Email<span class="star">*</span></label><br>
                        <input type="email" id="email" name="email">
                        <span id="errorEmail" style="display:none; color:red; font-size: 12px; margin-top: 5px;">Vui lòng nhập email</span>
                    </div>
                </div>
                <div class="row">
                    <div class="thongtincanhan">
                        <label for="pass">Mật khẩu<span class="star">*</span></label><br>
                        <input type="password" id="pass" name="password">
                        <span id="errorPw" style="display:none; color:red; font-size: 12px; margin-top: 5px;">Vui lòng nhập mật khẩu</span>
                    </div>
                </div>
                <div class="gi-check">
                    <label for="save-pass">
                        Save Password
                        <input type="checkbox" id="save-pass" name="remember">
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="btn-dangky-dangnhap">
                    <button type="submit" class="btn-dangnhap" id="click-dangnhap">Đăng nhập</button>
                    <a href="../../../../../../../year-2-university/Thiet_ke_web_co_ban/BTL/html/quen_mk.html">Quên mật khẩu ?</a>
                </div>
            </form>
            <div id="login-google-facebook">
                <p>Hoặc đăng nhập bằng</p>
                <div>
                    <a href="facebook.com"><img src="https://bizweb.dktcdn.net/assets/admin/images/login/fb-btn.svg" alt="" style="width: 129px; height: 37px;"></a>
                    <a href="google.com"><img src="https://bizweb.dktcdn.net/assets/admin/images/login/gp-btn.svg" alt="" style="width: 129px; height: 37px;"></a>
                </div>
            </div>
        </div>
        <div class="login-right">
            <h3><a href="">bạn chưa có tài khoản</a></h3>
            <p>Đăng ký tài khoản ngay để có thể mua hàng nhanh chóng và dễ dàng hơn ! Ngoài ra còn có rất nhiều chính sách và ưu đãi cho các thành viên Vemouse</p>
            <a href="./account/register" class="btn-dangky">Đăng ký</a>
        </div>
    </div>
</div>
@endsection
