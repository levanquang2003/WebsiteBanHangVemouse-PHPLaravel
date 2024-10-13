var inputHo = document.getElementById("ho");
var errorHo = document.getElementById("errorHo");

inputHo.addEventListener("blur", function() {
    if (inputHo.value == "") {
        errorHo.style.display = "block";
    } else {
        errorHo.style.display = "none";
    }
});

var inputTen = document.getElementById("ten");
var errorTen = document.getElementById("errorTen");

inputTen.addEventListener("blur", function() {
    if (inputTen.value == "") {
        errorTen.style.display = "block";
    } else {
        errorTen.style.display = "none";
    }
});

var inputEmail = document.getElementById("email");
var errorEmail = document.getElementById("errorEmail");

inputEmail.addEventListener("blur", function() {
    if (inputEmail.value == "") {
        errorEmail.style.display = "block";
    } else {
        errorEmail.style.display = "none";
    }
});

var inputSdt = document.getElementById("sdt");
var errorSdt = document.getElementById("errorSdt");

inputSdt.addEventListener("blur", function() {
    if (inputSdt.value == "") {
        errorSdt.style.display = "block";
    } else {
        errorSdt.style.display = "none";
    }
});

var inputPw = document.getElementById("pw");
var errorPw = document.getElementById("errorPw");
inputPw.addEventListener("blur", function() {
    if (inputPw.value == "") {
        errorPw.style.display = "block";
    } else {
        errorPw.style.display = "none";
    }
});

var clickdangky = document.getElementById("click-dangky")
clickdangky.addEventListener("click", function() {
    if (inputEmail.value == "" || inputPw.value == "" || inputHo.value == "" || inputTen.value == "" || inputSdt.value == "") {
        alert("bạn chưa nhập đủ thông tin !")
    } else {
        errorEmail.style.display = "none";
        errorPw.style.display = "none";
        errorHo.style.display = "none";
        errorTen.style.display = "none";
        errorSdt.style.display = "none";
    }
});
