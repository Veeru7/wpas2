<?php
require 'JobSite/Controllers/AdminController.php';

$adminController = new \JobSite\Controllers\AdminController();

//With this array, the function should return one error:
$result = $adminController -> home();
if (count($result) == 1) {
 echo 'Test passed';
}
else {
 echo 'Test failed';
}
?>