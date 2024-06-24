<?php

require_once ("header.php");

?>

    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="<?= $indexCardsInsectes[0]['image'];?>" class="d-block mx-lg-auto img-fluid" alt="<?= $indexCardsInsectes[0]['titre'];?>" width="700" height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
                <h2 class="display-5 fw-bold text-body-emphasis lh-1 mb-3"><?= $indexCardsInsectes[0]['titre'];?></h2>
                <p class="lead"><?= $indexCardsInsectes[0]['contenu'];?></p>
            </div>
        </div>
    </div>


<?php

require_once ("footer.html");

?>