<?php

// The main class to create the object to fetch and update question and its data of the mcq.

  class mcq
    {
      // Creating the constuctor to initialize the question, question_no,
      // options, correct answer and error
      function __construct($insert_question_number)
      {
        require "mysql_login.php";//<!> When invoking construct the login information must be
                                  //    imported with require not require_once.

        $this->question_number = $insert_question_number;// Question no. property of the object.


        //Querying the database to fetch question from questions table and
        //initialize the question property.
        $query = "SELECT * FROM questions WHERE question_no = $this->question_number";//<!>always use double quotation marks "" for querys.
        $result = $db_object->query($query) or trigger_error($db_object->error."[$query]");
        $row = $result->fetch_array(MYSQLI_ASSOC);
        $this->question = $row['question'];

        //Querying the database to fetch data from answers table and
        //initialize the options and correct answer property.
        $query = "SELECT * FROM answers WHERE question_no = $this->question_number";
        $result = $db_object->query($query);
        $row = $result->fetch_array(MYSQLI_ASSOC);
        $this->option_1 = $row['option_1'];
        $this->option_2 = $row['option_2'];
        $this->option_3 = $row['option_3'];
        $this->option_4 = $row['option_4'];
        $this->option_5 = $row['option_5'];
        $this->option_6 = $row['correct'];
        $this->correct_answer = $row['correct'];

        //Initialize the recent mysql errors to the error property.
        $this->error = $db_object->error_list;
        $result->close();
        $db_object->close();
      }

      //Shuffles the order of the options.
      function randomize()
      {
        $temp = array($this->option_1,$this->option_2,$this->option_3,$this->option_4,$this->option_5,$this->option_6);
        shuffle($temp);
        $this->option_1 = $temp[0];
        $this->option_2 = $temp[1];
        $this->option_3 = $temp[2];
        $this->option_4 = $temp[3];
        $this->option_5 = $temp[4];
        $this->option_6 = $temp[5];
      }

      //the method to update the data in the database.
      function update_question($updated_question){
        require "mysql_login.php";
        $query = "UPDATE `questions` SET `question` = '$updated_question' WHERE `questions`.`question_no` = $this->question_number";
        $db_object->query($query) or trigger_error($db_object->error."[$query]");
        $db_object->close();
      }

      //the method to update the options and correct answer...the last element of the array will be recognized
      //as the corrrect answer.
      function update_answers($updated_answers_array){
        require "mysql_login.php";
        for ($counter=1; $counter < 6; $counter++) {
          $temp_counter = $counter - 1;
          $query = "UPDATE `answers` SET `option_$counter` = '$updated_answers_array[$temp_counter]'
          WHERE `answers`.`question_no` = $this->question_number";
          $db_object->query($query) or trigger_error($db_object->error."[$query]");
        }
        $query = "UPDATE `answers` SET `correct` = '$updated_answers_array[5]'
        WHERE `answers`.`question_no` = $this->question_number";
        $db_object->query($query) or trigger_error($db_object->error."[$query]");
        $db_object->close();
      }
    }

?>
