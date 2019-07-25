// Marqueurs de la carte et boutons interractifs avec l'utilisateur:

function initMap() {
  // The location of Monaco/Fontvielle my address
  var fontvielleMC = {lat: 43.72859, lng: 7.41940};
  // The map, centered at Monaco/Fontvielle my address
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 15, center: fontvielleMC});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: fontvielleMC, map: map});
}
    

$(document).ready(function() {
    
    /* EFFET DE FILTRE ET D'OMBRE SUR LA CARTE ET LE FORMULAIRE */
    
    $( ".boxShadow" ).mouseout(function() {
        $( ".fond" ).css("display", "flex");
    });

    $( ".boxShadow" ).mouseover(function() {
        $( ".fond" ).css("display", "none");
   });
    
    $( ".boxShadow2" ).mouseout(function() {
        $( ".fond2" ).css("display", "flex");
    });

    $( ".boxShadow2" ).mouseover(function() {
        $( ".fond2" ).css("display", "none");
   });
    
    
    
    /* FORMULAIRE DE CONTACT - PARTIE AJAX */
    
    $('#btnContact').click(function() {
        
        var contactFirstName = $('#contactFirstName').val();
        var contactLastName = $('#contactLastName').val();
        var contactEmail = $('#contactEmail').val();
        var contactObject = $('#contactObject').val();
        var contactMsg = $('#contactMsg').val();
        
        var dataString = '&contactFirstName1=' + contactFirstName + '&contactLastName1=' + contactLastName + '&contactEmail1=' + contactEmail + '&contactObject1=' + contactObject + '&contactMsg1=' + contactMsg;
        
        console.log(dataString);
        
        if (contactFirstName == '' || contactLastName == '' || contactEmail == '' || contactObject == '' || contactMsg == '') {
            $('#display').html("<div class='alert alert-warning mt-2'>Veuillez remplir les champs du formulaire de contact</div>");
        } else {
           /* 
           $('#display').html("<div class='alert alert-success mt-2'>Merci de me contacter, je vous répondrai au plus vite dans un jour ouvrable.</div>");
           */
            
            $.ajax({
                type: "POST",
                async: true,
                dataType: 'text',
                url: 'index.php?action=submitContactData',
                data: dataString,
                success: function (result) {
                    $("#display").html(result);
                }
            });
            
            
        }
        
        return false;
        
    });
    
});



    


 



