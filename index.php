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
$db = new PostManager();

try{
	if ($action === 'home') {
		require ('view/home.php');
	}
	elseif ($action === 'single') 
	{
		if (isset($_GET['id']) && $_GET['id'] > 0) 
		{
			require ('view/single.php');
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