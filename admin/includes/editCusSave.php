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
    $id_select=$_POST['id_select'];



    // $lan=implode(",",$_POST['l']);


    echo $id_select;
    $sql="update customers set customerNumber='$customerNumber',customerName='$customerName',contactLastName='$contactLastName',contactFirstName='$contactFirstName',phone='$phone',addressLine1='$addressLine1',addressLine2='$addressLine2',city='$city',state='$state',postalCode='$postalCode',
    country='$country' where customerNumber='$id_select'";
    $result=mysqli_query($conn,$sql);

    if($result){
        // echo "sucessfully";
        header('location:../customer.php');
    }else{
        echo mysqli_error($conn);
    }
?>
