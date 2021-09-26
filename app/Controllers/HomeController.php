<?php

namespace App\Controllers;

use App\Models\Category;
use App\Models\Post;
use Symfony\Component\Routing\RouteCollection;

class HomeController
{
    // Homepage action
    public function indexAction(RouteCollection $routes)
    {

        $category = new Category();
        $post = new Post();

        $categories = $category->getAllCategories();

        if (isset($_POST['search'])) {
            $searchedCategory = $category->getCategoryByName($_POST['search']);
            if($searchedCategory) {
                $posts = $post->getPostsByCategoryID($searchedCategory['cat_id']);
            } else {
                $posts = $post->getAllPosts();
            }
        } else {
            $posts = $post->getAllPosts();
        }
        require_once APP_ROOT . '/views/home.php';
    }
}