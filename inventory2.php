<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Phones and Gadgets</title>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="inventory.css" type="text/css">
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Poppins:wght@200&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
      integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
      <style>
        body{
          font-family: 'Poppins', sans-serif;
          background-image: url(images/nootebookpc.jpg);
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: cover;}
        }
        img{
          padding-left: 50px;
        }
        img:hover{
          size: 200%;
        }
        .nav-links{
          display: flex;
          width: 70%;
          justify-content: space-around;
          padding-top: 10px;
        }
        .nav-links li{
          list-style: none;
        }
        a{
          color: rgb(152, 231, 255);
        }
        a:hover{
          font-size: 110%;
          color: aqua;
          text-transform: uppercase;
          border: solid white 3px;
          border-radius: 8px;
          text-decoration: none;
          padding: 5px 10px;
          transition: 0.4s;
          letter-spacing: 2px;
        }
        a:active{
          font-size: 120%;
        }
      </style>
  </head>
  <body>
      <!--Inventory nav area-->
      <?php include 'include/inventory_nav.php';?>
      
      <h1>Inventory</h1>
      
      <br>
      <nav class="navbar navbar-expand-lg navbar-light " id="nav2">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <div class="dropdown">
            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: gray;">
              Product Type
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="coverpage.php">Home </a>
              <a class="dropdown-item" href="inventory.php">Shoes</a>
              <a class="dropdown-item" href="inventory2.php">Phone and Gadgets</a>
              <a class="dropdown-item" href="inventory3.php">Clothings</a>
            </div>
          </div>  
          &nbsp; &nbsp;
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Product & SKU" aria-label="Search">
              &nbsp;
              <input class="form-control mr-sm-2" type="search" placeholder="Variant" aria-label="Search">
              &nbsp;
              <input class="form-control mr-sm-2" type="search" placeholder="Tags" aria-label="Search">
              &nbsp;
              <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
            </form>
          </ul>
        </div>
      </nav>  
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">SKU</th>
            <th scope="col">Product Image</th>
            <th scope="col">Product Name</th>
            <th scope="col">Variant</th>
            <th scope="col">Amount Sold</th>
            <th scope="col">Amount Remaining</th>
          </tr>
        </thead>
        <tbody>
          <tr id="tr1">
            <th scope="row">1</th>
            <td><img src="images/xs max.jpg" alt=""></td>
            <td>Apple IPhone XS Max (4GB RAM, 64GB ROM) <br>
               IOS 12 (12MP + 12MP)+7MP</td>
            <td>Grey</td>
            <td>20 Pairs</td>
            <td>30 Pairs</td>
            
          </tr >
          <tr id="tr1">
            <th scope="row">2</th>
            <td><img src="images/samsung.jpg" alt=""></td>
            <td>Samsung Galaxy S20 ULTRA Clear View <br> Case +Full Screen Glass</td>
            <td>Black</td>
            <td>10 Pair</td>
            <td>12 Pairs</td>
            
          </tr>
          <tr>
            <th scope="row">3</th>
            <td><img src="images/11 pro max.jpg" alt=""></td>
            <td>Apple IPhone 11 Pro Max 6.5'' Super Retina <br> 
              (4GB RAM, 256GBROM),iOS 13,(12MP+12MP+12MP)+12MP <br> 4G LTE Smartphone</td>
            <td>Gold</td>
            <td>12 pais</td>
            <td>13 pairs</td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td><img src="images/camon 15.jpg" alt=""></td>
            <td>Tecno Camon 15 (CD7) 6.6" HD+ 4GB RAM+64GB ROM, <br>
               Android Q(10), 48MP Quad Rear Camera, <br>
                5000mAh, 4G, Fingerprint Face ID</td>
            <td>Gold</td>
            <td>2 pairs</td>
            <td>14 pairs</td>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td><img src="images/iphone11.jpg" alt=""></td>
            <td>Apple IPhone 11 Pro Max 6.5'' Super Retina <br>
               (4GBRAM, 256GB ROM),iOS 13(12MP+12MP+12MP) <br>
                +12MP 4G LTE Smartphone-</td>
            <td>Silver</td>
            <td>2 pairs</td>
            <td>12 pairs</td>
          </tr>
          <tr>
            <th scope="row">6</th>
            <td><img src="images/hp envy.jpg" alt=""></td>
            <td>Hp ENVY 13 Intel Core I7 1TB HDD 16GB RAM <br>
               2 GB NVIDIA,Backlit Keyboard Wins 10</td>
            <td>White</td>
            <td>11 pairs</td>
            <td>13 pairs</td>
          </tr>
          <tr>
            <th scope="row">7</th>
            <td><img src="images/oppo realme.jpg" alt=""></td>
            <td>Oppo Realme 5 Pro， 6.3 Inch FHD+ 4035mAh <br> 
                48MP AI Quad Cameras 4GB RAM 128GB ROM Snapdragon <br>
                 712 Octa Core 4G Smartphone</td>
            <td>Dark Blue</td>
            <td>33 Pairs</td>
            <td>3 pairs</td>
          </tr>
          <tr>
            <th scope="row">8</th>
            <td><img src="images/infinix.jpg" alt=""></td>
            <td>Infinix Hot 9 (X655C) 6.6" HD+, 3GB RAM + 64GB ROM,<br>
               Android 10, 16MP AI Quad Camera, 5000mAh, <br>
                4G, Fingerprint + Face ID</td>
            <td>Cyan</td>
            <td>11 Pairs</td>
            <td>10 pairs</td>
          </tr>
          <tr>
            <th scope="row">9</th>
            <td><img src="images/beats.jpg" alt=""></td>
            <td>Beats Extra Bass MdrXb450Ap Wired Headphone</td>
            <td>Black and Gold Cream</td>
            <td>8 Pairs</td>
            <td>3 Pairs</td>
          </tr>
          <tr>
            <th scope="row">10</th>
            <td><img src="images/redmi.jpg" alt=""></td>
            <td>XIAOMI Mi Redmi AirDot Bluetooth Wireless Headset-BLACK</td>
            <td>Black </td>
            <td>6 Pairs</td>
            <td>14 Pairs</td>
          </tr>
        </tbody>
      </table>
      <div class="div2">
      </div>
  </body>



















  <footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </footer>
</html>