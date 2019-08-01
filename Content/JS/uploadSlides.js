/********** SLIDES **********/


function delImgSlide(id) {
    'use strict';
    if (id === 0) 
        alert ('You are not able to delete this image now!');
    else if (confirm('Are you sure that you want to delete this image?')) {
        
        $.ajax({
            url: 'https://mmtmc.alwaysdata.net/index.php?action=uploadSlidesImages',
            method: 'POST',
            dataType: 'text',
            data: {
                delImageSlide: 1,
                id: id,
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

    $("#fileupload2").fileupload({
        url: 'https://mmtmc.alwaysdata.net/index.php?action=uploadSlidesImages',
        dropZone: '#dropZone2',
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
            addImageSlide(path, 0);
            
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


function addImageSlide(path, id) {
    
   if ($('#uploadedFiles2').find('.rowGallery2:last').find('.myImg2').length === 2)
       $('#uploadedFiles2').append('<div class="row rowGallery2"></div>');
    
    $('#uploadedFiles2').find('.rowGallery2:last').append('<h3 class="text-center col-md-12">Ajouter ou Modifier les informations du diapositif numéro <?= $eachSlide->id(); ?></h3><br/><h6 class="text-center col-md-12"><i>(Pour supprimer un diapositif et ses informations de la base de données: cliquer sur son image!)</i></h6><br /><div id="'+id+'" class="col-md-5 myImg2" onclick="delImgSlide('+id+')"><img src="'+path+'" /><br /><br /><fieldset class="border p-2"><legend  class="w-auto">Informations BDD</legend><span><label>Nom: </label><b> <?= $eachSlide->name(); ?></b></span><br /></fieldset></div><div class="col-md-7"><form method="POST" action="https://mmtmc.alwaysdata.net/index.php?action=sendSlideDetails"><div class="row justify-content-center"><div class="mx-auto form-inline mt-5 "><div class="form-group mx-auto"><label class="text-center col-md-3" for="slideName"><u>Nom:</u></label><div class="col-md-9 pr-0"><input type="text" class="form-control" id="slideName" name="slideName" placeholder="Nom du diapositif" required autofocus /></div></div></div></div><div class="row mt-3"><div class="form-group col-md-12"><div class="col-md-12"><input type="hidden" name="slideId" value="<?= $eachSlide->id(); ?>" /></div></div></div><div class="row justify-content-center"><button type="submit" id="btnSlideDetails" class="btn btn-primary mx-auto mt-3"  name="btnSlideDetails" />Envoyer à la BDD</button></div></form></div>');
    
}



