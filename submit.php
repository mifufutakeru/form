<?php

// セッションの開始

session_start();
$name1 = htmlspecialchars($_SESSION['name1'], ENT_QUOTES, 'UTF-8');
$name2 = htmlspecialchars($_SESSION['name2'], ENT_QUOTES, 'UTF-8');
$kana1 = htmlspecialchars($_SESSION['kana1'], ENT_QUOTES, 'UTF-8');
$kana2 = htmlspecialchars($_SESSION['kana2'], ENT_QUOTES, 'UTF-8');
$gender = $_SESSION['gender'];
$age = htmlspecialchars($_SESSION['age'], ENT_QUOTES, 'UTF-8');
$eki = htmlspecialchars($_SESSION['eki'], ENT_QUOTES, 'UTF-8');
$message = htmlspecialchars($_SESSION['message'], ENT_QUOTES, 'UTF-8');
$path = ('.image/');
move_uploaded_file($_SESSION['image']['data'], $path . 'upload_pic.jpg');
$user_image = $_SESSION['image']['tmp'];
$picture = $_SESSION['picture'];
$img_name = $_SESSION['img_name'];
//file_put_contents('./image/' . $user_image, $_SESSION['image']);
// 接続設定 
//$user = 'root';
//$pass = '';
$user = 'kir012728';
$pass = 'cTjAA8g2';
// データベースに接続
//$dsn = 'mysql:host=localhost;dbname=form;charset=utf8';
$dsn = 'mysql:host=o5044-777.kagoya.net;dbname=goemon_urawa;charset=utf8';

$conn = new PDO($dsn, $user, $pass); //「$conn」は、任意のオブジェクト名

// データの追加
$sql = 'INSERT INTO form(name1, name2, kana1, kana2, gender, age, eki, picture, note) VALUES("' . $name1 . '","' . $name2 . '","' . $kana1 . '","' . $kana2 . '","' . $gender . '","' . $age . '","' . $eki . '","' . $img_name . '", "' . $message . '")';
$stmt = $conn->prepare($sql);
$stmt->execute();
?>
<!DOCTYPE HTML>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <title>ユーザー登録フォーム・登録ページ</title>
    <style>
        p {
            margin-left: 50px;
        }
    </style>
</head>

<body>
    <p>ご登録ありがとうございました。</p>
    <div class="btn_wrap">
        <a class="btn bgright" href="index.php"><span>TOPへ戻る</span></a>
        </button>
    </div>
</body>

</html>