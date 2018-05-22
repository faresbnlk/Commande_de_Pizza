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
<html lang="fr">
<?php
include 'header.php';
?>


<body background="Design/images/10.jpg"></body>
       
<h1> <p style="text-align:center"><h1/> <tr/>
  <title> Login</title>

<div class="container">
 <div class="row">
  <section class="col-md-12">
  <center>
  <div class="col-sm-4"></div>
  <form class="col-sm-4" action="" method="post" role="form"><br/><br/><br/>
    <legend>Authentifiez-Vous</legend>
      <div class="form-group">
        <label for="login"> login</label>
    
        <input type="text" class="form-control" placeholder ="Votre email" required  name="login">
    
       </div>

       <div class="form-group">
          <label for="mdp">mot de passe</label>
          <input type="password" class="form-control"  placeholder ="******************" required  name="password">
    
       </div>


      <div class="form-group">
        <label>
          <div class="col-sm-3">
            <button type="submit" class="btn btn-primary">Connexion</button>

          </div>
        </label>
      </div>

     
     </form>
    <div class="col-sm-4">
   </div>
  </center>
  </section>
 </div>
</div>

<br></br><br>
<?php
include 'footer.php';
?>

</html>