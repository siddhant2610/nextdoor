<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nextdoor Blog</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <header>
        <span class='nextdoor-class-footer'>NexTDooR</span>
    </header>

    <main>
        <h1>NextDoor - Frequently Asked Questions</h1>

        <div class="question">
            <h3>What is NextDoor?</h3>
        </div>
        <div class="answer">
            <p>NextDoor is a college buy and sell website that allows students to easily buy and sell items within their campus community.</p>
        </div>

        <div class="question">
            <h3>How can I create an account on NextDoor?</h3>
        </div>
        <div class="answer">
            <p>To create an account on NextDoor, visit our website and click on the "Sign Up" button. Fill in the required information and follow the instructions to complete the registration process.</p>
        </div>

        <div class="question">
            <h3>How do I post an item for sale on NextDoor?</h3>
        </div>
        <div class="answer">
            <p>To post an item for sale, log in to your NextDoor account and click on the "Sell" button. Provide a detailed description of the item, set a price, upload relevant photos, and select the appropriate category. Finally, click "Post" to make your item available for sale.</p>
        </div>

        <div class="question">
            <h3>Can I negotiate the price with the seller?</h3>
        </div>
        <div class="answer">
            <p>Yes, you can negotiate the price with the seller. Simply contact the seller through the provided contact information and discuss the details with them.</p>
        </div>

        <div class="question">
            <h3>Is NextDoor only available for college students?</h3>
        </div>
        <div class="answer">
            <p>Yes, NextDoor is specifically designed for college students to facilitate buying and selling within their campus community.</p>
        </div>

        <div class="question">
            <h3>How can I contact NextDoor support?</h3>
        </div>
        <div class="answer">
            <p>If you need assistance or have any questions, you can reach out to our support team by emailing helpingsince2003.com or by calling our toll-free number at +91-1234567890.</p>
        </div>
        <div class="home-button">
            <a class="home-button-inside" href="homepage.php">Home</a>
        </div>

    </main>
    <aside>

    </aside>

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

    <!-- <footer>
        <p>&copy; 2023 Nextdoor. All rights reserved.</p>
    </footer> -->
</body>

</html>


<style>
    @import url('https://fonts.googleapis.com/css2?family=Righteous&display=swap');

    body {
        color: grey;
        max-width: 2000px;
        margin: auto;
        font-family: Arial, sans-serif;
        /* margin: 0;
        padding: 0; */
        line-height: 1.5;
        background: linear-gradient(to right, #000000, #434343);
    }

    .question {
        font-weight: bold;
        margin-bottom: 10px;
    }

    .answer {
        margin-bottom: 20px;
    }

    .home-button {
        text-align: center;
    }

    .home-button-inside {
        background-color: white;
        color: black;
        border: none;
        padding: 20px 30px 20px 30px;
        font-family: 'righteous', cursive;
        font-size: 20px;
    }

    .home-button-inside:hover {
        background-color: rgb(33, 33, 33);
        transition: 0.3s;
    }

    .home-button:hover {
        transform: translateY(-3px);
        transition: 0.3s ease;
    }

    .nextdoor-class-footer {
        color: white;
        font-size: 3.3em;
        font-family: 'Righteous', cursive;
        cursor: pointer;
        background: linear-gradient(to right, #f32170, #ff6b08, #cf23cf, #eedd44);
        -webkit-text-fill-color: transparent;
        background-clip: border-box;
        -webkit-background-clip: text;
    }

    header {
        background: linear-gradient(to right, #000000, #434343);
        padding: 20px;
        text-align: center;
    }

    h1 {
        margin: 0;
    }

    main {
        /* display: flex;
        justify-content: space-between; */
        margin: 20px;
    }

    article {
        flex-grow: 1;
        margin-right: 20px;
        line-height: 1.6;
    }

    aside {
        flex-basis: 25%;
    }

    h2 {
        margin-top: 0;
    }

    .meta {
        color: wheat;
        margin-bottom: 10px;
    }

    img {
        max-width: 100%;
        height: auto;
        margin-bottom: 20px;
    }

    ul {
        padding: 0;
    }

    li {
        list-style: none;
        margin-bottom: 10px;
    }

    a {
        color: #007bff;
        text-decoration: none;
    }

    /* footer {
        background-color: black;
        padding: 10px;
        text-align: center;
        margin-top: 20px;
    } */
</style>