<?php
  $soad = json_decode(file_get_contents("../json/score.json"),true);
  echo "<div id='score' class='main-card animated bounce score'>";
  foreach ($soad as $user => $score) {
    echo "<div id='user-card-$user' class='user-card'>";
      echo "<div id='user-id-$user' class='user-head'>";
          echo "<span>$user</span>";
        echo "</div>";
        echo "<div id='user-score-$user' class='user-score'>";
          echo "<div class='animated flip'>$score</div>";
        echo "</div>";
      echo "</div>";
  }
  echo "</div>";
?>
