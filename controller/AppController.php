<?php

session_start();

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

	public function getDashboard()
	{
		require ('view/dashboard.php');
	}

	public function getWaitComments()
	{
		$commentManager = new CommentManager();
		
		require ('view/waitcomments.php');
	}

	public function getWriteChapter()
	{
		require ('view/writechapter.php');
	}

	public function getListModifyChapter()
	{
		$postManager = new PostManager();
		
		require ('view/listmodifychapter.php');
	}

	public function getModifyChapter()
	{
		$postManager = new PostManager();

		$post = $postManager->getSinglePost($_GET['chapterid'], 'PostController');
		require ('view/modifychapter.php');
	}

	public function getChapter()
	{
		$postManager = new PostManager();

		require ('view/chapter.php');
	}

	public function getConnect($email, $password)
	{
		$adminManager = new AdminManager();

		$log = $adminManager->getLog();
		$hashPassword = sha1($password);

		if ($email === $log['email'] && $hashPassword === $log['password']) 
		{
			$_SESSION['email'] = $email;
			$_SESSION['hashpassword'] = $hashPassword;
			$_SESSION['loger'] = 'yes';
			require ('view/dashboard.php');
		}
		else
		{
			throw new Exception("Identifiant incorrecte !",);
		}
	}

	public function disconnect()
	{
		session_destroy();

		header('location: index.php?action=home');
	}
}