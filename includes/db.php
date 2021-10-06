<?php
$db['db_host'] = "localhost:3308";
$db['db_user'] = "root";
$db['db_pass'] = "";
$db['db_name'] = "cma";
foreach ($db as $key => $value) {
    define(strtoupper($key),$value);
}

//$connection= mysqli_connect('localhost:3308', 'root', '', 'cma');
//if ($connection) {
//    echo " Connected";
//}
$connection= mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

if ($connection) {
    echo " Connected";
}
