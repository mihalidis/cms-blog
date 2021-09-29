<?php
namespace App\Models;

class Category
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
    public function createCategory(string $data,object $db)
    {
        $this->cat_name = $data;

        $query = $db->prepare("INSERT INTO cms_db.categories SET cat_name = :cat_name");
        $insert = $query->execute(["cat_name" => $this->cat_name]);
        if ( $insert ){
            return "category created successfully!";
        } else {
            return "category can't created right now, please try again!";
        }
    }

    public function getAllCategories(object $db)
    {
        $query = $db->prepare("SELECT * FROM cms_db.categories");
        $query->execute();
        $query = $query->fetchAll();

        return $query;
    }

    public function getCategoryByName(string $data,object $db)
    {
        $query = $db->prepare("SELECT * FROM cms_db.categories WHERE cat_name=:cat_name");
        $query->execute(['cat_name' => $data]);
        $query = $query->fetch();

        return $query;
    }

    public function getCategoryById(int $id,object $db)
    {
        $query = $db->prepare("SELECT * FROM cms_db.categories WHERE cat_id=:cat_id");
        $query->execute(['cat_id' => $id]);
        $query = $query->fetch();

        $this->cat_id = $query["cat_id"];
        $this->cat_name = $query["cat_name"];

        return $this;
    }

    public function updateCategory(object $data, object $db)
    {
        $query = $db->prepare("UPDATE cms_db.categories SET cat_name = :cat_name WHERE cat_id = :cat_id");
        $update = $query->execute(['cat_name' => $data->getCatName(), 'cat_id' => $data->getCatId()]);
        if ($update) {
            return "Update successfull!!";
        } else {
            return "Update failed!!";
        }
    }

    public function deleteCategory(int $id,object $db)
    {
        $query = $db->prepare("DELETE FROM cms_db.categories WHERE cat_id = :cat_id");
        $delete = $query->execute(['cat_id' => $id]);
        if ($delete) {
            return "Category deleted!!";
        } else {
            return "Can't delete..try again..!!";
        }
    }
}