<!DOCTYPE html>
<html>
	<head>
		<title>homepage</title>
		<meta charset="utf-8">
	</head>
	<body>
		<?php foreach ($db->getPosts() as $post): ?>
			
			<div>
				<h1><a href="index.php?action=single&id=<?php echo $post->id; ?>" ><?= $post->title; ?></a></h1>

				<p><?= $post->content; ?></p>
			</div>

		<?php endforeach; ?>
	</body>
</html>