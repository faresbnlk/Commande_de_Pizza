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

$sid=$_GET['id'];
@$nom=$_GET["nom"]; 
@$prix=$_GET["prix"];

try{
	$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
	$pdo=new PDO($dsn,$username,$password,$pdo_options);
	$sql="UPDATE supplements SET nom=?,prix=? WHERE sid = ? ";
	$res=$pdo->prepare($sql);
	$res -> execute(array($nom,$prix,$sid));
	$res->closeCursor();
?>
<script type="text/javascript">
	var p = confirm("produit a ete bien modifié! pour modifier un autre produit cliquez sur ok");
	if (p) {
		document.location.href='modifier_supplement.php';
	}else{
		document.location.href='affiche_liste_supplements.php';
	}
</script>
<?php
}catch(Exception $e){
	http_response_code(500);
	echo "Erreur de serveur.";
	exit();
}

?>