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
include'header_user.php';

?>
<!DOCTYPE html>
<html lang="en">
<title>Commandes</title>
<body>
  <body background="../Design/images/4.jpg"></body>
<br>
<br>
<br>
<br>
<div class="well well-lg">
  <h1 style="text-align: center;" class="az">si vous voulez ajouter un supp cliquer sur 'ajouter supplement' sinon , retour a l'accueil </h1>
</div>



<?php 

require("../getUidFunction.php");

function aleatoire($longueur=5,$choix="chiffres,lettresmaj"){
    $choix=explode(",",$choix);
    $ChaineAutiliser="";
    foreach($choix as $lechoix){
        switch($lechoix){
        
        case "chiffres":
            $ChaineAutiliser.="0123456789";
            break;
        case "lettresmaj":
            $ChaineAutiliser.="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
            break;
            default:
            $ChaineAutiliser.="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        }
    }
    $ChaineDeRetour="";
    for($i=1;$i<=$longueur;$i++){
        $ChaineDeRetour .= substr($ChaineAutiliser,rand(0,strlen($ChaineAutiliser)-1),1);
    }
    return $ChaineDeRetour;
}


@$rid=$_GET['rid'];
@$statut="preparation";
$ref =aleatoire(6,"lettresmaj,chiffres");

$pdo=new PDO($dsn,$username,$password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		try{
			$sql ="INSERT INTO commandes VALUES (NULL,?,?,?,now(),?) ";
			$res=$pdo->prepare($sql);
			$res->execute(array($ref,$uid,$rid,$statut));
			
		
	}catch (Exception $e) {
    echo 'Exception reçue : ',  $e->getMessage(), "\n";
}


try{
			$sql ="SELECT cid FROM commandes WHERE ref LIKE ? AND uid LIKE ?  AND rid LIKE ? ";
			$res=$pdo->prepare($sql);
			$res->execute(array($ref,$uid,$rid));
			  $row = $res->fetch();
             $cid = $row["cid"];
            
		
	}catch (Exception $e) {
    echo 'Exception reçue : ',  $e->getMessage(), "\n";
}

?> 
	<script type="text/javascript">
		
		alert("recette ajoutée avec succes !")
	</script>






    
<p align = 'center'>
<a href='accueilUser.php' class='btn btn-danger'>Retour a l'accueil</a>

       <a href="ajoutSupp.php?cid=<?php echo $cid ?>" class="btn btn-default">ajouter un supplement </a>

</p>
<?php  
echo"<br><br><br><br><br><br>
<br><br><br><br><br><br><br>";
include'../footer.php';
?>

      