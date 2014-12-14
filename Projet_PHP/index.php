<?php 

/****** Inclusion header ******/

include('./assets/include/header.php');

/****** Inclusion profil du timeline ******/

include('./assets/include/profil_timeline.php');

/****** Inclusion naviguation ******/

include('./assets/include/nav_timeline.php');

/****** Inclusion conditionnelle ******/

if(isset($_GET['module'])){

	$module = $_GET['module'];
	include('./assets/include/$module.php');

}else{

	include('./assets/include/timeline.php');	
}

?>
