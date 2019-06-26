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
				
				<form method="post" action="index.php?action=uploadCertificatesImages" enctype="multipart/form-data">
				
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
    <div class="row rowGallery">
       
        <!-- <div class="col-md-4 myImg"></div> -->
        
        <?php foreach ($aboutCertificate as $eachCertificate): ?>
        
            <div id="<?= $eachCertificate->id(); ?>'" class="col-md-4 myImg" onclick="delImg('<?= $eachCertificate->id(); ?>')"><img src="Content/img/certificats/<?= $eachCertificate->certificatImg(); ?>" /></div>
        
        
        <?php endforeach; ?>
        
        
        
        
        
    </div>
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


