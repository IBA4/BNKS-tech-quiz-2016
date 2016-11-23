<?session_start()?>
<!DOCTYPE html>
<html>
<head><title>SANJEEV</title></head>
<body>
<?php
$dfile = array('send' => 1, 'user' => "gabs" );
file_put_contents("blocking_file.json", json_encode($dfile));
?>
</body>
</html>
