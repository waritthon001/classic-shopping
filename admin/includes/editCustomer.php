<?php
    $idSelect= $_GET['id'];
    include('../../config.php');
    $sql="select * from customers where customerNumber=$idSelect";

    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    $arr=array("English","Thai","Indonesia","Laos");
?>

	<?php include(ROOT_PATH . '/includes/head_section.php'); ?>
    <title>Admin || Edit Customer Details</title>
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
        <div class="container dashboard">
    <h1>Edit Customer Details</h1>

    <form action="editCusSave.php" method="post">
        <input type="hidden" name="id_select"value="<?php echo $idSelect?> ">
        CustomerNumber:<input type="text" name="customerNumber"value="<?php echo $row['customerNumber']?>"><br>
        CustomerName:<input type="text" name="customerName"value="<?php echo $row['customerName']?>"><br>
        CustomerLastName:<input type="text" name="contactLastName"value="<?php echo $row['contactLastName']?>"><br>
        CustomerFirstName:<input type="text" name="contactFirstName"value="<?php echo $row['contactFirstName']?>"><br>
        Phone:<input type="text" name="phone"value="<?php echo $row['phone']?>"><br>
        CustomerAddress:<input type="text" name="addressLine1"value="<?php echo $row['addressLine1']?>"><br>
        CustomerAddress2:<input type="text" name="addressLine2"value="<?php echo $row['addressLine2']?>"><br>
        City:<input type="text" name="city"value="<?php echo $row['city']?>"><br>
        State:<input type="text" name="state"value="<?php echo $row['state']?>"><br>
        PostalCode:<input type="text" name="postalCode"value="<?php echo $row['postalCode']?>"><br>
        Country:<input type="text" name="country"value="<?php echo $row['country']?>"><br>
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
