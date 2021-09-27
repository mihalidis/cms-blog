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

    // Homepage action
    public function categoriesAction(RouteCollection $routes)
    {
        require_once APP_ROOT . '/views/admin/categories.php';
    }
}