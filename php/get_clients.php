<?php
  $mappe = json_decode(file_get_contents("../json/score.json"),true);
  if($_POST['number_of_clients']==count($mappe)){}else{
  end($mappe);
  $client = key($mappe);
  require "get_clients_content.php";
  }
?>
