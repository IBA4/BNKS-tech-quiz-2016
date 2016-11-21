<?php
  /**
   *
   */
  class permissions

  {
    public $user,$stop_update;
    function __construct()
    {
      $darray = json_decode(file_get_contents("blocking_file.json"),true);
      $this->user = $darray['user'];
      if ($darray['send'] == $darray['last_send']){$this->stop_update = 0;}else {
        $this->stop_update = 1;
      }
    }
  }

?>
