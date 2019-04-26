<?php $this->title = 'Portfolio'; 
/* $aboutUser est la variable provenant de UserManager.php qui envoie en tableau d'objets "users" donc pour chaque objet, on fait une boucle renvoyant les données de chaque objet "User"  ( dans la méthode "getUserDescription()" d' "UserManager.php" qui insatncie l'entité "user" en objet )*/

echo 'tableau d\'objets où chaque objet contient un tableau de données de la BDD :';
var_dump($aboutUser); 
echo '<hr>';
foreach ($aboutUser as $eachUser): ?>



<?php var_dump($eachUser); ?>
<fieldset>
    <article>
       
            <?= $eachUser->id(); ?>/<?= $eachUser->username(); ?>/<?php var_dump($eachUser->description()); ?>
            
        
    </article>
</fieldset>
    <hr />
<?php endforeach; ?>

<?php


?>


