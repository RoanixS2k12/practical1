<?php
/**
 * Created by PhpStorm.
 * User: Joani
 * Date: 10/01/14
 * Time: 14:43
 */

include "misc.php"; // 404 not found

/*$countryID = $_GET["id"];
if(!isset($countryID) || !is_numeric($countryID) || !isset($cities[$countryID]))
{
    page_not_found();
}*/



$country = $_GET["name"];

$title = sprintf("Country %s", $cities["name"]);

include __DIR__ . "/../view/country.php";
