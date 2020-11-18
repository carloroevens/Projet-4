<?php
class CommentController
{
	public function addComment($id_chapter, $author, $content)
	{
		$commentManager = new CommentManager();

		$addComment = $commentController->insertComment($id_chapter, $author, $content);

		if ($result === false) {
			throw new Exception('Imposible d\'ajouter le commentaire');
		}else {
			header('location: index.php?action=single&id=' . $id_chapter);
		}
	}
}