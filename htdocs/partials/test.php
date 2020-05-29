<?php
include '../PDO/connection.php';

$request = $db->prepare("SELECT product_id FROM votes WHERE user_id = ?");
$request->execute([5]);
$productIdVotedFor = $request->fetchAll();


echo '<pre>' . var_export($productIdVotedFor, true) . '</pre>';

// Test if product id exist in array

for ($i = 0; $i < 15; $i++){
    // echo $i . "<br>";
    $arraySearch = array_column($productIdVotedFor, "product_id");
    echo '<pre>' . var_export($arraySearch, true) . '</pre>';
    
    // echo '<pre>' . var_export($arrayearch->fetchColunm()S, true) . '</pre>';

}

// fechall et faire une colone et in array

// if(!empty($errorMsg = $_SESSION['errorMsg'])):?>
    <!-- <div class="errorMsg"><?=$errorMsg?></div> -->
    <!-- <?php $_SESSION['errorMsg'] = null;?>  -->
<!-- <?php endif;?> -->