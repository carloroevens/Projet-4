<?php
class CommentManager extends Manager
{
	public function getComments($postid, $status, $class)
	{
		$db = $this->dbConnect();

		$req = $db->prepare('SELECT *, DATE_FORMAT(date_comment, "le %d/%m/%y à %Hh%imin%ss") AS date_comment FROM comments WHERE id_chapter = ? AND status = ?');
		$req->execute([$postid, $status]);
		$datas = $req->fetchAll(PDO::FETCH_CLASS, $class);

		return $datas;
	}

	public function waitComments($status, $class)
	{
		$db = $this->dbConnect();

		$req = $db->prepare('SELECT author, content FROM comments WHERE status = ?');
		$req->execute([$status]);
		$datas = $req->fetchAll(PDO::FETCH_CLASS, $class);

		return $datas;
	}

	public function deleteComment($commentid)
	{
		$db = $this->dbConnect();

		$req = $db->prepare('DELETE FROM comments WHERE id = ?');
		$req->execute([$commentid]);
	}

	public function insertComment($id_chapter, $author, $content)
	{
		$db = $this->dbConnect();

		$req = $db->prepare('INSERT INTO comments (id_chapter, status, author, content, date_comment) VALUES (?, 0, ?, ?, NOW())');
		$result = $req->execute([$id_chapter, $author, $content]);

		return $result;
	}

	public function updateComment($newContent, $idComment)
	{
		$db = $this->dbConnect();

		$req = $db->prepare('UPDATE comments SET content = ?, date_comment = NOW() WHERE id = ?');
		$req->execute([$newContent, $idComment]);
	}
}