<?php 
$hostname = "localhost";
$username = "admin";
$password = "admin";
$database = "prueba_db";

$QUERY = 'SELECT * FROM post';

$cnx = mysqli_connect($hostname, $username, $password, $database);

$result = mysqli_query($cnx, $QUERY);

$fullPosts = [];

while($value = mysqli_fetch_assoc($result)) {
    array_push($fullPosts, $value);
}


//var_dump($fullPosts[0]);

//$cnx->close();

?>