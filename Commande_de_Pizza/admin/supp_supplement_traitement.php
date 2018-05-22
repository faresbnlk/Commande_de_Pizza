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
 <title>Supprimer Un Supplément</title>
<?php require("../auth/EtreAuthentifie.php");
require ('../db_config.php'); ?>
<?php 

	$sid=$_GET['sid'];

	try{
		$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
		$pdo=new PDO($dsn,$username,$password);
		
			$pdo = new PDO ($dsn,$username,$password);
			$sql ="DELETE FROM supplements WHERE sid=?";
			$res=$pdo->prepare($sql);
			$res -> execute(array($sid));
			 ?> 
			 	<script type="text/javascript">
			 		var confirm = confirm('Supplément supprimé avec succes ! voulez vous supprimer d\'autre ?');
			 		if (confirm) {
			 				document.location.href='supprimer_supplement.php';
			 		}else{
			 		
			 			document.location.href='affiche_liste_supplements.php';
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

