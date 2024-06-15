<?php

require_once "header.php";
require_once "lib/config.php";

?>

        <div class="container col-xxl-8 px-4 py-5">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="<?= $indexCardsServices[1]['image'];?>" class="d-block mx-lg-auto img-fluid" alt="<?= $indexCardsServices[1]['titre'];?>" width="700" height="500" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <h2 class="display-5 fw-bold text-body-emphasis lh-1 mb-3"><?= $indexCardsServices[1]['titre'];?></h2>
                    <p class="lead"><?= $indexCardsServices[1]['contenu'];?>.</p>
                </div>
            </div>
        </div>

        <div class="container col-xxl-8 px-4 py-5">
            <h3 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Pourquoi la Désinsectisation est Importante</h3>
            <div class="row flex-lg-row align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="uploads/images/maladies-transmission-insectes.jpg" class="d-block mx-lg-auto img-fluid" alt="Infographie sur les maladies transmises par les insectes" width="700" height="500" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <p class="lead"><h4>Santé Publique</h4></p>
                    <p>Les insectes nuisibles comme les cafards, les moustiques et les punaises de lit peuvent transmettre des maladies et causer des réactions allergiques. Il est essentiel de les éliminer pour protéger la santé de votre famille et de vos employés.</p>
                </div>
            </div>
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="uploads/images/plantes-abimes-insectes.jpg" class="d-block mx-lg-auto img-fluid" alt="Plantes abimés par les insectes" width="500" height="200" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <p class="lead"><h4>Protection des Biens</h4></p>
                    <p>Les insectes peuvent endommager les biens matériels, contaminer les denrées alimentaires et causer des désagréments significatifs. Une désinsectisation efficace permet de préserver vos biens et de maintenir un environnement sain.</p>
                </div>
            </div>

            <h2 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Nos Méthodes de Dératisation</h2>
            <div class="row flex-lg-row align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="uploads/images/inspection-expert-desinsectisation-domicile.jpg" class="d-block mx-lg-auto img-fluid" alt="Inspection par un expert desinsectisation domicile" width="700" height="500" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <p class="lead"><h4>Inspection et Évaluation</h4></p>
                    <p>Nos experts réalisent une inspection minutieuse pour identifier les types d'insectes présents et déterminer l'étendue de l'infestation. Cette évaluation nous permet de choisir la méthode la plus appropriée pour chaque situation.</p>
                </div>
            </div>
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="uploads/images/traitement-chimique.jpg" class="d-block mx-lg-auto img-fluid" alt="Traitement chimique" width="700" height="500" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <p class="lead"><h4>Traitements Chimiques</h4></p>
                    <p>Nous utilisons des insecticides de qualité professionnelle pour éliminer les insectes. Ces produits sont appliqués de manière ciblée pour maximiser leur efficacité tout en minimisant les risques pour la santé humaine et animale.</p>
                </div>
            </div>
            <div class="row flex-lg-row align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="uploads/images/traitement-ecologique.jpg" class="d-block mx-lg-auto img-fluid" alt="Traitement écologique" width="700" height="500" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <p class="lead"><h4>Traitements Écologiques</h4></p>
                    <p>Pour ceux qui préfèrent des solutions respectueuses de l'environnement, nous offrons des traitements écologiques utilisant des produits naturels et des techniques non toxiques pour éliminer les insectes nuisibles.</p>
                </div>
            </div>
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="uploads/images/prevention.jpg" class="d-block mx-lg-auto img-fluid" alt="Prévention des infestations" width="700" height="500" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <p class="lead"><h4>Prévention et Suivi</h4></p>
                    <p>Après le traitement initial, nous fournissons des conseils de prévention pour éviter de futures infestations. Nous offrons également des services de suivi pour nous assurer que les insectes ne reviennent pas.</p>
                </div>
            </div>
            <h2 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Mesures de Prévention</h2>
            <div class="row flex-lg-row align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="uploads/images/conteneur-aliments.jpg" class="d-block mx-lg-auto img-fluid" alt="Conteneur alimentaire hermétique" width="700" height="500" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <p class="lead"><h4>Pour éviter les infestations, suivez ces conseils :</h4></p>
                    <ul>
                        <li><strong>Maintenez la Propreté :</strong> Gardez votre environnement propre pour réduire les sources de nourriture et d'abri pour les insectes.</li>
                        <li><strong>Scellez les Entrées :</strong> Réparez les fissures et les ouvertures pour empêcher les insectes d'entrer.</li>
                        <li><strong>Stockez les Aliments Correctement :</strong> Conservez les aliments dans des contenants hermétiques pour éviter les contaminations.</li>
                    </ul>
                </div>
            </div>
        </div>

        
<?php

require_once ("footer.html");

?>