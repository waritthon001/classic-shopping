<?php  include('../../config.php'); 
      $idSelect= $_GET['id'];
?>
	<?php include(ROOT_PATH . '/includes/head_section.php'); ?>
    <title>Admin || Add Product</title>
    <link rel="stylesheet" href="../../static/css/admin_styling.css">
	</head>

	<body>
	    <div class="header">
	        <div class="logo">
	            <a href="<?php echo BASE_URL .  'admin/order.php' ?>">
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
	                Add Product
	            </h1>
	            <form action="viewAddOrderSave.php" method="post">
                    OrderNumber:<input type="text" name="orderNumber"><br>
	                ProductCode:<input type="text" name="productCode"><br>
	                QuantityOrdered:<input type="text" name="quantityOrdered"><br>
	                PriceEach:<input type="text" name="priceEach"><br>
	                OrderLineNumber:<input type="text" name="orderLineNumber"><br>
	                <br>
	                <br>


	                <br />
					<center>
		<div class="stats"  style="width:60%"> 
			<a style="color:black" type="submit" value="Save">Save</a>
			<a style="color:black" href="viewOrder.php?id=<?php echo $idSelect ?>">Back</a></div>
			</center>
	            </form>
	    </div>
	</body>

	</html>
