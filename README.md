# 準備
## Ruby on Rails の準備
### bundle install
```
docker-compose run --rm rails bundle exec rails new . --rails -d mysql
```
▼下記の表記がきたら、Gemfileを上書きするため「y」を入力

**Overwrite /app/Gemfile? (enter "h" for help) [Ynaqdhm] y**

▼Rails Webpackでひっかかるため
```
docker-compose run --rm rails rails webpacker:install
```

my-docker/rails/config/database.ymlを修正
my-docker/docker-compose.ymlのサービス「db」を参照して再度設定。

## Next.jsの準備 
```
docker-compose run --rm front yarn create next-app . 
```

# 実行
```
docker-compose up --build
```