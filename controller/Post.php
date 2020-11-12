<?php
class Post 
{
	public function number_Post()
	{
		$postmanager = new PostManager();
		return getNumberPost();
	}

	public function getHomePage()
	{
		$postmanager = new PostManager();
		require ('view/home.php');
	}

	public function getSinglePage()
	{
		$postmanager = new PostManager();
		$post = $postmanager->getSinglePost($_GET['id'], 'PostUtility');
		require ('view/single.php');
	}
}