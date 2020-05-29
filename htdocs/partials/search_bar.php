<section class="search_bar">
  <div class="row">
    <div id="popular" class="col s12 m10 offset-m1 l6 offset-l3 popular-list">

      <form action="" method="GET">
        <div class="input-field">
        <button type="submit" name="submit" class="waves-effect waves-light btn-large"><i class="material-icons">search</i></button>
          <input id="search" name="search" type="search" placeholder="Search by description or name" required>
          <i class="material-icons">close</i>
        </div>
      </form> 

        <?php 
        if(isset($_GET['submit']) && $valid){
          if(count($products)==0){
            echo("Aucun résultat trouvé!");
            }
          foreach($products as $product){?>
          <div class="col s12 m4" >
            <div class="search_box">
              <ul class="collection z-depth-1">
                <li class="collection-item avatar">
                    <img src="<?= $product["logo"]?>" alt="" class="circle">
                    <span class="title"><?= $product["name"]?></span>
                    <p><?= $product["s_description"]?> <br>
                </li>
              </ul>
            </div>
          </div>
          <?php  }
        }  ?> 
      </div>  

  </div>        
</section>