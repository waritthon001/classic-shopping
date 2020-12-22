<?php
    include('../../config.php');
    // get data and insert to database


    $employeeNumber=$_POST['employeeNumber'];
    $lastName=$_POST['lastName'];
    $firstName=$_POST['firstName'];
    $extension=$_POST['extension'];
    $email=$_POST['email'];
    $officeCode=$_POST['officeCode'];
    $reportsTo=$_POST['reportsTo'];
    $jobTitle=$_POST['jobTitle'];
    $id_select=$_POST['id_select'];



    // $lan=implode(",",$_POST['l']);


    echo $id_select;
    $sql="update customers set employeeNumber='$employeeNumber',lastName='$lastName',firstName='$firstName',
    extension='$extension',email='$email',officeCode='$officeCode',reportsTo='$reportsTo',jobTitle='$jobTitle'
    where employeeNumber='$id_select'";
    $result=mysqli_query($conn,$sql);

    if($result){
        // echo "sucessfully";
        header('location:../employee.php');
    }else{
        echo mysqli_error($conn);
    }
?>
