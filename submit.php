<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 'On');

function sanitize_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if (filter_input(INPUT_POST, "submit") &&
    filter_input(INPUT_COOKIE, "auth") == session_id()) {
	//check for required fields from the form
	if ((!filter_input(INPUT_POST, 'message')) ||
			(!filter_input(INPUT_POST, 'candle'))) {
		header("Location: eulogies.php");
		exit;
	}
  $mysqli = mysqli_connect("localhost", "cs213user", "letmein", "memorial_site");
  $user_id = $_SESSION['id'];
  $message = sanitize_input(filter_input(INPUT_POST, "message"));
  $candle = sanitize_input(filter_input(INPUT_POST, "candle"));
  mysqli_query($mysqli, "INSERT INTO message_bodies(body) VALUES('{$message}')");
  $msg_id = mysqli_insert_id($mysqli);
  $candle_id = mysqli_fetch_assoc(mysqli_query($mysqli, "SELECT id FROM candles WHERE img_location = '{$candle}'"))['id'];
  $query = "INSERT INTO messages VALUES({$user_id}, {$msg_id}, {$candle_id})";
  mysqli_query($mysqli, $query);
}

header("Location: eulogies.php");
