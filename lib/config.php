<?php

  $mainMenu = [
    ['name' => "Accueil", 'url' => "index.php"],
    ['name' => "Services", 'url' =>"services.php", 
        'item1' => [
            'name' => 'La dératisation', 'url' =>'deratisation.php'
        ], 
            'item2' =>[
            'name' => 'La désinsectisation', 'url' => 'desinsectisation.php'
        ], 
            'item3' =>[
            'name' => 'La désinfection', 'url' => 'desinfection.php'
        ]
    ],

    ['name' => "Nuisibles", 'url' =>"insectes.php", 
        'item1' => [
            'name' => 'Rampants', 'url' =>'insectes_rampants.php'
        ],
        'item2' =>[
            'name' => 'Volants', 'url' => 'insectes_rampants.php'
        ],
        'item3' =>[
        'name' => 'Xylophages', 'url' =>'insectes_xylophages.php'
        ],
    ],
    ['name' => "Contact", 'url' =>"contact.php"],
    ['name' => "Devis", 'url' => "devis.php"],
  ];