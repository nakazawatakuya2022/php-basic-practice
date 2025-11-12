<?php
function loadEnv($path)
{
    if (!file_exists($path)) {
        throw new Exception(".env file not found at: " . $path);
    }

    $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    foreach ($lines as $line) {
        $line = trim($line);

        // 空行 or コメント行（# または ; で始まる）をスキップ
        if ($line === '' || $line[0] === '#' || $line[0] === ';') {
            continue;
        }

        // KEY=VALUE 形式に分割（= を 1 回だけ）
        $pos = strpos($line, '=');
        if ($pos === false) {
            continue; // 形式外は無視
        }
        $key = trim(substr($line, 0, $pos));
        $value = trim(substr($line, $pos + 1));

        // 値が引用されている場合の剥がし（"..." または '...'）
        if ((strlen($value) >= 2) &&
            (($value[0] === '"' && substr($value, -1) === '"') ||
             ($value[0] === "'" && substr($value, -1) === "'"))) {
            $value = substr($value, 1, -1);
        }

        // 環境へ反映
        $_ENV[$key] = $value;
        putenv("$key=$value");
    }
}

// .env 読み込み
loadEnv(__DIR__ . '/.env');

// DSN
$host    = isset($_ENV['DB_HOST']) ? $_ENV['DB_HOST'] : '127.0.0.1';
$port    = isset($_ENV['DB_PORT']) ? $_ENV['DB_PORT'] : '3306';
$dbname  = isset($_ENV['DB_NAME']) ? $_ENV['DB_NAME'] : 'app';
$charset = isset($_ENV['DB_CHARSET']) ? $_ENV['DB_CHARSET'] : 'utf8mb4';
$user    = isset($_ENV['DB_USER']) ? $_ENV['DB_USER'] : 'root';
$pass    = isset($_ENV['DB_PASS']) ? $_ENV['DB_PASS'] : '';

$dsn = "mysql:host={$host};port={$port};dbname={$dbname};charset={$charset}";

try {
    $pdo = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ]);
    // echo "DB接続OK";
} catch (PDOException $e) {
    echo "DB接続エラー: " . $e->getMessage();
    exit;
}
