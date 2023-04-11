<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style_password.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/4.5.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>  
    <title>Przywracanie</title>
</head>
<body>
<?php
    include("header.php");
?>

<div id="main-wrapper" class="container">
    <div class="row justify-content-center">
        <div class="col-xl-10">
                    <div class="row no-gutters">
                            <div class="p-5">
                                <div class="mb-5">
                                    <h3 class="h1 font-weight-bold text-theme" style="text-align: center;">Przywróć hasło</h3></br>
                                    <p>Po wpisaniu adresu email otrzymasz na skrzynkę kod pin, który niżej możesz wpisać.</p>
                                </div>                         
                                <form>
                                    <div class="form-group">
                                        <label>Adres e-mail</label>
                                        <input type="email" placeholder="Twój adres email" value="e-mail" class="form-control" id="exampleInputEmail1">
                                    </div>
                                    <div class="form-group mb-5">
                                        <label for="exampleInputPassword1">Kod pin</label>
                                        <input type="password" placeholder="Kod pin" class="form-control" id="exampleInputPassword1">
                                    </div>
                                    <button type="submit" class="btn btn-theme" id="hover_effect">Wyślij</button>
                                </form>
                            </div>
                        </div>                   
                    </div>
                </div>
            </div>
            <p class="text-muted text-center mt-3 mb-0">Nie masz jeszcze konta? <a href="register.php" class="text-primary ml-1" >Zarejestruj się</a></p>
        </div>
    </div>
</div>
</body>
</html>