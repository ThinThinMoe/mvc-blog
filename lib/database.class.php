<?php 

class Database
{
	private $dbh;
	private $stmt;

	public function __construct()
	{
		$this->dbh = new PDO('mysql:host='.Config::get('db_host').';dbname='.Config::get('db_name'), Config::get('db_user'), Config::get('db_pass'));
	}

	public function query($sql, $data = [])
	{
		$this->stmt = $this->dbh->prepare($sql);
		$this->stmt->execute($data);
		// return $this->stmt;
	}

	public function multipleSet()
	{
		return $this->stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function singleSet()
	{
		return $this->stmt->fetch(PDO::FETCH_OBJ);
	}

	public function rowCont()
    {
        return $this->stmt->rowCount();
    }

    public function lastInsertId()
    {
        return $this->dbh->lastInsertId();
    }
}