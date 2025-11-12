<?php

require_once __DIR__ . '/config.php';

// 以降、$pdo が使える
$stmt = $pdo->query("SELECT NOW()");
echo "現在時刻: " . $stmt->fetchColumn();

require 'db.php';
$stmt = $pdo->query('SELECT * FROM items ORDER BY id DESC');
$items = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>商品一覧</title>
</head>
<body>
  <h1>商品一覧</h1>

  <table border="1" cellpadding="8">
    <tr><th>ID</th><th>商品名</th><th>価格</th><th>登録日</th></tr>
    <?php foreach ($items as $item): ?>
      <tr>
        <td><?= htmlspecialchars($item['id']) ?></td>
        <td><?= htmlspecialchars($item['name']) ?></td>
        <td><?= htmlspecialchars($item['price']) ?>円</td>
        <td><?= htmlspecialchars($item['created_at']) ?></td>
      </tr>
    <?php endforeach; ?>
  </table>

  <hr>
  <form action="add.php" method="post">
    商品名: <input type="text" name="name" required>
    価格: <input type="number" name="price" required>
    <button type="submit">追加</button>
  </form>
</body>
</html>
