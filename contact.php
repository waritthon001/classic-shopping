<?php
require_once('config.php');
require_once(ROOT_PATH . '/includes/head_section.php');
?>

<div class="navbar">
		<div class="logo_div">
			<a href="index.php"><h1>Classic Shopping</h1></a>
		</div>
		<ul>
	  		<li><a class="active" href="index.php">Home</a></li>
	  		<li><a href="contact.php">Contact</a></li>
	  		<li><a href="About.php">About</a></li>
		</ul>
	</div>
<link rel="stylesheet" href="contact.css">
<div class="wrapper">
  <div class="content">
    <h1>CONTACT FORM</h1>
    <p>Connect with us by sending your views.</p>
    <hr>
    <?php

       $msg ="";

       if(isset($_GET['error']))
       {

          $msg = " Please Fill in the Blanks ";
          echo '<div class="alert alert-danger">'.$msg.'</div>';
       }
       if(isset($_GET['success']))
       {

        $msg = "The Message Has Been Sent";
        echo '<div class="alert alert-danger">'.$msg.'</div>';
       }


    ?>
  </div>

 <div class="form">
  <form action="contactprocess.php" method="post">

    <div class="top-form">
      <div class="inner-form">
        <div class="label">Firstname</div>
        <input type="text" name="fname" placeholder="Your Firstname">
      </div>
      <div class="inner-form">
        <div class="label">Surname</div>
        <input type="text" name="sname" placeholder="Your Surname">
      </div>
      <div class="inner-form">
        <div class="label">Email</div>
        <input type="text" name="email" placeholder="Your email">
      </div>
    </div>

    <div class="middle-form">
      <div class="inner-form">
        <div class="label">Subject</div>
        <input type="text" name="subject" placeholder="Subject">
      </div>
    </div>

    <div class="bottom-form">
      <div class="inner-form">
        <div class="label">Message</div>
        <textarea name="message" placeholder="Your message"></textarea>
      </div>
    </div>

    <div>
      <button class="button" type="submit" name="submit">SENT FORM</button>
    </div>

  </form>
 </div>
</div>
