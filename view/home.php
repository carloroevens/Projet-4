<!DOCTYPE html>
<html>
	<head>

		<title>homepage</title>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="public/css/header.css">

	</head>
	<body>
		<div class="navbar-color">
			<div class="container">
				<div class="row mb-5 p-3">
					<nav class="col navbar navbar-expand-lg navbar-dark">
						<a class="navbar-brand" href="#">
							Jean Forteroche
						</a>
						<button class="navbar-toggler" type="button" data-toggle='collapse' data-target='#navbarContent'>
				        	<span class="navbar-toggler-icon"></span>
				        </button>
				        <div id="navbarContent" class="collapse navbar-collapse">
				        	<ul class="navbar-nav">
					        	<li class="nav-item active">
					        		<a class="nav-link" href="#">Accueil</a>
					        	</li>
					        	<li class="nav-item">
					        		<a class="nav-link" href="#">Biographie</a>
					        	</li>
					        </ul>
					        <ul class="navbar-nav ml-md-auto">
					        	<li class="nav-item active">
					        		<a class="nav-link" href="#">S'inscrire</a>
					        	</li>
					        	<li class="nav-item active">
					        		<a class="nav-link" href="#">Connexion</a>
					        	</li>
					        </ul>
					    </div>			 
					</nav>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col">
					<div class="jumbotron d-flex flex-row">
					<p>Bienvenus sur mon site ! Je suis Jean Rochefort écrivain et acteur mais nous s'en parleront juste aprés, laisser moi d'abord vous présentais le concept de ce site, qui ma foie est assez simple. </p>
				
			
					<p>J'ai décider de sortir mon prochain livre sur le web plutôt que de facons traditionnelle, il devrais donc il y avoir 3 chapitres a l'ouverture de ce site et étre agrémenter d'un autre chaque semaine jusqu'a sa publication complete</p>
								
					<p>Ceci me permettra d'avoir votre ressentie directement aprés votre lecture grace aux commentaire. N'hésitez pas à lire le synopsis.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<h1>biographie</h1>
					<img src="public/img/portrait.jpg" class="rounded float-left" alt="portrait de Jean Forteroche">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eleifend mattis semper. Praesent quis turpis vitae urna vehicula convallis eu dapibus risus. Etiam tincidunt mauris ut felis malesuada, eget dictum odio faucibus. Mauris dignissim lacus eu venenatis tempus. Fusce sit amet venenatis elit. Fusce semper tortor eget lobortis faucibus. Mauris ut consectetur dui. Cras quis lectus ex. Sed suscipit commodo eros at commodo. Etiam pharetra pulvinar lacus eget tincidunt. Donec interdum neque elit, et efficitur libero rhoncus eu. Cras malesuada elit elementum, vehicula augue at, elementum sem. Fusce faucibus, sapien eget porttitor ultricies, lectus enim rutrum justo, vitae pellentesque justo sapien ut nunc. Phasellus faucibus sapien eu ante maximus, quis fringilla felis tempus.</p>
				</div>
			</div>
			<?php foreach ($postmanager->getPosts('PostController') as $posts): ?>
			
			<div class="row">
				<div class="col">
					<h1><a href="<?= $posts->getUrl() ?>"><?= $posts->title; ?></a></h1>

					<?= $posts->getContent(); ?>
					<p><?= $posts->date_chapter; ?></p>
				</div>
			</div>

			<?php endforeach; ?>
		</div>

		<div class="container">
			<div class="row">
				<div class="col">
					
				</div>
			</div>
		</div>
		

		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

	</body>
</html>