<?php

class ModeleProfil extends DBMapper {
    function modifProfil($nom,$prenom,$pass,$email,$genre,$datNais,$telephone,$metier) {
        $pass=md5($pass);
        if($_SESSION['Utilisateur']['password']==$pass) {
            if(isset($_SESSION['idUser'])) {
                $idUser=$_SESSION['idUser'];
            }
            var_dump($metier);
            $req = self::$database->prepare("UPDATE user set nom='$nom',prenom='$prenom', email='$email', genre=$genre, datNais=$datNais, telephone=$telephone, metier='$metier' where idUser=$idUser");
            var_dump($req);
            $req->execute();
            $_SESSION['Utilisateur']["nom"]=$nom;
            $_SESSION['Utilisateur']["prenom"]=$prenom;
            $_SESSION['Utilisateur']["email"]=$email;
            $_SESSION['Utilisateur']["genre"]=$genre;
            $_SESSION['Utilisateur']["metier"]=$metier;
            $_SESSION['Utilisateur']["datNais"]=$datNais;
            $_SESSION['Utilisateur']["telephone"]=$telephone;
        }
        else {
            echo "Mot de passe incorrect";
        }
        //header ("Refresh: 0;URL=index.php?Module=Profil");;
    }
	
}

?>
