<!DOCTYPE html>
<html>

  <head>
    <title>User Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
        <h1>Sign in:</h1>
        <form method="post" action="userlogin.php">
          <div class="mb-3 mt-3">
            <label for="username" class="form-label">Username:</label>
            <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" pattern="^[a-zA-Z0-9]{1,20}$" required>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password:</label>
            <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" pattern="^[a-zA-Z0-9]{1,20}$" required>
          </div>
          <button type="submit" class="btn btn-primary mb-3">Submit</button>
        </form>
        <span>
          Don't have an account?
          <a href="signup.php">Sign up!</a>
        </span>
      </div>
    </div>
    <!-- <form method="post" action="userlogin.php">
         <fieldset> <legend><h3> Login Form </h3></legend>
         <label for="username">Username:</label>
         <input id="username" type="text" name="username"/>
         <label for="password">Password:</label>
         <input id="password" type="password" name="password"/>
         <input type="submit" name="submit" value="Login"/>
         </fieldset>
         </form> -->
  </body>

</html>
