<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Areas</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <main>
        <section class="service-section">
            <div class="container">
                <div class="service-content">
                    <?php
                    // Array containing service areas
                    $service_areas = [
                        'A' => [
                            'Adugodi - 560030',
                            'Agaram - 560007',
                            'Air Force Station Yelahanka - 560063',
                            'Arabic College - 560045',
                            'Ashok Nagar - 560025',
                            'Austin Town - 560047'
                        ],
                        'B' => [
                            'Banashankari - 560050',
                            'Banashankari 2nd Stage - 560070',
                            'Banashankari 3rd Stage - 560085',
                            'Bangalore City H.O. - 560002',
                            'Bangalore G.P.O. - 560001',
                            'Bangalore University - 560056',
                            'Bannerghatta - 560083',
                            'Bannerghatta Road - 560076',
                            'Bansawadi - 560043',
                            'Basavangudi - 560004',
                            'Basaveswaranagar - 560079',
                            'Benson Town - 560046',
                            'Bharath Nagar - 560001',
                            'Bilekahalli - 560076',
                            'Bommanahalli - 560068',
                            'Brigade Road - 560025',
                            'Broad Way Road - 560051',
                            'BTM Layout - 560076',
                            'Byatarayanapura - 560092'
                        ],
                        'C' => [
                            'Cambridge Layout - 560008',
                            'Carmelram - 560035',
                            'Chamarajpet West - 560018',
                            'Chandralayout - 560040',
                            'Chickpet - 560053',
                            'Chikkabanavara - 560090',
                            'Chikkalasandra - 560061',
                            'CV Raman Nagar - 560093'
                        ],
                        'D' => [
                            'Dasarahalli - 560057',
                            'Dharmaram College - 560029',
                            'Doddakallasandra - 560062',
                            'Domlur - 560071',
                            'Dooravaninagar - 560016',
                            'Dr. Ambedkar Nagar - 560045'
                        ],
                        'E' => [
                            'East End Main Road - 560034',
                            'Electronic City - 560100'
                        ],
                        'F' => [
                            'Frazer Town - 560005'
                        ],
                        'G' => [
                            'Gandhinagar - 560009',
                            'Ganganagar - 560032',
                            'Gavipuram Ext. - 560019',
                            'G.K.V.K. - 560065',
                            'Gokula Extension - 560054',
                            'Govt. Electric Factory - 560026',
                            'Guddadhalli - 560026'
                        ],
                        'H' => [
                            'HAL - 560017',
                            'HAL 2nd Stage - 560008',
                            'HAL 3rd Stage - 560075',
                            'Hanumanthanagar - 560019',
                            'Hebbal Agri. Farm - 560024',
                            'Hesaraghatta - 560088',
                            'Hesaraghatta Lake - 560089',
                            'HMT - 560031',
                            'Hongasandra - 560068',
                            'Hoodi - 560048',
                            'Hulimavu - 560076'
                        ],
                        'I' => [
                            'Indiranagar - 560038',
                            'Infantry Road - 560001',
                            'ISRO - 560017'
                        ],
                        'J' => [
                            'J.C. Nagar - 560006',
                            'Jakkasandra - 560034',
                            'Jalahalli - 560013',
                            'Jalahalli East - 560014',
                            'Jalahalli West - 560015',
                            'Jayachamarajendra Nagar - 560006',
                            'Jayanagar - 560041',
                            'Jayanagar 1st Block - 560011',
                            'Jayanagar 2nd Block - 560004',
                            'Jayanagar 3rd Block - 560041',
                            'Jayanagar 4th Block - 560011',
                            'Jayanagar 5th Block - 560041',
                            'Jayanagar 6th Block - 560070',
                            'Jayanagar 7th Block - 560082',
                            'Jayanagar 8th Block - 560070',
                            'Jayanagar 9th Block - 560041'
                        ],
                        'K' => [
                            'Kadabagere - 560067',
                            'Kadugodi - 560067',
                            'Kalyan Nagar - 560043',
                            'Kamakshipalya - 560079',
                            'Kengeri - 560060',
                            'Kengeri Satellite Town - 560060',
                            'Kodandarampura - 560067',
                            'Kodigehalli - 560097',
                            'Koramangala - 560034',
                            'Kothanur - 560077',
                            'K R Market - 560002',
                            'K R Puram - 560036',
                            'Kudlu - 560068'
                        ],
                        'L' => [
                            'Langford Town - 560025',
                            'Laggere - 560058'
                        ],
                        'M' => [
                            'M.G. Road - 560001',
                            'Madhavanagar - 560001',
                            'Mahadevapura - 560048',
                            'Mahalakshmipuram - 560086',
                            'Malleshpalaya - 560075',
                            'Malleshwaram - 560003',
                            'Marathahalli - 560037',
                            'Margosa Road - 560025',
                            'Mathikere - 560054',
                            'Medihalli - 560097',
                            'Mysore Road - 560026'
                        ],
                        'N' => [
                            'Nagarbhavi - 560072',
                            'Nagasandra - 560073',
                            'Nagavara - 560045',
                            'Narasimharaja Colony - 560019',
                            'Nayanadahalli - 560039',
                            'Neelasandra - 560078',
                            'Nelamangala - 562123',
                            'New Thippasandra - 560075',
                            'NRI Layout - 560016',
                            'Nyanappanahalli - 560073'
                        ],
                        'O' => [
                            'Old Airport Road - 560017',
                            'Old Madras Road - 560016',
                            'Outer Ring Road - 560037',
                            'Oxford College - 560079'
                        ],
                        'P' => [
                            'Padmanabhanagar - 560070',
                            'Palace Guttahalli - 560003',
                            'Peenya - 560058',
                            'Peenya 1st Stage - 560058',
                            'Peenya 2nd Stage - 560091',
                            'Peenya Industrial Area - 560058',
                            'Phoenix Market City - 560048',
                            'Pulikeshi Nagar - 560005'
                        ],
                        'Q' => [
                            'Queens Road - 560052'
                        ],
                        'R' => [
                            'R.T. Nagar - 560032',
                            'R.T. Nagar Post Office - 560032',
                            'Rabindranagar - 560070',
                            'Rajajinagar - 560010',
                            'Rajarajeshwarinagar - 560098',
                            'Ramamurthy Nagar - 560016',
                            'Richmond Town - 560025',
                            'Rmv Extension - 560080',
                            'RT Nagar - 560032'
                        ],
                        'S' => [
                            'Sadashivanagar - 560080',
                            'Sahakaranagar - 560092',
                            'Sanjaynagar - 560094',
                            'Sarjapur - 562125',
                            'Sarjapur Road - 560035',
                            'Shanthinagar - 560027',
                            'Shivajinagar - 560001',
                            'Singasandra - 560068',
                            'Sivan Chetty Gardens - 560042',
                            'Sonnenahalli - 560090',
                            'Subramanyanagar - 560021',
                            'Sudhama Nagar - 560027',
                            'Sunkadakatte - 560091'
                        ],
                        'T' => [
                            'TC Palya Road - 560097',
                            'Thanisandra - 560077',
                            'Thippasandra - 560075',
                            'Thyagarajanagar - 560028',
                            'Tilak Nagar - 560041',
                            'Tumkur Road - 560022'
                        ],
                        'U' => [
                            'Ullal - 560056',
                            'Ulsoor - 560008',
                            'Uttarahalli - 560061'
                        ],
                        'V' => [
                            'Vadiraja Nagar - 560028',
                            'Vaderahalli - 560026',
                            'Vani Vilas Road - 560002',
                            'Varthur - 560087',
                            'Vasanth Nagar - 560052',
                            'Vasantapura - 560061',
                            'Vidyaranyapura - 560097',
                            'Vijayanagar - 560040',
                            'Vishveswarapuram - 560004',
                            'Vittal Mallya Road - 560001'
                        ],
                        'W' => [
                            'Wheeler Road - 560084',
                            'Whitefield - 560067',
                            'Whitefield Post - 560067'
                        ],
                        'Y' => [
                            'Yeswanthpur - 560022',
                            'Yelahanka - 560063',
                            'Yelahanka New Town - 560106',
                            'Yeshwantpur - 560022'
                        ]
                    ];

                    foreach ($service_areas as $letter => $areas) {
                        echo "<div class='service-category'>";
                        echo "<h3 class='letter-heading'>$letter</h3>";
                        echo "<ul>";
                        foreach ($areas as $area) {
                            echo "<li>$area</li>";
                        }
                        echo "</ul>";
                        echo "</div>";
                    }
                    ?>
                </div>
            </div>
        </section>
    </main>
</body>
</html>















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Areas</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <main>
        <section class="service-section">
            <div class="container">
                <div class="service-content">
                    <?php
                    // Array containing service areas
                    $service_areas = [
                        'A' => [
                            'Adugodi - 560030',
                            'Agaram - 560007',
                            'Air Force Station Yelahanka - 560063',
                            'Arabic College - 560045',
                            'Ashok Nagar - 560025',
                            'Austin Town - 560047'
                        ],
                        // ... (Other letters and areas)
                        'Y' => [
                            'Yeswanthpur - 560022',
                            'Yelahanka - 560063',
                            'Yelahanka New Town - 560106',
                            'Yeshwantpur - 560022'
                        ]
                    ];

                    // Output the service areas
                    foreach ($service_areas as $letter => $areas) {
                        echo "<div class='service-category'>";
                        echo "<h3 class='letter-heading'>$letter</h3>";
                        echo "<ul>";
                        foreach ($areas as $area) {
                            echo "<li>$area</li>";
                        }
                        echo "</ul>";
                        echo "</div>";
                    }
                    ?>
                </div>
            </div>
        </section>
    </main>
</body>
</html>
