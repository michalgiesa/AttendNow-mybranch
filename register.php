<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_register.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/4.5.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <title>Rejestracja</title>
    
</head>
<body>
<?php
  include('header.php');
?>
<div id="main-wrapper" class="container">
    <div class="row justify-content-center">
        <div class="col-xl-10">
                    <div class="row no-gutters">
            <div class="col-xl-6 d-none d-xl-block" id="backgroundRegister">
            <div class="container2">
                <div class="row_four">
                    <div class="col"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" id="iconRegister" class="bi bi-geo-alt-fill" viewBox="0 0 16 16" >
                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                        </svg>Spotykaj się z znajomymi!</div>
                    <div class="col"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" id="iconRegister" class="bi bi-people-fill" viewBox="0 0 16 16">
                        <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                        </svg>Organizuj wydarzenia</div>
                    <div class="w-100"></div>
                    <div class="col"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" id="iconRegister" class="bi bi-disc" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="M10 8a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 4a4 4 0 0 0-4 4 .5.5 0 0 1-1 0 5 5 0 0 1 5-5 .5.5 0 0 1 0 1zm4.5 3.5a.5.5 0 0 1 .5.5 5 5 0 0 1-5 5 .5.5 0 0 1 0-1 4 4 0 0 0 4-4 .5.5 0 0 1 .5-.5z"/>
                        </svg>Szukaj imprez</div>
                    <div class="col"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" id="iconRegister" class="bi bi-music-note-beamed" viewBox="0 0 16 16">
                        <path d="M6 13c0 1.105-1.12 2-2.5 2S1 14.105 1 13c0-1.104 1.12-2 2.5-2s2.5.896 2.5 2zm9-2c0 1.105-1.12 2-2.5 2s-2.5-.895-2.5-2 1.12-2 2.5-2 2.5.895 2.5 2z"/>
                        <path fill-rule="evenodd" d="M14 11V2h1v9h-1zM6 3v10H5V3h1z"/>
                        <path d="M5 2.905a1 1 0 0 1 .9-.995l8-.8a1 1 0 0 1 1.1.995V3L5 4V2.905z"/>
                        </svg></svg>Uczestnicz w koncertach</div>
                </div>
                </div>
            </div>
            <div class="col-xl-6" id="registerForm">
              <div class="card-body p-md-5 text-black">
                <h3 class="mb-6 text-uppercase" style="color:#5d3f58" id="registerLetter"><b>Zarejestruj się</b></h3>

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="form3Example1m" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example1m">Imię</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="form3Example1n" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example1n">Nazwisko</label>
                    </div>
                  </div>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example97" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example97">Adres email</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example9" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example9">Miejscowość</label>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="form3Example1m" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example1m">Ulica</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="form3Example1n" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example1n">Nr lokalu</label>
                    </div>
                  </div>
                </div>
                <div class="d-flex justify-content-end pt-3">
                  <button type="button" class="btn btn-light btn-lg" id="btnClear">Wyczyść</button>
                  <button type="button" class="btn btn-warning btn-lg ms-2" id="btnRegister">Zarejestruj się</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>


