<?php
$scores = [80, 92, 75];

function calc($arr) {
    $sum = 0;
    foreach ($arr as $v) {
        $sum += $v;
    }
    return $sum;
}

echo calc($scores);

$user = [
  "name" => "Takuya",
  "age" => 22,
  "city" => "Tokyo"
];

foreach ($user as $key => $val) {
  echo "$key : $val <br>";
}

http_response_code(404);
echo "Not found test";

header("Content-Type: application/json");
echo json_encode(["name" => "Takuya", "age" => 22]);

?>

