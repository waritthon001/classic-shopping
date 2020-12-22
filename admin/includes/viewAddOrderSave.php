<?php 
     include('../../config.php');
    // get data and insert to database
    $product_id=$_POST['product_id'];
    $date=$_POST['date'];
    $quantity=$_POST['quantity'];
    $lot=$_POST['lot'];
    // $OrderLineNumber=$_POST['orderLineNumber'];
    // $Comments=$_POST['comments'];
    // $CustomerNumber=$_POST['customerNumber'];
    // $lan=implode(",",$_POST['l']);

    // print_r($lan);
    // echo $lan

    // echo "name: " .$fname;
    $sql="insert into stock(product_id,date,quantity,lot) 
    values('$product_id','$date','$date','$quantity')";
    $result=mysqli_query($conn,$sql);

    if($result){

        header('location:../stock.php');
    }else{
        echo mysqli_error($conn);
    }
?> 