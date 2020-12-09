<!DOCTYPE html>
<html>
	<head>

		<title>modifychapter</title>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="public/css/header.css">
		
	</head>
	<body>

		<!--header-->

		<?php require('header.php') ?>

		<!--list of chapter-->

		<div class="container mt-5">
			<div class="row">
				<div class="col">
					<h1 class="display-3 color-yellow text-center mb-5">Modifier et suprimer les chapitres</h1>
				</div>
			</div>
			<div class="row">
				<?php foreach ($postManager->getPosts('PostController') as $posts): ?>
				
					<div class="col-12 col-md-6">
						<div class="card shadow mb-5 mb-md-4">
							<div class="card-body">
								<h5 class="card-title text-center"><a class=" text-decoration-none card-title" href="<?= $posts->getUrl() ?>"><?= $posts->title; ?></a></h5>
							    <h6 class="card-subtitle mb-2 text-muted">Chapitre n°<?= $posts->id; ?></h6>
							    <p class="card-text"><?= $posts->getContent(); ?></p>
							    <div class="text-right">
							    	<button class="btn btn-info">
							    		<a class="text-decoration-none text-dark" href="index.php?action=modifychapter&amp;chapterid=<?= $posts->id; ?>">Modifier</a>
							    	</button>
							    	<button class="btn btn-danger">
							    		<a class="text-decoration-none text-dark" href="index.php?action=deletechapter&amp;chapterid=<?= $posts->id; ?>">Suprimer</a>
							    	</button>
							    </div>
							</div>
						</div>
					</div>
				
				<?php endforeach; ?>
			</div>
		</div>

		<!--footer-->

		<?php require('footer.php') ?>

		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

	</body>
</html>