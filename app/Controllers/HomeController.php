<?php

namespace App\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Database;
use Symfony\Component\Routing\RouteCollection;

class HomeController
{
    // Homepage action
    public function homeAction(RouteCollection $routes)
    {
        $db = new Database();
        $category = new Category();
        $post = new Post();

        $categories = $category->getAllCategories($db->connectDb());

        if (isset($_POST['search'])) {
            $searchedCategory = $category->getCategoryByName($_POST['search'],$db->connectDb());
            if($searchedCategory) {
                $posts = $post->getPostsByCategoryID($searchedCategory['cat_id'],$db->connectDb());
            } else {
                $posts = $post->getAllPosts($db->connectDb());
            }
        } else {
            $posts = $post->getAllPosts($db->connectDb());
        }
        require_once APP_ROOT . '/views/home.php';
    }
}