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
    <div class="container">
        <h1><?php echo $city["name"]?><small>  <?php echo $city["country"] ?></small></h1>

        <a href="country.php?name=<?= $city['country']; ?>" class="btn btn-success">See others city from <?php echo $city["country"] ?></a>
        <a href="cities.php" class="btn btn-primary">Back to list</a>
    </div>

    <footer>
        <?php include "footer.php" ?>
    </footer>
</body>
</html>