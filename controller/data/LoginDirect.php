<?php 
require_once __DIR__ . '\\..\\..\\Autoloader.php';

$username = $_POST['username'];
$password = $_POST['password'];

$service = new UserBusinessService();

#Verifies the Authentication made from UserBusinessService
if($service->authenticate($username,$password) == -1){
    header('Location: /GCU-CLC-CloudApp');
}
else{
    header('Location: /GCU-CLC-CloudApp/views/dashboard.php');
}
?>