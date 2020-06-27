<?php
    $servername = "localhost";
    $username = "";
    $password = "";
    $dbname = "sudhanshu";
        
    $conn = mysqli_connect($servername,$username,$password,$dbname);

    if(!$conn) {
        echo "Error!";
    }
   
    $sql = "INSERT INTO items(iname,iunit) VALUES('".$_POST["iname"]."' , '".$_POST["iunit"]."')";
    if(mysqli_query($conn,$sql)) {
        echo "Data Inserted Successfully!";
    }


    ?>