アプリケーション名
contact-form_06021100

環境構築
Dockerのビルド

1.git clone git@github.com:coachtech-material/laravel-docker-template.git;

2.mv laravel-docker-template contact-form_06021100;

3.git remote set-url origin git@github.com:YuheUe/contact-form_06021100.git;

docker-compose exec php bash
5.git add .

6.git commit -m "リモートリポジトリの変更"

7.docker-compose up -d --build/

Laraval環境構築

1.docker-compose exec php bash

2.composer install

3.cp .env.example .env

4.php artisan make:migration create_categories_table

5.php artisan make:migration create_contacts_table

6.php artisan migrate:fresh

7.php artisan make:controller ContactsController

8.php artisan make:model Category

9.php artisan make:model Contacts

10.php artisan db:seed

使用技術(実行環境)
PHP 7.4.9

Laravel Framework 8.83.8

mysql:8.0.26

ER図
alt text

URL
開発環境:http://localhost phpMyAdmin:http://localhost