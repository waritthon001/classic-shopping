<?php 
    $idSelect= $_GET['id'];
    include('../../config.php');
    // echo "viewOrder".$idSelect;
    $sql="select * from orderdetails where orderNumber=$idSelect";
   
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    if($result){
        // echo "sucessfully";
        // header('location:../order.php');	
    }else{
        echo mysqli_error($conn);
    }
?>

<?php include(ROOT_PATH . '/admin/includes/head_section.php'); ?>
<title>Admin || Order Detail</title>
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
<br><br>
    <div class="container dashboard">
        <h1>Order Detail</h1><br>
        <center>
		<div class="stats"  style="width:60%"> 
			<a style="color:black" href="viewAddOrderDetail.php?id=<?php echo $idSelect ?>">add product</a></div>
			</center>
        <table border=" 1">
            
        <!-- <button><a href="dashboard.php">Dashboard</a></button> -->
            <!-- <button> <a href="includes/addOrder.php">add order</a> </button> -->
            <tr>
                <th>OrderNumber</th>
                <th>ProductCode</th>
                <th>QuantityOrdered</th>
                <th>PriceEach</th>
                <th>OrderLineNumber</th>
                <th>edit</th>
                <th>delete</th>

            </tr>
            <?php while ($row = mysqli_fetch_row($result)) { ?>
                <tr>
                    <td><?php echo $row[0] ?></td>
                    <td><?php echo $row[1] ?></td>
                    <td><?php echo $row[2] ?></td>
                    <td><?php echo $row[3] ?></td>
                    <td><?php echo $row[4] ?></td>
                    <!-- <td><a href="includes/deleteOrder.php?id=<?php echo $row[0] ?>">Delete</a></td> -->
                    <!-- <td align="center"><input type="checkbox"value="<?php echo $row[0] ?>"name="id[]"></td> -->
                    <!-- <input type="hidden" name="id"value="<?php echo $row[0]?> "> -->
                    <td><a href="viewOrderEdit.php?pid=<?php echo $row[0],",",$row[1] ?>">Edit</a></td>
                    <td><a href="viewOrderDelete.php?pid=<?php echo $row[0],",",$row[1] ?>">delete</a></td>
                   
                </tr>
            <?php } ?>
        </table>
        <!-- <input type="submit"value="delete"> -->

    </div>
    </div>
</body>

</html>