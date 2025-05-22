<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remembering Drupal 7</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fin.css">
    <style>
     .navbar{
       background-color: rgba(60,156,212, 0.6);
     }
     .dancing-script-text {
       font-family: "Dancing Script", cursive;
       font-optical-sizing: auto;
       font-weight: 400;
       font-style: normal;
       text-align: center;
       font-size: 85px;
       color: rgba(60,156,212, 0.7);
     }
     .contentMemorial{
       text-align: center
     }
     .card {
       padding: 0;
     }
     #intro{
       font-size: 20px;
     }
     #Warning{
       padding: 40px;
     }
     #warningText{
       font-size: 20px;
     }
     h4{
       font-size: 45px;
       font-family: "Dancing Script", cursive;
       margin-right: 30px;
       color: rgba(60,156,212, 0.8);
     }
     .description{
       border: solid 2px;
       border-radius: 15px;
       border-color:rgba(184, 210, 226, 0.9);
       width: 50%;
       text-align: center;
       margin-left: 23%;
       margin-bottom: 20px;
     }
    </style>
    <script src="index.js" defer></script>
  </head>

  <body>
    <!--Nav bar-->
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Remembering Drupal 7</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="eulogies.php">Leave a Eulogy</a>
            </li>
          </ul>
          <?php if (filter_input(INPUT_COOKIE, "auth") == session_id()) { ?>
            <a class="navbar-text nav-item" href="logout.php" style="text-decoration: none;">Logout</a>
          <?php } else { ?>
            <a class="navbar-text nav-item" href="login.php" style="text-decoration: none;">Login</a>
          <?php } ?>
        </div>
      </div>
    </nav>
    <!--carasoul-->
    <div id="carouselExampleRide" class="carousel slide mt-4" data-bs-ride="true">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="res/220px-Druplicon.vector.jpg" class="d-block w-100" alt="drupal" height="250" width="100">
        </div>
        <div class="carousel-item">
          <img src="res/DrupalConKelowna.jpg" class="d-block w-100" alt="drupal2" height="250">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <h1 class="dancing-script-text">Gone but never forgotten</h1>
    <!--Memorial Content-->
    <div class="contentMemorial">
    </div>
    <!--content Cards -->
    <div class="container">
      <div class="row" id="intro">
        <div class="jumbotron jumbotron-fluid col-lg-12">
          <div class="container">
              <h1 class="display-4">Drupal 7</h1><br>
            <p class="lead">Released in early 2011, Drupal 7 holds a special place in the hearts of all who used it.
              Beloved for its reliability and flexibility, it powered countless websites and communities over its long lifespan.
              As we bid farewell to this iconic version, Drupal 7 passes the torch to its successors—Drupal 8, 9, 10, and beyond.
              Its legacy will live on, inspiring the continued evolution of the Drupal ecosystem.
              Rest in peace, Drupal 7—you will always be remembered fondly.</p>
          </div>
        </div>
      </div>

      <div class="row" id="row1">
        <div class="card col-lg-6 col-md-6 col-sm-12"id="creatorofDrupal">
          <img src="res/Dries B.jpg" class="card-img-top" alt="Drupal Creator">
          <div class="card-body">
            <p class="card-text lead">Drupal Creator Dries Buytaert</p>
            <p class="card-text">We hope that you will carry on with your Drupal journey after the untimely demise of Drupal 7.</p>
          </div>
        </div>
        <div class="card col-lg-6 col-md-6 col-sm-12 text-bg-light">
          <div class="card-body" id="Warning">
            <h5 class="display-6">Drupal 7 End of Life</h5>
            <p class="lead" id="warningText">
              Drupal 7, the popular open-source content management system, officially reached its end of life (EOL) on
              January 5, 2025, after being extended multiple times to give users more time to upgrade. This marks the end
              of official support, meaning no more security updates, bug fixes, or new features from the Drupal community.
              Organizations still using Drupal 7 are strongly encouraged to upgrade to Drupal 9 or 10 to maintain security
              and take advantage of modern features. Staying on Drupal 7 after EOL poses significant risks, such as
              increased vulnerability to cyberattacks and compatibility issues with hosting environments.</p>
          </div>
        </div>
      </div>

      <div class="row mt-4" id="row2">
        <div class="card col-lg-4 col-md-12">
          <div class="card-header">
            Quote
          </div>
          <div class="card-body">
            <blockquote class="blockquote mb-0">
              <img src="res/kevin-james-meme-696x442.jpg" class="card-img-top" alt="Kevin James">
              <p>"14 years of Drupal glory"</p>
              <footer class="blockquote-footer">Kevin James...probably<cite title="Source Title"></cite></footer>
            </blockquote>
          </div>
        </div>

        <div class="card col-lg-4 col-md-12" id="quote1">
          <div class="card-header">
            Quote
          </div>
          <div class="card-body">
            <blockquote class="blockquote mb-0">
              <img src="res/Quintin.jpg" class="card-img-top" alt="Quintin">
              <p>"Druped till I dropped, 4 stars"</p>
              <footer class="blockquote-footer">Quintin<cite title="Source Title"></cite></footer>
            </blockquote>
          </div>
        </div>
        <div class="card col-lg-4 col-md-12">
          <div class="card-header">
            Quote
          </div>
          <div class="card-body">
            <blockquote class="blockquote mb-0">
              <img src="res/CCDRupal.jpg" class="card-img-top" alt="Christian" height="300">
              <p>"Every moment spent with Drupal 7 was a taste of pure bliss"</p>
              <footer class="blockquote-footer">Christian<cite title="Source Title"></cite></footer>
            </blockquote>
          </div>
        </div>
      </div>

      <div class="row mt-4">
        <div class="card col-lg-6 col-md-12 text-bg-light">
          <div class="card-body">
            <h5 class="card-title">Grief Services</h5>
            <p class="card-text">Feeling sad about the loss of Drupal 7? Please consider counselling services at The
              Okanagan College</p>
            <a href="https://www.okanagan.bc.ca/counselling-services#book" class="btn btn-primary">Get Help Now.</a>
          </div>
        </div>

        <div class="card col-lg-6 col-md-12 text-bg-light">
          <div class="card-body">
            <h5 class="card-title">Drupal Connect</h5>
            <p class="card-text">Feeling lonely after the end of Drupal 7? Make new relationships with other like minded
              Drupalers. Try Drupal Connect now. Brought to you by The Drupalers.
            </p>
            <a href="HomePageSignedOut.php" class="btn btn-danger">Connect Now!</a>
          </div>
        </div>
      </div>
    </div>


    <footer class="bg-body-secondary text-center mt-4">
      <!-- Grid container -->
      <div class="container p-2 pb-0">
        <p>In memory of Drupal 7</p>
      </div>
      <div class="text-center p-1" style="background-color: rgba(60,156,212, 0.4);">
        <p class="outText">😎 A site by The Regex Renegades 😎</p>
      </div>
    </footer>



    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
  </body>

</html>
