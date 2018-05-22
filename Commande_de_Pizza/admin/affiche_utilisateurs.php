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
<html>
<title> Liste des Utilisateurs</title>
 <?php
 include "bootstrap.php";
 include "header_admin.php";
 
require("../auth/EtreAuthentifie.php");
require ('../db_config.php');
?>

<body background="../Design/images/8.jpg"></body>

<h1> <p style="text-align:center">Les Utilisateurs : Admin/User <h1/> <tr/>

<?php


              $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
              $pdo=new PDO($dsn,$username,$password,$pdo_options);
              $sql ="SELECT * FROM users";
              $res = $pdo-> prepare($sql);
              $res->execute(array(@$roles));              
              echo
"<table class ='table table-striped table-dark'>";
echo "<tr>
<th style = 'text-align : center;' > Nom </th>
<th style = 'text-align : center;'> Prénom</th>
<th style = 'text-align : center;'> Role</th>
    </tr>";
		while ($donnees = $res->fetch())
{
    echo"<tr class='success' style = 'text-align : center;'><td> $donnees[nom] </td><td>$donnees[prenom]</td><td>$donnees[role]</td>";
}
echo "</table>";

echo'<br>';
include "footer_admin.php";
   ?>