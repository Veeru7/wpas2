<?php

require 'JobSite/Controllers/CategoryController.php';
$this->categoriesTable = new \CSY2028\DatabaseTable($pdo, 'category', 'id');
$categoryController = new \JobSite\Controllers\CategoryController($this->categoriesTable, $_GET, $_POST);

$result = $categoryController-> listCategories();
if($result != null){
    echo `Test passed`;
}else{
    echo `Test fail`;
}

?>