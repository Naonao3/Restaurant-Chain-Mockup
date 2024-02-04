<?php

use Helpers\RandomGenerator;

spl_autoload_extensions(".php");
spl_autoload_register();

require_once 'vendor/autload.php';

$min = $_GET['min'] ?? 5;
$max = $_GET['max'] ?? 20;

$min = (int)$min;
$max = (int)$max;

$employees = RandomGenerator::employees($min,$max);
$restaurantLocations = RandomGenerator::restauratLocations($min,$max);
$restaurantChains = RandomGenerator::restaurantChains($min,$max);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Chain Mockup</title>
</head>
<body>
    <h1>Restaurant Chain Mockup</h1>
    <?php foreach ($restaurantChains as $restaurantChain): ?>
        <?= $restaurantChain->toHTML() ?>
    <?php endforeach; ?>
</body>
</html>