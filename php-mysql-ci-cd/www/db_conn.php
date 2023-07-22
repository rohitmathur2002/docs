<?php

$sname= "localhost";
$unmae= "dbuser";
$password = "$^ryicHb}!M9";

$db_name = "test_db";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}
