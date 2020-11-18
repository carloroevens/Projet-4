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
$postController = new PostController();
$commentController = new CommentController();

try{
	if ($action === 'home') 
	{
		$postController->getHomePage();
	}
	elseif ($action === 'single') 
	{	
		if (isset($_GET['idChapter']) && $_GET['idChapter'] <= $postController->number_Post() && $_GET['idChapter'] > 0) 
		{ 			
			$postController->getSinglePage();
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
}

catch(Exception $e)
{
	echo "Erreur : " . $e->getMessage();
}