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
<div class="container">

 <!-- Numéro des colonnes -->
<?php for($j = 1; $j <=3; $j++): ?> 

    <div class="row justify-content">
       
       <!-- Numéro des lignes -->
       <?php for($i = 1; $i <= 4; $i++): ?>
       
        <hr class="hr"/>
        
        <article class="col-xs-3 work" id="realisation-<?= $j . '-' . $i ?>">
            
            <img class="img-content" src="https://picsum.photos/200/300?grayscale<?= $i ?>" alt=""/>
            
            <br />
            
            <strong>Ma réalisation <?= $j . '-' . $i ?></strong><br/>
            <em>Projet OC</em>
            
            <br />
           
            
            
            <div class="work_detail">
                
                <div class="row">
        
        
          
                   <div class="col-4">

                       <div class="work_slideshow stagger4">
                           
                           
                           <img src="https://picsum.photos/200" alt="" />
                           <img src="https://picsum.photos/id/237/200/300" alt="" />
                           <img src="https://picsum.photos/200/300/?blur" alt="" />
                           
                           
                       </div>

                   </div>
                    
                    
                   <div class="col-8">

                       <h2 class="stagger1">Mon Projet <?= $j . '-' . $i ?></h2>
                       <p class="stagger2"><em>Projet OC</em></p>
                       <p class="stagger3">Primi igitur omnium statuuntur Epigonus et Eusebius ob nominum gentilitatem oppressi. praediximus enim Montium sub ipso vivendi termino his vocabulis appellatos fabricarum culpasse tribunos ut adminicula futurae molitioni pollicitos.<br /><br /><a>Lien Github</a></p>

                   </div>

       
           
               </div>
                
                <hr class="hr"/>
                
            </div>
            
            
            
        </article>
        
        <?php endfor; ?>
        
    </div>
    
    <hr class="hr"/>
    
    <div class="row row-detail">
       
       
       
       
       
       
         
    </div>
    
     
    
    
<?php endfor; ?>  
</div>     
    





<!-- JAVASCRIPT -->



<!--
<script src="https://code.jquery.com/jquery-2.1.1.min.js" integrity="sha256-h0cGsrExGgcZtSZ/fRz4AwV+Nn6Urh/3v3jFRQ0w9dQ=" crossorigin="anonymous"></script>
-->
