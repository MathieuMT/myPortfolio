<?php $this->title = 'Portfolio'; ?>



<div class="heading">
                       
    <h1 class="text-center titlePage card-header
 animated fadeInLeft"><?= $this->title = 'Portfolio - Mes certificats' ?></h1>                
                       
</div>


<div class="certificates">
   
   
    <section class="gallery-block cards-gallery">
   
        <div class="container containerGallery" id="uploadedFiles">
            
            <div class="galleryOne">
           
                <div class="row rowGallery">


                    <?php foreach ($aboutCertificate as $eachCertificate): ?>

                        <div id="<?= $eachCertificate->id(); ?>" class="col-md-6 col-lg-4 animated fadeInLeft" onclick="delImg('<?= $eachCertificate->id(); ?>')">
                           
                            <div class="card border-0 transform-on-hover">
                               
                                <a class="lightbox" href="Content/img/certificats/<?= $eachCertificate->certificatImg(); ?>">
                                
                                    <img src="Content/img/certificats/<?= $eachCertificate->certificatImg(); ?>" class="card-img-top" alt="<?= $eachCertificate->name(); ?>"/>
                                
                                </a>
                                
                                <div class="card-body">
                                   
                                    <h6><b><?= $eachCertificate->name(); ?></b> <?= $eachCertificate->certificatTitle(); ?></h6><br />
                                    
                                    <span><i><?= $eachCertificate->certificatCategory(); ?></i></span><br />
                                    
                                    <p class="text-muted card-text"><?= $eachCertificate->certificatDescription(); ?></p>
                                    
                                </div>
                                
                            </div>
                            
                        </div>


                    <?php endforeach; ?>





                </div>
            
            </div><!-- .galleryOne -->
            
            
            <div class="galleryTwo">
           
                <div class="row rowGallery">

                    <!-- <div class="col-md-4 myImg"></div> -->

                    <?php foreach ($aboutCertificate as $eachCertificate): ?>

                        <div id="<?= $eachCertificate->id(); ?>'" class="col-md-6 col-lg-4 animated fadeInLeft" onclick="delImg('<?= $eachCertificate->id(); ?>')">
                           
                            <div class="card border-0 transform-on-hover">
                               
                                <a class="lightbox" href="Content/img/certificats/<?= $eachCertificate->certificatImg(); ?>">
                                
                                    <img src="Content/img/certificats/<?= $eachCertificate->certificatImg(); ?>" class="card-img-top" alt="<?= $eachCertificate->name(); ?>"/>
                                
                                </a>
                                
                                <div class="card-body">
                                   
                                    <h6><b><?= $eachCertificate->name(); ?></b> <?= $eachCertificate->certificatTitle(); ?></h6><br />
                                    
                                    <span><i><?= $eachCertificate->certificatCategory(); ?></i></span><br />
                                    
                                    <p class="text-muted card-text"><?= $eachCertificate->certificatDescription(); ?></p>
                                    
                                </div>
                                
                            </div>
                            
                        </div>


                    <?php endforeach; ?>





                </div>
            
            </div><!-- .galleryTwo -->
            
            
            
        </div> 
    
    </section>
           

</div>




<!--------------------------------------------------------------------------------------------------->


 



<!-- JAVASCRIPT -->

<!-- baguetteBox -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.0/baguetteBox.min.js"></script>

<!-- Gallerie des certificats -->
<script src="Content/JS/certificate.js"></script>