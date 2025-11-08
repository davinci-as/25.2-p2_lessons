<?php
include_once("../../utils/connection.php");

$query = "SELECT * FROM `topics`";
$topic_results = mysqli_query($cnx, $query);

$topics = [];

while($topic = mysqli_fetch_assoc($topic_results)) {
    array_push($topics, $topic);
}

header("Content-Type: application/json");
echo json_encode($topics);