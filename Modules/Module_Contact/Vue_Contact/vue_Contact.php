<?php
class VueContact {
	static function AfficherListeContact($ListeContacts) {
		echo '<div class="col-lg-12"> ';
		?><form action="index.php?Module=Contact&action=contactChange" method="POST"><?php
		foreach ( $ListeContacts as $Contact) { 
			?>
<div class="jumbotron col-lg-4" style="min-height:146px; ">
	<div class="row">
		<div >
		<div class="list-group">
		<div class="list-group-item">
  <div class="row-picture">
						<a
							href="<?php echo "index.php?Module=Timeline&action=3&idContact=".$Contact->getIdContact();?>"><img
							class="circle" style="height:56px;width:56px;margin-top: 10px;"
							src="<?php echo $Contact->getPhoto();?>" alt="icon"></a>
					</div><h4 class= "list-group-item-heading" style="margin-top: 15px;"><?php echo '<a href="index.php?Module=Timeline&action=3&idContact='.$Contact->getIdContact().'">'.$Contact->getNom().' '.$Contact->getPrenom();?></a></h4>
					<?php if($Contact->getIdContact()!=$_SESSION['idUser']){?><div class="checkbox <?php if ($Contact->getEtat() == DEMANDEENVOYE OR $Contact->getEtat() == PASAMIS)echo " checkbox-primary" ?>">
    <label>
    <input type="hidden" name="<?php echo $Contact->getIdContact()?>" value="0" />
      <input  type="checkbox" name="<?php echo $Contact->getIdContact()?>" value="<?php if($Contact->getEtat()==PASAMIS){echo DEMANDEENVOYE;}elseif($Contact->getEtat()==DEMANDERECU){echo AMIS;}else{echo $Contact->getEtat() ;}?>"<?php if ($Contact->getEtat() == AMIS OR $Contact->getEtat() == DEMANDEENVOYE)echo 'checked'?>>
    </label>
  </div><?php }?>
					</div></div>
  

			
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
