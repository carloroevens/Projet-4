<?php
require('controller/Autoloader.php');
Autoloader::register();

if (isset($_GET['action'])) 
{
	$action = $_GET['action'];
} else 
{
	$action = 'home';
}

//initialisation des objects
$appController = new AppController();
$postController = new PostController();
$commentController = new CommentController();

try{
	if ($action === 'home') 
	{
		$appController->getHomePage();
	}
	elseif ($action === 'single') 
	{	
		if (isset($_GET['idChapter']) && $_GET['idChapter'] <= $postController->number_Post() && $_GET['idChapter'] > 0) 
		{ 			
			$appController->getSinglePage();
		}
		else
		{
			throw new Exception('Mauvaise identifation de billet envoyé');
		}		
	}
	elseif ($action === 'addcomment') {
		if (isset($_GET['idChapter']) && $_GET['idChapter'] > 0 && $_GET['idChapter'] <= $postController->number_Post()) 
		{
			if (!empty($_POST['author']) && !empty($_POST['content'])) 
			{
				$commentController->addComment($_GET['idChapter'], $_POST['author'], $_POST['content']);
			}
			else
			{
				throw new Exception("Tous les champs ne sont pas remplie !");				
			}
		}
		else
		{
			throw new Exception('Mauvaise identifation de billet envoyé');
		}
	}
	elseif ($action === 'biography') 
	{
		if ($action === 'biography') 
		{
			$appController->getBiography();
		}
		else
		{
		throw new Exception("Cette page n'existe pas");
		}	
	}
	elseif ($action === 'dashboard') 
	{
		if (isset($_POST['email']) && isset($_POST['password'])) 
		{
			$appController->getDashboard($_POST['email'], $_POST['password']);
		}
		else
		{
		throw new Exception("Vous n'avez pas remplie tout les champs");
		}
	}
	
}


catch(Exception $e)
{
	echo "Erreur : " . $e->getMessage();
}