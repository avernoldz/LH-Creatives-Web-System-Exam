<?php
require_once "connections/config_session.inc.php";

is_not_logged_in();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "css/css.php" ?>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <style>
        main .sign-in-form form .row.btn .col {
            justify-content: center;
        }

        main .sign-in-form form .form-group {
            color: var(--green-700);
            background-color: var(--green-500);
            border-radius: 4px;
            border: 1px solid var(--green-600);
            padding: 12px;
            font-weight: 500;
            margin-bottom: 16px;
        }

        main .sign-in-form form .row.btn button a {
            color: var(--white);
            font-size: 16px;
        }
    </style>
    <title>Dashboard</title>
</head>

<body>
    <?php include "components/header.php";
    header_nav();
    ?>
    <div>
        <div class="banner">
            <h1 class="w-700">Dashboard</h1>
        </div>
    </div>
    <main>
        <div class="sign-in-form">
            <div class="row">
                <form action="">
                    <div class="form-group">
                        Login Succeed
                    </div>

                    <div class="row btn">
                        <div class="col">
                            <a href="sign_in.php?sign-out" class="btn">Sign out</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <?php include "components/footer.php";
    footer_nav();
    ?>

    <script src="script/script.js"></script>

</body>

</html>