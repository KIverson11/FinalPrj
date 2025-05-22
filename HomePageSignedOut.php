<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Drupal Connect</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="HomePageSignedOut.php">Drupal Connect</a>
        <ul class="navbar-nav ms-auto" style="margin-right: 30px;">
            <li class="nav-item">
                <a class="nav-link" href="login.php">Sign In</a>
            </li>
        </ul>
    </div>
</nav>

<style>
    .text-container {
        max-width: 80%;
        margin: 0 auto;
    }
</style>

<div class="card rounded-0 w-100 h-50">
    <div class="card-body text-center p-0">
        <div class="text-container">
            <p class="text-secondary">
                <span class="text-primary fw-bold">Drupal Connect</span> is the number one leader in dates between <span class="text-primary fw-bold">Drupalers!</span>
            </p>
        </div>
    </div>
</div>

<style>
    .column-with-line {
        border-right: 2px solid lightgray;
        padding-right: 15px;
        min-height: 150px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
</style>

<div class="container mt-lg-5">
    <div class="row">

        <div class="col-md-4 column-with-line">
            <a class="text-primary mb-3"><i class="bi bi-person-heart fs-2"></i></a>
            <p class="text-secondary">
                We match you with Drupaler's that lead to <span class="text-primary fw-bold">long lasting relationships.</span> Meet others that match your Drupal needs!
            </p>
        </div>


        <div class="col-md-4 column-with-line">
            <a class="text-primary mb-3"><i class="bi bi-hearts fs-2"></i></a>
            <p class="text-secondary">
                Whether it's <span class="text-primary fw-bold">modules, themes, or views, </span>we will find the perfect Drupaler for <span class="text-primary fw-bold">you!</span>
            </p>
        </div>

        <div class="col-md-4 d-flex flex-column justify-content-center">
            <a class="text-primary mb-3"><i class="bi bi-chat-heart fs-2"></i></a>
            <p class="text-secondary">
                <span class="text-primary fw-bold">Discover singles </span>attending the next DrupalCon or Drupal event. Find users that share your <span class="text-primary fw-bold">favourite Drupal version.</span>
            </p>
        </div>
    </div>
</div>

<style>
    .card-img-custom {
        width: 80%;
        height: 200px;
        object-fit: cover;
    }
</style>

<div class="container py-4">
    <div class="p-5 mb-4 text-primary bg-light rounded-3">
        <div class="container-fluid py-5 d-flex flex-column align-items-center justify-content-center">
            <h1 class="display-5 fw-bold text-center">Create an Account Today!</h1>
            <p class="col-md-8 fs-4 text-center">Sign-in or create an account to view other users profiles!</p>
            <a href="SignUp.php"><button class="btn btn-primary btn-lg" type="button">Go to Sign-Up</button></a>
        </div>
    </div>
</div>


<div class="bg-primary text-light text-center py-2 fixed-bottom">
    <div class="col-12">
        <p class="d-flex align-items-center justify-content-center">
            <a class="text-white mx-2"><i class="bi bi-c-circle"></i></a>
            2024 DrupalConnect Media Inc, Unregistered Trademark of Drupal
        </p>
    </div>
</div>


</body>
</html>


