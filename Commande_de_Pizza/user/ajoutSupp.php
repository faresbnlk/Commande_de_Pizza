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
<html lang="en">
<head>
  <title>Ajout Supplément</title>
  <?php  include 'header_user.php'?>
 





<?php
$cid = $_GET['cid'];
 
require("../getUidFunction.php");



$pdo=new PDO($dsn,$username,$password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// 		try{
// 			$sql ="INSERT INTO extras (cid) VALUES (?) ";
// 			$res=$pdo->prepare($sql);
// 			$res->execute(array($cid));
			
		
// 	}catch (Exception $e) {
//     echo 'Exception reçue : ',  $e->getMessage(), "\n";
// }require ('../db_config.php');





echo '<div class="well well-lg">
  <h1 style="text-align: center;" class="az">Liste des supplements</h1>
</div>';


              $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
              $pdo=new PDO($dsn,$username,$password,$pdo_options);
              $sql = "SELECT * FROM supplements";
              $req = $pdo -> prepare($sql);
              $req -> execute();


              echo
"<table class ='table'>";
echo "<tr>
<th style = 'text-align : center;'> Nom </th>
<th style = 'text-align : center;'> Prix</th>
<th style = 'text-align : center;'>Action</th>
    </tr>";
		while ($donnees = $req->fetch())
{
    echo"
  

    <tr class='success' style = 'text-align : center;'><td> $donnees[nom] </td><td>$donnees[prix]</td> <td><a href= 'ajoutSupp2.php?sid=$donnees[sid]&cid=$cid'>Commander</a></td></tr> ";
}
echo "</table>";

//echo " Vous etes sur l'espace admin";

echo"
<p align = 'center'>
<a href='accueilUser.php' class='btn btn-danger'st>Retour a l'accueil</a>
</p>";
echo"<br><br><br><br><br><br><br>";
 include '../footer.php';
?>