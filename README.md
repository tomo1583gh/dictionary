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

##使用方法

1．トップページ（検索画面）下部のログインフォームより[register]をクリックしてログイン情報を登録します。　　
2．ログイン情報を登録後は[login]へ進んで下さい。　　
3．ログイン後トップページに戻り右上に[登録画面へ]と表示されていることを確認して下さい。　　
4．[登録画面へ]をクリックして登録画面へ移動し、情報を登録して下さい。　　
5．登録後、[検索画面へ]をクリックして検索画面にお戻り下さい。　　
6．検索フォームの下部に登録した情報が新しい順に表示されます。　　
7．検索フォームにキーワードを入力し[検索]をクリックすると検索結果の一覧が表示されます。　　
8．自ら登録した情報については登録内容の更新と削除が出来ます。


