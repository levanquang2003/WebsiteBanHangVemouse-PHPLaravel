//------------------sidebar home----------------
var aothun = document.querySelector(".btn-aothun")
var aophong = document.querySelector(".btn-aophong")
var somi = document.querySelector(".btn-somi")
var coctay = document.querySelector(".btn-coctay")
var spmoi = document.querySelector(".btn-spmoi")

var listaophong = document.querySelector(".aophong-list")
listaophong.style.display = 'none'
var listaothun = document.querySelector(".aothun-list")
listaothun.style.display = 'none'
var listsomi = document.querySelector(".somi-list")
listsomi.style.display = 'none'
var listcoctay = document.querySelector(".coctay-list")
listcoctay.style.display = 'none'
var listspmoi = document.querySelector(".spmoi-list")
listspmoi.style.display = 'none'

aothun.addEventListener("click",function(){
    if(listaothun.style.display == 'none')
    {
        listaothun.style.display = 'block'
    }
    else{
        listaothun.style.display = 'none'
    }
})

aophong.addEventListener("click",function(){
    if(listaophong.style.display === 'none')
    {
        listaophong.style.display = 'block'
    }
    else{
        listaophong.style.display = 'none'
    }
})

somi.addEventListener("click",function(){
    if(listsomi.style.display === 'none')
    {
        listsomi.style.display = 'block'
    }
    else{
        listsomi.style.display = 'none'
    }
})

coctay.addEventListener("click",function(){
    if(listcoctay.style.display === 'none')
    {
        listcoctay.style.display = 'block'
    }
    else{
        listcoctay.style.display = 'none'
    }
})

spmoi.addEventListener("click",function(){
    if(listspmoi.style.display === 'none')
    {
        listspmoi.style.display = 'block'
    }
    else{
        listspmoi.style.display = 'none'
    }
})


//--------------------
function clickRight()
{
    document.getElementById("tab2").style.display="block";
    document.getElementById("tab1").style.display="none";
}
function clickLeft()
{   
    document.getElementById("tab1").style.display="block";
    document.getElementById("tab2").style.display="none";
}



var muahang = document.querySelectorAll(".buy-now")
muahang.forEach(function(item){
    item.addEventListener("click", function(e){
        var itemX = e.target
        var itemY = itemX.parentElement
        var item = itemY.parentElement
        var img = item.querySelector('.image a img').src
        var name = item.querySelector('.price a').innerHTML
        var price = item.querySelector('.price .gia_tien').innerHTML
        sendproduct(img,name,price)
    })
})

function sendproduct(img, name, price) {
    try {
      var listItem = localStorage.getItem("listItem") ? JSON.parse(localStorage.getItem("listItem")) : [];
      
      listItem.push({
        img: img,
        name: name,
        price: price,
        amount: 1
      });
  
      localStorage.setItem("listItem", JSON.stringify(listItem));
    } catch (error) {
      console.log("Error saving product:", error);
    }
  }