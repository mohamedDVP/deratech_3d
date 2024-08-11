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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous">
        </script>
        <meta name="google-site-verification" content="tScSMpGa_HDp6iTQBWMGEFbVYtaYB2koOljUx366JZA" />
        <meta name="description" content="Deratech 3d Nous sommes une équipe à votre service pour traiter les nuisibles avec nos produits reconnus et efficaces.">
        <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
        <link rel="manifest" href="site.webmanifest">
        <link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        <title>Deratech 3D</title>
    </head>
    <body>
        <div class="container">
            <header class="d-flex justify-content-end py-3">
                <nav class="navbar navbar-expand-lg bg-body-tertiary ">
                    
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#"></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarScroll">
                            <img src="assets/images/logo_deratech_3d.jpg" width="50" height="50" alt="Logo Deratech 3D">
                            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 300px;">
                                <?php
                                    foreach($menu as $content) 
                                    {?>
                                        <li class="nav-item">
                                    <?php   if(isset($content['item']) && is_array($content['item']))
                                            {?>
                                                <a class="nav-link active dropdown-toggle" href="<?= $content['url']; ?>.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                                      <?php }
                                            else 
                                            {?>        
                                                <a class="nav-link active" aria-current="page" href="<?= $content['url'];?>.php">
                                                    <?= $content['name'];?>
                                                </a>       
                                    <?php   }?>
                                        </li> 
                             <?php }?>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>
        </div>
