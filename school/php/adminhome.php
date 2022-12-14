<?php
session_start();

    if(!isset($_SESSION['email']))
    {
        header("location:signin.php");
    }

    elseif($_SESSION['usertype']=='student')
    {
        header("location:signin.php");
    }
?>

<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin page</title>
    <link rel="stylesheet" href="../css/adminhome.css">
</head>

<body>
    <section class='admin-home'>
        <div class="navbar">
            <p>Administrator</p>
            <a class='logout-button' href="logout.php">Wyloguj</a>
            <div class="burger">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <main>

            <nav>
                <ul class="menu-links">
                    <li>
                        <a href="admission.php">Wnioski</a>
                    </li>
                    <li>
                        <a href="">Dodaj studenta</a>
                    </li>
                    <li>
                        <a href="">Wyświetl studenta</a>
                    </li>
                    <li>
                        <a href="">Dodaj nauczyciela</a>
                    </li>
                    <li>
                        <a href="">Wyświetl nauczyciela</a>
                    </li>
                    <li>
                        <a href="">Dodaj kurs</a>
                    </li>
                    <li>
                        <a href="">Wyświetl kurs</a>
                    </li>
                </ul>
            </nav>
            <div class="dashboard"></div>
        </main>


    </section>

    <script src="../js/responsive_menu.js"></script>
</body>

</html>