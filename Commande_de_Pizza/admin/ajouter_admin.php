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
<title> Ajout Admin</title>
 <?php
 include "bootstrap.php";
 include "header_admin.php";
 
require("../auth/EtreAuthentifie.php");
require ('../db_config.php');
?>

<body background="../Design/images/8.jpg"></body>

<h1> <p style="text-align:center">Les Utilisateurs <h1/> <tr/>

<?php
$roles = "user";

              $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
              $pdo=new PDO($dsn,$username,$password,$pdo_options);
              $sql ="SELECT * FROM users WHERE role LIKE ?";
              $res = $pdo-> prepare($sql);
              $res->execute(array($roles));              
              echo
"<table class ='table table-striped table-dark'>";
echo "<tr>
<th style = 'text-align : center;' > Nom </th>
<th style = 'text-align : center;'> Prénom</th>
<th style = 'text-align : center;'> Role</th>
<th style = 'text-align : center;'> Action</th>
    </tr>";
		while ($donnees = $res->fetch())
{
    echo"<tr class='success' style = 'text-align : center;'><td> $donnees[nom] </td><td>$donnees[prenom]</td><td>$donnees[role]</td><td><a href= 'userToAdmin.php?uid=$donnees[uid]'>Rendre Admin</a></td> </tr></tr> ";
}
echo "</table>";

echo'<br><br><br>';
include "footer_admin.php";
   ?>