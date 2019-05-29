jQuery(document).ready(function($) {
   
    var $active = false;
    
    
    // Gestion de l'historique:
    window.onhashchange = function() {
        
        if (window.location.hash.indexOf('realisation-') < 0) {
            
            return true;
            
        }
        
        var $work = $(window.location.hash);
        
        if($work.length < 1 || $work.hasClass('active')){
            
            return true;
            
        }
        
        //var $detailMobile = $work.siblings('.row-detail-mobile');
        
        var $detailMobile = $work.children('.row-detail-mobile:first');
        
        var $detail = $work.parent().nextAll('.row-detail:first');
       
        var $work_detail = $work.find('.work_detail').clone();
        
        var $work_detail_mobile = $work.find('.work_detail_mobile').clone();
        
        var showElement = function() {
            
            
            ////////////////////////////
            
            if ($(window).width() < 768) {
               
                // alert('Less than 768');
                
                $detailMobile.append($work_detail_mobile);
            
                $work_detail_mobile.stop().slideDown();
            
                // Animation (avec 4 éléments):
                for(var i = 1; i <= 4; i++) {
                    $('.stagger' + i, $work_detail_mobile).css({opacity:0,marginLeft:-20}).delay(300 + 200 * i).animate({opacity:1, marginLeft:0});
                }
            
                $active = $work_detail_mobile;
                
            }
            else {
                //alert('More than 768');
                
                // Affichage:
                $detail.append($work_detail);
            
                $work_detail.stop().slideDown();
            
                // Animation (avec 4 éléments):
                for(var i = 1; i <= 4; i++) {
                    $('.stagger' + i, $work_detail).css({opacity:0,marginLeft:-20}).delay(300 + 200 * i).animate({opacity:1, marginLeft:0});
                }
            
                $active = $work_detail;
            }
            
            ////////////////////////
  
        }
        
        
        
        var hideActive = function() {
            
            var $el = $active;
            $el.slideUp(500, function() {
                
                $el.remove();
                
            });
        }
        
        var buildSlideshow = function() {
            
            $('.work_slideshow', $work_detail).nivoSlider({
            
                effect : 'boxRain', 
                directionNav: false,
                controlNav: false,
                pauseTime: 4000
            
            });
            
            $('.work_slideshow', $work_detail_mobile).nivoSlider({
            
                effect : 'boxRain', 
                directionNav: false,
                controlNav: false,
                pauseTime: 4000
            
            });
            
        }
        
        
        // Traitement de l'execution:
       
        $('.work').removeClass('active');
        
        $work.addClass('active');
       
        if($active) {
            
            hideActive();
        }
        
        showElement();
        
        buildSlideshow();
    }
    
    $('.work').click(function(e) {
       
        e.preventDefault();
       
        window.location.hash = $(this).attr('id');
       
   }); 
    
    window.onhashchange();
    
});



var scrollTo = function(cible) {
    
    $('html, body').animate({scrollTop: cible.offset().top}, 750);
    
}