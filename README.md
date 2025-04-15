# フリマアプリ（追加機能実装）

## 環境構築
1. DockerDesktopアプリを起動しておく

2. GitHubからクローンする
``` bash
git clone git@github.com:takayuki345/freemarket_ext.git
```
3. プロジェクト直下に移動する
``` bash
cd freemarket_ext
```
4. 以下コマンドで一連の処理を行う
``` bash
make init
```

## 使用技術（実行環境）
- php 7.4.9
- Laravel 8.83.29
- Mysql 8.0.26

## ER図
![ER図](ER_Diagram.jpg)

## URL
- 開発環境：http://localhost/
***（アクセス権の問題で`sudo chmod 777 -R src`が必要となる場合があります）***
- pypMyAdmin：http://localhost:8080/
- MailHog：http://localhost:8025/

## 備考
- テスト用のユーザー「test1」、「test2」、「test3」があらかじめ作成されます。それぞれのメールアドレス／パスワードは「test1@test／test1test1」、「test2@test／test2test2」、「test3@test／test3test3」となっております。もちろん、会員登録で新規作成も可能です。