/* accélère le chargement des images des diaporamas */

function loadImages() {
    var imgs = document.getElementsByTagName('img');
    for (var i = 0; i < imgs.length; i++) {
        if (imgs[i].getAttribute('data-src')) {
            imgs[i].setAttribute('src', imgs[i].getAttribute('data-src'));
        }
    }
}
 
if (window.addEventListener) { window.addEventListener("load", loadImages, false); }
else if (window.attachEvent) { window.attachEvent("onload", loadImages); }
    
   


jQuery(document).ready(function($) {
       
        $('.carousel').carousel({
         interval: 2000,
         cycle: true
      });

});

