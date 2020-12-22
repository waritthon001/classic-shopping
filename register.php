<?php  include('config.php'); 
        include('includes/registerUser.php');
		include('includes/head_section.php');
		// print_r($_SESSION);
?>

<title>Classic Shopping || Sign up </title>
</head>
<body>
<div class="container">
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
	<div style="width: 40%; margin: 20px auto;">
		<form method="post" action="register.php" >
			<h2>Register on Classic Shopping </h2>
			<?php include(ROOT_PATH . '/includes/errors.php') ?>
			<input  type="text" name="username" value="<?php echo $username; ?>"  placeholder="Username">
			<input type="email" name="email" value="<?php echo $email ?>" placeholder="Email">
			<input type="password" name="password_1" placeholder="Password">
            <input type="password" name="password_2" placeholder="Password confirmation">
            
			<button type="submit" class="btn" name="reg_user">Register</button>
			<p>
				Already a member? <a href="login.php">Sign in</a>
			</p>
		</form>
	</div>
</div>
</body>

</html>