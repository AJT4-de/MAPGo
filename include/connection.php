<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "mapgo";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
	die("failed to connect to data base!");
}
