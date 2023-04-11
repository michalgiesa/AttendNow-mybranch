$(document).ready(function(){
    $("#theme").click(function(){
        $("#theme2").css("background-color", "#f0a94f");
        $(".bg-light").css("background-color", "#f0a94f !important");
        $(".navbar-light .navbar-nav .nav-link").css("color", "#093644");
$("#logo").attr("src", "image/logo-light.png");
    });
});

for (var i = 0; i < 30; i++) {
    var square = document.createElement("div");
    square.className = "square";
    square.style.left = Math.floor(Math.random() * 120) + "vw";
    square.style.bottom = Math.floor(Math.random() * 120) + "vh";
    document.querySelector(".background").appendChild(square);
}

for (var i = 0; i < 30; i++) {
    var square2 = document.createElement("div");
    square2.className = "square2";
    square2.style.left = Math.floor(Math.random() * 120) + "vw";
    square2.style.bottom = Math.floor(Math.random() * 120) + "vh";
    document.querySelector(".background").appendChild(square2);
}

for (var i = 0; i < 30; i++) {
  var square3 = document.createElement("div");
  square3.className = "square3";
  square3.style.left = Math.floor(Math.random() * 120) + "vw";
  square3.style.bottom = Math.floor(Math.random() * 120) + "vh";
  document.querySelector(".background").appendChild(square3);
}