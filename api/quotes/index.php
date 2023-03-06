<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
$method = $_SERVER['REQUEST_METHOD'];

$param_passed = isset($_GET['id']) ? $_GET['id'] : null;

if ($method === 'OPTIONS') {
    header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
    header('Access-Control-Allow-Headers: Origin, Accept, Content-Type, X-Requested-With');
    exit();
}

if($method === 'GET'){
    if(isset($param_passed)){
      include_once 'read_single.php';
    }else{
      include_once 'read.php';
    }
}

?>
