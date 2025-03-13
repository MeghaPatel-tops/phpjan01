<?php
ob_start();
include('Model/Model.php');
include('Controller/Contoller.php');

$objController = new Controller();

$UriSegment = $_SERVER['REQUEST_URI'];

$arrayURI= explode("/",$UriSegment);

$path = $arrayURI[3];

//$objController->index();

if(isset($path) && $path ==""){
    $objController->index();
}
else if(isset($path) && $path =="about"){
    $objController->about();
}
else if(isset($path) && $path =="home"){
    $objController->home();
}
else if(isset($path) && $path =="categoryadd"){
    $objController->catadd();
}
else if(isset($path)&&$path =="viewcategory"){
    $objController->viewcategory();
}
else if(isset($path)&&$path =="productindex"){
    $objController->productindex();
}
else if(isset($path)&&$path =="productadd"){
    $objController->productcreate();
}

?>