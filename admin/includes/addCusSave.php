<?php
     include('../../config.php');
    // get data and insert to database
    $customerNumber=$_POST['customerNumber'];
    $customerName=$_POST['customerName'];
    $contactLastName=$_POST['contactLastName'];
    $contactFirstName=$_POST['contactFirstName'];
    $phone=$_POST['phone'];
    $addressLine1=$_POST['addressLine1'];
    $addressLine2=$_POST['addressLine2'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $postalCode=$_POST['postalCode'];
    $country=$_POST['country'];


    // $lan=implode(",",$_POST['l']);

    // print_r($lan);
    // echo $lan

    // echo "name: " .$fname;
    $sql="insert into customers(customerNumber,customerName,contactLastName,contactFirstName,phone,addressLine1,addressLine2,city,state,postalCode,country)
    values('$customerNumber','$customerName','$contactLastName','$contactFirstName','$phone','$addressLine1','$addressLine2','$city','$state','$postalCode','$country')";
    $result=mysqli_query($conn,$sql);

    if($result){
        header('location:../customer.php');
    }else{
        echo mysqli_error($conn);
    }
?>
