<?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION["fname"]);
session_destroy();

header('location:index.php');

?>
  