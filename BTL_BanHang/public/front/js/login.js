var inputEmail = document.getElementById("myEmail");
var errorEmail = document.getElementById("errorEmail");
var clickdangnhap = document.getElementById("click-dangnhap");

inputEmail.addEventListener("blur", function() {
    if (inputEmail.value == "") {
        errorEmail.style.display = "block";
    } else {
        errorEmail.style.display = "none";
    }
});

var inputPw = document.getElementById("myPassword");
var errorPw = document.getElementById("errorPw");
inputPw.addEventListener("blur", function() {
    if (inputPw.value == "") {
        errorPw.style.display = "block";
    } else {
        errorPw.style.display = "none";
    }
});

clickdangnhap.addEventListener("click", function() {
    if (inputEmail.value == "" || inputPw.value == "") {
        alert("bạn chưa nhập đủ email hoặc mật khẩu !")
    } else {
        errorEmail.style.display = "none";
        errorPw.style.display = "none";
    }
});
