<?php
/**
 * Created by PhpStorm.
 * User: Joani
 * Date: 10/01/14
 * Time: 14:43
 */

function page_not_found()
{
    header("HTTP/1.0 404 Not Found");
    include __DIR__ . "/../view/404.php";
    die();
}

function readCsvFromFile($filename,$delimiter)
{
    $citiesHandle = @fopen(__DIR__ . "/../csv/" . $filename, "r");

    $tabCities = array();

    if($citiesHandle)
    {
        while(($buffer = fgets($citiesHandle)) !== false )
        {
            $data = explode($delimiter, trim($buffer));
            $tabInter = array();

            $tabInter["name"] = $data[0];
            $tabInter["country"] = $data[1];

            $tabCities[] = $tabInter;
        }

        if(!feof($citiesHandle)) {
            echo "Error fgets() failed ";
        }

        fclose($citiesHandle);

        return $tabCities;
    }
}