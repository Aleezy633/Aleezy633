<?php
function getAllGames()
{ {
        $sql = "SELECT game_id,bezeichnung,hersteller,genre,fsk FROM games";
        $result = getDB()->query($sql);
        return $result;
    }
}

function getGameBySearch($searchBarOutput)
{

    $sql = "SELECT game_id,bezeichnung,hersteller,genre,fsk FROM games WHERE bezeichnung LIKE \"%$searchBarOutput%\" OR game_id = \"$searchBarOutput\"";
    $result = getDB()->query($sql);
    return $result;
}

function getGameByFilterAsc()
{
    $sql = "SELECT game_id,bezeichnung,hersteller,genre,fsk FROM games ORDER BY bezeichnung ASC";
    $result = getDB()->query($sql);
    return $result;
}

function getGameByFilterDesc()
{
    $sql = "SELECT game_id,bezeichnung,hersteller,genre,fsk FROM games ORDER BY bezeichnung Desc";
    $result = getDB()->query($sql);
    return $result;
}
