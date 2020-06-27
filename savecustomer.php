<?php
    $servername = "localhost";
    $username = "";
    $password = "";
    $dbname = "sudhanshu";
        
    $conn = mysqli_connect($servername,$username,$password,$dbname);

    if(!$conn) {
        echo "Error!";
    }
        $sql = "INSERT INTO customer(name,email,mobile,address) VALUES('".$_POST["cname"]."' , '".$_POST["cemail"]."',  '".$_POST["cmobile"]."',  '".$_POST["caddress"]."')";
      
    if(mysqli_query($conn,$sql)) {
        echo "Data Inserted Successfully!";
    }


    ?>