<?php
namespace JobSite\Controllers;
class AdminController {

    // Function for presenting the admin home page.
    public function home() {
        return [
            'layout' => 'sidebarlayout.html.php',
            'template' => 'admin/home.html.php',
            'variables' => [],
            'title' => 'Admin Panel - Home'
        ];
    }

    // Function for presenting the access restricted page.
    public function accessRestricted() {
        return [
            'layout' => 'sidebarlayout.html.php',
            'template' => 'admin/restricted.html.php',
            'variables' => [],
            'title' => 'Admin Panel - Access Restricted'
        ];  
    }
}
?>