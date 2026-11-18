# DENNIE.TOUR(でにツアー)
DENNIE.TOUR(でにツアー)のホームページ<br>

## はじめに
DENNIE.TOUR(でにツアー)のホームページになります。<br>

## 前提
ローカル開発環境は docker、docker compose を利用する事を前提とします。<br>

## ローカル環境の説明
- php: 8.5
- webサーバ: apache2.4

## 環境構築

### リポジトリのクローン
個人と会社でアカウントを使い分けている為、ホスト名が `github.com-personal` となっている。

```sh
git clone git@github.com-personal:dennie-tokyo/dennie_tour.git
```

### 環境の構築

```sh
cd dennie_tour
docker compose up -d --build
```
#### 補足

##### ポート被り
8080 番ポートが使用中の場合は、以下のコマンドでビルドして下さい。<br>

```sh
WEB_PORT=8081 docker compose up -d --build
```

### 確認
ポート番号を変更した場合は適宜変更したポート番号を指定して下さい。<br>

```
http://localhost:8080/
```

## リリース

### リリース資材作成
srcディレクトリ以下のディレクトリ、ファイルを圧縮します。

```sh
tar zcvf dennie_tour.tar.gz dennie_tour/src/
ls -al
```

### リリース資材配置
リリース資材をFTPにてレンタルサーバへ配置します。

### SSHログイン
レンタルサーバへSSHログインします。

### デプロイ
レンタルサーバへ配置したリリース資材を展開します。

```sh
cd dennie.tokyo/public_html
mkdir release
tar -zxvf dennie_tour.tar.gz -C release --strip-components=2
ls -al release
```

### リリース
リリースします。

```sh
mv tour tour_bk
mv release tour
```

### 確認
webページが表示される事を確認して下さい。

```
https://dennie.tokyo/tour
```

### リリース後の掃除
サーバ内を綺麗にします。<br>

```sh
cd dennie.tokyo/public_html
rm -rf tour_bk
```

## その他

### dockerコマンド

```sh
# 状態・ログ
docker compose ps
docker compose logs --tail=50 web

# PHP 構文チェック
docker compose exec -T web sh -c 'find /var/www/html -name "*.php" -exec php -l {} \;'

# 停止・コンテナー削除（ソースは残ります）
docker compose down
```
