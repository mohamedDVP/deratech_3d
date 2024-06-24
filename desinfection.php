<?php

require_once "header.php";
require_once ("lib/config.php");
?>

        <div class="container col-xxl-8 px-4 py-5">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="<?= $indexCardsServices[2]['image'];?>" class="d-block mx-lg-auto img-fluid" alt="<?= $indexCardsServices[2]['titre'];?>" width="700" height="500" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <h2 class="display-5 fw-bold text-body-emphasis lh-1 mb-3"><?= $indexCardsServices[2]['titre'];?></h2>
                    <p class="lead"><?= $indexCardsServices[2]['contenu'];?></p>
                </div>
            </div>
        </div>

        <div class="container col-xxl-8 px-4 py-5">
            <h3 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Pourquoi la Désinfection est Essentielle</h3>
            <div class="row flex-lg-row align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="uploads/images/protection-sante-publique.jpg" class="d-block mx-lg-auto img-fluid" alt="Protéger la santé publique" width="700" height="500" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <p class="lead"><h4>Santé Publique</h4></p>
                    <p>Les environnements non désinfectés peuvent abriter des bactéries, des virus et des champignons pathogènes. Ces agents peuvent provoquer des infections et des maladies graves, mettant en danger la santé de vos proches ou de vos employés.</p>
                </div>
            </div>
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="uploads/images/protection-biens-espaces.jpg" class="d-block mx-lg-auto img-fluid" alt="Protection des biens et des espaces" width="500" height="200" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <p class="lead"><h4>Protection des Biens et des Espaces</h4></p>
                    <p>Une désinfection régulière aide à maintenir un environnement propre et sain, prolongeant ainsi la durée de vie de vos biens et préservant la qualité des espaces que vous fréquentez.</p>
                </div>
            </div>
            <h3 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Nos Méthodes de Désinfection</h3>
            <div class="row flex-lg-row align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="uploads/images/evaluation-expert-desinfection-nuisible.jpg" class="d-block mx-lg-auto img-fluid" alt="Évaluation par un expert" width="700" height="500" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <p class="lead"><h4>Évaluation et Planification</h4></p>
                    <p>Nos experts réalisent une évaluation approfondie de vos besoins pour déterminer les zones critiques et élaborer un plan de désinfection sur mesure.</p>
                </div>
            </div>
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="uploads/images/produits-desinfection.jpg" class="d-block mx-lg-auto img-fluid" alt="Produits de désinfection" width="700" height="500" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <p class="lead"><h4>Produits et Techniques</h4></p>
                    <p>Nous utilisons des produits désinfectants de qualité hospitalière et des techniques avancées pour garantir une élimination efficace des agents pathogènes tout en respectant les normes de sécurité.</p>
                </div>
            </div>
            <div class="row flex-lg-row align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="uploads/images/desinfection-brouillard.jpg" class="d-block mx-lg-auto img-fluid" alt="Désinfection par brouillard" width="700" height="500" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <p class="lead"><h4>Désinfection par Brouillard</h4></p>
                    <p>Pour les grands espaces et les surfaces difficiles d'accès, nous employons la désinfection par brouillard, une méthode qui permet de désinfecter efficacement tous les recoins.</p>
                </div>
            </div>
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="uploads/images/prevention.jpg" class="d-block mx-lg-auto img-fluid" alt="Prévention des infestations"" width="700" height="500" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <p class="lead"><h4>Prévention et Suivi</h4></p>
                    <p>Nous fournissons des conseils pratiques pour maintenir un environnement sain après la désinfection et offrons des services d'entretien réguliers pour prévenir la réapparition des agents pathogènes.</p>
                </div>
            </div>
            <h2 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Conseils de Prévention</h2>
            <div class="row flex-lg-row align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="uploads/images/conseils-nettoyage-desinfection.jpg" class="d-block mx-lg-auto img-fluid" alt="Conseils de nettoyage" width="700" height="500" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <p class="lead"><h4>Pour assurer une désinfection durable, suivez ces conseils :</h4></p>
                    <ul>
                        <li><strong>Nettoyez Régulièrement :</strong> Maintenez une routine de nettoyage quotidienne pour réduire la présence de saletés et de débris.</li>
                        <li><strong>Ventilation :</strong> Assurez une bonne circulation de l'air pour limiter l'humidité et la prolifération des germes.</li>
                        <li><strong>Utilisez des Désinfectants :</strong> Appliquez des désinfectants sur les surfaces fréquemment touchées pour tuer les germes.</li>
                    </ul>
                </div>
            </div>
        </div>




<?php
require_once "footer.html";
?>
