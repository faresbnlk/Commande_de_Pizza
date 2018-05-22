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
<title> Les Suppléments</title>
 <?php
 include "bootstrap.php";
 include "header_admin.php";
 
require("../auth/EtreAuthentifie.php");
require ('../db_config.php');
?>

<body background="../Design/images/8.jpg"></body>

<h1> <p style="text-align:center">Les Suppléments <h1/> <tr/>

  <?php

              $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
              $pdo=new PDO($dsn,$username,$password,$pdo_options);
              $sql = "SELECT * FROM supplements";
              $req = $pdo -> prepare($sql);
              $req -> execute();


              echo
"<table class ='table table-striped table-dark'>";
echo "<tr>
<th> Nom </th>
<th> Prix</th>
  
    </tr>";
		while ($donnees = $req->fetch())
{
    echo"<tr><td> $donnees[nom] </td><td>$donnees[prix]</td></tr> ";
}
echo "</table> 
<br/>
";
include "footer_admin.php";
?>


