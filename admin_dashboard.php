<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>AttendNow</title>
  <link rel="stylesheet" href="style_admin_dashboard.css" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
     $(document).ready(function () {
            $(".hover-image-deny, .hover-image-accept").hover(
                function () {
                    var src = $(this).attr("src");
                    var alternateSrc = $(this).data("alt-src");
                    $(this).attr("src", alternateSrc).data("alt-src", src);
                },
                function () {
                    var src = $(this).attr("src");
                    var alternateSrc = $(this).data("alt-src");
                    $(this).attr("src", alternateSrc).data("alt-src", src);
                }
            );
            $('[data-bs-toggle="tooltip"]').tooltip();
    });
  </script>
</head>

<body>
<?php
include("header.php");
?>
  <div class="container mt-3">
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link font-weight-bold" id="tab1-tab" data-bs-toggle="tab" href="#tab1">Wydarzenia</a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-weight-bold active" id="tab2-tab" data-bs-toggle="tab" href="#tab2">Komentarze</a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-weight-bold" id="tab3-tab" data-bs-toggle="tab" href="#tab3">Formularze</a>
      </li>
    </ul>

    <div class="tab-content">
      <!-- Events -->
      <div class="tab-pane fade" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
      
      </div>
      <!-- Comments -->
      <div class="tab-pane fade show active" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
          <div class="row">
            <div class="col-md-12">
              <div class='card my-3 mx-2'>
                <div class='card-body'>
                  <div class="row">
                    <div class="col-md-6">
                      <p class='card-title font-weight-bold'>Użytkownik: mGisa</p>
                      <p class='card-text'>Treść: Ale słaba strona</p>
                      <p class='card-text'>Zgłoszone przez mKosek o 17:33 24.03.23</p>
                    </div>
                    <div class="col-md-6 image-container">
                        <img class="img-fluid text-right me-2 hover-image-deny" src="image/deny.png" data-alt-src="image/deny2.png" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Usuń komentarz" alt="Dismiss" width="24">
                        <img class="img-fluid text-right hover-image-accept" src="image/accept.png" data-alt-src="image/accept2.png" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Zignoruj zgłoszenie" alt="Accept" width="24">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class='card mb-3 mx-2'>
                <div class='card-body'>
                <div class="row">
                    <div class="col-md-6">
                      <p class='card-title font-weight-bold'>Użytkownik: sSegieth</p>
                      <p class='card-text'>Treść: nie lubie was aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
                      <p class='card-text'>Zgłoszone przez mKosek o 17:34 24.03.23</p>
                    </div>
                    <div class="col-md-6 image-container">
                        <img class="img-fluid text-right me-2 hover-image-deny" src="image/deny.png" data-alt-src="image/deny2.png" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Usuń komentarz" alt="Dismiss" width="24">
                        <img class="img-fluid text-right hover-image-accept" src="image/accept.png" data-alt-src="image/accept2.png" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Zignoruj zgłoszenie" alt="Accept" width="24">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class='card mb-3 mx-2'>
                <div class='card-body'>
                <div class="row">
                    <div class="col-md-6">
                      <p class='card-title font-weight-bold'>Użytkownik: jBujacz</p>
                      <p class='card-text'>Treść: Wtf is this crap</p>
                      <p class='card-text'>Zgłoszone przez mKosek o 17:35 24.03.23</p>
                    </div>
                    <div class="col-md-6 image-container">
                        <img class="img-fluid text-right me-2 hover-image-deny" src="image/deny.png" data-alt-src="image/deny2.png" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Usuń komentarz" alt="Dismiss" width="24">
                        <img class="img-fluid text-right hover-image-accept" src="image/accept.png" data-alt-src="image/accept2.png" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Zignoruj zgłoszenie" alt="Accept" width="24">
                    </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
      </div>
      <!-- Forms -->
      <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
      
      </div>
    </div>
  </div>

</body>
</html>
