<?php 
$hostname = "localhost";
$username = "admin";
$password = "admin";
$database = "prueba_db";

$QUERY = 'SELECT * from routes';

$cnx = mysqli_connect($hostname, $username, $password, $database);

$result = mysqli_query($cnx, $QUERY);

?>