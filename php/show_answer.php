<?php
  require "permissions.php";
  require "define_mcq.php";
  $show = new permissions();
  $answer = new mcq($show->current_question_number);
  if($show->show_answer){
    echo $answer->correct_answer;
  }
?>
