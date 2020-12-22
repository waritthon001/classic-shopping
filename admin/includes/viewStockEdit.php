<?php 
    include('../../config.php');
    // $idSelect= $_GET['id'];
    $idp= $_GET['pid'];

    $ipp = explode(",", $idp);
    //    echo $idSelect;
    $product_id=$ipp[0];
    $id=$ipp[1];
    $sql="select * from stock where product_id='$product_id' and id='$id'";
    
    // echo "Editview".$idSelect;
    // echo "  Editview".$idProductSelect;

    // $rtt=explode(" ",$idProductSelect);
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
	            <a href="<?php echo BASE_URL .  'admin/stock.php' ?>">
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
    <h1>Edit Stock</h1>
   
    <form action="viewStockSave.php" method="post">
        <input type="hidden" name="product_id"value="<?php echo $product_id?> ">
        <input type="hidden" name="id"value="<?php echo $id?> ">
        product_id:<input type="text" name="product_id"value="<?php echo $row['product_id']?>"><br>
        date:<input type="text" name="date"value="<?php echo $row['date']?>"><br>
        quantity:<input type="text" name="quantity"value="<?php echo $row['quantity']?>"><br>
        lot:<input type="text" name="lot"value="<?php echo $row['lot']?>"><br>
       <br/>
        <br/>
        <center>
		<div class="stats"  style="width:60%"> 
			<a style="color:black" type="submit" value="Edit">Edit</a>
			<a style="color:black" href="viewStock.php?id=<?php echo $product_id ?>">Back</a></div>
			</center>
    </form>
    </div>
</body>
</html>
