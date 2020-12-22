<?php include('../config.php');
$sql = "select * from employees";
$result = mysqli_query($conn, $sql);

if (!$result) echo mysqli_error($conn);

?>
<?php include(ROOT_PATH . '/admin/includes/admin_functions.php'); ?>
<?php include(ROOT_PATH . '/admin/includes/head_section.php'); ?>
<title>Admin || Order</title>
</head>

<body>
    <div class="header">
        <div class="logo">
            <a href="<?php echo BASE_URL . 'admin/dashboard.php' ?>">
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
    <div class="container dashboard"><br>
        <h1>Employees </h1>
        <div align="center">
        <div class="table-responsive" style="width:90%">
        <table border=" 1" class="table table-bordered">
        <div align="center"><div class="stats"  style="padding:20px;width:60%"> <a style="color:black" href="includes/addEmployee.php">Add Employee</a></div></div>
        <!-- <button><a href="dashboard.php">Dashboard</a></button> -->
            <tr>
                <th>EmployeesNumber</th>
                <th>LastName</th>
                <th>FirstName</th>
                <th>Extension</th>
                <th>Email</th>
                <th>OfficeCode</th>
                <th>reportsTo</th>
                <th>JobTitle</th>
                <th>Edit</th>

            </tr>
            <?php while ($row = mysqli_fetch_row($result)) { ?>
                <tr>
                    <td><?php echo $row[0] ?></td>
                    <td><?php echo $row[1] ?></td>
                    <td><?php echo $row[2] ?></td>
                    <td><?php echo $row[3] ?></td>
                    <td><?php echo $row[4] ?></td>
                    <td><?php echo $row[5] ?></td>
                    <td><?php echo $row[6] ?></td>
                    <td><?php echo $row[7] ?></td>
                    <!-- <td><a href="includes/deleteOrder.php?id=<?php echo $row[0] ?>">Delete</a></td> -->
                    <!-- <td align="center"><input type="checkbox"value="<?php echo $row[0] ?>"name="id[]"></td> -->
                    <td><a href="includes/editEmployee.php?id=<?php echo $row[0] ?>">Edit</a></td>
                </tr>
            <?php } ?>
        </table>
        <!-- <input type="submit"value="delete"> -->

    </div>
    </div>
    </div>
    </div>
</body>
<style>
    table {
  border-collapse: separate;
  width: 100%;
  
}
th, td {
  text-align: center;
  padding: 8px;
  
  
}
tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #797979;
  color: white;
</style>

</html>
