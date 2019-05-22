/*
$(document).ready(function() {
    
    var $active = false;
    
    $('.certificate').click(function(e) {
        
        e.preventDefault();
        
        
        var $certificate = $(this);
        
        var $detail = $certificate.parent().nextAll('.row-detail:first');
        
        var $certificate_detail = $('.certificate_detail', $certificate).clone();
        
        if($active) {
            var $el = $active;
            $el.slideUp(500, function() {
                $el.remove();
            });
            
        }
        
        $detail.append($certificate_detail);
        
        
        
        $certificate_detail.slideDown();
        
        $active = $certificate_detail;
        
    })
    
    
})
*/




$(document).ready(function() {
    
    var $active = false;
    
    /*
    window.onhashchange = function() {
        
        alert(window.location.hash);
        
    }
    */
    
    $('.certificate').click(function(e) {
        
        e.preventDefault();
        
        
        
        var $certificate = $(this);
        
        
        
        if ($certificate.hasClass('active')) {
            
            return true;
            
        }
        
        
        var $detail = $certificate.parent().nextAll('.row-detail:first');
        
        var $certificate_detail = $('.certificate_detail', $certificate).clone();
        
        // Fonction d'Affichage:
        var showElement = function() {
            
            $detail.append($certificate_detail);
            
            $certificate_detail.slideDown();
            
            /* Animation (avec 4 éléments échelonner avec les stagger): */
            for(var i = 1; i <= 4; i++) {
                $('.stagger' + i, $certificate_detail).css({opacity:0,marginLeft:-20}).delay(300 + 200 * i).animate({opacity:1, marginLeft:0});
            }
            
            $active = $certificate_detail;
            
        }
        
        // Fonction qui cache l'élément actif:
        var hideActive = function() {
            
            var $el = $active;
            $el.slideUp(500, function() {
                $el.remove();
            });
        };
        
        
      
        // Traitement des éxecutions:
        $('.certificate').removeClass('active');
        
        $certificate.addClass('active');
        
        if($active) {
            
            hideActive();
        }
      
        showElement();

        window.location.hash = $certificate.attr('id');
        
    })
    
    
    // En raffraichissant la page, je reste sur le hash:
    if (window.location.hash) {
        
        var $target = $(window.location.hash);
        
        if ($target.length > 0) {
            
            $target.trigger('click');
            
            // Après avoir rafraichir la page, ça scroll sur l'élément où on est:
            scrollTo($target);
        } 
    }
    
});

// Scroll la fenêtre sur la cible
var scrollTo = function(cible) {
    
    $('html, body').animate({scrollTop: cible.offset().top}, 750);
    
}



