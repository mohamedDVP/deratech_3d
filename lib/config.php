<?php


    $menu = [
    [
        "name" => "Accueil",
        "url" => "index",
    ],
    [
        "name" => "Services",
        "url" => "services",
        "item" => [
            [
                "name" => "Tous les services",
                "url" => "services",
            ],
            [
                "name" => "La deratisation",
                "url" => "deratisation",
            ],
            [
                "name" => "La desinsectisation",
                "url" => "desinsectisation",
            ],
            [
                "name" => "La desinfection",
                "url" => "desinfection",
            ],
        ],
    ],
    [
        "name" => "Nuisibles",
        "url" => "insectes",
        "item" => [
            [
                "name" => "Tous les insectes",
                "url" => "insectes",
            ],
            [
                "name" => "Rampants",
                "url" => "insectes_rampants",
            ],
            [
                "name" => "Volants",
                "url" => "insectes_volants",
            ],
            [
                "name" => "Xylophages",
                "url" => "insectes_xylophages",
            ],
        ],
    ],
    [
        "name" => "Contact",
        "url" => "contact",
    ],
    [
        "name" => "Devis",
        "url" => "devis",
    ],
];


/*$itemServices = 
[
    [
        "name" => "Rampants",
        "url" => "insectes_rampants"
    ],
    [
        "name" => "Volants", 
        "url" => "insectes_rampants"
    ],
    [
        "name" => "Xylophages", 
        "url" => "insectes_xylophages"
    ],
                
            
];

$itemInsectes = 
[
    [
        "name" => "Rampants",
        "url" => "insectes_rampants"
    ],
    [
        "name" => "Volants", 
        "url" => "insectes_rampants"
    ],
    [
        "name" => "Xylophages", 
        "url" => "insectes_xylophages"
    ],
];




$menuCategories = 
[
    [
        "name" => "Accueil", 
        "url" => "index"
    ],
    [
        "name" => "Services", 
        "url" => "services", 
        "item" => array($itemServices),
    ],    
    [
        "name" => "Nuisibles", 
        "url" => "nuisibles", 
        "item" => array($itemInsectes),
    ],
    [
        
        "name" => "Contact", 
        "url" => "contact"
    ],
    [
        "name" => "Devis", 
        "url" => "devis"
    ],
];*/

  $mainMenu = [
    'index.php' => 'Accueil', 
    'services.php' => 'Nos services',
    'insectes.php' => 'Les nuisibles',
    'contact.php' => 'Nous contacter',
    'devis.php' => 'Devis'
  ];

  $dropdownMenuServices = [
    'deratisation.php' => 'La dératisation',
    'desinsectisation.php' => 'La désinsectisation',
    'desinfection.php' => 'La désinfection'
  ];

  $dropdownMenuNuisibles = [
    'insectes_rampants.php' => 'Les insectes rampants',
    'insectes_volants.php' => 'Les insectes volants',
    'insectes_xylophages.php' => 'Les insectes xylophages'
  ];

