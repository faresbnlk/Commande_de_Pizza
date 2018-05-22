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
$sid = $_GET ["sid"];

require("../getUidFunction.php");

$sid = $_GET['sid'];
$cid =$_GET['cid'];
echo $sid;
echo $cid;

$pdo=new PDO($dsn,$username,$password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		try{
			$sql ="INSERT INTO extras  VALUES (?,?) ";
			$res=$pdo->prepare($sql);
			$res->execute(array($cid,$sid));
			?>
			<script type="text/javascript">
			var conf =confirm('supplément ajouté avec succes , pour ajouter une autre commande, cliquer sur ok  ');
			if (conf) {
				document.location.href='commande.php';
			}else{
				document.location.href='accueilUser.php';
			}
		</script>
			
			<?php
		
	}catch (Exception $e) {
    echo 'Exception reçue : ',  $e->getMessage(), "\n";
}require ('../db_config.php');


?>