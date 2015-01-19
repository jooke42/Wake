<?php
ob_start();
session_start();
define('ERROR_LOG_FILE', 'error.log');
define('ERROR_LOG_ALL', true);

ini_set('display_errors', 1); 
error_reporting(E_ALL);

define('TEST_INCLUDE', 1);
?>




		<?php

		include('Assets/include/installation/init.php');
		include('Assets/include/installation/params_connexion.php');
		include('Assets/include/installation/dbmapper.php');
		include('Assets/include/installation/module.php');

		$connexion = new PDO ($dns, $user, $password);
		DBMapper::init($connexion);




		if(isset($_GET['Module'])){
	
			$module=$_GET['Module'];
		}
		else {
			$module="Timeline";
		}
		
		if(!isset($_SESSION['Utilisateur']) and $module!="Inscription") {
			$module="Connexion";
			include('Modules/Module_'.$module.'/'.$module.'.php');
			$monModule=new $module();


		}
        else if (!isset($_SESSION['Utilisateur']) and $module=="Inscription") {
            include('Modules/Module_'.$module.'/'.$module.'.php');
            $monModule=new $module();
        }
		else {
			include('Assets/include/header.php');
			include('Assets/include/nav.php');

			?><?php

			include('Helpers/Helper_Profil/Helper_Profil.php');
			$helperProfil="Helper_Profil";
			
			$monHelperProfil=new $helperProfil();
			?></div><div class="col-lg-8"><?php
			switch($module) {
				case "Timeline":
				
					include('Modules/Module_'.$module.'/'.$module.'.php');
					$monModule=new $module();
				break;
				case "Profil":
					include('Modules/Module_'.$module.'/'.$module.'.php');
					$monModule=new $module();
				break;

				case "Connexion":
					include('Modules/Module_'.$module.'/'.$module.'.php');
					$monModule=new $module();
				break;

				case "Inscription":
					include('Modules/Module_'.$module.'/'.$module.'.php');
					$monModule=new $module();
				break;
				case "Photo":
					include('Modules/Module_'.$module.'/'.$module.'.php');
					$monModule=new $module();
				break;
				case "Contact":
					include('Modules/Module_'.$module.'/'.$module.'.php');
					$monModule=new $module();
				break;
				case "Messagerie":
					include('Modules/Module_'.$module.'/'.$module.'.php');
					$monModule=new $module();
					break;

			}
	?>





			<?php
			include('Assets/include/footer.php');

		}
		
        ob_end_flush();
		
		?>






