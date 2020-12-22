<?php 
    include('../../config.php');
    // get data and insert to database
    
    $productCode=$_POST['productCode'];
    $productName=$_POST['productName'];
    $productLine=$_POST['productLine'];
    $productScale=$_POST['productScale'];
    $productVendor=$_POST['productVendor'];
    $productDescription=$_POST['productDescription'];
    $buyPrice=$_POST['buyPrice'];
    $MSRP=$_POST['MSRP'];
    $id_select=$_POST['id_select'];
    // $lan=implode(",",$_POST['l']);

    echo $id_select;
    $sql="update products set productCode='$productCode',productName='$productName',productLine='$productLine',productScale='$productScale',productVendor='$productVendor' ,productDescription='$productDescription',buyPrice ='$buyPrice',MSRP='$MSRP' where productCode='$id_select'";
    $result=mysqli_query($conn,$sql);

    if($result){
        // echo "sucessfully";
        header('location:../stock.php');	
    }else{
        echo mysqli_error($conn);
    }
?> 