
<div class="navbar-color">
	<div class="container">
		<div class="row mb-5 p-2">
			<nav class="col navbar navbar-expand-lg navbar-dark">
				<a class="navbar-brand" href="index.php?action=home">
					Jean Forteroche
				</a>
				<button class="navbar-toggler" type="button" data-toggle='collapse' data-target='#navbarContent'>
					<span class="navbar-toggler-icon"></span>
				</button>
				<div id="navbarContent" class="collapse navbar-collapse">
					<ul class="navbar-nav">
						<?php
						if ($_GET['action'] === 'biography') {
							?>
							<li class="nav-item">
						    	<a class="nav-link" href="index.php?action=home">Accueil</a>
							</li>
						
							<li class="nav-item active">
						    	<a class="nav-link" href="index.php?action=biography">Biographie</a>
							</li>
							<?php
						}else {
							?>
							<li class="nav-item active">
						    	<a class="nav-link" href="index.php?action=home">Accueil</a>
							</li>
						
							<li class="nav-item">
						    	<a class="nav-link" href="index.php?action=biography">Biographie</a>
							</li>
							<?php
						}
						?>
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