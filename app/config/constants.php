<?php
// nimi
define('PROJECT_NAME', 'Blog');
// root url
define('URLROOT', 'http://'.$_SERVER['HTTP_HOST'].'/'.PROJECT_NAME);
// root
define('APPROOT', dirname(dirname(__FILE__)));

// params
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'blog');

define('PASSWORD_LEN', 4);