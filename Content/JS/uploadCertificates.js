$(function () {
    var files = $("#files");

    $("#fileupload").fileupload({
        url: 'index.php?action=adminCertificates',
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
            $("#files").fadeIn().append('<p><img style="width: 100px; height: 100px;" src="' + path + '" /></p>');
        } else
            $("#error").html(msg);
    }).on('fileuploadprogressall', function (e, data) {
        var progress = parseInt(data.loaded / data.total * 100, 10);
        $("#progress").html("Completed: " + progress + "%");
    });
});