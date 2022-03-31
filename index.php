<?php
session_name("session");
SESSION_START();
error_reporting(-1);
ini_set('display_errors', 'Off');



require_once __DIR__ . '/function/database.php';
require_once __DIR__ . '/function/game.php';
require_once __DIR__ . '/function/user.php';


$searchBarOutput = $_POST["search"];
$gameFilterAsc = $_POST["asc"];
$gameFilterDesc = $_POST["desc"];
$logout = $_POST["logout"];
$login = $_SESSION['login'];




if ($searchBarOutput == true) {
    $game_id = getGameBySearch($searchBarOutput);
} elseif ($gameFilterAsc == true) {
    $game_id = getGameByFilterAsc();
} elseif ($gameFilterDesc == true) {
    $game_id = getGameByFilterDesc();
} else {
    $game_id = getAllGames();
}


if ($logout == true) {
    session_destroy();
    header("Location: index.php");
}
if ($login == true) {
    require __DIR__ . '/templates/main.php';
} else {
    require __DIR__ . '/templates/login.php';
}
