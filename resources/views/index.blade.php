<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->

  <link rel="stylesheet" href="{{ URL::asset('/css/css.css') }}">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@400;500;600&display=swap" rel="stylesheet">
  <title>Wishes</title>
</head>

<body>

  <!-- header section -->
  <header>
    <div class="container-fluid position-fixed" id="nav-bar">
      <div class="row">
        <nav class="navbar navbar-expand-lg navbar-light bg-secondary w-100">
          <a class="navbar-brand" href="#">Wishes</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <!-- <li class="nav-item active">
                <a class="nav-link" href="#">Wishes <span class="sr-only">(current)</span></a>
              </li> -->
              <li class="nav-item active">
                <a class="nav-link" href="book">New Birthday</a>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </header>

  <!-- home section -->
  <section class="container home-section">
    <div class="row">
      <div class="col-12 col-lg-6 d-flex justify-content-center">
        <div>
          <h2 class="text-center">Wishes</h2>
          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
            in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
        </div>
      </div>

      <div class="col-12 col-lg-6 mt-5">
        <a href="book" class="btn btn-secondary ml-5 mr-5">Register</a>
        <a href="#" class="btn btn-secondary mr-5 ml-5">Search to be included</a>
      </div>
    </div>
  </section>




  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
    crossorigin="anonymous"></script>
  <script src="./js/script.js"></script>
</body>

</html>
