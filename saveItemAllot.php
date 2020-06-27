<?php

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
$conn = mysqli_connect("localhost", "" ,"" , "sudhanshu");
if($_POST['id']==1){
    $sql = "INSERT INTO custRemark(customer,date,remark) VALUES('".$_POST["cname"]."' , '".$_POST["remark"]."','".$_POST["date"]."')";
      
    if(mysqli_query($conn,$sql)) {
        echo "Data Inserted Successfully!";
    }
}
?>