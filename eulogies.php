<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 'On');
?>
<html>

  <head>
    <title>Eulogies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
     #form-flex-container {
       display: flex;
       justify-content: center;
     }
     #form-container {
       background-color: #f0f0f8;
       border-radius: 10px;
       box-shadow: 0px 3px 8px #777;
       margin-top: 6rem;
       padding: 1rem;
     }
     h2 {
       text-align: center;
       margin-top: 6rem;
     }
     .title {
       font-weight: bold;
     }
     .eulogy-container {
       display: flex;
       flex-wrap: wrap;
       justify-content: center;
       margin: 3rem;
     }
     .eulogy {
       margin: 10px;
       border-radius: 10px;
       box-shadow: 0px 3px 8px #777;
       overflow: hidden;
       width: 15rem;
     }
     .eulogy-body {
       background-color: #f0f0f8;
       padding: 20px;
       height: 100%;
     }
     .candle {
       width: 100%;
     }
     .name {
       font-weight: bold;
       margin-top: 0;
     }
     .message {
       overflow-wrap: break-word;
     }
    </style>
  </head>

  <body>
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
            <?php if (isset($_COOKIE['auth']) && $_COOKIE['auth'] == session_id()) { ?>
                <a class="navbar-text nav-item" href="logout.php" style="text-decoration: none;">Logout</a>
            <?php } else { ?>
                <a class="navbar-text nav-item" href="login.php" style="text-decoration: none;">Login</a>
            <?php } ?>
        </div>
        </div>
    </nav>
    <?php


    if (filter_input(INPUT_COOKIE, "auth") == session_id()) {
    ?>

      <div id='form-flex-container'>
        <div id='form-container'>
          <span class='title'>Submit a Eulogy</span>
          <form id="eulogy-form" action="submit.php" method="POST">
            <label for="message">Type something thoughtful:</label><br>
            <textarea id="message" name="message" rows="6" cols="60" placeholder="Your message here..." required></textarea><br>
            <label for="candle">Select a candle:</label>
            <select id="candle" name="candle" required>
              <option value="candle_big.png">Big Candle</option>
              <option value="candle_med.png">Medium Candle</option>
              <option value="candle_hands.png">Handheld Candle</option>
              <option value="candle_classy.png">Classy Candle</option>
              <option value="candle_table.png">Table Candle</option>
              <option value="candle_tealight.png">Tealight Candle</option>
              <option value="candle_tupac.png">Tupac Candle</option>
            </select>
            <input id="submit" name="submit" type="submit">
          </form>
        </div>
      </div>

    <?php } else { ?>
      <div>
        <h2><a href="login.php">Sign in</a> to leave a eulogy!</h2>
      </div>
      <?php }

    $mysqli = mysqli_connect("localhost", "cs213user", "letmein", "memorial_site");

    //check for required fields from the form

    $candles_query = "SELECT u.fname, u.lname, mb.body, c.img_location ".
                     "FROM messages m ".
                     "JOIN message_bodies mb ON m.message_id = mb.id ".
                     "JOIN candles c ON m.candle_id = c.id ".
                     "JOIN users u ON u.id = m.user_id ".
                     "ORDER BY mb.id DESC";

    $result = mysqli_query($mysqli, $candles_query);

    echo "<div class='eulogy-container'>";
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<div class='eulogy'>";
      echo "  <img class='candle' src='res/{$row['img_location']}'>";
      echo "  <div class='eulogy-body'>";
      echo "    <p class='name'>{$row['fname']} {$row['lname']}</p>";
      echo "    <p class='message'>{$row['body']}</p>";
      echo "  </div>";
      echo "</div>";
    }
    echo "</div>";
    ?>

  </body>
</html>
