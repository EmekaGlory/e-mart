<?php
require_once 'includes/db.con.php';
include 'includes/functions.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewpoint"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Stock | eMart</title>
        <!--Bootstrap css files-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
        <link rel="stylesheet" href="bootstrap/css/font-awesome-5.8.1.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="dashboard.css" type="text/css">
        <script src="https://unpkg.com/feather-icons"></script>
        <script src="https://Kit.fontawesome.com/b99e675b68.js"></script>
    </head>
    <body>
        <!--Main navbar-->
        <?php include 'includes/nav.php';?>
        <!--dashboard section-->

        <section class="p-2 bg-teal text-white">
            <div class="container">
                <?php echo successInfo(); echo failureInfo();?>
                <!--Search section-->
                <form action="stock.php" method="GET">
                    <div class="form-row">
                        <div class="col-10 form-group">
                            <input class="form-control" name="search_key" placeholder="product name or ID">
                        </div>
                        <div class="col-2 form-group">
                            <button type="submit" name="search" class="btn btn-success btn-block">
                                Search stock
                            </button>
                        </div>
                    </div>
                </form>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>Product ID</th>
                            <th>Product name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Header image</th>
                            <th>Category</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (isset($_GET['search'])) {
                            $search_parameter = $_GET['search_key'];
                            $sql = "SELECT * FROM products WHERE product_id='$search_parameter' OR name='$search_parameter';";
                        }
                        else {
                            $sql = "SELECT * FROM products;";
                        }
                        $result = mysqli_query($DBconnect,$sql);
        
                        if($check_result = mysqli_num_rows($result) < 1){
                            $no_r = 'No result found';
                        }
                        else {
                            while ($rows = mysqli_fetch_assoc($result)) {
                                $product_id = $rows['product_id'];
                                $product_name = $rows['name'];
                                $price = $rows['price'];
                                $quantity = $rows['quantity'];
                                $h_image = $rows['header_img'];
                                $category = $rows['category'];
                        ?>
                        <tr>
                            <td><?php echo $product_id; ?></td>
                            <td><?php echo $product_name; ?></td>
                            <td><?php echo $price; ?></td>
                            <td><?php echo $quantity; ?></td>
                            <td>
                                <!-- image code here -->
                                <img src="<?php echo $h_image; ?>" class="img-fluid" height="40px" width="40px" 
                                alt="<?php echo $product_name; ?>">
                            </td>
                            <td><?php echo $category; ?></td>
                        </tr>
                        <?php } }//close while loop?> 
                    </tbody>
                </table>
            </div>
        </section>

    </body>
    <!--Main footer-->
    <?php include 'includes/footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>         
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor1');
    </script>
    <script>
        feather.replace();
    </script>
</html>

