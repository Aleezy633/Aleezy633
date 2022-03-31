<?php

function getDB()
{
    static $db;
    if ($db instanceof PDO) {
        return $db;
    }
    $dsn = "mysql:host=localhost;dbname=ap_projekt;charset=utf8";
    $db = new PDO($dsn, "root", "");
    return $db;
}
