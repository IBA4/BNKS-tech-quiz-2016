<?php
  require_once "define_mcq.php";
  $gabs = new mcq($question_number);
  $gabs->randomize();
?>

<div class = "question">
  <h3><?php echo $gabs->question ?></h3>
</div>

<div class="options">
  <div class="option1"><?php echo $gabs->option_1 ?></div>
  <div class="option2"><?php echo $gabs->option_2 ?></div>
  <div class="option3"><?php echo $gabs->option_3 ?></div>
  <div class="option4"><?php echo $gabs->option_4 ?></div>
  <div class="option5"><?php echo $gabs->option_5 ?></div>
  <div class="option6"><?php echo $gabs->option_6 ?></div>
</div>
