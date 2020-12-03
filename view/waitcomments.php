<!DOCTYPE html>
<html>
	<head>

		<title>waitcomments</title>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="public/css/header.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

	</head>
	<body>

		<!--header-->

		<?php require('header.php') ?>

		<!--waiting comments-->

		<div class="container">
			<h1 class="text-center color-yellow m-5">Administration des commentaires</h1>
					<?php foreach ($getWaitingComments = $commentManager->waitComments('0', 'CommentController') as $comment): ?>
					<div class="row">
						<div class="col">
							<div class="card m-3">
								<h5 class="card-header color-yellow">
									<?php echo htmlspecialchars($comment->author) ?>
								</h5>
							  	<div class="card-body">
							    	<p class="card-text"><?php echo htmlspecialchars($comment->content) ?></p>
							    	<div class="text-right">
							    		<a href="#" class="card-link text-success"><i class="fas fa-check"></i></a>
							    		<a href="#" class="card-link text-danger"><i class="fas fa-times"></i></a>
							    	</div>
							  	</div>
							</div>
						</div>
					</div>

					<?php endforeach; ?>
				</div>
			</div>
		</div>

		<!--footer-->

		<?php require('footer.php') ?>

		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

	</body>
</html>