<?php
 require 'JobSite/Controllers/UserController.php';
 $usersTable = new \CSY2028\DatabaseTable($pdo, 'users', 'id', '\JobSite\Entities\User');
 $userController = new \JobSite\Controllers\UserController($usersTable, $_GET, $_POST);

 $result = $userController-> listUsers();
 if($result != null){
    echo 'Test pass';
 }else{
    echo 'Test fail';
 }
?>