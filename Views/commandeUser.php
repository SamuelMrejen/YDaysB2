<?php require_once ('Views/Layout.php');


for ($i=0;$i<count($afficherCommandeUser); $i++){
    ?>
    <div class="local" id="local">
        <div class="col-xs-2 col-xs-offset-1 table-caption">
            <div class="card h-100">
                <a href="#"><img class="card-img-top"  src="<?= $afficherCommandeUser[$i]['photo'] ?>" alt=""></a>
                <div class="card-body">
                    <h1><?= $afficherCommandeUser[$i]['ref'] ?></h1>
                    <h4 class="card-title">
                        <a href="#"><?= $afficherCommandeUser[$i]['user_id'] ?></a>
                    </h4>
                    <p class="card-text"><?= $afficherCommandeUser[$i]['glasses_id'] ?></p>
                </div>
            </div>
        </div>
    </div>
<?php } ?>