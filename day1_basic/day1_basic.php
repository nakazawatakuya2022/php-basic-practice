<?php
// PHPの基本文法 練習

// --- ① 変数 ---
$name = "Takuya";
$age = 25;
echo "こんにちは、{$name}さん（{$age}歳）！\n";

// --- ② 計算 ---
$price = 1200;
$tax = 0.1;
$total = $price + ($price * $tax);
echo "合計（税込）: {$total}円\n";

// --- ③ 条件分岐 ---
if ($total >= 2000) {
  echo "送料は無料です！\n";
} elseif ($total >= 1500) {
  echo "送料は半額です。\n";
} else {
  echo "送料は一律500円です。\n";
}

// --- ④ 配列 ---
$items = ["コーヒー", "紅茶", "ケーキ"];
echo "=== 商品リスト ===\n";
foreach ($items as $i => $item) {
  echo "{$i}: {$item}\n";
}

// --- ⑤ 関数 ---
function calcTotal($prices) {
  $sum = 0;
  foreach ($prices as $p) {
    $sum += $p;
  }
  return $sum;
}

$prices = [500, 800, 1200];
echo "合計金額: " . calcTotal($prices) . "円\n";
