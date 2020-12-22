<?php 
    include('../../config.php');
    // get data and insert to database
    
    $idSelect=$_POST['id_select'];
    $idProductSelect=$_POST['pid_select'];
    $orderNumber=$_POST['orderNumber'];
    $ProductCode=$_POST['productCode'];
    $QuantityOrdered=$_POST['quantityOrdered'];
    $PriceEach=$_POST['priceEach'];
    $OrderLineNumber=$_POST['orderLineNumber'];
    // $lan=implode(",",$_POST['l']);

    // echo $id_select;      
    // echo $ProductCode;      
    $sql="update orderdetails set orderNumber='$orderNumber',productCode='$ProductCode',quantityOrdered='$QuantityOrdered',priceEach='$PriceEach',orderLineNumber='$OrderLineNumber' where orderNumber='$idSelect'and productCode='$idProductSelect'";
    $result=mysqli_query($conn,$sql);

    if($result){
        echo "sucessfully";
        // header('location:../order.php');	
    }else{
        echo mysqli_error($conn);
    }
?> 