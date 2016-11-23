<?php
  class permissions
  {
    public $user_who_will_play,$current_question_number;
    function __construct()
    {
      $darray = json_decode(file_get_contents("../json/runtime.json"),true);
      $this->user_who_will_play = $darray['user_who_will_play'];
      $this->current_question_number = $darray['current_question_number'];
      }

      function update()
      {
        $darray['user_who_will_play'] = $this->user_who_will_play;
        $darray['current_question_number'] = $this->current_question_number;
        file_put_contents("../json/runtime.json", json_encode($darray));
      }
    }
?>
