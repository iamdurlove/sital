<?php // Rememeber to change the username,password and database name to acutal values
define('DB_HOST', 'localhost');
define('DB_USER', 'necceduc_pos');
define('DB_PASS', '$+8,a[dH1]k1');
define('DB_NAME', 'necceduc_poss');
//Create Connection
$link = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

//Check COnnection
if ($link->connect_error) { //if not Connection
    die('Connection Failed' . $link->connect_error); //kills the Connection OR terminate execution
}
