@extends('front.layout.master')

@section('title', 'Shop')

@section('body')
<div id="content">
    <div id="content_left">
        <ul class="sidebar">
            <li class="sidebar-danhmuc">
                <i class="fa-solid fa-bars"></i>
                <p>DANH MỤC SẢN PHẨM</p>
            </li>

            <li class="sidebar-aothun">
                <a href="./aophong.html">Áo thun</a>
                <i class="ti-angle-right btn-aothun"></i>
            </li>

            <li class="sidebar-aophong">
                <a href="./aophong.html">Áo phông</a>
                <i class="ti-angle-right btn-aophong"></i>
            </li>

            <li class="sidebar-somi">
                <a href="./aophong.html">Áo sơ mi</a>
                <i class="ti-angle-right btn-somi"></i>
            </li>

            <li class="sidebar-coctay">
                <a href="./aophong.html">Áo cộc tay</a>
                <i class="ti-angle-right btn-coctay"></i>
            </li>

            <li class="sidebar-spmoi">
                <a href="./aophong.html">Sản phẩm mới</a>
                <i class="ti-angle-right btn-spmoi"></i>
            </li>

            <li class="sidebar-noibat">
                <a href="./aophong.html">Sản phẩm nổi bật</a>
            </li>
            <li class="sidebar-banchay">
                <a href="./aophong.html">Sản phẩm bán chạy</a>
            </li>
            <li class="sidebar-xemthem">
                <a href="./aophong.html">Xem thêm</a>
            </li>
        </ul>
        <div class="sp-new">
            <div class="head-new">
                <a href="">SẢN PHẨM BÁN CHẠY</a>
                <a href=""><i class="ti-angle-right"></i></a>
                <a href=""><i class="ti-angle-left"></i></a>
            </div>
            <div id="line"></div>
            <div id="line-second"></div>
        </div>
        <div id="sp_banchay">
            <div class="sp_banchay1">
                <div class="image">
                    <a href="./chi_tiet_sp.html"><img src="front/img_logo/ao_phong_vitage_trang.webp" alt=""></a>
                </div>
                <div class="price">
                    <a href="./chi_tiet_sp.html">Áo phông vitage trắng</a>
                    <div>
                        <p class="gia_tien">250.000đ</p>
                        <p class="giam_gia">310.000đ</p>
                    </div>
                </div>
            </div>
            <div class="sp_banchay1">
                <div class="image">
                    <a href="./chi_tiet_sp.html"><img src="front/img_logo/ao_so_mi_ke_Asos.webp" alt=""></a>
                </div>
                <div class="price">
                    <a href="./chi_tiet_sp.html">Áo sơ mi kẻ Asos</a>
                    <div>
                        <p class="gia_tien">550.000đ</p>
                        <p class="giam_gia">650.000đ</p>
                    </div>
                </div>
            </div>
            <div class="sp_banchay1">
                <div class="image">
                    <a href="./chi_tiet_sp.html"><img src="front/img_logo/ao_so_mi_Asos.webp" alt=""></a>
                </div>
                <div class="price">
                    <a href="./chi_tiet_sp.html">Áo sơ mi Asos ASM08</a>
                    <div>
                        <p class="gia_tien">339.000đ</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="content_right">
        <div class="vitri">
            <p class="ten_tc"><a href="../../../../../../../year-2-university/Thiet_ke_web_co_ban/BTL/html/home.html">Trang chủ</a></p>
            <p class="ten_at">Áo phông</p>
        </div>
        <div class="line_content_right"></div>
        <div class="tieude_aothun"><p>ÁO PHÔNG</p></div>
        <div class="sapxep">
            <form action="">
                <div class="select-option">
                    <select name="sort_by" onchange="this.form.submit();" class="sorting">
                        <option {{request('sort_by')=='latest' ? 'selected' : ''}} value="latest">Mới đến cũ</option>
                        <option {{request('sort_by')=='oldest' ? 'selected' : ''}} value="oldest">Cũ đến mới</option>
                        <option {{request('sort_by')=='name-ascending' ? 'selected' : ''}} value="name-ascending">A -> Z</option>
                        <option {{request('sort_by')=='name-descending' ? 'selected' : ''}} value="name-descending">Z -> A</option>
                        <option {{request('sort_by')=='price-ascending' ? 'selected' : ''}} value="price-ascending">Giá tăng dần</option>
                        <option {{request('sort_by')=='price-descending' ? 'selected' : ''}} value="price-descending">Giá giảm dần</option>
                    </select>
                    <select name="show" onchange="this.form.submit();" class="p-show">
                        <option {{request('show')=='3' ? 'selected' : ''}} value="3">Show: 3</option>
                        <option {{request('show')=='5' ? 'selected' : ''}} value="5">Show: 5</option>
                        <option {{request('show')=='7' ? 'selected' : ''}} value="7">Show: 7</option>
                    </select>
                </div>
            </form>
        </div>
        <div id="sp-main">
            @foreach($products as $product)
                @include('front.components.product-item')
            @endforeach
        </div>
        {{$products->links()}}
    </div>
</div>
@endsection
