<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="style_index.css" rel="stylesheet">
    <title>AttendNow!</title>
</head>
<body>
    <div class="loader">
      <div class="spinner-border" role="status">
        <span class="sr-only"></span>
      </div>
      <h1 style="margin-left: 2vw; color: #ff981a;">Loading</h1>
    </div>

    <div class="background"></div>
    <div class="row">
        <div class="content col">
            <div class="d-flex justify-content-center align-items-center vh-100">
                <div class="text-center mp_content">
                    <img class="mp_logo rounded" src="logo_attendnow\darkmode\png\logo-no-background.png" alt="AttendNow logo">
                    <nav class="mb-3 mp_nav">
                        <ul class="list-unstyled mp_nav_ul">
                          <li class="mp_nav_li"><a href="index.php" class="mp_nav_li_a">Główna</a></li>
                          <li class="mp_nav_li"><a href="popular.php" class="mp_nav_li_a">Popularne</a></li>
                          <li class="mp_nav_li"><a href="contact.php" class="mp_nav_li_a">Kontakt</a></li>
                        </ul>
                    </nav>
                    <form class="d-flex justify-content-center">
                        <input class="form-control me-2" type="search" id="hover_placeholder" placeholder="Co chcesz robić?" aria-label="Search">
                        <button class="btn" type="submit">Szukaj</button>
                    </form>
                </div>
                
            </div>
        </div>
        <div class="col-auto mp_icons">
            <div class="mp_icons_hover">
                <a href="login.php"><img src="image/login-dark.png" alt="login" title="Zaloguj się!" width="50" height="50"></a>
            </div>
            <div class="mp_icons_hover">
                <a href="https://twitter.com"><img src="image/twitter-50.png" alt="twitter" title="Śledź nas na Twitterze!" style="margin-top: 1em;"></a>
            </div>
            <div class="mp_icons_hover">
                <a href="https://instagram.com"><img src="image/instagram-50.png" alt="insta" title="Obserwuj nas na Instagramie!" style="margin-top: 1em;"></a>
            </div>
            <div class="mp_icons_hover">
                <a href="https://discord.com"><img src="image/discord-50.png" alt="discord" title="Dołącz na nasz serwer Discord!" style="margin-top: 1em;"></a>
            </div>
            <div class="mp_icons_hover">
                <a href="https://facebook.com"><img src="image/facebook-50.png" alt="facebook" title="Śledź nas na Facebooku!" style="margin-top: 1em;"></a>
            </div>
        </div>
    </div>
<script src="script_index.js"></script>
</body>
</html>
