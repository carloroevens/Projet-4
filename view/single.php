<!DOCTYPE html>
<html>
<head>
	<title>SinglePage</title>
	<meta charset="utf-8">
</head>
	<body>
		<!--chapter-->
		<div>
			<h1><?= $post->title; ?></h1>
			<p><?= $post->content; ?></p>
			<p><?= $post->date_chapter; ?></p>
		</div>

		<!--write comment-->
		<div>
			<form action="index.php?action=addcomment&amp;idChapter=<?= $post->id ?>" method="post">
				<div>
					<label for="author">Auteur</label><br/>
					<input type="text" id="author" name="author" />
				</div>
				<div>
					<label for="content">Commentaire</label><br/>
					<textarea id="content" name="content"></textarea>
				</div>
				<div>
					<input type="submit">
				</div>
			</form>
		</div>
	</body>
</html>