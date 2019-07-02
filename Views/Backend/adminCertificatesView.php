<?php $this->title = 'Gestion des certificats'; ?>



<?php
if (isset($_SESSION['id']) && $_SESSION['username'] === 'MathieuMT'){
?>










<h1 class="text-center titlePage"><?= $this->title = 'Gestion des certificats' ?></h1>
<br />
<br />
<br />
<hr class="hr"/>






        <!-------------------
        UPLOAD MULTIPLE FILES
        --------------------->
<!-- DROPZOPNE -->
<div class="container">
  
   <div class="row">
      
       <div class="col-md-8 mx-auto">
          
         <center>
			
			<div id="dropZone">
			
				<h1>Drag & Drop Files...</h1>
				
				<form method="post" action="index.php?action=uploadCertificatesImages" id="formCert" enctype="multipart/form-data">
				
				    <input type="file" id="fileupload" name="certificatImg[]" multiple />
               
                </form>
				
			</div>
			
			<h1 id="error"></h1><br><br>
			
			<h1 id="progress"></h1><br><br>
			
			<div id="files"></div>
			
		</center>
      
       </div>
       
    </div>
      
</div>


          
                    
                              
                         
                                       
            
<!-- GALLERY OF DROPZONE -->                 
<div class="container containerGallery" id="uploadedFiles">
    
       
        <!-- <div class="col-md-4 myImg"></div> -->
        
        <?php foreach ($aboutCertificate as $eachCertificate): ?>
        <div class="row rowGallery border mb-5 p-5">
           
           
           <!-- MESSAGES DE SUCCÈS ET D'ERREURS -->
        
            <!-- Les détails du certificat sont bien enregistrés ! -->
            <?php  if(isset($_success1)) 
                {
                ?>
                <div class="alert alert-success text-center" role="alert"><?php if (isset($_success1['sendCertificateDetails'])) echo $_success1['sendCertificateDetails']; ?></div>
                <?php
                } 
            ?>
            <!-- Les détails du certificat n'ont pas été enregistrés ! -->   
            <?php if(isset($_error1)) 
                {
                ?>
                  <div class="alert alert-danger text-center" role="alert"><?php if (isset($_error1['sendCertificateDetails'])) {echo $_error1['sendCertificateDetails'] ;} ?></div>
                <?php
                } 
            ?>
           
           
           
           
           
           
           
            <h3 class="text-center col-md-12">Ajouter ou Modifier les informations du certificat numéro <?= $eachCertificate->id(); ?></h3><br/>
            <h6 class="text-center col-md-12"><i>(Pour supprimer un certificat et ses informations de la base de données: cliquer sur son image!)</i></h6><br />
           
            
            <div id="<?= $eachCertificate->id(); ?>'" class="col-md-4 myImg" onclick="delImg('<?= $eachCertificate->id(); ?>')">
                <img src="Content/img/certificats/<?= $eachCertificate->certificatImg(); ?>" /><br /><br />
                <fieldset class="border p-2">
                <legend  class="w-auto">Informations BDD</legend>
                <span><label>Nom: </label><b> <?= $eachCertificate->name(); ?></b></span><br />
                <span><label>Titre: </label><b> <?= $eachCertificate->certificatTitle(); ?></b></span><br />
                <span><label>Categorie: </label><i> <?= $eachCertificate->certificatCategory(); ?></i></span><br />
                <span><label>Description: </label><i> <?= $eachCertificate->certificatDescription(); ?></i></span><br />
                </fieldset>
            </div>
            <div class="col-md-8">
               
               
                <form method="POST" action="index.php?action=sendCertificateDetails">
                    
                    
                    <div class="row">
                        <div class="mx-auto form-inline mt-5 col-md-7">
                            <div class="form-group mx-auto">
                                <label class="text-center col-sm-5" for="certificateName"><u>Nom du certificat:</u></label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="certificateName" name="certificateName" placeholder="Nom du certificat" required autofocus />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mx-auto form-inline mt-5 col-md-7">
                            <div class="form-group mx-auto">
                                <label class="text-center col-sm-5" for="certificateTitle"><u>Titre du certificat:</u></label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="certificateTitle" name="certificateTitle" placeholder="Titre du certificat" required autofocus />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mx-auto form-inline mt-5 col-md-7">
                            <div class="form-group mx-auto">
                                <label class="text-center col-sm-5" for="certificateCategory"><u>Categorie du certificat:</u></label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="certificateCategory" name="certificateCategory" placeholder="Catégorie du certificat" required autofocus />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="form-group col-md-12">
                            <label class="text-center col-sm-5" for="certificateDescription"><u>Description du certificat:</u></label>
                            <div class="col-md-12">
                                <textarea class="form-control" rows="6" id="certificateDescription" name="certificateDescription" placeholder="Description du certificat ici !..." required autofocus></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="form-group col-md-12">
                            <div class="col-md-12">
                                <input type="hidden" name="certificateId" value="<?= $eachCertificate->id(); ?>" />
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    <div class="row">
                        <button type="submit" id="btnCertificateDetails" class="btn btn-primary mx-auto mt-3"  name="btnCertificateDetails" />Envoyer les informations du certificat à la base de données</button>
                    </div>
                </form>
                
                
            </div>
        
        </div>
        <?php endforeach; ?>
        
        
        
        
        
    
</div>     
         
         
                                                 
                                                  
                                                            
                                                                      
                                                                                
                                                                                                    

<!------------------------------>
<!--        DIV - TEST        -->
<!------------------------------>
<div class="test">
    <h1>TEST affichage</h1>
    
    
    
    
    
    <ol>
       
       
        
        <?php
        /* $aboutWork est la variable provenant de WorkManager.php qui envoie en tableau d'objets "works" donc pour chaque objet, on fait une boucle renvoyant les données de chaque objet "Work"  ( dans la méthode "getWorkDescription()" d' "WorkManager.php" qui insatncie l'entité "Work" en objet )*/





        echo 'tableau d\'objets où chaque objet contient un tableau de données de la BDD :';
        var_dump($aboutCertificate);

        echo '<hr>';
        foreach ($aboutCertificate as $eachCertificate): ?>



        <?php var_dump($eachCertificate); ?>
        <fieldset>
            <article>

                    id: <?= $eachCertificate->id(); ?><br />name:<?= $eachCertificate->name(); ?><br />certificatImg:<?= $eachCertificate->certificatImg(); ?><br />
                    <div id="img_'<?= $eachCertificate->id(); ?>'" class="col-md-3 myImg" onclick="delImg('<?= $eachCertificate->id(); ?>')"><img src="Content/img/certificats/<?= $eachCertificate->certificatImg(); ?>" /></div>

            </article>
        </fieldset>
            <hr />




        <?php endforeach; ?>




        
    </ol>
    
    
</div>
          
                    
                              
                                        
                                                            
<!------------------------------>          
                  

         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
       <!-------------
        UPLOAD ONE FILE
        -------------->
<!--        
<div class="container">

   <div class="row">
        
        <div class="col-md-8 mx-auto">  
-->          
           <!-- MESSAGES DE SUCCÈS ET D'ERREURS -->
        
            <!-- Image est bien téléchargée ! -->
            <?php  //if(isset($_success1)) 
                //{
                ?>
                <!--    <div class="alert alert-success text-center" role="alert"><?php// if (isset($_success1['getCertificatImg'])) echo $_success1['getCertificatImg']; ?></div>
                <?php
               // } 
            ?>
            <!-- Please choose -->   
            <?php //if(isset($_error1)) 
                //{
                ?>
                  <!--  <div class="alert alert-danger text-center" role="alert"><?php // if (isset($_error1['getCertificatImg'])) {echo $_error1['getCertificatImg'] ;} ?></div>
                <?php
                //} 
            ?>
            
            <!-- File is not uploaded -->   
            <?php //if(isset($_error2)) 
                {
                ?>
                  <!--  <div class="alert alert-danger text-center" role="alert"><?php // if (isset($_error2['getCertificatImg'])) {echo $_error2['getCertificatImg'] ;} ?></div> -->
                <?php
                } 
            ?>

            <!-- Please choose Image -->
            <?php // if(isset($_error2)) 
            //    {
                ?>
                 <!--   <div class="alert alert-danger text-center" role="alert"><?php // if (isset($_error3['getCertificatImg'])) {echo $_error3['getCertificatImg'] ;} ?></div> -->
                <?php
            //    } 
            ?> 
           
           
           <!--
           
            <form method="post" action="index.php?action=getCertificatImg" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="certificatImg">Choisir l'image d'un certificat au format jpg, jpeg(taille Max = 2Mo) : </label>
                    <input type="file" name="certificatImg" id="certificatImg" value="" class="form-control">
                </div>

                <button id="subCertImg" name="subCertImg" type="Submit" class="btn btn-primary">Télécharger une image</button>
            </form>
            
            
            
        </div>
    </div>
    
      
    
</div>

--> <!-- .container -->







































<!-- JAVASCRIPT -->

<!-- jQuery 3.2.1 pour uploader les images dans la zone Drag & Drop -->
<!--
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="Content/JS/js/vendor/jquery.ui.widget.js"></script>
<script src="Content/JS/js/jquery.iframe-transport.js"></script>
<script src="Content/JS/js/jquery.fileupload.js"></script>
-->


<!-- baguetteBox -->
<!--
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.0/baguetteBox.min.js"></script>
-->

<!-- Gallerie des certificats -->



<!-- DROPZONE -->
<!--
<script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
-->


<script src="Content/JS/vendor/jquery.ui.widget.js" type="text/javascript"></script>

<script src="Content/JS/jquery.iframe-transport.js"></script>

<script src="Content/JS/jquery.fileupload.js"></script>

<script src="Content/JS/uploadCertificates.js"></script>

















<?php
}

else{
 
    header('Location: index.php?action=about');
}
?> 


