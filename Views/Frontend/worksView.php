<?php $this->title = 'Portfolio'; ?>


<h1 class="text-center titlePage"><?= $this->title = 'Portfolio' ?></h1>
<br/>
<br/>
<br/>

<h2 class="card-header text-center animated fadeInLeft">Mes réalisations</h2><br />

<div class="container containerGallery" id="uploadedFiles">
  

  
   <div class="works">
   
       <!-- accordion  for large, medium and small screen -->
        
        <div class="accordion" id="accordion">
   
            <div class="row rowGallery">
             
            
            
                <!-- <div class="col-md-4 myImg"></div> -->
               <?php foreach ($aboutWork as $eachWork): ?>
                <div class="card col-lg-4 col-md-6 col-sm-12"> <!-- <div class="card col-lg-4 col-md-6 col-sm-12"> -->
                
                    <div class="card-header" id="heading<?= $eachWork->id(); ?>">
                    
                    
                        <h2 class="mb-0 text-center">
                        
                        
                            <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapse<?= $eachWork->id(); ?>">
                    
                
                                

                                    <img src="Content/img/works/<?= $eachWork->workImg(); ?>" />
                                    
                                    
                                    <div class="card-img-overlay text-center d-flex flex-column justify-content-center"><?= $eachWork->name(); ?></div>

                                
                            
                            
                            </button><!-- button -->
                        
                        
                        </h2>
                    
                    
                    </div><!-- .card-header -->
                    
                
                </div><!-- .card -->
                
                
               
                <div id="collapse<?= $eachWork->id(); ?>" class="collapse col-12 bg" aria-labelledby="heading<?= $eachWork->id(); ?>" data-parent="#accordion">
                
                
                    <div class="card-body">
                    
                         
                        <div class="work_detail">
                        
                        
                            <div class="row">
                            
                            
                                <div class="card-header col-md-12 text-center">
                                
                                
                                    <h2 class="stagger1 animated fadeInLeft"><?= $eachWork->name(); ?></h2>
                                    
                                    <p class="stagger2 animated fadeInLeft text-muted"><em><?= $eachWork->workCategory(); ?></em></p>
                                
                                    
                                    <div class="row stagger3">
                                    
                                           
                                           
                                    <div class="col-md-2"></div>
                                           
                                           
                                           
                                           
                                            <!-- CAROUSSEL -->
                                   
                                    
                                    <div class="col-md-8 carousel carousel-fade">
                                            
                                            
                                        <!-- Indicators -->
                                        <ol class="carousel-indicators">
                                            <?php
                                            $i=0;
                                            
                                            if (count($aboutSlide)) {
                                                
                                                foreach ($aboutSlide as $eachSlide)  {
                                                    
                                                    if ($eachSlide->work_id() == $eachWork->id()) {
                                                        
                                                        if ($i == 0) {
                                                            echo '<li class="active"></li>';
                                                            $i++;

                                                        }else {
                                                            echo '<li></li>';
                                                            $i++;

                                                        }


                                                    }
                                                }
                                            }
                                                
                                            ?>

                                        </ol>
                                        

                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner">
                                            
                                            <?php
                                            $a=0;
                                            
                                            if (count($aboutSlide)) {
                                                
                                                foreach ($aboutSlide as $eachSlide)  {
                                                    
                                                    if ($eachSlide->work_id() == $eachWork->id()) {

                                                        if ($a == 0) {
                                                            $a++;

                                                ?>
                                                            <div class="carousel-item active">

                                                                        <img class="d-block w-100" src="Content/img/slides_works/<?= $eachSlide->slideImg(); ?>" alt="<?= $eachSlide->name(); ?>" />

                                                                        <div class="carousel-caption d-md-block">

                                                                        <h2><?= $eachSlide->name(); ?></h2>

                                                                        <p class="lead"></p>

                                                                        </div>

                                                                    </div>;

                                                   <?php         
                                                        }else {
                                                            $a++;
                                                    ?>
                                                           <div class="carousel-item">

                                                                    <img class="d-block w-100" src="Content/img/slides_works/<?= $eachSlide->slideImg(); ?>" alt="<?= $eachSlide->name(); ?>" />

                                                                    <div class="carousel-caption d-md-block">

                                                                    <h2><?= $eachSlide->name(); ?></h2>

                                                                    <p class="lead"></p>

                                                                    </div>

                                                                </div>;

                                                    <?php   
                                                        }

                                                    }
                                                }
                                            }

                                            ?>
                                             

                                        </div>

                                    </div>
                                       
                                    <!-------------------->
                                            
                                            
                                            
                                     <div class="col-md-2"></div>       
                                            
                                            
                                            
                                            
                                    </div>
                                    
                                    
                                </div><!-- .card-header -->
                            
                            
                            
                            </div><!-- .row -->
                            
                            <div class="row">
                               
                                
                                <div class="card-body col-12 text-center">
                                    
                                    
                                    <p class="stagger4 animated fadeInLeft text-justify"><?= $eachWork->workDescription(); ?><br /><label>Lien du projet sur GitHub:</label><a href="<?= $eachWork->workLink(); ?>" target="_blank"> <i class="fab fa-github"></i></a></p>
                                    
                                    
                                </div><!-- .card-body -->
                                
                            </div><!-- .row -->
                            
                            
                           <hr class="hr"/>
                        
                        
                        </div><!-- .work_detail -->
                      
                        
                       
                    </div><!-- .card-body -->   
                
                
                </div><!-- .collapse -->
               
                
                
            
            <?php endforeach; ?>
           
            </div><!-- .row .rowGallery -->

          
       </div><!-- end #accordion --> 
       
    
    </div><!-- .works -->
    
    
</div><!-- .container .containerGallery --> 

  
    
      
        
            
<hr class="hr"/>

      
        
   
       




<!-- slideshow -->
<script src="Content/JS/work.js"></script>



    
