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
$post = new Post();

try{
	if ($action === 'home') 
	{
		$post->getHomePage();
	}
	elseif ($action === 'single') 
	{
		if (isset($_GET['id']) && $_GET['id'] > 0) 
		{
			$post->getSinglePage();
		}
		else if ($_GET['id'] > $post->number_Post())
		{
			throw new Exception('Mauvaise identifation de billet envoyé');
		}
	}
}
catch(Exception $e)
{
	echo "Erreur : " . $e->getMessage();
}