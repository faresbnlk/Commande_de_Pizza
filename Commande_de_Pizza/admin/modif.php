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
<?php
require("../auth/EtreAuthentifie.php");
require ('../db_config.php');

$rid=$_GET['id'];
@$nom=$_GET["nom"]; 
@$prix=$_GET["prix"];

try{
	$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
	$pdo=new PDO($dsn,$username,$password,$pdo_options);
	$sql="UPDATE recettes SET nom=?,prix=? WHERE rid = ? ";
	$res=$pdo->prepare($sql);
	$res -> execute(array($nom,$prix,$rid));
	$res->closeCursor();
?>
<script type="text/javascript">
	var p = confirm("Pizza modifiée avec succes! pour modifier une autre cliquez sur ok");
	if (p) {
		document.location.href='modif_pizza.php';
	}else{
		document.location.href='affiche_liste_pizza.php';
	}
</script>
<?php
}catch(Exception $e){
	http_response_code(500);
	echo "Erreur de serveur.";
	exit();
}

?>
