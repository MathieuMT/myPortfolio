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
    
    $('.certificate').click(function(e) {
        
        e.preventDefault();
        
        
        var $certificate = $(this);
        
        if ($certificate.hasClass('active')) {
            
            return true;
            
        }
        
        
        var $detail = $certificate.parent().nextAll('.row-detail:first');
        
        var $certificate_detail = $('.certificate_detail', $certificate).clone();
        
        
        $('.certificate').removeClass('active');
        
        $certificate.addClass('active');
        
        if($active) {
            var $el = $active;
            $el.slideUp(500, function() {
                $el.remove();
            });
            
        }
        
        $detail.append($certificate_detail);
        
        
        
        $certificate_detail.slideDown();
        
        $active = $certificate_detail;
        
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



