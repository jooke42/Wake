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
		include('Assets/include/header.php');
		include('Assets/include/nav.php');
		include('Assets/include/init.php');
		include('Assets/include/params_connexion.php');
		include('Assets/include/dbmapper.php');
		include('Assets/include/module.php');

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

			}
            include('Helpers/Helper_Profil/Helper_Profil.php');
            $helperProfil="Helper_Profil";
            $monHelperProfil=new $helperProfil();

		}
        ob_end_flush();
		?>


</body>
<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="http://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
<script src="js/bootstrap-image-gallery.js"></script>
<!--<script src="js/demo.js"></script>-->
<script src="js/ripples.min.js"></script>
<script src="js/material.min.js"></script>
<script>
    $(document).ready(function() {
        $.material.init();
    });
</script>
</html>


