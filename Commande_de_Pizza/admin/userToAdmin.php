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


$uid=$_GET['uid'];
$status = "admin";



try{
	$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
	$pdo=new PDO($dsn,$username,$password,$pdo_options);
	$sql="UPDATE users SET role = ? WHERE uid = ? ";
	$res=$pdo->prepare($sql);
	$res -> execute(array($status,$uid));
	
	?>

<script type="text/javascript">
	var p = confirm("User est devenu Admin avec succes ! voulez-vous en modifier d'autres ?");
	if (p) {
		document.location.href='affiche_utilisateurs.php';
	}else{
		document.location.href='accueilAdmin.php';
	}
</script>
<?php

}catch(Exception $e){
	http_response_code(500);
    echo 'Exception reçue : ',  $e->getMessage(), "\n";
	
	exit();
}

?>