


## rails の準備
### bundle install
```
docker-compose run --rm rails bundle exec rails new . --rails -d mysql
```
▼下記の表記がきたら、Gemfileを上書きするため「y」を入力
```
Overwrite /app/Gemfile? (enter "h" for help) [Ynaqdhm] y
```
▼Rails Webpackでひっかかるため
```
docker-compose run --rm rails rails webpacker:install
```
▼docker-compose.ymlを修正後
```
docker-compose up --build
```

## Next.jsの準備 
```
docker-compose run --rm front yarn create next-app . 
```