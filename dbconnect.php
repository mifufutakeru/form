<?php
try {
    $db = new PDO('mysql:dbname=goemon_urawa;host=o5044-777.kagoya.net;charset=utf8mb4', 'kir012728', 'cTjAA8g2');
}   catch (PDOException $e) {
    echo "データベース接続エラー　：".$e->getMessage();
}
?>