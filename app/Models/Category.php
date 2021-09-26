<?php
namespace App\Models;

class Category extends Database
{
    protected $cat_id;
    protected $cat_name;


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
    public function getCatName()
    {
        return $this->cat_name;
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
     * @param mixed $cat_name
     */
    public function setCatName($cat_name)
    {
        $this->cat_name = $cat_name;
    }

    // CRUD OPERATIONS
    public function createCategory(array $data)
    {

    }

    public function getAllCategories()
    {
        $db = $this->connectDb();
        $query = $db->prepare("SELECT * FROM cms_db.categories");
        $query->execute();
        $query = $query->fetchAll();

        return $query;
    }

    public function getCategoryByName(string $data)
    {
        $db = $this->connectDb();
        $query = $db->prepare("SELECT * FROM cms_db.categories WHERE cat_name=:cat_name");
        $query->execute(['cat_name' => $data]);
        $query = $query->fetch();

        return $query;
    }

    public function updateCategory(int $id, array $data)
    {

    }

    public function deleteCategory(int $id)
    {

    }
}