<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AttendNow!</title>
    <link rel="stylesheet" href="style_search.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function(){
            
        })

        // Function to fetch events and update the UI
        function searchEvents(query) {
            // Replace this with a call to the actual API you want to use
            // For example, you could use fetch() to make an API call
            // This example uses dummy data
            const dummyData = [
                {
                    title: 'Example Event 1',
                    date: '2023-04-01',
                    location: 'City Center'
                },
                {
                    title: 'Example Event 2',
                    date: '2023-04-02',
                    location: 'Town Hall'
                }
            ];

            let eventResults = $('#event-results');
            eventResults.empty();

            dummyData.forEach(event => {
                eventResults.append(`
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h5 class="card-title">${event.title}</h5>
                                <p class="card-text">${event.date} at ${event.location}</p>
                            </div>
                        </div>
                    </div>
                `);
            });
        }

        // Attach event listener to the search form
        $('#search-form').on('submit', (e) => {
            e.preventDefault();
            let query = $('#search').val().trim();
            if (query) {
            searchEvents(query);
            }
        });


      

    </script>
</head>

<body>
<?php
include("header.php");
?>


<div class="container mt-5">
    <div class="row">
        <div class="filters col-lg-3">
            <!-- Left sidebar filters -->
            <div class="my-4">
            <h5>Cena</h5>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="price" id="price-all" value="all" checked>
                    <label class="form-check-label" for="price-all">
                        Wszystkie
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="price" id="price-1" value="1">
                    <label class="form-check-label" for="price-1">
                        0 - 50 zł
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="price" id="price-2" value="2">
                    <label class="form-check-label" for="price-2">
                        51 - 100 zł
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="price" id="price-3" value="3">
                    <label class="form-check-label" for="price-3">
                        100+ zł
                    </label>
                </div>
                <!-- Add more price options here -->
            </div>
            <div>
            <h5>Ocena</h5>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="rating" id="rating-5" value="5">
                    <label class="form-check-label" for="rating-5">
                        5 gwiazdek
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="rating" id="rating-4" value="4">
                    <label class="form-check-label" for="rating-4">
                        4 gwiazdki
                    </label>
                </div>
                <!-- Add more rating options here -->
            </div>
        </div>
        <div class="filters col-lg-9">
            <!-- Search bar -->
            <h3 class="font-weight-bold my-4">Wydarzenia</h3>
            <form class="d-flex justify-content-center">
                <input class="form-control me-2" type="search" id="hover_placeholder" placeholder="Nazwa wydarzenia" aria-label="Search">
                <button class="btn" type="submit">Szukaj</button>
            </form>
            <!-- Top filters -->
            <div class="d-flex my-3">
                <div>
                    <label for="sort" class="form-label">Sortuj według:</label>
                    <select id="sort" class="form-select">
                        <option value="popularity">Popularność</option>
                        <option value="distance">Dystans</option>
                        <option value="name">Nazwa</option>
                    </select>
                </div>
                <div class="ms-3">
                    <label for="results-per-page" class="form-label">Liczba wyników na stronę:</label>
                    <select id="results-per-page" class="form-select">
                        <option value="10">10</option>
                        <option value="20">20</option>
                        <option value="50">50</option>
                    </select>
                </div>
            </div>

            <!-- Event results -->
            <div id="event-results" class="row mt-5">
                <div class="row mt-3">
                    <div class="col-12">
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Art Exhibition</h5>
                                <p class="card-text">2023-04-05 at Gallery One</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-12">
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Live Concert</h5>
                                <p class="card-text">2023-04-10 at City Arena</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-12">
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Food Festival</h5>
                                <p class="card-text">2023-04-15 at Central Park</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-12">
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Film Screening</h5>
                                <p class="card-text">2023-04-20 at Cinema Hall</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-12">
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Theater Performance</h5>
                                <p class="card-text">2023-04-25 at City Playhouse</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-12">
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Charity Run</h5>
                                <p class="card-text">2023-04-30 at Riverside Park</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
            <div id="page-info" class="text-center mt-4"> << < Page 1 of 1 > >></div>
        </div>
    </div>
</div>

</body>
</html>