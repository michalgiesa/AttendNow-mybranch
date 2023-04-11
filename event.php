<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<link rel="stylesheet" href="style_event.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>

<body>
    <?php
        include("header.php");
    ?>      
      <div class="wrapper">
            <div class="content-left">
                <div class="top-left">
                    <img src="example/1.jpg" alt="Main photo of product">
                </div>
                <div class="bottom-left" style="margin-left:3em; display:table;">
                    <img src="example/2.jpg" alt="Product photo">
                    <img src="example/3.jpg" alt="Product photo" style="margin-right:1em">
                    <img src="example/4.jpg" alt="Product photo">
                    <img src="example/5.jpg" alt="Product photo">
                </div>
            </div>
            <div class="content-right">
                    <div class="right-aboutProduct">
                        <a href="search.php" class="nav-item nav-link" id="backEvent">&#10092; Powrót</a>
                        <h2 id="title">Notatki z Marginesu</h2>
                        <button data-bs-toggle="modal" data-bs-target="#user" class="colorButtonModal" id="openModal" style="background-color: transparent; border:none; color:white; text-decoration:underline;">Informacje o autorze</button><br>
                        <span class="star-rating">&#9733;</span>
                        <span class="star-rating">&#9733;</span>
                        <span class="star-rating">&#9733;</span>
                        <span class="star-rating">&#9733;</span>
                        <span class="star-rating">&#9734;</span>
                        <p id="reviews">3 opinie</p>
                        <a id="add-review" href="" class="nav-item nav-link">Dodaj opinie</a>
                        <span id="price">Cena: 99 zł</span>                       
                        <ul id="product-info">
                            <li>Dostępność: <span>Wyprzedane</span></li>
                            <li>Kod wydarzenia: <span>#4657</span></li>
                            <li>Tags: <span>Trasa, Polskie</span></li>
                        </ul>                       
                        <p id="description">Koncert to wydarzenie muzyczne, podczas którego artyści wykonują swoje utwory na żywo przed publicznością. Koncerty mogą odbywać się w różnych miejscach, takich jak sale koncertowe, stadiony, klubowe sceny czy plenery, a ich celem jest dostarczenie emocji i rozrywki dla słuchaczy oraz promocja muzyki i artystów.</p>                 
                      </div>                         
                     <div class="right-buttons">
                     <button type="button" class="btn btn-success" style="background: #5d3f58; color: #ff981a; border: 1px solid white;" data-bs-toggle="modal" data-bs-target="#myModal1">Kup bilet</button>
                        <?php
                          include("buy_ticket.php");
                        ?>
                    </div>                  
            </div>
    </div>   
<div class="modal-container author-info">
  <div class="modal-content-wrapper author-wrapper">
    <div class="modal-content author-content">
      <div class="modal-header author-header">
        <h5 class="modal-title" id="exampleModalLabel">Autor</h5>
        <button type="button" class="btn-close" id="closeModal" aria-label="Close"></button>
      </div>
      <div class="modal-body author-body">
        This is a modal that appears from the right.
    </div>
    </div>
  </div>
</div>
</body>
<script>
    document.addEventListener('DOMContentLoaded', function() {
    const openModalButton = document.getElementById('openModal');
    const closeModalButtons = [document.getElementById('closeModal'), document.getElementById('closeModalFooter')];
    const modalContainer = document.querySelector('.modal-container');
    const modalContentWrapper = document.querySelector('.modal-content-wrapper');

    openModalButton.addEventListener('click', function() {
      modalContainer.style.display = 'block';
      modalContentWrapper.classList.add('modal-open');
    });

    closeModalButtons.forEach(function(button) {
      button.addEventListener('click', function() {
        modalContentWrapper.classList.remove('modal-open');
        setTimeout(function() {
          modalContainer.style.display = 'none';
        }, 300);
      });
    });
  });
$(document).ready(function(){
         
         if ($(window).width() < 690) {
               $(".menu-item").hide();
         };
         
         $(window).resize(function(){
     
             if($(window).width() > 689){
                 $(".menu-item").show();
             } else {
                 $(".menu-item").hide(); 
             }
         }); 
         
         $("#menu").on('click', function(){
            $(".menu-item").toggle(500); 
         });
         
         $(".bottom-left img").on('click', function(){
             var photo = $(this).attr("src");
             console.log(photo);
             $(".top-left img").attr("src", photo);
         });
         
         
     });
     </script>
</html>