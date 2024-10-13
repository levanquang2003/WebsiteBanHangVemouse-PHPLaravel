<link rel="stylesheet" href="front/css/home.css">
@extends('front.layout.master')

@section('title', 'Home')

@section('body')
<div class="content-home">
    <div class="content1">
        <ul class="sidebar-home">
            <li class="sidebar-danhmuc">
                <i class="fa-solid fa-bars"></i>
                <p>DANH MỤC SẢN PHẨM</p>
            </li>

            <li class="sidebar-aothun">
                <a href="./Ao_thun.html">Áo thun</a>
                <i class="ti-angle-right btn-aothun"></i>
            </li>

            <li class="sidebar-aophong">
                <a href="./Ao_phong.html">Áo phông</a>
                <i class="ti-angle-right btn-aophong"></i>
            </li>

            <li class="sidebar-somi">
                <a href="./Ao_so_mi.html">Áo sơ mi</a>
                <i class="ti-angle-right btn-somi"></i>
            </li>

            <li class="sidebar-coctay">
                <a href="./Ao_coc_tay.html">Áo cộc tay</a>
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
        <div id="banner1"><img id="banner-big" src="front/img_logo/banner1.webp"></div>
    </div>
    <div id="content2">
        <div id="layer01">
            <div id="content-left">
                <div class="sp-new">
                    <div class="head-new">
                        <a href="./aophong.html">SẢN PHẨM BÁN CHẠY</a>
                        <i class="ti-angle-right" ></i>
                        <i class="ti-angle-left" ></i>
                    </div>
                    <div id="line"></div>
                    <div id="line-second"></div>
                </div>
                <div id="sp_banchay">
                    <div class="sp_banchay1">
                        <div class="image">
                            <a href="./Ao_phong_vitage.html"><img src="front/img_logo/ao_phong_vitage_trang.webp" alt=""></a>
                        </div>
                        <div class="price">
                            <a href="./Ao_phong_vitage.html">Áo phông vitage trắng</a>
                            <div>
                                <p class="gia_tien">250.000đ</p>
                                <p class="giam_gia">310.000đ</p>
                            </div>
                        </div>
                    </div>
                    <div class="sp_banchay1">
                        <div class="image">
                            <a href="./ao_so_mi_ke_Asos.html"><img src="front/img_logo/ao_so_mi_ke_Asos.webp" alt=""></a>
                        </div>
                        <div class="price">
                            <a href="./ao_so_mi_ke_Asos.html">Áo sơ mi kẻ Asos</a>
                            <div>
                                <p class="gia_tien">550.000đ</p>
                                <p class="giam_gia">650.000đ</p>
                            </div>
                        </div>
                    </div>
                    <div class="sp_banchay1">
                        <div class="image">
                            <a href="./Ao_so_mi_Asos_ASM10.html"><img src="front/img_logo/ao_so_mi_Asos.webp" alt=""></a>
                        </div>
                        <div class="price">
                            <a href="./Ao_so_mi_Asos_ASM10.html">Áo sơ mi Asos ASM08</a>
                            <div>
                                <p class="gia_tien">339.000đ</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sp-new">
                    <div class="head-new">
                        <a href="/tintuc.html">TIN TỨC</a>
                    </div>
                    <div id="line"></div>
                    <div id="line-second"></div>
                </div>
                <div id="tintuc">
                    <div id="banner4">
                        <a href="./tintuc1.html"><img src="front/img_logo/thoi-trang-tham-hoa.webp" alt=""></a>
                    </div>
                    <div id="nd_tintuc">
                        <div id="h_tintuc">
                            <a href="./tintuc1.html"><h3>Khi thời trang là thảm họa thì sẽ như thế nào ?</h3></a>
                            <div id="tacgia">
                                <div id="name">
                                    <i class="fa-sharp fa-solid fa-circle-user"></i>
                                    <p>Nguyễn Ngọc Dũng</p>
                                </div>
                                <div id="time">
                                    <i class="fa-sharp fa-regular fa-clock"></i>
                                    <p>31/05/2016</p>
                                </div>
                            </div>
                            <p id="nd_content">Trong các tuần lễ thời trang, ngoài thời trang của các sao là vấn đề gây chú ý thì thời trang của các fashionista cũng là một chủ đề được...</p>
                        </div>
                        <div id="body_tintuc">
                            @foreach($blogs as $blog)
                                <div class="body_tintuc_nd">
                                    <div class="body_nd">
                                        <i class="fa-sharp fa-solid fa-play"></i>
                                        <p><a href="./tintuc2.html">{{$blog->title}}</a></p>
                                    </div>
                                    <div class="body_time">
                                        {{date('M-d-Y', strtotime($blog->created_at))}}
                                    </div>
                                    <div class="body_line"></div>
                                </div>
                            @endforeach
                        </div>
                        <div id="footer_tintuc">
                            <div class="footer_tintuc_nd">
                                <div class="footer_icons">
                                    <i class="fa-sharp fa-solid fa-phone-volume"></i>
                                </div>
                                <div class="footer_nd">
                                    <p>Hỗ trợ trực tuyến 24/7</p>
                                    <a href="./home.html">19006750</a>
                                </div>
                            </div>
                            <div class="footer_line"></div>
                            <div class="footer_tintuc_nd">
                                <div class="footer_icons">
                                    <i class="fa-sharp fa-solid fa-rotate-left"></i>
                                </div>
                                <div class="footer_nd">
                                    <p>Đổi trả hàng trong ngày</p>
                                    <a href="./home.html">19006750</a>
                                </div>
                            </div>
                            <div class="footer_line"></div>
                            <div class="footer_tintuc_nd">
                                <div class="footer_icons">
                                    <i class="fa-sharp fa-solid fa-truck"></i>
                                </div>
                                <div class="footer_nd">
                                    <p>Miễn phí vận chuyển</p>
                                    <a href="./home.html">19006750</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- content right -->
            <div id="content-right-home">
                <div class="sp-new">
                    <div class="head-new">
                        <a href="./Ao_phong.html">SẢN PHẨM MỚI</a>
                        <a ><i class="ti-angle-right" onclick="clickRight()"></i></a>
                        <a ><i class="ti-angle-left" onclick="clickLeft()"></i></a>
                    </div>
                    <div id="line"></div>
                    <div id="line-second"></div>
                </div>
                <div id="tab1">
                    <div id="sp-main-home">
                        @foreach($featuredProducts['men'] as $product)
                            @include('front.components.product-item')
                        @endforeach
                    </div>
                </div>
                <div id="banner_second">
                    <div class="banner2">
                        <a href="./home.html"><img src="front/img_logo/banner_1.webp" alt="Banner1"></a>
                    </div>
                    <div class="banner2">
                        <a href="./home.html"><img src="front/img_logo/banner_2.webp" alt="Banner2"></a>
                    </div>
                </div>
                <div class="sp-new">
                    <div class="head-new">
                        <a href="./aophong.html">SẢN PHẨM KHUYẾN MÃI</a>
                        <a ><i class="ti-angle-right"></i></a>
                        <a ><i class="ti-angle-left"></i></a>
                    </div>
                    <div id="line"></div>
                    <div id="line-second"></div>
                </div>
                <div id="tab3">
                    <div id="sp-main-khuyenmai">
                        @foreach($featuredProducts['women'] as $product)
                            @include('front.components.product-item')
                        @endforeach
                    </div>
                </div>

                <div class="sp-new">
                    <div class="head-new">
                        <a href="./aophong.html">SẢN PHẨM NỔI BẬT</a>
                        <a ><i class="ti-angle-right"></i></a>
                        <a ><i class="ti-angle-left"></i></a>
                    </div>
                    <div id="line"></div>
                    <div id="line-second"></div>
                </div>
                <div id="sp-main-khuyenmai">
                    @foreach($featuredProducts['women'] as $product)
                        @include('front.components.product-item')
                    @endforeach

                </div>

                <div id="banner_end">
                    <a href="./home.html"><img src="front/img_logo/banner_3.webp" alt=""></a>
                </div>
                <div class="sp-new">
                    <div class="head-new">
                        <a href="./aophong.html">SẢN PHẨM MUA NHIỀU</a>
                        <a ><i class="ti-angle-right"></i></a>
                        <a ><i class="ti-angle-left"></i></a>
                    </div>
                    <div id="line"></div>
                    <div id="line-second"></div>
                </div>
                <div id="sp-main-khuyenmai">
                    @foreach($featuredProducts['women'] as $product)
                        @include('front.components.product-item')
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
