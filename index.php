<?php
// コードベースのファイルのオートロード
spl_autoload_extensions(".php"); 
spl_autoload_register();

// composerの依存関係のオートロード
require_once 'vendor/autoload.php';

// クエリ文字列からパラメータを取得
$min = $_GET['min'] ?? 5;
$max = $_GET['max'] ?? 20;

// パラメータが整数であることを確認
$min = (int)$min;
$max = (int)$max;

// ユーザーの生成
$employees = \Helpers\RandomGenerator::employees($min,$max);
$restaurantLocations = \Helpers\RandomGenerator::restaurantChains($min,$max);
$restaurantChains = Helpers\RandomGenerator::restaurantChains($min, $max);
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
        <? echo $restaurantChain->toHTML(); ?>
    <?php endforeach; ?>
</body>
</html>