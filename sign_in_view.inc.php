<?php

declare(strict_types=1);

function sign_in_error()
{
    if (isset($_GET['login-failed'])) {
?>
        <div class="form-group error">
            Login Failed
        </div>
<?php
    }
}

function is_logged_in()
{
    if (isset($_SESSION["user_id"])) {
        header("Location: dashboard.php");
    }
}
