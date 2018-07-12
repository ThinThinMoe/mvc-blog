<?php

class UserModel extends Database
{
    public function userCreate($name, $pass)
    {
        $sql  = "INSERT INTO users (name,password) VALUES (:name,:password)";
        $data = ['name' => $name, 'password' => $pass];
        $this->query($sql, $data);
    }

    public function show()
    {
        $sql  = "SELECT * FROM users";
        $this->query($sql);
        return $this->multipleSet();
    }

    public function getByName($name)
    {
    	$sql  = "SELECT * FROM users WHERE name = :name";
    	$data = ['name'=>$name];
        $this->query($sql,$data);
        return $this->singleSet();
    }

    public function edit()
    {

    }

    public function delete()
    {

    }
}
