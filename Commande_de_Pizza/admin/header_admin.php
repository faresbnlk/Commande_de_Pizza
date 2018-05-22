<!--
#***********************************************************************************#
#                                                                                   #
#                                                      #   # #### #### ####         #
#     Created by : Fares BENLAKEHAL                    #   # #  # #    #            #
#                                                      #   # #### ###  #            #
#                                                      #   # #    #    #            #
#                  2018                                 ###  #    #### ####         #
#                                                                                   #
#                                                                                   #
#                                                                                   # 
#***********************************************************************************/
-->
<!DOCTYPE html>
<html lang="fr">
<head> 
<?php include "bootstrap.php";?>
<html lang="fr">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="./accueilAdmin.php">Céteil's Pizza</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="accueilAdmin.php">Home</a></li>
        <li><a href="recettes.php">Recettes</a></li>
        <li><a href="supplements.php">Suppléments</a></li> 
        <li><a href="commandes.php">Commandes</a></li> 
        <li><a href="utilisateurs.php">Utilisateurs</a></li> 
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../logout.php"><span class="glyphicon glyphicon-log-out"></span> Se Déconnecter</a></li>
      </ul>
    </div>
  </div>
</nav>
</head>


</html>
