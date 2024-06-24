<?php

require_once ("header.php");

?>

<h2><div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="<?= $indexCardsInsectes[2]['image'];?>" class="d-block mx-lg-auto img-fluid" alt="<?= $indexCardsInsectes[2]['titre'];?>" width="700" height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
                <h2 class="display-5 fw-bold text-body-emphasis lh-1 mb-3"><?= $indexCardsInsectes[2]['titre'];?></h2>
                <p class="lead"><?= $indexCardsInsectes[2]['contenu'];?></p>
            </div>
        </div>
    </div></h2>


<?php

require_once ("footer.html");

?>