<?php
  $question_number = $_POST['number'];
  require "permissions.php";
  $qwerty = new permissions();
  if ($qwerty->stop_update) {include "content.php";}
?>
