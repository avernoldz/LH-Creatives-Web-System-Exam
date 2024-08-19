<?php
require_once "connections/config_session.inc.php";
require_once "components/index.php";

sign_out();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "css/css.php" ?>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <style>
        main {
            padding: 0;
        }
    </style>
    <title>Sign in</title>
</head>

<body>
    <?php include "components/header.php";
    header_nav();
    ?>
    <main>
        <section id="banner">
            <div class="slides-container">
                <div class="slide">
                    <img src="assets/visual/slide01.jpg" alt="slide-banner" width="1900px" height="100%">
                </div>
                <div class="slide">
                    <img src="assets/visual/slide02.jpg" alt="slide-banner" width="1900px" height="100%">
                </div>
                <div class="slide">
                    <img src="assets/visual/slide03.jpg" alt="slide-banner" width="1900px" height="100%">
                </div>

                <a class="prev">❮</a>
                <a class="next">❯</a>
            </div>
        </section>

        <section id="service">
            <h1>Service</h1>
            <div class="row">
                <?php
                for ($i = 1; $i < 5; $i++) {
                    service("assets/service/service-desc0$i.jpg", "Service Title", "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Etiam dui sem, fermentum vitae, sagittis id, malesuada in, quam.");
                }
                ?>
            </div>
        </section>

        <section id="about-us">
            <h1>About Us</h1>
            <div class="row">
                <div class="col">
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        <br>
                        .Etiam dui sem, fermentum vitae, sagittis id, malesuada in, quam.
                        <br>
                        Nulla non lectus sed nisl molestie malesuada.
                        <br>
                        Sed vel lectus. Donec odio tempus molestie, porttitor ut, iaculis quis, sem.
                        <br>
                        Integer tempor. Praesent vitae arcu tempor neque lacinia pretium.
                        <br>
                        Fusce consectetuer risus a nunc. Aliquam ornare wisi eu metus.
                        <br>
                        In sem justo, commodo ut, suscipit at, pharetra vitae, orci. Duis risus.
                        <br>
                        Praesent id justo in neque elementum ultrices.
                        <br>
                        Nullam sit amet magna in magna gravida vehicula.
                        <br>
                        Etiam dictum tincidunt diam.
                    </p>
                </div>
            </div>
        </section>

        <section id="news">
            <h1>News</h1>
            <div class="row outer">
                <div class="col">
                    <?php

                    for ($i = 1; $i < 6; $i++) {
                        if ($i % 2 == 0) {
                            $btn = "Recruit";
                        } else {
                            $btn = "Information";
                        }

                        news_info($btn, "2018.04.18", "Something news title is here, this is dummy text. Something news title is here, this is dummy text.");
                    }

                    ?>
                </div>
            </div>
            <div class="row">
                <button>Show News List</button>
                <button class="shadow"></button>
            </div>
        </section>

        <section id="contact">
            <h1>Contact</h1>
            <div class="row">
                <div class="col">
                    <h2>GoogleMap</h2>
                </div>
            </div>
        </section>
    </main>

    <?php include "components/footer.php";
    footer_nav();
    ?>

    <script src="script/script.js"></script>
    <script>

    </script>

</body>

</html>