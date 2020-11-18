<?php
class PostController
{
	public function number_Post()
	{
		$postmanager = new PostManager();
		
		$result = $postmanager->getNumberPost();
		
		return $result;
	}

	public function getHomePage()
	{
		$postmanager = new PostManager();
		require ('view/home.php');
	}

	public function getSinglePage()
	{
		$postmanager = new PostManager();
		$post = $postmanager->getSinglePost($_GET['idChapter'], 'PostUtility');
		require ('view/single.php');
	}
}