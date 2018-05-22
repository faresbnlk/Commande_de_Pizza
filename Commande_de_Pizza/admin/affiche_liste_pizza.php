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
 <?php
 include "bootstrap.php";
 include "header_admin.php";
 
require("../auth/EtreAuthentifie.php");
require ('../db_config.php');
?>

<body background="../Design/images/8.jpg"></body>

<h1> <p style="text-align:center">Les Pizzas <h1/> <tr/>

<?php



              $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
              $pdo=new PDO($dsn,$username,$password,$pdo_options);
              $sql ="SELECT * FROM recettes";
              $res = $pdo-> prepare($sql);
             $res ->execute ();
       


              
              echo
"<table class ='table table-striped table-dark'>";
echo "<tr>
<th style = 'text-align : center;' > Nom </th>
<th style = 'text-align : center;'> Prix</th>
    </tr>";
		while ($donnees = $res->fetch())

{
    echo"<tr style = 'text-align : center;'><td> $donnees[nom] </td><td>$donnees[prix]</td></tr> ";
}
echo "</table>";
   ?>

<?php 
include "footer_admin.php";
?>

 </html>