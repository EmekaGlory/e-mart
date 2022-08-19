<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
        <title>E-market</title>
    </head>
    <style>
        body{
            background-image:url("images/cover.jpg");
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            padding: 20px 50px;
        }
        a{
            color:gray;
            text-align: center;
        }
        a:hover{
            color: greenyellow;
            text-decoration: none ;
        }
        .div1{
            background: white;
            height: 50px;
            margin: 0 30px;
            padding: 10px 0;
        }
        #pro{
            display: block;
            margin: 15px 30px;

        }
        #pro1{
            display: block;
            margin: 15px 30px;
            height: 30px;
            background-color: turquoise;

        }
        #row{
            margin: 0 30px;
        }
        .div4{
            margin-left: 10px;
        }
        .jum{
            background-image: url("images/bg.jpg");
        }
    </style>
    <body>
        <div class="row" style="margin: 10px 20px;">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="jumbotron" style="background-color:white">
                    <h3 style="color:rgb(20, 18, 18);">CATEGORIES</h3><br><br>
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                    </svg> <a href="#">Supermarket</a><br>
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                    </svg> <a href="#">Health & Office</a><br>
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house-door" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M7.646 1.146a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5H9.5a.5.5 0 0 1-.5-.5v-4H7v4a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6zM2.5 7.707V14H6v-4a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4h3.5V7.707L8 2.207l-5.5 5.5z"/>
                        <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                    </svg> <a href="#">Home & Office</a><br>
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-headphones" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 3a5 5 0 0 0-5 5v4.5H2V8a6 6 0 1 1 12 0v4.5h-1V8a5 5 0 0 0-5-5z"/>
                        <path d="M11 10a1 1 0 0 1 1-1h2v4a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1v-3zm-6 0a1 1 0 0 0-1-1H2v4a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-3z"/>
                    </svg> <a href="#">Phones & Tablets</a><br>
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-printer-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2H5z"/>
                        <path fill-rule="evenodd" d="M11 9H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z"/>
                        <path fill-rule="evenodd" d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2V7zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
                    </svg> <a href="#">Computer</a><br>
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-tv" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M2.5 13.5A.5.5 0 0 1 3 13h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zM13.991 3H2c-.325 0-.502.078-.602.145a.758.758 0 0 0-.254.302A1.46 1.46 0 0 0 1 4.01V10c0 .325.078.502.145.602.07.105.17.188.302.254a1.464 1.464 0 0 0 .538.143L2.01 11H14c.325 0 .502-.078.602-.145a.758.758 0 0 0 .254-.302 1.464 1.464 0 0 0 .143-.538L15 9.99V4c0-.325-.078-.502-.145-.602a.757.757 0 0 0-.302-.254A1.46 1.46 0 0 0 13.99 3zM14 2H2C0 2 0 4 0 4v6c0 2 2 2 2 2h12c2 0 2-2 2-2V4c0-2-2-2-2-2z"/>
                    </svg> <a href="#">Electronics</a><br>
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-handbag-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 1a2 2 0 0 0-2 2v2H5V3a3 3 0 0 1 6 0v2h-1V3a2 2 0 0 0-2-2zM5 5H3.361a1.5 1.5 0 0 0-1.483 1.277L.85 13.13A2.5 2.5 0 0 0 3.322 16h9.356a2.5 2.5 0 0 0 2.472-2.87l-1.028-6.853A1.5 1.5 0 0 0 12.64 5H11v1.5a.5.5 0 0 1-1 0V5H6v1.5a.5.5 0 0 1-1 0V5z"/>
                    </svg> <a href="#">Fashion</a><br>
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-basket2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 10a1 1 0 0 1 2 0v2a1 1 0 0 1-2 0v-2zm3 0a1 1 0 0 1 2 0v2a1 1 0 0 1-2 0v-2zm3 0a1 1 0 1 1 2 0v2a1 1 0 0 1-2 0v-2z"/>
                        <path fill-rule="evenodd" d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-.623l-1.844 6.456a.75.75 0 0 1-.722.544H3.69a.75.75 0 0 1-.722-.544L1.123 8H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 6h1.717L5.07 1.243a.5.5 0 0 1 .686-.172zM2.163 8l1.714 6h8.246l1.714-6H2.163z"/>
                    </svg> <a href="#">Baby Products</a><br>
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-controller" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M11.119 2.693c.904.19 1.75.495 2.235.98.407.408.779 1.05 1.094 1.772.32.733.599 1.591.805 2.466.206.875.34 1.78.364 2.606.024.815-.059 1.602-.328 2.21a1.42 1.42 0 0 1-1.445.83c-.636-.067-1.115-.394-1.513-.773a11.307 11.307 0 0 1-.739-.809c-.126-.147-.25-.291-.368-.422-.728-.804-1.597-1.527-3.224-1.527-1.627 0-2.496.723-3.224 1.527-.119.131-.242.275-.368.422-.243.283-.494.576-.739.81-.398.378-.877.705-1.513.772a1.42 1.42 0 0 1-1.445-.83c-.27-.608-.352-1.395-.329-2.21.024-.826.16-1.73.365-2.606.206-.875.486-1.733.805-2.466.315-.722.687-1.364 1.094-1.772.486-.485 1.331-.79 2.235-.98.932-.196 2.03-.292 3.119-.292 1.089 0 2.187.096 3.119.292zm-6.032.979c-.877.185-1.469.443-1.733.708-.276.276-.587.783-.885 1.465a13.748 13.748 0 0 0-.748 2.295 12.351 12.351 0 0 0-.339 2.406c-.022.755.062 1.368.243 1.776a.42.42 0 0 0 .426.24c.327-.034.61-.199.929-.502.212-.202.4-.423.615-.674.133-.156.276-.323.44-.505C4.861 9.97 5.978 9.026 8 9.026s3.139.943 3.965 1.855c.164.182.307.35.44.505.214.25.403.472.615.674.318.303.601.468.929.503a.42.42 0 0 0 .426-.241c.18-.408.265-1.02.243-1.776a12.354 12.354 0 0 0-.339-2.406 13.753 13.753 0 0 0-.748-2.295c-.298-.682-.61-1.19-.885-1.465-.264-.265-.856-.523-1.733-.708-.85-.179-1.877-.27-2.913-.27-1.036 0-2.063.091-2.913.27z"/>
                        <path d="M11.5 6.026a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-1 1a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm2 0a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-1 1a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-7-2.5h1v3h-1v-3z"/>
                        <path d="M3.5 6.526h3v1h-3v-1zM3.051 3.26a.5.5 0 0 1 .354-.613l1.932-.518a.5.5 0 0 1 .258.966l-1.932.518a.5.5 0 0 1-.612-.354zm9.976 0a.5.5 0 0 0-.353-.613l-1.932-.518a.5.5 0 1 0-.259.966l1.932.518a.5.5 0 0 0 .612-.354z"/>
                    </svg> <a href="#">Gaming</a><br>
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bicycle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4 4.5a.5.5 0 0 1 .5-.5H6a.5.5 0 0 1 0 1v.5h4.14l.386-1.158A.5.5 0 0 1 11 4h1a.5.5 0 0 1 0 1h-.64l-.311.935.807 1.29a3 3 0 1 1-.848.53l-.508-.812-2.076 3.322A.5.5 0 0 1 8 10.5H5.959a3 3 0 1 1-1.815-3.274L5 5.856V5h-.5a.5.5 0 0 1-.5-.5zm1.5 2.443l-.508.814c.5.444.85 1.054.967 1.743h1.139L5.5 6.943zM8 9.057L9.598 6.5H6.402L8 9.057zM4.937 9.5a1.997 1.997 0 0 0-.487-.877l-.548.877h1.035zM3.603 8.092A2 2 0 1 0 4.937 10.5H3a.5.5 0 0 1-.424-.765l1.027-1.643zm7.947.53a2 2 0 1 0 .848-.53l1.026 1.643a.5.5 0 1 1-.848.53L11.55 8.623z"/>
                    </svg> <a href="#">Sporting Goods</a><br>
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cpu" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M5 0a.5.5 0 0 1 .5.5V2h1V.5a.5.5 0 0 1 1 0V2h1V.5a.5.5 0 0 1 1 0V2h1V.5a.5.5 0 0 1 1 0V2A2.5 2.5 0 0 1 14 4.5h1.5a.5.5 0 0 1 0 1H14v1h1.5a.5.5 0 0 1 0 1H14v1h1.5a.5.5 0 0 1 0 1H14v1h1.5a.5.5 0 0 1 0 1H14a2.5 2.5 0 0 1-2.5 2.5v1.5a.5.5 0 0 1-1 0V14h-1v1.5a.5.5 0 0 1-1 0V14h-1v1.5a.5.5 0 0 1-1 0V14h-1v1.5a.5.5 0 0 1-1 0V14A2.5 2.5 0 0 1 2 11.5H.5a.5.5 0 0 1 0-1H2v-1H.5a.5.5 0 0 1 0-1H2v-1H.5a.5.5 0 0 1 0-1H2v-1H.5a.5.5 0 0 1 0-1H2A2.5 2.5 0 0 1 4.5 2V.5A.5.5 0 0 1 5 0zm-.5 3A1.5 1.5 0 0 0 3 4.5v7A1.5 1.5 0 0 0 4.5 13h7a1.5 1.5 0 0 0 1.5-1.5v-7A1.5 1.5 0 0 0 11.5 3h-7zM5 6.5A1.5 1.5 0 0 1 6.5 5h3A1.5 1.5 0 0 1 11 6.5v3A1.5 1.5 0 0 1 9.5 11h-3A1.5 1.5 0 0 1 5 9.5v-3zM6.5 6a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"/>
                    </svg> <a href="#">Automobile</a><br>
                    <a href="#">Other categories</a><br>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" style="height: 550px;">
                      <div class="carousel-item active">
                        <img src="images/olivia_burton_featured_img.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="images/Temeite_silver-min.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="images/w4_smartwatch.jpg" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="jumbotron" class="jum">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chat-square-dots" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h2.5a2 2 0 0 1 1.6.8L8 14.333 9.9 11.8a2 2 0 0 1 1.6-.8H14a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                        <path d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                    </svg> <a href="#">HELP CENTER</a><br><br>
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-telephone-inbound-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zM15.854.146a.5.5 0 0 1 0 .708L11.707 5H14.5a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 1 0v2.793L15.146.146a.5.5 0 0 1 .708 0z"/>
                    </svg> <a href="#">CONTACT US</a><br><br>
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-clipboard" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                        <path fill-rule="evenodd" d="M9.5 1h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                    </svg> <a href="@">ABOUT</a><br><br>
                </div>
                <div>
                    <img src="images/Kimsdun_lightgreen.jpg" alt="" style ="height: 250px; width: 280px;">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
               <div class="div1">
                <a href="#"><h4 style="text-align: center;">Official store</h4></a>
               </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="div1">
                 <a href="#"><h4 style="text-align: center;">Inventory</h4></a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="div1">
                 <a href="#"><h4 style="text-align: center;">Profile</h4></a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="div1">
                 <a href="#"><h4 style="text-align: center;">Contact</h4></a>
                </div>
            </div>
        </div>
        <span><a href="#" id="pro" style="background-color:turquoise; height: 30px;"><b>NEW PRODUCT </b></a></span>
        <div class="row" style="margin-top: 25px; background-color: rgba(255, 255, 255, 0.76); padding-top:10px;">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="div2" style="margin-left: 15px;">
                    <a href="#"><img src="images/Temeite_silver-min.jpg" alt="" style="height: 300px"></a>
                    <p>
                        <h4 class="card-title"></h4>
                        <h4 class="card-title"></h4>
                    </p>
                    <a href="#" class="btn btn-primary">Order</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="div2">
                    <a href="#"><img src="images/redmi_eardots_3.jpg" alt="" style="height: 300px"></a>
                    <p>
                        <h4 class="card-title"></h4>
                        <h4 class="card-title"></h4>
                    </p>
                    <a href="#" class="btn btn-primary">Order</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="div2">
                    <a href="#"><img src="images/sw1.jpg" alt="" style="height: 300px"></a>
                    <p>
                        <h4 class="card-title"></h4>
                        <h4 class="card-title"></h4>
                    </p>
                    <a href="#" class="btn btn-primary">Order</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="div2">
                    <a href="#"><img src="images/redmi_eardots_3.jpg" alt="" style="height: 300px"></a>
                    <p>
                        <h4 class="card-title"></h4>
                        <h4 class="card-title"></h4>
                    </p>
                    <a href="#" class="btn btn-primary">Order</a>
                </div>
            </div>
        </div>
        <span><a href="#" id="pro1"><b>JUST FOR YOU| Get Quanlity Discount </b></a></span>
        <div class="row" id="row">
            <div class="col-md-3 col-sm-6 col-xs-12" class="div3">
                <div class="card" style="width: 20rem;">
                    <img src="images/w4_smartwatch.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text"></p>
                      <a href="#" class="btn btn-info">Order</a>
                    </div>
                  </div>
                  <div class="card" style="width: 20rem; margin-top: 10px;">
                    <img src="images/w4_smartwatch.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text"></p>
                      <a href="#" class="btn btn-info">Order</a>
                    </div>
                  </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12" class="div3">
                <div class="card" style="width: 20rem;">
                    <img src="images/w4_smartwatch.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text"></p>
                      <a href="#" class="btn btn-info">Order</a>
                    </div>
                </div>
                <div class="card" style="width: 20rem; margin-top: 10px;">
                    <img src="images/w4_smartwatch.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text"></p>
                      <a href="#" class="btn btn-info">Order</a>
                    </div>
                  </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12" class="div4">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="images/olivia_burton_featured_img.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="images/Temeite_silver-min.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="images/w4_smartwatch.jpg" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
            </div>
            </div>
        </div>
        <span><a href="#" id="pro" style="background-color:turquoise; height: 30px;"><b>TOP DEALS </b></a></span>
        <div class="row" style="margin-top: 25px; background-color: rgba(255, 255, 255, 0.76); padding-top:10px;">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="div2" style="margin-left: 15px;">
                    <a href="#"><img src="images/Temeite_silver-min.jpg" alt="" style="height: 300px"></a>
                    <p>
                        <h4 class="card-title"></h4>
                        <h4 class="card-title"></h4>
                    </p>
                    <a href="#" class="btn btn-primary">Order</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="div2">
                    <a href="#"><img src="images/redmi_eardots_3.jpg" alt="" style="height: 300px"></a>
                    <p>
                        <h4 class="card-title"></h4>
                        <h4 class="card-title"></h4>
                    </p>
                    <a href="#" class="btn btn-primary">Order</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="div2">
                    <a href="#"><img src="images/sw1.jpg" alt="" style="height: 300px"></a>
                    <p>
                        <h4 class="card-title"></h4>
                        <h4 class="card-title"></h4>
                    </p>
                    <a href="#" class="btn btn-primary">Order</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="div2">
                    <a href="#"><img src="images/redmi_eardots_3.jpg" alt="" style="height: 300px"></a>
                    <p>
                        <h4 class="card-title"></h4>
                        <h4 class="card-title"></h4>
                    </p>
                    <a href="#" class="btn btn-primary">Order</a>
                </div>
            </div>
        </div>
    </body>
</html>