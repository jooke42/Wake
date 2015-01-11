<?php
class VueContact {
	static function AfficherListeContact($ListeContacts) {
		echo '<div class="col-lg-12"> ';
		echo '<div class="alert alert-dismissable alert-success">
			<button type="button" class="close" data-dismiss="alert">×</button>
			<strong>Note d\'information :<br></strong><br>
				<ul>
					<li class="col-lg-offset-1 col-xs-offset-1">Case vide = N\'est pas un contact ajouté</li>
					<li class="col-lg-offset-1 col-xs-offset-1">Case cochée (Bleu) = Demande en Attente</li>
					<li class="col-lg-offset-1 col-xs-offset-1">Case cochée (Vert) = Contact déjà ajouté</li>
				</ul>
		</div>';
		?><form action="index.php?Module=Contact&action=contactChange" method="POST"><?php
		foreach ( $ListeContacts as $Contact) { 
			?>
<div class="jumbotron col-lg-3" style="min-height:146px; width:256px; margin-right: 5px; margin-left: 5px;">
	<div class="row">
		<div class="col-lg-12">			
			<div class="list-group">
				<div class="list-group-item">
					<div class="row-picture">
						<a
							href="<?php echo "index.php?Module=Timeline&action=3&idContact=".$Contact->getIdContact();?>"><img
							class="circle" style="height:56px;width:56px;margin-top: 10px;"
							src="<?php echo $Contact->getPhoto();?>" alt="icon"></a>
					</div>
					<div class="row-content">
						<h4 class= "list-group-item-heading" style="margin-top: 15px;"><?php echo '<a href="index.php?Module=Timeline&action=3&idContact='.$Contact->getIdContact().'">'.$Contact->getNom().' '.$Contact->getPrenom();?></a></h4>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="list-group-item">
				<div class="row-action-primary checkbox">
					<?php if($Contact->getIdContact()!=$_SESSION['idUser']){?><div class="checkbox <?php if ($Contact->getEtat() == DEMANDEENVOYE OR $Contact->getEtat() == PASAMIS)echo " checkbox-primary" ?>">
					<label>
						<input type="hidden" name="<?php echo $Contact->getIdContact()?>" value="0" />
						<input  type="checkbox" name="<?php echo $Contact->getIdContact()?>" value="<?php if($Contact->getEtat()==PASAMIS){echo DEMANDEENVOYE;}elseif($Contact->getEtat()==DEMANDERECU){echo AMIS;}else{echo $Contact->getEtat() ;}?>"<?php if ($Contact->getEtat() == AMIS OR $Contact->getEtat() == DEMANDEENVOYE)echo 'checked'?>>Option contact
					</label>
				</div><?php }?>		
			</div>
		</div>
	</div>
</div>	
</div>
<?php

		}
		
		?>
		</div>
		<div class="row" style="margin-left: 20px;">
		<button type="submit" class="btn btn-success">Confirmer les modifications</button>
		</div>
		</form>
			
				<?php
	}
			
			
	}




?>
