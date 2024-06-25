<?php

require_once ("header.php");

?>

    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="<?= $indexCardsInsectes[1]['image'];?>" class="d-block mx-lg-auto img-fluid" alt="<?= $indexCardsInsectes[1]['titre'];?>" width="700" height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
                <h2 class="display-5 fw-bold text-body-emphasis lh-1 mb-3"><?= $indexCardsInsectes[1]['titre'];?></h2>
                <p class="lead"><?= $indexCardsInsectes[1]['contenu'];?></p>
            </div>
        </div>
    </div>
    <div class="container col-xxl-8 px-4 py-5">
        <h3 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Protégez Votre Environnement</h3>
        <div class="row flex-lg-row align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="uploads/images/insectes-volants.jpg" class="d-block mx-lg-auto img-fluid" alt="Insectes volants" width="700" height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
                <p class="lead"><h4>Qu'est-ce qu'un Insecte Volant ?</h4></p>
                <p>Les insectes volants sont des insectes capables de voler, souvent attirés par la lumière et les sources de nourriture. Ils peuvent infester les maisons, les bâtiments et les espaces extérieurs, posant des risques pour la santé et des désagréments divers.</p>
            </div>
        </div>

        <h2 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Types Courants d'Insectes Volants</h2>
        <div class="row flex-lg-row align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="uploads/images/moustiques-volants.jpg" class="d-block mx-lg-auto img-fluid" alt="Moustiques Volants" width="700" height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
                <p class="lead"><h4>Moustiques</h4></p>
                <p>Les moustiques sont connus pour leurs piqûres irritantes et leur capacité à transmettre des maladies graves comme le paludisme, la dengue et le virus Zika.</p>
            </div>
        </div>
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="uploads/images/mouches-volants.jpg" class="d-block mx-lg-auto img-fluid" alt="Mouches" width="700" height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
                <p class="lead"><h4>Mouches</h4></p>
                <p>Les mouches domestiques peuvent contaminer les aliments et propager des maladies. Elles se reproduisent rapidement et sont souvent difficiles à contrôler.</p>
            </div>
        </div>
        <div class="row flex-lg-row align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="uploads/images/guepes-frelons-volants.jpg" class="d-block mx-lg-auto img-fluid" alt="Guêpes et Frelons" width="700" height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
                <p class="lead"><h4>Guêpes et Frelons</h4></p>
                <p>Les guêpes et les frelons peuvent être agressifs et leurs piqûres sont douloureuses. Ils construisent souvent leurs nids près des habitations, ce qui peut poser des problèmes de sécurité.</p>
            </div>
        </div>
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="uploads/images/papillon-nuit-volants.jpg" class="d-block mx-lg-auto img-fluid" alt="Phalènes" width="700" height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
                <p class="lead"><h4>Phalènes (Papillons de Nuit)</h4></p>
                <p>Les phalènes, ou papillons de nuit, sont attirées par la lumière et peuvent endommager les vêtements et les textiles.</p>
            </div>
        </div>
        <h2 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Nos Solutions pour Éliminer les Insectes Volants</h2>
        <div class="row flex-lg-row align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="uploads/images/inspection-insectes-volants.jpg" class="d-block mx-lg-auto img-fluid" alt="Inspection par un expert" width="700" height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
                <p class="lead"><h4>Inspection et Identification</h4></p>
                <p>Nos experts réalisent une inspection minutieuse pour identifier les types d'insectes présents et déterminer l'étendue de l'infestation.</p>
            </div>
        </div>
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="uploads/images/traitement-chimique-insecte-volant.jpg" class="d-block mx-lg-auto img-fluid" alt="Traitement chimique" width="700" height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
                <p class="lead"><h4>Traitements Chimiques</h4></p>
                <p>Nous utilisons des insecticides de qualité professionnelle pour éliminer les insectes volants. Ces produits sont appliqués de manière ciblée pour maximiser leur efficacité.</p>
            </div>
        </div>
        <div class="row flex-lg-row align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="uploads/images/traitement-ecologique-insecte-volant.jpg" class="d-block mx-lg-auto img-fluid" alt="Traitement écologique" width="700" height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
                <p class="lead"><h4>Traitements Écologiques</h4></p>
                <p>Pour ceux qui préfèrent des solutions respectueuses de l'environnement, nous offrons des traitements écologiques utilisant des produits naturels et des techniques non toxiques.</p>
            </div>
        </div>
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="uploads/images/prevention-infestation-insecte-volants.jpg" class="d-block mx-lg-auto img-fluid" alt="Prévention des infestations" width="700" height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
                <p class="lead"><h4>Prévention et Suivi</h4></p>
                <p>Nous fournissons des conseils pratiques pour prévenir les infestations futures et offrons des services de suivi pour assurer un contrôle à long terme.</p>
            </div>
        </div>
        <h2 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Conseils de Prévention</h2>
        <div class="row flex-lg-row align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="uploads/images/conseil-prevention-insecte-volant.jpg" class="d-block mx-lg-auto img-fluid" alt="Conseils de prévention" width="700" height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
                <p>Pour éviter les infestations d'insectes volants, suivez ces conseils :</p>
                <ul>
                    <li><strong>Utilisez des Moustiquaires :</strong> Installez des moustiquaires aux fenêtres et aux portes pour empêcher les insectes d'entrer.</li>
                    <li><strong>Gardez les Aliments Couverts :</strong> Conservez les aliments dans des contenants hermétiques pour ne pas attirer les insectes.</li>
                    <li><strong>Éliminez les Sources d'Eau Stagnante :</strong> Les moustiques se reproduisent dans l'eau stagnante. Assurez-vous de vider régulièrement les récipients d'eau.</li>
                </ul>
            </div>
        </div>
    </div>


<?php

require_once ("footer.html");

?>