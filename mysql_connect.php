<?php

/* MySQL. */
define('MYSQL_HOST', 'localhost');
define('MYSQL_USER', 'root');
define('MYSQL_PASSWORD', 'eZbbrhMbEfw2RNJY');
define('MYSQL_DB', 'site');

if (!@mysql_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD)) {

    die('無法連線資料庫！');

}

mysql_query('SET NAMES utf8');

if (!@mysql_select_db(MYSQL_DB)) {

    die('無法使用資料庫！');

}
