<?php
 require 'JobSite/Controllers/JobSiteController.php';

 $jobsTable = new \CSY2028\DatabaseTable($pdo, 'job', 'id');
 $jobSiteController = new \JobSite\Controllers\JobSiteController($jobsTable);

 $result = $jobSiteController-> faq();
 if($result != null){
    echo 'Test pass';
 }else{
    echo 'Test fail';
 }
 
?>