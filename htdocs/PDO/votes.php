<?php

include "connection.php";

// SENDING VOTES----------------------------------------------------------------------------------------


if(!empty($_POST["productId"]) AND empty($_SESSION["username"])){
    $_SESSION["errorMsg"] = " You need to log in to vote";
}else{



// stores product ID 
$productId = intval($_POST["productId"]);

// retrieves and convert into INT user ID 
$username = $_SESSION["username"] ;
$getUserIdStatement = $db->prepare("SELECT id FROM users WHERE username = ?");
$getUserIdStatement->execute([$username]);
$userId = $getUserIdStatement->fetchColumn();
// $userId = intval(implode($userId));


// retrieves all votes
$getVoteStatement = $db->prepare("SELECT * FROM votes WHERE user_id = ? AND product_id = ?");
$getVoteStatement->execute([$userId, $productId]);
$userVote = $getVoteStatement->fetch();
// echo '<pre>' . var_export($userVote, true) . '</pre>';

// insert into votes table
if($userVote === false){

    $insertVotesStatement = $db->prepare("INSERT INTO votes (user_id, product_id) VALUES (?,?)");
    $insertVotesStatement->execute([$userId, $productId]);

}else{
    $_SESSION["errorMsg"] = " You've already voted for this product";
}
// }


// je veux récupérer le vote count pour chaque produit 

$productId = intval($_POST["productId"]);

// var_dump($_POST["productId"]);

// retrieves and convert into INT user ID 
$username = $_SESSION["username"] ;

$getProductsStatement = $db->prepare("SELECT COUNT(*) AS vote_count FROM votes WHERE product_id = ?");
$getProductsStatement->execute([$productId]);
$voteCount = $getProductsStatement->fetchColumn();


// echo '<pre>' . var_export($voteCount, true) . '</pre>';

// je veux encoder le retour la request SQL en JSON
echo json_encode($voteCount);

// die;

// }
    

  




}