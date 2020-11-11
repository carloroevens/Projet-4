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

	public function getPost($postId, $class)
	{
		$db = $this->dbConnect();

		$req = $db->prepare('SELECT * FROM chapitres WHERE id = ?',);
		$req->execute(array($postId));
		$req->setFetchMode(PDO::FETCH_CLASS, $class);
		$datas = $req->fetch();

		return $datas;
	}
}