# https://hub.docker.com/_/phpにあるイメージファイルを指定
FROM php:8.0-fpm

# RUNコマンドは、buildしたときに元となるdockerイメージに対して実行する処理を記述する。
# \（バックスラッシュ）を用いて、複数行に分けることが可能。
# パッケージ一覧を更新
RUN apt update \
    # zlibはデータの圧縮に関するアルゴリズムをライブラリ化したもの
    # vimをインストール
    # MariaDBデータベースのクライアントアプリケーションである「mysql」を使えるように「mariadb-client」をインストール
    # libzip-devはzip圧縮時に必要となるライブラリ(libzip は、zlib を使用する)
    && apt install -y zlib1g-dev mariadb-client vim libzip-dev \
    # docker-php-ext-installはPHPに標準で備わっている拡張パッケージのインストール＆有効化ができるコマンド
    # PDO_MYSQL は、PHP から MySQL データベースへのアクセスを可能にするための PHP Data Objects (PDO) インターフェイス を実装したドライバ。
    && docker-php-ext-install zip pdo_mysql \
    # gitのインストール
    && apt install -y git

# Composerのインストール & パス通す
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# nodeインストール(aptだとNodejsは古いため、パッケージマネージャの n を使用してインストール)
RUN apt install -y npm \
    && npm install n -g \
    && n stable

# RUN , CMD , ENTRYPOINT , COPY , ADD を実行する時のワーキングディレクトリを指定
WORKDIR /var/www
