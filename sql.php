<?php

$dbhost='localhost:3306';
$dbuser='root';
$dbpass='1234';
$conn=mysql_connect($dbhost,$dbuser,$dbpass);

if(! $conn)
{
die('could not connect: '.mysql_error());
}
echo'connected successfully';

$sql='create Database test_db';
$retval=mysql_query($sql,$conn);
if(!$retval)
{
    die('could not create database: '.mysql_error());
}
echo " test db created \n";
mysql_close($conn);
?>