<?php
// セッションの開始
session_start();

$name1 = htmlspecialchars($_POST['name1'], ENT_QUOTES, 'UTF-8');
$name2 = htmlspecialchars($_POST['name2'], ENT_QUOTES, 'UTF-8');
$kana1 = htmlspecialchars($_POST['kana1'], ENT_QUOTES, 'UTF-8');
$kana2 = htmlspecialchars($_POST['kana2'], ENT_QUOTES, 'UTF-8');
$gender = $_POST['gender'];
$age = htmlspecialchars($_POST['age'], ENT_QUOTES, 'UTF-8');
$eki = htmlspecialchars($_POST['eki'], ENT_QUOTES, 'UTF-8');
$picture = $_FILES['image'];
$message = htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8');

//$image = ($_FILES['image']['tmp_name']);
// 入力値をセッション変数に格納
$_SESSION['name1'] = $name1;
$_SESSION['name2'] = $name2;
$_SESSION['kana1'] = $kana1;
$_SESSION['kana2'] = $kana2;
$_SESSION['gender'] = $gender;
$_SESSION['age'] = $age;
$_SESSION['eki'] = $eki;
$_SESSION['message'] = $message;
$_SESSION['image']['data'] = file_get_contents($_FILES['image']['tmp_name']);
$_SESSION['image']['tmp'] = exif_imagetype($_FILES['image']['tmp_name']);
$_SESSION['picture'] = $picture;
$img_name = $_FILES['image']['name'];
move_uploaded_file($_FILES['image']['tmp_name'], './image/' . $img_name);

$_SESSION['img_name'] = $img_name;
?>
<!DOCTYPE HTML>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <title>ユーザー登録フォーム(confirm)</title>
</head>

<body>
    <h1>ユーザー登録フォーム(confirm)</h1>
    <form action="submit.php" method="post">
        <table>
            <tr>
                <th>氏名：</th>
                <td><?php echo $name1; ?><?php echo $name2; ?></td>
            </tr>
            <tr>
                <th>カナ：</th>
                <td><?php echo $kana1; ?><?php echo $kana2; ?></td>
            </tr>
            <tr>
                <th>年齢：</th>
                <td><?php echo $age; ?></td>
            </tr>
            <tr>
                <th>最寄り駅：</th>
                <td><?php echo $eki; ?></td>
            </tr>
            <tr>
                <th>写真：</th>
                <td>
                    <img src="image.php" class="imgsize">
                </td>
            </tr>
            <tr>
                <th>備考：</th>
                <td><?php echo $message; ?></td>
            </tr>
        </table>
        <input id="send" type="submit" value="登録">
    </form>
</body>

</html>