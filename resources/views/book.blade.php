<form action="/booked" method="POST">
    @csrf
    <label for="fname">First name:</label>
    <input type="text" id="fname" name="fname"><br><br>

    <label for="lname">Last name:</label>
    <input type="text" id="lname" name="lname"><br><br>

    <label for="email">E-Mail:</label>
    <input type="text" id="email" name="email"><br><br>

    <label for="phone">Phone:</label>
    <input type="number" id="phone" name="phone"><br><br>

    <label for="Bday">Birthday on:</label>
    <input type="date" id="bday" name="bday"><br><br>

    <input type="submit" value="Submit">
  </form>





  <!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{ URL::asset('/css/css.css') }}">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
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
          <a class="navbar-brand" href="index.html">Wishes</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <li class="nav-item active">
                <a class="nav-link" href="new-birthday.html">New Birthday</a>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </header>

  <!-- new birthday register section -->
  <section class="dob-register-section">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-12 col-lg-6">
          <div class="register-page">
            <h2 class="text-center mb-4 text-secondary">Register New Birthday</h2>
            <form class="p-4" action="/booked" method="POST">
              <div class="form-group row pt-3">
                <label class="col-sm-2 col-form-label">Name:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputEmail3" placeholder="Name">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Email:</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="inputPassword3" placeholder="Email">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Phone:</label>
                <div class="col-sm-10">
                  <input type="tel" class="form-control" id="inputPassword3" placeholder="Phone">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">DOB:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputPassword3" placeholder="Date of Birth">
                </div>
              </div>
              {{-- <div class="form-group row">
                <label class="col-sm-2 col-form-label">Photo:</label>
                <div class="col-sm-10">
                  <input type="file" class="form-control" id="inputPassword3" placeholder="Photo">
                </div>
              </div> --}}
              <div class="form-group row">
                <div class="col-sm-10 d-flex justify-content-center">
                  <button type="submit" class="btn btn-secondary w-75 ml-5">Register</button>
                </div>
              </div>
            </form>
          </div>
        </div>
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
