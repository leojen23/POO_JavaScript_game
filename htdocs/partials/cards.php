<?php include './PDO/get_products.php';?>

<!-- CARDS -->
<section class=" popular-product container">
  <div class="row">
      <div class="col s12 left-align brown-text lighten-2">
          <h2>Most popular products</h2>
      </div>
  </div>
  <div class="row">
    <?php for ($i=0; $i < 4 ; $i++):?>

        <!-- link to product infos request for modal -->
         <?php include "./PDO/Modal_infos.php";?>

         <!-- link to modal content -->
         <?php include "./partials/modal_content.php";?>

        <div class="col s12 m6 l3 ">
          <div class="center-align card-container">
            <div class="card hoverable">
                <div class="card-img-holder">
                  <img class="reponsive-img" src="<?= $products[$i]["logo"]?>" alt="">
                </div>
                <div class="card-info ">
                  <span class="card-title brown-text darken-2"><?=$products[$i]["name"]?></span>
                  <span class="card-category "><?=$products[$i]["category_name"]?></span>
                  <p><?=$products[$i]["description"]?></p>
                  
                  <!-- UPVOTE BUTTON -->
                  <a onclick="upVote(<?=$products[$i]['id']?>)" class=" waves-effect btn upvote-btn card-button" type="submit" data-id="<?=$products[$i]['id']?>">
                    <i class="material-icons left">keyboard_arrow_up</i><?=$products[$i]["vote_count"]?>
                  </a>
                
                  <div class="card-action">
                  
                  <!-- MODAL TRIGGER BUTTON -->
                  <a href="#<?=$products[$i]["id"]?>" type="submit" class="modal-trigger brown-text lighten-2">FIND OUT MORE</a>
                  </div>
                </div>
            </div>
          </div>
        </div>
        
    <?php endfor;?>
  </div>

  
</section>












