<?php
function addProductToCart($user_id, $game_id) {

    $sql = "INSERT INTO cart SET user_id = :user_id, game_id= :game_id";
    $statement = getDB()->prepare($sql);

    $statement->execute([
        ':user_id'=> $user_id,
        ':game_id'=> $game_id,
    ]);
}

function countProductsInCart($user_id){
    $sql = "SELECT COUNT(cart_id) FROM cart WHERE user_id =".$user_id;
    $cartResults = getDB()->query($sql);
    $cartItems = $cartResults->fetchColumn();
    return $cartItems;
}
?>


