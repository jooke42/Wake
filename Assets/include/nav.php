<div class="navbar navbar-default" style="background-color: #5f7c8a;">
	
	<!-- Logo -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">Wake</a>
    </div>
    <div class="navbar-collapse collapse navbar-responsive-collapse" >
		
		<!-- Barre de recherche -->
        <form class="navbar-form navbar-left" method="POST" action="index.php?Module=Contact&action=searchContact">
            <input class="form-control col-lg-8" name="search" id="search"size=35 placeholder="Search..." type="text" autocomplete="off" list="datalist">
            <datalist  id="datalist">

                </datalist>
            </div>


        </form>
  
		<!-- Menu Header -->
        <div class="col-lg-offset-5">
            <ul class="nav navbar-nav">
                <li><a href="index.php?Module=Timeline">Timeline</a></li>
                <li><a class="col-lg-offset-2" href="index.php?Module=Profil">Profil</a></li>
                <li><a class="col-lg-offset-2" href="index.php?Module=Photo">Pictures</a></li>
                <li><a class="col-lg-offset-2" href="index.php?Module=Contact">Contact</a></li>
                <li><a class="col-lg-offset-2" href="index.php?Module=Messagerie">Messagerie</a></li>
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
                    <li><a href="javascript:void(0)">Notre projet</a></li>
                    <li><a href="javascript:void(0)">Nous contacter</a></li>
                    <li class="divider"></li>
                    <li><a href="Assets/include/deconnexion.php">Se déconnecter</a></li>
                </ul>
            </li>
        </ul>
        
    </div>
</div>

<div class="col-lg-8">
    <div class="panel panel-default">
        <div class="panel-body" style="height: 250px; background-image: url('Assets/css/images/photo-couverture.jpg'); background-size: 100% 100%; background-repeat:none;">
        </div>
        
        <!-- Menu photo de couverture -->
        <div class="panel-footer">
            <ul class="nav nav-pills">
                <li><a href="index.php?Module=Timeline">Timeline</a></li>
                <li><a class="col-lg-offset-1" href="index.php?Module=Profil">Profil</a></li>
                <li><a class="col-lg-offset-1" href="index.php?Module=Photo">Pictures</a></li>
                <li><a class="col-lg-offset-1" href="index.php?Module=Contact">Contact</a></li>
                <li><a class="col-lg-offset-1" href="index.php?Module=Messagerie">Messagerie</a></li>
            </ul>
        </div>
    </div>
    <div class="col-lg-12">
