<?php  include('../../config.php'); ?>
	<?php include(ROOT_PATH . '/includes/head_section.php'); ?>
    <title>Admin || Add Employees</title>
    <link rel="stylesheet" href="../../static/css/admin_styling.css">
	</head>

	<body>
	    <div class="header">
	        <div class="logo">
	            <a href="<?php echo BASE_URL . 'admin/customer.php'  ?>">
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
	                Add Employee
	            </h1>
	            <form action="addEmployeeSave.php" method="post">
	                EmployeesNumber:<input type="text" name="employeeNumber"><br>
	                LastName:<input type="text" name="lastName"><br>
	                FirstName:<input type="text" name="firstName"><br>
	                Extension:<input type="text" name="extension"><br>
                  Email:<input type="text" name="email"><br>
                  OfficeCode:<input type="text" name="officeCode"><br>
                  ReportsTo:<input type="text" name="reportsTo"><br>
                  JobTitle:<input type="text" name="jobTitle"><br>

	                <br>



	                <br />

		<center>
		<div class="stats"  style="width:60%"> 
			<a style="color:black" type="submit" value="Save">Save</a>
			<a style="color:black" href="../employee.php">Back</a></div>
		</center>
	            </form>
	    </div>
	</body>

	</html>
