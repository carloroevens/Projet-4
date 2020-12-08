<!DOCTYPE html>
<html>
	<head>

		<title>writechapter</title>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="public/css/header.css">

		<script src="https://cdn.tiny.cloud/1/8sg6g6d7h7af4rkmvz2wxtdm50bury1n20n218gmmx6hss36/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
		<script src="public/js/tinymce.js"></script>
		
	</head>
	<body>

		<!--header-->

		<?php require('header.php') ?>

		<!--waiting comments-->

		<div class="container">
			<div class="row m-5">
				<div class="col">
					<h1 class="text-center color-yellow">Nouveaux chapitre</h1>
					<form method="post" action="index.php?action=addchapter">
						<div class="form-group">
							<label class="h4" for="namechapter">Nom du chapitre</label>
							<input class="form-control w-50" type="text" id="namechapter" name="title"></input>
						</div>
						<textarea name="content"></textarea>
						<div class="text-right my-4">
							<button class="btn btn-primary" type="submit">Enregistrer</button>
						</div>
					</form>
				</div>
			</div>
		</div>

		<!--footer-->

		<?php require('footer.php') ?>

		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

	</body>
</html>