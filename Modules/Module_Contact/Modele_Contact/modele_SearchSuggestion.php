<?php
include_once('../../../Assets/include/installation/dbmapper.php');
include_once("modele_Contact.php");
$connexion = new PDO ($dns, $user, $password);
DBMapper::init($connexion);

$idUser=$_SESSION['idUser'];
$modeleContact=new ModeleContact();
$suggestionList=$modeleContact->seachProfil($_GET['query']);
foreach($suggestionList as $suggestion ){
    ?><option value="<?php echo $suggestion->getPrenom()." ".$suggestion->getNom();?>"><?php
}