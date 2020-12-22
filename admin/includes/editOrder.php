<?php 
    $idSelect= $_GET['id'];
    include('../../config.php');
    $sql="select * from orders where orderNumber=$idSelect";
   
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
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
    
    <form action="editOrderSave.php" method="post">
        <input type="hidden" name="id_select"value="<?php echo $idSelect?> ">
        OrderNumber:<input type="text" name="orderNumber"value="<?php echo $row['orderNumber']?>"><br>
        OrderDate:<input type="text" name="orderDate"value="<?php echo $row['orderDate']?>"><br>
        RequiredDate:<input type="text" name="requiredDate"value="<?php echo $row['requiredDate']?>"><br>
        ShippedDate:<input type="text" name="shippedDate"value="<?php echo $row['shippedDate']?>"><br>
        <br>
        Status:
        <?php 
            if ($row['status']=='Shipped' ) {
                echo "<input type='radio' name='g' value='Shipped' checked/>Shipped";
                echo "<input type='radio' name='g' value='Resolved' />Resolved";
                echo "<input type='radio' name='g' value='On Hold' />On Hold";
                echo "<input type='radio' name='g' value='In Process' />In Process";
                echo "<input type='radio' name='g' value='Disputed' />Disputed";
                echo "<input type='radio' name='g' value='Cancelled' />Cancelled";
            }
            else if($row['status']=='Resolved' ){
                echo "<input type='radio' name='g' value='Shipped' />Shipped";
                echo "<input type='radio' name='g' value='Resolved' checked/>Resolved";
                echo "<input type='radio' name='g' value='On Hold' />On Hold";
                echo "<input type='radio' name='g' value='In Process' />In Process";
                echo "<input type='radio' name='g' value='Disputed' />Disputed";
                echo "<input type='radio' name='g' value='Cancelled' />Cancelled";
            }
            else if($row['status']=='On Hold' ){
                echo "<input type='radio' name='g' value='Shipped' />Shipped";
                echo "<input type='radio' name='g' value='Resolved' />Resolved";
                echo "<input type='radio' name='g' value='On Hold' checked/>On Hold";
                echo "<input type='radio' name='g' value='In Process' />In Process";
                echo "<input type='radio' name='g' value='Disputed' />Disputed";
                echo "<input type='radio' name='g' value='Cancelled' />Cancelled";
            }
            else if($row['status']=='In Process' ){
                echo "<input type='radio' name='g' value='Shipped' />Shipped";
                echo "<input type='radio' name='g' value='Resolved' />Resolved";
                echo "<input type='radio' name='g' value='On Hold' />On Hold";
                echo "<input type='radio' name='g' value='In Process' checked/>In Process";
                echo "<input type='radio' name='g' value='Disputed' />Disputed";
                echo "<input type='radio' name='g' value='Cancelled' />Cancelled";
            }
            else if($row['status']=='Disputed' ){
                echo "<input type='radio' name='g' value='Shipped' />Shipped";
                echo "<input type='radio' name='g' value='Resolved' />Resolved";
                echo "<input type='radio' name='g' value='On Hold' />On Hold";
                echo "<input type='radio' name='g' value='In Process' />In Process";
                echo "<input type='radio' name='g' value='Disputed' checked/>Disputed";
                echo "<input type='radio' name='g' value='Cancelled' />Cancelled";
            }
            else if($row['status']=='Cancelled' ){
                echo "<input type='radio' name='g' value='Shipped' />Shipped";
                echo "<input type='radio' name='g' value='Resolved' />Resolved";
                echo "<input type='radio' name='g' value='On Hold' />On Hold";
                echo "<input type='radio' name='g' value='In Process' />In Process";
                echo "<input type='radio' name='g' value='Disputed' />Disputed";
                echo "<input type='radio' name='g' value='Cancelled' checked/>Cancelled";
            }
            ?>
        <br>
        Comments:<input type="text" name="comments"value="<?php echo $row['comments']?>"><br>
        CustomerNumber:<input type="text" name="customerNumber"value="<?php echo $row['customerNumber']?>"><br>
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
