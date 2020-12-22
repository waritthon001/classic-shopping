<?php 
    include('../../config.php');
    // $idSelect= $_GET['id'];
    $idp= $_GET['pid'];

    $ipp = explode(",", $idp);
    //    echo $idSelect;
    $idSelect=$ipp[0];
    $idProductSelect=$ipp[1];
    $sql="select * from orderdetails where orderNumber='$idSelect' and productCode='$idProductSelect'";
    
    // echo "Editview".$idSelect;
    // echo "  Editview".$idProductSelect;

    $rtt=explode(" ",$idProductSelect);
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    if($result){
        // echo "sucessfully";
        // header('location:../order.php');	
    }else{
        echo mysqli_error($conn);
    }
?>

	<?php include(ROOT_PATH . '/includes/head_section.php'); ?>
    <title>Admin || Edit Order</title>
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
    <h1>Edit Order</h1>
   
    <form action="viewOrderSave.php" method="post">
        <input type="hidden" name="id_select"value="<?php echo $idSelect?> ">
        <input type="hidden" name="pid_select"value="<?php echo $idProductSelect?> ">
        OrderNumber:<input type="text" name="orderNumber"value="<?php echo $row['orderNumber']?>"><br>
        ProductCode:<input type="text" name="productCode"value="<?php echo $row['productCode']?>"><br>
        QuantityOrdered:<input type="text" name="quantityOrdered"value="<?php echo $row['quantityOrdered']?>"><br>
        PriceEach:<input type="text" name="priceEach"value="<?php echo $row['priceEach']?>"><br>
        OrderLineNumber:<input type="text" name="orderLineNumber"value="<?php echo $row['orderLineNumber']?>"><br>
       
        <br/>
        <br/>
        <center>
		<div class="stats"  style="width:60%"> 
			<a style="color:black" type="submit" value="Edit">Edit</a>
			<a style="color:black" href="viewOrder.php?id=<?php echo $idSelect ?>">Back</a></div>
			</center>
    </form>
    </div>
</body>
</html>
