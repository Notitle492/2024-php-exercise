<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

基本資料

    - 姓名 name  : 文字 *
    - 性別 gender: 單選鈕 *
    - 生日 birthday: 日期 
    - 電話 telephone: 電話
    - 地區 area : 下拉式選單 (北、中、南、東、外) *
    - 地址 address: 連動式選單

使用行為 (多選)
    
    - 聊天
    - 直播
    - 書信
    - 社群
    - 購物
    - 金融
    
滿意度(單選/量表)

    - 場地 : 5 scale
    - 設備 : 5 scale
    - 服務 : 5 scale

資料上傳
    - 同意書 : pdf
    - 個人照片: image


    <h1>0326作業</h1>

    <form action="" method="post">
    
        <p>
        <fieldset>
            <legend>基本資料</legend>
            <label for="chname">姓名：</label>
            <input type="text" name="chname" id="chname" placeholder="請輸入中文姓名" value="" required>
            
            </p>
                        
            <p>請選擇性別</p>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">male</label><br>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">female</label>

            <p>請輸入生日</p>
            <input type="date" name="date"/>

            <label for="ciyt">請選取指定地區：</label>
            <select name="city" id="city">
                <option value="mid">中部</option>
                <option value="s">南部</option>
                <option value="e">東部</option>
                <option value="ab">國外</option>
                <option value="n" selected>北部</option>
            </select>
        </fieldset>

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
        $gen = $_REQUEST["gender"];

        echo "姓名：" . $name;
        echo "性別：" . $gen;
        
    }


    ?>
    
</body>
</html>