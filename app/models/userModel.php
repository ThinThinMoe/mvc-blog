<?php

class UserModel extends Database
{
    public function userCreate($name,$email, $pass)
    {
        $sql  = "INSERT INTO user (name,email,password) VALUES (:name,:email,:password)";
        $data = ['name' => $name,'email'=>$email,'password' => $pass];
        $this->query($sql, $data);
    }

    public function show($id = '')
    {
        if ($id) {

            $sql  = "SELECT * FROM user WHERE id=:id";
            $data = ['id'=>$id];
            $this->query($sql,$data);
            return $this->singleSet();

        } else {

            $sql  = "SELECT * FROM user";
            $this->query($sql);
            return $this->multipleSet();
        }
    }

    public function getByName($name)
    {
    	$sql  = "SELECT * FROM user WHERE name = :name";
    	$data = ['name'=>$name];
        $this->query($sql,$data);
        return $this->singleSet();
    }

    public function getByEmail($email)
    {
        $sql  = "SELECT * FROM user WHERE email = :email";
        $data = ['email'=>$email];
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
