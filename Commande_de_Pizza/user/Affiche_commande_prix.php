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
  <title>Historique</title>
 <?php 
require("../getUidFunction.php");
include'header_admin.php';
?>
</head>
<body>

  <body background="../Design/images/8.jpg"></body>
      
<?php

echo '<div class="well well-lg">
  <h1 style="text-align: center;" class="az">Historique de commandes Passées</h1>
</div>';


echo '<h1 style="text-align: center;" class="az">Commande avec supplements</h1>';






try{
   $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
              $pdo=new PDO($dsn,$username,$password,$pdo_options);
              $sql ="SELECT ref , date , statut , recettes.nom AS pizzaNom , recettes.prix AS pizzaPrix, supplements.nom as suppNom , supplements.prix AS suppPrix FROM extras INNER JOIN supplements on extras.sid = supplements.sid INNER JOIN commandes ON extras.cid = commandes.cid INNER JOIN recettes ON commandes.rid = recettes.rid";
              $res = $pdo-> prepare($sql);
             $res ->execute ();
       



              echo
"<table class ='table'>";
echo "<tr>
<th style = 'text-align : center;' > ref </th>
<th style = 'text-align : center;'> date</th>
<th style = 'text-align : center;'> status</th>
<th style = 'text-align : center;'> nom pizza</th>
<th style = 'text-align : center;'> prix pizza</th>
<th style = 'text-align : center;'> nom supplements</th>
<th style = 'text-align : center;'> prix supplements</th>





    </tr>";
    while ($donnees = $res->fetch())
{
    echo"<tr class='success' style = 'text-align : center;'><td> $donnees[ref] </td><td> $donnees[date] </td><td> $donnees[statut] </td><td> $donnees[pizzaNom] </td><td>$donnees[pizzaPrix]</td> <td> $donnees[suppNom] </td> <td>$donnees[suppPrix]</td></tr> ";
}
echo "</table>";


echo '<h1 style="text-align: center;" class="az">Commande sans supplements</h1>';
try{
   $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
              $pdo=new PDO($dsn,$username,$password,$pdo_options);
              $sql ="SELECT * FROM commandes LEFT JOIN extras ON commandes.cid = extras.cid INNER JOIN recettes ON recettes.rid = commandes.rid WHERE extras.cid IS null";
              $res = $pdo-> prepare($sql);
             $res ->execute ();
       



              echo
"<table class ='table'>";
echo "<tr>
<th style = 'text-align : center;' > ref </th>
<th style = 'text-align : center;'> date</th>
<th style = 'text-align : center;'> status</th>
<th style = 'text-align : center;'> nom</th>
<th style = 'text-align : center;'> prix</th>



    </tr>";
    while ($donnees = $res->fetch())
{
    echo"<tr class='success' style = 'text-align : center;'><td> $donnees[ref] </td><td> $donnees[date] </td><td> $donnees[statut] </td><td> $donnees[nom] </td><td>$donnees[prix]</td></tr> ";
}
echo "</table>";


}catch (Exception $e) {
    echo 'Exception reçue : ',  $e->getMessage(), "\n";
}
   
echo"
<p align = 'center'>
<a href='accueilUser.php' class='btn btn-danger'st>Retour a l'accueil</a>
</p>";

}catch (Exception $e) {
    echo 'Exception reçue : ',  $e->getMessage(), "\n";
}
include '../footer.php';
?>