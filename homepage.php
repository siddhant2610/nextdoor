<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>NextDoor</title>
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-32x32.png">
</head>

<body>

    <!-- designing a new nav bar -->

    <div style="max-width: 1600px;
                margin: auto;
                margin-bottom: 0.3em; background-color: #1a1a1a;" class="navbar-new">

        <span class='nextdoor-class-footer'><a href="homepage.php">NexTDooR</a></span>

        <div class="nav-inner">
            <input type="text" class="search-bar-new placeholder-search" placeholder="Search">
            <button onclick="document.getElementById('id01').style.display = 'block'" type="button" value="login" class="login-button-new">Login</button>
            <button onclick="document.getElementById('id03').style.display = 'block'" type="button" value="SignUp" class="signup-button-new">Sign Up</button>

            <div class="categories-dropdown-new">
                <span>Categories</span>
                <div class="categories-dropdown-content-new">
                    <a href="stationary.php">stationary</a>
                    <a href="books.php">books</a>
                    <a href="electronics.php">electronics</a>
                    <a href="miscllaneous.php">miscllaneous</a>
                </div>
            </div>
        </div>
        <div class="hamburger-menu-new">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <hr style="height: 20px;">

    <br>
    <span class="hello_username">
        Welcome to NextDooR, <?php echo $user_data['user_name']; ?>
    </span>

    <div class="container-buy-sell">
        <div class="button-container">
            <button class="button">
                <a style="color: white; text-decoration: none;" href="buy.php">Buy</a>
            </button>
            <button onclick="document.getElementById('id02').style.display = 'block'" class="button">
                <a style="color: white; text-decoration: none;" href="">Sell</a>
            </button>
        </div>
    </div>



    <div class='body-center'>
        <h1 class='h1-body'>Fresh Recomendations</h1>

        <div class='padding-card-2 card-flex'>
            <div class='card-design-home'>
                <img class='image-card' src="images/books.jpg" alt="asd" />
                <hr />
                <div class='card-div'>
                    <h3 class='card-text'>First year books</h3>
                    <p class='card-text-p'>2000/-</p>
                </div>
            </div>

            <div class='card-design-home'>
                <img class='image-card' src="images/drawings.jpg" alt="asd" />
                <hr />
                <div class='card-div'>
                    <h3 class='card-text'>drawing papers</h3>
                    <p class='card-text-p'>200/-</p>
                </div>
            </div>

            <div class='card-design-home'>
                <img class='image-card' src="images/geometryobjcet.jpg" alt="asd" />
                <hr />
                <div class='card-div'>
                    <h3 class='card-text'>engg graphics</h3>
                    <p class='card-text-p'>800/-</p>
                </div>
            </div>
        </div>

        <div class='padding-card-2 card-flex'>
            <div class='card-design-home'>
                <img class='image-card' src="images/react-image.png" alt="asd" />
                <hr />
                <div class='card-div'>
                    <h3 class='card-text'>color pencils</h3>
                    <p class='card-text-p'>80/-</p>
                </div>
            </div>

            <div class='card-design-home'>
                <img class='image-card' src="images/penpaper.jpg" alt="asd" />
                <hr />
                <div class='card-div'>
                    <h3 class='card-text'>pen and card set(20)</h3>
                    <p class='card-text-p'>110/-</p>
                </div>
            </div>

            <div class='card-design-home'>
                <img class='image-card' src="images/yellowpencil.jpg" alt="asd" />
                <hr />
                <div class='card-div'>
                    <h3 class='card-text'>marker(yellow)</h3>
                    <p class='card-text-p'>40/-</p>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class='button-b-s'>
        <button class='buy-button button-85'>
            <a style="color: white; text-decoration: none;" href="buy.php">Buy</a>
        </button>
        <button onclick="document.getElementById('id02').style.display = 'block'" class='sell-button button-64'>
            <a style="color: white; text-decoration: none;" href="">Sell</a>
        </button>
    </div> -->


    <div style="padding-bottom: 60px;" id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href="blog.php"><img src="images/react-image.png" class="d-block w-30" alt="..."></a>
                <div style=" text-align: right;" class="carousel-caption d-none d-md-block">
                    <h5>First brand collaboration.</h5>
                    <div style="padding-left: 300px;">
                        <p>We are thrilled to announce a strategic collaboration between our brand and [Partner Brand]. 
                            This partnership brings together two innovative companies to create a powerful synergy in the market. 
                            Together, we will redefine industry standards and set new benchmarks. 
                            This collaboration opens doors to new markets, expands our reach, and unlocks untapped opportunities. 
                            We will embark on joint marketing initiatives, co-create compelling content, and leverage our networks for maximum impact.
                            By combining our resources, we will accelerate innovation and drive growth. 
                            Our collaborative product development will bring groundbreaking solutions to market faster, meeting the evolving needs of our customers. 
                            This brand collaboration creates enhanced value propositions for our customers, delivering unmatched products and services. 
                            This milestone marks the beginning of an exciting journey towards mutual success. Together, we will inspire, innovate, and shape a brighter future for our customers.
                        </p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <a href=""><img src="images/penpaper.jpg" class="d-block w-30" alt="..."></a>
                <div style=" text-align: right;" class="carousel-caption d-none d-md-block">
                    <h5>Second brand collaboration.</h5>
                    <div style="padding-left: 300px;">
                        <p>We are thrilled to announce a strategic collaboration between our brand and [Partner Brand]. 
                            This partnership brings together two innovative companies to create a powerful synergy in the market. 
                            Together, we will redefine industry standards and set new benchmarks. 
                            This collaboration opens doors to new markets, expands our reach, and unlocks untapped opportunities. 
                            We will embark on joint marketing initiatives, co-create compelling content, and leverage our networks for maximum impact.
                            By combining our resources, we will accelerate innovation and drive growth. 
                            Our collaborative product development will bring groundbreaking solutions to market faster, meeting the evolving needs of our customers. 
                            This brand collaboration creates enhanced value propositions for our customers, delivering unmatched products and services. 
                            This milestone marks the beginning of an exciting journey towards mutual success. Together, we will inspire, innovate, and shape a brighter future for our customers.
                            
                        </p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <a href=""><img src="images/yellowpencil.jpg" class="d-block w-30" alt="..."></a>
                <div style=" text-align: right;" class="carousel-caption d-none d-md-block">
                    <h5>Third brand collaboration.</h5>
                    <div style="padding-left: 300px;">
                        <p>We are thrilled to announce a strategic collaboration between our brand and [Partner Brand]. 
                            This partnership brings together two innovative companies to create a powerful synergy in the market. 
                            Together, we will redefine industry standards and set new benchmarks. 
                            This collaboration opens doors to new markets, expands our reach, and unlocks untapped opportunities. 
                            We will embark on joint marketing initiatives, co-create compelling content, and leverage our networks for maximum impact.
                            By combining our resources, we will accelerate innovation and drive growth. 
                            Our collaborative product development will bring groundbreaking solutions to market faster, meeting the evolving needs of our customers. 
                            This brand collaboration creates enhanced value propositions for our customers, delivering unmatched products and services. 
                            This milestone marks the beginning of an exciting journey towards mutual success. Together, we will inspire, innovate, and shape a brighter future for our customers.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <hr style="color: #f1f1f1;">
    <!-- footer part for the website -->
    <div style="margin: 50px 0px 50px 0px">
        <div class='footer-flex'>
            <ul class='media-ul-1'>
                <li><span class='nextdoor-class-footer'>NexTDooR</span></li>
                <li><span class='li-footer'>Manipal University Jaipur,<br /> Dehmi kalan, jaipur 303007</span></li>
                <li>
                    <span>
                        <ul class="footer-flex-icons">
                            <li class="icons-margin"><a href="https://github.com/siddhant2610" class="fa fa-github"></a> </li>
                            <li class="icons-margin"><a href="https://www.linkedin.com/in/siddhant-upadhyay-43a573222/" class="fa fa-linkedin"></a> </li>
                            <li class="icons-margin"><a href="https://www.instagram.com/_.siddhant._26_/" class="fa fa-instagram"></a> </li>
                        </ul>

                    </span>
                </li>
            </ul>
            <ul class='media-ul-2'>
                <li class='list-style-footer'>MENU</li>
                <li class='li-footer'><a class="a-footer" href="logout.php">LOGOUT</a></li>
                <li class='li-footer'><a class='a-footer' href="faq.php">FAQ</a></li>
                <li class='li-footer'><a class='a-footer' href="team.php">Team</a></li>
                <li class='li-footer'><a class='a-footer' href="blog.php">Blog</a></li>
            </ul>
            <ul class='media-ul-3'>
                <li class='list-style-footer'>CONTACT US</li>
                <li class='li-footer'>helpingsince2003@gmail.com</li>
                <li class='li-footer'>manipal@edu.com</li>
                <li class='li-footer'>+91-1234567890</li>
            </ul>
        </div>

        <hr>

        <div class='copyright-footer'>
            <ul class='lower-footer-1'>
                <li class='media-lower-footer-1 lower-footer-l1'>
                    <span>Copyright © 2023 nextdoor. All Rights Reserved.</span>
                </li>
                <div class='lower-footer-2'>
                    <li><a class='media-lower-footer-1 lower-footer-l2' href="#">terms of use</a></li>
                    <li><a class='media-lower-footer-1 lower-footer-l2' href="#">Privacy policy</a></li>
                </div>
            </ul>
        </div>
    </div>


    <!-- this is a login form for saving the data of customers -->

    <div id="id01" class="modal">

        <form action="nextdoor_login.php" class="modal-content" method="post">
            <!-- <div class="imgcontainer">
            </div> -->

            <div class="container-login">
                <span style="font-size: 17px">Username:</span><input class="login-box-inputs" type="text" placeholder="Enter Username" name="username" required>
                <br>
                <span style="font-size: 17px">Password:</span><input class="login-box-inputs" type="password" placeholder="Enter Password" name="password" required>
                <br>
                <input class="button3" type="submit" value="login" name="submit">
                <input class="button3" type="reset" value="reset" name="reset">
                <br>
                <label>
                    <input type="checkbox" checked="checked" name="remember">Remember me
                </label>
                <a class="forget_password_login" href="">forget password</a>
            </div>

            <div class="container" style="background-color:#f1f1f1">
                <button class="button3" type="submit" onclick="document.getElementById('id01').style.display='none'" style="background: linear-gradient(to right, #ed213a, #93291e);" class="cancelbtn">Cancel</button>
            </div>
        </form>
    </div>

    <div id="id02" class="modal">
        <form style="border-radius: 5px;
                    max-width:1000px;
                    margin:auto;
                    border: 1px white solid;
                    padding-bottom: 20px;
                    background: linear-gradient(to right, #232526, #414345);" action="sell.php" name="submit-to-google-sheet2" class="modal-content-2" method="post" enctype="multipart/form-data">
            <div class="imgcontainer">
            </div>
            <div class="container-sell">
                <label for="uname"><b>Name</b></label>
                <input class="login-box-inputs" type="text" placeholder="Enter name" name="name" required>

                <label for="phoneNo"><b>Contact number</b></label>
                <input class="login-box-inputs" type="tel" placeholder="Enter phone number" name="phone" required>

                <label for="psw"><b>Branch</b></label>
                <input class="login-box-inputs" type="text" placeholder="Enter branch" name="branch" required>

                <label for="pro"><b>Product</b></label>
                <input class="login-box-inputs" type="text" placeholder="Enter product name" name="product" required>

                <label for="about"><b>Details</b></label>
                <!-- <input class="login-box-inputs" type="text" placeholder="Enter product details" name="details" required> -->
                <textarea id="textarea" name="details" rows="4" cols="50" placeholder="add the product details here"></textarea>

                <label for="img"><b>Product Image</b></label>
                <input type="file" src="" alt="" placeholder="image" name="image">

                <button name="submit_sell" class="button3" type="submit2">Submit</button>
                <input class="button3" type="reset" value="Reset" name="reset">
            </div>
            <div class="container" style="background-color:#f1f1f1">
                <button class="button3" type="button" onclick="document.getElementById('id02').style.display='none'" style="background: linear-gradient(to right, #ed213a, #93291e);" class="cancelbtn">Cancel</button>
            </div>
        </form>
    </div>



    <div id="id03" class="modal">
        <form action="nextdoor_signup.php" class="modal-content" method="post">
            <!-- <div class="imgcontainer">
    </div> -->
            <div class="container-login">
                <span style="font-size: 17px">name:</span><input class="login-box-inputs" type="text" placeholder="Enter name" name="name" required>
                <br>
                <span style="font-size: 17px">email:</span><input class="login-box-inputs" type="email" placeholder="Enter email" name="email" required>
                <br>
                <span style="font-size: 17px">username:</span><input class="login-box-inputs" type="text" placeholder="create username" name="username" required>
                <br>
                <span style="font-size: 17px">password:</span><input class="login-box-inputs" type="text" placeholder="create password" name="password" required>
                <br>
                <input class="button3" type="submit" value="signup" name="submit">
                <input class="button3" type="reset" value="reset" name="reset">
                <br>
            </div>

            <div class="container" style="background-color:#f1f1f1">
                <button class="button3" type="submit" onclick="document.getElementById('id03').style.display='none'" style="background: linear-gradient(to right, #ed213a, #93291e);" class="cancelbtn">Cancel</button>
            </div>
        </form>
    </div>

</body>

</html>