<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>報名表</h1>

    <form action="" method="post">
    
        <p>
        <label for="chname">姓名：</label>
        <input type="text" name="chname" id="chname" placeholder="請輸入中文姓名" value="" required>
        </p>
        
        <p>
        <label for="passwd">密碼：</label>
        <input type="password" name="passwd" id="passwd" placeholder="請輸入密碼" value="" required>
        </p>
        
        <p>
        <label for="height">身高：</label>    
        <input type="text" name="height" id="height" placeholder = "請以公分輸入身高" value="" required>
        </p>

        <p>What is your gender?</p>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">male</label><br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">female</label>

        <p>How old are you?</p>
        <input type="radio" id="child" name="age" value="child">
        <label for="child">17 years or younger</label><br>
        <input type="radio" id="adult" name="age" value="adult">
        <label for="adult">18 - 64 years</label><br>
        <input type="radio" id="senior" name="age" value="senior">
        <label for="senior">65 years or older</label>
        <p>
        
        <input type="submit" value="Send" name="submit">
    </form>

    <?php
    if(isset($_REQUEST["submit"])){
        $name = $_REQUEST["chname"];
        $pwd =$_REQUEST["passwd"];
        $w = $_REQUEST["height"];
        $gen = $_REQUEST["gender"];
        $age = $_REQUEST["age"];

        echo "姓名：" . $name;
        echo "密碼：" . $pwd;
        echo "身高：" . $w;
        echo "性別：" . $gen;
        echo "身分：" . $age;
    }


    ?>
    
</body>
</html>