<?php  include('config.php');
	include('includes/public_functions.php');
	include('includes/head_section.php');
?>
	<title>Classic Shopping || History</title>
</head>
<body>
<div class="container">
	<!-- Navbar -->
	<div class="navbar">
		<div class="logo_div">
			<a href="index2.php"><h1>Classic Shopping</h1></a>
		</div>
		<ul>
	  		<li><a class="active" href="index2.php">Home</a></li>
			<li><a href="cart.php"><img src="static/images/cart.png" width="23px" ></a></li>
	  		<li><a href="contact2.php">Contact</a></li>
	  		<li><a href="About2.php">About</a></li>
		</ul>
	</div>
	<!-- // Navbar -->
	<!-- more content still to come here ... -->
	<?php
/*session_start();*/
require_once ("dbcontroller.php");
$db_handle = new DBController();
?>
<div id="product-grid">
        <div class="txt-heading">History Orders</div>
            <?php
			$total_point = 0;
            $product_array = $db_handle->runQuery("SELECT *, sum(quantityOrdered*buyPrice) as 'totalPrice', (sum(quantityOrdered*buyPrice)/100)*3 as 'memberPoint'
												FROM orders JOIN customers on orders.customerNumber=customers.customerNumber JOIN orderdetails on orders.orderNumber=orderdetails.orderNumber JOIN products on orderdetails.productCode=products.productCode
												WHERE customers.customerNumber='" . $_SESSION['user']['customerNo'] . "' GROUP by orders.orderNumber ORDER by orderDate");
			if (! empty($product_array)) {
                foreach ($product_array as $key => $value) {
                    ?>
                    <div class="product-item">
            <form method="post">
                <div class="product-tile-footer" style="width: 1100px;">
					<div class="cart-action"><?php echo $product_array[$key]["status"]; ?></div>
                    <div class="product-title"><?php echo "orderID: " . $product_array[$key]["orderNumber"]; ?></div>
					<hr>
                    <div class=""><?php echo "orderDate: " . $product_array[$key]["orderDate"]; ?></div>
					<div class=""><?php echo "requiredDate: " . $product_array[$key]["requiredDate"]; ?></div>
					<div class=""><?php echo "shippedDate: " . $product_array[$key]["shippedDate"]; ?></div>
					<br />
					<div class=""><?php echo $product_array[$key]["comments"]; ?></div>
					<br />
					<div class="cart-action"><?php echo "totalPrice: " . "$" . $product_array[$key]["totalPrice"]; ?></div>
					<hr>
					<div class="cart-action"><?php echo "memberPoint: " . $product_array[$key]["memberPoint"] . " point"; ?></div>
                </div>
            </form>
        </div>
		<hr>
                    <?php
					$total_point+=$product_array[$key]["memberPoint"];
				}
			}
			echo "totalPoint: " . $total_point . " point"
        ?>
</div>
</body>

</html>