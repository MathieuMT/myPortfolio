<?php $this->title = 'À Mon Propos'; ?>


<h1 class="text-center titlePage animated fadeInLeft"><?= $this->title = 'À Mon Propos' ?></h1>

<!--- PAGE À PROPOS --->

<section class="cover animated fadeInLeft">
    
    <div class="container">
        
        <div class="row text-justify">
            
            <div class="col-sm-2"></div>
            
            <div class="col-sm-8">
                
            <?php   foreach ($aboutUser as $eachUser): ?>

                <div class="bgColor p-5">
                    <article>
     
                       <h2 class="text-center">Bienvenue  sur mon portfolio</h2><br />
                        <p class="text-center"><b class="portfolioName"> - <?= $eachUser->username(); ?> - </b><br /></p> 
                        <p>je m'appelle <?= $eachUser->firstname(); ?>,<br/>
                            <?= $eachUser->description(); ?><br /><br />
                            En tant que <?= $eachUser->profession(); ?>, je reste à votre entière disposition pour pouvoir exercer et vivre de mon métier.<br /><br />
                         </p>
                        
                            
                         <div class="row text-center">
            
                            <div class="col-sm-12">

                                <button type="button" class="btn btn-primary mx-auto mt-3 btn_cv"><a class="cv" href="Content/img/users/CV/CV.pdf" download><img scr="Content/img/users/CV/CV.pdf" />Téléchager mon CV</a></button>

                            </div>

                        </div>

                    </article>
                </div>
                   
            <?php endforeach; ?>
                
                
            </div>
            
            <div class="col-sm-2"></div>

        </div>
        
        
        
        
    </div>
    
    
</section>












<!---END PAGE À PROPOS --->

