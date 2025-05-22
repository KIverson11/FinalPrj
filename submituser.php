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

//check for required fields from the form
if ((!filter_input(INPUT_POST, 'username')) ||
    (!filter_input(INPUT_POST, 'fname')) ||
    (!filter_input(INPUT_POST, 'lname')) ||
    (!filter_input(INPUT_POST, 'password'))) {
  header("Location: signup.php");
  exit;
}

if (filter_input(INPUT_POST, "username") &&
    filter_input(INPUT_POST, "fname") &&
    filter_input(INPUT_POST, "lname") &&
    filter_input(INPUT_POST, "password")) {

				if ((preg_match('/^[a-zA-Z0-9]{1,20}$/', filter_input(INPUT_POST, "username"))) &&
						(preg_match('/^[a-zA-Z0-9]{1,30}$/', filter_input(INPUT_POST, "fname"))) &&
						(preg_match('/^[a-zA-Z0-9]{1,30}$/', filter_input(INPUT_POST, "lname"))) &&
						(preg_match('/^[a-zA-Z0-9]{1,20}$/', filter_input(INPUT_POST, "password")))) {
					$username = sanitize_input(filter_input(INPUT_POST, "username"));
					$fname = sanitize_input(filter_input(INPUT_POST, "fname"));
					$lname = sanitize_input(filter_input(INPUT_POST, "lname"));
					$password = sanitize_input(filter_input(INPUT_POST, "password"));

					$mysqli = mysqli_connect("localhost", "cs213user", "letmein", "memorial_site");
					$query = "INSERT INTO users VALUES(null, '{$username}', '{$fname}', '{$lname}', SHA1('{$password}'))";

					$result = mysqli_query($mysqli, $query);

				} else {
					$httpStatusCode = 400;
					$httpStatusMsg = 'Bad request';
					$phpSapiName = substr(php_sapi_name(), 0, 3);

					if ($phpSapiName == 'cgi' || $phpSapiName == 'fpm') {
						header('Status: ' . $httpStatusCode . ' ' . $httpStatusMsg);
					} else {
						$protocol = isset($_SERVER['SERVER_PROTOCOL']) ? $_SERVER['SERVER_PROTOCOL'] : 'HTTP/1.0';
						header($protocol . ' ' . $httpStatusCode . ' ' . $httpStatusMsg);
					}
				}
    }
?>
