<?php $this->title = 'Portfolio'; ?>



<h1 class="text-center titlePage"><?= $this->title = 'Portfolio - Mes certificats' ?></h1>
<br/>
<br/>
<br/>


<!--


<?php
/* $aboutWork est la variable provenant de WorkManager.php qui envoie en tableau d'objets "works" donc pour chaque objet, on fait une boucle renvoyant les données de chaque objet "Work"  ( dans la méthode "getWorkDescription()" d' "WorkManager.php" qui insatncie l'entité "Work" en objet )*/
    
    
    
/////////////////////////////////////////////////////////////////////////////////////

/*

echo 'tableau d\'objets où chaque objet contient un tableau de données de la BDD :';
var_dump($aboutCertificate); 
echo '<hr>';
foreach ($aboutCertificate as $eachCertificate): ?>



<?php var_dump($eachCertificate); ?>
<fieldset>
    <article>
       
            id: <?= $eachCertificate->id(); ?><br />name:<?= $eachCertificate->name(); ?><br />slug: <?php var_dump($eachCertificate->slug()); ?><br />categorie_id: <?php var_dump($eachCertificate->categiryid()); ?>
            
        
    </article>
</fieldset>
    <hr />




<?php endforeach; ?>

*/
///////////////////////////////////////////////////////////////////////////////////////
?>
-->




<hr class="hr"/>









<div class="container">
    <?php for($j = 1; $j <= 3; $j++): ?>
    <div class="row justify-content">
        <?php for($i = 1; $i <= 4; $i++): ?>
        <article class="col-xs-3 certificate" id="certificate-<?= $j . '-' . $i ?>">
            
            <img src="https://picsum.photos/id/870/200/300?grayscale&blur=<?= $i ?>" alt="" /><br />
            
            <strong>Mon certificat <?= $j . '-' . $i ?></strong><br />
            <em>HTML</em>
            
            <div class="certificate_detail">
            
                <div class="row">
                  
                    <div class="col-4">

                    <img class="img-content stagger4" src="https://picsum.photos/id/237/200/300" alt="" />

                    </div>

                    <div class="col-8">

                        <h2 class="stagger1">Mon Certificat <?= $j . '-' . $i ?></h2>
                        <p class="stagger2"><em>HTML</em></p>
                        <p class="stagger3">Paphius quin etiam et Cornelius senatores, ambo venenorum artibus pravis se polluisse confessi, eodem pronuntiante Maximino sunt interfecti. pari sorte etiam procurator monetae extinctus est. Sericum enim et Asbolium supra dictos, quoniam cum hortaretur passim nominare, quos vellent, adiecta religione firmarat, nullum igni vel ferro se puniri iussurum, plumbi validis ictibus interemit. et post hoe flammis Campensem aruspicem dedit, in negotio eius nullo sacramento constrictus.</p>

                    </div>
                    
                </div>

               <hr class="hr"/>
                
            </div>
            
            
            
            <div class="certificate_detail_mobile">
            
                <div class="row">
                 
                     <div class="col-md-4"></div>
                  
                    <div class="col-md-4">

                    <img class="img-content stagger4" src="https://picsum.photos/id/237/200/300" alt="" />

                    </div>
                    
                    <div class="col-md-4"></div>
                    
                </div> 
                  
                <div class="row">

                    <div class="col-md-12">

                        <h2 class="stagger1">Mon Certificat <?= $j . '-' . $i ?></h2>
                        <p class="stagger2"><em>HTML</em></p>
                        <p class="stagger3">Paphius quin etiam et Cornelius senatores, ambo venenorum artibus pravis se polluisse confessi, eodem pronuntiante Maximino sunt interfecti. pari sorte etiam procurator monetae extinctus est. Sericum enim et Asbolium supra dictos, quoniam cum hortaretur passim nominare, quos vellent, adiecta religione firmarat, nullum igni vel ferro se puniri iussurum, plumbi validis ictibus interemit. et post hoe flammis Campensem aruspicem dedit, in negotio eius nullo sacramento constrictus.</p>

                    </div>
                    
                </div>

               <hr class="hr"/>
                
            </div>
            
            <div class="row row-detail-mobile">
            
            
            
            </div><!-------- div.row-detail-mobile ------>
            
        </article>
        
        <?php endfor; ?>
        
    </div>
    <hr class="hr"/>
    <div class="row row-detail">
        
        
        
        
        
        
    </div>
    
    <?php endfor; ?>
    
    
    
    
</div>






<!-- JAVASCRIPT -->
