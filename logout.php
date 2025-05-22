<?php
session_start();
setcookie("auth", session_id(), time()-1, "/", "", 0);
session_destroy();
header("Location: LogOutConfirmed.php");
?>
