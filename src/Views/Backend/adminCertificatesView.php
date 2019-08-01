<?php $this->title = 'Gestion des certificats'; ?>

<?php
if (isset($_SESSION['id'])){
?>
    <h1 class="text-center titlePage">
        <?= $this->title = 'Gestion des certificats' ?>
    </h1>

    <!-------------------
        UPLOAD MULTIPLE FILES
        --------------------->
    <!-- DROPZOPNE -->
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <center>
                    <div id="dropZone" class="bgColor">
                        <h1 class="dropzoneTitle">Drag & Drop Files...</h1>
                        <form method="post" action="https://mmtmc.alwaysdata.net/index.php?action=uploadCertificatesImages" id="formCert" enctype="multipart/form-data">
                            <input type="file" id="fileupload" name="certificatImg[]" multiple />
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

        <?php foreach ($aboutCertificate as $eachCertificate): ?>
        <!-- MESSAGES DE SUCCÈS ET D'ERREURS -->
        <!-- Les détails du certificat sont bien enregistrés ! -->
        <?php  if(isset($_SESSION['sendCertificateDetails'])) 
                {
                ?>
        <div class="alert alert-success text-center" role="alert">
            <?php if (isset($_SESSION['sendCertificateDetails'])) echo $_SESSION['sendCertificateDetails']; ?>
        </div>
        <?php
                unset($_SESSION['sendCertificateDetails']);
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

               
                <div class="row rowGallery border bgColor mb-5 p-5">
                    <h3 class="text-center col-md-12">Ajouter ou Modifier les informations du certificat numéro
                        <?= $eachCertificate->id(); ?>
                    </h3><br/>
                    <h6 class="text-center col-md-12"><i>(Pour supprimer un certificat et ses informations de la base de données: cliquer sur son image!)</i></h6><br />
                    <div id="<?= $eachCertificate->id(); ?>" class="col-md-5 myImg" onclick="delImg('<?= $eachCertificate->id(); ?>')">
                        <img src="Content/img/certificats/<?= $eachCertificate->certificatImg(); ?>" alt="<?= $eachCertificate->name(); ?>" title="Cliquer sur l'image du certificat pour le supprimer" /><br /><br />
                        <fieldset class="border p-2">
                            <legend class="w-auto">Informations BDD</legend>
                            <span><label>Nom: </label><b> <?= $eachCertificate->name(); ?></b></span><br />
                            <span><label>Titre: </label><b> <?= $eachCertificate->certificatTitle(); ?></b></span><br />
                            <span><label>Description: </label><i> <?= $eachCertificate->certificatDescription(); ?></i></span><br />
                        </fieldset>
                    </div>                   
                    <div class="col-md-7">
                        <form method="POST" action="https://mmtmc.alwaysdata.net/index.php?action=sendCertificateDetails">
                            <div class="row justify-content-center">
                                <div class="mx-auto form-inline mt-5 ">
                                    <div class="form-group mx-auto">
                                        <label class="text-center col-md-3" for="certificateName"><u>Nom:</u></label>
                                        <div class="col-md-9 pr-0">
                                            <input type="text" class="form-control" id="certificateName" name="certificateName" placeholder="Nom du certificat" required autofocus />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="mx-auto form-inline mt-5 ">
                                    <div class="form-group mx-auto">
                                        <label class="text-center col-md-3" for="certificateTitle"><u>Titre:</u></label>
                                        <div class="col-md-9 pr-0">
                                            <input type="text" class="form-control" id="certificateTitle" name="certificateTitle" placeholder="Titre du certificat" required autofocus />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center mt-3">
                                <div class="form-group col-md-12 col-sm-12">
                                    <label class="text-center" for="certificateDescription"><u>Description:</u></label>
                                    <div class="col-md-12 col-sm-12">
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
                            <div class="row justify-content-center">
                                <button type="submit" id="btnCertificateDetails" class="btn btn-primary mx-auto mt-3" name="btnCertificateDetails" />Envoyer à la BDD</button>
                            </div>
                        </form>                        
                    </div>
                </div>
                <?php endforeach; ?>
    </div>



    <script src="Content/JS/vendor/jquery.ui.widget.js" type="text/javascript"></script>

    <script src="Content/JS/jquery.iframe-transport.js"></script>

    <script src="Content/JS/jquery.fileupload.js"></script>

    <script src="Content/JS/uploadCertificates.js"></script>



    <?php
}

else{
 
    header('Location: https://mmtmc.alwaysdata.net/index.php?action=about');
}
?>