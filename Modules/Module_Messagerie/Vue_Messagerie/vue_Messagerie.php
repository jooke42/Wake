<?php

	class VueMessagerie {
		
		function __construct($module) {}
		
		function afficherListeContact($req) {
		
			echo '<div class="col-lg-4">
				<div class="form-group">
					<label for="select" class="col-lg-2 control-label">Selects</label>
					<div class="col-lg-10">
						<form action="#" method="get">
							<select multiple="" size="10" class="form-control">';

								while($resultat = $req->fetch()) {

									echo '<option style="padding: 5px;">'. strtoupper($resultat['nom']) .' '. $resultat['prenom'] .'</option>';

								}
						
							echo '</select>
						
						</form>
						<div class="form-group">
							<div class="col-lg-10">
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
						</div>
					</div>
				</div>
			</div>';
		
		}	

		function afficherConversation($req) {
			
			echo '<div class="col-lg-8">
				
				<div id="liste_message" class="jumbotron" style="overflow: auto; border-radius: 15px 0 0 0;">';
					
					/* BOUCLE WHILE
					
					<div class="list-group">
						<div style="height: 400px;">
							<div class="list-group-item">
								<div class="row-picture">
									<img class="circle" src="http://lorempixel.com/56/56/people/1" alt="icon">
								</div>
								<div class="row-content">
									<h4 class="list-group-item-heading">Michael :</h4>
									<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus</p>
								</div>
							</div>
							<div class="list-group-separator"></div>
							<div class="list-group-item">
								<div class="row-picture">
									<img class="circle" src="http://lorempixel.com/56/56/people/6" alt="icon">
								</div>
								<div class="row-content">
									<h4 class="list-group-item-heading">Nicolas :</h4>
									<p class="list-group-item-text">Maecenas sed diam eget risus varius blandit.</p>
								</div>
							</div>
							<div class="list-group-separator"></div>
							<div class="list-group-item">
								<div class="row-picture">
									<img class="circle" src="http://lorempixel.com/56/56/people/1" alt="icon">
								</div>
								<div class="row-content">
									<h4 class="list-group-item-heading">Michael :</h4>
									<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus</p>
								</div>
							</div>
							<div class="list-group-separator"></div>
							<div class="list-group-item">
								<div class="row-picture">
									<img class="circle" src="http://lorempixel.com/56/56/people/6" alt="icon">
								</div>
								<div class="row-content">
									<h4 class="list-group-item-heading">Nicolas :</h4>
									<p class="list-group-item-text">Maecenas sed diam eget risus varius blandit.</p>
								</div>
							</div>
							<div class="list-group-item">
								<div class="row-picture">
									<img class="circle" src="http://lorempixel.com/56/56/people/6" alt="icon">
								</div>
								<div class="row-content">
									<h4 class="list-group-item-heading">Nicolas :</h4>
									<p class="list-group-item-text">Maecenas sed diam eget risus varius blandit.</p>
								</div>
							</div>
							<div class="list-group-item">
								<div class="row-picture">
									<img class="circle" src="http://lorempixel.com/56/56/people/6" alt="icon">
								</div>
								<div class="row-content">
									<h4 class="list-group-item-heading">Nicolas :</h4>
									<p class="list-group-item-text">Maecenas sed diam eget risus varius blandit.</p>
								</div>
							</div>
						</div>
					</div>*/
				echo '</div>
				
				<form class="form-horizontal" action="" method="">
					<fieldset>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="col-lg-9">
									 <input class="form-control floating-label" id="focusedInput" placeholder="Envoyer un message..." type="text">
								</div>
								<div class="col-lg-2">
									<span class="input-group-btn">
										<button type="submit" class="btn btn-warning btn-raised disabled">Envoyer</button>
									</span>
								</div>
							</div>
						</div>
					</fieldset>
				</form>
				
			</div>';
			

		}
	}

?>
