
function delImg(id) {
    'use strict';
    if (id === 0) 
        alert ('You are not able to delete this image now!');
    else if (confirm('Are you sure that you want to delete this image?')) {
        
        $.ajax({
            url: 'index.php?action=uploadCertificatesImages',
            method: 'POST',
            dataType: 'text',
            data: {
                delImage: 1,
                id: id
            }, success: function (response) {
               
                // SUPPRIME la DIV contenant l'image:
               $("#"+id).remove(response);               
                
                // Rafraichit la fenêtre où on est :
                window.location.reload();
                
               
            }
            
        });
        
    }
}



$(function () {
    
    
    //var files = $("#files");

    $("#fileupload").fileupload({
        url: 'index.php?action=uploadCertificatesImages',
        dropZone: '#dropZone',
        dataType: 'json',
        autoUpload: false
    }).on('fileuploadadd', function (e, data) {
        var fileTypeAllowed = /.\.(gif|jpg|png|jpeg)$/i;
        console.log(data);
        var fileName = data.originalFiles[0]['name'];
        var fileSize = data.originalFiles[0]['size'];

        if (!fileTypeAllowed.test(fileName))
            $("#error").html('Only images are allowed!');
        else if (fileSize > 500000)
            $("#error").html('Your file is too big! Max allowed size is: 500KB');
        else {
            $("#error").html("");
            data.submit();
        }
    }).on('fileuploaddone', function (e, data) {
        var status = data.jqXHR.responseJSON.status;
        var msg = data.jqXHR.responseJSON.msg;

        if (status == 1) {
            
            var path = data.jqXHR.responseJSON.path;
            
            
            console.log(data);
            //console.log(path);
            addImage(path, 0);
            
            // Rafraichit la fenêtre où on est :
            /* Pour pouvoir supprimer les nouvelles images uploadées où leurs:" id != 0 " */
            window.location.reload();
            
          
        } else
            $("#error").html(msg);
    }).on('fileuploadprogressall', function (e, data) {
        var progress = parseInt(data.loaded / data.total * 100, 10);
        $("#progress").html("Completed: " + progress + "%");
    });
});


function addImage(path, id) {
    
   if ($('#uploadedFiles').find('.rowGallery:last').find('.myImg').length === 2)
       $('#uploadedFiles').append('<div class="row rowGallery"></div>');
    
    $('#uploadedFiles').find('.rowGallery:last').append('<h3 class="text-center col-md-12">Ajouter ou Modifier les informations du certificat numéro <?= $eachCertificate->id(); ?></h3><br/><h6 class="text-center col-md-12"><i>(Pour supprimer un certificat et ses informations de la base de données: cliquer sur son image!)</i></h6><br /><div id="'+id+'" class="col-md-4 myImg" onclick="delImg('+id+')"><img src="'+path+'" /><br /><br /><fieldset class="border p-2"><legend  class="w-auto">Informations BDD</legend><span><label>Nom: </label><b> <?= $eachCertificate->name(); ?></b></span><br /><span><label>Titre: </label><b> <?= $eachCertificate->certificatTitle(); ?></b></span><br /><span><label>Categorie: </label><i> <?= $eachCertificate->certificatCategory(); ?></i></span><br /><span><label>Description: </label><i> <?= $eachCertificate->certificatDescription(); ?></i></span><br /></fieldset></div><div class="col-md-8"><form method="POST" action="index.php?action=certificateDetails"><div class="row"><div class="mx-auto form-inline mt-5 col-md-7"><div class="form-group mx-auto"><label class="text-center col-sm-5" for="certificateName"><u>Nom du certificat:</u></label><div class="col-sm-6"><input type="text" class="form-control" id="certificateName" name="certificateName" placeholder="Nom du certificat" required autofocus /></div></div></div></div><div class="row"><div class="mx-auto form-inline mt-5 col-md-7"><div class="form-group mx-auto"><label class="text-center col-sm-5" for="certificateTitle"><u>Titre du certificat:</u></label><div class="col-sm-6"><input type="text" class="form-control" id="certificateTitle" name="certificateTitle" placeholder="Titre du certificat" required autofocus /></div></div></div></div><div class="row"><div class="mx-auto form-inline mt-5 col-md-7"><div class="form-group mx-auto"><label class="text-center col-sm-5" for="certificateCategory"><u>Categorie du certificat:</u></label><div class="col-sm-6"><input type="text" class="form-control" id="certificateCategory" name="certificateCategory" placeholder="Catégorie du certificat" required autofocus /></div></div></div></div><div class="row mt-3"><div class="form-group col-md-12"><label class="text-center col-sm-5" for="certificateDescription"><u>Description du certificat:</u></label><div class="col-md-12"><textarea class="form-control" rows="6" id="certificateDescription" name="certificateDescription" placeholder="Description du certificat ici !..." required autofocus></textarea></div></div></div><div class="row mt-3"><div class="form-group col-md-12"><div class="col-md-12"><input type="hidden" name="certificateId" value="<?= $eachCertificate->id(); ?>" /></div></div></div><div class="row"><button type="submit" id="btnCertificateDetails" class="btn btn-primary mx-auto mt-3"  name="btnCertificateDetails" />Envoyer les informations du certificat à la base de données</button></div></form></div>');
    
}



