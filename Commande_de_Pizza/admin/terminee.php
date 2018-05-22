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

<?php



require("../getUidFunction.php");


$cid=$_GET['cid'];
$status = "terminee";



try{
	$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
	$pdo=new PDO($dsn,$username,$password,$pdo_options);
	$sql="UPDATE commandes SET statut=? WHERE cid = ? ";
	$res=$pdo->prepare($sql);
	$res -> execute(array($status,$cid));
	
	?>

<script type="text/javascript">
	var p = confirm("Commande livrée avec succes ! voulez-vous en livrer d'autres ?");
	if (p) {
		document.location.href='affiche_commande_livraison.php';
	}else{
		document.location.href='commandes.php';
	}
</script>
<?php

}catch(Exception $e){
	http_response_code(500);
    echo 'Exception reçue : ',  $e->getMessage(), "\n";
	
	exit();
}

?>