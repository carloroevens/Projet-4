<!DOCTYPE html>
<html>
<head>
	<title>SinglePage</title>
	<meta charset="utf-8">
</head>
	<body>
		<div class="chapter">
			<h1><?= $post->title; ?></h1>
			<p><?= $post->content; ?></p>
			<p><?= $post->date_chapter; ?></p>
		</div>
	</body>
</html>