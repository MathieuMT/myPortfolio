$(document).ready(function() {
    // console.log('document is ready - 1');
    getImages(0, "<?php echo $numRows ?>");
   
});


function getImages(start, max) {
    if (start > max)
        return;
    
    $.ajax({
        url: 'index.php?action=uploadCertificatesImages',
        method: 'POST',
        dataType: 'json',
        data: {
            getImages: 1,
            start: start
        }, success: function (response)
            {
                for (var i = 0; i < response.images.length; i++)
                    addImage("Content/img/certificats/" + response.images[i].path, response.images[i].id);
                
                getImages((start + 8), max);
            }
    });
    
}




function delImg(id) {
    
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
                
                /*$("#"+id).slideUp('slow', function () {
                    $(this).remove();
                });
                  */  
                //alert('Jquery est prêt'); 
                
                
                //$('<div id="'+id+'" class="col-md-3 myImg" onclick="delImg('+id+')"><img src="Content/img/certificats/'+id+'" /></div>').remove();
               
                /********* GOOD ***************/
                
                // SUPPRIME la DIV contenant l'iamge:
               $("#"+id).remove(response);
                
                // Rafraichit la fenêtre où on est :
                window.location.reload();
                
                /***************************/
                
                
                //window.location = window.location.pathname;
               //$("#"+id+"+ .myImg").remove();
                
                //$("#"+id).css("display","none");
                
               
            }
            
        });
        
    }
}



$(function () {
    // console.log('document is ready - 2');
    
    var files = $("#files");

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
            
            
            
            
           // var path = data.originalFiles[0]['name'];
            /*
            for (i = 0; i < data.lenght; i++ ) {
                console.log(data[i]);
            }
            */
            
        } else
            $("#error").html(msg);
    }).on('fileuploadprogressall', function (e, data) {
        var progress = parseInt(data.loaded / data.total * 100, 10);
        $("#progress").html("Completed: " + progress + "%");
    });
});


function addImage(path, id) {
    
   if ($('#uploadedFiles').find('.rowGallery:last').find('.myImg').length === 3)
       $('#uploadedFiles').append('<div class="row rowGallery"></div>');
    
    $('#uploadedFiles').find('.rowGallery:last').append('<div id="'+id+'" class="col-md-4 myImg" onclick="delImg('+id+')"><img src="'+path+'" /></div>');
    
}



