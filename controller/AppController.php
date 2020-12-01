<?php
class AppController
{
	public function getHomePage()
	{
		$postManager = new PostManager();
		require ('view/home.php');
	}

	public function getSinglePage()
	{
		$postManager = new PostManager();
		$commentManager = new CommentManager();

		$post = $postManager->getSinglePost($_GET['idChapter'], 'PostController');
		require ('view/single.php');
	}

	public function getBiography()
	{
		require ('view/biography.php');
	}

	public function getDashboard($email, $password)
	{
		$adminManager = new AdminManager();

		$log = $adminManager->getLog();
		$hashPassword = sha1($password);

		if ($email === $log['email'] && $hashPassword === $log['password']) 
		{
			require ('view/dashboard.php');
		}
		else
		{
			throw new Exception("Identifiant incorrecte !",);
		}
	}
}