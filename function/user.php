<?php

function getCurrentUserId()
{
    $user_id = mt_rand(0, time());
    if (isset($_COOKIE['user_id'])) {
        $user_id = (int) $_COOKIE['user_id'];
    }
    if (isset($_SESSION['user_id'])) {
        $user_id = (int) $_SESSION['user_id'];
    }
    return $user_id;
}

function emailExists($email): bool
{
    $sql = "SELECT * FROM user WHERE email=:email";
    $statement = getDb()->prepare($sql);
    if (false === $statement) {
        return false;
    }
    $statement->execute([
        ':email' => $email
    ]);

    return (bool)$statement->fetchColumn();
}
function passwortExists($passwort): bool
{
    $sql = "SELECT * FROM user WHERE passwort=:passwort";
    $statement = getDb()->prepare($sql);
    if (false === $statement) {
        return false;
    }
    $statement->execute([
        ':passwort' => $passwort
    ]);

    return (bool)$statement->fetchColumn();
}
function login()
{
    if ($_POST["email"] == true) {
        $email = $_POST["email"];
        $passwort = $_POST["passwort"];
        if (emailExists($email) == true & passwortExists($passwort) == true) {
            $_SESSION['login'] = true;
            $_SESSION['user_email'] = $email;
            $_SESSION['user_passwort'] = $passwort;
        } else {
            echo "Email nicht vorhanden oder falsches passwort";
        }
    }
}
