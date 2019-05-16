$(document).ready(function() {
    
    var $active = false;
    
    $('.certificate').click(function(e) {
        
        e.preventDefault();
        
        
        var $certificate = $(this);
        
        var $detail = $certificate.parent().nextAll('.row-detail:first');
        
        var $certificate_detail = $('.certificate_detail', $certificate).clone();
        
        if($active) {
            $active.remove();
        }
        
        $detail.append($certificate_detail);
        
        
        
        $certificate_detail.show();
        
        $active = $certificate_detail;
        
    })
    
    
})



