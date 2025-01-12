<?php

define("BASEURL", "http://localhost/labuantimes/public");
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "labuantimes");

$route['(:any)/detail/(:num)'] = 'blog/detail/$1/$2';


