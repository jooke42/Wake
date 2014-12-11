<?php

class VueTimeline {
	function affichagePublication($req,$monControleur) {

		while($resultat = $req->fetch()) {
            echo '<div class="panel panel-info" style="margin-bottom: 55px;">';
			/*echo '<div id="timeline-publication">';
				echo '<div class="timeline-informations">';
					echo '<span class="timeline-informations-auteur">'.$resultat['idUser'].'</span>';
			
					echo '<span class="timeline-informations-date-publication">'.$resultat['datePub'].'</span>';
				echo '</div>';
				echo '<p class="timeline-message">'.$resultat['titre'].'</p>';
				echo '<p class="timeline-message">'.$resultat['contenu'].'</p>';
				echo '';	
			
				echo '<div id="timeline-commantaires">';
			$idPub=$resultat['idPublication'];
			$monControleur->affichageCommentaire($idPub);
			$this->affichageFormAjoutCom($idPub);	
				echo '</div>';
			echo '</div>';*/
           echo ' <div class="panel-heading">';
                echo '<h3 class="panel-title">'.$resultat['titre'].'</h3>';
				  echo '	</div>
					<div class="panel-body">';
                          echo  $resultat['contenu'];
                    echo '</div>';





         echo ' <div class="panel-body">
						<div class="list-group">
							<div class="list-group-separator"></div>
							<div class="list-group-item">

								<div class="row-content">';

                            $idPub=$resultat['idPublication'];

                            $monControleur->affichageCommentaire($idPub);
								echo '</div>
							</div>
							<div class="list-group-separator"></div>
						</div>';
                       $this->affichageFormAjoutCom($idPub);
					echo '</div>';
            echo '</div>';

        }




	}

	function affichageCommentaire($idPub,$reqCom) {

		while($resultatCom = $reqCom->fetch()) {
				
				
				echo '<p class="list-group-item-text text-primary">'.$resultatCom['idUser'].' : '.$resultatCom['contenu'].'</p>';
				//echo 'Publier le : '.$resultatCom['dateCom'].'<br>';
					
				
		}

	}
		
	function affichageFormAjoutPub() {
	/*	echo '<div id="timeline">';
		echo '<div id="timeline-message-publication">';
		echo '<form name="input" action ="index.php?Module=Timeline&action=1" method="post" enctype="multipart/form-data">
			
				<br>
				<input type="text" name="titre" placeholder="Titre" required /> 
				<textarea name="contenu" placeholder="Votre publication" required ></textarea> 
				<br>
				<input type="file" name="upload" />
				<input type="submit"/>
			</form>';
		echo '</div>';*/
       echo  '<form class="form-horizontal" name="input" style="margin-bottom: 25px; margin-top: 5px;" action="index.php?Module=Timeline&action=1" method="post" method="post" enctype="multipart/form-data">
					<fieldset>
						<div class="form-group">
							<div class="col-lg-12">
								<input type="text" class="form-control floating-label" name="titre" id="focusedInput" placeholder="Titre" required>
							</div>
						</div>
						<div class="form-group">
							<!--<label for="textArea" class="col-lg-2 control-label">Textarea</label>-->
							<div class="col-lg-12">
								<textarea name="contenu" class="form-control" rows="3" id="textArea" placeholder="Publier sur la timeline..." required ></textarea>
								<!--<span class="help-block"></span>-->
							</div>
						</div>
						<div class="form-group">
							<!--<label for="inputFile" class="col-lg-2 control-label">Upload : </label>-->
							<div class="col-lg-8">
								<input readonly="" class="form-control floating-label" placeholder="Importer une image..." type="text">
								<input id="inputFile" multiple="" type="file">
							</div>
							<div class="col-lg-1"></div>
							<div class="col-lg-2">
								<span class="input-group-btn">
									<button type="submit" class="btn btn-warning btn-raised">Envoyer</button>
								</span>
							</div>
						</div>
					</fieldset>
				</form>';
		
	}



	function affichageFormAjoutCom($idPub) {
	/*	echo '<form name="input" action ="index.php?Module=Timeline&action=2" method="post" enctype="multipart/form-data">
				<br>
				<textarea name="contenuCom" rows="2" cols="25" placeholder="Commenter" required ></textarea> 
				<br>';
		echo "<input type=\"text\" name=\"idPub\" value = \"$idPub\" hidden /> ";
		echo '<input name="Envoyer" value="Envoyer" type="submit">
			</form><br>';
    */

       echo ' <form class="form-horizontal col-lg-10 col-lg-offset-1" name="input" action="index.php?Module=Timeline&action=2" method="post" enctype="multipart/form-data">
							<div class="col-lg-9">
								<div class="form-group">
									<input name="contenuCom" class="form-control floating-label" style="margin-top: 5px;" id="focusedInput" placeholder="Laisser un commentaire" type="text" required >
								</div>
							</div>
							<div class="col-lg-1"></div>
							<div class="col-lg-2">
								<span class="input-group-btn">';
									echo "<input type=\"text\" name=\"idPub\" value = \"$idPub\" hidden /> ";

									echo '<button type="submit" class="btn btn-warning btn-raised">Envoyer</button>
								</span>
							</div>
						</form>';

			
			
	}
}

?>
