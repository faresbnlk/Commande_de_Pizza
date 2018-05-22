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
<html>
<head>
  <title>Ajout Supplément</title>
  <?php
include 'header_admin.php'; 
?>
</head>
 <body background="../Design/images/1.jpg"></body>
<br></br>
<div align="center">
  <h1> <p style="text-align:center">Ajouter Un Supplément<h1/> <tr/>
   <br>
<tr/>
    <form method="POST" action="ajout_suppl_traitemet.php">

      <table>
      
        
        <tr>
        <td>
          <label for="Titre">Nom </label>
        </td>
        <td>
          <input type="text" name="nom" required ="" placeholder="Nom" >
        </td>
        </tr>
        <tr>
        <td>
          <label for="prix" >Prix </label>
          
        </td>
        <td>
         <input type="number" placeholder="Prix" step='0.01' min="0"  name="prix">
        </td>
        </tr>
        
        <tr>

      </table>
      <tr>
        <td></td>
        <br><br>
      <input type="submit" class="btn btn-primary" name="Ajout" value="Ajouter">
          <td></td>
        </tr>
    </form>
  </tr>
  <br><br><br><br><br><br>
 <footer>
    <?php include 'footer_admin.php'; ?>
  </footer>
  </html>