<?php  include('config.php'); 
        include('includes/loginUser.php');
        include('includes/head_section.php');
?>

	<title>Classic Shopping  || Sign in </title>
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
		<form method="post" action="<?php echo BASE_URL . 'index.php'; ?>" >
			<h2>Login</h2>
			<?php include(ROOT_PATH . '/includes/errors.php') ?>
			<input type="text" name="username" value="<?php echo $username; ?>" value="" placeholder="Username">
			<input type="password" name="password" placeholder="Password">
			<button type="submit" class="btn" name="login_btn">Login</button>
			<p>
				Not yet a member? <a href="register.php">Sign up</a>
			</p>
		</form>
	</div>
</div>
</body>

</html>