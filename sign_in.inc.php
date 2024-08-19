<?php
if (isset($_POST['sign-in'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $concatNamePassword = $username . $password;

    try {
        require_once "connections/db_include.php";
        require_once "connections/config_session.inc.php";
        require_once "sign_in_model.inc.php";
        require_once "sign_in_contr.inc.php";

        $results = get_username($pdo, $username);

        if (empty($results)) {
            header("Location: sign_in.php?login-failed");
        } else {
            if (is_password_match($concatNamePassword, $results["password"])) {

                $_SESSION["user_id"] = $results["id"];
                $_SESSION["last_regeneration"] = time();
                header("Location: dashboard.php");
            } else {
                header("Location: sign_in.php?login-failed");
            }
        }

        $pdo = null;
        $stmt = null;

        die();
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
}
