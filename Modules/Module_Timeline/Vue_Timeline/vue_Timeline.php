<?php

class VueTimeline {
	function affichagePublication($req,$monControleur) {

		while($resultat = $req->fetch()) {
            echo '<div class="panel panel-info" style="margin-bottom: 55px;">';

           echo ' <div class="panel-heading">';
                echo '<h3 class="panel-title">'.$resultat['prenom'].' '.$resultat['nom'].' <span style="float: right">'.$resultat['datePub'].'</span></h3>';
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
				
				
				echo '<a href="index.php?Module=Timeline&action=3&idContact='.$resultatCom['idUser'].'" class="list-group-item-text text-primary">'.$resultatCom['prenom'].' '.$resultatCom['nom'].' </a>: '.$resultatCom['contenu'].'<br>';
				//echo 'Publier le : '.$resultatCom['dateCom'].'<br>';
					
				
		}

	}
		
	function affichageFormAjoutPub() {
        if(isset($_GET['idContact'])) {
            $action=4;
            $idContact=$_GET['idContact'];
        }
        else {
            $action=1;
            $idContact=NULL;
        }
       echo  '<form class="form-horizontal" name="input" style="margin-bottom: 25px; margin-top: 5px;" action="index.php?Module=Timeline&action='. $action .'&idContact='.$idContact .'" method="post" method="post" enctype="multipart/form-data">
					<fieldset>
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

        if(isset($_GET['idContact'])) {

            $idContact=$_GET['idContact'];
        }
        else {

            $idContact=$_SESSION['idUser'];
        }
       echo ' <form class="form-horizontal col-lg-10 col-lg-offset-1" name="input" action="index.php?Module=Timeline&action=2&idContact='.$idContact.'" method="post" enctype="multipart/form-data">
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
