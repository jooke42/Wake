<?php

	class VueMessagerie {
		
		function __construct($module) {}
		
		function afficherListeContact($req) {


			echo '<div class="col-lg-4">
				<div class="form-group">
					<label for="select" class="col-lg-2 control-label">Selects</label>
					<div class="col-lg-10">
						<div class="form-group">
						<form id="contact-form" name="input" action ="index.php?Module=Messagerie&action=1" method="post" enctype="multipart/form-data">

								<select multiple="" size="10" class="form-control" name="idDestinataire">';

									while($resultat = $req->fetch()) {

										echo '<option value="'.$resultat['idUser'].'" style="padding: 5px;">'. strtoupper($resultat['nom']) .' '. $resultat['prenom'] .'</option>';

									}
							
								echo '</select>
							
								<div class="col-lg-10">
									<button type="submit" class="btn btn-primary">Submit</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>';
		
		}	

		function afficherConversation($req,$idDestinataire) {

			echo '<div class="col-lg-8">
				
				<div id="liste_message" class="jumbotron" style="overflow: auto; border-radius: 15px 0 0 0;">
					<div class="list-group">
						<div style="height: 400px;">';
					while($resultat=$req->fetch()) {
						echo '<div class="list-group-item">
								<div class="row-picture">
									<img class="circle" src="http://lorempixel.com/56/56/people/1" alt="icon">
								</div>
								<div class="row-content">
									<h4 class="list-group-item-heading">'.$resultat['prenom'].'</h4>
									<p class="list-group-item-text">'.$resultat['contenu'].'</p>
								</div>
							</div>
							<div class="list-group-separator"></div>';

					}

				echo '</div>
				</div>';


				echo '
				<form class="form-horizontal" action="index.php?Module=Messagerie&action=2&idDestinataire='.$idDestinataire.'" method="post">
					<fieldset>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="col-lg-9">
									 <input class="form-control floating-label" name="contenuMessage" id="focusedInput" placeholder="Envoyer un message..." type="text">
								</div>
								<div class="col-lg-2">
									<span class="input-group-btn">
										<button type="submit" class="btn btn-primary">Envoyer</button>
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
