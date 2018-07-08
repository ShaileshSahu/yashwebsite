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

$sql='CREATE TABLE employee('.
'emp_name VARCHAR(20) NOT NULL,'.
'emp_address VARCHAR(20) NOT NULL,'.
'emp_salary INT NOT NULL)';


mysql_select_db('test_db');
$retval=mysql_query($sql,$conn);
if(!$retval)
{
    die('could not create table: '.mysql_error());
}
echo " table created \n";
mysql_close($conn);
?>