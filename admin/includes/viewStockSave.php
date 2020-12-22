<?php 
    include('../../config.php');
    // get data and insert to database
    
    $idSelect=$_POST['product_id'];
    $idProductSelect=$_POST['id'];
    $product_id=$_POST['product_id'];
    $date=$_POST['date'];
    $quantity=$_POST['quantity'];
    $lot=$_POST['lot'];
    // $OrderLineNumber=$_POST['orderLineNumber'];
    // $lan=implode(",",$_POST['l']);

    // echo $id_select;      
    // echo $ProductCode;      
    $sql="update stock set product_id='$idSelect',date='$date',quantity='$quantity',lot='$lot' where product_id='$idSelect'and id='$idProductSelect'";
    $result=mysqli_query($conn,$sql);

    if($result){
        // echo "sucessfully";
        header('location:../stock.php');	
    }else{
        echo mysqli_error($conn);
    }
?> 