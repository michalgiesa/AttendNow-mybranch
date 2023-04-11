<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style_password.css">
    <link type="text/css" href="css/bootstrap.min.css" />
    <link type="text/css" href="css/bootstrap-timepicker.min.css" />
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-timepicker.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/4.5.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>  

    <style>
	label{margin-left: 20px;}
	#datepicker{width:180px;}
	#datepicker > span:hover{cursor: pointer;}
	</style>
<title>Zmiana hasła</title>
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
                        <h3 class="h1 font-weight-bold text-theme">Dodaj wydarzenie</h3></br>
                    </div>
                    <div class="form-group">
                        <label>Tytuł wydarzenia</label>
                        <input type="email" placeholder="Tytuł" class="form-control" id="exampleInputEmail1">
                    </div>
                        <div class="form-group">
                            <div class="form-group">
                            
                                <label>Wybierz datę wydarzenia: </label>
                                <div id="datepicker" class="input-group date" data-date-format="dd-mm-yyyy">
                                    <input class="form-control" type="text" readonly />
                                    <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-calendar"></i>
                                    </span>
                                </div>

                            <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous">
                            </script>
                            <script>
                                $(function () {
                                    $("#datepicker").datepicker({
                                        autoclose: true,
                                        todayHighlight: true,
                                    }).datepicker('update', new Date());
                                });
                            </script>
                            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
                                crossorigin="anonymous">
                            </script>
                            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity= "sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
                                crossorigin="anonymous">
                            </script>
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js">
                            </script>
                        </div>
                        <div class="form-group">
                            <label for="appt">Wybierz godzinę:</label></br>
                            <input type="time" id="appt" name="appt"> 
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Opis wydarzenia</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>

                    <label for="formFileMultiple" class="form-label">Zamieść grafikę wydarzenia</label>
                    <input class="form-control" type="file" id="formFileMultiple" multiple />

                    </br><button type="submit" class="btn btn-theme" id="hover_effect">Opublikuj</button>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>