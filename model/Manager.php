<?php
class Manager
{
	private $db;

	public function dbConnect() 
	{
		if ($this->db === null)
		{
			$db = new PDO('mysql:host=localhost;dbname=projet4;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
			$this->db = $db;
			return $this->db;
		}
		else
		{
			return $this->db;
		}
	}
}