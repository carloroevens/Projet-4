<?php
class AdminManager extends Manager
{
	public function getLog()
	{
		$db = $this->dbConnect();

		$req = $db->query('SELECT email, password FROM admin');
		$data = $req->fetch();

		return $data;
	}
}