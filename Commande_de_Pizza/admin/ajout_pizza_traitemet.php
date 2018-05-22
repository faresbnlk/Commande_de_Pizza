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

 ?>
<?php
/*******************/

/*recuperation des variables*/
@$prix =$_POST["prix"];
@$nom = $_POST["nom"];




    try{
      $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
      $pdo=new PDO($dsn,$username,$password);
      $sql="INSERT INTO recettes(nom,prix)VALUES(:nom,:prix)";
      $res=$pdo->prepare($sql);
      $res->execute(array('nom'=>$nom,
       'prix'=>$prix,
       ));
      $id = $db->lastInsertId();
      $res->closeCursor();
         ?><script type="text/javascript">
       var p = confirm('La recette ajoutée avec succes voulez vous en ajouter une autre  ?');
       if (p) {
        document.location.href='ajouter_pizza.php';
      }else{
        document.location.href='affiche_liste_pizza.php';
      }
      </script>     
<?php
    }catch(Exception $e){
      http_response_code(500);
      echo "Erreur de serveur.";
      exit();
    }
    
  


?>