<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<header>
<div class="m-4" >
<div class="background"></div>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a href="index.php" class="navbar-brand"><img src="image/logo-dark.png" style="height: auto; width:100px;"></a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <img src="image/menu.png">
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="index.php" class="nav-item nav-link">Strona główna</a>
                    <a href="event.php" class="nav-item nav-link">Popularne</a>
                    <a href="contact.php" class="nav-item nav-link">Kontakt</a>
                </div>
                <div class="navbar-nav ms-auto">
                    <a href="search.php" id="search" class="nav-item nav-link"><img src="image/search.png"></a>
                    <button class="setting" data-bs-toggle="modal" data-bs-target="#myModal"><img src ="image/settings.png"></button>
                    <a href="login.php" class="nav-item nav-link" id="login"><img src="image/login-dark.png"></a>                    
                </div>
            </div>
        </div> 
    </nav>    
</div>
        <div class="row">
          <div class="col" style="margin-left: 50%;">
            <div class="modal fade settings-modal" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-end modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Opcje</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  </div>
                  <div class="leftOption modal-content card" style="height:50%; height:20em;">
                    <button class="btn-warning" id="account">Ustawienia  konta</button>
                    <button class="btn-warning" id="events"> <a href="fav_events.php" class="nav-item nav-link" style="color:#5d3f58">Obserwowane</button></a>
                    <button class="btn-warning" id="customization">Personalizacja</button>
                    <button class="btn-warning" id="choose">Język</button>
                  </div>
                  <div class="rightOption modal-content card" style="height:50%; height:20em;">
                  <div class="account">
                    <p id="colorSetting">Twój adres e-mail:</p>
                    <p id="colorAnswer">test123@gmail.com</p>
                    <p id="colorSetting">Hasło<a class="nav-item nav-link" href="change_password.php"><button id="changePass" class="btn-warning">Zmień hasło</button></p></a>
                  </div>
                  <div class="events">
                    <p id="colorSetting">Moje wydarzenia</p>
                    <div style="overflow-x:auto">
                    <table class="table" id="myEvents">
                      <tr>
                        <th>Nazwa</th>
                        <th>Data</th>
                        <th>Godzina</th>
                        <th>Miejscowośc</th>
                      </tr>
                      <tr>
                        <td>Koncert</td>
                        <td>02.04.2023</td>
                        <td>20:00</td>
                        <td>Opole</td>
                      </tr>
                    </table>
                    </div>
                  </div>
                  <div class="customization">
                    <p id="colorSetting">Personalizacja</p>
                  </div>
                  <div class="choose">
                    <p id="colorSetting">Wybierz język</p>
                    <button class="btn"><img class="navbar-toggler" src="image/britain.png" width="25%" height="12%"></button>
                    <button class="btn"><img class="navbar-toggler" src="image/poland.png" width="25%" height="12%"></button>
                </div>
            </div>
          </div>
        </div>
</header>
</body>
<script>

$(document).ready(function(){
  $(".events").hide();
  $(".customization").hide();
  $(".choose").hide();
})
$(document).ready(function(){
  $("#account").click(function(){
    $(".events").hide();
    $(".customization").hide();
    $(".choose").hide();
  });

  $("#account").click(function(){
    $(".account").show();
  });
});


$(document).ready(function(){
  $("#customization").click(function(){
    $(".account").hide();
    $(".events").hide();
    $(".choose").hide();
  });

  $("#customization").click(function(){
    $(".customization").show();
  });
});

$(document).ready(function(){
  $("#choose").click(function(){
    $(".account").hide();
    $(".events").hide();
    $(".customization").hide();
  });

  $("#choose").click(function(){
    $(".choose").show();
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

</script>
<style>
@import url('https://fonts.googleapis.com/css2?family=Goldman&display=swap');
/*.btn{
    background-color: #ff981a!important;
    border-color: #5d3f58!important;
    margin: 0.2em;
    color: black!important;
    opacity: 0.4;
}
.btn:hover{
    opacity: 1;
    transition: all 0.1s ease-in-out;
}
*/
#changePass, #account, #events, #customization, #choose
{
  background-color:#ff981a;
  color: #5d3f58;
  border-color:#ff981a;
}

#colorSetting
{
  margin-top:0.5em;
}
#myEvents
{
  border-color: #ff981a;
}

#colorAnswer
{
  color:white;
}

.modal-content
{
  background-color:transparent;
}

.nav-item .nav-link:hover{
  color: #333;
}

.modal-header
{
  background-color: #ff981a;
  color: #5d3f58;
  border-radius: inherit;
  border-bottom:none;
}

.settings-modal
{
  margin-top:7em;
}
#colorSetting, .btn
{
  
  color: #ff981a;
}
.leftOption
{
  float: left;
  width:42%;
  background-color: #5d3f58;
  color: #ff981a;
  border-radius: 0.5em;
}
.rightOption
{
  float: right;
  width:58%;
  text-align: center;
  background-color: #5d3f58;
  border-radius: 0.5em;
}
#search
{
  margin-right:0.4em;
}

.setting
{
  background-color:transparent;
  border:none;
  text-align:left;
  margin-left:-0.4em;
}

.bg-light, .container-fluid{
    background-color: rgba(93,63,88,0.8);
    border-radius:1em;
    opacity: 0.80;
}
  
.navbar-light .navbar-nav .nav-link
{
  color: #ff981a;
}
  
.navbar-light .navbar-toggler
{
  border:0;
  color: #5d3f58;  
}
    .navbar-light:hover, .navbar-nav .nav-link:hover
  {
    color:#ff981a;
    opacity: 1;
    transition:opacity 0.1s ease-in-out;
  }

  html, body {
    height: 100%;
    margin: 0;
    padding: 0;
    font-family: 'Goldman', cursive;
  }
  
  .background {
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: #0e1518;
    z-index: -1;
  }
  
  .square {
    position: absolute;
    width: 50px;
    height: 50px;
    background-color: #ff981a;
    margin: 50px;
    animation-name: move;
    animation-duration: 5s;
    animation-iteration-count: infinite;
    animation-direction: alternate;
    animation-timing-function: ease-in-out;
    opacity: 40%;
  }
  
  @keyframes move {
    0% {
      transform: translate(0, 0);
    }
    100% {
      transform: translate(200px, 200px);
    }
  }
  
  .square2 {
    position: absolute;
    width: 50px;
    height: 50px;
    background-color: #a67358;
    margin: 50px;
    animation-name: move2;
    animation-duration: 6s;
    animation-iteration-count: infinite;
    animation-direction: alternate;
    animation-timing-function: ease-in-out;
    opacity: 40%;
  }
  
  @keyframes move2 {
    0% {
      transform: translate(0, 0);
    }
    100% {
      transform: translate(150px, 150px);
    }
  }
  
  .square3 {
    position: absolute;
    width: 50px;
    height: 50px;
    background-color: #5d3f58;
    margin: 50px;
    animation-name: move3;
    animation-duration: 7s;
    animation-iteration-count: infinite;
    animation-direction: alternate;
    animation-timing-function: ease-in-out;
    opacity: 40%;
  }
  
  @keyframes move3 {
    0% {
      transform: translate(0, 0);
    }
    100% {
      transform: translate(100px, 100px);
    }
  }
</style>
</html>