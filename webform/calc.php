<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>計算結果</h1>
    <?php
    $h = $_GET["height"];
    $w = $_GET["weight"];
    
    $bmi = $w / ($h/100*$h/100);
    $bmi = number_format($bmi, 2);
    ?>
    <p>身高： <?= $h?></p>
    <p>體重： <?= $w?></p>
    <p>BMI：  <?= $bmi?></p>
   
</body>
</html>