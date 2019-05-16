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

