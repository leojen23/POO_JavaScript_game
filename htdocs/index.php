<?php
include './PDO/connection.php';
include './PDO/get_products.php';

$valid = true;

if(isset($_GET['submit']) AND isset($_GET['search'])){
    $search = htmlspecialchars($_GET["search"]);

    if(empty($search)){
        $valid= false;
        echo("Taper une recherche");
    }

    // retrieves search results
    if($valid){
    $searchByName=$db->prepare("SELECT * FROM products WHERE name LIKE ? OR s_description");
    $searchByName->execute(["%" . $search ."%"]);
    $products=$searchByName->fetchAll();
    }}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product-Hunt</title>

    <!-- Bootstrap CDN
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.0/bootbox.min.js">
     -->

    <!-- Materialize CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- MATERIALIZE ICONS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="./CSS/style.css">

    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
</head>

<body>


  <!-- header and nav section start -->
  <?php include './partials/header.php' ?>

  <!-- Most popular products section start-->
  <?php include './partials/cards.php' ?>

  <!-- products list section starts-->

  <?php include './partials/product-list.php' ?>

  <!-- Footer starts here -->
    
  <?php include './partials/footer.php' ?>

  <script type="text/javascript" src="jquery-3.5.1.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script> -->
  
    <!-- MATERIALIZE Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="./JS/script.js"></script>

  
</body>

</html>
