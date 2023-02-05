<?php
require 'JobSite/Controllers/JobController.php';
$this->categoriesTable = new \CSY2028\DatabaseTable($pdo, 'category', 'id');
$jobsTable = new \CSY2028\DatabaseTable($pdo, 'job', 'id');
$applicantsTable = new \CSY2028\DatabaseTable($pdo, 'applicants', 'id');
$usersTable = new \CSY2028\DatabaseTable($pdo, 'users', 'id', '\JobSite\Entities\User');
$locationsTable = new \CSY2028\DatabaseTable($pdo, 'locations', 'id');
$jobController = new \JobSite\Controllers\JobController($jobsTable, $applicantsTable, $locationsTable, $this->categoriesTable, $_GET, $_POST, $_FILES);

$result = $jobController-> editJobForm();
if($result != null){
    echo `Test pass`;
}else{
    echo `Test fail`;
}
?>