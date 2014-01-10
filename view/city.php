<?php
/**
 * Created by PhpStorm.
 * User: Joani
 * Date: 10/01/14
 * Time: 14:27
 */

?>

<!DOCTYPE html>
<html>
    <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <?php include "links.php" ?>
    <title><?= $title ?></title>
</head>

<body>
<h1><?php echo $city["name"]?></h1>

<a href="country.php?name=<?= $city['country']; ?>">See others city from <?php echo $city["country"] ?></a>
<footer>
    <a href="cities.php">Back to list</a>
    <?php include "footer.php" ?>
</footer>
</body>
</html>