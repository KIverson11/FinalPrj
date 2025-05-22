<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
session_start();
?>

<html>

  <head>
    <title>Create an Account</title>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="submituser.js" defer></script>
    <style>
     label {
       font-weight: bold;
       display: block;
     }
     input {
       margin-bottom: 8px;
       display: block;
     }
    </style>
  </head>

  <body>
    <div class="card bg-light col-6 mx-auto mt-4">
      <div class="card-body">
        <h1>Create an account:</h1>
        <form method="post" action="submituser.php">
          <div class="mb-3 mt-3">
            <label for="username" class="form-label">Username:</label>
            <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" pattern="^[a-zA-Z0-9]{1,20}$" required>
          </div>
          <div class="mb-3">
            <label for="fname" class="form-label">First name:</label>
            <input type="text" class="form-control" id="fname" placeholder="Enter first name" name="fname" pattern="^[a-zA-Z]{1,30}$" required>
          </div>
          <div class="mb-3">
            <label for="lname" class="form-label">Last name:</label>
            <input type="text" class="form-control" id="lname" placeholder="Enter last name" name="lname" pattern="^[a-zA-Z]{1,30}$" required>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password:</label>
            <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" pattern="^[a-zA-Z0-9]{1,20}$" required>
          </div>
          <input type="submit" class="btn btn-primary mb-3" id="submit" name="submit" value="Submit">
        </form>
      </div>
    </div>
  </body>

</html>
