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

    $indexCardsServices = [
        [
            'titre' => 'Deratisation',
            'contenu' => "Some quick example text to build on the card title and make up the bulk of the card's content.",
            'lien' => 'deratisation.php',
            'image' => 'uploads/images/deratisation.jpg'
        ],
        [
            'titre' => 'Desinsectisation',
            'contenu' => "Some quick example text to build on the card title and make up the bulk of the card's content.",
            'lien' => 'desinsectisation.php',
            'image' => 'uploads/images/desinsectisation.jpg'
        ],
        [
            'titre' => 'Desinfection',
            'contenu' => "Some quick example text to build on the card title and make up the bulk of the card's content.",
            'lien' => 'desinfection.php',
            'image' => 'uploads/images/desinfection.jpg'
        ],
    ];

    $indexCardsInsectes = [
        [
            'titre' => 'Les insectes rampants',
            'contenu' => "Some quick example text to build on the card title and make up the bulk of the card's content.",
            'lien' => 'insectes_rampants.php',
            'image' => 'uploads/images/rampants.jpg'
        ],
        [
            'titre' => 'Les insectes volants',
            'contenu' => "Some quick example text to build on the card title and make up the bulk of the card's content.",
            'lien' => 'insectes_volants.php',
            'image' => 'uploads/images/volants.jpg'
        ],
        [
            'titre' => 'Les insectes xylophages',
            'contenu' => "Some quick example text to build on the card title and make up the bulk of the card's content.",
            'lien' => 'insectes_xylophages.php',
            'image' => 'uploads/images/xylophages.jpg'
        ]
    ];
