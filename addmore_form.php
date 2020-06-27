<?php 
    $i = $_POST['id'];
    $add_more = '<div class="form-row align-items-center element_rep" id="row'.$i.'"><div class="form-group col-3"><label class="mr-sm-2" for="selectitem">Select Item</label> <input type="hidden" id="id" name="id" value="2"><select class="custom-select mr-sm-2" id="selectitem" onclick=getItemList()><option selected>Select Item</option>';

                    $conn = mysqli_connect("", "" ,"" , "");

                     $data = "SELECT id,iname FROM items";
                     $res = mysqli_query($conn, $data);
                    
                    while($row = mysqli_fetch_assoc($res) ){
                $add_more.= '<option value="'. $row['id'].'">'.$row['iname'].'</option>';
                }


    
    $add_more.='</select></div><div class="form-group col-2"><label class="mr-sm-2" for="quantity">Quantity</label><input type="text" class="form-control mr-sm-2" id="quantity" placeholder="Sudhanshu"></div><div class=" form-group col-2"><label class="mr-sm-2" for="rate">Rate</label><input type="text" class="form-control mr-sm-2" id="rate" placeholder="aabc@abc.com"></div><div class="form-group col-3"><label class="mr-sm-2" for="total">Total</label><input type="text" class="form-control mr-sm-2" id="total" placeholder="10 Digit Number!"></div><div class="form-group col-2"> <button type="button"  class="btn btn-danger btn-remove" id="'.$i.'">X</button><br>' ;
    
    echo $add_more;
?>

