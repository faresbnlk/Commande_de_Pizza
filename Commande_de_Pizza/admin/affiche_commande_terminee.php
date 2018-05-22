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
 <title>Commnades en Términée</title>
<html>
 <?php
 include "header_admin.php";
 
require("../auth/EtreAuthentifie.php");
require ('../db_config.php');
?>

<body background="../Design/images/8.jpg"></body>

<h1> <p style="text-align:center">Les Commandes Términées<h1/> <tr/>



<?php


$status2 ="terminee";




   $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
              $pdo=new PDO($dsn,$username,$password,$pdo_options);
              $sql ="SELECT * FROM commandes where  statut LIKE ?";
              $res = $pdo-> prepare($sql);
              $res->execute(array($status2));
              $check= count($res->fetchAll());
             
    if ($check==0) {
      ?>
        <script type="text/javascript">
          alert('vous n\'avez aucune commande reçue !');
          document.location.href="accueilAdmin.php";
        </script>
      <?php
    
}else{


              $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
              $pdo=new PDO($dsn,$username,$password,$pdo_options);
              $sql ="SELECT * FROM commandes WHERE statut LIKE ?";
              $res = $pdo-> prepare($sql);
              $res->execute(array($status2));

             $res ->execute ();
       


              
              echo
"<table class ='table table-striped table-dark'>";
echo "<tr>
<th style = 'text-align : center;' > Référence </th>
<th style = 'text-align : center;'> Date d'enregistrement</th>
<th style = 'text-align : center;'> Statut</th>

    </tr>";
		while ($donnees = $res->fetch())
{
    echo"<tr class='success' style = 'text-align : center;'><td> $donnees[ref] </td><td>$donnees[date]</td> <td>$donnees[statut]</td><td><a href= 'preparation.php?cid=$donnees[cid]'></tr>";
}
echo "</table>";
}
echo "<br><br><br><br><br>
<br><br><br><br><br>";
include "footer_admin.php";
   ?>