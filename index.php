<!DOCTYPE html>
<html>
<head>
<title>techno-quiz</title>
<script src="jquery.min.js"></script>
<script>
  $(document).ready(function() {
      $("#unblock").click(function() {
        $.ajax({
          url: 'unblock.php',
          type: 'get',
          async : true,
          cache : false,
        });
      });

      $("#block").click(function() {
        $.ajax({
          url: 'block.php',
          type: 'get',
          async : true,
          cache : false,
        });
      });
      
    });
</script>
<?php
?>
</head>
<body>
  <input type="button" id="unblock" value="Send">
  <input type="button" id="block" value="Stop sending">

</body>
</html>
