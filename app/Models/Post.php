<?php
namespace App\Models;

class Post
{
    protected $post_id;
    protected $post_category_id;
    protected $post_tags;
    protected $post_comment_count;
    protected $post_status;
    protected $post_title;
    protected $post_author;
    protected $post_date;
    protected $post_image;
    protected $post_content;

    // GET METHODS

    /**
     * @return mixed
     */
    public function getPostId()
    {
        return $this->post_id;
    }

    /**
     * @return mixed
     */
    public function getPostCategoryId()
    {
        return $this->post_category_id;
    }

    /**
     * @return mixed
     */
    public function getPostAuthor()
    {
        return $this->post_author;
    }

    /**
     * @return mixed
     */
    public function getPostCommentCount()
    {
        return $this->post_comment_count;
    }

    /**
     * @return mixed
     */
    public function getPostContent()
    {
        return $this->post_content;
    }

    /**
     * @return mixed
     */
    public function getPostDate()
    {
        return $this->post_date;
    }

    /**
     * @return mixed
     */
    public function getPostImage()
    {
        return $this->post_image;
    }

    /**
     * @return mixed
     */
    public function getPostStatus()
    {
        return $this->post_status;
    }

    /**
     * @return mixed
     */
    public function getPostTags()
    {
        return $this->post_tags;
    }

    /**
     * @return mixed
     */
    public function getPostTitle()
    {
        return $this->post_title;
    }
    // SET METHODS

    /**
     * @param mixed $post_author
     */
    public function setPostAuthor($post_author): void
    {
        $this->post_author = $post_author;
    }

    /**
     * @param mixed $post_category_id
     */
    public function setPostCategoryId($post_category_id): void
    {
        $this->post_category_id = $post_category_id;
    }

    /**
     * @param mixed $post_comment_count
     */
    public function setPostCommentCount($post_comment_count): void
    {
        $this->post_comment_count = $post_comment_count;
    }

    /**
     * @param mixed $post_content
     */
    public function setPostContent($post_content): void
    {
        $this->post_content = $post_content;
    }

    /**
     * @param mixed $post_date
     */
    public function setPostDate($post_date): void
    {
        $this->post_date = $post_date;
    }

    /**
     * @param mixed $post_id
     */
    public function setPostId($post_id): void
    {
        $this->post_id = $post_id;
    }

    /**
     * @param mixed $post_image
     */
    public function setPostImage($post_image): void
    {
        $this->post_image = $post_image;
    }

    /**
     * @param mixed $post_status
     */
    public function setPostStatus($post_status): void
    {
        $this->post_status = $post_status;
    }

    /**
     * @param mixed $post_tags
     */
    public function setPostTags($post_tags): void
    {
        $this->post_tags = $post_tags;
    }

    /**
     * @param mixed $post_title
     */
    public function setPostTitle($post_title): void
    {
        $this->post_title = $post_title;
    }

    // CRUD OPERATIONS
    public function createPost(array $data,object $db)
    {

    }

    public function getAllPosts(object $db)
    {
        $query = $db->prepare("SELECT * FROM cms_db.posts");
        $query->execute();
        $query = $query->fetchAll();

        return $query;

    }

    public function getPostsByCategoryID(int $catID,object $db)
    {
        $query = $db->prepare("SELECT * FROM cms_db.posts WHERE post_category_id=:category_id");
        $query->execute(["category_id" => $catID]);
        $query = $query->fetchAll();

        return $query;

    }

    public function updatePost(int $id, array $data,object $db)
    {

    }

    public function deletePost(int $id,object $db)
    {

    }
}