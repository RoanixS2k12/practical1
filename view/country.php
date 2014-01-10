<?php
/**
 * Created by PhpStorm.
 * User: Joani
 * Date: 10/01/14
 * Time: 14:42
 */
?>

<?php include __DIR__ . "/../model/cities.php" ?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title><?= $title ?></title>
</head>

<body>
<h1><?php echo $country ?></h1>
<footer>

    <table>
        <?php foreach($cities as $cityId => $city) :?>
            <tr>
                <?php if(strcmp($city['country'], $country) == 0): ?>
                    <td><a href="city.php?id=<?= $cityId; ?>"><?= $city['name']; ?></a></td>
                <?php endif; ?>
            </tr>

        <?php endforeach; ?>
    </table>



    <a href="cities.php">Back to list</a>
</footer>
</body>
</html>
