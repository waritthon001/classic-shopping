<?php
   if(isset($_POST['submit']))
   {
       $fname = $_POST['fname'];
       $sname = $_POST['sname'];
       $email = $_POST['email'];
       $subject = $_POST['subject'];
       $message = $_POST['message'];
       if(empty($fname) || empty($sname) || empty($email) || empty($subject) || empty($message))
       {
           header("location:contact.php?error");
       }
       else
       {
           header("location:contact.php?success");
       }
   }
?>
