<?php

    error_reporting(0);
    session_start();
    session_destroy();

    if($_SESSION['message'])
    {
        $message=$_SESSION['message'];

        echo "<script type='text/javascript'>
        alert('$message');
        </script>";
    }

?>




<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <div class="home">
        <div class="navbar">
            <a class="logo">School website</a>
            <nav>
                <ul class="menu-links">
                    <li><a href="">Home</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="">Admission</a></li>
                    <li><a class="menu-button" href="php/signin.php">Login</a></li>
                </ul>
            </nav>
            <div class="burger">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <div class="header"></div>
        <div class="about-us">
            <img src="img/school2.jpg" alt="">
            <div>
                <h2>O nas</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil dolorem vitae architecto reiciendis
                    aut?
                    Adipisci, iusto labore? Recusandae numquam rem consequuntur error ullam, possimus iste in
                    voluptatum,
                    deleniti delectus facilis? Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil dolorem
                    vitae
                    architecto reiciendis aut?
                    Adipisci, iusto labore? Recusandae numquam rem consequuntur error ullam, possimus iste in
                    voluptatum,
                    deleniti delectus facilis?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil dolorem vitae architecto reiciendis
                    aut?
                    Adipisci, iusto labore? Recusandae numquam rem consequuntur error ullam, possimus iste in
                    voluptatum,
                    deleniti delectus facilis?</p>
            </div>
        </div>
        <div class="our-teachers">
            <h2>
                Nasi nauczyciele
            </h2>
            <div class="teachers">
                <div>
                    <img src="img/graphic.jpg" alt="">
                    <h3>Jan Nowak</h3>
                </div>
                <div>
                    <img src="img/marketing.png" alt="">
                    <h3>Jan Nowak</h3>
                </div>
                <div>
                    <img src="img/web.jpg" alt="">
                    <h3>Jan Nowak</h3>
                </div>
            </div>
        </div>

        <div class="our-courses">
            <h2>
                Nasze kursy
            </h2>
            <div class="courses">
                <div>
                    <img src="img/graphic.jpg" alt="">
                    <h3>Grafika komputerowa</h3>
                </div>
                <div>
                    <img src="img/marketing.png" alt="">
                    <h3>Marketing internetowy</h3>
                </div>
                <div>
                    <img src="img/web.jpg" alt="">
                    <h3>Tworzenie stron internetowych</h3>
                </div>
            </div>
        </div>

        <section class="form-section">
            <div class="form-wrapper">
                <div class="fw-top-txt">
                    <p>Chcesz nas o coś zapytać?</p>
                    <p>Skorzystaj z formularza.</p>
                </div>
                <form class="form" action="php/check_data.php" method="POST">
                    <input class="name" name='name' type="text" placeholder="Imię i nazwisko" id="name">
                    <input class="email" name='email' type="email" placeholder="Adres e-mail" id="email">
                    <input class="phone" name='phone' type="number" placeholder="Numer telefonu" id="phone">
                    <textarea class="message" name='message' type="text" placeholder="Treść wiadomości"
                        id="message"></textarea>
                    <button class="form-submit" type="submit" name="apply">
                        WYŚLIJ
                    </button>
                </form>
            </div>
        </section>

        <footer>All Copyright reserved by Marek Gerszendorf, Kamil Gołębiowski, Eryk Dolajzer</footer>
    </div>


    <script src="js/responsive_menu.js"></script>
</body>

</html>