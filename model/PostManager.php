<?php
class PostManager extends Manager
{
	public function getPosts()
	{
		$db = $this->dbConnect();

		$req = $db->query('SELECT * FROM chapitres');
		$datas = $req->fetchAll(PDO::FETCH_OBJ);

		return $datas;
	}

	public function getPost($postId)
	{
		$db = $this->dbConnect();

		$req = $db->prepare('SELECT * FROM chapitres WHERE id = ?',);
		$req->execute(array($postId));
		$req->setFetchMode(PDO::FETCH_OBJ);
		$datas = $req->fetch();

		return $datas;
	}
}