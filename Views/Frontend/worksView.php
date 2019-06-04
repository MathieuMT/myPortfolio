<?php $this->title = 'Portfolio'; ?>




<h1 class="text-center titlePage"><?= $this->title = 'Portfolio - Mes réalisations' ?></h1>
<br/>
<br/>
<br/>



<?php
/* $aboutWork est la variable provenant de WorkManager.php qui envoie en tableau d'objets "works" donc pour chaque objet, on fait une boucle renvoyant les données de chaque objet "Work"  ( dans la méthode "getWorkDescription()" d' "WorkManager.php" qui insatncie l'entité "Work" en objet )*/

echo 'tableau d\'objets où chaque objet contient un tableau de données de la BDD :';
var_dump($aboutWork); 
echo '<hr>';
foreach ($aboutWork as $eachWork): ?>



<?php var_dump($eachWork); ?>
<fieldset>
    <article>
       
            id: <?= $eachWork->id(); ?><br />name:<?= $eachWork->name(); ?><br />slug: <?php var_dump($eachWork->slug()); ?><br />categorie_id: <?php var_dump($eachWork->categiryid()); ?>
            
        
    </article>
</fieldset>
    <hr />
<?php endforeach; ?>

<hr class="hr"/>
<br />
<br />
<br />
<br />


  
   <h1 class="card-header text-center animated fadeInLeft">Réalisations</h1><br />
   
    <div class="works">
       
       
       
       
        <!-- accordion 1 for lg screen -->
        
        <div class="accordion" id="accordionLg">

           <div class="row">

                <div class="card col-4">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0 text-center">
                            <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"><img class="card-img-top"src="https://picsum.photos/200" alt=""><div class="card-img-overlay text-center d-flex flex-column justify-content-center">What is HTML?</div></button>									
                        </h2>
                    </div>

                </div>
                <div class="card col-4">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0 text-center">
                            <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"><img class="card-img-top"src="https://picsum.photos/200" alt=""><div class="card-img-overlay text-center d-flex flex-column justify-content-center">What is Bootstrap?</div></button>
                        </h2>
                    </div>

                </div>
                <div class="card col-4">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0 text-center">
                            <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"><img class="card-img-top"src="https://picsum.photos/200" alt=""><div class="card-img-overlay text-center d-flex flex-column justify-content-center">What is CSS?</div></button>                     
                        </h2>
                    </div>

                </div>

            </div>

            <div class="row">
                 <div id="collapseOne" class="collapse col-12" aria-labelledby="headingOne" data-parent="#accordionLg">
                    <div class="card-body">

                        <div class="work_detail">
                            <div class="row">
                                
                                <div class="card-header col-md-12 text-center">
                                    <h2 class="stagger1 animated fadeInLeft">Ma Réalisation </h2>
                                    <p class="stagger2 animated fadeInLeft text-muted"><em>HTML</em></p>
                                    
                                    
                                    
                                    <div class="row stagger3">
                                        
                                        <!--
                                        <div class="col-md-3"></div>
                                        -->
                                        <!--
                                        <div class="col-md-6 work_slideshow card-img img-content animated fadeInLeft">


                                            <img src="https://picsum.photos/200" alt="" />
                                            <img src="https://picsum.photos/id/237/200/300" alt="" />
                                            <img src="https://picsum.photos/200/300/?blur" alt="" />
                                            <img src="https://picsum.photos/id/870/200/300?grayscale&blur" alt="" />


                                        </div>
                                        -->
                                        <!--
                                        <div id="carouselExampleSlidesOnly" class="carousel slide custom-carousel col-md-6" data-ride="carousel">
                                          <div class="carousel-inner">
                                            <div class="carousel-item active">
                                              <img class="d-block w-100" src="https://picsum.photos/200" alt="First slide">
                                            </div>
                                            <div class="carousel-item">
                                              <img class="d-block w-100" src="https://picsum.photos/id/237/200/300" alt="Second slide">
                                            </div>
                                            <div class="carousel-item">
                                              <img class="d-block w-100" src="https://picsum.photos/200/300/?blur" alt="Third slide">
                                            </div>
                                          </div>
                                        </div>
                                     --->
                                        <!--
                                        <div class="col-md-3"></div>
                                        -->
                                     
                                        
                                       
                                    <div class="col-md-2"></div>
                                     
                                    <!-- Carousel -->
                                    
                                    
                                    <div class="col-md-8 carousel carousel-fade">

                                        <ol class="carousel-indicators">

                                            <li class="active"></li>

                                            <li></li>

                                            <li></li>

                                        </ol>

                                        <div class="carousel-inner">

                                            <div class="carousel-item active">

                                            <img class="d-block w-100" src="https://picsum.photos/200" alt="First slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                            <div class="carousel-item">

                                           <img class="d-block w-100" src="https://picsum.photos/id/237/200/300" alt="Second slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                            <div class="carousel-item">

                                            <img class="d-block w-100" src="https://picsum.photos/200/300/?blur" alt="Third slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                       
                                    <!-------------------->
                                    
                                    <div class="col-md-2"></div>
                                        
                                    </div><!-- .row .stagger3 -->
                                   

                                </div>
                                
                            </div>
                            
                            <div class="row">
                               
                                
                                <div class="card-body col-12 text-center">
                                    
                                    
                                    <p class="stagger4 animated fadeInLeft text-justify">HTML stands for HyperText Markup Language. HTML is the standard markup language for describing the structure of web pages. <a href="https://www.tutorialrepublic.com/html-tutorial/" target="_blank">Learn more.</a></p>
                                </div>
                                
                            </div>
                           <hr class="hr"/>
                        </div>
                    </div>
                </div>


            </div>
            <div class="row">
                  <div id="collapseTwo" class="collapse col-12" aria-labelledby="headingTwo" data-parent="#accordionLg">
                    <div class="card-body">
                        <div class="work_detail">
                            <div class="row">
                               
                                <div class="card-header col-md-12 text-center">
                                    <h2 class="stagger1 animated fadeInLeft">Ma Réalisation </h2>
                                    <p class="stagger2 animated fadeInLeft text-muted"><em>BOOTSTRAP</em></p>
                                    
                                    <div class="row stagger3">
                                        
                                        <div class="col-md-2"></div>
                                     
                                    <!-- Carousel -->
                                    
                                    
                                    <div class="col-md-8 carousel carousel-fade">

                                        <ol class="carousel-indicators">

                                            <li class="active"></li>

                                            <li></li>

                                            <li></li>

                                        </ol>

                                        <div class="carousel-inner">

                                            <div class="carousel-item active">

                                            <img class="d-block w-100" src="https://picsum.photos/200" alt="First slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                            <div class="carousel-item">

                                           <img class="d-block w-100" src="https://picsum.photos/id/237/200/300" alt="Second slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                            <div class="carousel-item">

                                            <img class="d-block w-100" src="https://picsum.photos/200/300/?blur" alt="Third slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                       
                                    <!-------------------->
                                    
                                    <div class="col-md-2"></div>
                                        
                                    </div>

                                </div>
                                
                            </div>
                            
                            <div class="row">
                               
                                <div class="card-body col-12 text-center">
                                    
                                    
                                    <p class="stagger4 animated fadeInLeft text-justify">Bootstrap is a sleek, intuitive, and powerful front-end framework for faster and easier web development. It is a collection of CSS and HTML conventions. <a href="https://www.tutorialrepublic.com/twitter-bootstrap-tutorial/" target="_blank">Learn more.</a></p>
                                </div>
                                
                            </div>
                           <hr class="hr"/>
                        </div>
                    </div>
                </div>


            </div>
            
            <div class="row">
                <div id="collapseThree" class="collapse col-12" aria-labelledby="headingThree" data-parent="#accordionLg">
                    <div class="card-body">
                        <div class="work_detail">
                            <div class="row">
                               
                                <div class="card-header col-md-12 text-center">
                                    
                                    <h2 class="stagger1 animated fadeInLeft">Ma Réalisation </h2>
                                    <p class="stagger2 animated fadeInLeft text-muted"><em>CSS</em></p>
                                    
                                    <div class="row stagger3">
                                        
                                        <div class="col-md-2"></div>
                                     
                                    <!-- Carousel -->
                                    
                                    
                                    <div class="col-md-8 carousel carousel-fade">

                                        <ol class="carousel-indicators">

                                            <li class="active"></li>

                                            <li></li>

                                            <li></li>

                                        </ol>

                                        <div class="carousel-inner">

                                            <div class="carousel-item active">

                                            <img class="d-block  w-100" src="https://picsum.photos/200" alt="First slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                            <div class="carousel-item">

                                           <img class="d-block  w-100" src="https://picsum.photos/id/237/200/300" alt="Second slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                            <div class="carousel-item">

                                            <img class="d-block  w-100" src="https://picsum.photos/200/300/?blur" alt="Third slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                       
                                    <!-------------------->
                                    
                                    <div class="col-md-2"></div>
                                        
                                    </div>

                                </div>
                                
                            </div>
                            
                            <div class="row">
                               
                                <div class="card-body col-12 text-center">
                                    
                                    
                                    <p class="stagger4 animated fadeInLeft text-justify">CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such as colors, backgrounds, fonts etc. <a href="https://www.tutorialrepublic.com/css-tutorial/" target="_blank">Learn more.</a></p>
                                </div>
                                
                            </div>
                           <hr class="hr"/>
                        </div>
                    </div>
                </div>


            </div>

           <div class="row">

                <div class="card col-4">
                    <div class="card-header" id="headingFour">
                        <h2 class="mb-0 text-center">
                            <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseFour"><img class="card-img-top"src="https://picsum.photos/200" alt=""><div class="card-img-overlay text-center d-flex flex-column justify-content-center">What is HTML?</div></button>									
                        </h2>
                    </div>

                </div>
                <div class="card col-4">
                    <div class="card-header" id="headingFive">
                        <h2 class="mb-0 text-center">
                            <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive"><img class="card-img-top"src="https://picsum.photos/200" alt=""><div class="card-img-overlay text-center d-flex flex-column justify-content-center">What is Bootstrap?</div></button>
                        </h2>
                    </div>

                </div>
                <div class="card col-4">
                    <div class="card-header" id="headingSix">
                        <h2 class="mb-0 text-center">
                            <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix"><img class="card-img-top"src="https://picsum.photos/200" alt=""><div class="card-img-overlay text-center d-flex flex-column justify-content-center">What is CSS?</div></button>                     
                        </h2>
                    </div>

                </div>

            </div>

            <div class="row">
                <div id="collapseFour" class="collapse col-12" aria-labelledby="headingFour" data-parent="#accordionLg">
                    <div class="card-body">
                        <div class="work_detail">
                            <div class="row">
                               
                                
                                <div class="card-header col-md-12 text-center">
                                    <h2 class="stagger1 animated fadeInLeft">Ma Réalisation </h2>
                                    <p class="stagger2 animated fadeInLeft text-muted"><em>HTML</em></p>
                                    
                                    <div class="row stagger3">
                                        
                                        <div class="col-md-2"></div>
                                     
                                    <!-- Carousel -->
                                    
                                    
                                    <div class="col-md-8 carousel carousel-fade">

                                        <ol class="carousel-indicators">

                                            <li class="active"></li>

                                            <li></li>

                                            <li></li>

                                        </ol>

                                        <div class="carousel-inner">

                                            <div class="carousel-item active">

                                            <img class="d-block w-100" src="https://picsum.photos/200" alt="First slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                            <div class="carousel-item">

                                           <img class="d-block w-100" src="https://picsum.photos/id/237/200/300" alt="Second slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                            <div class="carousel-item">

                                            <img class="d-block w-100" src="https://picsum.photos/200/300/?blur" alt="Third slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                       
                                    <!-------------------->
                                    
                                    <div class="col-md-2"></div>
                                        
                                    </div>

                                </div>
                                
                            </div>
                            
                            <div class="row">
                                <div class="card-body col-12 text-center">
                                    
                                    
                                    <p class="stagger4 animated fadeInLeft text-justify">HTML stands for HyperText Markup Language. HTML is the standard markup language for describing the structure of web pages. <a href="https://www.tutorialrepublic.com/html-tutorial/" target="_blank">Learn more.</a></p>
                                </div>
                            </div>
                           <hr class="hr"/>
                        </div> 
                    </div>
                </div>

            </div>

            <div class="row">
                    <div id="collapseFive" class="collapse col-12" aria-labelledby="headingFive" data-parent="#accordionLg">
                    <div class="card-body">
                        <div class="work_detail">
                            <div class="row">
                               
                                <div class="card-header col-md-12 text-center">
                                    <h2 class="stagger1 animated fadeInLeft">Ma Réalisation </h2>
                                    <p class="stagger2 animated fadeInLeft text-muted"><em>BOOTSTRAP</em></p>
                                    
                                    <div class="row stagger3">
                                        
                                        <div class="col-md-2"></div>
                                     
                                    <!-- Carousel -->
                                    
                                    
                                    <div class="col-md-8 carousel carousel-fade">

                                        <ol class="carousel-indicators">

                                            <li class="active"></li>

                                            <li></li>

                                            <li></li>

                                        </ol>

                                        <div class="carousel-inner">

                                            <div class="carousel-item active">

                                            <img class="d-block w-100" src="https://picsum.photos/200" alt="First slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                            <div class="carousel-item">

                                           <img class="d-block w-100" src="https://picsum.photos/id/237/200/300" alt="Second slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                            <div class="carousel-item">

                                            <img class="d-block w-100" src="https://picsum.photos/200/300/?blur" alt="Third slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                       
                                    <!-------------------->
                                    
                                    <div class="col-md-2"></div>
                                        
                                    </div>

                                </div>
                                
                            </div>
                            
                            <div class="row">
                                <div class="card-body col-12 text-center">
                                    
                                    
                                    <p class="stagger4 animated fadeInLeft text-justify">Bootstrap is a sleek, intuitive, and powerful front-end framework for faster and easier web development. It is a collection of CSS and HTML conventions. <a href="https://www.tutorialrepublic.com/twitter-bootstrap-tutorial/" target="_blank">Learn more.</a></p>
                                </div>
                            </div>
                           <hr class="hr"/>
                        </div> 
                    </div>
                </div>


            </div>
            
            <div class="row">
                <div id="collapseSix" class="collapse col-12" aria-labelledby="headingSix" data-parent="#accordionLg">
                    <div class="card-body">  
                        <div class="work_detail">
                            <div class="row">
                                
                                <div class="card-header col-md-12 text-center">
                                    <h2 class="stagger1 animated fadeInLeft">Ma Réalisation </h2>
                                    <p class="stagger2 animated fadeInLeft text-muted"><em>CSS</em></p>
                                    
                                    <div class="row stagger3">
                                        
                                        <div class="col-md-2"></div>
                                     
                                    <!-- Carousel -->
                                    
                                    
                                    <div class="col-md-8 carousel carousel-fade">

                                        <ol class="carousel-indicators">

                                            <li class="active"></li>

                                            <li></li>

                                            <li></li>

                                        </ol>

                                        <div class="carousel-inner">

                                            <div class="carousel-item active">

                                            <img class="d-block w-100" src="https://picsum.photos/200" alt="First slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                            <div class="carousel-item">

                                           <img class="d-block w-100" src="https://picsum.photos/id/237/200/300" alt="Second slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                            <div class="carousel-item">

                                            <img class="d-block w-100" src="https://picsum.photos/200/300/?blur" alt="Third slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                       
                                    <!-------------------->
                                    
                                    <div class="col-md-2"></div>
                                        
                                    </div>

                                </div>
                                
                            </div>
                               
                            <div class="row">
                                <div class="card-body col-12 text-center">
                                    
                                    
                                    <p class="stagger4 animated fadeInLeft text-justify">CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such as colors, backgrounds, fonts etc. <a href="https://www.tutorialrepublic.com/css-tutorial/" target="_blank">Learn more.</a></p>
                                </div>
                            </div>
                           <hr class="hr"/>
                        </div>
                    </div>
                </div>


            </div>

            
            <div class="row">

                <div class="card col-4">
                    <div class="card-header" id="headingSeven">
                        <h2 class="mb-0 text-center">
                            <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseSeven"><img class="card-img-top"src="https://picsum.photos/200" alt=""><div class="card-img-overlay text-center d-flex flex-column justify-content-center">What is HTML?</div></button>									
                        </h2>
                    </div>

                </div>
                <div class="card col-4">
                    <div class="card-header" id="headingHeight">
                        <h2 class="mb-0 text-center">
                            <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseHeight"><img class="card-img-top"src="https://picsum.photos/200" alt=""><div class="card-img-overlay text-center d-flex flex-column justify-content-center">What is Bootstrap?</div></button>
                        </h2>
                    </div>

                </div>
                <div class="card col-4">
                    <div class="card-header" id="headingNine">
                        <h2 class="mb-0 text-center">
                            <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseNine"><img class="card-img-top"src="https://picsum.photos/200" alt=""><div class="card-img-overlay text-center d-flex flex-column justify-content-center">What is CSS?</div></button>                     
                        </h2>
                    </div>

                </div>

            </div>

            <div class="row">
                 <div id="collapseSeven" class="collapse col-12" aria-labelledby="headingSeven" data-parent="#accordionLg">
                    <div class="card-body">
                        <div class="work_detail">
                            <div class="row">
                               
                                <div class="card-header col-md-12 text-center">
                                    <h2 class="stagger1 animated fadeInLeft">Ma Réalisation </h2>
                                    <p class="stagger2 animated fadeInLeft text-muted"><em>HTML</em></p>
                                    
                                    <div class="row stagger3">
                                        
                                        <div class="col-md-2"></div>
                                     
                                    <!-- Carousel -->
                                    
                                    
                                    <div class="col-md-8 carousel carousel-fade">

                                        <ol class="carousel-indicators">

                                            <li class="active"></li>

                                            <li></li>

                                            <li></li>

                                        </ol>

                                        <div class="carousel-inner">

                                            <div class="carousel-item active">

                                            <img class="d-block w-100" src="https://picsum.photos/200" alt="First slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                            <div class="carousel-item">

                                           <img class="d-block w-100" src="https://picsum.photos/id/237/200/300" alt="Second slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                            <div class="carousel-item">

                                            <img class="d-block w-100" src="https://picsum.photos/200/300/?blur" alt="Third slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                       
                                    <!-------------------->
                                    
                                    <div class="col-md-2"></div>
                                        
                                    </div>

                                </div>
                                
                            </div>
                               
                            <div class="row">
                                <div class="card-muted col-12 text-center">
                                    
                                    
                                    <p class="stagger4 animated fadeInLeft text-justify">HTML stands for HyperText Markup Language. HTML is the standard markup language for describing the structure of web pages. <a href="https://www.tutorialrepublic.com/html-tutorial/" target="_blank">Learn more.</a></p>
                                </div>
                            </div>
                           <hr class="hr"/>
                        </div>
                    </div>
                </div>


            </div>

            <div class="row">
                <div id="collapseHeight" class="collapse col-12" aria-labelledby="headingHeight" data-parent="#accordionLg">
                    <div class="card-body">
                        <div class="work_detail">
                            <div class="row">
                               
                                <div class="card-header col-md-12 text-center">
                                    <h2 class="stagger1 animated fadeInLeft">Ma Réalisation </h2>
                                    <p class="stagger2 animated fadeInLeft text-muted"><em>BOOTSTRAP</em></p>
                                    
                                    <div class="row stagger3">
                                        
                                        <div class="col-md-2"></div>
                                     
                                    <!-- Carousel -->
                                    
                                    
                                    <div class="col-md-8 carousel carousel-fade">

                                        <ol class="carousel-indicators">

                                            <li class="active"></li>

                                            <li></li>

                                            <li></li>

                                        </ol>

                                        <div class="carousel-inner">

                                            <div class="carousel-item active">

                                            <img class="d-block w-100" src="https://picsum.photos/200" alt="First slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                            <div class="carousel-item">

                                           <img class="d-block w-100" src="https://picsum.photos/id/237/200/300" alt="Second slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                            <div class="carousel-item">

                                            <img class="d-block w-100" src="https://picsum.photos/200/300/?blur" alt="Third slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                       
                                    <!-------------------->
                                    
                                    <div class="col-md-2"></div>
                                        
                                    </div>

                                </div>
                                
                            </div>
                            
                            <div class="row">
                                <div class="card-body col-12 text-center">
                                    
                                    
                                    <p class="stagger4 animated fadeInLeft text-justify">Bootstrap is a sleek, intuitive, and powerful front-end framework for faster and easier web development. It is a collection of CSS and HTML conventions. <a href="https://www.tutorialrepublic.com/twitter-bootstrap-tutorial/" target="_blank">Learn more.</a></p>
                                </div>
                            </div>
                           <hr class="hr"/>
                        </div>
                    </div>
                </div>


            </div>

            <div class="row">
                <div id="collapseNine" class="collapse col-12" aria-labelledby="headingNine" data-parent="#accordionLg">
                    <div class="card-body">
                        <div class="work_detail">
                            <div class="row">
                               
                                <div class="card-header col-md-12 text-center">
                                    <h2 class="stagger1 animated fadeInLeft">Ma Réalisation </h2>
                                    <p class="stagger2 animated fadeInLeft text-muted"><em>CSS</em></p>
                                    
                                    <div class="row stagger3">
                                        
                                        <div class="col-md-2"></div>
                                     
                                    <!-- Carousel -->
                                    
                                    
                                    <div class="col-md-8 carousel carousel-fade">

                                        <ol class="carousel-indicators">

                                            <li class="active"></li>

                                            <li></li>

                                            <li></li>

                                        </ol>

                                        <div class="carousel-inner">

                                            <div class="carousel-item active">

                                            <img class="d-block w-100" src="https://picsum.photos/200" alt="First slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                            <div class="carousel-item">

                                           <img class="d-block w-100" src="https://picsum.photos/id/237/200/300" alt="Second slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                            <div class="carousel-item">

                                            <img class="d-block w-100" src="https://picsum.photos/200/300/?blur" alt="Third slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                       
                                    <!-------------------->
                                    
                                    <div class="col-md-2"></div>
                                        
                                    </div>

                                </div>
                                
                            </div>
                            
                            <div class="row">
                                <div class="card-body col-12 text-center">
                                    
                                    
                                    <p class="stagger4 animated fadeInLeft text-justify">CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such as colors, backgrounds, fonts etc. <a href="https://www.tutorialrepublic.com/css-tutorial/" target="_blank">Learn more.</a></p>
                                </div>
                            </div>
                           <hr class="hr"/>
                        </div> 
                    </div>
                </div>


            </div>


        </div><!-- end #accordion1 -->
        
    
        <!--
        <br />
        <br />
        <br />
        <br />
        <hr />
        <br />
        <br />
        <br />
        <br />
        -->
        
        
        
        
        <!-- accordion 2 for md screen -->
        
        <div class="accordion" id="accordionMd">

           <div class="row">

                <div class="card col-6">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0 text-center">
                            <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"><img class="card-img-top"src="https://picsum.photos/200" alt=""><div class="card-img-overlay text-center d-flex flex-column justify-content-center">What is HTML?</div></button>									
                        </h2>
                    </div>

                </div>
                <div class="card col-6">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0 text-center">
                            <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"><img class="card-img-top"src="https://picsum.photos/200" alt=""><div class="card-img-overlay text-center d-flex flex-column justify-content-center">What is Bootstrap?</div></button>
                        </h2>
                    </div>

                </div>
                

            </div>

            <div class="row">
                 <div id="collapseOne" class="collapse col-12" aria-labelledby="headingOne" data-parent="#accordionMd">
                    <div class="card-body">

                        <div class="work_detail">
                            <div class="row">
                                
                                <div class="card-header col-md-12 text-center">
                                    <h2 class="stagger1 animated fadeInLeft">Ma Réalisation </h2>
                                    <p class="stagger2 animated fadeInLeft text-muted"><em>HTML</em></p>
                                    
                                    <div class="row stagger3">
                                        
                                        <div class="col-md-2"></div>
                                     
                                    <!-- Carousel -->
                                    
                                    
                                    <div class="col-md-8 carousel carousel-fade">

                                        <ol class="carousel-indicators">

                                            <li class="active"></li>

                                            <li></li>

                                            <li></li>

                                        </ol>

                                        <div class="carousel-inner">

                                            <div class="carousel-item active">

                                            <img class="d-block w-100" src="https://picsum.photos/200" alt="First slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                            <div class="carousel-item">

                                           <img class="d-block w-100" src="https://picsum.photos/id/237/200/300" alt="Second slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                            <div class="carousel-item">

                                            <img class="d-block w-100" src="https://picsum.photos/200/300/?blur" alt="Third slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                       
                                    <!-------------------->
                                    
                                    <div class="col-md-2"></div>
                                        
                                    </div>

                                </div>
                                
                            </div>
                            
                            <div class="row">
                               
                                
                                <div class="card-body col-12 text-center">
                                    
                                    
                                    <p class="stagger4 animated fadeInLeft text-justify">HTML stands for HyperText Markup Language. HTML is the standard markup language for describing the structure of web pages. <a href="https://www.tutorialrepublic.com/html-tutorial/" target="_blank">Learn more.</a></p>
                                </div>
                                
                            </div>
                           <hr class="hr"/>
                        </div>
                    </div>
                </div>


            </div>

            <div class="row">
                  <div id="collapseTwo" class="collapse col-12" aria-labelledby="headingTwo" data-parent="#accordionMd">
                    <div class="card-body">
                        <div class="work_detail">
                            <div class="row">
                               
                                <div class="card-header col-md-12 text-center">
                                    <h2 class="stagger1 animated fadeInLeft">Ma Réalisation </h2>
                                    <p class="stagger2 animated fadeInLeft text-muted"><em>BOOTSTRAP</em></p>
                                    
                                    <div class="row stagger3">
                                        
                                        <div class="col-md-2"></div>
                                     
                                    <!-- Carousel -->
                                    
                                    
                                    <div class="col-md-8 carousel carousel-fade">

                                        <ol class="carousel-indicators">

                                            <li class="active"></li>

                                            <li></li>

                                            <li></li>

                                        </ol>

                                        <div class="carousel-inner">

                                            <div class="carousel-item active">

                                            <img class="d-block w-100" src="https://picsum.photos/200" alt="First slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                            <div class="carousel-item">

                                           <img class="d-block w-100" src="https://picsum.photos/id/237/200/300" alt="Second slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                            <div class="carousel-item">

                                            <img class="d-block w-100" src="https://picsum.photos/200/300/?blur" alt="Third slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                       
                                    <!-------------------->
                                    
                                    <div class="col-md-2"></div>
                                        
                                    </div>

                                </div>
                                
                            </div>
                            
                            <div class="row">
                               
                                <div class="card-body col-12 text-center">
                                    
                                    
                                    <p class="stagger4 animated fadeInLeft text-justify">Bootstrap is a sleek, intuitive, and powerful front-end framework for faster and easier web development. It is a collection of CSS and HTML conventions. <a href="https://www.tutorialrepublic.com/twitter-bootstrap-tutorial/" target="_blank">Learn more.</a></p>
                                </div>
                                
                            </div>
                           <hr class="hr"/>
                        </div>
                    </div>
                </div>


            </div>

            
           <div class="row">
                
                <div class="card col-6">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0 text-center">
                            <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"><img class="card-img-top"src="https://picsum.photos/200" alt=""><div class="card-img-overlay text-center d-flex flex-column justify-content-center">What is CSS?</div></button>                     
                        </h2>
                    </div>

                </div>

                <div class="card col-6">
                    <div class="card-header" id="headingFour">
                        <h2 class="mb-0 text-center">
                            <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseFour"><img class="card-img-top"src="https://picsum.photos/200" alt=""><div class="card-img-overlay text-center d-flex flex-column justify-content-center">What is HTML?</div></button>									
                        </h2>
                    </div>

                </div>
                

            </div>
            
            <div class="row">
                <div id="collapseThree" class="collapse col-12" aria-labelledby="headingThree" data-parent="#accordionMd">
                    <div class="card-body">
                        <div class="work_detail">
                            <div class="row">
                               
                                <div class="card-header col-md-12 text-center">
                                    
                                    <h2 class="stagger1 animated fadeInLeft">Ma Réalisation </h2>
                                    <p class="stagger2 animated fadeInLeft text-muted"><em>CSS</em></p>
                                    
                                    <div class="row stagger3">
                                        
                                        <div class="col-md-2"></div>
                                     
                                    <!-- Carousel -->
                                    
                                    
                                    <div class="col-md-8 carousel carousel-fade">

                                        <ol class="carousel-indicators">

                                            <li class="active"></li>

                                            <li></li>

                                            <li></li>

                                        </ol>

                                        <div class="carousel-inner">

                                            <div class="carousel-item active">

                                            <img class="d-block w-100" src="https://picsum.photos/200" alt="First slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                            <div class="carousel-item">

                                           <img class="d-block w-100" src="https://picsum.photos/id/237/200/300" alt="Second slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                            <div class="carousel-item">

                                            <img class="d-block w-100" src="https://picsum.photos/200/300/?blur" alt="Third slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                       
                                    <!-------------------->
                                    
                                    <div class="col-md-2"></div>
                                        
                                    </div>

                                </div>
                                
                            </div>
                            
                            <div class="row">
                               
                                <div class="card-body col-12 text-center">
                                    
                                    
                                    <p class="stagger4 animated fadeInLeft text-justify">CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such as colors, backgrounds, fonts etc. <a href="https://www.tutorialrepublic.com/css-tutorial/" target="_blank">Learn more.</a></p>
                                </div>
                                
                            </div>
                           <hr class="hr"/>
                        </div>
                    </div>
                </div>


            </div>

            
            <div class="row">
                <div id="collapseFour" class="collapse col-12" aria-labelledby="headingFour" data-parent="#accordionMd">
                    <div class="card-body">
                        <div class="work_detail">
                            <div class="row">
                               
                                
                                <div class="card-header col-md-12 text-center">
                                    <h2 class="stagger1 animated fadeInLeft">Ma Réalisation </h2>
                                    <p class="stagger2 animated fadeInLeft text-muted"><em>HTML</em></p>
                                    
                                    <div class="row stagger3">
                                        
                                        <div class="col-md-2"></div>
                                     
                                    <!-- Carousel -->
                                    
                                    
                                    <div class="col-md-8 carousel carousel-fade">

                                        <ol class="carousel-indicators">

                                            <li class="active"></li>

                                            <li></li>

                                            <li></li>

                                        </ol>

                                        <div class="carousel-inner">

                                            <div class="carousel-item active">

                                            <img class="d-block w-100" src="https://picsum.photos/200" alt="First slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                            <div class="carousel-item">

                                           <img class="d-block w-100" src="https://picsum.photos/id/237/200/300" alt="Second slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                            <div class="carousel-item">

                                            <img class="d-block w-100" src="https://picsum.photos/200/300/?blur" alt="Third slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                       
                                    <!-------------------->
                                    
                                    <div class="col-md-2"></div>
                                        
                                    </div>

                                </div>
                                
                            </div>
                            
                            <div class="row">
                                <div class="card-body col-12 text-center">
                                    
                                    
                                    <p class="stagger4 animated fadeInLeft text-justify">HTML stands for HyperText Markup Language. HTML is the standard markup language for describing the structure of web pages. <a href="https://www.tutorialrepublic.com/html-tutorial/" target="_blank">Learn more.</a></p>
                                </div>
                            </div>
                           <hr class="hr"/>
                        </div> 
                    </div>
                </div>

            </div>


            
            
            <div class="row">
                
                <div class="card col-6">
                    <div class="card-header" id="headingFive">
                        <h2 class="mb-0 text-center">
                            <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive"><img class="card-img-top"src="https://picsum.photos/200" alt=""><div class="card-img-overlay text-center d-flex flex-column justify-content-center">What is Bootstrap?</div></button>
                        </h2>
                    </div>

                </div>
                <div class="card col-6">
                    <div class="card-header" id="headingSix">
                        <h2 class="mb-0 text-center">
                            <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix"><img class="card-img-top"src="https://picsum.photos/200" alt=""><div class="card-img-overlay text-center d-flex flex-column justify-content-center">What is CSS?</div></button>                     
                        </h2>
                    </div>

                </div>
                
                
            </div>
            
            
            <div class="row">
                    <div id="collapseFive" class="collapse col-12" aria-labelledby="headingFive" data-parent="#accordionMd">
                    <div class="card-body">
                        <div class="work_detail">
                            <div class="row">
                               
                                <div class="card-header col-md-12 text-center">
                                    <h2 class="stagger1 animated fadeInLeft">Ma Réalisation </h2>
                                    <p class="stagger2 animated fadeInLeft text-muted"><em>BOOTSTRAP</em></p>
                                    
                                    <div class="row stagger3">
                                        
                                        <div class="col-md-2"></div>
                                     
                                    <!-- Carousel -->
                                    
                                    
                                    <div class="col-md-8 carousel carousel-fade">

                                        <ol class="carousel-indicators">

                                            <li class="active"></li>

                                            <li></li>

                                            <li></li>

                                        </ol>

                                        <div class="carousel-inner">

                                            <div class="carousel-item active">

                                            <img class="d-block w-100" src="https://picsum.photos/200" alt="First slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                            <div class="carousel-item">

                                           <img class="d-block w-100" src="https://picsum.photos/id/237/200/300" alt="Second slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                            <div class="carousel-item">

                                            <img class="d-block w-100" src="https://picsum.photos/200/300/?blur" alt="Third slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                       
                                    <!-------------------->
                                    
                                    <div class="col-md-2"></div>
                                        
                                    </div>

                                </div>
                                
                            </div>
                            
                            <div class="row">
                                <div class="card-body col-12 text-center">
                                    
                                    
                                    <p class="stagger4 animated fadeInLeft text-justify">Bootstrap is a sleek, intuitive, and powerful front-end framework for faster and easier web development. It is a collection of CSS and HTML conventions. <a href="https://www.tutorialrepublic.com/twitter-bootstrap-tutorial/" target="_blank">Learn more.</a></p>
                                </div>
                            </div>
                           <hr class="hr"/>
                        </div> 
                    </div>
                </div>


            </div>

            <div class="row">
                <div id="collapseSix" class="collapse col-12" aria-labelledby="headingSix" data-parent="#accordionMd">
                    <div class="card-body">  
                        <div class="work_detail">
                            <div class="row">
                                
                                <div class="card-header col-md-12 text-center">
                                    <h2 class="stagger1 animated fadeInLeft">Ma Réalisation </h2>
                                    <p class="stagger2 animated fadeInLeft text-muted"><em>CSS</em></p>
                                    
                                    <div class="row stagger3">
                                        
                                        <div class="col-md-2"></div>
                                     
                                    <!-- Carousel -->
                                    
                                    
                                    <div class="col-md-8 carousel carousel-fade">

                                        <ol class="carousel-indicators">

                                            <li class="active"></li>

                                            <li></li>

                                            <li></li>

                                        </ol>

                                        <div class="carousel-inner">

                                            <div class="carousel-item active">

                                            <img class="d-block w-100" src="https://picsum.photos/200" alt="First slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                            <div class="carousel-item">

                                           <img class="d-block w-100" src="https://picsum.photos/id/237/200/300" alt="Second slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                            <div class="carousel-item">

                                            <img class="d-block w-100" src="https://picsum.photos/200/300/?blur" alt="Third slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                       
                                    <!-------------------->
                                    
                                    <div class="col-md-2"></div>
                                        
                                    </div>

                                </div>
                                
                            </div>
                               
                            <div class="row">
                                <div class="card-body col-12 text-center">
                                    
                                    
                                    <p class="stagger4 animated fadeInLeft text-justify">CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such as colors, backgrounds, fonts etc. <a href="https://www.tutorialrepublic.com/css-tutorial/" target="_blank">Learn more.</a></p>
                                </div>
                            </div>
                           <hr class="hr"/>
                        </div>
                    </div>
                </div>


            </div>
            
            
            
            <div class="row">

                <div class="card col-6">
                    <div class="card-header" id="headingSeven">
                        <h2 class="mb-0 text-center">
                            <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseSeven"><img class="card-img-top"src="https://picsum.photos/200" alt=""><div class="card-img-overlay text-center d-flex flex-column justify-content-center">What is HTML?</div></button>									
                        </h2>
                    </div>

                </div>
                <div class="card col-6">
                    <div class="card-header" id="headingHeight">
                        <h2 class="mb-0 text-center">
                            <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseHeight"><img class="card-img-top"src="https://picsum.photos/200" alt=""><div class="card-img-overlay text-center d-flex flex-column justify-content-center">What is Bootstrap?</div></button>
                        </h2>
                    </div>

                </div>

            </div>

            <div class="row">
                 <div id="collapseSeven" class="collapse col-12" aria-labelledby="headingSeven" data-parent="#accordionMd">
                    <div class="card-body">
                        <div class="work_detail">
                            <div class="row">
                               
                                <div class="card-header col-md-12 text-center">
                                    <h2 class="stagger1 animated fadeInLeft">Ma Réalisation </h2>
                                    <p class="stagger2 animated fadeInLeft text-muted"><em>HTML</em></p>
                                    
                                    <div class="row stagger3">
                                        
                                        <div class="col-md-2"></div>
                                     
                                    <!-- Carousel -->
                                    
                                    
                                    <div class="col-md-8 carousel carousel-fade">

                                        <ol class="carousel-indicators">

                                            <li class="active"></li>

                                            <li></li>

                                            <li></li>

                                        </ol>

                                        <div class="carousel-inner">

                                            <div class="carousel-item active">

                                            <img class="d-block w-100" src="https://picsum.photos/200" alt="First slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                            <div class="carousel-item">

                                           <img class="d-block w-100" src="https://picsum.photos/id/237/200/300" alt="Second slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                            <div class="carousel-item">

                                            <img class="d-block w-100" src="https://picsum.photos/200/300/?blur" alt="Third slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                       
                                    <!-------------------->
                                    
                                    <div class="col-md-2"></div>
                                        
                                    </div>

                                </div>
                                
                            </div>
                               
                            <div class="row">
                                <div class="card-muted col-12 text-center">
                                    
                                    
                                    <p class="stagger4 animated fadeInLeft text-justify">HTML stands for HyperText Markup Language. HTML is the standard markup language for describing the structure of web pages. <a href="https://www.tutorialrepublic.com/html-tutorial/" target="_blank">Learn more.</a></p>
                                </div>
                            </div>
                           <hr class="hr"/>
                        </div>
                    </div>
                </div>


            </div>

            <div class="row">
                <div id="collapseHeight" class="collapse col-12" aria-labelledby="headingHeight" data-parent="#accordionMd">
                    <div class="card-body">
                        <div class="work_detail">
                            <div class="row">
                               
                                <div class="card-header col-md-12 text-center">
                                    <h2 class="stagger1 animated fadeInLeft">Ma Réalisation </h2>
                                    <p class="stagger2 animated fadeInLeft text-muted"><em>BOOTSTRAP</em></p>
                                    
                                    <div class="row stagger3">
                                        
                                        <div class="col-md-2"></div>
                                     
                                    <!-- Carousel -->
                                    
                                    
                                    <div class="col-md-8 carousel carousel-fade">

                                        <ol class="carousel-indicators">

                                            <li class="active"></li>

                                            <li></li>

                                            <li></li>

                                        </ol>

                                        <div class="carousel-inner">

                                            <div class="carousel-item active">

                                            <img class="d-block w-100" src="https://picsum.photos/200" alt="First slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                            <div class="carousel-item">

                                           <img class="d-block w-100" src="https://picsum.photos/id/237/200/300" alt="Second slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                            <div class="carousel-item">

                                            <img class="d-block w-100" src="https://picsum.photos/200/300/?blur" alt="Third slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                       
                                    <!-------------------->
                                    
                                    <div class="col-md-2"></div>
                                        
                                    </div>

                                </div>
                                
                            </div>
                            
                            <div class="row">
                                <div class="card-body col-12 text-center">
                                    
                                    
                                    <p class="stagger4 animated fadeInLeft text-justify">Bootstrap is a sleek, intuitive, and powerful front-end framework for faster and easier web development. It is a collection of CSS and HTML conventions. <a href="https://www.tutorialrepublic.com/twitter-bootstrap-tutorial/" target="_blank">Learn more.</a></p>
                                </div>
                            </div>
                           <hr class="hr"/>
                        </div>
                    </div>
                </div>


            </div>

       
            <div class="row">
                <div class="card col-6">
                        <div class="card-header" id="headingNine">
                            <h2 class="mb-0 text-center">
                                <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseNine"><img class="card-img-top"src="https://picsum.photos/200" alt=""><div class="card-img-overlay text-center d-flex flex-column justify-content-center">What is CSS?</div></button>                     
                            </h2>
                        </div>

                </div>
            </div>
            
            <div class="row">
                <div id="collapseNine" class="collapse col-12" aria-labelledby="headingNine" data-parent="#accordionMd">
                    <div class="card-body">
                        <div class="work_detail">
                            <div class="row">
                               
                                <div class="card-header col-md-12 text-center">
                                    <h2 class="stagger1 animated fadeInLeft">Ma Réalisation </h2>
                                    <p class="stagger2 animated fadeInLeft text-muted"><em>CSS</em></p>
                                    
                                    <div class="row stagger3">
                                        
                                        <div class="col-md-2"></div>
                                     
                                    <!-- Carousel -->
                                    
                                    
                                    <div class="col-md-8 carousel carousel-fade">

                                        <ol class="carousel-indicators">

                                            <li class="active"></li>

                                            <li></li>

                                            <li></li>

                                        </ol>

                                        <div class="carousel-inner">

                                            <div class="carousel-item active">

                                            <img class="d-block w-100" src="https://picsum.photos/200" alt="First slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                            <div class="carousel-item">

                                           <img class="d-block w-100" src="https://picsum.photos/id/237/200/300" alt="Second slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                            <div class="carousel-item">

                                            <img class="d-block w-100" src="https://picsum.photos/200/300/?blur" alt="Third slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                       
                                    <!-------------------->
                                    
                                    <div class="col-md-2"></div>
                                        
                                    </div>

                                </div>
                                
                            </div>
                            
                            <div class="row">
                                <div class="card-body col-12 text-center">
                                    
                                    
                                    <p class="stagger4 animated fadeInLeft text-justify">CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such as colors, backgrounds, fonts etc. <a href="https://www.tutorialrepublic.com/css-tutorial/" target="_blank">Learn more.</a></p>
                                </div>
                            </div>
                           <hr class="hr"/>
                        </div> 
                    </div>
                </div>


            </div>

        </div><!-- end #accordion2 -->
        
        
        
        
        
        
        <!--
        <br />
        <br />
        <br />
        <br />
        <hr />
        <br />
        <br />
        <br />
        <br />
        -->
    
        
        <!-- accordion 3 for md screen -->
        <div class="accordion" id="accordionSm">

           <div class="row">

                <div class="card col-md-4">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0 text-center">
                            <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"><img class="card-img-top"src="https://picsum.photos/200" alt=""><div class="card-img-overlay text-center d-flex flex-column justify-content-center">What is HTML?</div></button>				
                        </h2>
                    </div>
                </div>
            
                <div id="collapseOne" class="collapse col-12" aria-labelledby="headingOne" data-parent="#accordionSm">
                    <div class="card-body">

                        <div class="work_detail">
                            <div class="row">
                                
                                <div class="card-header col-md-12 text-center">
                                    <h2 class="stagger1 animated fadeInLeft">Ma Réalisation </h2>
                                    <p class="stagger2 animated fadeInLeft text-muted"><em>HTML</em></p>
                                    
                                    <div class="row stagger3">
                                        
                                        <div class="col-md-2"></div>
                                     
                                    <!-- Carousel -->
                                    
                                    
                                    <div class="col-md-8 carousel carousel-fade">

                                        <ol class="carousel-indicators">

                                            <li class="active"></li>

                                            <li></li>

                                            <li></li>

                                        </ol>

                                        <div class="carousel-inner">

                                            <div class="carousel-item active">

                                            <img class="d-block w-100" src="https://picsum.photos/200" alt="First slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                            <div class="carousel-item">

                                           <img class="d-block w-100" src="https://picsum.photos/id/237/200/300" alt="Second slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                            <div class="carousel-item">

                                            <img class="d-block w-100" src="https://picsum.photos/200/300/?blur" alt="Third slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                       
                                    <!-------------------->
                                    
                                    <div class="col-md-2"></div>
                                        
                                    </div>

                                </div>
                                
                            </div>
                            
                            <div class="row">
                               
                                
                                <div class="card-body col-12 text-center">
                                    
                                    
                                    <p class="stagger4 animated fadeInLeft text-justify">HTML stands for HyperText Markup Language. HTML is the standard markup language for describing the structure of web pages. <a href="https://www.tutorialrepublic.com/html-tutorial/" target="_blank">Learn more.</a></p>
                                </div>
                                
                            </div>
                           <hr class="hr"/>
                        </div>
                    </div>
                </div>
            </div>
               
            <div class="row">
                <div class="card col-md-4">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0 text-center">
                            <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"><img class="card-img-top"src="https://picsum.photos/200" alt=""><div class="card-img-overlay text-center d-flex flex-column justify-content-center">What is Bootstrap?</div></button>
                        </h2>
                    </div>
                </div>
            
                <div id="collapseTwo" class="collapse col-12" aria-labelledby="headingTwo" data-parent="#accordionSm">
                    <div class="card-body">
                        <div class="work_detail">
                            <div class="row">
                               
                                <div class="card-header col-md-12 text-center">
                                    <h2 class="stagger1 animated fadeInLeft">Ma Réalisation </h2>
                                    <p class="stagger2 animated fadeInLeft text-muted"><em>BOOTSTRAP</em></p>
                                    
                                    <div class="row stagger3">
                                        
                                        <div class="col-md-2"></div>
                                     
                                    <!-- Carousel -->
                                    
                                    
                                    <div class="col-md-8 carousel carousel-fade">

                                        <ol class="carousel-indicators">

                                            <li class="active"></li>

                                            <li></li>

                                            <li></li>

                                        </ol>

                                        <div class="carousel-inner">

                                            <div class="carousel-item active">

                                            <img class="d-block w-100" src="https://picsum.photos/200" alt="First slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                            <div class="carousel-item">

                                           <img class="d-block w-100" src="https://picsum.photos/id/237/200/300" alt="Second slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                            <div class="carousel-item">

                                            <img class="d-block w-100" src="https://picsum.photos/200/300/?blur" alt="Third slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                       
                                    <!-------------------->
                                    
                                    <div class="col-md-2"></div>
                                        
                                    </div>

                                </div>
                                
                            </div>
                            
                            <div class="row">
                               
                                <div class="card-body col-12 text-center">
                                    
                                    
                                    <p class="stagger4 animated fadeInLeft text-justify">Bootstrap is a sleek, intuitive, and powerful front-end framework for faster and easier web development. It is a collection of CSS and HTML conventions. <a href="https://www.tutorialrepublic.com/twitter-bootstrap-tutorial/" target="_blank">Learn more.</a></p>
                                </div>
                                
                            </div>
                           <hr class="hr"/>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="card col-md-4">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0 text-center">
                            <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"><img class="card-img-top"src="https://picsum.photos/200" alt=""><div class="card-img-overlay text-center d-flex flex-column justify-content-center">What is CSS?</div></button>                     
                        </h2>
                    </div>

                </div>
            
                <div id="collapseThree" class="collapse col-12" aria-labelledby="headingThree" data-parent="#accordionSm">
                    <div class="card-body">
                        <div class="work_detail">
                            <div class="row">
                               
                                <div class="card-header col-md-12 text-center">
                                    <h2 class="stagger1 animated fadeInLeft">Ma Réalisation </h2>
                                    <p class="stagger2 animated fadeInLeft text-muted"><em>CSS</em></p>
                                    
                                    <div class="row stagger3">
                                        
                                        <div class="col-md-2"></div>
                                     
                                    <!-- Carousel -->
                                    
                                    
                                    <div class="col-md-8 carousel carousel-fade">

                                        <ol class="carousel-indicators">

                                            <li class="active"></li>

                                            <li></li>

                                            <li></li>

                                        </ol>

                                        <div class="carousel-inner">

                                            <div class="carousel-item active">

                                            <img class="d-block w-100" src="https://picsum.photos/200" alt="First slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                            <div class="carousel-item">

                                           <img class="d-block w-100" src="https://picsum.photos/id/237/200/300" alt="Second slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                            <div class="carousel-item">

                                            <img class="d-block w-100" src="https://picsum.photos/200/300/?blur" alt="Third slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                       
                                    <!-------------------->
                                    
                                    <div class="col-md-2"></div>
                                        
                                    </div>

                                </div>
                                
                            </div>
                            
                            <div class="row">
                               
                                <div class="card-body col-12 text-center">
                                    
                                    
                                    <p class="stagger4 animated fadeInLeft text-justify">CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such as colors, backgrounds, fonts etc. <a href="https://www.tutorialrepublic.com/css-tutorial/" target="_blank">Learn more.</a></p>
                                </div>
                                
                            </div>
                           <hr class="hr"/>
                        </div>
                    </div>
                </div>
            </div>

           <div class="row">

                <div class="card col-md-4">
                    <div class="card-header" id="headingFour">
                        <h2 class="mb-0 text-center">
                            <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseFour"><img class="card-img-top"src="https://picsum.photos/200" alt=""><div class="card-img-overlay text-center d-flex flex-column justify-content-center">What is HTML?</div></button>
                        </h2>
                    </div>
                </div>
            
                <div id="collapseFour" class="collapse col-12" aria-labelledby="headingFour" data-parent="#accordionSm">
                    <div class="card-body">
                        <div class="work_detail">
                            <div class="row">
                               
                                
                                <div class="card-header col-md-12 text-center">
                                    <h2 class="stagger1 animated fadeInLeft">Ma Réalisation </h2>
                                    <p class="stagger2 animated fadeInLeft text-muted"><em>HTML</em></p>
                                    
                                    <div class="row stagger3">
                                        
                                        <div class="col-md-2"></div>
                                     
                                    <!-- Carousel -->
                                    
                                    
                                    <div class="col-md-8 carousel carousel-fade">

                                        <ol class="carousel-indicators">

                                            <li class="active"></li>

                                            <li></li>

                                            <li></li>

                                        </ol>

                                        <div class="carousel-inner">

                                            <div class="carousel-item active">

                                            <img class="d-block w-100" src="https://picsum.photos/200" alt="First slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                            <div class="carousel-item">

                                           <img class="d-block w-100" src="https://picsum.photos/id/237/200/300" alt="Second slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                            <div class="carousel-item">

                                            <img class="d-block w-100" src="https://picsum.photos/200/300/?blur" alt="Third slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                       
                                    <!-------------------->
                                    
                                    <div class="col-md-2"></div>
                                        
                                    </div>

                                </div>
                                
                            </div>
                            
                            <div class="row">
                                <div class="card-body col-12 text-center">
                                    
                                    
                                    <p class="stagger4 animated fadeInLeft text-justify">HTML stands for HyperText Markup Language. HTML is the standard markup language for describing the structure of web pages. <a href="https://www.tutorialrepublic.com/html-tutorial/" target="_blank">Learn more.</a></p>
                                </div>
                            </div>
                           <hr class="hr"/>
                        </div> 
                    </div>
                </div>
            </div>
            
            <div class="row">   
                <div class="card col-md-4">
                    <div class="card-header" id="headingFive">
                        <h2 class="mb-0 text-center">
                            <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive"><img class="card-img-top"src="https://picsum.photos/200" alt=""><div class="card-img-overlay text-center d-flex flex-column justify-content-center">What is Bootstrap?</div></button>
                        </h2>
                    </div>
                </div>
            
                <div id="collapseFive" class="collapse col-12" aria-labelledby="headingFive" data-parent="#accordionSm">
                    <div class="card-body">
                        <div class="work_detail">
                            <div class="row">
                               
                                <div class="card-header col-md-12 text-center">
                                    <h2 class="stagger1 animated fadeInLeft">Ma Réalisation </h2>
                                    <p class="stagger2 animated fadeInLeft text-muted"><em>BOOTSTRAP</em></p>
                                    
                                    <div class="row stagger3">
                                        
                                        <div class="col-md-2"></div>
                                     
                                    <!-- Carousel -->
                                    
                                    
                                    <div class="col-md-8 carousel carousel-fade">

                                        <ol class="carousel-indicators">

                                            <li class="active"></li>

                                            <li></li>

                                            <li></li>

                                        </ol>

                                        <div class="carousel-inner">

                                            <div class="carousel-item active">

                                            <img class="d-block w-100" src="https://picsum.photos/200" alt="First slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                            <div class="carousel-item">

                                           <img class="d-block w-100" src="https://picsum.photos/id/237/200/300" alt="Second slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                            <div class="carousel-item">

                                            <img class="d-block w-100" src="https://picsum.photos/200/300/?blur" alt="Third slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                       
                                    <!-------------------->
                                    
                                    <div class="col-md-2"></div>
                                        
                                    </div>

                                </div>
                                
                            </div>
                            
                            <div class="row">
                                <div class="card-body col-12 text-center">
                                    
                                    
                                    <p class="stagger4 animated fadeInLeft text-justify">Bootstrap is a sleek, intuitive, and powerful front-end framework for faster and easier web development. It is a collection of CSS and HTML conventions. <a href="https://www.tutorialrepublic.com/twitter-bootstrap-tutorial/" target="_blank">Learn more.</a></p>
                                </div>
                            </div>
                           <hr class="hr"/>
                        </div> 
                    </div>
                </div>
            </div>
            
            <div class="row">  
                <div class="card col-md-4">
                    <div class="card-header" id="headingSix">
                        <h2 class="mb-0 text-center">
                            <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix"><img class="card-img-top"src="https://picsum.photos/200" alt=""><div class="card-img-overlay text-center d-flex flex-column justify-content-center">What is CSS?</div></button>                     
                        </h2>
                    </div>

                </div>

            
                <div id="collapseSix" class="collapse col-12" aria-labelledby="headingSix" data-parent="#accordionSm">
                    <div class="card-body">  
                        <div class="work_detail">
                            <div class="row">
                                
                                <div class="card-header col-md-12 text-center">
                                    <h2 class="stagger1 animated fadeInLeft">Ma Réalisation </h2>
                                    <p class="stagger2 animated fadeInLeft text-muted"><em>CSS</em></p>
                                    
                                    <div class="row stagger3">
                                        
                                        <div class="col-md-2"></div>
                                     
                                    <!-- Carousel -->
                                    
                                    
                                    <div class="col-md-8 carousel carousel-fade">

                                        <ol class="carousel-indicators">

                                            <li class="active"></li>

                                            <li></li>

                                            <li></li>

                                        </ol>

                                        <div class="carousel-inner">

                                            <div class="carousel-item active">

                                            <img class="d-block w-100" src="https://picsum.photos/200" alt="First slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                            <div class="carousel-item">

                                           <img class="d-block w-100" src="https://picsum.photos/id/237/200/300" alt="Second slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                            <div class="carousel-item">

                                            <img class="d-block w-100" src="https://picsum.photos/200/300/?blur" alt="Third slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                       
                                    <!-------------------->
                                    
                                    <div class="col-md-2"></div>
                                        
                                    </div>

                                </div>
                                
                            </div>
                               
                            <div class="row">
                                <div class="card-body col-12 text-center">
                                    
                                    
                                    <p class="stagger4 animated fadeInLeft text-justify">CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such as colors, backgrounds, fonts etc. <a href="https://www.tutorialrepublic.com/css-tutorial/" target="_blank">Learn more.</a></p>
                                </div>
                            </div>
                           <hr class="hr"/>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="row">

                <div class="card col-md-4">
                    <div class="card-header" id="headingSeven">
                        <h2 class="mb-0 text-center">
                            <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseSeven"><img class="card-img-top"src="https://picsum.photos/200" alt=""><div class="card-img-overlay text-center d-flex flex-column justify-content-center">What is HTML?</div></button>
                        </h2>
                    </div>
                </div>
            
                <div id="collapseSeven" class="collapse col-12" aria-labelledby="headingSeven" data-parent="#accordionSm">
                    <div class="card-body">
                        <div class="work_detail">
                            <div class="row">
                               
                                <div class="card-header col-md-12 text-center">
                                    <h2 class="stagger1 animated fadeInLeft">Ma Réalisation </h2>
                                    <p class="stagger2 animated fadeInLeft text-muted"><em>HTML</em></p>
                                    
                                    <div class="row stagger3">
                                        
                                        <div class="col-md-2"></div>
                                     
                                    <!-- Carousel -->
                                    
                                    
                                    <div class="col-md-8 carousel carousel-fade">

                                        <ol class="carousel-indicators">

                                            <li class="active"></li>

                                            <li></li>

                                            <li></li>

                                        </ol>

                                        <div class="carousel-inner">

                                            <div class="carousel-item active">

                                            <img class="d-block w-100" src="https://picsum.photos/200" alt="First slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                            <div class="carousel-item">

                                           <img class="d-block w-100" src="https://picsum.photos/id/237/200/300" alt="Second slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                            <div class="carousel-item">

                                            <img class="d-block w-100" src="https://picsum.photos/200/300/?blur" alt="Third slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                       
                                    <!-------------------->
                                    
                                    <div class="col-md-2"></div>
                                        
                                    </div>

                                </div>
                                
                            </div>
                               
                            <div class="row">
                                <div class="card-body col-12 text-center">
                                    
                                    
                                    <p class="stagger4 animated fadeInLeft text-justify">HTML stands for HyperText Markup Language. HTML is the standard markup language for describing the structure of web pages. <a href="https://www.tutorialrepublic.com/html-tutorial/" target="_blank">Learn more.</a></p>
                                </div>
                            </div>
                           <hr class="hr"/>
                        </div>
                    </div>
                </div>
            </div>
             
            <div class="row"> 
                <div class="card col-md-4">
                    <div class="card-header" id="headingHeight">
                        <h2 class="mb-0 text-center">
                            <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseHeight"><img class="card-img-top"src="https://picsum.photos/200" alt=""><div class="card-img-overlay text-center d-flex flex-column justify-content-center">What is Bootstrap?</div></button>
                        </h2>
                    </div>
                </div>
            
                <div id="collapseHeight" class="collapse col-12" aria-labelledby="headingHeight" data-parent="#accordionSm">
                    <div class="card-body">
                        <div class="work_detail">
                            <div class="row">
                               
                                <div class="card-header col-md-12 text-center">
                                    <h2 class="stagger1 animated fadeInLeft">Ma Réalisation </h2>
                                    <p class="stagger2 animated fadeInLeft text-muted"><em>BOOTSTRAP</em></p>
                                    
                                    <div class="row stagger3">
                                        
                                        <div class="col-md-2"></div>
                                     
                                    <!-- Carousel -->
                                    
                                    
                                    <div class="col-md-8 carousel carousel-fade">

                                        <ol class="carousel-indicators">

                                            <li class="active"></li>

                                            <li></li>

                                            <li></li>

                                        </ol>

                                        <div class="carousel-inner">

                                            <div class="carousel-item active">

                                            <img class="d-block w-100" src="https://picsum.photos/200" alt="First slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                            <div class="carousel-item">

                                           <img class="d-block w-100" src="https://picsum.photos/id/237/200/300" alt="Second slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                            <div class="carousel-item">

                                            <img class="d-block w-100" src="https://picsum.photos/200/300/?blur" alt="Third slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                       
                                    <!-------------------->
                                    
                                    <div class="col-md-2"></div>
                                        
                                    </div>

                                </div>
                                
                            </div>
                            
                            <div class="row">
                                <div class="card-body col-12 text-center">
                                    
                                    
                                    <p class="stagger4 animated fadeInLeft text-justify">Bootstrap is a sleek, intuitive, and powerful front-end framework for faster and easier web development. It is a collection of CSS and HTML conventions. <a href="https://www.tutorialrepublic.com/twitter-bootstrap-tutorial/" target="_blank">Learn more.</a></p>
                                </div>
                            </div>
                           <hr class="hr"/>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="card col-md-4">
                    <div class="card-header" id="headingNine">
                        <h2 class="mb-0 text-center">
                            <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseNine"><img class="card-img-top"src="https://picsum.photos/200" alt=""><div class="card-img-overlay text-center d-flex flex-column justify-content-center">What is CSS?</div></button>          
                        </h2>
                    </div>
                </div>
            
                <div id="collapseNine" class="collapse col-12" aria-labelledby="headingNine" data-parent="#accordionSm">
                    <div class="card-body">
                        <div class="work_detail">
                            <div class="row">
                               
                                <div class="card-header col-md-12 text-center">
                                    <h2 class="stagger1 animated fadeInLeft">Ma Réalisation </h2>
                                    <p class="stagger2 animated fadeInLeft text-muted"><em>CSS</em></p>
                                    
                                    <div class="row stagger3">
                                        
                                        <div class="col-md-2"></div>
                                     
                                    <!-- Carousel -->
                                    
                                    
                                    <div class="col-md-8 carousel carousel-fade">

                                        <ol class="carousel-indicators">

                                            <li class="active"></li>

                                            <li></li>

                                            <li></li>

                                        </ol>

                                        <div class="carousel-inner">

                                            <div class="carousel-item active">

                                            <img class="d-block w-100" src="https://picsum.photos/200" alt="First slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                            <div class="carousel-item">

                                           <img class="d-block w-100" src="https://picsum.photos/id/237/200/300" alt="Second slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                            <div class="carousel-item">

                                            <img class="d-block w-100" src="https://picsum.photos/200/300/?blur" alt="Third slide">

                                                <div class="carousel-caption d-md-block">

                                                <h2></h2>

                                                <p class="lead"></p>

                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                       
                                    <!-------------------->
                                    
                                    <div class="col-md-2"></div>
                                        
                                    </div>

                                </div>
                                
                            </div>
                            
                            <div class="row">
                                <div class="col-12 text-center">
                                    
                                    
                                    <p class="stagger4 animated fadeInLeft text-justify">CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such as colors, backgrounds, fonts etc. <a href="https://www.tutorialrepublic.com/css-tutorial/" target="_blank">Learn more.</a></p>
                                </div>
                            </div>
                           <hr class="hr"/>
                        </div> 
                    </div>
                </div>
            </div>


        </div><!-- end #accordion2 -->
        
      
        
    </div><!-- end .works -->
       
<!-- JAVASCRIPT -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<!-- slideshow -->
<script src="Content/JS/work.js"></script>
<!--<script src="jquery.nivo.slider.pack.js"></script>-->


    
