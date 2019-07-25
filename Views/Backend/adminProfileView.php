<?php $this->title = 'Gestion du Profil'; ?>




<?php

/* if (isset($_SESSION['id']) && $_SESSION['username'] === $user->username()) */

if (isset($_SESSION['id'])){
?>







<h1 class="text-center titlePage"><?= $this->title = 'Gestion du profil' ?></h1>
<br />
<br />
<br />
<hr class="hr"/>

<div class="container">
    <div class="row text-center">
        
          <div class="col-12">
               <fieldset class="border p-2">
                       <legend  class="w-auto">Informations concertant <?= $user->username(); ?> BDD</legend>
                           <span>(seul le mot de passe n'est pas affiché, car crypté)</span><br />
                            id: <?= $user->id(); ?><br />
                            username: <?= $user->username(); ?><br />
                            firstname: <?= $user->firstname(); ?><br />
                            lastname: <?= $user->lastname(); ?><br />
                            email: <?= $user->email(); ?><br />
                            profession: <?= $user->profession(); ?><br />
                            description: <?= $user->description(); ?><br />
                            avatar: <?= $user->avatar(); ?><br />
                            mini_avatar: <?= $user->mini_avatar(); ?><br />
              </fieldset>
            </div>
    </div>
</div>

<br />
<br />
<br />
<hr class="hr"/>






<!-- USERNAME -->

<div class="container mt-5 mb-5">
   
   
   <div class="row text-center">

        <div class="col-12" id="username"><span class="username_profile"><b>Pseudo : <i><?= $user->username(); ?></i></b></span><br />
                <button class="btn_update_username_profile btn btn-primary mx-auto mt-3" >Modifier votre pseudo <?= '\'' . $user->username() . '\'' ?> ici</button><br />
            <div class="popup_update_username_profile">
                <p><span class="btn_closePopupUsername">&times;</span></p>

                <h4><u>MODIFIFICATION DU PSEUDO <?= '\'' . $user->username() . '\'' ?></u></h4>

                <form method="POST" action="index.php?action=profileUsername&id=<?= $user->id() ?>" >
                    <tr>      
                        <td>
                            <label class="label_update_username" for="newUsername">Modifier votre pseudo <?= '\'' . $user->username() . '\'' ?> : </label> 
                        </td>

                        <td>
                            <input type="text" placeholder="Votre nouveau pseudo" id="newUsername" name="newUsername" size="30" class="input_username btn btn-primary mx-auto mt-3" />
                        </td>       
                    </tr>

                    <tr>

                        <td colspan="2">
                        <br />
                            <input type="submit" value="Mettre à jour" id="btn_submit_update_username_profile" name="btn_submit_update_username_profile" class="btn btn-primary mx-auto mt-3" />
                        </td>

                        <td></td>

                    </tr>
                </form>
            </div>
        </div>

   </div><!-- row -->
    
    
</div><!-- .container -->


<!-- END USERNAME -->













<!-- AVATAR -->
<?php
    if (empty($user->avatar())) 
    {       
?>
    
<div class="container">
    
   <div class="row text-center">
    
        <div class="col-12" id="avatar">
                <label><b>Avatar: </b></label><br /><img class="avatar_profile" src="Content/img/users/avatars/no_avatar.jpg" alt="avatar" /><br />

                <button class="btn_update_avatar_profile btn btn-primary mx-auto mt-5" >Ajouter un avatar à <?= '\'' . $user->username() . '\'' ?> ici</button><br /> 

                <!-- <div class="success"><?php if (isset($success['profileAvatar'])) echo $success['profileAvatar']; ?></div> -->  

                <div class="popup_update_avatar_profile mt-5">
                    <p><span class="btn_closePopupAvatar">&times;</span></p> 

                    <h4><u>AJOUTER UN AVATAR À <?= '\'' . strtoupper($user->username()) . '\'' ?></u></h4>


                    <form method="post" action="index.php?action=profileAvatar&id=<?= $user->id() ?>" enctype="multipart/form-data">

                        <tr>

                           <td align="right">
                                <label class="label" for="avatar_field">Sélectionnez votre avatar (ou photo de votre profil) au format jpg, jpeg, png ou gif (taille Max = 2Mo) : </label> 
                           </td>

                           <td>
                                <input type="file" id="avatar_field" name="avatar_field" class="input_avatar btn btn-primary mx-auto mt-3" />
                           </td>

                       </tr>

                       <tr>

                           <td colspan="2">
                                <br />
                                <input type="submit" value="Ajouter l'avatar sélectionné" name="btn_submit_form_update_avatar" class="input_avatar btn btn-primary mx-auto mt-3"/>
                           </td>

                            <td></td>

                       </tr>

                    </form>

                </div>

                <!-- <div class="error"><?php if (isset($error['profileAvatar'])) echo $error['profileAvatar']; ?></div> -->

        </div>
        
        
        
     </div><!-- .row -->
             
</div><!-- .conatainer -->    
 
    
       
          
                
<?php
    } else {
    ?>
    
    
<div class="container">
   
   
   <div class="row text-center">
      
      
        <div class="col-12" id="avatar">
           <label><b>Votre avatar: </b></label><br /><img class="avatar_profile"  src="Content/img/users/avatars/<?= $user->avatar() ?>" alt="avatar" /><br />
           
           <button class="btn_update_avatar_profile btn btn-primary mx-auto mt-5" >Modifier l'avatar de <?= '\'' . $user->username() . '\'' ?> ici</button><br />
           
           <!-- <div class="success"><?php if (isset($success['profileAvatar'])) echo $success['profileAvatar']; ?></div> -->
           
           <div class="popup_update_avatar_profile">
               <p><span class="btn_closePopupAvatar">&times;</span></p>
               
                <h4><u>MODIFIER L'AVATAR DE <?= '\'' . strtoupper($user->username()) . '\'' ?></u></h4> 
                
                
                <form method="post" action="index.php?action=profileAvatar&id=<?= $user->id() ?>" enctype="multipart/form-data">
                    
                    <tr>
                      
                       <td align="right">
                            <label class="label" for="avatar_field">Sélectionnez votre avatar (ou photo de votre profil) au format jpg, jpeg, png ou gif (taille Max = 2Mo) : </label> 
                       </td>
                       
                       <td>
                            <input type="file" id="avatar_field" name="avatar_field" class="input_avatar btn btn-primary mx-auto mt-3"/>
                       </td>
                       
                    </tr>
                     
                    <tr>
                      
                       <td colspan="2">
                            <br />
                            <input type="submit" value="Mettre à jour l'avatar" name="btn_submit_form_update_avatar" class="input_avatar btn btn-primary mx-auto mt-3" />
                       </td>
                       
                       <td></td>
                       
                   </tr>
                    
                </form>
                
                
               
            </div>
            
            <div class="popup_delete_avatar_profil">
            <form method="post" action="index.php?action=profileDeleteAvatar&id=<?= $user->id() ?>" enctype="multipart/form-data">
                     
                    <tr>
                      
                       <td colspan="2">
                            <br />
                            <input type="submit" value="Supprimer l'avatar" name="btn_submit_form_delete_avatar" class="input_avatar btn btn-primary mx-auto mt-3" />
                       </td>
                       
                       <td></td>
                       
                   </tr>
                    
            </form>
            </div>
            
            
            <!-- <div class="error"><?php if (isset($error['profileAvatar'])) echo $error['profileAvatar']; ?></div> -->
            
        </div>
      
      
  
   </div><!-- row -->
    
    
</div><!-- .container -->
  

   
<?php
    } 
?> 

<!-- END AVATAR -->











<!-- MINI-AVATAR -->
<?php
    if (empty($user->mini_avatar())) 
    {       
?>
    
<div class="container mt-5">
    
   <div class="row text-center">
    
        <div class="col-12" id="mini_avatar">
                <label><b>Mini-avatar: </b></label><br /><img class="mini_avatar_profile" src="Content/img/users/mini_avatars/no_mini_avatar.jpg" alt="avatar" /><br />

                <button class="btn_update_mini_avatar_profile btn btn-primary mx-auto mt-5" >Ajouter un mini-avatar à <?= '\'' . $user->username() . '\'' ?> ici</button><br /> 

                <!-- <div class="success"><?php if (isset($success['profileAvatar'])) echo $success['profileAvatar']; ?></div> -->  

                <div class="popup_update_mini_avatar_profile mt-5">
                    <p><span class="btn_closePopupMiniAvatar">&times;</span></p> 

                    <h4><u>AJOUTER UN MINI-AVATAR À <?= '\'' . strtoupper($user->username()) . '\'' ?></u></h4>


                    <form method="post" action="index.php?action=profileMiniAvatar&id=<?= $user->id() ?>" enctype="multipart/form-data">

                        <tr>

                           <td align="right">
                                <label class="label" for="mini_avatar_field">Sélectionnez votre avatar (ou photo de votre profil) au format jpg, jpeg, png ou gif (taille Max = 2Mo) : </label> 
                           </td>

                           <td>
                                <input type="file" id="mini_avatar_field" name="mini_avatar_field" class="input_mini_avatar btn btn-primary mx-auto mt-3" />
                           </td>

                       </tr>

                       <tr>

                           <td colspan="2">
                                <br />
                                <input type="submit" value="Ajouter un mini_avatar sélectionné" name="btn_submit_form_update_mini_avatar" class="input_mini_avatar btn btn-primary mx-auto mt-3"/>
                           </td>

                            <td></td>

                       </tr>

                    </form>

                </div>

                <!-- <div class="error"><?php if (isset($error['profileAvatar'])) echo $error['profileAvatar']; ?></div> -->

        </div>
        
        
        
     </div><!-- .row -->
             
</div><!-- .conatainer -->    
 
    
       
          
                
<?php
    } else {
    ?>
    
    
<div class="container mt-5">
   
   
   <div class="row text-center">
      
      
        <div class="col-12" id="mini_avatar">
           <label><b>Votre mini-avatar: </b></label><br /><img class="mini_avatar_profile"  src="Content/img/users/mini_avatars/<?= $user->mini_avatar() ?>" alt="avatar" /><br />
           
           <button class="btn_update_mini_avatar_profile btn btn-primary mx-auto mt-5" >Modifier l'avatar de <?= '\'' . $user->username() . '\'' ?> ici</button><br />
           
           <!-- <div class="success"><?php if (isset($success['profileAvatar'])) echo $success['profileAvatar']; ?></div> -->
           
           <div class="popup_update_mini_avatar_profile">
               <p><span class="btn_closePopupMiniAvatar">&times;</span></p>
               
                <h4><u>MODIFIER LE MINI-AVATAR DE <?= '\'' . strtoupper($user->username()) . '\'' ?></u></h4> 
                
                
                <form method="post" action="index.php?action=profileMiniAvatar&id=<?= $user->id() ?>" enctype="multipart/form-data">
                    
                    <tr>
                      
                       <td align="right">
                            <label class="label" for="mini_avatar_field">Sélectionnez votre avatar (ou photo de votre profil) au format jpg, jpeg, png ou gif (taille Max = 2Mo) : </label> 
                       </td>
                       
                       <td>
                            <input type="file" id="mini_avatar_field" name="mini_avatar_field" class="input_mini_avatar btn btn-primary mx-auto mt-3"/>
                       </td>
                       
                    </tr>
                     
                    <tr>
                      
                       <td colspan="2">
                            <br />
                            <input type="submit" value="Mettre à jour le mini-avatar" name="btn_submit_form_update_mini_avatar" class="input_avatar btn btn-primary mx-auto mt-3" />
                       </td>
                       
                       <td></td>
                       
                   </tr>
                    
                </form>
                
                
               
            </div>
            
            <div class="popup_delete_mini_avatar_profil">
            <form method="post" action="index.php?action=profileDeleteMiniAvatar&id=<?= $user->id() ?>" enctype="multipart/form-data">
                     
                    <tr>
                      
                       <td colspan="2">
                            <br />
                            <input type="submit" value="Supprimer le mini-avatar" name="btn_submit_form_delete_avatar" class="input_avatar btn btn-primary mx-auto mt-3" />
                       </td>
                       
                       <td></td>
                       
                   </tr>
                    
            </form>
            </div>
            
            
            <!-- <div class="error"><?php if (isset($error['profileAvatar'])) echo $error['profileAvatar']; ?></div> -->
            
        </div>
      
      
  
   </div><!-- row -->
    
    
</div><!-- .container -->
  

   
<?php
    } 
?> 

<!-- END MINI-AVATAR -->






<!-- FIRSTNAME -->

<div class="container mt-5 mb-5">
   
   
   <div class="row text-center">

        <div class="col-12" id="firstname"><span class="firstname_profile"><b>PRÉNOM : <i><?= $user->firstname(); ?></i></b></span><br />
                <button class="btn_update_firstname_profile btn btn-primary mx-auto mt-3" >Modifier votre prénom <?= '\'' . $user->firstname() . '\'' ?> ici</button><br />
            <div class="popup_update_firstname_profile">
                <p><span class="btn_closePopupFirstname">&times;</span></p>

                <h4><u>MODIFIFICATION DU PRÉNOM <?= '\'' . $user->firstname() . '\'' ?></u></h4>

                <form method="POST" action="index.php?action=profileFirstname&id=<?= $user->id() ?>" >
                    <tr>      
                        <td>
                            <label class="label_update_firstname" for="newfirstname">Modifier votre prénom <?= '\'' . $user->firstname() . '\'' ?> : </label> 
                        </td>

                        <td>
                            <input type="text" placeholder="Votre nouveau prénom" id="newfirstname" name="newfirstname" size="30" class="input_firstname btn btn-primary mx-auto mt-3" />
                        </td>       
                    </tr>

                    <tr>

                        <td colspan="2">
                        <br />
                            <input type="submit" value="Mettre à jour" id="btn_submit_update_firstname_profile" name="btn_submit_update_firstname_profile" class="btn btn-primary mx-auto mt-3" />
                        </td>

                        <td></td>

                    </tr>
                </form>
            </div>
        </div>

   </div><!-- row -->
    
    
</div><!-- .container -->


<!-- END FIRSTNAME -->



<!-- LASTNAME -->

<div class="container mt-5 mb-5">
   
   
   <div class="row text-center">

        <div class="col-12" id="lastname"><span class="lastname_profile"><b>NOM : <i><?= $user->lastname(); ?></i></b></span><br />
                <button class="btn_update_lastname_profile btn btn-primary mx-auto mt-3" >Modifier votre nom <?= '\'' . $user->lastname() . '\'' ?> ici</button><br />
            <div class="popup_update_lastname_profile">
                <p><span class="btn_closePopupLastname">&times;</span></p>

                <h4><u>MODIFIFICATION DU NOM <?= '\'' . $user->lastname() . '\'' ?></u></h4>

                <form method="POST" action="index.php?action=profileLastname&id=<?= $user->id() ?>" >
                    <tr>      
                        <td>
                            <label class="label_update_lastname" for="newlastname">Modifier votre nom <?= '\'' . $user->lastname() . '\'' ?> : </label> 
                        </td>

                        <td>
                            <input type="text" placeholder="Votre nouveau nom" id="newlastname" name="newlastname" size="30" class="input_lastname btn btn-primary mx-auto mt-3" />
                        </td>       
                    </tr>

                    <tr>

                        <td colspan="2">
                        <br />
                            <input type="submit" value="Mettre à jour" id="btn_submit_update_lastname_profile" name="btn_submit_update_lastname_profile" class="btn btn-primary mx-auto mt-3" />
                        </td>

                        <td></td>

                    </tr>
                </form>
            </div>
        </div>

   </div><!-- row -->
    
    
</div><!-- .container -->


<!-- END LASTNAME -->









<!-- EMAIL -->


<?php
    if (empty($user->email())) 
    {       
?>
  
<div class="container mt-5 mb-5">
   
   
   <div class="row text-center">

        <div class="col-12" id="email"><span class="email_profile"><b>Vous n'avez pas inscrit votre e-mail</i></b></span><br /> 
                <button class="btn_update_email_profile btn btn-primary mx-auto mt-3" >Ajouter l'email de <?= '\'' . $user->username() . '\'' ?> ici</button><br /> 
            <div class="popup_update_email_profile">
                <p><span class="btn_closePopupEmail">&times;</span></p>

                <h4><u>AJOUTER UN E-MAIL À <?= '\'' . $user->username() . '\'' ?></u></h4>

                <form method="POST" action="index.php?action=profileEmail&id=<?= $user->id() ?>" >
                    <tr>      
                        <td>
                            <label class="label_update_email" for="newemail">Ajouter votre adresse e-mail : </label> 
                        </td>

                        <td>
                            <input type="email" placeholder="Votre nouvelle adresse e-mail" value="<?= $user->email(); ?>" id="newemail" name="newemail" size="30" class="input_email" />
                        </td>       
                    </tr>

                    <tr>

                        <td colspan="2">
                            <br />
                            <input type="submit" value="Ajouter l'email" id="btn_submit_update_email_profile" name="btn_submit_update_email_profile"  class="btn btn-primary mx-auto mt-3"/>
                        </td>
                        
                        <td></td>

                    </tr>
                </form>
            </div>
            
            
            
            <!-- <div class="error"><?php if (isset($error['profileEmail'])) echo $error['profileEmail']; ?></div><br /> -->
        </div>
   </div><!-- row -->
    
    
</div><!-- .container -->   


<?php
    } else {
?>
    
   
<div class="container mt-5 mb-5">
   
   
   <div class="row text-center">

        <div class="col-12" id="email"><span class="email_profile"><b>Votre e-mail est : <i><?= $user->email() ?></i></b></span><br /> 
                <button class="btn_update_email_profile btn btn-primary mx-auto mt-3" >Modifier l'email de <?= '\'' . $user->username() . '\'' ?> ici</button><br /> 
            <div class="popup_update_email_profile">
                <p><span class="btn_closePopupEmail">&times;</span></p>

                <h4><u>MODIFIFICATION DE L'E-MAIL DE <?= '\'' . $user->username() . '\'' ?></u></h4>

                <form method="POST" action="index.php?action=profileEmail&id=<?= $user->id() ?>" >
                    <tr>      
                        <td>
                            <label class="label_update_email" for="newemail">Modifier votre adresse e-mail : </label> 
                        </td>

                        <td>
                            <input type="email" placeholder="Votre nouvelle adresse e-mail" value="<?= $user->email(); ?>" id="newemail" name="newemail" size="30" class="input_email" />
                        </td>       
                    </tr>

                    <tr>

                        <td colspan="2">
                            <br />
                            <input type="submit" value="Modifier l'email" id="btn_submit_update_email_profile" name="btn_submit_update_email_profile"  class="btn btn-primary mx-auto mt-3"/>
                        </td>
                        
                        <td></td>

                    </tr>
                </form>
            </div>
            
            <div class="popup_delete_email_profil">
            <form method="post" action="index.php?action=profileDeleteEmail&id=<?= $user->id() ?>" enctype="multipart/form-data">
                     
                    <tr>
                      
                        <td colspan="2">
                            <br />
                            <input type="submit" value="Supprimer l'email" name="btn_submit_delete_email_profile" class="input_avatar btn btn-primary mx-auto mt-3" />
                        </td>
                       
                       <td></td>
                       
                   </tr>
                    
            </form>
            </div>
            
            
            
            <!-- <div class="error"><?php if (isset($error['profileEmail'])) echo $error['profileEmail']; ?></div><br /> -->
        </div>
   </div><!-- row -->
    
    
</div><!-- .container -->
    
   
<?php
    } 
?>


<!-- END EMAIL -->









<!-- PASS -->
        
<div class="container mt-5 mb-5">
   
   
   <div class="row text-center">

        <div class="col-12" id="pass"><span><b>Modifier le mot de passe est de <i><?= '\'' . $user->username() . '\'' ?></i></b></span><br />
                <button class="btn_update_pass_profile btn btn-primary mx-auto mt-3" >Modifier le mot de pass de <?= '\'' . $user->username() . '\'' ?> ici</button><br />
            <div class="popup_update_pass_profile">
                <p><span class="btn_closePopupPass">&times;</span></p>

                <h4><u>MODIFIFICATION DU MOT DE PASSE DE <?= '\'' . $user->username() . '\'' ?></u></h4>

                <form method="POST" action="index.php?action=profilePass&id=<?= $user->id() ?>" >
                    <tr>      
                        <td>
                            <label class="label_update_pass" for="newemail">Modifier votre mot de passe : </label> 
                        </td>

                        <td>
                            <input type="password" placeholder="Votre nouveau mot de passe" id="newPass1" name="newPass1" size="30" class="input_pass" />
                        </td>       
                    </tr>

                    <br />

                    <tr>      
                        <td>
                            <label class="label_update_pass" for="newemail">Confirmer votre mot de passe : </label> 
                        </td>

                        <td>
                            <input type="password" placeholder="Confirmer votre nouveau mot de passe" id="newPass2" name="newPass2" size="30" class="input_pass" />
                        </td>       
                    </tr>

                    <tr>

                        <td colspan="2">
                        <br />
                            <input type="submit" value="Mettre à jour" id="btn_submit_update_pass_profile" name="btn_submit_update_pass_profile" class="btn btn-primary mx-auto mt-3" />
                        </td>

                        <td></td>

                    </tr>
                </form>
            </div>
            <!-- <div class="error"><?php if (isset($error['profilePass'])) echo $error['profilePass']; ?></div><br /> -->
        </div>
        
   </div><!-- row -->
    
    
</div><!-- .container -->

<!-- END PASS -->









<!-- PROFESSION -->

<?php
    if (empty($user->profession())) 
    {       
?>

<div class="container mt-5 mb-5">
   
   
   <div class="row text-center">

        <div class="col-12" id="profession"><span class="profession_profile"><b>PROFESSION : <i><?= $user->profession(); ?></i></b></span><br />
                <button class="btn_update_profession_profile btn btn-primary mx-auto mt-3" >Modifier votre profession <?= '\'' . $user->profession() . '\'' ?> ici</button><br />
            <div class="popup_update_profession_profile">
                <p><span class="btn_closePopupProfession">&times;</span></p>

                <h4><u>AJOUTER VOTRE PROFESSION <?= '\'' . $user->profession() . '\'' ?></u></h4>

                <form method="POST" action="index.php?action=profileProfession&id=<?= $user->id() ?>" >
                    <tr>      
                        <td>
                            <label class="label_update_profession" for="newlastname">Ajouter votre profession <?= '\'' . $user->profession() . '\'' ?> : </label> 
                        </td>

                        <td>
                            <input type="text" placeholder="Votre nouvelle profession" id="newprofession" name="newprofession" size="30" class="input_profession btn btn-primary mx-auto mt-3" />
                        </td>       
                    </tr>

                    <tr>

                        <td colspan="2">
                        <br />
                            <input type="submit" value="Ajouter votre profession" id="btn_submit_update_profession_profile" name="btn_submit_update_profession_profile" class="btn btn-primary mx-auto mt-3" />
                        </td>

                        <td></td>

                    </tr>
                </form>
            </div>
        </div>

   </div><!-- row -->
    
    
</div><!-- .container -->

<?php
    } else {
?>
  
  
<div class="container mt-5 mb-5">
   
   
    <div class="row text-center">

        <div class="col-12" id="profession"><span class="profession_profile"><b>PROFESSION : <i><?= $user->profession(); ?></i></b></span><br />
                <button class="btn_update_profession_profile btn btn-primary mx-auto mt-3" >Modifier votre profession <?= '\'' . $user->profession() . '\'' ?> ici</button><br />
            <div class="popup_update_profession_profile">
                <p><span class="btn_closePopupProfession">&times;</span></p>

                <h4><u>MODIFIFICATION DE LA PROFESSION <?= '\'' . $user->profession() . '\'' ?></u></h4>

                <form method="POST" action="index.php?action=profileProfession&id=<?= $user->id() ?>" >
                    <tr>      
                        <td>
                            <label class="label_update_profession" for="newlastname">Modifier votre profession <?= '\'' . $user->profession() . '\'' ?> : </label> 
                        </td>

                        <td>
                            <input type="text" placeholder="Votre nouvelle profession" id="newprofession" name="newprofession" size="30" class="input_profession btn btn-primary mx-auto mt-3" />
                        </td>       
                    </tr>

                    <tr>

                        <td colspan="2">
                        <br />
                            <input type="submit" value="Modifier votre profession" id="btn_submit_update_profession_profile" name="btn_submit_update_profession_profile" class="btn btn-primary mx-auto mt-3" />
                        </td>

                        <td></td>

                    </tr>
                </form>
            </div>
            
            <div class="popup_delete_profession_profil">
            <form method="post" action="index.php?action=profileDeleteProfession&id=<?= $user->id() ?>" enctype="multipart/form-data">
                     
                    <tr>
                      
                        <td colspan="2">
                            <br />
                            <input type="submit" value="Supprimer la profession" name="btn_submit_delete_profession_profile" class="input_avatar btn btn-primary mx-auto mt-3" />
                        </td>
                       
                       <td></td>
                       
                   </tr>
                    
            </form>
            </div>
            
            
            
        </div>

   </div><!-- row -->
    
    
</div><!-- .container -->
  
<?php
    } 
?>


<!-- END PROFESSION -->








<!-- DESCRIPTION -->



<?php
    if (empty($user->description())) 
    {       
?>

<div class="container mt-5 mb-5">
   
   
    <div class="row text-center">   

        <div class="col-12" id="description"><span><b>Vous n'avez pas encore de description</b></span><br />
                <button class="btn_update_description_profile btn btn-primary mx-auto mt-3" >Ajouter une description au profil de <?= '\'' . $user->username() . '\'' ?> ici</button><br />
            <div class="popup_update_description_profile">
                <p><span class="btn_closePopupDescription">&times;</span></p>

                <h4><u>AJOUT D'UNE DESCRIPTION À <?= '\'' . $user->username() . '\'' ?></u></h4>

                <form method="POST" action="index.php?action=profileDescription&id=<?= $user->id() ?>" >
                    <tr>      
                        <td>
                            <label class="label_update_description" for="newDescription">Ajouter votre description : </label> 
                        </td>

                        <td>
                            <textarea id="newDescription" name="newDescription" placeholder="Votre nouvelle description" ROWS="4" COLS="40"><?= $user->description() ?></textarea>
                        </td>       
                    </tr>

                    <tr>

                        <td colspan="2">
                        <br />
                            <input type="submit" value="Mettre à jour" id="btn_submit_update_description_profile" name="btn_submit_update_description_profile" class="btn btn-primary mx-auto mt-3" />
                        </td>

                        <td></td>

                    </tr>
                </form>
            </div>
        </div>

   </div><!-- row -->
    
    
</div><!-- .container -->



<?php
    } else {
?>

<div class="container mt-5 mb-5">
   
   
    <div class="row text-center">   
   

        <div class="col-12" id="description"><span><b>Votre description est : <i><?= $user->description() ?></i></b></span><br />

                <button class="btn_delete_description_profile btn btn-primary mx-auto mt-3" >Supprimer votre description sur le profil de <?= '\'' . $user->username() . '\'' ?> ici</button><br />

            <div class="popup_delete_description_profile"> 
                <p><span class="btn_closePopupDeletetDescription">&times;</span></p>

                <h4><u>SUPPRESSION DE LA DESCRIPTION DE <?= '\'' . $user->username() . '\'' ?></u></h4>   

                <form method="POST" action="index.php?action=profileDeleteDescription&id=<?= $user->id() ?>">

                    <tr>      
                        <td>
                            <label class="label_delete_description" for="deleteDescription">Supprimer votre description : <?= $user->description() ?></label> 
                        </td>

                    </tr>

                    <tr>

                        <td colspan="2">
                        <br />
                            <input type="submit" value="Supprimer la description" name="btn_submit_delete_description_profile" class="btn btn-primary mx-auto mt-3" />
                        </td>

                        <td></td>

                    </tr>

                </form>
            </div>    
        </div>

   </div><!-- row -->
    
    
</div><!-- .container -->


<?php
    } 
?>





<!-- END DESCRIPTION -->

























<?php
}

else{
 
    header('Location: index.php?action=about');
}
?> 



<script src="Content/JS/profile.js"></script>


