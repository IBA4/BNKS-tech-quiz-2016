<?php
  require "permissions.php";
  $permi = new permissions();
  if ($permi->lock_user){echo "locked";}else{
  $bfmv = json_decode(file_get_contents("../json/score.json"),true);
  $ratm = $_POST['user'];
  $bfmv["$ratm"] = 0;
  file_put_contents("../json/score.json", json_encode($bfmv));
}
?>
