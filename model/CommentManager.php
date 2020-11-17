<?php
class CommentManager extends Maneger
{
	public function getComments($postid, $class)
	{
		$db = $this->dbConnect();

		$req = $db->prepare('SELECT *, DATE_FORMAT(date_comment, "le %d/%m/%y à %Hh%imin%ss") FROM comments WHERE id_chapitre = ?');
		$req->execute([$postid]);
		$datas = $req->fetchAll(PDO::FETCH_CLASS, $class);

		return $datas;
	}

	public function deleteComment($commentid)
	{
		$db = $this->dbConnect();

		$req = $db->prepare('DELETE FROM comments WHERE id = ?');
		$req->execute([$commentid]);
	}

	public function insertComment($id_chapitre, $author, $content)
	{
		$db = $this->dbConnect();

		$req = $db->prepare('INSERT INTO comments (id_chapitre, author, content, date_comment) VALUES (?, ?, ?, NOW())');
		$req->execute([$id_chapitre, $author, $content]);
	}

	public function updateComment($newContent, $idComment)
	{
		$db = $this->dbConnect();

		$req = $db->prepare('UPDATE comments SET content = ?, date_comment = NOW() WHERE id = ?');
		$req->execute([$newContent, $idComment]);
	}
}