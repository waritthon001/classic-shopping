<?php 
     include('../../config.php');
    // get data and insert to database
    $productCode=$_POST['productCode'];
    $productName=$_POST['productName'];
    $productLine=$_POST['productLine'];
    $productScale=$_POST['productScale'];
    $productVendor=$_POST['productVendor'];
    $productDescription=$_POST['productDescription'];
    $quantityInStock=$_POST['quantityInStock'];
    $buyPrice=$_POST['buyPrice'];
    $MSRP=$_POST['MSRP'];
    // $lan=implode(",",$_POST['l']);

    // print_r($lan);
    // echo $lan

    // echo "name: " .$fname;
    $sql="insert into products(productCode,productName,productLine,productScale,productVendor,productDescription,quantityInStock,buyPrice,MSRP) 
    values('$productCode','$productName','$productLine','$productScale','$productVendor','$productDescription','$quantityInStock','$buyPrice','$MSRP')";
    $result=mysqli_query($conn,$sql);

    if($result){
        header('location:../stock.php');
    }else{
        echo mysqli_error($conn);
    }
?> 