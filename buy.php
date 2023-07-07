<?php

$con = mysqli_connect("localhost", "root", "", "nextdoor");

if ($con) {
} else {
    echo "connection failed." . mysqli_connect_errno();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>buy page</title>
</head>

<body>
    <!-- designing a new nav bar -->
    <div style="max-width: 1600px;
                margin: auto;
                margin-bottom: 0.3em;" class="navbar-new">

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

    <hr>


    <div style="padding-top: 100px;" class="homebtn-buypage home-button">
        <a class="home-button-inside" href="homepage.php">Home</a>
    </div>

    <div class="buy">
        <div>

            <table class="table">
                <tr class="tr-1">
                    <th>S.No</th>
                    <th>uploaded By</th>
                    <th>Product Image</th>
                    <th>Contact number</th>
                </tr>
                <?php
                $i = 1;
                $rows = mysqli_query($con, "SELECT * FROM product_sell ORDER BY id DESC");
                ?>

                <?php foreach ($rows as $row) : ?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $row["name"]; ?></td>
                        <td> <img src="sellimages/<?php echo $row["image"]; ?>" width=200 title="<?php echo $row['image']; ?>"> </td>
                        <td><?php echo $row["contact_no"]; ?> </td>
                        <!-- <td> <button class="table_button"><a href="contact.php">Contact the seller</a></button> </td> -->
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
        <br><br>


    </div>



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

<style>
    @import url('https://fonts.googleapis.com/css2?family=Acme&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Righteous&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Hind+Siliguri&display=swap');


    .tr-1 {
        text-decoration: underline;
        font-family: 'Righteous', serif;
        color: wheat;

    }

    /* .table_button {
        width: 100px;
        border: none;
        color: white;
        padding: 10px 18px;
        background: linear-gradient(to right, #232526, #414345);
        cursor: pointer;
    }

    .table_button:hover {
        box-shadow: 5px 5px black;
    } */

    .buy {
        /* background-color: wheat; */
        background: #171717;
        max-width: 1100px;
        margin: auto;
        margin-top: 5em;
        filter: drop-shadow(0 0 30px grey);
    }

    .table {
        color: #e7e7e7;
        font-size: 20px;
    }


    table,
    tr,
    td {
        /* border: 2px black solid; */
        border: none;
        padding: 70px 82px 10px 70px;
    }

    th {
        padding: 20px;
        font-size: 20px;
    }
</style>