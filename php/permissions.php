<?php
  class permissions
  {
    public $user_who_will_play,$current_question_number,$lock_user;
    function __construct()
    {
      $darray = json_decode(file_get_contents("../json/runtime.json"),true);
      $this->user_who_will_play = $darray['user_who_will_play'];
      $this->current_question_number = $darray['current_question_number'];
      $this->lock_user = $darray['lock_user'];
      }

      function update()
      {
        $darray['user_who_will_play'] = $this->user_who_will_play;
        $darray['current_question_number'] = $this->current_question_number;
        $darray['lock_user']=$this->lock_user;
        file_put_contents("../json/runtime.json", json_encode($darray));
      }
    }
?>
