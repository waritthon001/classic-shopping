<?php 
    include('../../config.php');
    // get data and insert to database
    $idp= $_GET['pid'];

    $ipp = explode(",", $idp);
    //    echo $idSelect;
    $idSelect=$ipp[0];
    $id=$ipp[1];
    // echo "ViewOrderDelete".$idSelect .$idProductSelect;
    // $orderNumber=$_POST['orderNumber'];
    // $ProductCode=$_POST['productCode'];
    // $QuantityOrdered=$_POST['quantityOrdered'];
    // $PriceEach=$_POST['priceEach'];
    // $OrderLineNumber=$_POST['orderLineNumber'];
    // $lan=implode(",",$_POST['l']);

    // echo $id_select;      
    // echo $ProductCode;      
    $sql="delete from stock  where  product_id='$idSelect'and id='$id'";
    $result=mysqli_query($conn,$sql);

    if($result){
        // echo "sucessfully";
        
        header('location:../stock.php');	
    }else{
        echo mysqli_error($conn);
    }
?> 