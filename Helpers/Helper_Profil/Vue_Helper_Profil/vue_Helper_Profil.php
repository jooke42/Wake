<?php

class VueHelperProfil{
	
	function affichageNomPhoto($req,$monControleurPhoto) {
        echo '</div>';
			$resultat=$req->fetch();
			/*echo '<div id="profil_timeline">
				<div>';
					$monControleurPhoto->affichagePhotoProfilComplet();
				echo '</div>
				<div id="profil_timeline-profil-container">
					<ul>';
						echo '<li>';
						echo $resultat["nom"].' '.$resultat["prenom"];
						echo '</li>';
						echo '<li>';
						echo $resultat["metier"];
						echo '</li>';
					echo '</ul>
					
					<p id="description">
						
					</p>
				</div>
			</div>';*/
        echo '</div>';
        echo ' <div class="col-lg-4">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="well col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-xs-6 col-xs-offset-3" style="height: 185px; margin-top: 15px;">';
        $monControleurPhoto->affichagePhotoProfilComplet();
        echo '</div>
				</div>
				<div class="panel-footer text-center" style="height: 60px;"><p style="padding-top: 10px;">';
        echo $resultat["prenom"].' '.$resultat["nom"];
        echo '</p></div>
			</div>
		</div>';
	}
	function affichageNomPhotoUser($req,$monControleurPhoto) {
        echo '</div>';
			$resultat=$req->fetch();
			$idContact=$resultat["idUser"];
			/*echo '<div id="profil_timeline">
				<div>';
					$monControleurPhoto->affichagePhotoProfilCompletUser($idContact);
				echo '</div>
				<div id="profil_timeline-profil-container">
					<ul>';
						echo '<li>';
						echo $resultat["nom"].' '.$resultat["prenom"];
						echo '</li>';
						echo '<li>';
						echo $resultat["metier"];
						echo '</li>';
					echo '</ul>
					
					<p id="description">
						
					</p>
				</div>
			</div>';*/
	echo '</div>';
        echo ' <div class="col-lg-4">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="well col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-xs-6 col-xs-offset-3" style="height: 185px; margin-top: 15px;">';
        $monControleurPhoto->affichagePhotoProfilCompletUser($idContact);
        echo '</div>
				</div>
				<div class="panel-footer text-center" style="height: 60px;"><p style="padding-top: 10px;">';
        echo $resultat["nom"].' '.$resultat["prenom"];
        echo '</p></div>
			</div>
		</div>';
	}
}

?>
