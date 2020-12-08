<?php
class PostController
{
	public function number_Post()
	{
		$postManager = new PostManager();
		
		$result = $postManager->getNumberPost();
		
		return $result;
	}

	public function getUrl() 
	{
		return 'index.php?action=single&idChapter=' . $this->id;
	}

	public function getContent() 
	{
		return substr($this->content, 0, 300) . '...';
	}

	public function addChapter($title, $content)
	{
		$postManager = new PostManager();

		$postManager->addPost($title, $content);

		header('location: index.php?action=writechapter');
	}

	public function deleteChapter($postId)
	{
		$postManager = new PostManager();

		$postManager->deletePost($postId);

		header('location: index.php?action=listmodifychapter');
	}

	public function updateChapter($title, $content, $id)
	{
		$postManager = new PostManager();

		$postManager->updatePost($title, $content, $id);

		header('location: index.php?action=listmodifychapter');
	}
}