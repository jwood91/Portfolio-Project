<?php
 // define variables and set to empty values
 include("connection.php");
 $firstNameErr = $lastNameErr = $emailErr = $phoneErr = $subjectErr = $messageErr = "";
 $firstName = $lastName = $email = $phone = $subject = $message = "";

   if ($_SERVER["REQUEST_METHOD"] == "POST") {
     if (empty($_POST["first-name"])) {
       $firstNameErr = "fail";
     } else {
       $firstName = test_input($_POST["first-name"]);
       // check if name only contains letters and whitespace
       if (!preg_match("/^[a-zA-Z-' ]*$/",$firstName)) {
         $firstNameErr = "fail";
       }
     }

     if (empty($_POST["last-name"])) {
        $lastNameErr = "fail";
      } else {
        $lastName = test_input($_POST["last-name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/",$lastName)) {
          $lastNameErr = "fail";
        }
      }

     if (empty($_POST["email"])) {
       $emailErr = "fail";
     } else {
       $email = test_input($_POST["email"]);
       // check if e-mail address is well-formed
       if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
         $emailErr = "fail";
       }
     }

     if (empty($_POST["subject"])) {
       $subjectErr = "fail";
     } else {
       $subject = test_input($_POST["subject"]);
     }

     if (strlen($_POST["message"]) <= 5) {
       $messageErr = "fail";
     } else {
       $message = test_input($_POST["message"]);
     }
     if ($firstNameErr == "" && $lastNameErr == "" && $emailErr == "" && $subjectErr == "" && $messageErr == "") {

       $sql = "INSERT INTO contacts (`first_name`, `last_name`, `email`, `subject`, `message`)
       VALUES (? , ? , ? , ? , ?)";
       $db->prepare($sql)->execute([$firstName, $lastName, $email, $subject, $message]);
       $was_submited = true;
     } else {
       $was_submited = false;
     }

   }

   function test_input($data) {
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return($data);
   }

 ?>