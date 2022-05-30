<?php
$dbhost = 'localhost';
$dbuser = 'root';
$password = '';
$dbname = 'db_form';

$dbconnect = new mysqli($dbhost, $dbuser, $password, $dbname);

if ($dbconnect->connect_error) {
    die('server error');
}
?>