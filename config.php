<?php

// Always provide a TRAILING SLASH (/) AFTER A PATH
// define('URL', 'http://localhost/glasuvam/');
// define('LOCATION', '/var/www/glasuvam/');


define ('URL', "http://" . $_SERVER['HTTP_HOST'].trim($_SERVER['PHP_SELF'], "index.php"));
define ('LOCATION', realpath(dirname(__FILE__)));
define('LIBS', 'libs/');

define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');
define('DB_NAME', 'mvc');
define('DB_USER', 'root');
define('DB_PASS', '');

// The sitewide hashkey, do not change this because its used for passwords!
// This is for other hash keys... Not sure yet
define('HASH_GENERAL_KEY', 'MixitUp200');

// This is for database passwords only
define('HASH_PASSWORD_KEY', 'catsFLYhigh2000miles');