<?php

class ModeleProfil extends DBMapper {
    function modifProfil($nom,$prenom,$pass,$email,$genre,$adresse,$datNais,$telephone,$metier,$status,$lieuTravail,$etude) {
        $pass=md5($pass);
        if($_SESSION['Utilisateur']['password']==$pass) {
            if(isset($_SESSION['idUser'])) {
                $idUser=$_SESSION['idUser'];
            }

            $req = self::$database->prepare("UPDATE user set nom='$nom',prenom='$prenom', email='$email', genre=$genre, datNais=$datNais, telephone=$telephone, metier='$metier', status='$status' lieuTravail='$lieuTravail', etude='$etude' where idUser=$idUser");
            $req->execute();
            $_SESSION['Utilisateur']["nom"]=$nom;
            $_SESSION['Utilisateur']["prenom"]=$prenom;
            $_SESSION['Utilisateur']["email"]=$email;
            $_SESSION['Utilisateur']["genre"]=$genre;
            $_SESSION['Utilisateur']["adresse"]=$adresse;
            $_SESSION['Utilisateur']["metier"]=$metier;
            $_SESSION['Utilisateur']["status"]=$status;
            $_SESSION['Utilisateur']["lieuTravail"]=$lieuTravail;
            $_SESSION['Utilisateur']["etude"]=$etude;
            $_SESSION['Utilisateur']["datNais"]=$datNais;
            $_SESSION['Utilisateur']["telephone"]=$telephone;
        }
        else {
            echo "Mot de passe incorrect";
        }
        header ("Refresh: 0;URL=index.php?Module=Profil");;
    }
	
}

?>
