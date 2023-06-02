<?php
  session_start();
  session_destroy();
  $url = $_SERVER['SERVER_NAME'];
  header("location: ../../index.php");
  exit;