<!DOCTYPE html>
<html>
	<head>

		<title>SinglePage</title>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

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

		<!--list of comment-->
		<div>
			<?php foreach ($getCommentList = $commentManager->getComments($_GET['idChapter'], 'CommentController') as $comment): ?>
			
			<div>
				<p><strong><?php echo htmlspecialchars($comment->author) ?></strong>  <?= $comment->date_comment ?></p>
				<p><?php echo htmlspecialchars($comment->content) ?></p>
			</div>

		<?php endforeach; ?>
		</div>

		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

	</body>
</html>