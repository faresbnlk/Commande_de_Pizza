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
 <title>Supprimer Un Supplément</title>
 <?php
require("../auth/EtreAuthentifie.php");
require ('../db_config.php');
include "header_admin.php";


              $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
              $pdo=new PDO($dsn,$username,$password,$pdo_options);
              $sql ="SELECT * FROM supplements";
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
    <td><a  href ='supp_supplement_traitement.php?sid=$donnees[sid]' title='suprimer un supplement' >supprimer </a></td>
    </tr> ";
}
echo "</table>";


include "footer_admin.php";
   ?>


