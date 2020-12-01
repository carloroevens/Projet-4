<div class="color-blue">
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
						if (isset($_GET['action']) && $_GET['action'] === 'biography') {
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
							<a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModal">Connexion</a>
							<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
							  	<div class="modal-dialog">
							    	<div class="modal-content">
							      		<div class="modal-header">
							        		<h5 class="modal-title" id="exampleModalLabel">Connection</h5>
							        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          		<span aria-hidden="true">&times;</span>
							        	</button>
							      		</div>
							      		<form method="post" action="index.php?action=dashboard">
								      		<div class="modal-body">
								        		<div class="form-group">
													<label for="idMail">Adresse mail</label>
													<input type="email" class="form-control" id="idMail" name="email">
												</div>
												<div class="form-group">
													<label for="idPassword">Mot de passe</label>
													<input type="password" class="form-control" id="idPassword" name="password">
												</div>							        
								    		</div>
								      		<div class="modal-footer">
								        		<button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
								        		<button type="submit" class="btn btn-primary">Se connecter</button>
								      		</div>
								      	</form>
							    	</div>
							  	</div>
							</div>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
</div>