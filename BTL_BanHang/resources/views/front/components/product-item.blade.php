<div class="sp_khuyenmai">
    <div class="image_khuyenmai">
        <a href="shop/product/{{$product->id}}"><img src="front/img_logo/products/{{$product->productImages[0]->path ?? ''}}" alt="" class="img-src"></a>
        <a href="shop/product/{{$product->id}}" class="buy-now img-4">Mua ngay</a>
    </div>
    <div class="price_khuyenmai">
        <a href="shop/product/{{$product->id}}">{{$product->name}}</a>
        <div>
            @if($product->discount != null)
                <p class="price_giamgia">${{$product->discount}}</p>
                <p class="price_giagoc">${{$product->price}}</p>
            @else
                <p class="price_giagoc">${{$product->price}}</p>
            @endif
        </div>
    </div>
</div>
