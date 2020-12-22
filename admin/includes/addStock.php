<?php  include('../../config.php'); ?>
	<?php include(ROOT_PATH . '/includes/head_section.php'); ?>
    <title>Admin || Add Stock</title>
    <link rel="stylesheet" href="../../static/css/admin_styling.css">
	</head>

	<body>
	    <div class="header">
	        <div class="logo">
	            <a href="<?php echo BASE_URL . 'admin/order.php' ?>">
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
	                Add Stock
	            </h1>
	            <form action="addStockSave.php" method="post">
				productCode:<input type="text" name="productCode"><br>
				productName:<input type="text" name="productName"><br>
				productLine:<input type="text" name="productLine"><br>
				productScale:<input type="text" name="productScale"><br>
				productVendor:<input type="text" name="productVendor"><br>
				productDescription:<input type="text" name="productDescription"><br>
				buyPrice:<input type="text" name="buyPrice"><br>
				MSRP:<input type="text" name="MSRP"><br>
	                <br>
	                <br>


	                <br />

					<center>
		<div class="stats"  style="width:60%"> 
			<a style="color:black" type="submit" value="Save">Save</a>
			<a style="color:black" href="../stock.php">Back</a></div>
			</center>
	            </form>
	    </div>
	</body>

	</html>
