<?php
$connection = new mysqli("localhost", 'root', '', 'footbal');

if ($connection->connect_error) {
	die('unable to connection' . $connection->connect_error); // checking database connection // 
}
