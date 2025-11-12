<?php
$items = [
  ['name' => 'Coffee', 'price' => 1200],
  ['name' => 'Tea', 'price' => 900],
  ['name' => 'Cake', 'price' => 700]
];

function calcTotal($list) {
  $sum = 0;
  foreach($list as $item) {
    $sum += $item['price'];
  }
  return $sum;
}

echo "商品一覧：<br>";
foreach($items as $item) {
  echo "{$item['name']}：{$item['price']}円<br>";
}

echo "<hr>合計金額：" . calcTotal($items) . "円";