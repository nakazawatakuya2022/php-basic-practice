# 🧱 PHP Basic Practice

このリポジトリは、**3か月 × 1周チャレンジ（v1.0）** における  
PHP学習および CRUD 開発の練習用プロジェクトです。

学校（LAMP）・自宅（Docker）双方で動作する構成を採用しています。

---

## 📘 学習進捗

| Day | 内容 | 環境 | 状況 |
|-----|------|------|------|
| 1 | PHP基本文法（変数・条件分岐・配列・関数） | LAMP | ✅ 完了 |
| 2 | PHP × MariaDB CRUD（一覧＋追加） | LAMP | ✅ 完了 |
| 2R | foreach + function 復習 | LAMP | ✅ 完了 |
| 3 | CRUD関数化（Docker移行） | Docker | 🔄 進行中 |
| 4 | Docker構成整理（Apache + MySQL） | Docker | ⏳ 準備中 |

---

## ⚙️ 技術スタック

| カテゴリ | 使用技術 | 補足 |
|-----------|-----------|------|
| 言語 | PHP 8.x | LAMP & Docker 両対応 |
| Webサーバ | Apache 2.4 | 学校環境（Red Hat） |
| DB | MariaDB 10.x | localhost / port 3306 |
| バージョン管理 | Git + GitHub | HTTPS プロキシ対応済み |
| デプロイ | tar.gz デプロイ | `deploy.sh` によるリリース |
| ナレッジ管理 | GitHub Wiki | GROWIへ将来移行予定 |

---

## 🧩 環境別ディレクトリ構成

php-basic-practice/
├─ day1_basic/ # PHP基本文法
├─ day2_crud/ # DB接続＋CRUD処理
├─ day2_review/ # foreach＋関数復習
├─ day3_crud/ # 関数化（Docker移行予定）
├─ README.md # ← 本ファイル
└─ deploy.sh # デプロイスクリプト