<?php
  $dfile = json_decode(file_get_contents("blocking_file.json"),true);
  $dfile['send'] = 1;
  file_put_contents("blocking_file.json", json_encode($dfile));
?>
