<?php 
    include('../../config.php');
    // get data and insert to database
    
    $orderNumber=$_POST['orderNumber'];
    $orderDate=$_POST['orderDate'];
    $requiredDate=$_POST['requiredDate'];
    $shippedDate=$_POST['shippedDate'];
    $status=$_POST['g'];
    $id_select=$_POST['id_select'];
    $comments=$_POST['comments'];
    $customerNumber=$_POST['customerNumber'];
    // $lan=implode(",",$_POST['l']);

    echo $id_select;
    $sql="update orders set orderNumber='$orderNumber',orderDate='$orderDate',requiredDate='$requiredDate',shippedDate='$shippedDate',status='$status',comments='$comments',customerNumber='$customerNumber' where orderNumber='$id_select'";
    $result=mysqli_query($conn,$sql);

    if($result){
        // echo "sucessfully";
        header('location:../order.php');	
    }else{
        echo mysqli_error($conn);
    }
?> 