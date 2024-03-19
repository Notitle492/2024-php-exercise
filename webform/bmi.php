<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <h1>BMI計算</h1>
    <form action="">
        <p>身高 <input type="height" name="height" id="height"></p>
        <p>體重 <input type="weight" name="weight" id="weight"></p>
        <input type="submit" value="計算一下" name="submit">
    </form>

    <?php 
    if (isset($_GET["submit"])) {

        $h = $_GET["height"];
        $w = $_GET["weight"];
        
        $bmi = $w / ($h/100*$h/100);
        $bmi = number_format($bmi, 2);
    ?>
        <p>身高： <?= $h?></p>
        <p>體重： <?= $w?></p>
        <p>BMI：  <?= $bmi?></p>
    <?php 
        if($bmi < 18){
            echo "你太瘦了，要多吃點!";}
        elseif($bmi > 24){
            echo "你太胖了，要多運動!";
        }    
        else{
            echo "體重適中，多保持!";
        }
    } 
    ?>

</body>
</html>