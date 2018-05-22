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
$title="Ajout de l'utilisateur";
include 'header_admin.php';
?>
<p class="error"><?= $error??""?></p>
<!DOCTYPE html>
<html lang="fr">
<head >
 
    <meta charset="UTF-8">
    <title >Ajout Admin</title>
</head>
<body background="../Design/images/8.jpg"></body>


  
    <div >
    

    <div class="container">
    <div class="row">
      <div class="col-md-offset-4 col-md-8 container-fluid">
        <h1 align="left" style="color:#FFFFFF;">Nouveau Admin</h1>
      </div>
  </div>
  <form  method="post" >
  <div class="row">
    <div class="col-md-offset-2 col-md-3">
      <div class="form-group">
        <label style="color:#FFFFFF">Nom</label>
        <input type="text" class="form-control" name="nom" id="nom" placeholder="Nom"  required value="<?= $data['nom']??""?>"><tr><td><span class="error_form" id="nom-error"> </td></tr>
      </div>
    </div>

     <div class="col-md-offset-2 col-md-3">
        <div class="form-group">
          <label  style="color:#FFFFFF"> prenom</label>
          <input type="text" class="form-control"  name="prenom" id="prenom"  placeholder="Prenom"   required aria-required="true" value="<?= $data['prenom']??""?>" ><tr><td><span class="error_form" id="prenom-error"> </td></tr>
      </div>
     </div>
   </div>

   <div class="row">
      <div class="col-md-offset-2 col-md-3">
          <div class="form-group">
          <label style="color:#FFFFFF">Login</label>
          <input type="text" class="form-control" name="login" id="login" placeholder="login"    required value="<?= $data['login']??""?>"><tr><td><span class="error_form" id="login-error"> </td></tr>
      </div>
   </div>
   <div class="col-md-offset-2 col-md-3">
     <div class="form-group">
       <label style="color:#FFFFFF"> Password</label>
       <input type="password" class="form-control" name="mdp" id="password" placeholder="password"   required value=""><tr><td><span class="error_form" id="password-error"> </td></tr>
     </div>
   </div>

     


</div>

 <div class="row">
   
<div class="col-md-offset-2 col-md-3">
     <div class="form-group">
       <label style="color:#FFFFFF">Verification password</label>
       <input type="password" class="form-control" name="mdp2" id="vpassword" placeholder="verification du mot de passe"   required value=""><tr><td><span class="error_form" id="vpassword-error"></td></tr>
     </div>
   </div> 
   

   <div class="col-md-offset-2 col-md-3">
      <div class="form-group">
    <label for="exampleFormControlSelect1">Role</label>
    <select class="form-control" id="role" name="role">
      <option>admin</option>
      
    </select>
  </div>
   </div> 
   
 </div>
 <div class="row">

   <div class="col-md-offset-5 col-md-6">

 <button type="submit" class="btn btn-success">Valider</button>
     </div>
   </div>
</div>
    </div>
  </div>


   <script src="bower_components/jquery/dist/jquery.js"></script>
    <script src="bower_components/jquery/dist/bootstrap.min.js"></script>

<script type="text/javascript">
  $(document).ready(function(){
    $(window).scroll(function () {
      if ($(this).scrollTop() > 50) {
        $('#back-to-top').fadeIn();
      } else {
        $('#back-to-top').fadeOut();
      }
    });
        // scroll body to 0px on click
        $('#back-to-top').click(function () {
          $('#back-to-top').tooltip('hide');
          $('body,html').animate({
            scrollTop: 0
          }, 800);
          return false;
        });
        
        $('#back-to-top').tooltip('show');

      });
    </script>

</body>
<br><br><br><br><br><br><br><br><br><br>

<?php include 'footer_admin.php'; ?>

