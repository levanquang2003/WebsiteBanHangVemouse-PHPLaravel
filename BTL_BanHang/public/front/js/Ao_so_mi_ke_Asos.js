//-------------------image hien thi------------------------------
function changeImg(evtimg, imgId) {
  // Ẩn tất cả img-chinh-click
  const imgchinh = document.getElementsByClassName("img-chinh-click");
  for (let i = 0; i < imgchinh.length; i++) {
    imgchinh[i].style.display = "none";
  }

  // Xóa class "active" của tất cả các img-phu-click
  const imgphu = document.getElementsByClassName("img-phu-click");
  for (let i = 0; i < imgphu.length; i++) {
      imgphu[i].classList.remove("active");
  }

   // Hiển thị img-chinh-click được chọn và thêm class "active" cho img-phu-click tương ứng
  document.getElementById(imgId).style.display = "block";
  evtimg.currentTarget.classList.add("active");
}

//-------------------Thong tin san pham--------------------------
function changeTab(evt, tabId) {
    // Ẩn tất cả ndthongtin
    const ndthongtin = document.getElementsByClassName("ndthongtin");
    for (let i = 0; i < ndthongtin.length; i++) {
      ndthongtin[i].style.display = "none";
    }

    // Xóa class "active" của tất cả các thongtin
    const thongtin = document.getElementsByClassName("thongtin");
    for (let i = 0; i < thongtin.length; i++) {
        thongtin[i].classList.remove("active");
    }

     // Hiển thị ndthongtin được chọn và thêm class "active" cho thongtin tương ứng
    document.getElementById(tabId).style.display = "block";
    evt.currentTarget.classList.add("active");
}

//---------------------Zoom anh----------------------------------
let imgList = document.querySelectorAll('.img_chinh img')
let mirror = document.querySelector('#mirror')
let scope = 4

imgList.forEach(function(img){
  img.addEventListener('mousemove', function(e){
    mirror.classList.remove('hide')
    var percentMouseOfWidth = (e.offsetX / this.offsetWidth) * 100
    var percentMouseOfHeight = (e.offsetY / this.offsetHeight) * 100
    mirror.style.top = `${e.clientY}px`
    mirror.style.left = `${e.clientX}px`
    mirror.style.backgroundSize =  `1000px 1000px`
    mirror.style.backgroundPosition = `${percentMouseOfWidth}% ${percentMouseOfHeight}%`

    var imgSource = e.target.getAttribute('src')
    mirror.style.backgroundImage = `url(${imgSource})`

  })

  img.addEventListener('mouseleave', function(e){
    mirror.classList.add('hide')
  })
})

//---------------------tăng giảm số lượng-----------------------------
const plusButton = document.getElementById("btn-plus");
const minusButton = document.getElementById("btn-minus");
const quantityInput = document.getElementById("quantity");

plusButton.addEventListener("click", function() {
  let quantity = parseInt(quantityInput.value);
  quantityInput.value = quantity + 1;
});

minusButton.addEventListener("click", function() {
  let quantity = parseInt(quantityInput.value);
  if (quantity > 1) {
    quantityInput.value = quantity - 1;
  }
});

