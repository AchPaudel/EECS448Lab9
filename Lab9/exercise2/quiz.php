<?php
  $score = 5;


/*  $q1 = $_POST['q0'];
  $q2 = $_POST['q1'];
  $q3 = $_POST['q2'];
  $q4 = $_POST['q3'];
  $q5 = $_POST['q4'];
  */

      echo "<b>Question 1: </b>";
      if ($_POST['q0'] == "Topeka")
        echo "<b> Correct</b>";
      else {
        echo "<b> Incorrect</b>";
        $score--;
      }
      echo "<br>";

      echo "<b>Question 2: </b>";
      if ($_POST['q1'] == "7")
        echo "<b> Correct</b>";
      else {
        echo "<b> Incorrect</b>";
        $score--;
      }
      echo "<br>";

      echo "<b>Question 3: </b>";
      if ($_POST['q2'] == "2020")
        echo "<b> Correct</b>";
      else {
        echo "<b> Incorrect</b>";
        $score--;
      }
      echo "<br>";

      echo "<b>Question 4: </b>";
      if ($_POST['q3'] == "Russia")
        echo "<b> Correct</b>";
      else {
        echo "<b> Incorrect</b>";
        $score--;
      }
      echo "<br>";


      echo "<b>Question 5: </b>";
      if ($_POST['q4'] == "KU")
        echo "<b> Correct</b>";
      else {
        echo "<b> Incorrect</b>";
        $score--;
      }
      echo "<br>";

    echo "You got {$score} out of 5 right. Your percentage is ".($score*20)."%.";
  ?>
