<?php
/**
 * Created by PhpStorm.
 * User: Joani
 * Date: 10/01/14
 * Time: 14:22
 */

include __DIR__ . "/../model/cities.php";

/**
 * Render a 404 page
 */

/*include  "misc.php";*/

$cityID = $_GET["id"];


if(!isset($cityID) || !is_numeric($cityID) || !isset($cities[$cityID]))
{
    page_not_found();
}

$city = $cities[$cityID];

$title = sprintf("City %s", $cities["name"]);

include __DIR__ . "/../view/city.php";
