<?php
  require "permissions.php";
  $haha = json_decode(file_get_contents("../json/score.json"),true);
  $hehe = new permissions();
  $hehe->lock_user = 0;
  $hehe->current_question_number = 0;
  $haha = array();
  $hehe->update();
  file_put_contents("../json/score.json", json_encode($haha));
?>
