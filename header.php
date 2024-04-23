<?php
    require_once('lib/config.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
        <title>Document</title>
    </head>
    <body>
        <div class="container">
            <header class="d-flex justify-content-center py-3">
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid">
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <?php
                                    foreach($mainMenu as $key => $value) {?>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
                                </li>
                                <?php };?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        Nos Services
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="deratisation.php">Deratisation</a></li>
                                        <li><a class="dropdown-item" href="desinsectisation.php">Desinsectisation</a></li>
                                        <li><a class="dropdown-item" href="desinfection.php">Desinfection</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        Les nuisibles
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="insectes_rampants.php">insectes rampants</a></li>
                                        <li><a class="dropdown-item" href="insectes_volants.php">insectes volants</a></li>
                                        <li><a class="dropdown-item" href="insectes_xylophages.php">insectes xylophages</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.php">Nous contacter</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="devis.php">Devis</a>
                                </li>

=======
                                    foreach($menu as $content) 
                                    {?>
                                        <li class="nav-item">
                                    <?php   if(isset($content['item']) && is_array($content['item']))
                                            {?>
                                                <a class="nav-link dropdown-toggle" href="<?= $content['url']; ?>.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <?= $content['name'];?>
                                                </a>
                                                <ul class="dropdown-menu">
                                        <?php   foreach($content['item'] as $subContent)
                                                {?>
                                                    <a class="dropdown-item" href="<?= $subContent['url']; ?>.php">
                                                        <?= $subContent['name']; ?>
                                                    </a>
                                                           
                                        <?php   }?>
                                                </ul>   
                                    <?php  }
                                            else 
                                            {?>        
                                                <a class="nav-link active" aria-current="page" href="<?= $content['url'];?>.php">
                                                    <?= $content['name'];?>
                                                </a>       
                                <?php   }?>
                                        </li> 
                            <?php   }?>
>>>>>>> 9d11e8d (fix navbar)
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>
        </div>