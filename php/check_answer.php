<?php
require "define_mcq.php";
require "activities.php";
$pwd = new mcq($_POST['question_number']);
$niroj = new activities();
$niroj->activity_number++;
$niroj->activity_answer = $_POST['answer'] ;
if ($_POST['answer']==$pwd->correct_answer){
  $bfmv = json_decode(file_get_contents("../json/score.json"),true);
  $pot = $_POST['user'];
  $bfmv["$pot"] = $bfmv["$pot"] + 15;
  file_put_contents("../json/score.json", json_encode($bfmv));
  $niroj->score_update_user = $pot;
}else{
  $niroj->score_update_user = "";
}
$niroj->update();
?>
