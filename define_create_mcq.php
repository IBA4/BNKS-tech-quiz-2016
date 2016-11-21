<?php

  class define_create_mcq
  {

    public $question;
    public $option_array = array();//the last entry will be recognized as the correct answer
    public function add_to_db()
    {
      require "mysql_login.php";
      echo $db_object->insert_id;
      // $query = "INSERT INTO `questions` (`question`) VALUES ('$this->question')";
      // $db_object->query($query) or trigger_error($db_object->error."[$query]");
      // $temp = "";
      // for ($i=0; $i < 6; $i++) {
      //   $temp = $temp."'".$this->option_array[$i]."'".",";
      // }
      // $temp = rtrim($temp , ",");
      // $query = "INSERT INTO `answers` (`option_1`,`option_2`,`option_3`,`option_4`,`option_5`,`correct`)
      // VALUES ($temp)";
      // $db_object->query($query) or trigger_error($db_object->error."[$query]");
      $db_object->close();
    }
  }

?>
