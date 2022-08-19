<?php
require_once 'backoffice/includes/db.con.php';
$user_IP = $_SERVER['REMOTE_ADDR'];//gets user IP address for cart
$user_code = $_SERVER['REMOTE_ADDR'];//gets user IP address for order


if(isset($_POST['confirm-order'])) {
  $FName = $_POST['firstName'];
  $LName = $_POST['lastName'];
  $Phone = $_POST['phone'];
  $Email = $_POST['email'];
  $State = $_POST['state'];
  $Address = $_POST['address'];
  $Postal_code = $_POST['postal'];
  $Card_name = $_POST['card-name'];
  $Card_number = $_POST['card-number'];
  $Expiry_date = $_POST['expiration-date'];
  $Card_cvv = $_POST['cvv'];

  $sql = "INSERT INTO checkout_board (first_name,last_name,phone_number,email,state,address,postal_code,card_name,card_number,expiration_date,cvv)
  VALUES(?,?,?,?,?,?,?,?,?,?,?)";
  $stmt = mysqli_stmt_init($DBconnect);
  mysqli_stmt_prepare($stmt,$sql);
  mysqli_stmt_bind_param($stmt,'ssssssisiii',$FName,$LName,$Phone,$Email,$State,$Address,$Postal_code,$Card_name,$Card_number,$Expiry_date,$Card_cvv);//s-string,i-integer,d-double
  mysqli_stmt_execute($stmt);
}
?>
<!DOCTYPE HTML>
<head>
    <title>
        PHP PROJECT CHECKOUT PAGE
    </title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <style>
        #main_div{
            padding: 27px;
        }
        #checkout {
            background-color:white;
            width:870px;
            float: right;
            padding:10px;
        }
        #order_sum {
            width:370px;
            background-color:white;
            float:left;
            padding:10px;
        }
    </style>
</head>
<body style="background-color: #eeeeee;">
    <div id="main_div">

    <div id="checkout">
        <h5>CHECKOUT</h5>
        <ol type="1">
        <li><div>
            <hr><h5>ADDRESS DETAILS</h5><hr>

            <form class="needs-validation" >
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label>First name</label>
                    <input type="text" class="form-control" name="firstName" value="" required>
                    <div class="invalid-feedback">
                      Valid first name is required.
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label>Last name</label>
                    <input type="text" class="form-control" name="lastName"  value="" required>
                    <div class="invalid-feedback">
                      Valid last name is required.
                    </div>
                  </div>
                </div>
        
                <div class="row">
                    <div class="col-md-6 mb-3">
                      <label>Phone Number</label>
                      <input type="number" class="form-control" name="phone" value="" required>
                      <div class="invalid-feedback">
                        Valid phone number is required.
                      </div>
                    </div>
                   <div class="col-md-6 mb-3">
                  <label>Email <span class="text-muted"></span></label>
                  <input type="email" class="form-control" name="email">
                  <div class="invalid-feedback">
                    Please enter a valid email address for shipping updates.
                  </div>
                  </div>
                </div>
        
                <div class="mb-3">
                  <label>Address</label>
                  <input type="text" class="form-control" name="address" required>
                  <div class="invalid-feedback">
                    Please enter home/contact address.
                  </div>
                </div>
        
                <div class="row">
                  <div class="col-md-5 mb-3">
                    <label>Country</label>
                    <h4>NIGERIA</h4>
                    <div class="invalid-feedback">
                      The only valid country.
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label>State</label>
                    <select class="custom-select d-block w-100" name="state" required>
                      <option value="">Choose...</option>
                      <option>ABUJA</option>
                      <option>LAGOS</option>
                      <option>KEBBI</option>
                      <option>CALABAR</option>
                      <option>SOKOTO</option>
                      <option>IBADAN</option>
                      <option>ENUGU</option>
                      <option>PORTHARCOURT</option>
                    </select>
                    <div class="invalid-feedback">
                      Please provide a valid state.
                    </div>
                  </div>
                  <div class="col-md-3 mb-3">
                    <label>Postal</label>
                    <input type="int" class="form-control" name="postal" required>
                    <div class="invalid-feedback">
                      Postal code required.
                    </div>
                  </div>
                </div><hr>

                <div>
                    <input type="checkbox">
                    <label>Shipping address is the same as my billing address</label>
              </div>
              <div>
                <input type="checkbox" checked>
                <label>Save this information for next time</label>
              </div>
      
        </div></li>

        <li><div>
            <hr><h5>DELIVERY METHOD</h5><hr>
            <form>
                <input type="radio" name="del_met" value="home_dev" checked> Home Delivery<br>
                <small>
                    <b>James Bond</b><br>
                    Zone A, Millionaire Quarters, Byazhin, Kubwa, FCT Abuja,<br> ABUJA- KUBWA BYAZHIN, Federal Capital Territory<br>
                    +2348187643209
                </small><br><br>
                <input type="radio" name="del_met" value="pickup"> Pickup Station <small>(cheaper shiping fee)</small><br>
                <small>Ready for pickup between Wednesday 7 Oct to Monday 12 Oct with cheaper shipping fees.</small><br><br>
                <small><b>Pickup Station</b><br>
                        Suite 11&12, Ejimuz Plaza Plot 9, Hamza Abdullahi Road, adjacent Premium Hotel Kubwa Abuja<br>
                        Shipping Fee ₦ 5000</small> 
            </form>
        </div></li>

        <li><div>
            <hr><h5>PAYMENT METHOD</h5><hr>
            <h6>How do you want to pay for your order?</h6>
            <form>
                <input type="radio" name="pay_met" value="card" checked> Card Payment<br>
                <small class="text-muted">Card payments are supported by all banks.</small><br>
                <small class="text-muted">Paypal payment is accepted while buying from Nigeria only</small><br>

                <div class="row">
                    <div class="col-md-6 mb-3">
                      <label>Name on card</label>
                      <input type="text" class="form-control" name="card_name" required>
                      <small class="text-muted">Full name as displayed on card</small>
                      <div class="invalid-feedback">
                        Name on card is required
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label>Credit/Debit card number</label>
                      <input type="number" class="form-control" name="card_number" required>
                      <small class="text-muted">16 digit number as displayed on front of card</small>
                      <div class="invalid-feedback">
                        Credit/Debit card number is required
                        Must not be less or more than 16
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3 mb-3">
                      <label>Expiration Date</label>
                      <input type="int" class="form-control" name="expiration_date" required>
                      <small class="text-muted">As displayed on card</small>
                      <div class="invalid-feedback">
                        Expiration date required
                      </div>
                    </div>
                    <div class="col-md-3 mb-3">
                      <label>CVV</label>
                      <input type="int" class="form-control" name="cvv" required>
                      <small class="text-muted">Last 3 digit number on the back of card</small>
                      <div class="invalid-feedback">
                        Security code required
                      </div>
                    </div>
                  </div>

                <hr>
                <input type="radio" name="pay_met" value="pod"> Pay on delivery<br>
                <small>Cash on delivery is restricted in  some specific locations.<br>
                please check our list of approved locations on the terms and conditions page.</small>
                <hr>

                <input type="radio" name="pay_met2" value="pod"> Pay on sales<br>
                <small>Sales payment can be made immediately after sales.<br>
                Payment can be done in the store which is best approved.</small>
              
        </div></li>

        <label>Shipping Fee:</label> <label style="float: right;">#5,000</label><br><hr>
        <label>Grand Total:</label> <label style="float: right;">#40000</label><hr>

          <a href="receipt.php" class="btn btn-primary btn-lg btn-block" type="submit" name="confirm_order">CONFIRM ORDER</a>
      </form>

    </ol>
    </div>
    <div id="order_sum">
        <h5>CART SUMMARY</h5>
        <div>
            <table class="table table-hover">
              <tr>
                <th>S/N</th>
                <th>Product</th>
                <th>Price<br></th>
                <th>Total</th>
              </tr>
              <?php 

              $serial_no = 0;
              $grand_total = 0;

              $sql = "SELECT * FROM cart WHERE visitor_IP='$user_IP';";
              $result = mysqli_query($DBconnect,$sql);
              $cart_count = mysqli_num_rows($result);

              while ($rows = mysqli_fetch_assoc($result)){
                $product = $rows['product_Name'];
                $price = $rows['price'];
                $quantity = $rows['quantity'];
                $total = $price * $quantity;

                $grand_total = $grand_total + $total;
                ++$serial_no;
              ?>
              <tr>
                <td><?php echo $serial_no; ?></td>
                <td><?php echo $product; ?><br>Qty: <?php echo $quantity; ?></td>
                <td><?php echo $price; ?></td>
                <td><?php echo $total; ?></td>
              </tr>
              <?php
              }?>
            </table><hr>
            <label>Shipping Fee:</label> <label style="float: right;"></label><br><hr>
            <label>Grand Total:</label> <label style="float: right;"><?php echo $grand_total; ?></label><hr>
        </div>
        <section>
            <!--Alert: it is a class in bootstrap-->
            <div class="alert alert-secondary">
              <marquee behavior="scroll" direction="right" scrollamount="10" style="height: 30px;"> <img src="backoffice/image/Jumia-group-logo.jpg" style="height: 40px;"> </marquee>
            </div>
        </section>
        <h5>ORDER SUMMARY</h5>
        <div>
            <table class="table table-hover">
              <tr>
                <th>S/N</th>
                <th>Product</th>
                <th>Price<br></th>
                <th>Total</th>
              </tr>
              <?php 

              $Serial_no = 0;
              $Grand_total = 0;

              $sql = "SELECT * FROM order_board WHERE IP_code='$user_code';";
              $result = mysqli_query($DBconnect,$sql);
              $order_count = mysqli_num_rows($result);

              while ($rows = mysqli_fetch_assoc($result)){
                $Product = $rows['Product'];
                $Price = $rows['Price'];
                $Quantity = $rows['Quantity'];
                $Total = $Price * $Quantity;

                $Grand_total = $Grand_total + $Total;
                ++$Serial_no;
              ?>
              <tr>
                <td><?php echo $Serial_no; ?></td>
                <td><?php echo $Product; ?><br>Qty: <?php echo $Quantity; ?></td>
                <td><?php echo $Price; ?></td>
                <td><?php echo $Total; ?></td>
              </tr>
              <?php
              }?>
            </table><hr>
            <label>Shipping Fee:</label> <label style="float: right;"></label><br><hr>
            <label>Grand Total:</label> <label style="float: right;"><?php echo $Grand_total; ?></label><hr>
        </div>
    </div>
    </div>
</body>
</HTML>