<?php
echo 123;
phpinfo();
// 创建对象

$redis = new Redis();

// 连接redis服务器

$redis -> connect('127.0.0.1',6379);

// 连接数据库

$redis -> select(5); // 使用第6个数据库

// 设置key

$redis -> set('weather','sun');

// 获取key

$redis -> get('weather');

