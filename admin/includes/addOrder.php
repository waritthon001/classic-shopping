<?php  include('../../config.php'); ?>
	<?php include(ROOT_PATH . '/includes/head_section.php'); ?>
    <title>Admin || Add Order</title>
    <link rel="stylesheet" href="../../static/css/admin_styling.css">
	</head>

	<body>
	    <div class="header">
	        <div class="logo">
	            <a href="<?php echo BASE_URL . 'admin/order.php'  ?>">
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

	    <div class="container dashboard">

	        <body>
	            <h1>
	                Add Order
	            </h1>
	            <form action="addOrderSave.php" method="post">
	                OrderNumber:<input type="text" name="orderNumber"><br>
	                OrderDate:<input type="text" name="orderDate"><br>
	                RequiredDate:<input type="text" name="requiredDate"><br>
	                ShippedDate:<input type="text" name="shippedDate"><br>
	                Status:<input type="radio" name='g' value='Shipped' />Shipped
	                <input type="radio" name='g' value='Resolved' />Resolved
	                <input type="radio" name='g' value='On Hold' />On Hold
	                <input type="radio" name='g' value='In Process' />In Process
	                <input type="radio" name='g' value='Disputed' />Disputed
	                <input type="radio" name='g' value='Cancelled' />Cancelled
	                Comments:<input type="text" name="comments"><br>
	                CustomerNumber:<input type="text" name="customerNumber"><br>
	                <br>
	                <br>


	                <br />
			<center>
		<div class="stats"  style="width:60%"> 
			<a style="color:black" type="submit" value="Save">Save</a>
			<a style="color:black" href="../order.php">Back</a></div>
			</center>
	            </form>
	    </div>
	</body>

	</html>
