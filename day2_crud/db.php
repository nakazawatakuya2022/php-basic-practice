

<?php
// LAMP学習用: 学校サーバ(192.168.0.4)のMariaDBにTCP接続
//$dsn = 'mysql:host=192.168.0.4;port=3306;dbname=app;charset=utf8mb4';
$dsn = 'mysql:host=192.168.0.4;port=3306;dbname=app;charset=utf8mb4';
$user = 'web2511';   // 学校の設定に合わせて変更
$pass = 'web2511';       // パスワード設定があれば入力
try {
  $pdo = new PDO($dsn, $user, $pass, [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
  ]);
} catch (PDOException $e) {
  exit('DB接続エラー: ' . $e->getMessage());
}
