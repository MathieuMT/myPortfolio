<?php $this->title = 'Gestion des réalisations'; ?>

<?php
if (isset($_SESSION['id']) /*&& $_SESSION['username'] === $user->username()*/){
?>

<h1 class="text-center titlePage"><?= $this->title = 'Gestion des réalisations' ?></h1>

        <!-------------------
        UPLOAD MULTIPLE FILES
        --------------------->
<!-- DROPZOPNE FOR PROJECT -->
<div class="container">

    <div class="row">

        <div class="col-md-8 mx-auto">

            <center>

                <div id="dropZone" class="bgColor">

                    <h1 class="dropzoneTitle">Drag & Drop Files...</h1>

                    <form method="post" action="https://mmtmc.alwaysdata.net/index.php?action=uploadWorksImages" id="formWork" enctype="multipart/form-data">

                        <input type="file" id="fileupload" name="workImg[]" multiple />

                    </form>

                </div>

                <h1 id="error"></h1><br><br>

                <h1 id="progress"></h1><br><br>


            </center>

        </div>

    </div>

</div>

           
<!-- GALLERY OF DROPZONE -->                 
<div class="container containerGallery" id="uploadedFiles">


    <?php foreach ($aboutWork as $eachWork): ?>



    <!-- MESSAGES DE SUCCÈS ET D'ERREURS -->

    <!-- Les détails du certificat sont bien enregistrés ! -->
    <?php  if(isset($_SESSION['sendWorkDetails'])) 
                {
                ?>
    <div class="alert alert-success text-center" role="alert">
        <?php if (isset($_SESSION['sendWorkDetails'])) echo $_SESSION['sendWorkDetails']; ?>
    </div>
    <?php
                unset($_SESSION['sendWorkDetails']);
                } 
            ?>
        <!-- Les détails du certificat n'ont pas été enregistrés ! -->
        <?php if(isset($_SESSION['error'])) 
                {
                ?>
        <div class="alert alert-danger text-center" role="alert">
            <?php if (isset($_SESSION['error'])) {echo $_SESSION['error'] ;} ?>
        </div>

        <?php
                unset($_SESSION['error']);
                } 
            ?>


            <!-- PROJECTS -->

            <div class="row rowGallery border bgColor mb-5 p-5">


                <h3 class="text-center col-md-12">Ajouter ou Modifier les informations du projet numéro
                    <?= $eachWork->id(); ?>
                </h3><br/>
                <h6 class="text-center col-md-12"><i>(Pour supprimer un projet et ses informations de la base de données: cliquer sur son image!)</i></h6><br />



                <div id="<?= $eachWork->id(); ?>" class="col-md-5 myImg" onclick="delImg('<?= $eachWork->id(); ?>')">
                    <img src="Content/img/works/<?= $eachWork->workImg(); ?>" alt="<?= $eachWork->name(); ?>" title="Cliquer sur l'image du projet pour le supprimer" /><br /><br />
                    <fieldset class="border p-2">
                        <legend class="w-auto">Informations BDD</legend>
                        <span><label>Nom: </label><b> <?= $eachWork->name(); ?></b></span><br />
                        <span><label>Titre: </label><b> <?= $eachWork->workTitle(); ?></b></span><br />
                        <span><label>Categorie: </label><i> <?= $eachWork->workCategory(); ?></i></span><br />
                        <span><label>Lien GitHub: </label><i> <?= $eachWork->workLink(); ?></i></span><br />
                        <span><label>Description: </label><i> <?= $eachWork->workDescription(); ?></i></span><br />
                    </fieldset>
                </div>


                <div class="col-md-7">

                    <!-- FORM PROJECT -->

                    <form method="POST" action="https://mmtmc.alwaysdata.net/index.php?action=sendWorkDetails">


                        <div class="row justify-content-center">
                            <div class="mx-auto form-inline mt-5 ">
                                <div class="form-group mx-auto">
                                    <label class="text-center col-md-3" for="workName"><u>Nom:</u></label>
                                    <div class="col-md-9 pr-0">
                                        <input type="text" class="form-control" id="workName" name="workName" placeholder="Nom du projet" required autofocus />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="mx-auto form-inline mt-5 ">
                                <div class="form-group mx-auto">
                                    <label class="text-center col-md-3" for="workTitle"><u>Titre:</u></label>
                                    <div class="col-md-9 pr-0">
                                        <input type="text" class="form-control" id="workTitle" name="workTitle" placeholder="Titre du projet" required autofocus />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="mx-auto form-inline mt-5 ">
                                <div class="form-group mx-auto">
                                    <label class="text-center col-md-3" for="workCategory"><u>Cat:</u></label>
                                    <div class="col-md-9 pr-0">
                                        <input type="text" class="form-control" id="workCategory" name="workCategory" placeholder="Catégorie du projet" required autofocus />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="mx-auto form-inline mt-5 ">
                                <div class="form-group mx-auto">
                                    <label class="text-center col-md-3" for="workLink"><u>Lien:</u></label>
                                    <div class="col-md-9 pr-0">
                                        <input type="text" class="form-control" id="workLink" name="workLink" placeholder="Lien GitHub du projet" required autofocus />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center mt-3">
                            <div class="form-group col-md-12 col-sm-12">
                                <label class="text-center" for="workDescription"><u>Description:</u></label>
                                <div class="col-md-12 col-sm-12">
                                    <textarea class="form-control" rows="6" id="workDescription" name="workDescription" placeholder="Description du projet ici !..." required autofocus></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="form-group col-md-12">
                                <div class="col-md-12">
                                    <input type="hidden" name="workId" value="<?= $eachWork->id(); ?>" />
                                </div>
                            </div>
                        </div>



                        <div class="row justify-content-center">
                            <button type="submit" id="btnWorkDetails" class="btn btn-primary mx-auto mt-3" name="btnWorkDetails" />Envoyer à la BDD</button>
                        </div>
                    </form>

                    <div>
                        <a href="<?="https://mmtmc.alwaysdata.net/index.php?action=adminWork&amp;id=".$eachWork->id(); ?>"><button class="btn btn-primary mx-auto mt-3" id="linkEachWork">Ajouter des slides pour chaque projet</button></a>

                    </div>

                </div>

            </div>
            <!-- .rowGallery -->
            <?php endforeach; ?>

</div>
<!-- .containerGallery -->
         
                                                 
                                                  
<!-- JAVASCRIPT --> 
<script src="Content/JS/vendor/jquery.ui.widget.js" type="text/javascript"></script>

<script src="Content/JS/jquery.iframe-transport.js"></script>

<script src="Content/JS/jquery.fileupload.js"></script>

<script src="Content/JS/uploadWorks.js"></script>


<?php
}

else{
 
    header('Location: https://mmtmc.alwaysdata.net/index.php?action=about');
}
?> 













