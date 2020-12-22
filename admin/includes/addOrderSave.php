<?php 
     include('../../config.php');
    // get data and insert to database
    $OrderNumber=$_POST['orderNumber'];
    $OrderDate=$_POST['orderDate'];
    $RequiredDate=$_POST['requiredDate'];
    $ShippedDate=$_POST['shippedDate'];
    $Status=$_POST['g'];
    $Comments=$_POST['comments'];
    $CustomerNumber=$_POST['customerNumber'];
    // $lan=implode(",",$_POST['l']);

    // print_r($lan);
    // echo $lan

    // echo "name: " .$fname;
    $sql="insert into orders(orderNumber,orderDate,requiredDate,shippedDate,status,comments,customerNumber) 
    values('$OrderNumber','$OrderDate','$RequiredDate','$ShippedDate','$Status','$Comments','$CustomerNumber')";
    $result=mysqli_query($conn,$sql);

    if($result){
        header('location:../order.php');
    }else{
        echo mysqli_error($conn);
    }
?> 