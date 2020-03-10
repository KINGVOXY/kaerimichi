cloneして、
```
  docker-compose up -d
```


```
docker-compose up -d --build
```
でコンテナ起動

```
docker-compose exec app ash
```

でappコンテナに入る

```
composer create-project --prefer-dist "laravel/laravel=X.X.*" .
// X.Xには自分の入れたいバージョンを書く
```

ganbatta

### gitからcloneしたとき
vendor系のファイルがgitignoreで消えてるから、appコンテナの中で `# composer install`を実行

おめでとう
