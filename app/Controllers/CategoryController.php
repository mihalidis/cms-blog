<?php

namespace App\Controllers;

use App\Models\Category;
use Symfony\Component\Routing\RouteCollection;

class CategoryController
{
    // Show the product attributes based on the id.
    public function showAction(RouteCollection $routes)
    {
        require_once APP_ROOT . '/views/post.php';
    }
}