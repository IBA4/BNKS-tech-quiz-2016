<?php
  class activities
  {
    public $activity_number,$activity_answer,$score_update_user;
    function __construct()
    {
      $darray = json_decode(file_get_contents("../json/client_activity.json"),true);
      $this->activity_number = $darray['activity_number'];
      $this->activity_answer = $darray['activity_answer'];
      $this->score_update_user = $darray['score_update_user'];
      }

      function update()
      {
        $darray['activity_number'] = $this->activity_number;
        $darray['activity_answer'] = $this->activity_answer;
        $darray['score_update_user'] = $this->score_update_user;
        file_put_contents("../json/client_activity.json", json_encode($darray));
      }
    }
?>
