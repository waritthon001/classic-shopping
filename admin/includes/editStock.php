<?php 
    $idSelect= $_GET['id'];
    include('../../config.php');
    $sql="select * from products where productCode='$idSelect'";
   
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
?>

	<?php include(ROOT_PATH . '/includes/head_section.php'); ?>
    <title>Admin || Edit Stock list</title>
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
    <h1>Edit Stock list</h1>
    
    <form action="editStockSave.php" method="post">
        <input type="hidden" name="id_select"value="<?php echo $idSelect?> ">
        productCode:<input type="text" name="productCode"value="<?php echo $row['productCode']?>"><br>
        productName:<input type="text" name="productName"value="<?php echo $row['productName']?>"><br>
        productLine:<input type="text" name="productLine"value="<?php echo $row['productLine']?>"><br>
        productScale:<input type="text" name="productScale"value="<?php echo $row['productScale']?>"><br>
        productVendor:<input type="text" name="productVendor"value="<?php echo $row['productVendor']?>"><br>
        productDescription:<input type="text" name="productDescription"value="<?php echo $row['productDescription']?>"><br>
        buyPrice:<input type="text" name="buyPrice"value="<?php echo $row['buyPrice']?>"><br>
        MSRP:<input type="text" name="MSRP"value="<?php echo $row['MSRP']?>"><br>
        <br>
      
        <br/>
        <br/>
        <center>
		<div class="stats"  style="width:60%"> 
			<a style="color:black" type="submit" value="Edit">Edit</a>
            </center>
        <!-- <button><a href="../order.php">Back</a></button> -->
        <!-- <button><a href="../dashboard.php">Dashboard</a></button> -->
    </form>
    </div>
</body>
</html>
