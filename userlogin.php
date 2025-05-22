<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
session_start();

function sanitize_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

//check for required fields from the form
if ((!filter_input(INPUT_POST, 'username')) ||
    (!filter_input(INPUT_POST, 'password'))) {
  header("Location: login.php");
  exit;
}

$mysqli = mysqli_connect("localhost", "cs213user", "letmein", "memorial_site");

$username = sanitize_input(filter_input(INPUT_POST, 'username'));
$password = sanitize_input(filter_input(INPUT_POST, 'password'));
$query = "SELECT id, username, fname, lname FROM users WHERE username = '".$username.
        "' AND pass = SHA1('".$password."')";

$result = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));

//get the number of rows in the result set; should be 1 if a match
if (mysqli_num_rows($result) == 1) {
  while ($info = mysqli_fetch_array($result)) {
    $_SESSION['fname'] = stripslashes($info['fname']);
    $_SESSION['lname'] = stripslashes($info['lname']);
    $_SESSION['username'] = stripslashes($info['username']);
    $_SESSION['id'] = stripslashes($info['id']);
  }


  //set authorization cookie using curent Session ID
  setcookie("auth", session_id(), time()+60*30, "/", "", 0);

  header("Location: index.php");
  exit;
} else {
  header("Location: login.php");
  exit;
}
?>
