<?php

declare(strict_types=1);

function get_username(object $pdo, string $username)
{
    $query = "SELECT * from users WHERE name = :username;";

    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->execute();

    $results = $stmt->fetch(PDO::FETCH_ASSOC);

    return $results;
}
