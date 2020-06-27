<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="itemjs.js"></script>
    <title>Items Allotement</title>
</head>
<body>
    <div class="container mt-3">
        <h4>Item Details</h4>
        <hr>
    <form id="itemdet">
        <input type="hidden" name="id" id="id" value="1">
        <div class="form-row align-items-center">
            <div class="col-auto">
                <label class="mr-sm-2" for="iname">Item Name</label>
                <input type="text" class="form-control mr-sm-2" id="iname" placeholder="Breads">
            </div>
            <div class="col-auto my-1">
                <label class="mr-sm-2" for="iunit">Unit</label>
                <select class="custom-select mr-sm-2" id="iunit">
                <option selected>kg</option>
                <option value="1">ltr</option>
                <option value="2">g</option>
                <option value="3">ml</option>
                <option value="4">items</option>
                </select>
            </div>
             <div class="col mr-sm-2 mb-2 my-2">
                <button type="button" class="btn btn-success" id="saveitem">Save</button>
                <button type="button" class="btn btn-defult" data-toggle="modal" data-target=".bd-example-modal-lg" onclick=showUser()>Show</button>
            </div>
            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title text-center">Report</h4>
                            <button type="button" class="close" data-dismiss="modal">×</button>
                        </div>
                        <div class="modal-body">
                        <table class="table">
                            <tr>
                                <th>Id</th>
                                <th>Item Name</th>
                                <th>Item Unit</th>
                            </tr>
                            <tr>
                            <?php 
                                $servername = "localhost";
                                $username = "";
                                $password = "";
                                $dbname = "sudhanshu";

                                $conn = mysqli_connect($servername, $username ,$password , $dbname);

                                if(!$conn){
                                    die("Error: ".mysqli_connect_error());
                                }

                                mysqli_select_db($conn,"sudhanshu");
                                $data = "SELECT * FROM items";
                                $res = mysqli_query($conn, $data);
                                while($row = mysqli_fetch_assoc($res) ){
                                ?>
                                <tr>
                                    <td><?php echo $row['id']?></td>
                                    <td><?php echo $row['iname']?></td>
                                    <td><?php echo $row['iunit']?></td>
          
                            <?php
                            }
                                mysqli_close($conn);
       
                                ?>
                            </tr>
                        </table>
                        </div>
                    </div>
  </div>
</div> 
        </div>
    </form>
    <br><br>

        <h4>Customer Details</h4>
        <hr>

        <form id="customerdet">
            <input type="hidden" name="id" id="id" value="0">
            <div class="form-row">
                <div class="col-5">
                    <label class="mr-sm-2" for="cname">Customer Name</label>
                    <input type="text" class="form-control mr-sm-2" id="cname" name="cname" placeholder="Sudhanshu">
                </div>
                <div class="col-4">
                    <label class="mr-sm-2" for="cemail">Email</label>
                    <input type="text" class="form-control mr-sm-2" id="cemail" name="cemail" placeholder="aabc@abc.com">
                </div>
                <div class="col-3">
                    <label class="mr-sm-2" for="cmobile">Mobile Number</label>
                    <input type="text" class="form-control mr-sm-2" id="cmobile" name="cmobile" placeholder="10 Digit Number!">
                </div>
            </div>
            <br>
            <div class="form-row">
                <div class=" form-group col-md-6">
                    <label for="caddress">Address</label>
                    <textarea class="form-control" id="caddress" name="caddress" rows="2"></textarea>
                </div>
                <div class="form-group col-md-6">
                    <button type="button" class="btn btn-success" id="custdet">Save</button>
                    <button type="button" class="btn btn-defult" data-toggle="modal" data-target=".bd-example-modal-lg1" onclick=showUser()>Show</button>
                </div>
            </div>
        </form>
        <div class="modal fade bd-example-modal-lg1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title text-center">Report</h4>
                            <button type="button" class="close" data-dismiss="modal">×</button>
                        </div>
                        <div class="modal-body">
                        <table class="table">
                            <tr>
                                <th>Id</th>
                                <th>Customer Name</th>
                                <th>Email</th>
                                <th>Mobile Number</th>
                                <th>Address</th>
                            </tr>
                            <tr>
                            <?php 
                                $servername = "localhost";
                                $username = "";
                                $password = "";
                                $dbname = "sudhanshu";

                                $conn = mysqli_connect($servername, $username ,$password , $dbname);

                                if(!$conn){
                                    die("Error: ".mysqli_connect_error());
                                }

                                mysqli_select_db($conn,"sudhanshu");
                                $sql = "SELECT * FROM customer";
                                $result = mysqli_query($conn, $sql);
                                while($row = mysqli_fetch_assoc($result) ){
                                ?>
                                <tr>
                                    <td><?php echo $row['id']?></td>
                                    <td><?php echo $row['name']?></td>
                                    <td><?php echo $row['email']?></td>
                                    <td><?php echo $row['mobile']?></td>
                                    <td><?php echo $row['address']?></td>
          <!-- <td><a  class="btn btn-light" data-toggle="modal" onclick=updateData(<?php echo $row['id']?>)>Update</a>
          <a  class="btn btn-danger"  onclick=deleteData(<?php echo $row['id']?>)>Delete</a>
          <a  class="btn btn-success" onclick=viewData(<?php echo $row['id']?>)>View</a> </td> -->
                            <?php
                            }
                                mysqli_close($conn);
       
                                ?>
                            </tr>
                        </table>
                        </div>
                    </div>
  </div>
</div> 
        <br>

        <h4>Item Allotement</h4>
        <hr>
        <form id="itemAllot" >
            <div class="form-group form-row align-items-center">
                <div class="form-group col-6">
                    <label class="mr-sm-2" for="selectcust">Select Customer</label>
                    <input type="hidden" id='id1' name='id' value='1'>
                    <select class="custom-select mr-sm-2" id="selectcust" name="selectCustomer" onclick=getCustomerList()>
                    <option selected>Select Customer</option>      
                    </select>
                </div>
                <div class="form-group col-3">
                    <label class="mr-sm-2" for="itemdate">Date</label>
                    <input type="text" class="form-control mr-sm-2" id="itemdate" placeholder="YYYY-MM-DD">
                </div>
            </div>
            <br>
            <div class="form-row align-items-center element_rep" id="row1">
                <div class="form-group col-3">
                    <label class="mr-sm-2" for="selectitem">Select Item</label>
                    <input type="hidden" id='id2' name='id' value='2'>
                    <select class="custom-select mr-sm-2" id="selectitem" name="selectItem" onclick=getItemList() >
                        <option selected>Select Item</option>
                        <option id="selectitem"></option>
                                
                    </select>
                </div>
                <div class="form-group col-2">
                    <label class="mr-sm-2" for="quantity">Quantity</label>
                    <input type="text" class="form-control mr-sm-2" id="quantity" placeholder="Sudhanshu">
                </div>
                <div class=" form-group col-2">
                    <label class="mr-sm-2" for="rate">Rate</label>
                    <input type="text" class="form-control mr-sm-2" id="rate" placeholder="aabc@abc.com">
                </div>
                <div class="form-group col-3">
                    <label class="mr-sm-2" for="total">Total</label>
                    <input type="text" class="form-control mr-sm-2" id="total" placeholder="10 Digit Number!">
                </div>
            </div>
            <div class="txtHint"></div>
            <button type="button"name="add" id="add" class="btn btn-primary"><i class="fas fa-plus"></i></button>
            <br>
            <div class="form-row align-items-center">
                <div class="col-md-6 form-group row">
                    <label for="remark" class="col-sm-2 col-form-label">Remark</label>
                    <textarea class="form-control col-sm-10" id="remark" rows="1"></textarea>
                </div>
                <div class=" form-group col-md-1"></div>
                <div class=" form-group col-md-5">
                    <button type="button" class="btn btn-success" onclick= saveItemAllot()>Save</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>