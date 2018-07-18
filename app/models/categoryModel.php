<?php

class CategoryModel extends Database
{

    public function create($name, $remark)
    {
        $sql  = "INSERT INTO category (name,remark) VALUES (:name,:remark)";
        $data = ['name' => $name, 'remark' => $remark];
        $this->query($sql, $data);
    }

    public function show($id = '')
    {
        if ($id) {

        $sql  = "SELECT * FROM category WHERE id=:id";
        $data = ['id' => $id];
        $this->query($sql, $data);
        return $this->singleSet();

        }else {

            $sql  = "SELECT * FROM category";
            $this->query($sql);
            return $this->multipleSet();
        }
    }

    public function edit($id, $name, $remark)
    {
        $sql  = "UPDATE category SET name=:name,remark=:remark WHERE id=:id";
        $data = ['name' => $name, 'remark' => $remark, 'id' => $id];
        $this->query($sql, $data);
    }

    public function delete($id)
    {
        $sql  = "DELETE FROM category WHERE id=:id";
        $data = ['id' => $id];
        $this->query($sql, $data);
    }
}
