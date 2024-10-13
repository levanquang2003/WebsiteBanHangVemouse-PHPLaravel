function renderproduct(){
    var listItem = localStorage.getItem("listItem") ? JSON.parse(localStorage.getItem("listItem")) : [];
    var html=''
    listItem.map(function(item,index){
        return html+=`<div class="cart-content-info">
        <div class="column-1">
            <div class="txt-anhsp">
                <span>Ảnh sản phẩm</span>
            </div>
            <div class="img-sp">
                <img src="${item.img}" alt="">
            </div>
        </div>
        <div class="column-2">
            <div class="txt-tensp">
                <span>Tên sản phẩm</span>
            </div>
            <div class="ten-sp">
                <a href="./chi_tiet_sp.html">${item.name}</a>
                <p>M / Trắng</p>
            </div>
        </div>
        <div class="column-3">
            <div class="txt-dongia">
                <span>Đơn giá</span>
            </div>
            <div class="dongia-sp">
                ${item.price}
            </div>
        </div>
        <div class="column-4">
            <div class="txt-soluong">
                <span>Số lượng</span>
            </div>
            <div class="soluong-sp">
                <div class="minus-plus">
                    <i class="fa-sharp fa-solid fa-minus" id="btn-minus"></i>
                    <input type="number" name="" id="quantity" value="1" maxlength="3" class="input-soluong">
                    <i class="fa-sharp fa-solid fa-plus" id="btn-plus"></i>
                </div>
            </div>
        </div>
        <div class="column-5">
            <div class="txt-thanhtien">
                <span>Thành tiền</span>
            </div>
            <div class="dongia-sp thanhtien-sp"><span id="price">${item.price}</div>
        </div>
        <div class="column-6">
            <div class="txt-delete">
                <span>Xóa</span>
            </div>
            <div class="xoa-sp"><i class="fa-solid fa-trash"></i></div>
        </div>
    </div>`
    })
    var body = document.querySelector('.cart-container')
    body.innerHTML = html
}
renderproduct()