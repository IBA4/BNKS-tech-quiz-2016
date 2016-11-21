<?php
  $dfile = json_decode(file_get_contents("runtime.json"),true);
  $dfile['last_send']=$dfile['send'];
  $dfile['send'] = 0;
  file_put_contents("runtime.json", json_encode($dfile));
?>
