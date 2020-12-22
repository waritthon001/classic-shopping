<?php  include('../../config.php'); ?>
	<?php include(ROOT_PATH . '/includes/head_section.php'); ?>
    <title>Admin || Add Customer Details</title>
    <link rel="stylesheet" href="../../static/css/admin_styling.css">
	</head>

	<body>
	    <div class="header">
	        <div class="logo">
	            <a href="<?php echo BASE_URL . 'admin/customer.php' ?>">
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
<br><br>
	    <div class="container dashboard">

	        <body>
	            <h1>
	                Add Customer Details
	            </h1>
	            <form action="addCusSave.php" method="post">
                CustomerNumber:<input type="text" name="customerNumber"><br>
                CustomerName:<input type="text" name="customerName"><br>
                CustomerLastName:<input type="text" name="contactLastName"><br>
                CustomerFirstName:<input type="text" name="contactFirstName"><br>
                Phone:<input type="text" name="phone"><br>
                CustomerAddress:<input type="text" name="addressLine1"><br>
                CustomerAddress2:<input type="text" name="addressLine2"><br>
                City:<input type="text" name="city"><br>
                State:<input type="text" name="state"><br>
                PostalCode:<input type="text" name="postalCode"><br>
                Country:<input type="text" name="country"><br>
					<br />
					<center>
		<div class="stats"  style="width:60%"> 
			<a style="color:black" type="submit" value="Save">Save</a>
			<a style="color:black" href="../customer.php">Back</a></div>
		</center>
	            </form>
	    </div>
	</body>

	</html>
