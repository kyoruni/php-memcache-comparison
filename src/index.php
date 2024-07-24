<?php
echo 'PHP version: ' . phpversion() . '<br><br>';

$memcache = new Memcache;
$memcache->connect('memcached', 11211) or die ("Could not connect");

$keys = [
  'stringKey'     => 'hogehoge',
  'stringZeroKey' => '',
  'intKey'        => 12345,
  'intZeroKey'    => 0,
  'boolTrueKey'   => true,
  'boolFalseKey'  => false,
  'arrayKey'      => ['red', 'green', 'blue'],
  'nullKey'       => null
];

// キャッシュをセット
foreach ($keys as $key => $value) {
  $memcache->set($key, $value);
}

// キャッシュを取得して表示
foreach ($keys as $key => $value) {
  $result = $memcache->get($key);
  $type   = gettype($result);

  echo "$key: ";
  var_dump($result);
  echo '<br>';
}

$result = $memcache->get('notExistKey');
echo 'notExistKey: ';
var_dump($result);
echo '<br>';