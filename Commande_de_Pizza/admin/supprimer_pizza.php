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


              $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
              $pdo=new PDO($dsn,$username,$password,$pdo_options);
              $sql ="SELECT * FROM recettes";
              $res = $pdo-> prepare($sql);
             $res ->execute ();
       

             echo '<body background="../Design/images/8.jpg"></body>';
              echo '<h1> <p style="text-align:center"><h1/> <tr/>';
              echo
"<table cellpadding='0' cellspacing='0' class='table'>";
echo "<tr>
<th> Nom </th>
<th> Prix</th>
<th> supprimer</th>
  
    </tr>";
		while ($donnees = $res->fetch())
{
    echo"<tr>
    <td> $donnees[nom] </td>
    <td>$donnees[prix]</td>
    <td><a  href ='supptraitement.php?rid=$donnees[rid]' title='suprimer une commande' >supprimer </a></td>
    </tr> ";
}
echo "</table>";

//echo " Vous etes sur l'espace admin";


include "footer_admin.php";
   ?>
