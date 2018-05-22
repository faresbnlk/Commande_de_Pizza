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
require("auth/EtreAuthentifie.php");
require ('db_config.php');

$identity =  $idm -> getIdentity();



   $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
              $pdo=new PDO($dsn,$username,$password,$pdo_options);
              $sql ="SELECT uid FROM users WHERE login LIKE ?";
              $res = $pdo-> prepare($sql );
             $res ->execute (array($identity));
             $row = $res->fetch();
             $uid = $row["uid"];
             
       



?>