<?php
    $idSelect= $_GET['id'];
    include('../../config.php');
    $sql="select * from employees where employeeNumber=$idSelect";

    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    $arr=array("English","Thai","Indonesia","Laos");
?>

	<?php include(ROOT_PATH . '/includes/head_section.php'); ?>
    <title>Admin || Edit Employees</title>
    <link rel="stylesheet" href="../../static/css/admin_styling.css">
	</head>

	<body>
	    <div class="header">
	        <div class="logo">
	            <a href="<?php echo BASE_URL . 'admin/employee.php'?>">
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
    <h1>Edit Employees </h1>

    <form action="editCusSave.php" method="post">
        <input type="hidden" name="id_select"value="<?php echo $idSelect?> ">
        EmployeesNumber:<input type="text" name="employeeNumber"value="<?php echo $row['employeeNumber']?>"><br>
        LastName:<input type="text" name="lastName"value="<?php echo $row['lastName']?>"><br>
        FirstName:<input type="text" name="firstName"value="<?php echo $row['firstName']?>"><br>
        Extension:<input type="text" name="extension"value="<?php echo $row['extension']?>"><br>
        Email:<input type="text" name="email"value="<?php echo $row['email']?>"><br>
        OfficeCode:<input type="text" name="officeCode"value="<?php echo $row['officeCode']?>"><br>
        ReportsTo:<input type="text" name="reportsTo"value="<?php echo $row['reportsTo']?>"><br>
        JobTitle:<input type="text" name="jobTitle"value="<?php echo $row['jobTitle']?>"><br>

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
