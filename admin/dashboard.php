<?php include('../config.php'); ?>
<?php include(ROOT_PATH . '/admin/includes/admin_functions.php'); ?>
<?php include(ROOT_PATH . '/admin/includes/head_section.php'); ?>
<title>Admin | Dashboard</title>
</head>

<body>
	<div class="header">
		<div class="logo">
			<a href="<?php echo BASE_URL . 'admin/dashboard.php' ?>">
				<h1>Classic Shopping - Admin</h1>
			</a>
		</div>
		<?php if (isset($_SESSION['user'])) : ?>
			<div class="user-info">
				<span><?php echo $_SESSION['user']['username'] ?></span> &nbsp; &nbsp;
				<a href="<?php echo BASE_URL . '/logout.php'; ?>" class="logout-btn">logout</a>
			</div>
		<?php endif ?>
	</div>
		<!-- Left side menu -->
		<br><br><div class="container dashboard" align="center">
		<br><h1>Welcome</h1><br><br>
			<div class="stats"style="width:60%;">
				<a href="users.php">
						<!-- <span>43</span> <br> -->
						<span style="color:black">Manage users password</span>
					</a>
				<a href="customer.php">
						<!-- <span>43</span> <br> -->
						<span style="color:black">Manage customer</span>
					</a>
				<a href="employee.php" >
						<!-- <span>43</span> <br> -->
						<span style="color:black">Manage employee</span>
					</a>
				<a href="order.php">
					<!-- <span>43</span> <br> -->
					<span style="color:black">Manage Orders</span>
				</a>
				<a href="stock.php">
					<!-- <span>43</span> <br> -->
					<span style="color:black">Manage stocks</span>
				</a>
			</div>
	
			<br><br><br>
			<div class="buttons">
				<!-- <a href="users.php">Add Users</a> -->
				<!-- <a href="posts.php">Add Posts</a> -->
			
		</div>
	</div>
</body>

</html>