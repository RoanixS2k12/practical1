<?php
/**
 * Created by PhpStorm.
 * User: Joani
 * Date: 10/01/14
 * Time: 14:13
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <?php include "links.php" ?>
        <title>All Cities</title>
    </head>

    <body>

    <div class="container">
            <h1>All Cities</h1>
            <table class="table table-hover">
                <?php foreach ($cities as $cityId => $city) : ?>
                    <tr>
                        <td><a href="city.php?id=<?= $cityId; ?>"><?= $city['name']; ?></a></td>
                        <td><a href="country.php?name=<?= $city['country']; ?>"> <?= $city['country']; ?></a></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>

        <?php include "footer.php" ?>
    </body>

</html>