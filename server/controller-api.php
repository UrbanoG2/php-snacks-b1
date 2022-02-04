<?php 
//inserisco il mio database
include_once __DIR__ . "/db.php";


//lo trasformo in json
header('Content-Type: application/json');
echo json_encode($cars);