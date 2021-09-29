<?php

namespace App\Controllers;

use App\Models\Category;
use App\Models\Database;
use Symfony\Component\Routing\RouteCollection;

class CategoryController
{
    public function categoryAction(RouteCollection $routes)
    {
        $db = new Database();
        $category = new Category();

        $categories = $category->getAllCategories($db->connectDb());

        if(isset($_POST["catSubmit"])) {
            $category->setCatName($_POST["categoryName"]);
            unset($_POST);
            if($category->getCatName() == "" || empty($category->getCatName())) {
                $showed_alert = "This field should not be empty!";
            } else {
                $cat_create_result = $category->createCategory($category->getCatName(),$db->connectDb());
                $showed_alert = $cat_create_result;
            }
        }

        require_once APP_ROOT . '/views/admin-categories.php';
    }

    public function deleteAction($id, RouteCollection $routes) {

        $db = new Database();
        $category = new Category();
        $categories = $category->getAllCategories($db->connectDb());

        $showed_alert = $category->deleteCategory($id,$db->connectDb());

        require_once APP_ROOT . '/views/admin-categories.php';
    }

    public function updateAction($id, RouteCollection $routes) {

        $db = new Database();
        $category = new Category();
        $categories = $category->getAllCategories($db->connectDb());

        $selected_cat = $category->getCategoryById($id,$db->connectDb());

        if(isset($_POST["catUpdate"]) && isset($selected_cat)) {
            $selected_cat->setCatName($_POST["updatedCategoryInput"]);
            $update_alert = $category->updateCategory($selected_cat,$db->connectDb());
        }

        require_once APP_ROOT . '/views/admin-categories.php';
    }

}