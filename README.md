# PHP Basic Practice

このリポジトリは、PHP の基礎文法と CRUD 学習のための練習用プロジェクトです。

## 📘 Day1：基本文法練習

### 内容
- 変数の使い方 (`$name`, `$price`)
- 条件分岐 (`if`, `elseif`, `else`)
- 配列 (`foreach`)
- 関数 (`function`)

### 実行方法
1. ターミナルでフォルダを開く  
   ```bash
   #cd Z:/projects/php-basic-practice/day1_basic

2. 実行
#php day1_basic.php

学んだこと

文字列展開に {} を使うと変数を埋め込める

foreach は配列の全要素を順に処理できる

function で処理をまとめて使い回せる


---

## 💡 補足：複数Dayが進んだら
次のように各Dayの進捗をまとめていきます👇

```markdown
## 📆 進捗ログ

| Day | 内容 | 状況 |
|-----|------|------|
| 1 | PHP基本文法 | ✅ 完了 |
| 2 | MySQL接続とCRUD | 🔄 進行中 |
| 3 | DockerでPHP実行 | ⏳ 次回予定 |

## DAY2（学校環境）

1.環境チェック
php -v
mysql -V
systemctl status httpd
systemctl status mysqld

2.プロジェクトの準備
cd /z/projects/php-basic-proctice
mkdir -p day2_crud
cd day2_crud

3.ファイル作成
db.php
index.php
add.php

4.MariaDBにデータベース作成

5.動作確認
http://192.168.0.3/web2511/php-basic-practice/day2_crud/index.php

6.GitHubへ記録

git status
git add .
git commit -m "feat: Day2 PHP CRUD (一覧＋追加)"
git push -u origin feat/day2-crud

7.mainブランチに統合するときは
git switch main
git merge --no-ff feat/day2-crud -m "merge: Day2 CRUD 完了"
git push origin main

8.明日のための環境確認
git log --oneline --graph --decorate --all | head
php -v
mysql -V
systemctl status httpd
systemctl status mysqld

9.トラブル対応

http://192.168.0.3/web2511/php-basic-practice/day2_crud/index.php DB接続エラー: SQLSTATE[HY000] [2002] No such file or directory

db.php
mysql:host=192.168.0.4;port=3306;dbname=app;charset=utf8mb4
に変更で解決

学校環境のgitにプロキシの設定を入れてpush pull可能にした。
現在のgit config --global --list

$ git config --global --list
user.name=Takuya Nakazawa
user.email=nakazawata98@gmail.com
core.quotepath=false
i18n.commitencoding=utf-8
i18n.logoutputencoding=utf-8
http.version=HTTP/1.1
http.sslbackend=schannel
http.proxy=http://192.168.10.1:8080
credential.helper=manager
https.proxy=http://192.168.10.1:8080

学校環境のApacheにgitがインストール出来ないので解決策として
tar.gz デプロイを採用
※VS CodeのSSHも使用可能にした

cd ~/public_html
にデプロイスクリプトを作成して実行権限の付与を行った
deploy.sh
chmod +x ~/deploy.sh

デプロイ実行
~/deploy.sh