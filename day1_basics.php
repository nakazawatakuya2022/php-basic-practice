<?php
$price   = 1200;        // int
$taxRate = 0.1;         // float
$item    = "Coffee";    // string

$tax   = $price * $taxRate;
$total = $price + $tax;

echo "Item: $item\n";
echo "Tax: $tax\n";
echo "Total: $total\n";

if($total>=2000){
  echo "送料無料\n";
}elseif($total>=1500){
  echo "送料半額\n";
}else{
  echo "送料一律500円\n";
}

$prices = [500, 800, 1200];
$sum = 0;
foreach($prices as $p){
  $sum += $p;
}
echo "合計: {$sum}\n";
for ($i = 0; $i < count($prices); $i++) {
  echo "prices[{$i}] = {$prices[$i]}\n";
}
?>
