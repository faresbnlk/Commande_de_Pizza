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


$sid=$_GET['sid'];
	
	try {
		$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
		$pdo=new PDO($dsn,$username,$password,$pdo_options);
		$sql ="SELECT prix FROM supplements WHERE sid=? ";
		$res =$pdo->prepare($sql);
		$res ->execute(array($sid));
		$row = $res->fetch();
		@$prix = $row['prix'];
	}catch(Exception $e){
		http_response_code(500);
		echo "Erreur de serveur.";
		exit();
	}
	
	try {
		$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
		$pdo=new PDO($dsn,$username,$password,$pdo_options);
		$sql ="SELECT nom FROM supplements WHERE sid=? ";
		$res =$pdo->prepare($sql);
		$res ->execute(array($sid));
		$row = $res->fetch();
		@$nom = $row['nom'];
		
	}catch(Exception $e){
		http_response_code(500);
		echo "Erreur de serveur.";
		exit();
	}
	?>
	<body background="../Design/images/8.jpg"></body>'
	<h1> <p style="text-align:center">Modifier Un Supplément<h1/> <tr/>
	<form methode='post' action='modif_2.php' >

		<table class="table table-striped">
			<tr>
				<th> nom</th>
				<th> prix </th>
				

			</tr>

			<tr>
				<input type ='hidden' name='id' value="<?php echo $sid ;?>">
				<td><input type='text' name ='nom' value ="<?php echo $nom;?>" ></td>
				<td> <input type='number' name ='prix' step='0.01' min="0" value="<?php echo $prix;?>" required value=''></td>
			</tr>
		</table>
		<input type="submit"  class="btn btn-success"  value="Modifier">
	</form>

	<script type="text/javascript">
		myfunction(){
			var p =Confirm("supplement modifié retourner a la page d'accueil en cliquant sur ok ")
			if (p) {
				document.location.href="accueilAdmin.php";
			}else{
				document.location.href='modifier_supplement.php';
			}
		}
	</script>
	<br><br><br><br><br><br>
	<?php  
	include "footer_admin.php";
	?>
