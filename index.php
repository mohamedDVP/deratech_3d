<?php
    require_once 'header.php';
?>
        
        <div class="container col-xxl-8 px-4 py-5">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="assets/images/logo_deratech_3d.jpg" class="d-block mx-lg-auto img-fluid" alt="Logo Deratech 3D" width="700" height="500" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Qui sommes-nous?</h1>
                    <p class="lead">Nous sommes une équipe à votre service pour traiter les nuisibles avec nos produits reconnus et efficaces. Nous sommes soucieux de votre demande et votre besoin et nous nous engagons à agir rapidement pour votre confort...</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <a href="devis.php" class="btn btn-primary">Demander un devis</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container col-xxl-8 px-4 py-5">
            <div class="row">
                <h2>Nos services</h2>
                <?php
                                foreach($indexCardsServices as $indexCardService){
                                ?>
                <div class="col-md-4 my-2 d-flex">
                    
                    <div class="card">
                        
                        <img src="<?= $indexCardService['image'];?>" class="card-img-top" alt="<?= $indexCardService['titre'] ;?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $indexCardService['titre'] ;?></h5>
                            <p class="card-text"><?= $indexCardService['contenu'];?></p>
                            <a href="<?= $indexCardService['lien'];?>" class="btn btn-primary">En savoir plus</a>
                        </div>
                        
                    </div>
                    
                </div>
                <?php } ?>
            </div>

            
            
        </div>
            
        <div class="container col-xxl-8 px-4 py-5">
            <div class="row">
                <h2>Les nuisibles</h2>
                <?php
                                foreach($indexCardsInsectes as $indexCardInsecte){
                                ?>
                <div class="col-md-4 my-2 d-flex">
                    
                    <div class="card">
                        
                        <img src="<?= $indexCardInsecte['image'];?>" class="card-img-top" alt="<?= $indexCardInsecte['titre'] ;?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $indexCardInsecte['titre'] ;?></h5>
                            <p class="card-text"><?= $indexCardInsecte['contenu'];?></p>
                            <a href="<?= $indexCardInsecte['lien'];?>" class="btn btn-primary">En savoir plus</a>
                        </div>
                        
                    </div>
                    
                </div>
                <?php } ?>
            </div>
<?php
    require_once 'footer.html';
?>