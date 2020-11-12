<?php
class PostManager extends Manager
{
	public function getPosts($class)
	{
		$db = $this->dbConnect();

		$req = $db->query('SELECT * FROM chapitres');
		$datas = $req->fetchAll(PDO::FETCH_CLASS, $class);

		return $datas;
	}

	public function getSinglePost($postId, $class)
	{
		$db = $this->dbConnect();

		$req = $db->prepare('SELECT * FROM chapitres WHERE id = ?',);
		$req->execute(array($postId));
		$req->setFetchMode(PDO::FETCH_CLASS, $class);
		$datas = $req->fetch();

		return $datas;
	}

	public function getNumberPost()
	{
		$db = $this->dbConnect();

		$req = $db->query('SELECT COUNT(id) FROM chapitres');

		return $req;
	}
}