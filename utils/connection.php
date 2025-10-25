<?php 
$hostname = "localhost";
$username = "admin";
$password = "admin";
$database = "prueba_db";

$QUERY = 'SELECT * FROM routes';

$cnx = mysqli_connect($hostname, $username, $password, $database);

$result = mysqli_query($cnx, $QUERY);

$fullRoutes = [];

while($value = mysqli_fetch_assoc($result)) {
    //TODO: reglas de filtro y validación
    if($value["enable"] == 1) {
        array_push($fullRoutes, $value);
    }
}


//var_dump($routes);

//$cnx->close();

?>