<!DOCTYPE html>
<html>

<head>

	<meta charset="UTF-8">
	<title>Bienvenue sur Wake</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
	<link href="../../Assets/css/ripples.min.css" rel="stylesheet">
	<link href="../../Assets/css/material-wfont.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../../Assets/css/blueimp-gallery.css">
	<link rel="stylesheet" href="../../Assets/css/bootstrap-image-gallery.css">
	<link rel="stylesheet" href="../../Assets/css/demo.css">

</head>

<body>

<script type="text/javascript">


	$("search").keypress(function(event) {
		if (event.which == 13) {
			event.preventDefault();
			$("form").submit();
		}
	});

</script>

<div class="navbar navbar-default" style="background-color: #5f7c8a;">

	<!-- Logo -->
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="../../index.php">Wake</a>
	</div>
	<div class="navbar-collapse collapse navbar-responsive-collapse" >

		<!-- Barre de recherche -->
		<form class="navbar-form navbar-left" method="POST" action="../../index.php?Module=Contact&action=searchContact">
			<input class="form-control col-lg-8" name="search" id="search"size=35 placeholder="Search..." type="text">
		</form>

		<!-- Menu Header -->
		<div class="col-lg-offset-5">
			<ul class="nav navbar-nav">
				<li><a href="../../index.php?Module=Timeline">Timeline</a></li>
				<li><a class="col-lg-offset-2" href="../../index.php?Module=Profil">Profil</a></li>
				<li><a class="col-lg-offset-2" href="../../index.php?Module=Photo">Pictures</a></li>
				<li><a class="col-lg-offset-2" href="../../index.php?Module=Contact">Contact</a></li>
				<li><a class="col-lg-offset-2" href="../../index.php?Module=Messagerie">Messagerie</a></li>
			</ul>
		</div>

		<!-- Menu droite -->
		<ul class="nav navbar-nav navbar-right">
			<li class="dropdown">
				<a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Notifications</a>
			</li>
			<li class="dropdown">
				<a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Menu principal <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="../../Assets/include/notre_projet.php">Notre projet</a></li>
					<li><a href="../../Assets/include/nous_contacter.php">Nous contacter</a></li>
					<li class="divider"></li>
					<li><a href="../../Assets/include/deconnexion.php">Se déconnecter</a></li>
				</ul>
			</li>
		</ul>

	</div>
</div>
			
		<section>

			<div class="row">
				<div class="col-lg-10 col-lg-offset-1">
					<div class="panel panel-default">
						<div class="panel-heading"><strong>1 / Présentation du projet</strong></div>
						<div class="panel-body">
							Dans le cadre du module de Programmation Web, nous avons choisi de réaliser un réseau 
							social qui selon nous abordait certains aspects intéressants de la programmation et 
							apportait également une réflexion autour de l'ergonomie et comment rendre son site attractif. 
							<br><br>
							Créer un réseau social c'est être à la fois le client et l'administrateur de son site.
						</div>
					</div>
				</div>
			</div>

			<div class="row">	
				<div class="col-lg-12">
					
					<div class="col-lg-8">
						<div class="panel panel-default">
							<div class="panel-heading"><strong>2 / Objectifs réalisés</strong></div>
							<div class="panel-body">
								A ce jour, nous avons pu réalisé l'ensemble des fonctionnalités élémentaires nécessaires 
								au bon fonctionnement d'un réseau social, à savoir, la possibilité d'avoir son propre 
								réseau de contact, échanger à travers une plate-forme dite « Timeline », le pouvoir 
								de personnaliser son profil afin de la démarquer des autres et y ajouter une plus-value.
								<br><br>
								L'échange était la clé de notre projet.
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading"><strong>3 / Ce que nous a apporté ce projet</strong></div>
							<div class="panel-body">
								La réalisation de ce projet a été réellement bénéfique pour nous, elle nous aura permit 
								d'acquérir de nouvelles connaissances en PHP ainsi qu'une vision plus large sur la 
								gestion de base de données qui est indispensable afin que tout bon site web dynamique 
								conserve une certaine cohérence.
							</div>
						</div>
					</div>
					
					<div class="col-lg-4">
						<div class="panel panel-default">
							<div class="panel-heading"><strong>4 / Ce que l'on en retiendra</strong></div>
							<div class="panel-body">
								Il est absolument important de toujours conserver une organisation au sein du groupe 
								afin de ne pas se disperser, la gestion du temps ainsi que la communication sont les 
								notions que nous retiendront à l'avenir.
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading"><strong>5 / Et enfin, pourquoi Wake ?</strong></div>
							<div class="panel-body">
								Tout simplement parce que nous n'avions pas d'idée et après une longue recherche 
								infructueuse nous nous sommes mit en accord sur <strong>Wake</strong> qui selon nous sonnait le mieux.
							</div>
						</div>
					</div>
					
				</div>
			</div>

		</section>

		<footer>
			<div class="col-lg-12" style="border-top: 1px solid grey;">
				<p style="margin-top: 10px; text-align: center;">Copyright © 2015 Wake - Tous droits réservés</p>
			</div>
		</footer>

	</body>

	<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="http://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
	<script src="../../Assets/js/bootstrap-image-gallery.js"></script>
	<!--<script src="js/demo.js"></script>-->
	<script src="../../Assets/js/ripples.min.js"></script>
	<script src="../../Assets/js/material.min.js"></script>
	<script>
		$(document).ready(function() {
			$.material.init();
		});
	</script>
</html>
