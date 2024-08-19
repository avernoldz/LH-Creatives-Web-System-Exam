<?php

declare(strict_types=1);

function is_password_match(string $concatNamePassword, string $password)
{
    if ((md5($concatNamePassword) === $password)) {
        return true;
    } else {
        return false;
    }
}
