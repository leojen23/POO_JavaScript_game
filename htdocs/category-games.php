<?php
include './PDO/connection.php';

$getCategoryProductsStatement = $db->query('SELECT products.name, products.s_description AS description, products.logo, categories.name AS category 
FROM products
INNER JOIN categories
ON products.category_id = categories.id WHERE categories.id=4');

$categoryProducts = $getCategoryProductsStatement->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Games-category</title>

<!--Import Google Icon Font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- CUSTOM CSS -->
<link rel="stylesheet" href="./CSS/style.css">
<link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">

</head>
<body>

    <header>

    <!-- NAV SECTION -->
        <nav>
            <div class="nav-wrapper brown darken-2">
                <a href="./index.php"><img src="./images/logo2.png" width="55px" class="brand-logo"></a>
                <a href="#" data-target="hamburger" class="sidenav-trigger"><i class="material-icons" class="hamburger-icon">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li class="active #00796b teal darken-2"><a href='./index.php'><i class="material-icons left">home</i>Home</a></li>
                    <li><a href="category-photography.php"><i class="material-icons left">photo_camera</i>Photography</a></li>
                    <li><a href="category-mac.php"><i class="material-icons left">desktop_mac</i>Mac</a></li>
                    <li><a href="category-books.php"><i class="material-icons left">book</i>Books</a></li>
                    <li><a href="category-webapp.php"><i class="material-icons left">public</i>Webapp</a></li>
                </ul>
            </div>
            
                <!-- SIDENAV BURGER MENU -->
            <ul class="sidenav #80cbc4 teal lighten-3" id="hamburger">
                <li class="active #00796b teal darken-2"><a href='./index.php'><i class="material-icons left brown-text text-darken-3">home</i>Home</a></li>
                <li><a href="category-photography.php"><i class="material-icons left brown-text text-darken-3">photo_camera</i>Photography</a></li>
                <li><a href="category-mac.php"><i class="material-icons left brown-text text-darken-3">desktop_mac</i>Mac</a></li>
                <li><a href="category-books.php"><i class="material-icons left brown-text text-darken-3">book</i>Books</a></li>
                <li><a href="category-webapp.php"><i class="material-icons left brown-text text-darken-3">public</i>Webapp</a></li>
            </ul>
            
        </nav>

        <!-- BANNER SECTION -->
        <section class=" banner banner-category-game">

            <div class="row">
                <div class="col s12 l12">
                    <h1 class="apptitle">Games</h1>
                </div>
            </div>       
        </section>


    </header>

    <!-- CATEGORY SECTION -->
    <section class="category">

        <div class="row">
             <div id="category" class="col s12 m10 offset-m1 l6 offset-l3 category-list">
                
                <h2>Games applications</h2>

                <?php foreach($categoryProducts as $categoryProduct): ?>
                    <ul class="collection z-depth-1">
                        <li class="collection-item avatar">
                            <img src="<?= $categoryProduct["logo"]?>" alt="" class="circle">
                            <span class="title"><?= $categoryProduct["name"]?></span>
                            <p><?= $categoryProduct["description"]?> <br>
                            <small><?= $categoryProduct["category"]?></small></p>
                        </li>
                    </ul>
                <?php endforeach;?>
            </div>
        </div>

    </section>


    <!-- FOOTER -->
    <footer>

        <?php include './partials/footer.php';?>

    </footer>


</body>
    
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="./JS/script.js"></script>
        
</html>