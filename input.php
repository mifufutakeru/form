<!DOCTYPE HTML>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>ユーザー登録フォーム</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
</head>

<body>
    <section id="input">
        <div class="container">
            <div class="input">
                <h1>ユーザー登録フォーム</h1>
                <form action="confirm.php" method="post" enctype="multipart/form-data">
                    <table>
                        <tr>
                            <th>氏名</th>
                            <td><input type="text" name="name1" size="20" maxlength="10" placeholder="山田" required></td>
                            <td>
                                <input type="text" name="name2" size="20" maxlength="10" placeholder="太郎" required>
                            </td>
                        </tr>
                        <tr>
                            <th>カナ</th>
                            <td><input type="text" name="kana1" size="20" maxlength="20" placeholder="ヤマダ" required></td>
                            <td>
                                <input type="text" name="kana2" size="20" maxlength="20" placeholder="ジェームズ" required>
                            </td>
                        <tr>
                            <th>性別</th>
                            <td>
                                <input type="radio" name="gender" value="男" id="male"><label for="男">男</label>
                                <input type="radio" name="gender" value="女" id="femal"><label for="ab">女</label>
                            </td>
                        </tr>
                        <tr>
                            <th>年齢</th>
                            <td><input type="text" name="age" size="10">歳</td>
                        </tr>
                        <tr>
                            <th>最寄り駅</th>
                            <td>
                                <input type="text" name="eki" size="20" maxlength="10" placeholder="天王洲アイル駅" required>
                            </td>
                        </tr>
                        <tr>
                            <th>写真</th>
                            <td>
                                <input type="file" name="image" id="my_image" accept="image/*" multiple>
                            </td>
                        </tr>
                        <tr>
                            <th>お問い合わせ</th>
                            <td><textarea name="message" cols="50" rows="4"></textarea></td>
                        </tr>
                    </table>
                    <div class="input_wrap">
                        <input id="send" type="submit" value="確認する">
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>