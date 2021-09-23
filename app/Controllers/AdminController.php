<?php

namespace App\Controllers;

use Symfony\Component\Routing\RouteCollection;

class AdminController
{
    // Homepage action
    public function indexAction(RouteCollection $routes)
    {
        require_once APP_ROOT . '/views/admin.php';
    }
}