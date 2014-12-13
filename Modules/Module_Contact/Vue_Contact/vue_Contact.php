<?php
class VueContact {
	static function AfficherListeContact($ListeContacts) {
		echo '<div class="col-lg-12"> ';
		?><form action="index.php?Module=Contact&action=contactChange" method="POST"><?php
		foreach ( $ListeContacts as $Contact) { 
			?>
<div class="jumbotron col-lg-4">
	<div class="row">
		
			<div class="list-group">
				<div class="list-group-item">
					<div class="row-picture">
						<a
							href="<?php echo "index.php?Module=Timeline&action=3&idContact=".$Contact->getIdContact();?>"><img
							class="circle" style="margin-top: 10px;"
							src="http://lorempixel.com/56/56/people/1" alt="icon"></a>
					</div>
					<div class="row-content">
						<h4 class="list-group-item-heading" style="margin-top: 15px;"><?php echo '<a href="index.php?Module=Timeline&action=3&idContact='.$Contact->getIdContact().'">'.$Contact->getNom().' '.$Contact->getPrenom();?></a>
						</h4>
					</div>
				</div>
			</div>
		
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="list-group-item">
				<div class="row-action-primary checkbox <?php if ($Contact->getEtat() == DEMANDEENVOYE)echo " checkbox-primary" ?>">
									<input type="hidden" name="<?php echo $Contact->getIdContact()?>" value="0" />
									<label><input  type="checkbox" name="<?php echo $Contact->getIdContact()?>" value="<?php echo $Contact->getEtat()?>"<?php if ($Contact->getEtat() == AMIS OR $Contact->getEtat() == DEMANDEENVOYE)echo 'checked'?>>Contact</label>
								
								</div>
			</div>
		</div>
		
	</div>
</div>
<?php
			
			/*
			 * echo $resultat['nom']." ";
			 * echo $resultat['prenom'] ." ";
			 * echo '</a>';
			 * if ($_SESSION['idUser']!= $resultat['idUser1']){
			 * if($resultat['idUser1'] == $_SESSION['idUser'] ){
			 * echo " ami";
			 * echo '<a href="index.php?Module=Contact&action=deleteContact&idUser='.$resultat['idUser'].'">supprimer Contact</a>';
			 * }else{
			 * echo '<a href="index.php?Module=Contact&action=contactRequest&idUser='.$resultat['idUser'].'">ajouter Contact</a>';
			 *
			 * }
			 */
		}
		
		?>
		</div>
		<div class="row">
		<button type="submit" class="btn btn-primary">Confirmer les modifications</button>
		</div>
		</form>
			
				<?php
	}
			
	
			
			
			
			
			
			
	}




?>
