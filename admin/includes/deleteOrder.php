<?php 
     include('../../config.php'); 
    // $sql="select * from contact";
   
    $idSelect=$_GET['id'];
    echo $idSelect;
    
    $sql="delete from orders where orderNumber=$idSelect";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "delete complete";
        echo "<br><a href=showRecordTable.php>ดูข้อมูล</a>";
    }else{
        echo mysqli_error($conn);
    }
?>


