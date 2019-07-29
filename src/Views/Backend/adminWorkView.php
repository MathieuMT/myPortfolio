<?php $this->title = 'Gestion de chaque réalisation'; ?>


<?php
if (isset($_SESSION['id'])){
?>

<h1 class="text-center titlePage"><?= $this->title = 'Gestion de chaque réalisation' ?></h1>

           
<!-- GALLERY OF DROPZONE -->                 
<div class="container containerGallery" id="uploadedFiles">
        
    <!-- PROJECTS -->
        
    <div class="row rowGallery border bgColor mb-5 p-5 justify-content-center">
           
        <h3 class="text-center col-md-12">Ajouter ou Modifier les informations du projet numéro <?= $work->id(); ?></h3><br/>
        <h6 class="text-center col-md-12"><i>(Pour supprimer un projet et ses informations de la base de données: cliquer sur son image!)</i></h6><br />
           
        <div id="<?= $work->id(); ?>" class="col-12 myImg" onclick="delImg('<?= $work->id(); ?>')">
            <img src="Content/img/works/<?= $work->workImg(); ?>" alt="<?= $work->name(); ?>" title="Cliquer sur l'image du projet pour le supprimer" class=""/><br /><br />
            <fieldset class="border p-2">
                <legend  class="w-auto">Informations BDD</legend>
                <span><label>Nom: </label><b> <?= $work->name(); ?></b></span><br />
                <span><label>Titre: </label><b> <?= $work->workTitle(); ?></b></span><br />
                <span><label>Categorie: </label><i> <?= $work->workCategory(); ?></i></span><br />
                <span><label>Lien GitHub: </label><i> <?= $work->workLink(); ?></i></span><br />
                <span><label>Description: </label><i> <?= $work->workDescription(); ?></i></span><br />
                </fieldset>
        </div>
            

        <!----- DROPZONE FOR SLIDES ----->
        
        <fieldset class="border bgSlides mt-3 p-2 col-12">   
            <legend  class="w-auto">Upload slides and send in BDD</legend>  
            <div> 
                <div class="container">
                   <div class="row">
                       <div class="col-md-4 mx-auto">
                            <center>
                                <div id="dropZone2" class="dropZone2 bgColor">
                                    <h1 class="dropzoneTitle2">Drag & Drop Files...</h1>
                                    <form method="post" action="index.php?action=uploadSlidesImages" id="formSlide" enctype="multipart/form-data">
                                        <input type="file" id="fileupload2" name="slideImg[]" multiple />
                                        <input type="hidden" name="work_id" value="<?= $work->id() ?>" />
                                    </form>
                                </div>

                                <h1 id="error"></h1><br><br>

                                <h1 id="progress"></h1><br><br>

                            </center>

                        </div>
                    </div>
                </div>
            </div>
        </fieldset>
        
        
        <!----- FORM FOR SLIDES ----->
        <div class="container containerGallery2" id="uploadedFiles2" class="uploadedFiles2">
            <?php foreach ($aboutSlide as $eachSlide): ?>          
            <?php if ($eachSlide->work_id() == $work->id()) 
            {
            ?>
            <!-- MESSAGES DE SUCCÈS ET D'ERREURS -->
        
            <!-- Les détails du certificat sont bien enregistrés ! -->
            <?php  if(isset($_SESSION['sendSlideDetails'])) 
                {
                ?>
                <div class="alert alert-success text-center" role="alert"><?php if (isset($_SESSION['sendSlideDetails'])) echo $_SESSION['sendSlideDetails']; ?></div>
                <?php
                unset($_SESSION['sendSlideDetails']);
                } 
            ?>
            <!-- Les détails du certificat n'ont pas été enregistrés ! -->   
            <?php if(isset($_SESSION['error'])) 
                {
                ?>
                  <div class="alert alert-danger text-center" role="alert"><?php if (isset($_SESSION['error'])) {echo $_SESSION['error'] ;} ?></div>
                  
                <?php
                unset($_SESSION['error']);
                } 
            ?>
            
            <!-- SLIDES -->
            <div class="row rowGallery2 border mb-5 p-5">
                <h3 class="text-center col-md-12">Ajouter ou Modifier les informations du diapositif numéro <?= $eachSlide->id(); ?></h3><br/>
                <h6 class="text-center col-md-12"><i>(Pour supprimer un diapositif et ses informations de la base de données: cliquer sur son image!)</i></h6><br />
              
                <div id="<?= $eachSlide->id(); ?>" class="col-md-5 myImg2" onclick="delImgSlide('<?= $eachSlide->id(); ?>')">
                    <img src="Content/img/slides_works/<?= $eachSlide->slideImg(); ?>" alt="<?= $eachSlide->name(); ?>" title="Cliquer sur l'image du diapositif pour le supprimer"/><br /><br />
                    <fieldset class="borderFieldset p-2">
                        <legend  class="w-auto">Informations BDD</legend>
                        <span><label>Nom: </label><b> <?= $eachSlide->name(); ?></b></span><br />
                    </fieldset>
                </div>
                
                <div class="col-md-7">
                   <!-- FORM SLIDES -->
                    <form method="POST" action="index.php?action=sendSlideDetails">
                        <div class="row justify-content-center">
                            <div class="mx-auto form-inline mt-5 ">
                                <div class="form-group mx-auto">
                                    <label class="text-center col-md-3" for="slideName"><u>Nom:</u></label>
                                    <div class="col-md-9 pr-0">
                                        <input type="text" class="form-control" id="slideName" name="slideName" placeholder="Nom du diapositif" required autofocus />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="form-group col-md-12">
                                <div class="col-md-12">
                                    <input type="hidden" name="slideId" value="<?= $eachSlide->id(); ?>" />
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="form-group col-md-12">
                                <div class="col-md-12">
                                    <input type="hidden" name="work_id_slide" value="<?= $work->id(); ?>" />
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <button type="submit" id="btnSlideDetails" class="btn btn-primary mx-auto mt-3"  name="btnSlideDetails" />Envoyer à la BDD</button>
                        </div>
                    </form>
                </div>
        
            </div><!-- .rowGallery2 -->
            
            <?php
            } 
            ?>
            
            <?php endforeach; ?>
            
        </div><!-- .containerGallery2 -->
         
    </div><!-- .rowGallery -->
          
</div><!-- .containerGallery -->     
         
         
                                                 
                                                  
                                                            
 

<!-- JAVASCRIPT -->
<script src="Content/JS/vendor/jquery.ui.widget.js" type="text/javascript"></script>

<script src="Content/JS/jquery.iframe-transport.js"></script>

<script src="Content/JS/jquery.fileupload.js"></script>

<script src="Content/JS/uploadWorks.js"></script>

<script src="Content/JS/uploadSlides.js"></script>



<?php
}

else{
 
    header('Location: index.php?action=about');
}
?> 













