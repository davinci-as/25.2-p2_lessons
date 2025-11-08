<?php
require_once("../../utils/connection.php");
require_once("../../utils/postData.php");

header(header: 'Content-Type: application/json');
echo json_encode($fullPosts);