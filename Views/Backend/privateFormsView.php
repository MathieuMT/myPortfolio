<?php $this->title = 'Privé'; ?>




<h1 class="text-center titlePage"><?= $this->title = 'Formulaires privés' ?></h1>




<!-- Faire les formulaires d'inscription et de connexion' ... -->




<div class="mx-auto col-sm-10 text-center border border-primary p-2">
    
    
       
        <div class="row">

            <div class="col-md-12">

                <h1>FORMULAIRE D'INSCRIPTION<br /><small class="text-muted">Merci de renseigner vos informations</small></h1>

            </div>

        </div>
        
        
    <div class="success alert alert-success" role="alert"><?php if (isset($success['registration'])) echo $success['registration']; ?></div>

    
<!-- FORMULAIRE D'INSCRIPTION -->    
    <form action="index.php?action=registration" method="post">  

        <div class="row">
                    
            <div class="mx-auto form-inline mt-5 col-md-7">
               
                <div class="form-group mx-auto">
                   
                    <label class="col-sm-5" for="usernameRegistered"><u>Nom d'utilisateur:</u></label>
            
                    <div class="col-sm-6">

                        <input type="text" class="form-control" id="usernameRegistered" name="usernameRegistered" placeholder="Nom d'utilisateur" required />
                        
                        <div class="error alert alert-danger" role="alert"><?php if (isset($error['usernameRegistered'])) {echo $error['usernameRegistered'] ;} ?></div>

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

                        <div class="error alert alert-danger" role="alert"><?php if (isset($error['passRegistered'])) {echo $error['passRegistered'] ;} ?></div>

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

                        <div class="error alert alert-danger" role="alert"><?php if (isset($error['passRegistered'])) {echo $error['passRegistered'] ;} ?></div>

                    </div>
                
                </div>
                
            </div>  

        </div>
            
        <div class="row">
                      
            

                <button type="submit" id="btnRegistration" class="btn btn-primary mx-auto mt-3" data-dismiss="alert" name="btnRegistration">S'inscrire</button>
                
              

        </div>
        
        
        
    </form>
    
    <div class="error alert alert-danger" role="alert"><?php if (isset($error['fieldRegistration'])) {echo $error['fieldRegistration'] ;} ?></div>
    
</div>










<!-- FORMULAIRE DE CONNEXION -->
<div class="mx-auto col-sm-10 text-center border border-primary p-2 mt-5">
    
    <form>
    
        <div class="row">

            <div class="col-md-12">

                <h1>FORMULAIRE DE CONNEXION<br /><small class="text-muted">Merci de renseigner vos informations</small></h1>

            </div>

        </div>
        
        
            

        <div class="row">
                    
            <div class="mx-auto form-inline mt-5 col-md-7">

                <label class="col-sm-5" for="Username"><u>Nom d'utilisateur:</u></label>
                       
                <div class="col-sm-6">
                   
                    <input type="text" class="form-control" id="Username" placeholder="Nom d'utilisateur">
                    
                </div>
                
            </div>
              
        </div>
       
           
        
        <div class="row">
                     
            <div class="mx-auto form-inline mt-2 col-md-7">

                <label class="col-sm-5" for="Password"><u>Mot de passe:</u></label>
                       
                <div class="col-sm-6">
                   
                    <input type="password" class="form-control" id="Password" placeholder="Mot de passe">
                    
                </div>
                
            </div>  

        </div>
           
       
         
            
        <div class="row">
                      
            

                <button type="submit" class="btn btn-primary mx-auto mt-3">Se connecter</button>
                
              

        </div>
        
        
        
    </form>
    
</div>

<!-- on inclut la bibliothèque depuis les serveurs de Google -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

<!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>-->

<script scr="Content/JS/privateFormsView.js"></script>