<?php
class CommentController
{
	public function addComment($id_chapter, $author, $content)
	{
		$commentManager = new CommentManager();

		$addComment = $commentManager->insertComment($id_chapter, $author, $content);

		if ($result === false) {
			throw new Exception('Imposible d\'ajouter le commentaire');
		}else {
			header('location: index.php?action=single&idChapter=' . $id_chapter);
		}
	}

	public function updateComment($idComment)
	{
		$commentManager = new CommentManager();

		$updateComment = $commentManager->updateComment('1', $idComment);

		header('location: index.php?action=waitcomments');
	}

	public function deleteComment($idComment)
	{
		$commentManager = new CommentManager();

		$deleteComment = $commentManager->deleteComment($idComment);

		header('location: index.php?action=waitcomments');
	}

}