<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .buy-event-ticket
        {
          background-color: #ff981a !important;
        }

        .modal-content{
          background-color: rgba(93, 63, 88, 0.8)!important;
          color: #ff981a!important;
        }

        #counter {
          display: flex;
          align-items: center;
          margin-top: 20px;
        }

        #counter button {
          padding: 10px;
          font-size: 20px;
          border: none;
          background-color: #ff981a;
          opacity: 0.8;
          color: #fff;
          cursor: pointer;
        }

        #counter button:hover {
            opacity: 1;
            transition: opacity 0.1s ease-in-out;          
        }

        #counter button:disabled {
          background-color: #6c757d;
          cursor: not-allowed;
        }

        #count-container {
          display: flex;
          align-items: left;
          justify-content: left;
        }

        #count-label {
          display: inline-block;
          margin-right: 10px;
          font-size: 20px;
        }

        #count {
          padding: 0;
          margin: 0 10px;
          font-size: 20px;
          width: 40px;
          text-align: center;
        }
        
        #error-message {
          margin-top: 20px;
        }

        @media (max-width: 767px) {
           .ln{
            margin-top: 1.5vh;
          }
        }

    </style>
</head>
<body style="overflow: hidden;">
    <div class="row">
        <div class="col" style="margin-left: 50%;">
            <!-- Modal -->
            <div class="modal fade" id="myModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-end modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <p class="modal-title fs-1" id="exampleModalLabel">Zakup biletu</p>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h5>Nazwa wydarzenia: (nazwa wydarzenia)</h5>
                            <h5>Dostępność biletów: (ikonka czy są dostepne czy nie)</h5>
                            <!-- ilość biletów -->
                            <div id="counter">
                              <span id="count-label">1. Ilość biletów:</span>
                              <button class="btn btn-danger" id="minus-button" disabled>-</button>
                              <div id="count-container">
                                <span id="count">0</span>
                              </div>
                              <button class="btn btn-success" id="plus-button">+</button>
                            </div>
                            <!-- email -->
                            <h5 style="margin-top: 1.5vh;">2. Dane osobowe:</h5>
                            <div class="form-group">
                              <input type="email" class="form-control form-control-lg" id="email" style="margin-top: 1.5vh;margin-right: 1vh;margin-bottom: 1.5vh;" placeholder="Adres email *">
                            </div>
                            <div class="form-group row">
                              <div class="col-sm-6">
                                <input type="text" class="form-control form-control-lg fn" id="first-name" placeholder="Imię *">
                              </div>
                              <div class="col-sm-6">
                                <input type="text" class="form-control form-control-lg ln" id="last-name" placeholder="Nazwisko *">
                              </div>
                            </div> 
                            <!-- sposob dostarczenia biletu/ow -->
                            <h5 style="margin-top: 1.5vh;">4. Sposób dostarczenia biletów:</h5>
                            <div class="form-group">
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="deliveryPref1" id="flexRadioDefault1" checked>
                                <label class="form-check-label" for="deliveryPref1_1">Na adres email. (bilety dostaniesz w przeciągu 15 minut)</label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="deliveryPref1" id="flexRadioDefault2" disabled>
                                <label class="form-check-label" for="deliveryPref1_2">Kurierem. (bilety dostaniesz do 7 dni roboczych)</label>
                              </div>
                            </div>
                            <!-- akceptacja regulaminu -->
                            <h5 style="margin-top: 1.5vh;">5. Zaakceptuj zgody:</h5>
                            <div class="form-group">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">Chcę dostawać newsletter AttendNow.</label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="acceptTOS">
                                <label class="form-check-label" for="flexCheckChecked">Akceptuję <a href="regulamin.php">politykę prywatności</a>. *</label>
                              </div>
                            </div>
                            <!-- metoda platnosci -->
                            <h5 style="margin-top: 1.5vh;">6. Wybierz metodę płatności *:</h5>
                            <div class="form-group" id="payRadios">
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="payPref1" id="payPref1_1" disabled>
                                <label class="form-check-label" for="payPref1_1">BLIK</label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="payPref1" id="payPref1_2" disabled>
                                <label class="form-check-label" for="payPref1_2">PayU</label>
                              </div>
                            </div>
                            <!-- przycisk zakupu -->
                            <div class="form-group">
                              <button type="submit" class="btn btn-success btn-lg btn-block text-center" style="margin-top: 1.5vh; background-color: #ff981a; color: black; border: none;"id="payBtn" disabled>
                                <h5 class="m-0">Kupuję i płacę</h5>
                              </button>
                              <p class="fs-6" style="margin-top: 1.5vh; font-size: 1.2em;">* aby kontynuować zamówienie, niezbędne jest zaznaczenie pól oznaczonych gwiazdką.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    
    <script>
        const countEl = document.getElementById("count");
        const plusButtonEl = document.getElementById("plus-button");
        const minusButtonEl = document.getElementById("minus-button");
        const errorMessageEl = document.getElementById("error-message");
        const acceptTOS = document.getElementById("acceptTOS");
        const payPref1_1 = document.getElementById("payPref1_1");
        const payPref1_2 = document.getElementById("payPref1_2");
        const payBtn = document.getElementById("payBtn");

        let count = 0;
        const limit = 10;

        plusButtonEl.addEventListener("click", () => {
          if (count < limit) {
            count++;
            countEl.innerText = count;
            if (count > 0) {
              minusButtonEl.disabled = false;
            }
          }
          if (count === limit) {
            plusButtonEl.disabled = true;
          }
        });

        minusButtonEl.addEventListener("click", () => {
          if (count === 0) {
            errorMessageEl.classList.remove("d-none");
            return;
          }
          count--;
          countEl.innerText = count;
          if (count === 0) {
            minusButtonEl.disabled = true;
          }
          if (count < limit) {
            plusButtonEl.disabled = false;
          }
        });
   
        acceptTOS.addEventListener("click", () => {
          if (acceptTOS.checked === true) {
            payPref1_1.disabled = false;
            payPref1_2.disabled = false;
          } else {
            payPref1_1.disabled = true;
            payPref1_2.disabled = true;
            payPref1_1.checked = false;
            payPref1_2.checked = false;
            payBtn.disabled = true;
          }
        });

        payPref1_1.addEventListener("click", () =>{
          if(payPref1_1.checked === true || payPref1_2.checked === true){
            payBtn.disabled = false;
          }
        })
        payPref1_2.addEventListener("click", () =>{
          if(payPref1_1.checked === true || payPref1_2.checked === true){
            payBtn.disabled = false;
          }
        })

    </script>
</body>
</html>