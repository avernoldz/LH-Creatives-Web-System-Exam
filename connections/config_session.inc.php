<?php

ini_set('session.use_only_cookies', 1);

session_set_cookie_params([
    'lifetime' => 1800,
    'domain' => 'localhost',
    'path' => '/',
    'secure' => true,
    'httponly' => true
]);

session_start();

if (isset($_SESSION["user_id"])) {
    if (!isset($_SESSION["last_regeneration"])) {
        regenerates_session_id();
    } else {
        $interval = 60 * 30;
        if (time() - $_SESSION["last_regeneration"] >= $interval) {
            regenerates_session_id();
        }
    }
} else {
    if (!isset($_SESSION["last_regeneration"])) {
        regenerates_session_id();
    } else {
        $interval = 60 * 30;
        if (time() - $_SESSION["last_regeneration"] >= $interval) {
            regenerates_session_id();
        }
    }
}


function regenerates_session_id()
{
    session_regenerate_id(true);
    $_SESSION["last_regeneration"] = time();
}


function sign_out()
{
    if (isset($_GET['sign-out'])) {
        unset($_SESSION["user_id"]);
        session_destroy();
    }
}

function is_not_logged_in()
{
    if (!$_SESSION["user_id"]) {
        header("Location: sign_in.php");
    }
}
