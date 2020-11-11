<!DOCTYPE html>
<html>
	<head>
		<title>homepage</title>
		<meta charset="utf-8">
	</head>
	<body>
		<?php foreach ($db->getPosts('PostUtility') as $posts): ?>
			
			<div>
				<h1><a href="<?= $posts->getUrl() ?>"><?= $posts->title; ?></a></h1>

				<?= $posts->getContent(); ?>
			</div>

		<?php endforeach; ?>
	</body>
</html>