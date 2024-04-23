<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Book List</title>
</head>
<body>

    <div class="container">
        <h1 class="text-center">Book List</h1>


<?php

// 設定主機、資料庫名稱、權限帳密
$hostname = 'localhost';
$database = 'school';
$dbuser = 'root';
$dbpass = '';

try {
    $conn = new PDO("mysql:host=$hostname;dbname=$database;charset=UTF8", $dbuser, $dbpass);

    // 設定錯誤處理模式 set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $key = $_GET['key'];
    // 送出SQL語法給資料庫
    $sql = "SELECT * FROM book WHERE `id`=".$key;
    $stmt = $conn->query($sql);

    // 設定資料取出的方式
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    // 取出資料集
    $row = $stmt->fetch();

    echo $row['bookname'] ."<br>\n";
    echo $row['author']   ."<br>\n";
    echo $row['pubdate']  ."<br>\n";
    echo $row['price']    ."<br>\n";
    echo nl2br($row['content']);
    
    
} catch(PDOException $e) {

    echo "連線失敗 Connection failed: " . $e->getMessage();

}

$conn = null;
?>
        
    </div>
</body>
</html>