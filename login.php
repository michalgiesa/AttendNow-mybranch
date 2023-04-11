<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style_login.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/4.5.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>  
    <title>Logowanie</title>
</head>
<body>
<?php
    include("header.php");
?>
<div id="main-wrapper" class="container">
    <div class="row justify-content-center">
        <div class="col-xl-10">
                    <div class="row no-gutters">
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="mb-5">
                                    <h3 class="h1 font-weight-bold text-theme" style="text-align: center;">Witaj</h3>
                                </div>                         
                                <form>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Adres e-mail</label>
                                        <input type="email" placeholder="Twój adres email" value="e-mail" class="form-control" id="exampleInputEmail1">

                                    </div>
                                    <div class="form-group mb-5">
                                        <label for="exampleInputPassword1">Hasło</label>
                                        <input type="password" placeholder="Hasło" class="form-control" id="exampleInputPassword1">
                                    </div>
                                    <button type="submit" class="btn btn-theme" id="hover_effect">Zaloguj</button>
                                    <button type="submit" class="btn btn-theme" id="btn_forpass" style="background:transparent;color:#5d3f58"><a class="nav-item nav-link" style="color:#5d3f58 " href="password.php">Zapomniałeś hasła?</a></button>
                                </form>
                            </div>
                        </div>                   
                        <div class="col-lg-6 d-none d-lg-inline-block">
                            <div class="account-block rounded-right">
                                <div class="overlay rounded-right"></div>
                                <img src="image/logo-dark.png" id="logoimage" class="rounded mx-auto d-block">
                                <div class="account-testimonial">
                                    <h4 class="text-white mb-4" style="color:#ff981a !important">Attendnow tutaj możesz wszystko!</h4>
                                    <p class="lead text-white" style="color:#ff981a !important">Organizuj wydażenia.</p>
                                    <p class="lead text-white" style="color:#ff981a !important">Dołączaj na wydażenia.</p>
                                    <p class="lead text-white" style="color:#ff981a !important">Baw się dobrze.</p>
                                </div>
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