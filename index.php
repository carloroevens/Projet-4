<?php
if (isset($_GET['action'])) {
	$action = $_GET['action'];
} else {
	$action = 'home';
}

if ($action === 'home') {
	require ('view/home.php');
}