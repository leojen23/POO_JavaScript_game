<header>
    
    <!-- NAV SECTION -->
   <nav>
        <div class="nav-wrapper brown darken-2">
            <a href="./index.php"><img src="./images/logo2.png" width="55px" class="brand-logo"></a>
            <a href="#" data-target="hamburger" class="sidenav-trigger"><i class="material-icons" class="hamburger-icon">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="./category-photography.php"><i class="material-icons left">photo_camera</i>Photography</a></li>
                <li><a href="./category-mac.php"><i class="material-icons left">desktop_mac</i>Mac</a></li>
                <li><a href="./category-games.php"><i class="material-icons left">extension</i>Games</a></li>
                <li><a href="./category-books.php"><i class="material-icons left">book</i>Books</a></li>
                <li><a href="./category-webapp.php"><i class="material-icons left">public</i>Webapp</a></li>
            </ul>
        </div>

        <!-- SIDENAV -->
        <ul class="sidenav #80cbc4 teal lighten-3" id="hamburger">
            <li><a href="./category-photography.php"><i class="material-icons left brown-text text-darken-3">photo_camera</i>Photography</a></li>
            <li><a href="./category-mac.php"><i class="material-icons left brown-text text-darken-3">desktop_mac</i>Mac</a></li>
            <li><a href="./category-games.php"><i class="material-icons left brown-text text-darken-3">extension</i>Games</a></li>
            <li><a href="./category-books.php"><i class="material-icons left brown-text text-darken-3">book</i>Books</a></li>
            <li><a href="./category-webapp.php"><i class="material-icons left brown-text text-darken-3">public</i>Webapp</a></li>
        </ul>
    </nav>

    <!-- BANNER SECTION -->
    <section class="banner banner-landing-page">
        <div class="row">
            <div class="col s12 l12">
                <h1>Product Hunt</h1>
                <div class="row">
                    <div class="col s12 l12">

                        <?php if(!empty($_SESSION['username'])){
                        ?>
                        
                            <div class="greeting-msg">
                                <span class="hello"> Bienvenue <?=$_SESSION['username'];?> </span>
                                <button class="waves-effect waves-light btn-large"><a href="./PDO/logout.php" type="submit"><i class="material-icons left">lock_open</i>Log out</a></button> 
                            </div>   

                        <?php
                        
                        }else{ echo('
                                <form action="./PDO/login.php" method="POST" class="form-content">
                                    <div class="input-field col s6 l6"> 
                                    <i class="material-icons prefix brown-text text-darken-3">account_circle </i>
                                    <input type="text" name="username" class="validate" required>
                                    <label for="last_name" class="brown-text text-darken-3">Pseudo</label>
                                    <span class="helper-text" data-error="wrong" data-success="right">Example: Sophie751</span>
                                    </div>
                                    <div class="col s7 l4"> 
                                    <button type="submit" class="waves-effect waves-light btn-large"><i class="material-icons left">lock_outline</i>Log in</button> 
                                    </div>  
                                    <input type="hidden" name="created_at"> 
                                </form>');
                            } 
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

</header>

<!-- SEARCH BAR -->
<?php include './partials/search_bar.php' ?>
 
