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
            'titre' => 'La Dératisation',
            'contenu' => "La dératisation (ou lutte contre les rats) est d'empêcher l'apparition de rats vivant en liberté à proximité des établissements humains, ou au moins de les maintenir petits afin de réduire le risque d'épidémie, la destruction de la nourriture et les dommages et la pollution par les animaux.",
            'lien' => 'deratisation.php',
            'image' => 'uploads/images/deratisation.jpg'
        ],
        [
            'titre' => 'La Désinsectisation',
            'contenu' => "Désinsectiser, c'est détruire des insectes nuisibles ou porteurs de germes. Par désinsectisation, on signifie donc l'acte de tuer, d'exterminer certains insectes par divers moyens insecticides.",
            'lien' => 'desinsectisation.php',
            'image' => 'uploads/images/desinsectisation.jpg'
        ],
        [
            'titre' => 'La Désinfection',
            'contenu' => "La désinfection est une opération d'élimination volontaire et momentanée de certains germes (sinon on parle de stérilisation), de manière à stopper ou prévenir une infection ou le risque d'infection ou surinfection par des micro-organismes ou virus pathogènes et/ou indésirables (une grande partie des germes le deviennent en cas de déplétion immunitaire).",
            'lien' => 'desinfection.php',
            'image' => 'uploads/images/desinfection.jpg'
        ],
    ];

    $indexCardsInsectes = [
        [
            'titre' => 'Les insectes rampants',
            'contenu' => "Les insectes rampants peuvent envahir la maison. Leur multiplication dans votre habitation est due à plusieurs facteurs : en premier lieu la température ambiante favorable, ensuite la présence d’humidité et de coins sombres, et enfin les restes de nourritures. Ils représentent une réelle nuisance pour votre maison, et il serait préférable de s’en débarrasser tant qu’ils n’ont pas encore causé de nombreux dégâts. Les éliminer constitue un travail difficile, mais heureusement, il existe des professionnels qualifiés pour ce travail.",
            'lien' => 'insectes_rampants.php',
            'image' => 'uploads/images/rampants.jpg'
        ],
        [
            'titre' => 'Les insectes volants',
            'contenu' => "Les insectes volants sont des êtres invertébrés qui appartiennent à un certain Ordre, dotés d'antennes, d'ailes ou de pièces buccales. Nous avons par exemple les orthoptères pour les criquets, les lépidoptères pour les papillons, les hyménoptères pour les guêpes, fourmis et abeilles, les diptères pour les mouches, les odonates pour les libellules, les coléoptères pour les scarabées. Pour la plupart, ce sont des nuisibles casse-têtes dans nos maisons, nos lieux de services, ou même dans nos champs. Docteur antinuisibles, votre expert en désinsectisation vous apporte les solutions efficaces pour lutter contre ces nuisibles.",
            'lien' => 'insectes_volants.php',
            'image' => 'uploads/images/volants.jpg'
        ],
        [
            'titre' => 'Les insectes xylophages',
            'contenu' => "Vous soupçonnez la présence d’insectes “grignoteurs de bois” dans votre logement ? Soyez en alerte dès l’apparition des premiers signes afin d’être en mesure de réagir à temps. Repérer à temps les insectes xylophages et surtout leurs larves vous permettra de mettre fin à temps à leur activité destructrice. Voici comment les identifier ainsi que des solutions efficaces pour vous en débarrasser.",
            'lien' => 'insectes_xylophages.php',
            'image' => 'uploads/images/xylophages.jpg'
        ]
    ];



