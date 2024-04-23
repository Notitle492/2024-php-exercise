<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>表單練習</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>基本資料</legend>
            <div>
                <label for="chname">姓名：</label>
                <input type="text" name="chname" id="chname" placeholder="請輸入中文姓名" value="" required>
            </div>
            
            <div>
                性別：
                <input type="radio" id="male" name="gender" value="male">
                <label for="male">男生</label>
                <input type="radio" id="female" name="gender" value="female">
                <label for="female">女生</label>
            </div>            

            <div>
                生日：
                <input type="date" name="date"/>
            </div>

            <div>
                <label for="tel">電話：</label>
                <input type="text" name="tel" id="tel" placeholder="請輸入電話號碼" value="" required>
            </div>

            <div>
                <label for="ciyt">居住地區：</label>
                <select name="city" id="city">
                    <option value="mid">中部</option>
                    <option value="s">南部</option>
                    <option value="e">東部</option>
                    <option value="ab">外島</option>
                    <option value="n" selected>北部</option>
                </select>
            </div>

        </fieldset>


        <fieldset>
            <legend>使用行為</legend>
            <input type="checkbox" name="ub[]" id="ub1" value="chat">
            <label for="ub1">聊天</label>

            <input type="checkbox" name="ub[]" id="ub2" value="cast">
            <label for="ub2">直播</label>

            <input type="checkbox" name="ub[]" id="ub3" value="mail">
            <label for="ub3">書信</label>

            <input type="checkbox" name="ub[]" id="ub4" value="social">
            <label for="ub4">社群</label>

            <input type="checkbox" name="ub[]" id="ub5" value="shopping">
            <label for="ub5">購物</label>

            <input type="checkbox" name="ub[]" id="ub6" value="finance">
            <label for="ub6">金融</label>

        </fieldset>

        <fieldset>
            <legend>滿意度</legend>
            <div>
                場地
                <input type="radio" name="venue" id="venue5" value="venue5">
                <label for="venue5">非常滿意</label>
                <input type="radio" name="venue" id="venue4" value="venue4">
                <label for="venue4">滿意</label>
                <input type="radio" name="venue" id="venue3" value="venue3">
                <label for="venue3">普通</label>
                <input type="radio" name="venue" id="venue2" value="venue2">
                <label for="venue2">不滿意</label>
                <input type="radio" name="venue" id="venue1" value="venue1">
                <label for="venue1">非常不滿意</label>
            </div>
            <div>
                設備
                <input type="radio" name="device" id="device5" value="device5">
                <label for="device5">非常滿意</label>
                <input type="radio" name="device" id="device4" value="device4">
                <label for="device4">滿意</label>
                <input type="radio" name="device" id="device3" value="device3">
                <label for="device3">普通</label>
                <input type="radio" name="device" id="device2" value="device2">
                <label for="device2">不滿意</label>
                <input type="radio" name="device" id="device1" value="device1">
                <label for="device1">非常不滿意</label>
            </div>

            <div>
                服務
                <input type="radio" name="survice" id="survice5" value="survice5">
                <label for="survice5">非常滿意</label>
                <input type="radio" name="survice" id="survice4" value="survice4">
                <label for="survice4">滿意</label>
                <input type="radio" name="survice" id="survice3" value="survice3">
                <label for="survice3">普通</label>
                <input type="radio" name="survice" id="survice2" value="survice2">
                <label for="survice2">不滿意</label>
                <input type="radio" name="survice" id="survice1" value="survice1">
                <label for="survice1">非常不滿意</label>
            </div>
        </fieldset>

        <fieldset>
            <legend>資料上傳</legend>
            <div>
                <label for="agreement">同意書</label>
                <input type="file" name="agreement" id="agreement" accept=".pdf,.docx,.doc">
            </div>
            <div>
                <label for="image">個人照片</label>
                <input type="file" name="image" id="image" accept="image/*" onchange="preview_image(event)">
                <div>
                    <img id="output_image" src="" width="300"/>
                </div>
            </div>
        </fieldset>

        <input type="submit" value="送出" name="submit">
    </form>

    <?php
    if (!empty($_POST)) {
        echo "<hr>";
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
    }
   
    if (isset($_FILES["agreement"])):
        echo "<pre>";
        print_r($_FILES["agreement"]);
        echo "</pre>";
    endif;

    if (isset($_FILES["image"])):
        echo "<pre>";
        print_r($_FILES["image"]);
        echo "</pre>";
    endif

    ?>

<script type='text/javascript'>
function preview_image(event) {
    var reader = new FileReader();
    reader.onload = function () {
        var output = document.getElementById('output_image');
        output.src = reader.result;
    }
    reader.readAsDataURL(event.target.files[0]);
}
</script>
    
</body>
</html>