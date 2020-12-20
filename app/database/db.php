<?php
///Code Database...
///Make Array For All Data to Database With PHP...
$db['db_host'] = 'localhost';
$db['db_user'] = 'root';
$db['db_pass'] = '';
$db['db_name'] = 'e_shop';

//Loop Throw Here and make Const (Global Variable)...
foreach ($db as $key => $value) {
    define(strtoupper($key), $value, false);
}

///Connecting the Database...
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

//checking the connection here..
if (!$connection) {
    die("ERROR! when try to connecting with Database " . mysqli_error($connection));
}
