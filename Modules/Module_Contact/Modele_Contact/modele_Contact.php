<?php
if (! defined ( 'TEST_INCLUDE' ))
	die ( "Vous ne pouvez pas acceder directement Ã  ce fichier" );

define ( "PASAMIS", 0 );
define ( "AMIS", 1 );
define ( "DEMANDEENVOYE", 2 );
define ( "DEMANDERECU", 3 );


class UnContact {
	private $_id_Contact;
	private $_id_Timeline;
	private $_nom;
	private $_prenom;
	private $_etat;
	function __construct($id_Contact,$etat,$nom=NULL,$prenom=NULL) {
		if($etat==NULL){
			$this->_etat=PASAMIS;
		}else{
			$this->_etat=$etat;
		}
		
		$this->_id_Contact=$id_Contact;
		$this->_nom=$nom;
		$this->_prenom=$prenom;
	}
	
	
	function setContact($etat) {
		if (isset ( $etat )) {
			throw new Exception ( "vous n'avez pas renseigner de paramètre état pour mettre à jour le contact", "setContact<strong>\$etat</strong>", NULL, "modele_Contact.php", NULL, NULL );
		
		} else {
			
			switch ($etat) {
				case PASAMIS :
					if ($this->_etat != PASAMIS) {
						$this->_etat = PASAMIS;
					}
					
					break;
				case DEMANDEENVOYE :
					if ($this->_etat == PASAMIS) {
						$this->_etat = DEMANDEENVOYE;
					}
					
					break;
				case AMIS :
					if ($this->_etat == DEMANDEENVOYE) {
						$this->_etat = AMIS;
					}
				case DEMANDERECU :
						if ($this->_etat == PASAMIS) {
							$this->_etat = DEMANDERECU;
						}
					
					break;
				
				default :
					throw new Exception ( "vous n'avez pas renseigner un paramètre état Valide pour mettre à jour le contact", "setContact<strong>$etat</strong>", NULL, "modele_Contact.php", NULL, NULL );
					break;
			}
		}
	}
	
	function  getEtat(){
		return $this->_etat;
	}
	function getIdContact(){
		return $this->_id_Contact;
	}
	function  getNom(){
		return $this->_nom;
	}
	function getPrenom(){
		return $this->_prenom;
	}
	
}

class ListeContact{
	private $listeContact;
	private $idProfil;
	
	function __construct($idProfil=NULL,$listeContact) {
	if(!isset($idProfil)){
			if(!isset ( $_SESSION ['idUser'] )){
				throw new Exception("vous n'avez pas rentrer de profil actuel (pas de user connecter ,pas d'idUser fourni)", "function __construct(\$idProfil=NULL)", NULL, modele_Contact.php, NULL, NULL);
					
			}else{
				$this->idProfil=$_SESSION ['idUser'];
			}
		}else{
			$this->idProfil=$idProfil;
		}
			$this->listeContact=$listeContact;
	}
	
	function setListeContact($listeContact){
		$this->listeContact=($listeContact);
	}
	function getListeContact(){
		return $this->listeContact;
	}
	
	
}

class ListeContactManager extends DBMapper{
	
	private $idProfil;
	private $contactManager;
	
	function __construct($idProfil=NULL) {
		if(!isset($idProfil)){
			if(!isset ( $_SESSION ['idUser'] )){
				throw new Exception("vous n'avez pas rentrer de profil actuel (pas de user connecter ,pas d'idUser fourni)", "function __construct(\$idProfil=NULL)", NULL, modele_Contact.php, NULL, NULL);
					
			}else{
				$this->idProfil=$_SESSION ['idUser'];
			}
		}else{
			$this->idProfil=$idProfil;
		}
	
			
				
			
			
			$this->contactManager=new UnContactManager();
		
	}
	
	function SetListeContact($listeContact){
		foreach ($listeContact as $contact){
			$this->contactManager->SetContact($contact);
		}
				
	}
	
	function GetListeContact(){
		$listeContact=array();
	
		
			
				$sth = self::$database->prepare('SELECT *
						FROM contact WHERE contact.idUser1= :idProfil OR contact.idUser2= :idProfilS ');
				
				$sth->bindValue(':idProfil', $this->idProfil, PDO::PARAM_INT);
				$sth->bindValue(':idProfilS', $this->idProfil, PDO::PARAM_INT);
				$sth->execute();
		
			
				
				$result=$sth->fetchall(PDO::FETCH_ASSOC);
		
				
				
		foreach ($result as $contact){
			
			if($contact['idUser1']==$this->idProfil){
				$objetContact=$this->contactManager->initialisationUnContact($contact['idUser2'],$contact['etat']);
				array_push($listeContact, $objetContact);
			}
			
			
		}
				return new ListeContact($this->idProfil,$listeContact);
	
	}
	
	
	public function seachProfil($Query) {
		$id = isset ( $_SESSION ['idUser'] ) ? $_SESSION ['idUser'] : 1;
	
		$req = self::$database->prepare ( "SELECT distinct * FROM (SELECT * FROM user WHERE MATCH (nom,prenom) AGAINST (:query IN BOOLEAN MODE) )as
				user LEFT JOIN (SELECT * FROM contact where contact.idUser1=:idProfil )as contactProfil ON user.idUser = contactProfil.idUser2 ");
		$req->bindValue(":idProfil",$this->idProfil,PDO::PARAM_INT);
				
		$req->bindValue(":query",$Query.'*',PDO::PARAM_STR);
				$req->execute ();
	
				$resultat = $req->fetchall(PDO::FETCH_ASSOC);
				
				$ListeContacts= array();
				foreach($resultat as $contactRaw){
					
					array_push($ListeContacts, new UnContact($contactRaw['idUser'], $contactRaw['etat'], $contactRaw['nom'], $contactRaw['prenom']));
				}
			
				return $ListeContacts;
	}
	
	
	
	
}
class UnContactManager extends DBMapper{
	private $idProfil;
	
	function __construct($idProfil=NULL) {
	if(!isset($idProfil)){
			if(!isset ( $_SESSION ['idUser'] )){
				throw new Exception("vous n'avez pas rentrer de profil actuel (pas de user connecter ,pas d'idUser fourni)", "function __construct(\$idProfil=NULL)", NULL, modele_Contact.php, NULL, NULL);
					
			}else{
				$this->idProfil=$_SESSION ['idUser'];
			}
		}else{
			$this->idProfil=$idProfil;
		}
	
	}
	
	
	function SetContact($contact){
		if($contact->getEtat()==PASAMIS){
			$tabVariable=array(":idProfil"=>$this->idProfil,":idContact"=>$contact->getIdContact(),":etat"=>$contact->getEtat());
			$requete = self::$database->prepare ( "DELETE FROM contact WHERE idUser1=:idProfil AND idUser2=:idContact OR idUser2=:idProfil AND idUser1=:idContact ");
			$requete->execute($tabVariable);
		}else{
			if($contact->getEtat()==AMIS){
				$tabVariable=array(":idProfil"=>$this->idProfil,":idContact"=>$contact->getIdContact(),":etat"=>$contact->getEtat());
				$requete = self::$database->prepare ( "INSERT INTO contact VALUES (:idContact,:idprofil,:etat)ON DUPLICATE KEY UPDATE etat=VALUES(etat)");
				$requete->bindValue(':idContact', $contact->getIdContact(), PDO::PARAM_INT);
				$requete->bindValue(':idprofil', $this->idProfil, PDO::PARAM_INT);
				$requete->bindValue(':etat', $contact->getEtat(), PDO::PARAM_INT);
				$requete->execute();
			}
			if($contact->getEtat()==DEMANDEENVOYE){
				$tabVariable=array(":idProfil"=>$this->idProfil,":idContact"=>$contact->getIdContact(),":etat"=>$contact->getEtat());
				$requete = self::$database->prepare ( "INSERT INTO contact VALUES (:idContact,:idprofil,:etat)ON DUPLICATE KEY UPDATE etat=VALUES(etat)");
				$requete->bindValue(':idContact', $contact->getIdContact(), PDO::PARAM_INT);
				$requete->bindValue(':idprofil', $this->idProfil, PDO::PARAM_INT);
				$requete->bindValue(':etat', DEMANDERECU, PDO::PARAM_INT);
				$requete->execute();
				
			}
			$tabVariable=array(":idProfil"=>$this->idProfil,":idContact"=>$contact->getIdContact(),":etat"=>$contact->getEtat());
				$requete = self::$database->prepare ( "INSERT INTO contact VALUES (:idprofil,:idContact,:etat)ON DUPLICATE KEY UPDATE etat=VALUES(etat)");
				$requete->bindValue(':idContact', $contact->getIdContact(), PDO::PARAM_INT);
				$requete->bindValue(':idprofil', $this->idProfil, PDO::PARAM_INT);
				$requete->bindValue(':etat', $contact->getEtat(), PDO::PARAM_INT);
				$requete->execute();
				
		}
	
	
	}
	function initialisationUnContact($idContact,$etat){
		
	
	
		$sth = self::$database->prepare('SELECT nom,prenom FROM user WHERE idUser= :idContact ');
		
		$sth->bindValue(':idContact', $idContact, PDO::PARAM_INT);
	
	
		$sth->execute ();
		$resultat=$sth->fetch(PDO::FETCH_ASSOC);
	
		$Contact = new UnContact($idContact, $etat, $resultat['nom'], $resultat['prenom']);
		
		return $Contact;
	
	}
}

class ModeleContact extends DBMapper {
	

	
	
	
	
}


