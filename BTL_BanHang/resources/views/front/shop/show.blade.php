@extends('front.layout.master')

@section('title', 'Product')

@section('body')
<div id="content-vitage">
    <div id="breadcrumb">
        <ul>
            <li class="vitri"><a href="./home.html">Trang chủ</a></li>
            <li class="vitri"><a href="./aophong.html">Áo cộc tay</a></li>
            <li class="vitrihientai"><p>Áo phông vitage trắng</p></li>
        </ul>
    </div>
    <div class="line"></div>
    <div class="sp_chinh">
        <div class="img_sp">
            <div class="img_chinh">
                <img src="front/img_logo/products/{{$product->productImages[0]->path ?? ''}}" alt="" class="img-chinh-click" id="img-chinh-1">
                <img src="front/img_logo/Ao_coc_tay/Ao_coc_tay2.webp" alt="" class="img-chinh-click" id="img-chinh-2" style="display: none;">
                <div id="mirror"></div>
            </div>
            <div class="img_phu">
                @foreach($product->productImages as $productImage)
                    <div class="img-phu-click" data-imgbigurl="front/img_logo/products/{{$productImage->path}}">
                        <img src="front/img_logo/products/{{$productImage->path}}" alt="">
                    </div>
                @endforeach
            </div>
        </div>
        <div class="thongtinsp">
            <h1>{{$product->name}}</h1>
            <div class="price">
                @if($product->discount != null)
                    <p class="price_giamgia">${{$product->discount}}</p>
                    <p class="price_giagoc">${{$product->price}}</p>
                @else
                    <p class="price_giagoc">${{$product->price}}</p>
                @endif

            </div>
            <p class="mota">{{$product->content}}</p>
            <div class="line"></div>
            <div class="size-color">
                <div class="size">
                    <p>Size</p>
                    <select name="list-size" id="select-size" class="select-size-color">
                        @foreach(array_unique(array_column($product->productDetails->toArray(), 'size')) as $productSize)
                            <option value="{{ $productSize }}">{{ $productSize }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="color">
                    <p>Màu sắc</p>
                    <select name="list-color" id="select-color" class="select-size-color">
                        @foreach(array_unique(array_column($product->productDetails->toArray(), 'color')) as $productColor)
                            <option value="{{ $productColor }}">{{ $productColor }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="gio_hang">
                <div class="soluong"><p>Số lượng</p></div>
                <div class="tang_giam">
                    <input type="number" id="quantity" value="1" maxlength="3" class="txt_soluong">
                    <div class="btn_tanggiam">
                        <button class="btn_num" id="btn-plus" type="button"><i class="fa-solid fa-plus"></i></button>
                        <button class="btn_num" id="btn-minus" type="button"><i class="fa-solid fa-minus"></i></button>
                    </div>
                </div>
                <div class="btn_them"><a href="">Cho vào giỏ hàng</a></div>
            </div>
            <div class="tag">
                <span>Tags: <a href="">{{$product->tag}}</a></span>
            </div>
            <div class="share">
                <p>Share: </p>
                <a href=""><i class="fa-brands fa-facebook fa-beat"></i></a>
                <a href=""><i class="fa-brands fa-twitter fa-beat"></i></a>
                <a href=""><i class="fa-brands fa-pinterest fa-beat"></i></a>
                <a href=""><i class="fa-brands fa-google fa-beat"></i></a>
            </div>
        </div>
    </div>
    <div id="motasp">
        <div class="bangthongtin">
            <button class="thongtin thongtinsp1" onclick="changeTab(event, 'motathongtin')">
                <h3>THÔNG TIN SẢN PHẨM</h3>
            </button>
            <button class="thongtin huongdan" onclick="changeTab(event, 'vietnd')">
                <h3>HƯỚNG DẪN MUA HÀNG</h3>
            </button>
        </div>
        <div>
            <div class="ndthongtin" id="motathongtin">
                {!! $product->description !!}
            </div>
            <div class="ndthongtin" id="vietnd" style="display: none;">
                <p>Nội dung tùy chỉnh viết ở đây</p>
            </div>
        </div>
    </div>
    <div class="sp-new">
        <div class="head-new">
            <a href="./aophong.html">SẢN PHẨM LIÊN QUAN</a>
            <a href=""><i class="ti-angle-right"></i></a>
            <a href=""><i class="ti-angle-left"></i></a>
        </div>
        <div id="line"></div>
        <div id="line-second"></div>
    </div>
    <div id="sp-main-khuyenmai">
        @foreach($relatedProducts as $product)
            @include('front.components.product-item')
        @endforeach
    </div>
</div>
@endsection
