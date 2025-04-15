# 確認テスト前テスト

辞書アプリ

##dockerビルド

1. git clone git@github.com:tomo1583gh/dictionary.git
2. docker-compose up -d --build

*Mysqlは、OSによって起動しない場合があるのでそれぞれのPCに合わせてdocker-compose.ymlファイルを編集して下さい。

##laravel環境構築

1. docker-compose exec php bash
2. composer install
3. .env.exampleファイルから.envを作成し、環境変数を変更
4. php artisan key:generate
5. php artisan migrate
6. php artisan db:seed

##使用技術

-php 8.2.12
-laravel 5.14.2
-Mysql 8.0.26

##URL

-開発環境：http://localhost/
-phpMyAdmin:http://localhost:8080/
