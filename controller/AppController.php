<?php
class AppController
{
	public function getHomePage()
	{
		$postmanager = new PostManager();
		require ('view/home.php');
	}

	public function getSinglePage()
	{
		$postmanager = new PostManager();
		$commentManager = new CommentManager();

		$post = $postmanager->getSinglePost($_GET['idChapter'], 'PostController');
		require ('view/single.php');
	}

	public function getBiography()
	{
		require ('view/biography.php');
	}
}