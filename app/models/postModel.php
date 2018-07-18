<?php

class postModel extends Database
{

    public function create($title, $category_id, $user_id, $content)
    {
        $sql = "INSERT INTO post (title, category_id, user_id, content)
                VALUES (:title, :category_id,:user_id, :content)";
        $data = [
            'title'       => $title,
            'category_id' => $category_id,
            'user_id'     => $user_id,
            'content'     => $content,
        ];
        $this->query($sql, $data);
    }

    public function showSingle($id)
    {

        $sql  = "SELECT * FROM post WHERE id=:id";
        $data = ['id' => $id];
        $this->query($sql, $data);
        return $this->singleSet();
    }

    public function show()
    {
        $sql  = "SELECT * FROM post";
        $this->query($sql);
        return $this->multipleSet();
    }

    public function showByPostId($id)
    {
        $sql  = "SELECT * FROM post WHERE id=:id";
        $data = ['id' => $id];
        $this->query($sql, $data);
        return $this->singleSet();
    }

    public function showByUserId($id)
    {
        $sql  = "SELECT * FROM post WHERE user_id=:id";
        $data = ['id' => $id];
        $this->query($sql, $data);
        return $this->multipleSet();
    }

    public function cat($id)
    {
        $sql  = "SELECT * FROM post WHERE category_id=:id";
        $data = ['id' => $id];
        $this->query($sql, $data);
        return $this->multipleSet();
    }

    public function edit($id, $title, $category_id, $user_id, $content)
    {
        $sql = "UPDATE post SET
            title=:title,category_id=:category_id,user_id=:user_id,content=:content
                WHERE id=:id";
        $data = [
            'title'       => $title,
            'category_id' => $category_id,
            'user_id'     => $user_id,
            'content'     => $content,
            'id'          => $id,
        ];
        $this->query($sql, $data);
    }

    public function delete($id)
    {
        $sql  = "DELETE FROM post WHERE id=:id";
        $data = ['id' => $id];
        $this->query($sql, $data);
    }
}
