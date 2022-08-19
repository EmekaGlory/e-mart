<?php
require_once 'backoffice/includes/db.con.php';
include 'backoffice/includes/functions.php';

$sql = "SELECT * FROM products WHERE url='$product_url';";
$result = mysqli_query($DBconnect,$sql);

if($check_result = mysqli_num_rows($result) < 1){
    return null;
}
else {
    $rows = mysqli_fetch_assoc($result);
    $product_id = $rows['product_id'];
    $product_name = $rows['name'];
    $price = $rows['price'];
    $quantity = $rows['quantity'];
    $desc = $rows['description'];
    $spec = $rows['specifications'];
    $h_image = $rows['header_img'];
    $b_image = $rows['body_img'];
    $category = $rows['category'];
}
$user_IP = $_SERVER['REMOTE_ADDR'];//gets user IP address
if(isset($_POST['add-to-cart'])){
    $Quantity = $_POST['quantity'];
    $sql = "INSERT INTO cart (product_Name,price,quantity,visitor_IP)
    VALUES(?,?,?,?)";
    $stmt = mysqli_stmt_init($DBconnect);
    mysqli_stmt_prepare($stmt,$sql);
    mysqli_stmt_bind_param($stmt,'siis',$product_name,$price,$Quantity,$user_IP);//s-string,i-integer,d-double
    mysqli_stmt_execute($stmt);
}
$user_code = $_SERVER['REMOTE_ADDR'];//gets user IP address
if(isset($_POST['order'])){
    $Quantity = $_POST['quantity'];
    $sql = "INSERT INTO order_board (Product,Price,Quantity,IP_code)
    VALUES(?,?,?,?)";
    $stmt = mysqli_stmt_init($DBconnect);
    mysqli_stmt_prepare($stmt,$sql);
    mysqli_stmt_bind_param($stmt,'siis',$product_name,$price,$Quantity,$user_code);//s-string,i-integer,d-double
    mysqli_stmt_execute($stmt);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewpoint" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!--Bootstrap css files-->
        <link rel="stylesheet" href="#" type="text/css">
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
        <title><?php echo $product_name; ?></title>
    </head>
    <body>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <div class="container">
                <a href="dashboard.php" class="navbar-brand text-warning">
                    <i class="fa fa-snowflake"></i>eMart
                </a>
                <button class="navbar-toggler" data-toggle="collapse" data-target="#blueshark">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="blueshark">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link btn btn-outline-success" href="checkout.php" style=":#fff;">
                                cart
                                <?php 
                                $sql = "SELECT * FROM cart WHERE visitor_IP='$user_IP';";
                                $result = mysqli_query($DBconnect,$sql);
                                mysqli_fetch_assoc($result);
                                $cart_count = mysqli_num_rows($result);
                                echo $cart_count;
                                ?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-outline-success" href="checkout.php" style=":#fff;">
                                order
                                <?php
                                $sql = "SELECT * FROM order_board WHERE IP_code='$user_code';";
                                $result = mysqli_query($DBconnect,$sql);
                                mysqli_fetch_assoc($result);
                                $order_count = mysqli_num_rows($result);
                                echo $order_count;
                                ?>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">

            <div class="row" style="margin-bottom:40px"><!-- product particulars div -->
                <div class="col-md-6">
                    <img class="img-fluid" src="backoffice/<?php echo $h_image; ?>" alt="Kimsdun">
                </div> <!--end of product image -->
                <div class="col-md-6">
                    <div class="alert alert-light" role="alert">
                        <h2><?php echo $product_name; ?></h2>
                        <hr>
                        <h3>₦<?php echo $price; ?></h3>
                        <small>Availability: <?php echo $quantity;?> in stock</small>
                        <hr>
                    </div>
                    <div class="container-fluid">
                        <h2>Product Description</h2>
                        <p>
                        <?php echo $desc; ?>
                        </p>
                    </div>
                </div> <!--end of product details -->
            </div><!-- product particulars div -->
            
            <img src="backoffice/<?php echo $b_image; ?>" class="mx-auto d-block img-fluid" alt="...">

            <div class="alert alert-light">
                <h2>Product Specification</h2>
                <p>
                <?php echo $spec; ?>                
                </p>
            <div>

            <div class="jumbotron">
                <form action="<?php echo $product_url;?>" method="POST">
                    <div class="form-row">
                        <div class="col">
                            <input type="number" name="quantity" class="form-control" placeholder="Add quantity">
                        </div>
                        <input  type="text" class="form-control" name="product-name" hidden>
                        <input type="number" class="form-control" name="price" hidden>
                        <div class="col">
                            <button type="submit" class="btn btn-primary btn-block" name="add-to-cart">
                                add to cart
                            </button>
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-success btn-block" name="order">
                                Order
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
         
    </body>
</html>