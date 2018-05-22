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
  <title>Commande</title>
<?php
include'header_user.php';
require("../getUidFunction.php");
?>

  <body background="../Design/images/4.jpg"></body>
       
<h1> <p style="text-align:center"><h1/> <tr/>
<?php

echo '
  <h1 style="text-align: center;" class="az">Selectionner une Pizza</h1>
';


try{
   $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
              $pdo=new PDO($dsn,$username,$password,$pdo_options);
              $sql ="SELECT * FROM recettes";
              $res = $pdo-> prepare($sql);
             $res ->execute ();
       



              echo
"<table class ='table'>";
echo "<tr>
<th style = 'text-align : center;' > Nom </th>
<th style = 'text-align : center;'> Prix</th>
<th style = 'text-align : center;'> Commande</th>

    </tr>";
		while ($donnees = $res->fetch())
{
    echo"<tr class='success' style = 'text-align : center;'><td> $donnees[nom] </td><td>$donnees[prix]</td><td> <a href= 'commande2.php?rid=$donnees[rid]'>Commander</a></td></tr> ";
}
echo "</table>";


}catch (Exception $e) {
    echo 'Exception reçue : ',  $e->getMessage(), "\n";
}
echo "<br><br>";   
echo"
<p align = 'center'>
<a href='accueilUser.php' class='btn btn-primary'st>Retour a l'accueil</a>
</p>";
echo "<br><br><br><br><br><br><br><br><br><br>";
include '../footer.php';
?>