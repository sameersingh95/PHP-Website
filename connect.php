<?php
ob_start();
$DB_HOST='localhost';
$DB_USER='root';
$DB_PASSWORD='';
$DB_NAME='tutorials';
if(!@$conn = mysqli_connect($DB_HOST,$DB_USER,$DB_PASSWORD,$DB_NAME))
{
    die('Could not connect to the database');
}
?>