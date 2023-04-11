<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AttendNow!</title>
    <link rel="stylesheet" href="style_contact.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script_contact.js"></script>
</head>

<body>
<?php
include("header.php");
?>
<div class="container">
        <div class="row align-items-center">
            <div class="col-auto text-center">
                <img class="img-fluid" id="phoneImage" src="image\phone2.png" alt="Phone">
            </div>
            <div class="col">
                <h1 class="font-weight-bold my-4" id="contact">Kontakt</h1>
            </div>
        </div>
        <div class="row">
            <p class="w-responsive pb-4 mb-3 bottom-line">Masz jakieś pytanie, opinię lub sugestię? Wyślij nam formularz, a my odpowiemy ci najszybciej jak to możliwe!</p>
        </div>
        <div class="row text-center">
            <h3 class="font-weight-bold my-4">W czym możemy Ci pomóc?</h3>
        </div>
        <div class="row justify-content-center">
            <div class="col-11 col-sm-11 col-md-3 mx-1 text-center" id="show1" >
                <div class="image-wrapper" >
                    <img class="img-fluid base-image" src="image/problem.png" alt="Problem" width="256" height="256">
                    <img class="img-fluid overlay-image" src="image/problem2.png" alt="Problem2" width="256" height="256">
                    <p class="resize-text mt-4">Potrzebuję pomoc</p>
                </div>
            </div>
            <div class="col-11 col-sm-11 col-md-3 mx-1 text-center" id="show2" >
                <div class="image-wrapper" >
                <img class="img-fluid base-image" src="image\suggestion.png" alt="Sugestia" width="256" height="256">
                <img class="img-fluid overlay-image" src="image\suggestion2.png" alt="Sugestia2" width="256" height="256">
                <p class="resize-text mt-4" >Mam sugestię</p>
                </div>
            </div>
            <div class="col-11 col-sm-11 col-md-3 mx-1 text-center" id="show3" >
                <div class="image-wrapper" >
                    <img class="img-fluid base-image" src="image\question.png" alt="Pytanie" width="256" height="256">
                    <img class="img-fluid overlay-image" src="image\question2.png" alt="Pytanie2" width="256" height="256">
                    <p class="resize-text mt-4" >Chciałbym się o coś zapytać</p>
                </div>
            </div>
        </div>
    
    
    <!--Modal form-->
    <div class="modal modal-rounded fade" id="formModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="formModalLabel"></h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="contactForm">
                <div class="modal-body">
                    <h4 class="mb-2">Dane osobowe</h4>
                    <div class="form-group row">                   
                        <div class="col my-2">
                        <input class="form-control" id="firstName" type="text" placeholder="Imię" required>
                        </div>
                    </div>
                    <div class="form-group row">                  
                        <div class="col mb-2">
                        <input class="form-control" id="lastName" type="text" placeholder="Nazwisko" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col mb-2">
                        <input class="form-control" id="email" type="email" placeholder="example@email.com" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col mb-2">
                        <textarea class="form-control" id="message" type="text" placeholder="" required></textarea>
                        </div>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" id="formCheck" type="checkbox" value="" required>
                        <label class="form-check-label" for="formCheck">
                        Zgadzam się na przetwarzanie moich danych osobowych przez AttendNow sp. z o.o., z siedzibą w Walidrogach ul. Opolska 4,
                        w celu odpowiedzi na moją wiadomość poprzez e‑mail.
                        </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zamknij</button>
                    <button type="submit" class="btn btn-primary">Wyślij</button>
                </div>
            </form>
            </div>
        </div>
    </div> 
</div>
</body>
</html>