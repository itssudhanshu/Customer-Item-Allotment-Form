<?php
              $conn = mysqli_connect("localhost", "" ,"" , "sudhanshu");

              if($_POST['id'] == 1){
                //echo "1";
                $fetch = "SELECT id,name FROM customer";
                $res = mysqli_query($conn, $fetch);
                while( $row =  mysqli_fetch_array($res)){
                    echo "<option value=".$row["id"].">".$row["name"]."</option>";
                   }
              }

              
              if($_POST['id'] == 2){
                  //echo "2";
                $fetch = "SELECT id,iname FROM items ";
                $res = mysqli_query($conn, $fetch);
               // print_r($res);
               while( $row =  mysqli_fetch_array($res)){
                echo "<option value=".$row["id"].">".$row["iname"]."</option>";
               }
                //print_r($results);
              }
?>