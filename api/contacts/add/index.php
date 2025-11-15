<?php
include_once("../../../utils/connection.php");
if(isset($_GET["email"]) && isset($_GET["message"]) && $_GET["message"] != "" && $_GET["email"] != "") {
    $email = $_GET["email"];
    $message = $_GET["message"];
    $QUERY = "INSERT INTO `contacts` (`id_contact`, `email`, `message`) VALUES (NULL, '$email', '$message')";
    mysqli_query($cnx, $QUERY);
    header("Location: /25.2-p2_lessons/?page=contact&message=mensaje enviado");
} else {
    header("Location: /25.2-p2_lessons/?page=contact&error=campo inválido");
}
