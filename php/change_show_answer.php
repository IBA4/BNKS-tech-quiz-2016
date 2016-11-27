<?php
  require "permissions.php";
  $check = new permissions();
  $check->show_answer = $_POST['status'];
  $check->update();
?>
