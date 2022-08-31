# Let-s-make-a-gourmet-map
# url
 http://localhost:83
# チケット管理
 https://github.com/Hirosada/Let-s-make-a-gourmet-map/issues
　
# docker for macを下記からインストール
　https://docs.docker.com/desktop/install/mac-install/

# ソースツリーをインストール
　https://www.atlassian.com/ja/software/sourcetree
　ブランチはmainから切って名前はfeature/[githubのissue番号]
　コミットメッセージは[issue番号]と対応内容を記載

#　環境構築
mkdir docker_dir && cd docker_dir
git clone https://github.com/laradock/laradock.git
cd laradock

# laradockと同じ階層に下記コマンドでlaravel_appを作成(コマンド載せとるけどソースツリーからインストールしてね)
git clone https://github.com/Hirosada/Let-s-make-a-gourmet-map.git laravel_app

# /laradock/.env.exampleをコピーして.envを作成し下記記述に変更
DATA_PATH_HOST=/.laradock/data => DATA_PATH_HOST=/.laradock-koa.co.jp/data
APACHE_HOST_HTTP_PORT=80 => APACHE_HOST_HTTP_PORT=83
APACHE_DOCUMENT_ROOT=/var/www/ => APACHE_DOCUMENT_ROOT=/var/www/laravel_app/public/
PHP_VERSION=7.4 => PHP_VERSION=8.1

# /laradock/docker-compose.ymlの180行目に下記を追加
working_dir: /var/www/laravel_app

# ターミナルでlaradockの階層に移動してbuildする
docker-compose build workspace mysql apache2 nginx php-fpm

#　下記コマンドでコンテナを起動し、2つ目で立ち上がっているか確認
docker-compose up -d workspace apache2 mysql
docker-compose ps

# Apacheの設定ファイルを下記に編集(laradock/apache2/sites/default.apache.conf)
<VirtualHost *:83>
    ServerName localhost
    DocumentRoot /var/www/laravel_app/public/
    Options Indexes FollowSymLinks
<Directory "/var/www/laravel_app/public">
    AllowOverride All
<IfVersion < 2.4>Allow from all = 2.4>
    Require all granted

# DB作成下記コマンド実行
・docker-compose exec mysql bash
・mysql -u root -p
　(password: root)

・create database gourmet_map_db;
・show databases;
　(確認用)