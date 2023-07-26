<?php
$mysqli = new mysqli('mysql_container', 'root', 'pass123', 'skyland');

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

echo 'Connected successfully to the database!';
$mysqli->close();
?>