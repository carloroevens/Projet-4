<!DOCTYPE html>
<html>
	<head>
		<title>homepage</title>
		<meta charset="utf-8">
	</head>
	<body>
		<?php foreach ($postmanager->getPosts('PostController') as $posts): ?>
			
			<div>
				<h1><a href="<?= $posts->getUrl() ?>"><?= $posts->title; ?></a></h1>

				<?= $posts->getContent(); ?>
				<p><?= $posts->date_chapter; ?></p>
			</div>

		<?php endforeach; ?>
	</body>
</html>