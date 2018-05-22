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
  <title>Toutes Les Commandes</title>
 <?php 
require("../getUidFunction.php");
include'header_admin.php';
?>
</head>
<body>

  <body background="../Design/images/8.jpg"></body>
      
<?php

echo '<div class="well well-lg">
  <h1 style="text-align: center;" class="az"> Liste de toutes Les Commandes Passées y Compris le Prix</h1>
</div>';


echo '<h1 style="text-align: center;" class="az">Commande avec supplements</h1>';






try{
   $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
              $pdo=new PDO($dsn,$username,$password,$pdo_options);
              $sql ="SELECT ref, users.nom AS Client, date , statut , recettes.nom AS pizzaNom , recettes.prix + supplements.prix AS PrixTotal, supplements.nom as suppNom FROM extras INNER JOIN supplements on extras.sid = supplements.sid INNER JOIN commandes ON extras.cid = commandes.cid INNER JOIN recettes ON commandes.rid = recettes.rid INNER JOIN users ON users.uid = commandes.uid ORDER BY users.uid";
              $res = $pdo-> prepare($sql);
             $res ->execute ();
       



              echo
"<table class ='table'>";
echo "<tr>
<th style = 'text-align : center;' > CommandeRef </th>
<th style = 'text-align : center;' > Commandée Par </th>
<th style = 'text-align : center;'> Date</th>
<th style = 'text-align : center;'> Statut</th>
<th style = 'text-align : center;'> NomPizza</th>
<th style = 'text-align : center;'> NomSupplements</th>
<th style = 'text-align : center;'> PrixTotal</th>





    </tr>";
    while ($donnees = $res->fetch())
{
    echo"<tr class='success' style = 'text-align : center;'><td> $donnees[ref] </td><td> $donnees[Client] </td><td> $donnees[date] </td><td> $donnees[statut] </td><td> $donnees[pizzaNom] </td><td> $donnees[suppNom] </td> <td>$donnees[PrixTotal]</td></tr> ";
}
echo "</table>";


echo '<h1 style="text-align: center;" class="az">Commande sans supplements</h1>';
try{
   $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
              $pdo=new PDO($dsn,$username,$password,$pdo_options);
              $sql ="SELECT ref, users.nom AS client, date, statut, recettes.nom, recettes.prix FROM commandes INNER JOIN users ON users.uid = commandes.uid LEFT JOIN extras ON commandes.cid = extras.cid INNER JOIN recettes ON recettes.rid = commandes.rid WHERE extras.cid IS null ORDER BY users.uid";
              $res = $pdo-> prepare($sql);
             $res ->execute ();
       



              echo
"<table class ='table'>";
echo "<tr>
<th style = 'text-align : center;' > CommandeRef </th>
<th style = 'text-align : center;' > Commandée Par </th>
<th style = 'text-align : center;'> Date</th>
<th style = 'text-align : center;'> Statut</th>
<th style = 'text-align : center;'> NomPizza</th>
<th style = 'text-align : center;'> Prix</th>



    </tr>";
    while ($donnees = $res->fetch())
{
    echo"<tr class='success' style = 'text-align : center;'><td> $donnees[ref] </td><td> $donnees[client] </td><td> $donnees[date] </td><td> $donnees[statut] </td><td> $donnees[nom] </td><td>$donnees[prix]</td></tr> ";
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