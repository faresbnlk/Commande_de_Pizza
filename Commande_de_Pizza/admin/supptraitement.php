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
 <title>Supprimer Une Pizzat</title>
<?php require("../auth/EtreAuthentifie.php");
require ('../db_config.php'); ?>
<?php 

	$rid=$_GET['rid'];

	try{
		$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
		$pdo=new PDO($dsn,$username,$password);
		
			$pdo = new PDO ($dsn,$username,$password);
			$sql ="DELETE FROM recettes WHERE rid=?";
			$res=$pdo->prepare($sql);
			$res -> execute(array($rid));
			 ?> 
			 	<script type="text/javascript">
			 		var confirm = confirm('Pizza supprimée avec succes ! voulez vous supprimer d\'autre ?');
			 		if (confirm) {
			 				document.location.href='supprimer_pizza.php';
			 		}else{
			 		
			 			document.location.href='affiche_liste_pizza.php';
			 		}
			 	</script>
			 <?php
			$res->closeCursor();

		
	}catch (Exception $e){
		http_response_code(500);
		echo "Erreur de serveur.";
		exit();
	}
?>

