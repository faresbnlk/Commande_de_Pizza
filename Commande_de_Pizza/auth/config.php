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

$authTableData = [
    'table' => 'users',
    'idfield' => 'login',
    'cfield' => 'mdp',
    'uidfield' => 'userid',
    'rfield' => 'role',
];

$pathFor = [
    "login"  => "/Commande_de_Pizza/login.php",
    "logout" => "/Commande_de_Pizza/logout.php",
    "adduser" => "/Commande_de_Pizza/adduser.php",
    "root"   => "/Commande_de_Pizza/",
    "home"   => "/Commande_de_Pizza/home.php",
    "accueilAdmin" => "/Commande_de_Pizza/admin/accueilAdmin.php",
    "accueilUser" => "/Commande_de_Pizza/user/accueilUser.php",
    "bootstrap" => "/Commande_de_Pizza/bootstrap.php"

];

const SKEY = '_Redirect';