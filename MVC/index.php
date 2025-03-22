<?php
ob_start();
session_start();
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
include('Model/Model.php');
include('Controller/Contoller.php');
include('Controller/UserController.php');



$userObj= new UserController();

$objController = new Controller();

$UriSegment = $_SERVER['REQUEST_URI'];

$arrayURI= explode("/",$UriSegment);

$path = $arrayURI[3];
$query= (isset($arrayURI[4]))?$arrayURI[4]:0;

$GLOBALS['baseUrl'] = "http://localhost/jaN01PHP/MVC";

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
else if(isset($path)&&$path =="deleteproduct"){
    $objController->deleteproduct($query);
}

else if(isset($path)&&$path =="editproduct"){
    $objController->editproduct($query);
}

else if(isset($path)&&$path =="user"){
    $userObj->userhome();
}
else if(isset($path) && $path =="registration"){
    $userObj->Registration();
}
else if(isset($path) && $path =="login"){
    $userObj->Login();
}

else if(isset($path) && $path =="logout"){
    $userObj->Logout();
}

else if(isset($path) && $path =="apiproduct"){
    $objController->apiproduct();
}

?>