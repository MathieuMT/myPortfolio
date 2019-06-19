<?php $this->title = 'Privé'; ?>




<h1 class="text-center titlePage"><?= $this->title = 'Formulaires privés' ?></h1>




<!-- Faire les formulaires d'inscription et de connexion' ... -->




<div class="mx-auto col-sm-10 text-center border border-primary p-2">
    
    
       
        <div class="row">

            <div class="col-md-12">

                <h1>FORMULAIRE D'INSCRIPTION<br /><small class="text-muted">Merci de renseigner vos informations</small></h1>

            </div>

        </div>
        
        
        <!-- MESSAGES DE SUCCÈS ET D'ERREURS -->
        
        <!-- L'utilisateur est bien enregistré -->
        <?php if(isset($success1)) 
            {
            ?>
                <div class="alert alert-success" role="alert"><?php if (isset($success1['registration'])) echo $success1['registration']; ?></div>
            <?php
            } 
        ?>
        <!-- Nom d'utilisateur doit comprendre entre 3 et 25 caractères -->   
        <?php if(isset($error1)) 
            {
            ?>
                <div class="alert alert-danger" role="alert"><?php if (isset($error1['usernameRegistered'])) {echo $error1['usernameRegistered'] ;} ?></div>
            <?php
            } 
        ?>
        
        <!-- Nom d'utilisateur déjà utilisé -->
        <?php if(isset($error2)) 
            {
            ?>
                <div class="alert alert-danger" role="alert"><?php if (isset($error2['usernameRegistered'])) {echo $error2['usernameRegistered'] ;} ?></div>
            <?php
            } 
        ?> 
          
        <!-- Les mots de passe ne correspondent pas -->
        <?php if(isset($error3)) 
            {
            ?>
                <div class="alert alert-danger" role="alert"><?php if (isset($error3['passRegistered'])) {echo $error3['passRegistered'] ;} ?></div>
            <?php
            } 
        ?> 

    
<!-- FORMULAIRE D'INSCRIPTION -->    
    <form action="index.php?action=registration" method="post">  

        <div class="row">
                    
            <div class="mx-auto form-inline mt-5 col-md-7">
               
                <div class="form-group mx-auto">
                   
                    <label class="col-sm-5" for="usernameRegistered"><u>Nom d'utilisateur:</u></label>
            
                    <div class="col-sm-6">

                        <input type="text" class="form-control" id="usernameRegistered" name="usernameRegistered" placeholder="Nom d'utilisateur" required autofocus />

                    </div>
                    
                </div>
                
            </div>
              
        </div>
       
           
        
        <div class="row">
                     
            <div class="mx-auto form-inline mt-2 col-md-7">
                
                <div class="form-group mx-auto">

                    <label class="col-sm-5" for="passRegistered"><u>Mot de passe:</u></label>

                    <div class="col-sm-6">

                        <input type="password" class="form-control" id="passRegistered" name="passRegistered" placeholder="Mot de passe" required />

                    </div>
                    
                </div>
                
            </div>  

        </div>
           
       
         <div class="row">
                      
            <div class="mx-auto form-inline mt-2 col-md-7">
                
                <div class="form-group mx-auto">

                    <label class="col-sm-5" for="checkPassRegistered"><u>Confirmation:</u></label>

                    <div class="col-sm-6">

                        <input type="password" class="form-control" id="checkPassRegistered" name="checkPassRegistered" placeholder="Confirmation" required />

                    </div>
                
                </div>
                
            </div>  

        </div>
            
        <div class="row">
                      
            

                <!--<input type="submit" id="btnRegistration" class="btn btn-primary mx-auto mt-3"  name="btnRegistration" value="S'inscrire" />-->
                <button type="submit" id="btnRegistration" class="btn btn-primary mx-auto mt-3"  name="btnRegistration" />S'inscrire</button>
                
              

        </div>
        
        
        
    </form>
    
</div>










<!-- FORMULAIRE DE CONNEXION -->
<div class="mx-auto col-sm-10 text-center border border-primary p-2 mt-5">
   
   <div class="row">

            <div class="col-md-12">

                <h1>FORMULAIRE DE CONNEXION<br /><small class="text-muted">Merci de renseigner vos informations</small></h1>

            </div>

        </div>
        
        
        <!-- MESSAGES DE SUCCÈS ET D'ERREURS -->
        
        <!-- L'utilisateur est bien bien connecté -->
        <?php if(isset($success2)) 
            {
            ?>
                <div class="alert alert-success" role="alert"><?php if (isset($success2['connexion'])) echo $success2['connexion']; ?></div>
            <?php
            } 
        ?>
        <!-- Nom d'utilisateur ou mot de passe est invalide -->   
        <?php if(isset($error4)) 
            {
            ?>
                <div class="alert alert-danger" role="alert"><?php if (isset($error4['connexion'])) {echo $error4['connexion'] ;} ?></div>
            <?php
            } 
        ?>
        
        <!-- Nom d'utilisateur n'est pas inscrit -->
        <?php if(isset($error5)) 
            {
            ?>
                <div class="alert alert-danger" role="alert"><?php if (isset($error5['connexion'])) {echo $error5['connexion'] ;} ?></div>
            <?php
            } 
        ?> 
   
   
   
   
    
        <form action="index.php?action=connexion" method="post">  

        <div class="row">
                    
            <div class="mx-auto form-inline mt-5 col-md-7">
               
                <div class="form-group mx-auto">
                   
                    <label class="col-sm-5" for="usernameConnected"><u>Nom d'utilisateur:</u></label>
            
                    <div class="col-sm-6">

                        <input type="text" class="form-control" id="usernameConnected" name="usernameConnected" placeholder="Nom d'utilisateur" required autofocus />

                    </div>
                    
                </div>
                
            </div>
              
        </div>
       
           
        
        <div class="row">
                     
            <div class="mx-auto form-inline mt-2 col-md-7">
                
                <div class="form-group mx-auto">

                    <label class="col-sm-5" for="passConnected"><u>Mot de passe:</u></label>

                    <div class="col-sm-6">

                        <input type="password" class="form-control" id="passConnected" name="passConnected" placeholder="Mot de passe" required />

                    </div>
                    
                </div>
                
            </div>  

        </div>
           
       
         
            
        <div class="row">
                      
            

                <!--<input type="submit" id="btnConnexion" class="btn btn-primary mx-auto mt-3"  name="btnConnexion" value="Se connecté" />-->
                <button type="submit" id="btnRegistration" class="btn btn-primary mx-auto mt-3"  name="btnRegistration" />Se connecté</button>
              

        </div>
        
        
        
    </form>
    
</div>

<!-- on inclut la bibliothèque depuis les serveurs de Google -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

<!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>-->

<script scr="Content/JS/privateFormsView.js"></script>