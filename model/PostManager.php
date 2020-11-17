<?php
class PostManager extends Manager
{
	public function getPosts($class)
	{
		$db = $this->dbConnect();

		$req = $db->query('SELECT *, DATE_FORMAT(date_chapitre, "%d/%m/%y") FROM chapitres');
		$datas = $req->fetchAll(PDO::FETCH_CLASS, $class);

		return $datas;
	}

	public function getSinglePost($postId, $class)
	{
		$db = $this->dbConnect();

		$req = $db->prepare('SELECT *, DATE_FORMAT(date_chapitre, "%d/%m/%y") FROM chapitres WHERE id = ?');
		$req->execute(array($postId));
		$req->setFetchMode(PDO::FETCH_CLASS, $class);
		$datas = $req->fetch();

		return $datas;
	}

	public function getNumberPost()
	{
		$db = $this->dbConnect();

		$req = $db->query('SELECT COUNT(id) FROM chapitres');
		$data = $req->fetch();

		return $data;
	}

	public function deletePost($postId)
	{
		$db = $this->dbConnect();

		$req = $db->prepare('DELETE FROM chapitres WHERE id = ?');
		$req->execute(array($postId));
	}

	public function insertPost($title, $content)
	{
		$db = $this->dbConnect();

		$req = $db->prepare('INSERT INTO chapitres (title, content, date_chapitre) VALUES (?, ?, NOW())');
		$req->execute([$title, $content]);
	}

	public function updatePost($title, $content, $id)
	{
		$db = $this->dbConnect();

		$req = $db->prepare('UPDATE chapitres SET title = ?, content = ?, date_chapitre = NOW() WHERE id = ?');
		$req->execute([$title, $content, $id]);
	}
}