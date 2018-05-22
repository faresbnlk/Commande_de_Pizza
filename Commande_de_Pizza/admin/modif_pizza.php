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
 
require("../auth/EtreAuthentifie.php");
require ('../db_config.php');
include "header_admin.php";

echo '<h1> <p style="text-align:center">Modifier Les Pizzas<h1/> <tr/>';

              $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
              $pdo=new PDO($dsn,$username,$password,$pdo_options);
              $sql ="SELECT * FROM recettes";
              $res = $pdo-> prepare($sql);
             $res ->execute ();
       

echo '<body background="../Design/images/8.jpg"></body>';
              
              
              echo
"<table cellpadding='0' cellspacing='0' class='table'>";
echo "<tr>
<th > Nom </th>
<th> Prix</th>
<th> modifier</th>
  
    </tr>";
		while ($donnees = $res->fetch())
{
    echo"<tr>
    <td> $donnees[nom] </td>
    <td>$donnees[prix]</td>
    <td><a  href ='modifTraitement.php?rid=$donnees[rid]' title='suprimer une commande' >modifier </a></td>
    </tr> ";
}
echo "</table>";


include "footer_admin.php";
   ?>
