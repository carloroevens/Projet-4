<!DOCTYPE html>
<html>
<head>
	<title>SinglePage</title>
	<meta charset="utf-8">
</head>
	<body>
		<?php $post = $db->getPost($_GET['id']); ?>
		<h1><?= $post->title; ?></h1>
		<p><?= $post->content; ?></p>
	</body>
</html>