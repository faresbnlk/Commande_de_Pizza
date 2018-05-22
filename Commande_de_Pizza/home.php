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

$title = 'Accueil';
include("header.php");
?>

<a href="<?= $pathFor['logout'] ?>" title="Logout">Logout</a>

<?php



if ($idm ->getRole() == 'admin'){
	    redirect($pathFor['accueilAdmin']);

}
else if ($idm -> getRole() == 'user'){
	    redirect($pathFor['accueilUser']);

}





//echo "Escaped values: ".$e_($ci->idm->getIdentity());


include("footer.php");