/******** PROJECTS ********/

function delImg(id) {
    'use strict';
    if (id === 0) 
        alert ('You are not able to delete this image now!');
    else if (confirm('Are you sure that you want to delete this image?')) {
        
        $.ajax({
            url: 'https://mmtmc.alwaysdata.net/index.php?action=uploadWorksImages',
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
    
    
   // var files = $("#files");

    $("#fileupload").fileupload({
        url: 'https://mmtmc.alwaysdata.net/index.php?action=uploadWorksImages',
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
    
    $('#uploadedFiles').find('.rowGallery:last').append('<h3 class="text-center col-md-12">Ajouter ou Modifier les informations du projet numéro <?= $eachWork->id(); ?></h3><br/><h6 class="text-center col-md-12"><i>(Pour supprimer un projet et ses informations de la base de données: cliquer sur son image!)</i></h6><br /><div id="'+id+'" class="col-md-5 myImg" onclick="delImg('+id+')"><img src="'+path+'" alt="<?= $eachWork->name(); ?>" title="Cliquer sur l\'image du projet pour le supprimer"/><br /><br /><fieldset class="border p-2"><legend  class="w-auto">Informations BDD</legend><span><label>Nom: </label><b> <?= $eachWork->name(); ?></b></span><br /><span><label>Titre: </label><b> <?= $eachWork->workTitle(); ?></b></span><br /><span><label>Categorie: </label><i> <?= $eachWork->workCategory(); ?></i></span><br /><span><label>Lien GitHub: </label><i> <?= $eachWork->workLink(); ?></i></span><br /><span><label>Description: </label><i> <?= $eachWork->workDescription(); ?></i></span><br /></fieldset></div><div class="col-md-7"><form method="POST" action="https://mmtmc.alwaysdata.net/index.php?action=sendWorkDetails"><div class="row justify-content-center"><div class="mx-auto form-inline mt-5 "><div class="form-group mx-auto"><label class="text-center col-md-3" for="workName"><u>Nom:</u></label><div class="col-md-9 pr-0"><input type="text" class="form-control" id="workName" name="workName" placeholder="Nom du projet" required autofocus /></div></div></div></div><div class="row justify-content-center"><div class="mx-auto form-inline mt-5 "><div class="form-group mx-auto"><label class="text-center col-md-3" for="workTitle"><u>Titre:</u></label><div class="col-md-9 pr-0"><input type="text" class="form-control" id="workTitle" name="workTitle" placeholder="Titre du projet" required autofocus /></div></div></div></div><div class="row justify-content-center"><div class="mx-auto form-inline mt-5 "><div class="form-group mx-auto"><label class="text-center col-md-3" for="workCategory"><u>Cat:</u></label><div class="col-md-9 pr-0"><input type="text" class="form-control" id="workCategory" name="workCategory" placeholder="Catégorie du projet" required autofocus /></div></div></div></div><div class="row justify-content-center"><div class="mx-auto form-inline mt-5 "><div class="form-group mx-auto"><label class="text-center col-md-3" for="workLink"><u>Lien:</u></label><div class="col-md-9 pr-0"><input type="text" class="form-control" id="workLink" name="workLink" placeholder="Lien GitHub du projet" required autofocus /></div></div></div></div><div class="row justify-content-center mt-3"><div class="form-group col-md-12 col-sm-12"><label class="text-center" for="workDescription"><u>Description:</u></label><div class="col-md-12 col-sm-12"><textarea class="form-control" rows="6" id="workDescription" name="workDescription" placeholder="Description du projet ici !..." required autofocus></textarea></div></div></div><div class="row mt-3"><div class="form-group col-md-12"><div class="col-md-12"><input type="hidden" name="workId" value="<?= $eachWork->id(); ?>" /></div></div></div><div class="row justify-content-center"><button type="submit" id="btnWorkDetails" class="btn btn-primary mx-auto mt-3"  name="btnWorkDetails" />Envoyer à la BDD</button></div></form><div><a href="<?="https://mmtmc.alwaysdata.net/index.php?action=adminWork&amp;id=".$eachWork->id(); ?>"><button class="btn btn-primary mx-auto mt-3" id="linkEachWork">Ajouter des slides pour chaque projet</button></a></div></div>');
    
}








