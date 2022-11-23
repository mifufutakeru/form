<!DOCTYPE html>
<html lang="ja">

<head>
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <meta http-equiv="content-type" content="img/jpg;">
    <meta http-equiv="content-type" content="img/png;">
    <meta http-equiv="content-type" content="img/jpeg;">
    <meta charset="utf-8">
    <title>タイトル</title>
</head>

<body>
    <?php
    try {
        $pdo = new PDO(
            'mysql:host=localhost;dbname=form;charset=utf8',
            'root',
            'root'
        );
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    } catch (PDOException $Exception) {
        die('接続エラー：' . $Exception->getMessage());
    }
    try {
        $sql = "SELECT * FROM form";
        $stmh = $pdo->prepare($sql);
        $stmh->execute();
    } catch (PDOException $Exception) {
        die('接続エラー：' . $Exception->getMessage());
    }
    ?>
    <div class="connect">
        <table>
            <tbody>
                <tr>
                    <th>名字</th>
                    <th>名前</th>
                    <th>名字カナ</th>
                    <th>名前カナ</th>
                    <th>性別</th>
                    <th>年齢</th>
                    <th>郵便番号</th>
                    <th>住所</th>
                    <th>最寄り駅</th>
                    <th>写真</th>
                    <th>備考</th>
                </tr>
                <?php
                while ($row = $stmh->fetch(PDO::FETCH_ASSOC)) {
                    $filePath = 'image/' . $row['picture'];
                    $data = file_get_contents($filePath);
                ?>
                    <tr>
                        <td><?= htmlspecialchars($row['name1']) ?></td>
                        <td><?= htmlspecialchars($row['name2']) ?></td>
                        <td><?= htmlspecialchars($row['kana1']) ?></td>
                        <td><?= htmlspecialchars($row['kana2']) ?></td>
                        <td><?= htmlspecialchars($row['gender']) ?></td>
                        <td><?= htmlspecialchars($row['age']) ?></td>
                        <td><?= htmlspecialchars($row['postnum']) ?></td>
                        <td><?= htmlspecialchars($row['todoufuken']['sityouson']['banti']['tatemonomei']) ?></td>
                        <td><?= htmlspecialchars($row['eki']) ?></td>
                        <td><a href="<?php echo ('https://goemon-urawa.jp/image/' . $row['picture']); ?> " target="_blank"><img src=" <?php echo ('https://goemon-urawa.jp/image/' . $row['picture']); ?> " class="conimg"></a></th>
                        <td><?= htmlspecialchars($row['note']) ?></th>
                    </tr>
                <?php
                }
                $pdo = null;
                ?>
            </tbody>
        </table>
        <div class="btn_wrap">
            <a class="btn bgright" href="index.php"><span>TOPへ戻る</span></a>
            </button>
        </div>
    </div>
</body>

</html>