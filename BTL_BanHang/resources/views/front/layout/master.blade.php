<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{{asset('/')}}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="front/css/home.css">
    <link rel="stylesheet" href="front/css/Ao_phong_vitage.css">
    <link rel="stylesheet" href="front/css/Ao_phong.css">
    <link rel="stylesheet" href="front/css/dangnhap.css">
    <link rel="stylesheet" href="front/css/dangky.css">
    <script src="front/js/Ao_so_mi_ke_Asos.js"></script>
    <script src="front/js/login.js"></script>
    <script src="front/js/register.js"></script>
    <link rel="stylesheet" href="front/front_icon/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="front/front_icon/fontawesome-icons/fontawesome-free-6.3.0-web/css/all.css">
    <link rel="shortcut icon" href="front/img_logo/web_icon.webp" type="image/png">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
<div id="header">
    <div id="header-top">
        <div id="h_left">
            <ul>
                <li><a href="./dangky.html">Đăng ký</a></li>
                <li class="float">
                    @if(Auth::check())
                        <a href="./account/logout" class="login-panel">
                            <i class="fa fa-user"></i>
                            {{Auth::user()->name}} - Logout
                        </a>
                    @else
                        <a href="./account/login">Đăng nhập</a>
                    @endif
                </li>
            </ul>
        </div>
        <div id="h_right">
            <ul>
                <li><a href="">Hướng dẫn</a></li>
                <li class="float"><a href="./giohang.html">Đơn hàng</a></li>
            </ul>
        </div>
    </div>
    <div id="header-content">
        <div id="header-logo">
            <a href=""><img src="https://bizweb.dktcdn.net/100/091/100/themes/880371/assets/logo.png?1676015176971" alt=""></a>
        </div>
        <div id="header-icons">
            <div id="icons-left">
                <i class="fa-sharp fa-solid fa-truck"></i>
                <div class="icons-nd">
                    <p class="green">Miễn phí vận chuyển</p>
                    <span>Với đơn hàng trị giá trên <b>1.000.000đ</b></span>
                </div>
            </div>
            <div id="icons-right">
                <i class="fa-sharp fa-solid fa-phone"></i>
                <div class="icons-nd">
                    <p class="green">Đặt hàng nhanh</p>
                    <span>Gọi ngay <a href="" class="sdt-home">19006750</a></span>
                </div>
            </div>
        </div>
        <div id="header-bag">
            <a href="./giohang.html"> <i class="fa-sharp fa-solid fa-bag-shopping"></i></a>
            <div class="icons-nd-home">
                <a href="./giohang.html"><p class="green-home">Giỏ hàng</p></a>
                <a href="./giohang.html" class="color-black-home"><span>(0)</span> Sản phẩm</a>
            </div>
        </div>
    </div>
    <div id="header-bottom">
        <ul id="list-content">
            <li class="list-child home" class="{{(request()->segment(1)=='') ? 'active' : ''}}"><a href="./">TRANG CHỦ</a></li>
            <li class="list-child" ><a href="./home.html">GIỚI THIỆU</a></li>
            <li class="list-child nav-home" class="{{(request()->segment(1)=='shop') ? 'active' : ''}}">
                <a href="./shop">SẢN PHẨM</a>
                <i class="fa-solid fa-chevron-down"></i>
                <ul class="subnav">
                    <li><a href="./Ao_phong.html">Áo Thun</a><i class="fa-solid fa-angle-right"></i></li>
                    <li><a href="./Ao_phong.html">Áo phông</a><i class="fa-solid fa-angle-right"></i></li>
                    <li><a href="./Ao_so_mi.html">Áo sơ mi</a><i class="fa-solid fa-angle-right"></i></li>
                    <li><a href="./aophong.html">Áo cộc tay</a><i class="fa-solid fa-angle-right"></i></li>
                    <li><a href="./aophong.html">Sản phẩm mới</a><i class="fa-solid fa-angle-right"></i></li>
                    <li><a href="./aophong.html">Sản phẩm nổi bật</a></li>
                    <li><a href="./aophong.html">Sản phẩm bán chạy</a></li>
                    <li><a href="./aophong.html">Sản phẩm khuyến mãi</a></li>
                </ul>
            </li>
            <li class="list-child"><a href="./home.html">TIN TỨC</a></li>
            <li class="list-child"><a href="./home.html">LIÊN HỆ</a></li>
        </ul>
        <form action="shop" id="search-parent">
            <input id="search" name="search" value="{{request('search')}}" type="text" placeholder="Tim kiem...">
            <button class="click-search" type="submit"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></button>
        </form>
    </div>
</div>

{{--body here--}}
@yield('body')

<div id="footer">
    <div id="width90">
        <div id="ft_left">
            <div id="logo">
                <a href=""><img src="front/img_logo/logo (1).webp" alt=""></a>
            </div>
            <div class="ft_left_thongtin">
                <i class="fa-sharp fa-solid fa-location-dot"></i>
                <p>Tầng 6 266 Đội Cấn - Ba Đình - Hà Nội, Hà Nội</p>
            </div>
            <div class="ft_left_thongtin">
                <i class="fa-sharp fa-solid fa-phone"></i>
                <a href="./home.html" class="thongtinhover">1900 6750</a>
            </div>
            <div class="ft_left_thongtin">
                <i class="fa-sharp fa-regular fa-envelope"></i>
                <a href="./home.html" class="thongtinhover">hellocafein@gmail.com</a>
            </div>
        </div>
        <div id="ft_right">
            <div class="ft_right_thongtin">
                <h3>TÀI KHOẢN</h3>
                <a href="./home.html">Trang chủ</a>
                <a href="./home.html">Giới thiệu</a>
                <a href="./home.html">Sản phẩm</a>
                <a href="./home.html">Tin tức</a>
                <a href="./home.html">Liên hệ</a>
            </div>
            <div class="ft_right_thongtin">
                <h3>CHÍNH SÁCH</h3>
                <a href="./home.html">Trang chủ</a>
                <a href="./home.html">Giới thiệu</a>
                <a href="./home.html">Sản phẩm</a>
                <a href="./home.html">Tin tức</a>
                <a href="./home.html">Liên hệ</a>
            </div>
            <div class="ft_right_thongtin">
                <h3>ĐIỀU KHOẢN</h3>
                <a href="./home.html">Trang chủ</a>
                <a href="./home.html">Giới thiệu</a>
                <a href="./home.html">Sản phẩm</a>
                <a href="./home.html">Tin tức</a>
                <a href="./home.html">Liên hệ</a>
            </div>
            <div class="ft_right_thongtin">
                <h3>HƯỚNG DẪN</h3>
                <a href="./home.html">Trang chủ</a>
                <a href="./home.html">Giới thiệu</a>
                <a href="./home.html">Sản phẩm</a>
                <a href="./home.html">Tin tức</a>
                <a href="./home.html">Liên hệ</a>
            </div>
        </div>
    </div>
</div>
<script src="home.js"></script>
</body>
</html>

