<?php
  require "permissions.php";
  $ankit = json_decode(file_get_contents("../json/score.json"),true);
  $porcupinetree = json_decode(file_get_contents("../json/client_activity.json"),true);
  $porcupinetree['activity_number'] = 0;
  $ankit = array();
  $data = json_decode(stripslashes($_POST['data']));
  foreach ($data as $key => $value) {
    $ankit[$value] = 0;
  }
  $init = new permissions();
  $init->current_question_number = 0;
  $init->user_who_will_play = "";
  $init->lock_user = 1;
  $init->update();
  file_put_contents("../json/score.json", json_encode($ankit));
  file_put_contents("../json/client_activity.json", json_encode($porcupinetree));
?>
