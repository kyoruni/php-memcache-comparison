# kyoruni/php-memcache-comparison

PHP Memcache クラスの動作差分確認用

## 使い方
### （1） 立ち上げ

```bash
docker compose up -d
```

### （2） 動作確認
- 以下にアクセス
- PHP8.0： `http://localhost:8080/`
- PHP7.4： `http://localhost:8074/`

---

### （3） 結果
#### PHP7.4

```
PHP version: 7.4.33

stringKey: string(8) "hogehoge"
stringZeroKey: string(0) ""
intKey: int(12345)
intZeroKey: int(0)
boolTrueKey: bool(true)
boolFalseKey: bool(false)
arrayKey: array(3) { [0]=> string(3) "red" [1]=> string(5) "green" [2]=> string(4) "blue" }
nullKey: NULL
notExistKey: bool(false)
```

#### PHP8.0

```
PHP version: 8.0.30

stringKey: string(8) "hogehoge"
stringZeroKey: string(0) ""
intKey: int(12345)
intZeroKey: int(0)
boolTrueKey: bool(true)
boolFalseKey: bool(false)
arrayKey: array(3) { [0]=> string(3) "red" [1]=> string(5) "green" [2]=> string(4) "blue" }
nullKey: bool(false)
notExistKey: bool(false)
```

`null` -> `false` で返ってくるようになった