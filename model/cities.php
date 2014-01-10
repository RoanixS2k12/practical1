<?php
/**
 * Created by PhpStorm.
 * User: Joani
 * Date: 10/01/14
 * Time: 14:12
 */

include_once __DIR__ . "/../public/misc.php";

$citiesCsv = array();
$citiesCsv =  readCsvFromFile("cities.csv", ";");


$citiesArray = array(
    ["name" => "San Francisco" ,    "country" => "USA"      ],
    ["name" => "Paris" ,            "country" => "France"   ],
    ["name" => "New York",          "country" => "USA"      ],
    [ "name" => "Berlin",           "country" => "Germany"  ],
    [ "name" => "Bamako",           "country" => "Malia"    ],
    [ "name" => "Buenos Aires",     "country" => "Argentina"],
    [ "name" => "Santiago",         "country" => "Chile"    ],
    [ "name" => "Bombay",           "country" => "India"    ],
    [ "name" => "Vancouver",        "country" => "Canada"   ],

);



$cities = $citiesCsv;