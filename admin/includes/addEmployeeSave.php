<?php
     include('../../config.php');
    // get data and insert to database
    $employeeNumber=$_POST['employeeNumber'];
    $lastName=$_POST['lastName'];
    $firstName=$_POST['firstName'];
    $extension=$_POST['extension'];
    $email=$_POST['email'];
    $officeCode=$_POST['officeCode"'];
    $reportsTo=$_POST['reportsTo'];
    $jobTitle=$_POST['jobTitle'];
    // $lan=implode(",",$_POST['l']);




    // print_r($lan);
    // echo $lan

    // echo "name: " .$fname;
    $sql="insert into employees (employeeNumber,lastName,firstName,extension,email,officeCode,reportsTo,jobTitle)
    values('$employeeNumber','$lastName','$firstName','$extension','$email','$officeCode','$reportsTo','$jobTitle')";
    $result=mysqli_query($conn,$sql);

    if($result){
        header('location:../employee.php');
    }else{
        echo mysqli_error($conn);
    }
?>
