<?php
require_once "connections/config_session.inc.php";
require_once "sign_in_view.inc.php";

sign_out();

is_logged_in();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "css/css.php" ?>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <style>
        main .sign-in-form form .form-group.error {
            color: var(--red-700);
            background-color: var(--red-500);
            border-radius: 4px;
            border: 1px solid var(--red-600);
            padding: 12px;
            font-weight: 500;
            margin-bottom: 16px;
        }
    </style>
    <title>Sign in</title>
</head>

<body>
    <?php include "components/header.php";
    header_nav();
    ?>
    <div>
        <div class="banner">
            <h1 class="w-700">Sign in</h1>
        </div>
    </div>
    <main>
        <div class="sign-in-form">
            <div class="row">
                <form action="sign_in.inc.php" method="POST">
                    <?php sign_in_error() ?>
                    <div class="form-group">
                        <label for="username">USERNAME</label>
                        <input type="text" id="username" class="input" name="username" aria-describedby="userHelp" required>
                    </div>
                    <div class="form-group">
                        <label for="password">PASSWORD</label>
                        <input type="password" id="password" class="input" name="password" aria-describedby="passwordHelp" required>
                    </div>

                    <div class="row btn">
                        <div class="col">
                            <button type="submit" name="sign-in">Sign in</button>
                        </div>
                        <div class="col">
                            <a href="#">Forget Password?</a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="row terms">
                <div class="col">
                    <a href="#">Privacy</a>
                    <a href="#">Terms</a>
                </div>
            </div>
        </div>
    </main>

    <?php include "components/footer.php";
    footer_nav();
    ?>

    <script src="script/script.js"></script>

</body>

</html>