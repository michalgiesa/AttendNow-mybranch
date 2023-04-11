window.onload = function() {
  setTimeout(function() {
    var loader = document.querySelector('.loader');
    var content = document.querySelector('.content');
    loader.classList.add('fade-out');
    setTimeout(function() {
      loader.style.display = 'none';
      content.style.display = 'block';
    }, 500);
  }, 500);
}

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
