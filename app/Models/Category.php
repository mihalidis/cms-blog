<?php
namespace App\Models;

class Product
{
    protected $cat_id;
    protected $cat_title;

    // GET METHODS

    /**
     * @return mixed
     */
    public function getCatId()
    {
        return $this->cat_id;
    }

    /**
     * @return mixed
     */
    public function getCatTitle()
    {
        return $this->cat_title;
    }

    // SET METHODS

    /**
     * @param mixed $cat_id
     */
    public function setCatId($cat_id)
    {
        $this->cat_id = $cat_id;
    }

    /**
     * @param mixed $cat_title
     */
    public function setCatTitle($cat_title)
    {
        $this->cat_title = $cat_title;
    }

    // CRUD OPERATIONS
    public function createCategory(array $data)
    {

    }

    public function findCategory(int $id)
    {

    }

    public function updateCategory(int $id, array $data)
    {

    }

    public function deleteCategory(int $id)
    {

    }
}